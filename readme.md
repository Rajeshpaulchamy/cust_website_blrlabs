# DB COMMANDS
## Create migrate table in to mySQL database
`php artisan migrate:install`

## Create the migration for the User table with default template
`php artisan migrate:make create_users --create="users"`

## Update the migration in to mySQL database
`php artisan migrate`

### Create anothermigration to change the schema for the User table (It will create a new migration file with the name 'add_title_to_users')
`php artisan migrate:make add_title_to_users`

## Update the migration in to mySQL database
`php artisan migrate`

# OTHER COMMANDS

Help URL: https://phpraxis.wordpress.com/2014/07/04/getting-started-with-laravel-4-on-ubuntu-installation-and-configuration/

## install open SSH
```
sudo apt-get update
sudo apt-get install openssh-server
sudo ufw allow 22

sudo apt-get -y install php5 mysql-server mysql-client phpmyadmin php5-curl curl git openssl
sudo php5enmod mcrypt


cd ~
mkdir projects
sudo cp /etc/apache2/sites-available/000-default.conf /etc/apache2/sites-available/projects.local.conf

sudo vim /etc/apache2/sites-available/projects.local.conf
```
## Replace the above file with the below contents
```
		<VirtualHost projects.local>
		 
			ServerName projects.local
			ServerAlias projects.local
		 
			ServerAdmin myserver@localhost
			DocumentRoot /home/rajesh/projects/laravel
			 
			<Directory /home/rajesh/projects/laravel>
				Options -MultiViews
				DirectoryIndex index.php
				Options Indexes FollowSymLinks
				AllowOverride All
				Require all granted

			RewriteEngine On

			RewriteRule ^(.*)/$ /$1 [L,R=301]

			RewriteCond %{REQUEST_FILENAME} !-d
			RewriteCond %{REQUEST_FILENAME} !-f
			RewriteRule ^(.*)$ index.php [QSA,L]

			</Directory>
		 
			ErrorLog ${APACHE_LOG_DIR}/error.log
			CustomLog ${APACHE_LOG_DIR}/access.log combined
		 
		</VirtualHost>
```
```
sudo a2ensite projects.local.conf
sudo a2enmod rewrite
sudo service apache2 restart

sudo vim /etc/hosts
```

## Add the below lines
```
	127.0.0.1       projects.local
	192.168.1.8		projects.local
```

## In Windows 7 "C:\Windows\system32\drivers\etc\hosts" Add the below lines
```
	192.168.1.8		projects.local
```

```
cd ~/projects
mkdir temp
cd temp	
sudo curl -sS https://getcomposer.org/installer | sudo php
sudo mv composer.phar /usr/local/bin/composer
rm -rf temp
```

## Install Laravel stable version
```
composer create-project laravel/laravel laravel --prefer-dist
chmod -R 777 laravel/storage

mv public/* . && rm -rf public
vim index.php
```

Open the index.php in the laravel folder in a text editor and replace the two occurrences of __DIR__.'/../bootstrap/autoload.php' with __DIR__.'/bootstrap/autoload.php'. Essentially, you are removing /.. from the path. Save the index.php file.

## To run the php server
`php artisan serve --host 192.168.1.5 --port 8080`

## To minimize the js and css
```
php artisan assets:setup
php artisan assets:generate
```

## to optimize the jpeg
`php artisan ImageOptimize`

# HTML file Optimization is not yet done

## Give permissions
```
sudo chmod -R 777 app/storage/
sudo chmod -R 775 app/assets/stylesheets/
sudo chmod -R 775 app/assets/images/
```

