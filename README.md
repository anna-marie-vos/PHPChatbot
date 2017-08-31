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
