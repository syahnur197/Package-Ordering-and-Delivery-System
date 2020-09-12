Symfony 5.1.5
=============

* [`about`](#about)
* [`help`](#help)
* [`list`](#list)

**assets:**

* [`assets:install`](#assetsinstall)

**cache:**

* [`cache:clear`](#cacheclear)
* [`cache:pool:clear`](#cachepoolclear)
* [`cache:pool:delete`](#cachepooldelete)
* [`cache:pool:list`](#cachepoollist)
* [`cache:pool:prune`](#cachepoolprune)
* [`cache:warmup`](#cachewarmup)

**config:**

* [`config:dump-reference`](#configdump-reference)

**debug:**

* [`debug:autowiring`](#debugautowiring)
* [`debug:config`](#debugconfig)
* [`debug:container`](#debugcontainer)
* [`debug:event-dispatcher`](#debugevent-dispatcher)
* [`debug:form`](#debugform)
* [`debug:router`](#debugrouter)
* [`debug:translation`](#debugtranslation)
* [`debug:twig`](#debugtwig)

**doctrine:**

* [`doctrine:cache:clear-collection-region`](#doctrinecacheclear-collection-region)
* [`doctrine:cache:clear-entity-region`](#doctrinecacheclear-entity-region)
* [`doctrine:cache:clear-metadata`](#doctrinecacheclear-metadata)
* [`doctrine:cache:clear-query`](#doctrinecacheclear-query)
* [`doctrine:cache:clear-query-region`](#doctrinecacheclear-query-region)
* [`doctrine:cache:clear-result`](#doctrinecacheclear-result)
* [`doctrine:database:create`](#doctrinedatabasecreate)
* [`doctrine:database:drop`](#doctrinedatabasedrop)
* [`doctrine:database:import`](#doctrinedatabaseimport)
* [`doctrine:ensure-production-settings`](#doctrineensure-production-settings)
* [`doctrine:mapping:convert`](#doctrinemappingconvert)
* [`doctrine:mapping:import`](#doctrinemappingimport)
* [`doctrine:mapping:info`](#doctrinemappinginfo)
* [`doctrine:migrations:current`](#doctrinemigrationscurrent)
* [`doctrine:migrations:diff`](#doctrinemigrationsdiff)
* [`doctrine:migrations:dump-schema`](#doctrinemigrationsdump-schema)
* [`doctrine:migrations:execute`](#doctrinemigrationsexecute)
* [`doctrine:migrations:generate`](#doctrinemigrationsgenerate)
* [`doctrine:migrations:latest`](#doctrinemigrationslatest)
* [`doctrine:migrations:list`](#doctrinemigrationslist)
* [`doctrine:migrations:migrate`](#doctrinemigrationsmigrate)
* [`doctrine:migrations:rollup`](#doctrinemigrationsrollup)
* [`doctrine:migrations:status`](#doctrinemigrationsstatus)
* [`doctrine:migrations:sync-metadata-storage`](#doctrinemigrationssync-metadata-storage)
* [`doctrine:migrations:up-to-date`](#doctrinemigrationsup-to-date)
* [`doctrine:migrations:version`](#doctrinemigrationsversion)
* [`doctrine:query:dql`](#doctrinequerydql)
* [`doctrine:query:sql`](#doctrinequerysql)
* [`doctrine:schema:create`](#doctrineschemacreate)
* [`doctrine:schema:drop`](#doctrineschemadrop)
* [`doctrine:schema:update`](#doctrineschemaupdate)
* [`doctrine:schema:validate`](#doctrineschemavalidate)

**lint:**

* [`lint:container`](#lintcontainer)
* [`lint:twig`](#linttwig)
* [`lint:xliff`](#lintxliff)
* [`lint:yaml`](#lintyaml)

**make:**

* [`make:auth`](#makeauth)
* [`make:command`](#makecommand)
* [`make:controller`](#makecontroller)
* [`make:crud`](#makecrud)
* [`make:docker:database`](#makedockerdatabase)
* [`make:entity`](#makeentity)
* [`make:fixtures`](#makefixtures)
* [`make:form`](#makeform)
* [`make:functional-test`](#makefunctional-test)
* [`make:message`](#makemessage)
* [`make:messenger-middleware`](#makemessenger-middleware)
* [`make:migration`](#makemigration)
* [`make:registration-form`](#makeregistration-form)
* [`make:reset-password`](#makereset-password)
* [`make:serializer:encoder`](#makeserializerencoder)
* [`make:serializer:normalizer`](#makeserializernormalizer)
* [`make:subscriber`](#makesubscriber)
* [`make:twig-extension`](#maketwig-extension)
* [`make:unit-test`](#makeunit-test)
* [`make:user`](#makeuser)
* [`make:validator`](#makevalidator)
* [`make:voter`](#makevoter)

**router:**

* [`router:match`](#routermatch)

**secrets:**

* [`secrets:decrypt-to-local`](#secretsdecrypt-to-local)
* [`secrets:encrypt-from-local`](#secretsencrypt-from-local)
* [`secrets:generate-keys`](#secretsgenerate-keys)
* [`secrets:list`](#secretslist)
* [`secrets:remove`](#secretsremove)
* [`secrets:set`](#secretsset)

**security:**

* [`security:encode-password`](#securityencode-password)

**server:**

* [`server:dump`](#serverdump)
* [`server:log`](#serverlog)

**translation:**

* [`translation:update`](#translationupdate)

`about`
-------

Displays information about the current project

### Usage

* `about`

The about command displays information about the current Symfony project.

The PHP section displays important configuration that could affect your application. The values might
be different between web and CLI.

The Environment section displays the current environment variables managed by Symfony Dotenv. It will not
be shown if no variables were found. The values might be different between web and CLI.

### Options

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`help`
------

Displays help for a command

### Usage

* `help [--format FORMAT] [--raw] [--] [<command_name>]`

The help command displays help for a given command:

  php bin/console help list

You can also output the help in other formats by using the --format option:

  php bin/console help --format=xml list

To display the list of available commands, please use the list command.

### Arguments

#### `command_name`

The command name

* Is required: no
* Is array: no
* Default: `'help'`

### Options

#### `--format`

The output format (txt, xml, json, or md)

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'txt'`

#### `--raw`

To output raw command help

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`list`
------

Lists commands

### Usage

* `list [--raw] [--format FORMAT] [-h|--help] [-q|--quiet] [-v|vv|vvv|--verbose] [-V|--version] [--ansi] [--no-ansi] [-n|--no-interaction] [-e|--env ENV] [--no-debug] [--] <command> [<namespace>]`

The list command lists all commands:

  php bin/console list

You can also display the commands for a specific namespace:

  php bin/console list test

You can also output the information in other formats by using the --format option:

  php bin/console list --format=xml

It's also possible to get raw list of commands (useful for embedding command runner):

  php bin/console list --raw

### Arguments

#### `namespace`

The namespace name

* Is required: no
* Is array: no
* Default: `NULL`

### Options

#### `--raw`

To output raw command list

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--format`

The output format (txt, xml, json, or md)

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'txt'`

`assets:install`
----------------

Installs bundles web assets under a public directory

### Usage

* `assets:install [--symlink] [--relative] [--no-cleanup] [--] [<target>]`

The assets:install command installs bundle assets into a given
directory (e.g. the public directory).

  php bin/console assets:install public

A "bundles" directory will be created inside the target directory and the
"Resources/public" directory of each bundle will be copied into it.

To create a symlink to each bundle instead of copying its assets, use the
--symlink option (will fall back to hard copies when symbolic links aren't possible:

  php bin/console assets:install public --symlink

To make symlink relative, add the --relative option:

  php bin/console assets:install public --symlink --relative


### Arguments

#### `target`

The target directory

* Is required: no
* Is array: no
* Default: `NULL`

### Options

#### `--symlink`

Symlinks the assets instead of copying it

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--relative`

Make relative symlinks

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-cleanup`

Do not remove the assets of the bundles that no longer exist

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`cache:clear`
-------------

Clears the cache

### Usage

* `cache:clear [--no-warmup] [--no-optional-warmers]`

The cache:clear command clears the application cache for a given environment
and debug mode:

  php bin/console cache:clear --env=dev
  php bin/console cache:clear --env=prod --no-debug

### Options

#### `--no-warmup`

Do not warm up the cache

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-optional-warmers`

Skip optional cache warmers (faster)

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`cache:pool:clear`
------------------

Clears cache pools

### Usage

* `cache:pool:clear <pools>...`

The cache:pool:clear command clears the given cache pools or cache pool clearers.

    bin/console cache:pool:clear <cache pool or clearer 1> [...<cache pool or clearer N>]

### Arguments

#### `pools`

A list of cache pools or cache pool clearers

* Is required: yes
* Is array: yes
* Default: `array ()`

### Options

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`cache:pool:delete`
-------------------

Deletes an item from a cache pool

### Usage

* `cache:pool:delete <pool> <key>`

The cache:pool:delete deletes an item from a given cache pool.

    bin/console cache:pool:delete <pool> <key>

### Arguments

#### `pool`

The cache pool from which to delete an item

* Is required: yes
* Is array: no
* Default: `NULL`

#### `key`

The cache key to delete from the pool

* Is required: yes
* Is array: no
* Default: `NULL`

### Options

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`cache:pool:list`
-----------------

List available cache pools

### Usage

* `cache:pool:list`

The cache:pool:list command lists all available cache pools.

### Options

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`cache:pool:prune`
------------------

Prunes cache pools

### Usage

* `cache:pool:prune`

The cache:pool:prune command deletes all expired items from all pruneable pools.

    bin/console cache:pool:prune

### Options

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`cache:warmup`
--------------

Warms up an empty cache

### Usage

* `cache:warmup [--no-optional-warmers]`

The cache:warmup command warms up the cache.

Before running this command, the cache must be empty.

This command does not generate the classes cache (as when executing this
command, too many classes that should be part of the cache are already loaded
in memory). Use curl or any other similar tool to warm up
the classes cache if you want.


### Options

#### `--no-optional-warmers`

Skip optional cache warmers (faster)

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`config:dump-reference`
-----------------------

Dumps the default configuration for an extension

### Usage

* `config:dump-reference [--format FORMAT] [--] [<name> [<path>]]`

The config:dump-reference command dumps the default configuration for an
extension/bundle.

Either the extension alias or bundle name can be used:

  php bin/console config:dump-reference framework
  php bin/console config:dump-reference FrameworkBundle

With the --format option specifies the format of the configuration,
this is either yaml or xml.
When the option is not provided, yaml is used.

  php bin/console config:dump-reference FrameworkBundle --format=xml

For dumping a specific option, add its path as second argument (only available for the yaml format):

  php bin/console config:dump-reference framework profiler.matcher


### Arguments

#### `name`

The Bundle name or the extension alias

* Is required: no
* Is array: no
* Default: `NULL`

#### `path`

The configuration option path

* Is required: no
* Is array: no
* Default: `NULL`

### Options

#### `--format`

The output format (yaml or xml)

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'yaml'`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`debug:autowiring`
------------------

Lists classes/interfaces you can use for autowiring

### Usage

* `debug:autowiring [--all] [--] [<search>]`

The debug:autowiring command displays the classes and interfaces that
you can use as type-hints for autowiring:

  php bin/console debug:autowiring

You can also pass a search term to filter the list:

  php bin/console debug:autowiring log


### Arguments

#### `search`

A search filter

* Is required: no
* Is array: no
* Default: `NULL`

### Options

#### `--all`

Show also services that are not aliased

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`debug:config`
--------------

Dumps the current configuration for an extension

### Usage

* `debug:config [<name> [<path>]]`

The debug:config command dumps the current configuration for an
extension/bundle.

Either the extension alias or bundle name can be used:

  php bin/console debug:config framework
  php bin/console debug:config FrameworkBundle

For dumping a specific option, add its path as second argument:

  php bin/console debug:config framework serializer.enabled


### Arguments

#### `name`

The bundle name or the extension alias

* Is required: no
* Is array: no
* Default: `NULL`

#### `path`

The configuration option path

* Is required: no
* Is array: no
* Default: `NULL`

### Options

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`debug:container`
-----------------

Displays current services for an application

### Usage

* `debug:container [--show-arguments] [--show-hidden] [--tag TAG] [--tags] [--parameter PARAMETER] [--parameters] [--types] [--env-var ENV-VAR] [--env-vars] [--format FORMAT] [--raw] [--deprecations] [--] [<name>]`

The debug:container command displays all configured public services:

  php bin/console debug:container

To see deprecations generated during container compilation and cache warmup, use the --deprecations option:

  php bin/console debug:container --deprecations

To get specific information about a service, specify its name:

  php bin/console debug:container validator

To get specific information about a service including all its arguments, use the --show-arguments flag:

  php bin/console debug:container validator --show-arguments

To see available types that can be used for autowiring, use the --types flag:

  php bin/console debug:container --types

To see environment variables used by the container, use the --env-vars flag:

  php bin/console debug:container --env-vars

Display a specific environment variable by specifying its name with the --env-var option:

  php bin/console debug:container --env-var=APP_ENV

Use the --tags option to display tagged public services grouped by tag:

  php bin/console debug:container --tags

Find all services with a specific tag by specifying the tag name with the --tag option:

  php bin/console debug:container --tag=form.type

Use the --parameters option to display all parameters:

  php bin/console debug:container --parameters

Display a specific parameter by specifying its name with the --parameter option:

  php bin/console debug:container --parameter=kernel.debug

By default, internal services are hidden. You can display them
using the --show-hidden flag:

  php bin/console debug:container --show-hidden


### Arguments

#### `name`

A service name (foo)

* Is required: no
* Is array: no
* Default: `NULL`

### Options

#### `--show-arguments`

Used to show arguments in services

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--show-hidden`

Used to show hidden (internal) services

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--tag`

Shows all services with a specific tag

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `NULL`

#### `--tags`

Displays tagged services for an application

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--parameter`

Displays a specific parameter for an application

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `NULL`

#### `--parameters`

Displays parameters for an application

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--types`

Displays types (classes/interfaces) available in the container

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env-var`

Displays a specific environment variable used in the container

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `NULL`

#### `--env-vars`

Displays environment variables used in the container

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--format`

The output format (txt, xml, json, or md)

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'txt'`

#### `--raw`

To output raw description

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--deprecations`

Displays deprecations generated when compiling and warming up the container

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`debug:event-dispatcher`
------------------------

Displays configured listeners for an application

### Usage

* `debug:event-dispatcher [--format FORMAT] [--raw] [--] [<event>]`

The debug:event-dispatcher command displays all configured listeners:

  php bin/console debug:event-dispatcher

To get specific listeners for an event, specify its name:

  php bin/console debug:event-dispatcher kernel.request

### Arguments

#### `event`

An event name

* Is required: no
* Is array: no
* Default: `NULL`

### Options

#### `--format`

The output format  (txt, xml, json, or md)

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'txt'`

#### `--raw`

To output raw description

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`debug:form`
------------

Displays form type information

### Usage

* `debug:form [--show-deprecated] [--format FORMAT] [--] [<class> [<option>]]`

The debug:form command displays information about form types.

  php bin/console debug:form

The command lists all built-in types, services types, type extensions and
guessers currently available.

  php bin/console debug:form Symfony\Component\Form\Extension\Core\Type\ChoiceType
  php bin/console debug:form ChoiceType

The command lists all defined options that contains the given form type,
as well as their parents and type extensions.

  php bin/console debug:form ChoiceType choice_value

Use the --show-deprecated option to display form types with
deprecated options or the deprecated options of the given form type:

  php bin/console debug:form --show-deprecated
  php bin/console debug:form ChoiceType --show-deprecated

The command displays the definition of the given option name.

  php bin/console debug:form --format=json

The command lists everything in a machine readable json format.

### Arguments

#### `class`

The form type class

* Is required: no
* Is array: no
* Default: `NULL`

#### `option`

The form type option

* Is required: no
* Is array: no
* Default: `NULL`

### Options

#### `--show-deprecated`

Display deprecated options in form types

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--format`

The output format (txt or json)

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'txt'`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`debug:router`
--------------

Displays current routes for an application

### Usage

* `debug:router [--show-controllers] [--format FORMAT] [--raw] [--] [<name>]`

The debug:router displays the configured routes:

  php bin/console debug:router


### Arguments

#### `name`

A route name

* Is required: no
* Is array: no
* Default: `NULL`

### Options

#### `--show-controllers`

Show assigned controllers in overview

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--format`

The output format (txt, xml, json, or md)

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'txt'`

#### `--raw`

To output raw route(s)

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`debug:translation`
-------------------

Displays translation messages information

### Usage

* `debug:translation [--domain [DOMAIN]] [--only-missing] [--only-unused] [--all] [--] <locale> [<bundle>]`

The debug:translation command helps finding unused or missing translation
messages and comparing them with the fallback ones by inspecting the
templates and translation files of a given bundle or the default translations directory.

You can display information about bundle translations in a specific locale:

  php bin/console debug:translation en AcmeDemoBundle

You can also specify a translation domain for the search:

  php bin/console debug:translation --domain=messages en AcmeDemoBundle

You can only display missing messages:

  php bin/console debug:translation --only-missing en AcmeDemoBundle

You can only display unused messages:

  php bin/console debug:translation --only-unused en AcmeDemoBundle

You can display information about application translations in a specific locale:

  php bin/console debug:translation en

You can display information about translations in all registered bundles in a specific locale:

  php bin/console debug:translation --all en


### Arguments

#### `locale`

The locale

* Is required: yes
* Is array: no
* Default: `NULL`

#### `bundle`

The bundle name or directory where to load the messages

* Is required: no
* Is array: no
* Default: `NULL`

### Options

#### `--domain`

The messages domain

* Accept value: yes
* Is value required: no
* Is multiple: no
* Default: `NULL`

#### `--only-missing`

Displays only missing messages

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--only-unused`

Displays only unused messages

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--all`

Load messages from all registered bundles

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`debug:twig`
------------

Shows a list of twig functions, filters, globals and tests

### Usage

* `debug:twig [--filter FILTER] [--format FORMAT] [--] [<name>]`

The debug:twig command outputs a list of twig functions,
filters, globals and tests.

  php bin/console debug:twig

The command lists all functions, filters, etc.

  php bin/console debug:twig @Twig/Exception/error.html.twig

The command lists all paths that match the given template name.

  php bin/console debug:twig --filter=date

The command lists everything that contains the word date.

  php bin/console debug:twig --format=json

The command lists everything in a machine readable json format.

### Arguments

#### `name`

The template name

* Is required: no
* Is array: no
* Default: `NULL`

### Options

#### `--filter`

Show details for all entries matching this filter

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `NULL`

#### `--format`

The output format (text or json)

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'text'`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`doctrine:cache:clear-collection-region`
----------------------------------------

Clear a second-level cache collection region

### Usage

* `doctrine:cache:clear-collection-region [--all] [--flush] [--em [EM]] [--] [<owner-class> [<association> [<owner-id>]]]`

The doctrine:cache:clear-collection-region command is meant to clear a second-level cache collection regions for an associated Entity Manager.
It is possible to delete/invalidate all collection region, a specific collection region or flushes the cache provider.

The execution type differ on how you execute the command.
If you want to invalidate all entries for an collection region this command would do the work:

doctrine:cache:clear-collection-region 'Entities\MyEntity' 'collectionName'

To invalidate a specific entry you should use :

doctrine:cache:clear-collection-region 'Entities\MyEntity' 'collectionName' 1

If you want to invalidate all entries for the all collection regions:

doctrine:cache:clear-collection-region --all

Alternatively, if you want to flush the configured cache provider for an collection region use this command:

doctrine:cache:clear-collection-region 'Entities\MyEntity' 'collectionName' --flush

Finally, be aware that if --flush option is passed,
not all cache providers are able to flush entries, because of a limitation of its execution nature.

### Arguments

#### `owner-class`

The owner entity name.

* Is required: no
* Is array: no
* Default: `NULL`

#### `association`

The association collection name.

* Is required: no
* Is array: no
* Default: `NULL`

#### `owner-id`

The owner identifier.

* Is required: no
* Is array: no
* Default: `NULL`

### Options

#### `--all`

If defined, all entity regions will be deleted/invalidated.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--flush`

If defined, all cache entries will be flushed.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--em`

The entity manager to use for this command

* Accept value: yes
* Is value required: no
* Is multiple: no
* Default: `NULL`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`doctrine:cache:clear-entity-region`
------------------------------------

Clear a second-level cache entity region

### Usage

* `doctrine:cache:clear-entity-region [--all] [--flush] [--em [EM]] [--] [<entity-class> [<entity-id>]]`

The doctrine:cache:clear-entity-region command is meant to clear a second-level cache entity region for an associated Entity Manager.
It is possible to delete/invalidate all entity region, a specific entity region or flushes the cache provider.

The execution type differ on how you execute the command.
If you want to invalidate all entries for an entity region this command would do the work:

doctrine:cache:clear-entity-region 'Entities\MyEntity'

To invalidate a specific entry you should use :

doctrine:cache:clear-entity-region 'Entities\MyEntity' 1

If you want to invalidate all entries for the all entity regions:

doctrine:cache:clear-entity-region --all

Alternatively, if you want to flush the configured cache provider for an entity region use this command:

doctrine:cache:clear-entity-region 'Entities\MyEntity' --flush

Finally, be aware that if --flush option is passed,
not all cache providers are able to flush entries, because of a limitation of its execution nature.

### Arguments

#### `entity-class`

The entity name.

* Is required: no
* Is array: no
* Default: `NULL`

#### `entity-id`

The entity identifier.

* Is required: no
* Is array: no
* Default: `NULL`

### Options

#### `--all`

If defined, all entity regions will be deleted/invalidated.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--flush`

If defined, all cache entries will be flushed.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--em`

The entity manager to use for this command

* Accept value: yes
* Is value required: no
* Is multiple: no
* Default: `NULL`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`doctrine:cache:clear-metadata`
-------------------------------

Clears all metadata cache for an entity manager

### Usage

* `doctrine:cache:clear-metadata [--flush] [--em [EM]]`

The doctrine:cache:clear-metadata command is meant to clear the metadata cache of associated Entity Manager.
It is possible to invalidate all cache entries at once - called delete -, or flushes the cache provider
instance completely.

The execution type differ on how you execute the command.
If you want to invalidate the entries (and not delete from cache instance), this command would do the work:

doctrine:cache:clear-metadata

Alternatively, if you want to flush the cache provider using this command:

doctrine:cache:clear-metadata --flush

Finally, be aware that if --flush option is passed, not all cache providers are able to flush entries,
because of a limitation of its execution nature.

### Options

#### `--flush`

If defined, cache entries will be flushed instead of deleted/invalidated.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--em`

The entity manager to use for this command

* Accept value: yes
* Is value required: no
* Is multiple: no
* Default: `NULL`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`doctrine:cache:clear-query`
----------------------------

Clears all query cache for an entity manager

### Usage

* `doctrine:cache:clear-query [--flush] [--em [EM]]`

The doctrine:cache:clear-query command is meant to clear the query cache of associated Entity Manager.
It is possible to invalidate all cache entries at once - called delete -, or flushes the cache provider
instance completely.

The execution type differ on how you execute the command.
If you want to invalidate the entries (and not delete from cache instance), this command would do the work:

doctrine:cache:clear-query

Alternatively, if you want to flush the cache provider using this command:

doctrine:cache:clear-query --flush

Finally, be aware that if --flush option is passed, not all cache providers are able to flush entries,
because of a limitation of its execution nature.

### Options

#### `--flush`

If defined, cache entries will be flushed instead of deleted/invalidated.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--em`

The entity manager to use for this command

* Accept value: yes
* Is value required: no
* Is multiple: no
* Default: `NULL`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`doctrine:cache:clear-query-region`
-----------------------------------

Clear a second-level cache query region

### Usage

* `doctrine:cache:clear-query-region [--all] [--flush] [--em [EM]] [--] [<region-name>]`

The doctrine:cache:clear-query-region command is meant to clear a second-level cache query region for an associated Entity Manager.
It is possible to delete/invalidate all query region, a specific query region or flushes the cache provider.

The execution type differ on how you execute the command.
If you want to invalidate all entries for the default query region this command would do the work:

doctrine:cache:clear-query-region

To invalidate entries for a specific query region you should use :

doctrine:cache:clear-query-region my_region_name

If you want to invalidate all entries for the all query region:

doctrine:cache:clear-query-region --all

Alternatively, if you want to flush the configured cache provider use this command:

doctrine:cache:clear-query-region my_region_name --flush

Finally, be aware that if --flush option is passed,
not all cache providers are able to flush entries, because of a limitation of its execution nature.

### Arguments

#### `region-name`

The query region to clear.

* Is required: no
* Is array: no
* Default: `NULL`

### Options

#### `--all`

If defined, all query regions will be deleted/invalidated.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--flush`

If defined, all cache entries will be flushed.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--em`

The entity manager to use for this command

* Accept value: yes
* Is value required: no
* Is multiple: no
* Default: `NULL`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`doctrine:cache:clear-result`
-----------------------------

Clears result cache for an entity manager

### Usage

* `doctrine:cache:clear-result [--flush] [--em [EM]]`

The doctrine:cache:clear-result command is meant to clear the result cache of associated Entity Manager.
It is possible to invalidate all cache entries at once - called delete -, or flushes the cache provider
instance completely.

The execution type differ on how you execute the command.
If you want to invalidate the entries (and not delete from cache instance), this command would do the work:

doctrine:cache:clear-result

Alternatively, if you want to flush the cache provider using this command:

doctrine:cache:clear-result --flush

Finally, be aware that if --flush option is passed, not all cache providers are able to flush entries,
because of a limitation of its execution nature.

### Options

#### `--flush`

If defined, cache entries will be flushed instead of deleted/invalidated.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--em`

The entity manager to use for this command

* Accept value: yes
* Is value required: no
* Is multiple: no
* Default: `NULL`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`doctrine:database:create`
--------------------------

Creates the configured database

### Usage

* `doctrine:database:create [-s|--shard SHARD] [-c|--connection [CONNECTION]] [--if-not-exists]`

The doctrine:database:create command creates the default connections database:

    php bin/console doctrine:database:create

You can also optionally specify the name of a connection to create the database for:

    php bin/console doctrine:database:create --connection=default

### Options

#### `--shard|-s`

The shard connection to use for this command

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `NULL`

#### `--connection|-c`

The connection to use for this command

* Accept value: yes
* Is value required: no
* Is multiple: no
* Default: `NULL`

#### `--if-not-exists`

Don't trigger an error, when the database already exists

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`doctrine:database:drop`
------------------------

Drops the configured database

### Usage

* `doctrine:database:drop [-s|--shard SHARD] [-c|--connection [CONNECTION]] [--if-exists] [-f|--force]`

The doctrine:database:drop command drops the default connections database:

    php bin/console doctrine:database:drop

The --force parameter has to be used to actually drop the database.

You can also optionally specify the name of a connection to drop the database for:

    php bin/console doctrine:database:drop --connection=default

Be careful: All data in a given database will be lost when executing this command.

### Options

#### `--shard|-s`

The shard connection to use for this command

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `NULL`

#### `--connection|-c`

The connection to use for this command

* Accept value: yes
* Is value required: no
* Is multiple: no
* Default: `NULL`

#### `--if-exists`

Don't trigger an error, when the database doesn't exist

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--force|-f`

Set this parameter to execute this action

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`doctrine:database:import`
--------------------------

Import SQL file(s) directly to Database.

### Usage

* `doctrine:database:import [--connection [CONNECTION]] [--] <file>...`

Import SQL file(s) directly to Database.

### Arguments

#### `file`

File path(s) of SQL to be executed.

* Is required: yes
* Is array: yes
* Default: `array ()`

### Options

#### `--connection`

The connection to use for this command

* Accept value: yes
* Is value required: no
* Is multiple: no
* Default: `NULL`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`doctrine:ensure-production-settings`
-------------------------------------

Verify that Doctrine is properly configured for a production environment

### Usage

* `doctrine:ensure-production-settings [--complete] [--em [EM]]`

Verify that Doctrine is properly configured for a production environment.

### Options

#### `--complete`

Flag to also inspect database connection existence.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--em`

The entity manager to use for this command

* Accept value: yes
* Is value required: no
* Is multiple: no
* Default: `NULL`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`doctrine:mapping:convert`
--------------------------

Convert mapping information between supported formats

### Usage

* `doctrine:mapping:convert [--filter FILTER] [-f|--force] [--from-database] [--extend [EXTEND]] [--num-spaces [NUM-SPACES]] [--namespace [NAMESPACE]] [--em [EM]] [--] <to-type> <dest-path>`
* `orm:convert:mapping`

Convert mapping information between supported formats.

This is an execute one-time command. It should not be necessary for
you to call this method multiple times, especially when using the --from-database
flag.

Converting an existing database schema into mapping files only solves about 70-80%
of the necessary mapping information. Additionally the detection from an existing
database cannot detect inverse associations, inheritance types,
entities with foreign keys as primary keys and many of the
semantical operations on associations such as cascade.

Hint: There is no need to convert YAML or XML mapping files to annotations
every time you make changes. All mapping drivers are first class citizens
in Doctrine 2 and can be used as runtime mapping for the ORM.

Hint: If you have a database with tables that should not be managed
by the ORM, you can use a DBAL functionality to filter the tables and sequences down
on a global level:

    $config->setFilterSchemaAssetsExpression($regexp);

### Arguments

#### `to-type`

The mapping type to be converted.

* Is required: yes
* Is array: no
* Default: `NULL`

#### `dest-path`

The path to generate your entities classes.

* Is required: yes
* Is array: no
* Default: `NULL`

### Options

#### `--filter`

A string pattern used to match entities that should be processed.

* Accept value: yes
* Is value required: yes
* Is multiple: yes
* Default: `array ()`

#### `--force|-f`

Force to overwrite existing mapping files.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--from-database`

Whether or not to convert mapping information from existing database.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--extend`

Defines a base class to be extended by generated entity classes.

* Accept value: yes
* Is value required: no
* Is multiple: no
* Default: `NULL`

#### `--num-spaces`

Defines the number of indentation spaces

* Accept value: yes
* Is value required: no
* Is multiple: no
* Default: `4`

#### `--namespace`

Defines a namespace for the generated entity classes, if converted from database.

* Accept value: yes
* Is value required: no
* Is multiple: no
* Default: `NULL`

#### `--em`

The entity manager to use for this command

* Accept value: yes
* Is value required: no
* Is multiple: no
* Default: `NULL`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`doctrine:mapping:import`
-------------------------

Imports mapping information from an existing database

### Usage

* `doctrine:mapping:import [--em [EM]] [--shard SHARD] [--filter FILTER] [--force] [--path PATH] [--] <name> [<mapping-type>]`

The doctrine:mapping:import command imports mapping information
from an existing database:

Generate annotation mappings into the src/ directory using App as the namespace:
php bin/console doctrine:mapping:import App\\Entity annotation --path=src/Entity

Generate xml mappings into the config/doctrine/ directory using App as the namespace:
php bin/console doctrine:mapping:import App\\Entity xml --path=config/doctrine

Generate XML mappings into a bundle:
php bin/console doctrine:mapping:import "MyCustomBundle" xml

You can also optionally specify which entity manager to import from with the
--em option:

php bin/console doctrine:mapping:import "MyCustomBundle" xml --em=default

If you don't want to map every entity that can be found in the database, use the
--filter option. It will try to match the targeted mapped entity with the
provided pattern string.

php bin/console doctrine:mapping:import "MyCustomBundle" xml --filter=MyMatchedEntity

Use the --force option, if you want to override existing mapping files:

php bin/console doctrine:mapping:import "MyCustomBundle" xml --force

### Arguments

#### `name`

The bundle or namespace to import the mapping information to

* Is required: yes
* Is array: no
* Default: `NULL`

#### `mapping-type`

The mapping type to export the imported mapping information to

* Is required: no
* Is array: no
* Default: `NULL`

### Options

#### `--em`

The entity manager to use for this command

* Accept value: yes
* Is value required: no
* Is multiple: no
* Default: `NULL`

#### `--shard`

The shard connection to use for this command

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `NULL`

#### `--filter`

A string pattern used to match entities that should be mapped.

* Accept value: yes
* Is value required: yes
* Is multiple: yes
* Default: `array ()`

#### `--force`

Force to overwrite existing mapping files.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--path`

The path where the files would be generated (not used when a bundle is passed).

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `NULL`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`doctrine:mapping:info`
-----------------------

### Usage

* `doctrine:mapping:info [--em [EM]]`


### Options

#### `--em`

The entity manager to use for this command

* Accept value: yes
* Is value required: no
* Is multiple: no
* Default: `NULL`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`doctrine:migrations:current`
-----------------------------

Outputs the current version

### Usage

* `doctrine:migrations:current [--configuration CONFIGURATION] [--db-configuration DB-CONFIGURATION]`
* `current`

Outputs the current version

### Options

#### `--configuration`

The path to a migrations configuration file. [default: any of migrations.{php,xml,json,yml,yaml}]

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `NULL`

#### `--db-configuration`

The path to a database connection configuration file.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'migrations-db.php'`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`doctrine:migrations:diff`
--------------------------

Generate a migration by comparing your current database to your mapping information.

### Usage

* `doctrine:migrations:diff [--configuration CONFIGURATION] [--db-configuration DB-CONFIGURATION] [--namespace NAMESPACE] [--filter-expression FILTER-EXPRESSION] [--formatted] [--line-length LINE-LENGTH] [--check-database-platform [CHECK-DATABASE-PLATFORM]] [--allow-empty-diff]`
* `diff`

The doctrine:migrations:diff command generates a migration by comparing your current database to your mapping information:

    bin/console doctrine:migrations:diff


### Options

#### `--configuration`

The path to a migrations configuration file. [default: any of migrations.{php,xml,json,yml,yaml}]

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `NULL`

#### `--db-configuration`

The path to a database connection configuration file.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'migrations-db.php'`

#### `--namespace`

The namespace to use for the migration (must be in the list of configured namespaces)

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `NULL`

#### `--filter-expression`

Tables which are filtered by Regular Expression.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `NULL`

#### `--formatted`

Format the generated SQL.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--line-length`

Max line length of unformatted lines.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `120`

#### `--check-database-platform`

Check Database Platform to the generated code.

* Accept value: yes
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--allow-empty-diff`

Do not throw an exception when no changes are detected.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`doctrine:migrations:dump-schema`
---------------------------------

Dump the schema for your database to a migration.

### Usage

* `doctrine:migrations:dump-schema [--configuration CONFIGURATION] [--db-configuration DB-CONFIGURATION] [--formatted] [--namespace NAMESPACE] [--filter-tables FILTER-TABLES] [--line-length [LINE-LENGTH]]`
* `dump-schema`

The doctrine:migrations:dump-schema command dumps the schema for your database to a migration:

    bin/console doctrine:migrations:dump-schema

After dumping your schema to a migration, you can rollup your migrations using the migrations:rollup command.

### Options

#### `--configuration`

The path to a migrations configuration file. [default: any of migrations.{php,xml,json,yml,yaml}]

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `NULL`

#### `--db-configuration`

The path to a database connection configuration file.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'migrations-db.php'`

#### `--formatted`

Format the generated SQL.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--namespace`

Namespace to use for the generated migrations (defaults to the first namespace definition).

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `NULL`

#### `--filter-tables`

Filter the tables to dump via Regex.

* Accept value: yes
* Is value required: yes
* Is multiple: yes
* Default: `array ()`

#### `--line-length`

Max line length of unformatted lines.

* Accept value: yes
* Is value required: no
* Is multiple: no
* Default: `120`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`doctrine:migrations:execute`
-----------------------------

Execute one or more migration versions up or down manually.

### Usage

* `doctrine:migrations:execute [--write-sql [WRITE-SQL]] [--dry-run] [--up] [--down] [--query-time] [--configuration CONFIGURATION] [--db-configuration DB-CONFIGURATION] [--] <versions>...`
* `execute`

The doctrine:migrations:execute command executes migration versions up or down manually:

    bin/console doctrine:migrations:execute FQCN

If no --up or --down option is specified it defaults to up:

    bin/console doctrine:migrations:execute FQCN --down

You can also execute the migration as a --dry-run:

    bin/console doctrine:migrations:execute FQCN --dry-run

You can output the would be executed SQL statements to a file with --write-sql:

    bin/console doctrine:migrations:execute FQCN --write-sql

Or you can also execute the migration without a warning message which you need to interact with:

    bin/console doctrine:migrations:execute FQCN --no-interaction

All the previous commands accept multiple migration versions, allowing you run execute more than
one migration at once:
    bin/console doctrine:migrations:execute FQCN-1 FQCN-2 ...FQCN-n 


### Arguments

#### `versions`

The versions to execute.

* Is required: yes
* Is array: yes
* Default: `array ()`

### Options

#### `--write-sql`

The path to output the migration SQL file instead of executing it. Defaults to current working directory.

* Accept value: yes
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--dry-run`

Execute the migration as a dry run.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--up`

Execute the migration up.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--down`

Execute the migration down.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--query-time`

Time all the queries individually.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--configuration`

The path to a migrations configuration file. [default: any of migrations.{php,xml,json,yml,yaml}]

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `NULL`

#### `--db-configuration`

The path to a database connection configuration file.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'migrations-db.php'`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`doctrine:migrations:generate`
------------------------------

Generate a blank migration class.

### Usage

* `doctrine:migrations:generate [--namespace NAMESPACE] [--configuration CONFIGURATION] [--db-configuration DB-CONFIGURATION]`
* `generate`

The doctrine:migrations:generate command generates a blank migration class:

    bin/console doctrine:migrations:generate


### Options

#### `--namespace`

The namespace to use for the migration (must be in the list of configured namespaces)

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `NULL`

#### `--configuration`

The path to a migrations configuration file. [default: any of migrations.{php,xml,json,yml,yaml}]

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `NULL`

#### `--db-configuration`

The path to a database connection configuration file.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'migrations-db.php'`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`doctrine:migrations:latest`
----------------------------

Outputs the latest version

### Usage

* `doctrine:migrations:latest [--configuration CONFIGURATION] [--db-configuration DB-CONFIGURATION]`
* `latest`

Outputs the latest version

### Options

#### `--configuration`

The path to a migrations configuration file. [default: any of migrations.{php,xml,json,yml,yaml}]

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `NULL`

#### `--db-configuration`

The path to a database connection configuration file.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'migrations-db.php'`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`doctrine:migrations:list`
--------------------------

Display a list of all available migrations and their status.

### Usage

* `doctrine:migrations:list [--configuration CONFIGURATION] [--db-configuration DB-CONFIGURATION]`
* `list-migrations`

The doctrine:migrations:list command outputs a list of all available migrations and their status:

    bin/console doctrine:migrations:list

### Options

#### `--configuration`

The path to a migrations configuration file. [default: any of migrations.{php,xml,json,yml,yaml}]

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `NULL`

#### `--db-configuration`

The path to a database connection configuration file.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'migrations-db.php'`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`doctrine:migrations:migrate`
-----------------------------

Execute a migration to a specified version or the latest available version.

### Usage

* `doctrine:migrations:migrate [--write-sql [WRITE-SQL]] [--dry-run] [--query-time] [--allow-no-migration] [--all-or-nothing [ALL-OR-NOTHING]] [--configuration CONFIGURATION] [--db-configuration DB-CONFIGURATION] [--] [<version>]`
* `migrate`

The doctrine:migrations:migrate command executes a migration to a specified version or the latest available version:

    bin/console doctrine:migrations:migrate

You can optionally manually specify the version you wish to migrate to:

    bin/console doctrine:migrations:migrate FQCN

You can specify the version you wish to migrate to using an alias:

    bin/console doctrine:migrations:migrate prev
    These alias are defined : first, latest, prev, current and next

You can specify the version you wish to migrate to using an number against the current version:

    bin/console doctrine:migrations:migrate current+3

You can also execute the migration as a --dry-run:

    bin/console doctrine:migrations:migrate FQCN --dry-run

You can output the would be executed SQL statements to a file with --write-sql:

    bin/console doctrine:migrations:migrate FQCN --write-sql

Or you can also execute the migration without a warning message which you need to interact with:

    bin/console doctrine:migrations:migrate --no-interaction

You can also time all the different queries if you wanna know which one is taking so long:

    bin/console doctrine:migrations:migrate --query-time

Use the --all-or-nothing option to wrap the entire migration in a transaction.

### Arguments

#### `version`

The version FQCN or alias (first, prev, next, latest) to migrate to.

* Is required: no
* Is array: no
* Default: `'latest'`

### Options

#### `--write-sql`

The path to output the migration SQL file instead of executing it. Defaults to current working directory.

* Accept value: yes
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--dry-run`

Execute the migration as a dry run.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--query-time`

Time all the queries individually.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--allow-no-migration`

Do not throw an exception if no migration is available.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--all-or-nothing`

Wrap the entire migration in a transaction.

* Accept value: yes
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--configuration`

The path to a migrations configuration file. [default: any of migrations.{php,xml,json,yml,yaml}]

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `NULL`

#### `--db-configuration`

The path to a database connection configuration file.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'migrations-db.php'`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`doctrine:migrations:rollup`
----------------------------

Rollup migrations by deleting all tracked versions and insert the one version that exists.

### Usage

* `doctrine:migrations:rollup [--configuration CONFIGURATION] [--db-configuration DB-CONFIGURATION]`
* `rollup`

The doctrine:migrations:rollup command rolls up migrations by deleting all tracked versions and
inserts the one version that exists that was created with the migrations:dump-schema command.

    bin/console doctrine:migrations:rollup

To dump your schema to a migration version you can use the migrations:dump-schema command.

### Options

#### `--configuration`

The path to a migrations configuration file. [default: any of migrations.{php,xml,json,yml,yaml}]

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `NULL`

#### `--db-configuration`

The path to a database connection configuration file.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'migrations-db.php'`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`doctrine:migrations:status`
----------------------------

View the status of a set of migrations.

### Usage

* `doctrine:migrations:status [--configuration CONFIGURATION] [--db-configuration DB-CONFIGURATION]`
* `status`

The doctrine:migrations:status command outputs the status of a set of migrations:

    bin/console doctrine:migrations:status

### Options

#### `--configuration`

The path to a migrations configuration file. [default: any of migrations.{php,xml,json,yml,yaml}]

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `NULL`

#### `--db-configuration`

The path to a database connection configuration file.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'migrations-db.php'`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`doctrine:migrations:sync-metadata-storage`
-------------------------------------------

Ensures that the metadata storage is at the latest version.

### Usage

* `doctrine:migrations:sync-metadata-storage [--configuration CONFIGURATION] [--db-configuration DB-CONFIGURATION]`
* `sync-metadata-storage`

The doctrine:migrations:sync-metadata-storage command updates metadata storage the latest version.

    bin/console doctrine:migrations:sync-metadata-storage

### Options

#### `--configuration`

The path to a migrations configuration file. [default: any of migrations.{php,xml,json,yml,yaml}]

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `NULL`

#### `--db-configuration`

The path to a database connection configuration file.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'migrations-db.php'`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`doctrine:migrations:up-to-date`
--------------------------------

Tells you if your schema is up-to-date.

### Usage

* `doctrine:migrations:up-to-date [-u|--fail-on-unregistered] [-l|--list-migrations] [--configuration CONFIGURATION] [--db-configuration DB-CONFIGURATION]`
* `up-to-date`

The doctrine:migrations:up-to-date command tells you if your schema is up-to-date:

    bin/console doctrine:migrations:up-to-date

### Options

#### `--fail-on-unregistered|-u`

Whether to fail when there are unregistered extra migrations found

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--list-migrations|-l`

Show a list of missing or not migrated versions.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--configuration`

The path to a migrations configuration file. [default: any of migrations.{php,xml,json,yml,yaml}]

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `NULL`

#### `--db-configuration`

The path to a database connection configuration file.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'migrations-db.php'`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`doctrine:migrations:version`
-----------------------------

Manually add and delete migration versions from the version table.

### Usage

* `doctrine:migrations:version [--add] [--delete] [--all] [--range-from [RANGE-FROM]] [--range-to [RANGE-TO]] [--configuration CONFIGURATION] [--db-configuration DB-CONFIGURATION] [--] [<version>]`
* `version`

The doctrine:migrations:version command allows you to manually add, delete or synchronize migration versions from the version table:

    bin/console doctrine:migrations:version MIGRATION-FQCN --add

If you want to delete a version you can use the --delete option:

    bin/console doctrine:migrations:version MIGRATION-FQCN --delete

If you want to synchronize by adding or deleting all migration versions available in the version table you can use the --all option:

    bin/console doctrine:migrations:version --add --all
    bin/console doctrine:migrations:version --delete --all

If you want to synchronize by adding or deleting some range of migration versions available in the version table you can use the --range-from/--range-to option:

    bin/console doctrine:migrations:version --add --range-from=MIGRATION-FQCN --range-to=MIGRATION-FQCN
    bin/console doctrine:migrations:version --delete --range-from=MIGRATION-FQCN --range-to=MIGRATION-FQCN

You can also execute this command without a warning message which you need to interact with:

    bin/console doctrine:migrations:version --no-interaction

### Arguments

#### `version`

The version to add or delete.

* Is required: no
* Is array: no
* Default: `NULL`

### Options

#### `--add`

Add the specified version.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--delete`

Delete the specified version.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--all`

Apply to all the versions.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--range-from`

Apply from specified version.

* Accept value: yes
* Is value required: no
* Is multiple: no
* Default: `NULL`

#### `--range-to`

Apply to specified version.

* Accept value: yes
* Is value required: no
* Is multiple: no
* Default: `NULL`

#### `--configuration`

The path to a migrations configuration file. [default: any of migrations.{php,xml,json,yml,yaml}]

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `NULL`

#### `--db-configuration`

The path to a database connection configuration file.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'migrations-db.php'`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`doctrine:query:dql`
--------------------

Executes arbitrary DQL directly from the command line

### Usage

* `doctrine:query:dql [--hydrate HYDRATE] [--first-result FIRST-RESULT] [--max-result MAX-RESULT] [--depth DEPTH] [--show-sql] [--em [EM]] [--] <dql>`

The doctrine:query:dql command executes the given DQL query and
outputs the results:

php bin/console doctrine:query:dql "SELECT u FROM UserBundle:User u"

You can also optional specify some additional options like what type of
hydration to use when executing the query:

php bin/console doctrine:query:dql "SELECT u FROM UserBundle:User u" --hydrate=array

Additionally you can specify the first result and maximum amount of results to
show:

php bin/console doctrine:query:dql "SELECT u FROM UserBundle:User u" --first-result=0 --max-result=30

### Arguments

#### `dql`

The DQL to execute.

* Is required: yes
* Is array: no
* Default: `NULL`

### Options

#### `--hydrate`

Hydration mode of result set. Should be either: object, array, scalar or single-scalar.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'object'`

#### `--first-result`

The first result in the result set.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `NULL`

#### `--max-result`

The maximum number of results in the result set.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `NULL`

#### `--depth`

Dumping depth of Entity graph.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `7`

#### `--show-sql`

Dump generated SQL instead of executing query

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--em`

The entity manager to use for this command

* Accept value: yes
* Is value required: no
* Is multiple: no
* Default: `NULL`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`doctrine:query:sql`
--------------------

Executes arbitrary SQL directly from the command line.

### Usage

* `doctrine:query:sql [--depth DEPTH] [--force-fetch] [--connection [CONNECTION]] [--] <sql>`

The doctrine:query:sql command executes the given SQL query and
outputs the results:

php bin/console doctrine:query:sql "SELECT * FROM users"

### Arguments

#### `sql`

The SQL statement to execute.

* Is required: yes
* Is array: no
* Default: `NULL`

### Options

#### `--depth`

Dumping depth of result set.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `7`

#### `--force-fetch`

Forces fetching the result.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--connection`

The connection to use for this command

* Accept value: yes
* Is value required: no
* Is multiple: no
* Default: `NULL`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`doctrine:schema:create`
------------------------

Executes (or dumps) the SQL needed to generate the database schema

### Usage

* `doctrine:schema:create [--dump-sql] [--em [EM]]`

Processes the schema and either create it directly on EntityManager Storage Connection or generate the SQL output.

Hint: If you have a database with tables that should not be managed
by the ORM, you can use a DBAL functionality to filter the tables and sequences down
on a global level:

    $config->setFilterSchemaAssetsExpression($regexp);

### Options

#### `--dump-sql`

Instead of trying to apply generated SQLs into EntityManager Storage Connection, output them.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--em`

The entity manager to use for this command

* Accept value: yes
* Is value required: no
* Is multiple: no
* Default: `NULL`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`doctrine:schema:drop`
----------------------

Executes (or dumps) the SQL needed to drop the current database schema

### Usage

* `doctrine:schema:drop [--dump-sql] [-f|--force] [--full-database] [--em [EM]]`

Processes the schema and either drop the database schema of EntityManager Storage Connection or generate the SQL output.
Beware that the complete database is dropped by this command, even tables that are not relevant to your metadata model.

Hint: If you have a database with tables that should not be managed
by the ORM, you can use a DBAL functionality to filter the tables and sequences down
on a global level:

    $config->setFilterSchemaAssetsExpression($regexp);

### Options

#### `--dump-sql`

Instead of trying to apply generated SQLs into EntityManager Storage Connection, output them.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--force|-f`

Don't ask for the deletion of the database, but force the operation to run.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--full-database`

Instead of using the Class Metadata to detect the database table schema, drop ALL assets that the database contains.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--em`

The entity manager to use for this command

* Accept value: yes
* Is value required: no
* Is multiple: no
* Default: `NULL`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`doctrine:schema:update`
------------------------

Executes (or dumps) the SQL needed to update the database schema to match the current mapping metadata

### Usage

* `doctrine:schema:update [--complete] [--dump-sql] [-f|--force] [--em [EM]]`

The doctrine:schema:update command generates the SQL needed to
synchronize the database schema with the current mapping metadata of the
default entity manager.

For example, if you add metadata for a new column to an entity, this command
would generate and output the SQL needed to add the new column to the database:

doctrine:schema:update --dump-sql

Alternatively, you can execute the generated queries:

doctrine:schema:update --force

If both options are specified, the queries are output and then executed:

doctrine:schema:update --dump-sql --force

Finally, be aware that if the --complete option is passed, this
task will drop all database assets (e.g. tables, etc) that are *not* described
by the current metadata. In other words, without this option, this task leaves
untouched any "extra" tables that exist in the database, but which aren't
described by any metadata.

Hint: If you have a database with tables that should not be managed
by the ORM, you can use a DBAL functionality to filter the tables and sequences down
on a global level:

    $config->setFilterSchemaAssetsExpression($regexp);

### Options

#### `--complete`

If defined, all assets of the database which are not relevant to the current metadata will be dropped.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--dump-sql`

Dumps the generated SQL statements to the screen (does not execute them).

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--force|-f`

Causes the generated SQL statements to be physically executed against your database.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--em`

The entity manager to use for this command

* Accept value: yes
* Is value required: no
* Is multiple: no
* Default: `NULL`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`doctrine:schema:validate`
--------------------------

Validate the mapping files

### Usage

* `doctrine:schema:validate [--skip-mapping] [--skip-sync] [--em [EM]]`

Validate that the mapping files are correct and in sync with the database.

### Options

#### `--skip-mapping`

Skip the mapping validation check

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--skip-sync`

Skip checking if the mapping is in sync with the database

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--em`

The entity manager to use for this command

* Accept value: yes
* Is value required: no
* Is multiple: no
* Default: `NULL`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`lint:container`
----------------

Ensures that arguments injected into services match type declarations

### Usage

* `lint:container`

This command parses service definitions and ensures that injected values match the type declarations of each services' class.

### Options

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`lint:twig`
-----------

Lints a template and outputs encountered errors

### Usage

* `lint:twig [--format FORMAT] [--show-deprecations] [--] [<filename>...]`

The lint:twig command lints a template and outputs to STDOUT
the first encountered syntax error.

You can validate the syntax of contents passed from STDIN:

  cat filename | php bin/console lint:twig -

Or the syntax of a file:

  php bin/console lint:twig filename

Or of a whole directory:

  php bin/console lint:twig dirname
  php bin/console lint:twig dirname --format=json

Or all template files in a bundle:

  php bin/console lint:twig @AcmeDemoBundle


### Arguments

#### `filename`

A file, a directory or "-" for reading from STDIN

* Is required: no
* Is array: yes
* Default: `array ()`

### Options

#### `--format`

The output format

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'txt'`

#### `--show-deprecations`

Show deprecations as errors

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`lint:xliff`
------------

Lints a XLIFF file and outputs encountered errors

### Usage

* `lint:xliff [--format FORMAT] [--] [<filename>...]`

The lint:xliff command lints a XLIFF file and outputs to STDOUT
the first encountered syntax error.

You can validates XLIFF contents passed from STDIN:

  cat filename | php bin/console lint:xliff -

You can also validate the syntax of a file:

  php bin/console lint:xliff filename

Or of a whole directory:

  php bin/console lint:xliff dirname
  php bin/console lint:xliff dirname --format=json

Or find all files in a bundle:

  php bin/console lint:xliff @AcmeDemoBundle


### Arguments

#### `filename`

A file, a directory or "-" for reading from STDIN

* Is required: no
* Is array: yes
* Default: `array ()`

### Options

#### `--format`

The output format

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'txt'`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`lint:yaml`
-----------

Lints a file and outputs encountered errors

### Usage

* `lint:yaml [--format FORMAT] [--parse-tags] [--] [<filename>...]`

The lint:yaml command lints a YAML file and outputs to STDOUT
the first encountered syntax error.

You can validates YAML contents passed from STDIN:

  cat filename | php bin/console lint:yaml -

You can also validate the syntax of a file:

  php bin/console lint:yaml filename

Or of a whole directory:

  php bin/console lint:yaml dirname
  php bin/console lint:yaml dirname --format=json

Or find all files in a bundle:

  php bin/console lint:yaml @AcmeDemoBundle


### Arguments

#### `filename`

A file, a directory or "-" for reading from STDIN

* Is required: no
* Is array: yes
* Default: `array ()`

### Options

#### `--format`

The output format

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'txt'`

#### `--parse-tags`

Parse custom tags

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`make:auth`
-----------

Creates a Guard authenticator of different flavors

### Usage

* `make:auth`

The make:auth command generates various authentication systems,
by asking questions.

It can provide an empty authenticator, or a full login form authentication process.
In both cases it also updates your security.yaml.
For the login form, it also generates a controller and the twig template.

php bin/console make:auth


### Options

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`make:command`
--------------

Creates a new console command class

### Usage

* `make:command [<name>]`

The make:command command generates a new command:

php bin/console make:command app:do-something

If the argument is missing, the command will ask for the command name interactively.


### Arguments

#### `name`

Choose a command name (e.g. app:agreeable-chef)

* Is required: no
* Is array: no
* Default: `NULL`

### Options

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`make:controller`
-----------------

Creates a new controller class

### Usage

* `make:controller [--no-template] [--] [<controller-class>]`

The make:controller command generates a new controller class.

php bin/console make:controller CoolStuffController

If the argument is missing, the command will ask for the controller class name interactively.

You can also generate the controller alone, without template with this option:

php bin/console make:controller --no-template


### Arguments

#### `controller-class`

Choose a name for your controller class (e.g. GentlePizzaController)

* Is required: no
* Is array: no
* Default: `NULL`

### Options

#### `--no-template`

Use this option to disable template generation

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`make:crud`
-----------

Creates CRUD for Doctrine entity class

### Usage

* `make:crud [<entity-class>]`

The make:crud command generates crud controller with templates for selected entity.

php bin/console make:crud BlogPost

If the argument is missing, the command will ask for the entity class name interactively.

### Arguments

#### `entity-class`

The class name of the entity to create CRUD (e.g. BravePopsicle)

* Is required: no
* Is array: no
* Default: `NULL`

### Options

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`make:docker:database`
----------------------

Adds a database container to your docker-compose.yaml file

### Usage

* `make:docker:database`

Adds a database container to your docker-compose.yaml file

### Options

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`make:entity`
-------------

Creates or updates a Doctrine entity class, and optionally an API Platform resource

### Usage

* `make:entity [-a|--api-resource] [--regenerate] [--overwrite] [--] [<name>]`

The make:entity command creates or updates an entity and repository class.

php bin/console make:entity BlogPost

If the argument is missing, the command will ask for the entity class name interactively.

You can also mark this class as an API Platform resource. A hypermedia CRUD API will
automatically be available for this entity class:

php bin/console make:entity --api-resource

You can also generate all the getter/setter/adder/remover methods
for the properties of existing entities:

php bin/console make:entity --regenerate

You can also *overwrite* any existing methods:

php bin/console make:entity --regenerate --overwrite


### Arguments

#### `name`

Class name of the entity to create or update (e.g. TinyElephant)

* Is required: no
* Is array: no
* Default: `NULL`

### Options

#### `--api-resource|-a`

Mark this class as an API Platform resource (expose a CRUD API for it)

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--regenerate`

Instead of adding new fields, simply generate the methods (e.g. getter/setter) for existing fields

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--overwrite`

Overwrite any existing getter/setter methods

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`make:fixtures`
---------------

Creates a new class to load Doctrine fixtures

### Usage

* `make:fixtures [<fixtures-class>]`

The make:fixtures command generates a new Doctrine fixtures class.

php bin/console make:fixtures AppFixtures

If the argument is missing, the command will ask for a class interactively.


### Arguments

#### `fixtures-class`

The class name of the fixtures to create (e.g. AppFixtures)

* Is required: no
* Is array: no
* Default: `NULL`

### Options

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`make:form`
-----------

Creates a new form class

### Usage

* `make:form [<name> [<bound-class>]]`

The make:form command generates a new form class.

php bin/console make:form UserType

If the argument is missing, the command will ask for the form class interactively.

You can optionally specify the bound class in a second argument.
This can be the name of an entity like User

php bin/console make:form UserType User

You can also specify a fully qualified name to another class like \App\Dto\UserData.
Slashes must be escaped in the argument.

php bin/console make:form UserType \\App\\Dto\\UserData



### Arguments

#### `name`

The name of the form class (e.g. GentleElephantType)

* Is required: no
* Is array: no
* Default: `NULL`

#### `bound-class`

The name of Entity or fully qualified model class name that the new form will be bound to (empty for none)

* Is required: no
* Is array: no
* Default: `NULL`

### Options

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`make:functional-test`
----------------------

Creates a new functional test class

### Usage

* `make:functional-test [<name>]`

The make:functional-test command generates a new functional test class.

php bin/console make:functional-test DefaultControllerTest

If the argument is missing, the command will ask for the class name interactively.


### Arguments

#### `name`

The name of the functional test class (e.g. DefaultControllerTest)

* Is required: no
* Is array: no
* Default: `NULL`

### Options

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`make:message`
--------------

Creates a new message and handler

### Usage

* `make:message [<name>]`

The make:message command generates a new message class & handler.

php bin/console make:message EmailMessage

If the argument is missing, the command will ask for the message class interactively.


### Arguments

#### `name`

The name of the message class (e.g. SendEmailMessage)

* Is required: no
* Is array: no
* Default: `NULL`

### Options

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`make:messenger-middleware`
---------------------------

Creates a new messenger middleware

### Usage

* `make:messenger-middleware [<name>]`

The make:messenger-middleware command generates a new message class & handler.

php bin/console make:messenger-middleware EmailMessage

If the argument is missing, the command will ask for the message class interactively.


### Arguments

#### `name`

The name of the middleware class (e.g. CustomMiddleware)

* Is required: no
* Is array: no
* Default: `NULL`

### Options

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`make:migration`
----------------

Creates a new migration based on database changes

### Usage

* `make:migration`

The make:migration command generates a new migration:

php bin/console make:migration


### Options

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`make:registration-form`
------------------------

Creates a new registration form system

### Usage

* `make:registration-form`

The make:registration-form command generates a complete registration form, controller & template.

php bin/console make:registration-form

The command will ask for several pieces of information to build your form.


### Options

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`make:reset-password`
---------------------

Create controller, entity, and repositories for use with symfonycasts/reset-password-bundle

### Usage

* `make:reset-password`

The make:reset-password command generates all the files needed to implement
 a fully-functional & secure password reset system.

The SymfonycastsResetPasswordBundle is required and can be added using composer:
composer require symfonycasts/reset-password-bundle

For more information on the reset-password-bundle check out:
https://github.com/symfonycasts/reset-password-bundle

make:reset-password requires a user entity with an email property,
email getter method, and a password setter method. Maker will ask for these
interactively if they cannot be guessed.

Maker will also update your reset-password.yaml configuration file
if one exists. If you have customized the configuration file, maker will attempt
to modify it accordingly but preserve your customizations.

php bin/console make:reset-password


### Options

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`make:serializer:encoder`
-------------------------

Creates a new serializer encoder class

### Usage

* `make:serializer:encoder [<name> [<format>]]`

The make:serializer:encoder command generates a new serializer encoder class.

php bin/console make:serializer:encoder YamlEncoder

If the argument is missing, the command will ask for the class name interactively.


### Arguments

#### `name`

Choose a class name for your encoder (e.g. YamlEncoder)

* Is required: no
* Is array: no
* Default: `NULL`

#### `format`

Pick your format name (e.g. yaml)

* Is required: no
* Is array: no
* Default: `NULL`

### Options

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`make:serializer:normalizer`
----------------------------

Creates a new serializer normalizer class

### Usage

* `make:serializer:normalizer [<name>]`

The make:serializer:normalizer command generates a new serializer normalizer class.

php bin/console make:serializer:normalizer UserNormalizer

If the argument is missing, the command will ask for the class name interactively.


### Arguments

#### `name`

Choose a class name for your normalizer (e.g. UserNormalizer)

* Is required: no
* Is array: no
* Default: `NULL`

### Options

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`make:subscriber`
-----------------

Creates a new event subscriber class

### Usage

* `make:subscriber [<name> [<event>]]`

The make:subscriber command generates a new event subscriber class.

php bin/console make:subscriber ExceptionSubscriber

If the argument is missing, the command will ask for the class name interactively.


### Arguments

#### `name`

Choose a class name for your event subscriber (e.g. ExceptionSubscriber)

* Is required: no
* Is array: no
* Default: `NULL`

#### `event`

What event do you want to subscribe to?

* Is required: no
* Is array: no
* Default: `NULL`

### Options

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`make:twig-extension`
---------------------

Creates a new Twig extension class

### Usage

* `make:twig-extension [<name>]`

The make:twig-extension command generates a new twig extension class.

php bin/console make:twig-extension AppExtension

If the argument is missing, the command will ask for the class name interactively.


### Arguments

#### `name`

The name of the Twig extension class (e.g. AppExtension)

* Is required: no
* Is array: no
* Default: `NULL`

### Options

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`make:unit-test`
----------------

Creates a new unit test class

### Usage

* `make:unit-test [<name>]`

The make:unit-test command generates a new unit test class.

php bin/console make:unit-test UtilTest

If the argument is missing, the command will ask for the class name interactively.


### Arguments

#### `name`

The name of the unit test class (e.g. UtilTest)

* Is required: no
* Is array: no
* Default: `NULL`

### Options

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`make:user`
-----------

Creates a new security user class

### Usage

* `make:user [--is-entity] [--identity-property-name IDENTITY-PROPERTY-NAME] [--with-password] [--use-argon2] [--] [<name>]`

The make:user command generates a new user class for security
and updates your security.yaml file for it. It will also generate a user provider
class if your situation needs a custom class.

php bin/console make:user User

If the argument is missing, the command will ask for the class name interactively.


### Arguments

#### `name`

The name of the security user class (e.g. User)

* Is required: no
* Is array: no
* Default: `NULL`

### Options

#### `--is-entity`

Do you want to store user data in the database (via Doctrine)?

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--identity-property-name`

Enter a property name that will be the unique "display" name for the user (e.g. email, username, uuid)

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `NULL`

#### `--with-password`

Will this app be responsible for checking the password? Choose No if the password is actually checked by some other system (e.g. a single sign-on server)

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--use-argon2`

Use the Argon2i password encoder? (deprecated)

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`make:validator`
----------------

Creates a new validator and constraint class

### Usage

* `make:validator [<name>]`

The make:validator command generates a new validation constraint.

php bin/console make:validator EnabledValidator

If the argument is missing, the command will ask for the constraint class name interactively.


### Arguments

#### `name`

The name of the validator class (e.g. EnabledValidator)

* Is required: no
* Is array: no
* Default: `NULL`

### Options

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`make:voter`
------------

Creates a new security voter class

### Usage

* `make:voter [<name>]`

The make:voter command generates a new security voter.

php bin/console make:voter BlogPostVoter

If the argument is missing, the command will ask for the class name interactively.


### Arguments

#### `name`

The name of the security voter class (e.g. BlogPostVoter)

* Is required: no
* Is array: no
* Default: `NULL`

### Options

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`router:match`
--------------

Helps debug routes by simulating a path info match

### Usage

* `router:match [--method METHOD] [--scheme SCHEME] [--host HOST] [--] <path_info>`

The router:match shows which routes match a given request and which don't and for what reason:

  php bin/console router:match /foo

or

  php bin/console router:match /foo --method POST --scheme https --host symfony.com --verbose


### Arguments

#### `path_info`

A path info

* Is required: yes
* Is array: no
* Default: `NULL`

### Options

#### `--method`

Sets the HTTP method

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `NULL`

#### `--scheme`

Sets the URI scheme (usually http or https)

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `NULL`

#### `--host`

Sets the URI host

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `NULL`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`secrets:decrypt-to-local`
--------------------------

Decrypts all secrets and stores them in the local vault

### Usage

* `secrets:decrypt-to-local [-f|--force]`

The secrets:decrypt-to-local command decrypts all secrets and copies them in the local vault.

    bin/console secrets:decrypt-to-local

When the option --force is provided, secrets that already exist in the local vault are overriden.

    bin/console secrets:decrypt-to-local --force

### Options

#### `--force|-f`

Forces overriding of secrets that already exist in the local vault

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`secrets:encrypt-from-local`
----------------------------

Encrypts all local secrets to the vault

### Usage

* `secrets:encrypt-from-local`

The secrets:encrypt-from-local command encrypts all locally overridden secrets to the vault.

    bin/console secrets:encrypt-from-local

### Options

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`secrets:generate-keys`
-----------------------

Generates new encryption keys

### Usage

* `secrets:generate-keys [-l|--local] [-r|--rotate]`

The secrets:generate-keys command generates a new encryption key.

    bin/console secrets:generate-keys

If encryption keys already exist, the command must be called with
the --rotate option in order to override those keys and re-encrypt
existing secrets.

    bin/console secrets:generate-keys --rotate

### Options

#### `--local|-l`

Updates the local vault.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--rotate|-r`

Re-encrypts existing secrets with the newly generated keys.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`secrets:list`
--------------

Lists all secrets

### Usage

* `secrets:list [-r|--reveal]`

The secrets:list command list all stored secrets.

    bin/console secrets:list

When the option --reveal is provided, the decrypted secrets are also displayed.

    bin/console secrets:list --reveal

### Options

#### `--reveal|-r`

Display decrypted values alongside names

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`secrets:remove`
----------------

Removes a secret from the vault

### Usage

* `secrets:remove [-l|--local] [--] <name>`

The secrets:remove command removes a secret from the vault.

    bin/console secrets:remove <name>

### Arguments

#### `name`

The name of the secret

* Is required: yes
* Is array: no
* Default: `NULL`

### Options

#### `--local|-l`

Updates the local vault.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`secrets:set`
-------------

Sets a secret in the vault

### Usage

* `secrets:set [-l|--local] [-r|--random [RANDOM]] [--] <name> [<file>]`

The secrets:set command stores a secret in the vault.

    bin/console secrets:set <name>

To reference secrets in services.yaml or any other config
files, use "%env(<name>)%".

By default, the secret value should be entered interactively.
Alternatively, provide a file where to read the secret from:

    php bin/console secrets:set <name> filename

Use "-" as a file name to read from STDIN:

    cat filename | php bin/console secrets:set <name> -

Use --local to override secrets for local needs.

### Arguments

#### `name`

The name of the secret

* Is required: yes
* Is array: no
* Default: `NULL`

#### `file`

A file where to read the secret from or "-" for reading from STDIN

* Is required: no
* Is array: no
* Default: `NULL`

### Options

#### `--local|-l`

Updates the local vault.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--random|-r`

Generates a random value.

* Accept value: yes
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`security:encode-password`
--------------------------

Encodes a password

### Usage

* `security:encode-password [--empty-salt] [--] [<password> [<user-class>]]`


The security:encode-password command encodes passwords according to your
security configuration. This command is mainly used to generate passwords for
the in_memory user provider type and for changing passwords
in the database while developing the application.

Suppose that you have the following security configuration in your application:


# app/config/security.yml
security:
    encoders:
        Symfony\Component\Security\Core\User\User: plaintext
        App\Entity\User: auto


If you execute the command non-interactively, the first available configured
user class under the security.encoders key is used and a random salt is
generated to encode the password:

  php bin/console security:encode-password --no-interaction [password]

Pass the full user class path as the second argument to encode passwords for
your own entities:

  php bin/console security:encode-password --no-interaction [password] 'App\Entity\User'

Executing the command interactively allows you to generate a random salt for
encoding the password:

  php bin/console security:encode-password [password] 'App\Entity\User'

In case your encoder doesn't require a salt, add the empty-salt option:

  php bin/console security:encode-password --empty-salt [password] 'App\Entity\User'


### Arguments

#### `password`

The plain password to encode.

* Is required: no
* Is array: no
* Default: `NULL`

#### `user-class`

The User entity class path associated with the encoder used to encode the password.

* Is required: no
* Is array: no
* Default: `NULL`

### Options

#### `--empty-salt`

Do not generate a salt or let the encoder generate one.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`server:dump`
-------------

Starts a dump server that collects and displays dumps in a single place

### Usage

* `server:dump [--format FORMAT]`

server:dump starts a dump server that collects and displays
dumps in a single place for debugging you application:

  php bin/console server:dump

You can consult dumped data in HTML format in your browser by providing the --format=html option
and redirecting the output to a file:

  php bin/console server:dump --format="html" > dump.html


### Options

#### `--format`

The output format (cli, html)

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'cli'`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`server:log`
------------

Starts a log server that displays logs in real time

### Usage

* `server:log [--host HOST] [--format FORMAT] [--date-format DATE-FORMAT] [--filter FILTER]`

server:log starts a log server to display in real time the log
messages generated by your application:

  php bin/console server:log

To get the information as a machine readable format, use the
--filter option:

php bin/console server:log --filter=port

### Options

#### `--host`

The server host

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'0.0.0.0:9911'`

#### `--format`

The line format

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'%datetime% %start_tag%%level_name%%end_tag% [%channel%] %message%%context%%extra%'`

#### `--date-format`

The date format

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'H:i:s'`

#### `--filter`

An expression to filter log. Example: "level > 200 or channel in ['app', 'doctrine']"

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `NULL`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

`translation:update`
--------------------

Updates the translation file

### Usage

* `translation:update [--prefix [PREFIX]] [--output-format [OUTPUT-FORMAT]] [--dump-messages] [--force] [--no-backup] [--clean] [--domain [DOMAIN]] [--xliff-version [XLIFF-VERSION]] [--sort [SORT]] [--] <locale> [<bundle>]`

The translation:update command extracts translation strings from templates
of a given bundle or the default translations directory. It can display them or merge
the new ones into the translation files.

When new translation strings are found it can automatically add a prefix to the translation
message.

Example running against a Bundle (AcmeBundle)

  php bin/console translation:update --dump-messages en AcmeBundle
  php bin/console translation:update --force --prefix="new_" fr AcmeBundle

Example running against default messages directory

  php bin/console translation:update --dump-messages en
  php bin/console translation:update --force --prefix="new_" fr

You can sort the output with the --sort flag:

    php bin/console translation:update --dump-messages --sort=asc en AcmeBundle
    php bin/console translation:update --dump-messages --sort=desc fr

### Arguments

#### `locale`

The locale

* Is required: yes
* Is array: no
* Default: `NULL`

#### `bundle`

The bundle name or directory where to load the messages

* Is required: no
* Is array: no
* Default: `NULL`

### Options

#### `--prefix`

Override the default prefix

* Accept value: yes
* Is value required: no
* Is multiple: no
* Default: `'__'`

#### `--output-format`

Override the default output format

* Accept value: yes
* Is value required: no
* Is multiple: no
* Default: `'xlf'`

#### `--dump-messages`

Should the messages be dumped in the console

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--force`

Should the update be done

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-backup`

Should backup be disabled

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--clean`

Should clean not found messages

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--domain`

Specify the domain to update

* Accept value: yes
* Is value required: no
* Is multiple: no
* Default: `NULL`

#### `--xliff-version`

Override the default xliff version

* Accept value: yes
* Is value required: no
* Is multiple: no
* Default: `'1.2'`

#### `--sort`

Return list of messages sorted alphabetically

* Accept value: yes
* Is value required: no
* Is multiple: no
* Default: `'asc'`

#### `--help|-h`

Display this help message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--ansi`

Force ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-ansi`

Disable ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`

#### `--env|-e`

The Environment name.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Default: `'dev'`

#### `--no-debug`

Switches off debug mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Default: `false`