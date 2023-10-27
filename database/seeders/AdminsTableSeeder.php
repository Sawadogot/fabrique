<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;


class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRecords = [
            [
                'id' => 8,
                'nom' => 'Theresina',
                'type' => 'admin',
                'apprenant_id' => 0,
                'telephone' => '57531441',
                'email' => 'theresinad@gmail.com',
                'password' => Hash::make('mary'),
                'status' => 1,
            ],
        ];
        Admin::insert($adminRecords);
    }
}
