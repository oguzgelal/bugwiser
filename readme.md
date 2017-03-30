# Vagrant

## Commands
- start a vagrant instance
> vagrant up

- stop a vagrant instance
> vagrant halt

- ssh on the vagrant instance
> vagrant ssh

## ./provision/setup.sh contains all that we need to install on the box
- !!! Install MariaDB after you already started the machine because you cannot introduce the password for mysql when vagrant is running the setup script !!!
- you will find the commands for installing MariaDB in setup.sh

# Passwords
- is not secure to keep them here, anyway, use these passwords:
```
For MariaDB: user:bugwiser / password:bugwiser
For WP-Admin: user:bugwiser / password:8ug$1$3r@dm1n
```

# WP REST API Plugin
- https://wordpress.org/plugins/json-rest-api/#installation

# Permalinks
- https://wordpress.org/support/topic/404-error-and-permalinks-1/
- http://nginxlibrary.com/wordpress-permalinks/

# Nice link
- https://premium.wpmudev.org/blog/twenty-seventeen-wordpress-theme/
