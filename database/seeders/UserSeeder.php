<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'first_name' => 'Task',
            'last_name'  => 'Admin',
            'email'      => 'task@admin.com',
            'password'   => Hash::make('t@$k@dm1n'),
            'user_type'  => 1,
        ]);
    }
}
