#!/usr/bin/env bash
sudo apt-get -y update && sudo apt-get -y upgrade
sudo add-apt-repository ppa:ondrej/php
sudo apt-get update
sudo apt-get install php7.3
sudo apt-get install php-pear php7.3-curl php7.3-dev php7.3-gd php7.3-mbstring php7.3-zip php7.3-mysql php7.3-xml php7.3-cli php7.3-fpm php7.3-json php7.3-pdo php7.3-mysql  php7.3-gd php7.3-bcmath php7.3-json
sudo apt install mysql-server
sudo mysql_secure_installation
sudo pecl install apcu
sudo echo "extension=apcu.so" | sudo tee -a /etc/php/7.3/mods-available/cache.ini
sudo  ln -s /etc/php/7.3/mods-available/cache.ini /etc/php/7.3/apache2/conf.d/30-cache.ini
sudo systemctl restart apache2

sudo service apache2 restart
