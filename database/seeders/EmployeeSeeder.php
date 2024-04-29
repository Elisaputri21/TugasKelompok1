<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            [
            'firstname' => 'Elisa',
            'lastname' => 'Putri',
            'email'=> 'eputri979@gmail.com',
            'age' => 20,
            'position_id' => 1
            ],
            [
            'firstname' => 'Putri',
            'lastname' => 'Amanda',
            'email'=> 'amandaelput@gmail.com',
            'age' => 25,
            'position_id' => 2
            ],
            [
            'firstname' => 'Rere',
            'lastname' => 'Cantik',
            'email'=> 'rereimut01@gmail.com',
            'age' => 23,
            'position_id' => 3
            ],
            ]);
            }

    }

