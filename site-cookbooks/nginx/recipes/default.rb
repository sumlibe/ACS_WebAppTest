#
# Cookbook Name:: nginx
# Recipe:: default
#
# Copyright 2014, YOUR_COMPANY_NAME
#
# All rights reserved - Do Not Redistribute
#

include_recipe "yum-epel"

package "nginx" do
  action :install
end

service "nginx" do
  action [ :enable, :start ]
  supports :status => true, :restart => true, :reload => true
end

template 'default.conf' do
  path '/etc/nginx/conf.d/default.conf'
  source "default.conf.erb"
  owner 'root'
  group 'root'
  mode '0644'
  notifies :reload, "service[nginx]"
end

