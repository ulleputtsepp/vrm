## BCS koolitus - Booking App

Purpose - practice of developing software in web; use of PHP language and framework Silex; use of version control system (Git, Github).

## Prerequisites

Needed software in your computer:
* PHP
* composer - dependency manager for PHP (used to download Silex)
* SQLite

## Installing

* PHP:
sudo apt install php7.2-cli
* composer (v 1.6.3):
sudo apt install composer
* Silex download:
composer require silex/silex "2.0"
* SQLite:
apt-cache search php7.2-sqlite3,
sudo apt-get install php7.2-sqlite3
* create repository in Github and clone it into your computer:
git clone https://github.com/ulleputtsepp/vrm.git
* Sublime Text as editor, associate with git:
git config --global core.editor "subl -n -w"

## Built with

* [Silex](http://silex.sensiolabs.org/) - The web framework used
* [Composer](https://getcomposer.org/) - Dependency Management
* [Twig](http://twig.sensiolabs.org/) - Php template engine
* [Doctrine DBAL](http://docs.doctrine-project.org/projects/doctrine-dbal/en/latest/index.html) - Database connection

## Author
Kadri Vahtramäe - Initial work

## Licence
This project is licenced under the MIT Licence.