# -*- coding: utf-8 -*-
# Generated by Django 1.9.5 on 2016-11-13 02:02
from __future__ import unicode_literals

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('editor', '0004_content_content_name'),
    ]

    operations = [
        migrations.DeleteModel(
            name='Editor',
        ),
    ]