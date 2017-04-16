# Dbmover\Pgsql
DbMover plugin to (re)create PostgreSQL-specific constraints

## Installation
```sh
$ composer require dbmover/pgsql-constraints
```

    This package is part of the `dbmover/pgsql` meta-package.

## Usage
See `dbmover/core`.

## Caveats
This plugin does not support inline declaration of constraints in `CREATE TABLE`
statements, e.g. `foo INTEGER NOT NULL REFERENCES bar(id) ON DELETE CASCADE`.
Instead, you should create the constraints using `ALTER TABLE` statements in
your schemas.

## Contributing
See `dbmover/core`.

