<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Permission;

class BreadTemplatesPermissionsTableUnseeder extends Seeder
{
    /**
     * Remove permissions data file.
     *
     * @return void
     */
    public function run()
    {
        Permission::removeFrom('bread_templates');
    }
}
