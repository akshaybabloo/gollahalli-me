# -*- coding: utf-8 -*-
# Generated by Django 1.10.6 on 2017-03-05 00:29
from __future__ import unicode_literals

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('editor', '0002_auto_20170305_1325'),
    ]

    operations = [
        migrations.RemoveField(
            model_name='contentmodel',
            name='education_json',
        ),
        migrations.RemoveField(
            model_name='contentmodel',
            name='experience_json',
        ),
        migrations.RemoveField(
            model_name='contentmodel',
            name='projects_json',
        ),
        migrations.RemoveField(
            model_name='contentmodel',
            name='publication_json',
        ),
        migrations.RemoveField(
            model_name='contentmodel',
            name='research_area_json',
        ),
        migrations.RemoveField(
            model_name='contentmodel',
            name='skills_t1_json',
        ),
        migrations.RemoveField(
            model_name='contentmodel',
            name='skills_t2_json',
        ),
        migrations.RemoveField(
            model_name='contentmodel',
            name='tutorials_json',
        ),
    ]
