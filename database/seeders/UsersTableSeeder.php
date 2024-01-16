<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Super Admin',
                'username' => 'super_admin',
                'email' => 'super_admin@demo.com',
                'password' => Hash::make('1234'),
                'role' => 'super_admin',
                'status' => 'active',
                'address' => '123 Main St',
                'company' => 'Demo Company',
                'company_site' => 'www.demo.com',
                'country' => 'USA',
            ],
            [
                'name' => 'Supply Chain Manager',
                'username' => 'supply_chain_manager',
                'email' => 'supply_chain_manager@demo.com',
                'password' => Hash::make('1234'),
                'role' => 'supply_chain_manager',
                'status' => 'active',
                'address' => '456 Elm St',
                'company' => 'Supply Co.',
                'company_site' => 'www.supplyco.com',
                'country' => 'Canada',
            ],
            [
                'name' => 'Sales Manager',
                'username' => 'sales_manager',
                'email' => 'sales_manager@demo.com',
                'password' => Hash::make('1234'),
                'role' => 'sales_manager',
                'status' => 'active',
                'address' => '789 Oak St',
                'company' => 'Sales Inc.',
                'company_site' => 'www.salesinc.com',
                'country' => 'UK',
            ],
            [
                'name' => 'Regional Sales Manager',
                'username' => 'regional_sales_manager',
                'email' => 'regional_sales_manager@demo.com',
                'password' => Hash::make('1234'),
                'role' => 'regional_sales_manager',
                'status' => 'active',
                'address' => '101 Pine St',
                'company' => 'Regional Sales Co.',
                'company_site' => 'www.regionalsalesco.com',
                'country' => 'Australia',
            ],
            [
                'name' => 'Regional Manager',
                'username' => 'regional_manager',
                'email' => 'regional_manager@demo.com',
                'password' => Hash::make('1234'),
                'role' => 'regional_manager',
                'status' => 'active',
                'address' => '202 Cedar St',
                'company' => 'Regional Co.',
                'company_site' => 'www.regionalco.com',
                'country' => 'Germany',
            ],
        ]);
    }
}
