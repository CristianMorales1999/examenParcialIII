<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Administrador',
                'email' => 'admin@sistema.com',
                'password' => Hash::make('password'),
                'created_at' => now()->subDays(90),
                'updated_at' => now()->subDays(90),
            ],
            [
                'name' => 'Desarrollador Senior',
                'email' => 'dev@sistema.com',
                'password' => Hash::make('password'),
                'created_at' => now()->subDays(80),
                'updated_at' => now()->subDays(80),
            ],
            [
                'name' => 'Diseñador UX/UI',
                'email' => 'designer@sistema.com',
                'password' => Hash::make('password'),
                'created_at' => now()->subDays(70),
                'updated_at' => now()->subDays(70),
            ],
            [
                'name' => 'Project Manager',
                'email' => 'pm@sistema.com',
                'password' => Hash::make('password'),
                'created_at' => now()->subDays(60),
                'updated_at' => now()->subDays(60),
            ],
            [
                'name' => 'Analista de Datos',
                'email' => 'analyst@sistema.com',
                'password' => Hash::make('password'),
                'created_at' => now()->subDays(50),
                'updated_at' => now()->subDays(50),
            ],
        ];

        $created = 0;
        foreach ($users as $user) {
            if (!User::where('email', $user['email'])->exists()) {
                User::create($user);
                $created++;
            }
        }

        if ($created > 0) {
            $this->command->info("✅ {$created} usuarios creados exitosamente");
        } else {
            $this->command->info("ℹ️  Los usuarios ya existen en la base de datos");
        }
        
        $this->command->info('🔑 Credenciales de acceso:');
        $this->command->info('   • Email: admin@sistema.com | Password: password');
        $this->command->info('   • Email: dev@sistema.com | Password: password');
        $this->command->info('   • Email: designer@sistema.com | Password: password');
        $this->command->info('   • Email: pm@sistema.com | Password: password');
        $this->command->info('   • Email: analyst@sistema.com | Password: password');
    }
}
