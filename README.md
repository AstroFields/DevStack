# AstroFields Development box

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

## License

MIT - it's as easy as that