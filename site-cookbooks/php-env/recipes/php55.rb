yum_repository 'remi' do
  description 'Led RPM de Remi - Repository'
  baseurl 'http://rpms.famillecollet.com/enterprise/6/remi/x86_64/'
  gpgkey 'http://rpms.famillecollet.com/RPM-GPG-KEY-remi'
  fastestmirror_enabled true
  action :create
end

yum_repository 'remi-php55' do
  description 'Les RPM de remi de PHP 5.5 pour Enterprise Linux 6'
  baseurl 'http://rpms.famillecollet.com/enterprise/6/php55/$basearch/'
  gpgkey 'http://rpms.famillecollet.com/RPM-GPG-KEY-remi'
  fastestmirror_enabled true
  action :create
end

%w{php-fpm php-pecl-zendopcache}.each do |pkg|
  package pkg do
    action :install
    notifies :restart, "service[php-fpm]"
  end
end

service "php-fpm" do
  action [:enable, :start]
end

template 'php.ini' do
  path '/etc/php.ini'
  source "php.ini.erb"
  owner 'root'
  group 'root'
  mode '0644'
end

