# Vagrant

## Commands
- create a vagrant instance
> vagrant init

- start a vagrant instance
> vagrant up

- stop a vagrant instance
> vagrant halt

- ssh on the vagrant instance
> vagrant ssh

## VagrantFile
```
# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
  config.vm.box = "primalskill/ubuntu-trusty64"

  config.vm.network "forwarded_port", guest: 80, host: 8080

  config.vm.synced_folder "./", "/var/www", create: true, group: "www-data", owner: "www-data"

  config.vm.network "private_network", ip: "192.168.11.11"

  config.vm.provider "virtualbox" do |v|
  	v.name = "SitePoint Test Vagrant"
  	v.customize ["modifyvm", :id, "--memory", "1024"]
  end

  config.vm.provision "shell" do |s|
    s.path "provision/setup.sh"
  end
end
```
