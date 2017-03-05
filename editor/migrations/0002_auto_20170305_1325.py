# -*- coding: utf-8 -*-
# Generated by Django 1.10.6 on 2017-03-05 00:25
from __future__ import unicode_literals

from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    dependencies = [
        ('editor', '0001_initial'),
    ]

    operations = [
        migrations.CreateModel(
            name='AbstractPublicationModel',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('content', models.CharField(default='content', help_text='Markdown Enabled', max_length=500)),
            ],
        ),
        migrations.CreateModel(
            name='EducationModel',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('to_date', models.DateField()),
                ('from_date', models.DateField()),
                ('where', models.CharField(default='where', max_length=500)),
                ('current', models.BooleanField(default=False)),
                ('ref_id', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='editor.ContentModel')),
            ],
        ),
        migrations.CreateModel(
            name='ExperienceModel',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('to_date', models.DateField()),
                ('from_date', models.DateField()),
                ('title', models.CharField(default='title', max_length=500)),
                ('where_city', models.CharField(default='where city', max_length=100)),
                ('where_country', models.CharField(default='where country', max_length=100)),
                ('company', models.CharField(default='company', max_length=500)),
                ('current', models.BooleanField(default=False)),
                ('ref_id', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='editor.ContentModel')),
            ],
        ),
        migrations.CreateModel(
            name='JournalPublicationModel',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('content', models.CharField(default='content', help_text='Markdown Enabled', max_length=500)),
            ],
        ),
        migrations.CreateModel(
            name='PosterPublicationModel',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('content', models.CharField(default='content', help_text='Markdown Enabled', max_length=500)),
            ],
        ),
        migrations.CreateModel(
            name='ProjectsModel',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('link', models.URLField(default='https://www.example.com', max_length=500)),
                ('title', models.CharField(default='title', max_length=500)),
                ('category', models.CharField(default='category', max_length=500)),
                ('file_name', models.CharField(default='file name', max_length=500)),
                ('long_description', models.CharField(default='long description', max_length=10000)),
                ('short_description', models.CharField(default='short description', max_length=500)),
                ('ref_id', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='editor.ContentModel')),
            ],
        ),
        migrations.CreateModel(
            name='PublicationModel',
            fields=[
                ('type_of_publication', models.CharField(default='type', max_length=500, primary_key=True, serialize=False)),
                ('ref_id', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='editor.ContentModel')),
            ],
        ),
        migrations.CreateModel(
            name='SkillsModel',
            fields=[
                ('type_of_skill', models.CharField(default='type', max_length=500, primary_key=True, serialize=False)),
                ('ref_id', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='editor.ContentModel')),
            ],
        ),
        migrations.CreateModel(
            name='ThesisPublicationModel',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('content', models.CharField(default='content', help_text='Markdown Enabled', max_length=500)),
                ('type_of_publication', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='editor.PublicationModel')),
            ],
        ),
        migrations.CreateModel(
            name='TutorialsModel',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('link', models.URLField(default='https://www.example.com', max_length=500)),
                ('title', models.CharField(default='title', max_length=500)),
                ('file_name', models.CharField(default='file name', max_length=500)),
                ('long_description', models.CharField(default='long description', max_length=10000)),
                ('ref_id', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='editor.ContentModel')),
            ],
        ),
        migrations.AddField(
            model_name='posterpublicationmodel',
            name='type_of_publication',
            field=models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='editor.PublicationModel'),
        ),
        migrations.AddField(
            model_name='journalpublicationmodel',
            name='type_of_publication',
            field=models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='editor.PublicationModel'),
        ),
        migrations.AddField(
            model_name='abstractpublicationmodel',
            name='type_of_publication',
            field=models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='editor.PublicationModel'),
        ),
    ]
