# -*- mode: ruby -*-
# vi: set ft=ruby :

# Vagrantfile API/syntax version. Don't touch unless you know what you're doing!
VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  # Boxの設定
  config.vm.box = "opscode-centos-6.5"
  config.vm.box_url = "http://opscode-vm-bento.s3.amazonaws.com/vagrant/virtualbox/opscode_centos-6.5_chef-provisionerless.box"
  # ノードごとの設定
  config.vm.define "frontend_server" do |frontend_server|
    frontend_server.vm.hostname = "frontend"
    frontend_server.vm.network "private_network", ip: "192.168.10.10"
  end
  config.vm.define "backend_server" do |backend_server|
    backend_server.vm.hostname = "backend"
    backend_server.vm.network "private_network", ip: "192.168.10.11"
  end
  # vagrant-omnibusの有効化
  config.omnibus.chef_version = :latest
  # 共有ディレクトリの設定
  config.vm.synced_folder "./mysite", "/vagrant_mysite", mount_options: ['dmode=777','fmode=777']
  # ノードへのプロビジョニング
  config.vm.provision "chef_solo" do |chef|
    chef.cookbooks_path = [ "./cookbooks", "./site-cookbooks" ]
    chef.json = {
      nginx: {
        env: ["php"]
      },
      mysql: {
        server_root_password: 'rootpass'
      }
    }
    chef.run_list = %w[
      recipe[yum-epel]
      recipe[nginx]
      recipe[php-env::php55]
      recipe[git]
      recipe[mysql]
    ]
  end
  config.vm.provision :shell, :inline => <<-EOT
    ln -s /vagrant_mysite/webapi/public /usr/share/nginx/html/public
    echo 'create database fuel_dev' | mysql -u root -prootpass
    cd /vagrant_mysite/webapi
    php oil refine migrate:current
  EOT
end
