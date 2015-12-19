#!/bin/bash

echo "Reading config...." >&2
source .env

mv vendor/modxcms/revolution/* ./

PASS=$(date | md5 | head -c8)

echo "Building core package...." >&2
cp _build/build.config.sample.php _build/build.config.php
cp _build/build.properties.sample.php _build/build.properties.php
php _build/transport.core.php
echo "Setup modx...." >&2
php setup/index.php database_user=$DB_USER database_password=$DB_PASS dbase=$DB_NAME cmsadmin=admin cmspassword=$PASS

printf "\nEverything is complete\nLogin: admin\nPassword: $PASS\n\n">&2