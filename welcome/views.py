from django.contrib.auth.models import User
from django.shortcuts import render, redirect

from welcome.forms import WelcomeForm
from welcome.utils import check_users


def home(request, options=None):
    """
    Welcome page for new setup.

    Parameters
    ----------
    request: object
        WSGI request.
    options: str
        Defaults to None.

    Returns
    -------
    render: object
        Returns renderer's.

    """

    template = 'welcome/welcome.html'
    context = {}

    if not check_users():

        if options is None:

            if request.method == 'POST':
                form = WelcomeForm(request.POST)
                if form.is_valid():
                    first_name = form.cleaned_data.get('first_name')
                    last_name = form.cleaned_data.get('last_name')
                    username = form.cleaned_data.get('username')
                    email = form.cleaned_data.get('email')
                    password = form.cleaned_data.get('first_name')

                    user_model, created = User.objects.create_superuser(username=username, email=email,
                                                                        password=password, first_name=first_name,
                                                                        last_name=last_name)
                    if created:
                        user_model.save()
            else:
                form = WelcomeForm()

            context['form'] = form
    else:
        return redirect('portal_home')

    return render(request, template, context)
