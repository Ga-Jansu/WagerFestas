<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Operacional',
            'email' => 'ops@wagerfestas.com',
            'email_verified_at' => now(),
            "status" => "2",
            'password' => '$2y$10$EcPDAt8.iqCXY/EqECnnnOYXSG1JUD7F1GrgWds00Bn0cO3yFUaCq', // password
            'remember_token' => Str::random(10),
        ]);

        User::factory()->create([
            'name' => 'Administrativo',
            'email' => 'admin@wagerfestas.com',
            'email_verified_at' => now(),
            "status" => "3",
            'password' => '$2y$10$98zNPi/F4uBNO9Zl2nfCROPhBswEDIs0cc/N6ptsndtzx8dZW/vgC', // password
            'remember_token' => Str::random(10),
        ]);

        User::factory()->create([
            'name' => 'Comercial',
            'email' => 'comer@wagerfestas.com',
            'email_verified_at' => now(),
            "status" => "1",
            'password' => '$2y$10$02cvnCSgIVjaG2Y5lMZzOuRYdXWF9bhSVAwSF64imk43kRol0slNy', // password
            'remember_token' => Str::random(10),
        ]);
    }
}