<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Felipe Arnold',
            'email' => 'felipe@example.com',
            'password' => Hash::make('password'),
        ]);

        $this->call(FirstTenantSeeder::class);
        $this->call(PersonSeeder::class);

    }
}
