BoxBilling 4.20 (De-licensed)
================================================================================
*This fork of BoxBilling is the same as version 4.20, but with licensing removed.

This fork makes setting up BoxBilling easier in development environments without needing to manually remove
the licensing components each time.

If you use BoxBilling in a production environment, consider buying a 
license to support their development team.

Requirements
================================================================================

* PHP >=5.3.3
* PHP extensions:
  * mcrypt
  * curl
  * zlib
  * PDO
  * gettext
* MySQL or any PDO compatible SQL server

Getting started
================================================================================

Please read documentation at http://docs.boxbilling.com to get started
with BoxBilling

Contributing
================================================================================

1. Fork it
2. Create your feature branch (`git checkout -b my-new-feature`)
3. Commit your changes (`git commit -am 'Add some feature'`)
4. Push to the branch (`git push origin my-new-feature`)
5. Create new Pull Request to **develop** branch

Using Vagrant
================================================================================
Vagrant is [very well documented](https://docs.vagrantup.com/v2/) but here are a few common commands:

* `vagrant up` starts the virtual machine and provisions it
* `vagrant suspend` will essentially put the machine to 'sleep' with `vagrant resume` waking it back up
* `vagrant halt` attempts a graceful shutdown of the machine and will need to be brought back with `vagrant up`
* `vagrant ssh` gives you shell access to the virtual machine

Install vagrant-hostmanager plugin
    
    $ vagrant plugin install vagrant-hostmanager
    
to update /etc/hosts file 

Using Grunt
===========
To create minified js and css files for theme admin_default run:
`./node_modules/.bin/grunt` from project root directory

If you want to use not minified versions of admin_default theme:
* [separate JS files in layout](https://github.com/boxbilling/boxbilling/blob/5e19912e7287b76e6b760899a7f9d2a4f3c1125c/src/bb-themes/admin_default/html/layout_default.phtml#L17-L24)
* [separate CSS](https://github.com/boxbilling/boxbilling/blob/2636cae130a94cdd827fb5f4acf46b0cdfebbb30/src/bb-themes/admin_default/html/partial_styles.phtml)

----
##### Virtual Machine Specifications #####

* OS     - Ubuntu 12.04
* PHP    - 5.4.* 
* Apache
* MySQL 5.6
* IP - 10.20.30.12
* servername - boxbilling.test
* target folder - /var/www/boxbilling

Support
================================================================================

* [Documentation](http://docs.boxbilling.com/)
* [Official website](http://www.boxbilling.com/)
* [@boxbilling](https://twitter.com/boxbilling)
* [Facebook](https://www.facebook.com/boxbilling)

Licensing
================================================================================

BoxBilling is licensed under the Apache License, Version 2.0. See LICENSE for full license text.
