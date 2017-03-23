# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
  config.vm.box = "primalskill/ubuntu-trusty64"

  config.vm.network "forwarded_port", guest: 80, host: 8080

  config.vm.synced_folder "./", "/var/www", create: true, group: "www-data", owner: "www-data"
  
  config.vm.network "private_network", ip: "192.168.11.11"

  config.vm.provider "virtualbox" do |v|
  	v.name = "Bugwiser Vagrant"
  	v.customize ["modifyvm", :id, "--memory", "1024"]
  end

  config.vm.provision :shell, :path => "./provision/setup.sh"
end
