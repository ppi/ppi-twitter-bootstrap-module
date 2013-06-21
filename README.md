PPI TwitterBootstrap Module
=================

[@php]:         http://php.net/                         "PHP: Hypertext Preprocessor"
[@ppi]:         http://ppi.io/                          "PPI Framework - The PHP Meta Framework!"
[@bootstrap]:   http://twitter.github.io/bootstrap/     "Sleek, intuitive, and powerful front-end framework for faster and easier web development"

[Twitter Boostrap][@bootstrap] module for [PPI2][@ppi].

<!--- [![Build Status](https://secure.travis-ci.org/ppi/ppi-twitter-bootstrap-module.png)](http://travis-ci.org/ppi/ppi-twitter-bootstrap-module) -->

Twitter Bootstrap
-----------------

<img src="http://media02.hongkiat.com/twitter-bootstrap/twitter-bootstrap.jpg" height="100" />

> Bootstrap is a sleek, intuitive, and powerful front-end framework for faster and easier web development, created and maintained by [Mark Otto](http://twitter.com/mdo) and [Jacob Thornton](http://twitter.com/fat).
>
> To get started, checkout [http://getbootstrap.com](http://getbootstrap.com)!

Requirements
------------

* [PHP][@php] 5.3.3 and up
* [PPI Framework 2][@ppi] (2.1.x)

Installation
------------

### 1. Install Composer

If you don't have Composer yet, download it following the instructions on
http://getcomposer.org/ or just run the following command:

``` bash
curl -s http://getcomposer.org/installer | php
```

### 2. Add ppi/twitter-bootstrap-module to your composer.json and install it

``` bash
$ php composer.phar require ppi/twitter-bootstrap-module dev-master
```

Composer will install the module to your project's `vendor/ppi` directory.

### 3. Enable the module

Enable this module by editing `app/config/modules.yml`:

``` yml
modules:
    - PPI\TwitterBootstrapModule
    # ...
```

License
-------

This module is licensed under the MIT License. See the [LICENSE file](https://github.com/ppi/ppi-twitter-bootstrap-module/blob/master/LICENSE) for details.

Authors
-------

* Vítor Brandão - <vitor@ppi.io> ~ [twitter.com/noiselabs](http://twitter.com/noiselabs) ~ [noiselabs.org](http://noiselabs.org)

See also the list of [contributors](https://github.com/ppi/ppi-twitter-bootstrap-module/contributors) who participated in this project.

Submitting bugs and feature requests
------------------------------------

Bugs and feature requests are tracked on [GitHub](https://github.com/ppi/ppi-twitter-bootstrap-module/issues).

About PPI
---------

<img src="https://upload.wikimedia.org/wikipedia/commons/7/7d/Ppi-framework-logo.png" width="74" height="50" />

> PPI is an open source PHP meta-framework. It has taken the good bits from Symfony2, ZendFramework2 & Doctrine2 and combined them together to create a solid and very easy web application framework. It can be considered the boilerplate of PHP frameworks.
