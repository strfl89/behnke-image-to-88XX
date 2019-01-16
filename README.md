# behnke-image-to-88XX

## Installation

1. place both files on a webserver
2. setup cronjob for generating Image
3. setup Phone Service wich points to xml on Webserver
4. subscribe Phone Service to Phone / UDP

## Webserver Requirements
- php
- php gd library

### Setup Webserver (Linux)
`sudo apt-get install apache 2 php7.2 php7.2-gd`

### Install PHP GD to running Webserver
1. check your php version `php --version`
2. install php gd for your php version, e.g. `sudo apt-get install php7.2-gd && sudo service apache2 restart`
