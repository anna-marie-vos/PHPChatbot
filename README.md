# PHPChatbot
making a chatbot with a PHP backend

## What to install.
* follow this: https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-16-04
* and : https://www.digitalocean.com/community/tutorials/how-to-install-the-apache-web-server-on-ubuntu-16-04#step-2-adjust-the-firewall


## Apache Commands:
* to find your localhost, type: `sudo systemctl status apache2`
* then type: `hostname -I`
* then type the IP address in your browser. 
* To Stop the web server: `sudo systemctl stop apache2`
* To Start the web server: `sudo systemctl start apache2`
* To restart the web server: `sudo systemctl restart apache2`
* To reload the web server: `sudo systemctl reload apache2`

## MySQL setup:
* make the root user password 'root'
* to check or change security type: `mysql_secure_installation`

## PHP tips:
* to find modules for php, type: `apt-cache search php- | less`
* to exit, type: q
* You can see more information about a module by typing: `apt-cache show package_name`
* to install pachages simply type: `sudo apt-get install package1 package2 `
* you must save php files here: `/var/www/html/`
* type `sudo su` to get the right administration rights and your ready to start coding. 
* to remove a file: `sudo rm /var/www/html/info.php`
* To set up PHPMyAdmin: https://www.digitalocean.com/community/tutorials/how-to-upgrade-to-ubuntu-16-04-lts
* To secure your web server: https://www.digitalocean.com/community/tutorials/how-to-secure-apache-with-let-s-encrypt-on-ubuntu-16-04

## Install laraval 
* go to laravel and watch the get started vids: https://laracasts.com/series/laravel-from-scratch-2017/episodes/1
* first install composer: https://getcomposer.org/download/
* then make it global:  https://getcomposer.org/doc/00-intro.md#globally
* Checkout the packages you want to install here: https://packagist.org/
* if you run the `composer global require "laravel/installer"` and you get an error. 
* try this: `sudo apt-get install php7.0-zip` then run the `composer global require "laravel/installer"` again
* to export the Path, go to this website: https://stackoverflow.com/questions/25373188/laravel-installation-how-to-place-the-composer-vendor-bin-directory-in-your
* for ubuntu 16 it's:`echo 'export PATH="~/.config/composer/vendor/bin:$PATH"' >> ~/.bashrc`
* in the terminal type: `php artisan` this is the laravel command line utility
* to start a new laravel installation type: `laravel new blog`
* to start the webpage run: `php artisan serve`

### if php artisan commands don't work
* checkout: https://stackoverflow.com/questions/28468625/laravel-5-failed-opening-required-bootstrap-vendor-autoload-php
* type in terminal: `sudo apt-get install php-mbstring php-dom`
* and then: `composer install ` then try it again

### Error server boots but you get the "oops something went wrong error" in the browser
* you project folders go to "blog/config/app.php" and change the debug setting to true (in my case line 42)

### Error: RuntimeException : No application encryption key has been specified.
* go to https://stackoverflow.com/questions/44839648/no-application-encryption-key-has-been-specified-new-laravel-app
* go to https://laravel.com/docs/5.4/encryption

### Error: [ErrorException]file_get_contents(/home/amv/Workspace/blog/.env): failed to open stream: No such file or directory
* check out: https://stackoverflow.com/questions/36276767/laravel-install-getting-key-generate-error-in-ubunto-os
* in the terminal type: `cp .env.example .env`
* then run: `php artisan key:generate` that should work
* Note: the `php artisan key:generate` already places the key in the .env file so you dont have to do anything else. just restart the application. 

## Database mySql
* to create a database, go to the project directory and type: `mysql -uUserName -pPassword` replace UserName and Password with whatever it actually is.
* to create a database: `create database DBNAME;`
* to use the database: `use DBNAME;`
* to show tables: `show tables;`
* to connect the db to laravel, change the .env file
* to migrate the db table type: `php artisan migrate`

## CHATBOT
### Install ngrok: this is a development tunneling software.
* this makes so that you can access localhost while developing and communicating with your chatbot.
* https://ngrok.com/
* download the ngrok for linux. Go to the downloads folder and extract it from the zip file. 
* then copy it to the usr/bin file: `sudo cp ngrok /usr/bin/` 
* then in terminal: `ngrok` and you'll get the info about ngrok. 
* to serve the localhost type in terminal: `ngrok http 8000` this makes the localhost live.
* facebook messenger needs https, so be sure to use the https link

### Pimax/fb-messenger-php
* helps to make connecting to facebook easier
* https://github.com/pimax/fb-messenger-php
* make a new route in the routes/web.php folder and call it: MessengerController@webhook
* now to make the controller, type in terminal: `php artisan make:controller MessengerController`
* this makes all the connections and adds a file in the app/http/MessengerController.php

