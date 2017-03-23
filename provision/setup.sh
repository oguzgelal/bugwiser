#!/bin/bash
<<<<<<< HEAD

sudo apt-get update && sudo apt-get upgrade -y
sudo apt-get install nginx php5-fpm php5-mysql -y

sudo cp ./default /etc/nginx/sites-available/
sudo service nginx restart

sudo cp ./www.conf /etc/php5/fpm/pool.d/
sudo service php5-fpm restart

# TODO - files changes

#sudo apt-get install mariadb-server mariadb-client -y
# set MariaDB password - toor
# MySQL create data base, create user
# mysql -u root -p -e 'create database bugwiser; CREATE USER 'bugwiser'@'localhost' IDENTIFIED BY 'bugwiser';GRANT ALL PRIVILEGES ON bugwiser.* TO 'bugwiser'@'%' WITH GRANT OPTION;flush privileges;'
=======
echo "Provisioning virtual machine..."
>>>>>>> d3b0b4a49b30298c3b9f7de00efee81f4b3d4f10
