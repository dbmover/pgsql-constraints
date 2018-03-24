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
    /**
     * @param string $table
     * @param string $constraint
     * @param string $type
     * @return void
     */
    protected function dropConstraint(string $table, string $constraint, string $type) : void
    {
        if (in_array($type, ['FOREIGN KEY'])) {
            $this->addOperation("ALTER TABLE $table DROP CONSTRAINT IF EXISTS $constraint CASCADE;");
        }
    }
}

