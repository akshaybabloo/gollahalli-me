# Generated by Django 2.0b1 on 2017-10-26 03:02

from django.conf import settings
from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('authy_me', '0007_auto_20170721_1719'),
    ]

    operations = [
        migrations.AlterField(
            model_name='authenticatormodel',
            name='user_id',
            field=models.ForeignKey(null=True, on_delete=None, related_name='auth_user', to=settings.AUTH_USER_MODEL),
        ),
    ]
