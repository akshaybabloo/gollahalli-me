# -*- coding: utf-8 -*-
# Generated by Django 1.9.5 on 2016-11-23 04:02
from __future__ import unicode_literals

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('welcome', '0002_auto_20161123_0400'),
    ]

    operations = [
        migrations.RenameField(
            model_name='welcometoabies',
            old_name='welcome_root_password',
            new_name='welcome_password',
        ),
        migrations.RenameField(
            model_name='welcometoabies',
            old_name='welcome_root_username',
            new_name='welcome_username',
        ),
    ]
