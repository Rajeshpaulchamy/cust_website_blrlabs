#!/bin/bash

# coding=utf-8
#
# CleanCode Software India Pvt.Ltd, Bangalore - India.
# 
# Copyright (c) 2015. CleanCode Software India Private Limited (CSIP).
# All Rights Reserved.
# 
# 
# Revision number:
# ******************
# Rev.01 : 05-Oct-2015  
#     Script file added to install the requirements and provide the required permisions
#

# To install the new packages
if [ "$1" = "install" ]; then
	echo "Selected mode is : install"
	echo "Usage exmpale: sh run.sh install"
	composer install
	chmod -R 777 app/storage
	exit
fi

# To install the new packages
if [ "$1" = "update" ]; then
	echo "Selected mode is : update"
	echo "Usage exmpale: sh run.sh update"
	composer update
	chmod -R 777 app/storage
	exit
fi


# To connect to remote database
if [ "$1" = "database" ]; then
	echo "Selected mode is : database"
	echo "Usage exmpale: sh run.sh database"
	mysql -uroot -p
	exit
fi

## To up the server
if [ "$1" = "apache" ]; then
	echo "Selected mode is : apache"
	echo "Usage exmpale: sh run.sh apache"
	sudo vim /etc/apache2/sites-available/projects.local.conf
	sudo vim /etc/hosts
	sudo service apache2 restart
	exit
fi

## To clear the server cache
if [ "$1" = "cache" ]; then
	echo "Selected mode is : cache"
	echo "Usage exmpale: sh run.sh cache"
	php artisan cache:clear
	sudo rm -f app/storage/cache/asset-pipeline/*
	sudo rm -f app/storage/sessions/*
	sudo rm -f app/storage/views/* [^.gitignore]
	sudo rm -f app/storage/sessions/* [^.gitignore]
	sudo rm -f app/storage/logs/* [^.gitignore]
	sudo rm -f app/storage/meta/* [^.gitignore]
	exit
fi

## To clear the server cache
if [ "$1" = "jpeg" ]; then
	echo "Selected mode is : jpeg"
	echo "Usage exmpale: sh run.sh jpeg"
	php artisan ImageOptimize
	exit
fi

 Usage details
if [ "$1" = "" ]; then

	echo -e "usage: sh run.sh [options] [args]"
	echo -e "Command-line utility, version 1.0"
	echo -e ""
	echo -e "Available commands and usage details:"
	
	echo -e "database \t\t: To connect to the database from command line"
	echo -e "install \t\t: Use it very first time to install all the packages"
	echo -e "update \t\t: Use it to install the new packages"
	echo -e "apache \t\t: Use it to when page is not up"

fi

