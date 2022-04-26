<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            [
                'name' => 'manage_role',
                'guard_name' => 'web',
            ],
            [
                'name' => 'manage_permission',
                'guard_name' => 'web',
            ],
            [
                'name' => 'manage_user',
                'guard_name' => 'web',
            ],
            [
                'name' => 'manage_sales',
                'guard_name' => 'web',
            ],
            [
                'name' => 'manage_projects',
                'guard_name' => 'web',
            ],
            [
                'name' => 'product_access',
                'guard_name' => 'web',
            ],
            [
                'name' => 'product_create',
                'guard_name' => 'web',
            ],
            [
                'name' => 'product_edit',
                'guard_name' => 'web',
            ],
            [
                'name' => 'product_show',
                'guard_name' => 'web',
            ],
            [
                'name' => 'product_delete',
                'guard_name' => 'web',
            ],
            [
                'name' => 'purchase_access',
                'guard_name' => 'web',
            ],
            [
                'name' => 'purchase_create',
                'guard_name' => 'web',
            ],
            [
                'name' => 'purchase_edit',
                'guard_name' => 'web',
            ],
            [
                'name' => 'purchase_show',
                'guard_name' => 'web',
            ],
            [
                'name' => 'purchase_delete',
                'guard_name' => 'web',
            ],
            [
                'name' => 'order_access',
                'guard_name' => 'web',
            ],
            [
                'name' => 'order_create',
                'guard_name' => 'web',
            ],
            [
                'name' => 'order_edit',
                'guard_name' => 'web',
            ],
            [
                'name' => 'order_show',
                'guard_name' => 'web',
            ],
            [
                'name' => 'order_delete',
                'guard_name' => 'web',
            ],
            [
                'name' => 'supplier_access',
                'guard_name' => 'web',
            ],
            [
                'name' => 'supplier_create',
                'guard_name' => 'web',
            ],
            [
                'name' => 'supplier_edit',
                'guard_name' => 'web',
            ],
            [
                'name' => 'supplier_show',
                'guard_name' => 'web',
            ],
            [
                'name' => 'supplier_delete',
                'guard_name' => 'web',
            ],
            [
                'name' => 'warehouse_access',
                'guard_name' => 'web',
            ],
            [
                'name' => 'warehouse_create',
                'guard_name' => 'web',
            ],
            [
                'name' => 'warehouse_edit',
                'guard_name' => 'web',
            ],
            [
                'name' => 'warehouse_show',
                'guard_name' => 'web',
            ],
            [
                'name' => 'warehouse_delete',
                'guard_name' => 'web',
            ],
            [
                'name' => 'category_access',
                'guard_name' => 'web',
            ],
            [
                'name' => 'category_create',
                'guard_name' => 'web',
            ],
            [
                'name' => 'category_edit',
                'guard_name' => 'web',
            ],
            [
                'name' => 'category_show',
                'guard_name' => 'web',
            ],
            [
                'name' => 'category_delete',
                'guard_name' => 'web',
            ],
            [
                'name' => 'payement_access',
                'guard_name' => 'web',
            ],
            [
                'name' => 'payement_create',
                'guard_name' => 'web',
            ],
            [
                'name' => 'payement_edit',
                'guard_name' => 'web',
            ],
            [
                'name' => 'payement_show',
                'guard_name' => 'web',
            ],
            [
                'name' => 'payement_delete',
                'guard_name' => 'web',
            ],
            [
                'name' => 'customer_access',
                'guard_name' => 'web',
            ],
            [
                'name' => 'customer_create',
                'guard_name' => 'web',
            ],
            [
                'name' => 'customer_edit',
                'guard_name' => 'web',
            ],
            [
                'name' => 'customer_show',
                'guard_name' => 'web',
            ],
            [
                'name' => 'customer_delete',
                'guard_name' => 'web',
            ],
            [
                'name' => 'shipping_access',
                'guard_name' => 'web',
            ],
            [
                'name' => 'shipping_create',
                'guard_name' => 'web',
            ],
            [
                'name' => 'shipping_edit',
                'guard_name' => 'web',
            ],
            [
                'name' => 'shipping_show',
                'guard_name' => 'web',
            ],
            [
                'name' => 'shipping_delete',
                'guard_name' => 'web',
            ],
            [
                'name' => 'store_access',
                'guard_name' => 'web',
            ],
            [
                'name' => 'store_create',
                'guard_name' => 'web',
            ],
            [
                'name' => 'store_edit',
                'guard_name' => 'web',
            ],
            [
                'name' => 'store_show',
                'guard_name' => 'web',
            ],
            [
                'name' => 'store_delete',
                'guard_name' => 'web',
            ],
            [
                'name' => 'unit_access',
                'guard_name' => 'web',
            ],
            [
                'name' => 'unit_create',
                'guard_name' => 'web',
            ],
            [
                'name' => 'unit_edit',
                'guard_name' => 'web',
            ],
            [
                'name' => 'unit_show',
                'guard_name' => 'web',
            ],
            [
                'name' => 'unit_delete',
                'guard_name' => 'web',
            ]
        ]);
    }
}
