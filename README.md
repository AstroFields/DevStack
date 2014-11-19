# AstroFields Development box

[![GitTip to support us](https://img.shields.io/gratipay/wecodemore.svg)](//gratipay.com/wecodemore/)
[![Latest Stable Version](https://poser.pugx.org/wecodemore/astrofields-devstack/v/stable.svg)](//packagist.org/packages/wecodemore/astrofields-devstack)
[![Total Downloads](https://poser.pugx.org/wecodemore/astrofields-devstack/downloads.svg)](//packagist.org/packages/wecodemore/astrofields-devstack)
[![Latest Unstable Version](https://poser.pugx.org/wecodemore/astrofields-devstack/v/unstable.svg)](//packagist.org/packages/wecodemore/astrofields-devstack)
[![License](https://poser.pugx.org/wecodemore/astrofields-devstack/license.svg)](//packagist.org/packages/wecodemore/astrofields-devstack)

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