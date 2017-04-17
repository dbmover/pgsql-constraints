<?php

/**
 * @package Dbmover
 * @subpackage Pgsql
 * @subpackage Constraints
 */

namespace Dbmover\Pgsql\Constraints;

use Dbmover\Constraints;

class Plugin extends Constraints\Plugin
{
    protected function dropConstraint(string $table, string $constraint, string $type)
    {
        if (in_array($type, ['FOREIGN KEY'])) {
            $this->addOperation("ALTER TABLE $table DROP CONSTRAINT IF EXISTS $constraint CASCADE;");
        }
    }
}

