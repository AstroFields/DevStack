# AstroFields Development box


[![GitTip to support us](https://img.shields.io/gratipay/wecodemore.svg?style=flat-square)](//gratipay.com/wecodemore/)
[![Source Code](http://img.shields.io/badge/source-astrofields/devstack-blue.svg?style=flat-square)](//github.com/AstroFields/DevStack)
[![Author](http://img.shields.io/badge/twitter-@astrofields-blue.svg?style=flat-square)](//twitter.com/AstroNotes)
[![Total Downloads](https://img.shields.io/packagist/dt/wecodemore/astrofields-devstack.svg?style=flat-square)](//packagist.org/packages/wecodemore/astrofields-devstack)
[![Latest Version](https://img.shields.io/github/release/astrofields/devstack.svg?style=flat-square)](//packagist.org/packages/wecodemore/astrofields-devstack)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)

The basic development box for the AstroFields libraries and plugins.

## Requirements

Composer, Vagrant & Puppet

## How to

Bring the VirtualMachine/Box up

	vagrant up

Change your box configuration on PuPHPet. Provision after changing your config.

	vagrant provision

Add WP-CLI autocomplete

	composer wp-cli-bash

Add a `wp-config.php` - follow the setup steps in the CLI

	composer wp-config

Add an `.env` file by copying and renaming the `.env.example` file to `.env`. Change all
your WordPress config settings _only_ there.

## Access

Open your browser and go to

	http://astro.dev

## Defaults

The WordPress defaults are all set in the `.evn.example` file. Change what you need to quickly
reproduce different setups during testing. Removing the value and the `=` from a value will
_omit_ setting it and therefore fall back to WordPress internal default.

The default theme is TwentyThirteen (because I think TwentyFourteen is quite ugly). It is
installed as `wpackagist-theme` via Composer. To change that, alter the `composer.json` file
or simply add your preferred theme. You can set pretty much every theme that lives in the
wp.org repository. This makes it easy to test compatibility in case of bug reports and
is quite convenient.

## License

MIT - it's as easy as that