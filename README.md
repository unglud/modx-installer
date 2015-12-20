# MODX Revolution installer 
Simple composer installer for MODx Revolution CMF with filling all data automagically

Downloading last stable version from [modxcms/revolution](https://github.com/modxcms/revolution) repository. Build it and run setup. All you need is specify MySQL credentials. In the end you will get fully workable MODx Revolution with admin and auto generated password.

So this package will everything for you.

[![GitHub release](https://img.shields.io/github/release/unglud/modx-installer.svg)](https://github.com/unglud/modx-installer/releases)
[![License](https://img.shields.io/packagist/l/unglud/modx-installer.svg)](https://github.com/unglud/modx-installer/blob/master/LICENSE)
[![Total Downloads](https://img.shields.io/packagist/dt/unglud/modx-installer.svg)](https://packagist.org/packages/unglud/modx-installer)

## Installation

MODX Revolution installer is distributed as a composer package and you may install it by issuing the Composer create-project command in your terminal:

```
composer create-project unglued/modx-installer
```

Als yYou may just clone this repo and then run install:
```
git clone git@github.com:unglud/modx-installer.git modx
cd modx
composer install
```



After install complete, you will see password for admin.

## Release Notes
### v0.2.0
#### 19 dec 2015
- initial release
- can download and install

## Road map
- adjust modx initial settings
- more flexible config file for complete install control
- auto creating necessary TV, templates, chunks and useful snippets
- auto install necessary packages
- add gulp, bower and elexir
- multilingual installations

## License

Laravel Image is released under the MIT Licence. See the bundled LICENSE file for details.
