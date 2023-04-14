<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Permission;
use TCG\Voyager\Models\Role;

class BreadTemplatesPermissionsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        // Skip if already exists
        if (Permission::where('table_name', 'bread_templates')->first()) {
            return;
        }

        Permission::generateFor('bread_templates');

        $role = Role::where('name', 'admin')->first();

        if (!is_null($role)) {
            $role->permissions()->attach(
                Permission::where('table_name', 'bread_templates')->pluck('id')->all()
            );
        }
    }
}
