import uuid

from django.conf import settings
from django.contrib.auth.hashers import make_password, check_password
from django.contrib.auth.models import (User)
from django.db import connections
from django.db.utils import OperationalError
from django.utils.module_loading import import_module

from .models import AuthenticatorModel


def is_int(s):
    """
    Checks if the content is of type int or not.

    Parameters
    ----------
    s: int
        Input should be integer type.

    Returns
    -------
    bool: bool
        Returns True is the input is of type integer else returns False.

    """
    try:
        int(s)
        return True
    except ValueError:
        return False


def has_2fa(request):
    """
    Checks if `AuthenticatorModel` is associated with `User` model.

    Returns
    -------
    content: bool
        Returns True is if `AuthenticatorModel` is associated with `User` else returns False.
    """

    content = True

    try:
        user = User.objects.get(username=request.username)
    except User.DoesNotExist:
        content = False
        return content

    try:
        user_auth = user.auth_user.get(id=user.id)
    except AuthenticatorModel.DoesNotExist:
        content = False
        return content

    return content


def get_user_from_sid(session_key):
    """
    Returns users id bassed on the session.

    Parameters
    ----------
    session_key: str
        User session key.

    Returns
    -------
    uid: int
        Users id.
    """
    django_session_engine = import_module(settings.SESSION_ENGINE)
    session = django_session_engine.SessionStore(session_key)
    uid = session.get('_auth_user_id')
    return uid


def get_uuid_json():
    """
    Returns a JSON string of 10 UUID's.

    Returns
    -------
    content: dict
        A dictionary.

    """

    content = {"uuid": []}

    for i in range(10):
        content['uuid'].append(str(uuid.uuid4())[:13])

    return content


def generate_password(pwd, salt=None):
    """
    Generates a new password based on salt.

    Parameters
    ----------
    salt : str
        Alpha-numeric string.

    Returns
    -------
    hashed_password: str
        Hashed password.

    """
    hashed_password = make_password(pwd, salt)

    return hashed_password


def check_hashed_password(password, hash_value):
    """
    Checks the hashed password with original password.

    Parameters
    ----------
    password: str
        Original password.
    hash_value: str
        Hashed password.

    Returns
    -------
    yea_or_ney: bool
        Yes or no.

    """

    yea_or_nay = check_password(password, hash_value)

    return yea_or_nay


def check_users():
    """
    Checks if the CMS has any user and at least one of them is a staff.

    Returns
    -------
    has_n_staff: bool
        Has users and at least one of them is a staff.

    """
    has_n_staff = False

    try:
        users = User.objects.all()

        for user in users:
            if user.is_staff:
                has_n_staff = True
    except User.DoesNotExist:
        return has_n_staff

    return has_n_staff


def check_db_conn():
    """
    Checks connection to 'default' database.

    Returns
    -------
    reachable : bool
        True if BD connects else False.
    """

    conn = connections['default']

    try:
        c = conn.cursor()  # this will take some time if error
    except OperationalError:
        reachable = False
    else:
        reachable = True

    return reachable
