pocd_nodes = [
  { :host => "traversymvc", :ip => "192.168.23.15", :box => "bento/ubuntu-18.04", :box_version => "201806.08.0", :ram => 4096,:cpu => 2, :gui => false},
]

varDomain = "parello.net"
# varRepository = "../vm_repo/"

Vagrant.configure('2') do |config|


  pocd_nodes.each do |pocd_node|

    config.vm.define pocd_node[:host] do |pocd_config|

      pocd_config.vm.box = pocd_node[:box]
      pocd_config.vm.box_version = pocd_node[:box_version]

      pocd_config.vm.network "private_network", ip: pocd_node[:ip], :netmask => "255.255.255.0"


      pocd_config.vm.provider :virtualbox do |v|
        v.name = pocd_node[:host].to_s
          v.gui = pocd_node[:gui]
          v.customize ["modifyvm", :id, "--memory", pocd_node[:ram].to_s]
          v.customize ["modifyvm", :id, "--cpus", pocd_node[:cpu].to_s]
      end

       pocd_config.vm.synced_folder "./",       "/var/www/",  create:true, :owner => "www-data", :group => "www-data", :mount_options => ["dmode=777", "fmode=777"]
       pocd_config.vm.provision :shell, :path => "shell.sh"

    end
  end
end
