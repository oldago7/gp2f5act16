# -*- mode: ruby -*-
# vi: set ft=ruby :
#
Vagrant.configure("2") do |config|
	config.vm.box = "generic/debian11"
	config.vm.hostname = "gp3olclmaro"
	config.vm.provider "virtualbox" do |mv|
		mv.name = "GP3ProjecteFinal"
		mv.memory = 2048
		mv.cpus = 2
		mv.customize ['modifyvm', :id, '--clipboard', 'bidirectional']     
	end
	config.vm.provision "shell", inline: <<-SHELL
		apt-get update
		apt-get install -y apt-transport-https ca-certificates curl gnupg lsb-release
		curl -fsSL https://download.docker.com/linux/debian/gpg | sudo gpg --dearmor -o /usr/share/keyrings/docker-archive-keyring.gpg
		echo "deb [arch=amd64 signed-by=/usr/share/keyrings/docker-archive-keyring.gpg] https://download.docker.com/linux/debian $(lsb_release -cs) stable" | sudo tee /etc/apt/sources.list.d/docker.list > /dev/null
		apt-get update
		apt-get install -y docker-ce docker-ce-cli containerd.io docker-compose
		sudo apt-get install git
		usermod -aG docker vagrant
	SHELL
end
