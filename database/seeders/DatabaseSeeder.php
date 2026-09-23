<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
        ]);

        $this->call([
    CategorySeeder::class,
]);

        $user = User::firstOrCreate(
    [
        'email' => 'admin@dpmptsp.go.id',
    ],
    [
        'name' => 'Admin Humas',
        'password' => bcrypt('password'),
    ]
);
    }
}