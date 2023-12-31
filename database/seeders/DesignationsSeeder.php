<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesignationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('designations')
            ->insert([
                [
                    'role_name' => 'Super Administrator',
                    'created_at' => Carbon::create(1990, 1, 1, 12, 00, 00),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'role_name' => 'Administrator',
                    'created_at' => Carbon::create(1990, 1, 2, 12, 00, 00),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'role_name' => 'Manager',
                    'created_at' => Carbon::create(1990, 1, 2, 12, 00, 00),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'role_name' => 'Assistant_manager',
                    'created_at' => Carbon::create(1990, 1, 2, 12, 00, 00),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'role_name' => 'IT Specialist',
                    'created_at' => Carbon::create(1990, 1, 2, 12, 00, 00),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'role_name' => 'Risk Analyst',
                    'created_at' => Carbon::create(1990, 1, 2, 12, 00, 00),
                    'updated_at' => Carbon::now(),
                ],
            ]);
    }
}
