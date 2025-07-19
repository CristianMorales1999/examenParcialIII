<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            ClienteSeeder::class,
            ServicioSeeder::class,
            ProyectoSeeder::class,
        ]);

        $this->command->info('🎉 Base de datos poblada exitosamente con datos de ejemplo');
        $this->command->info('📊 Resumen:');
        $this->command->info('   • 5 Usuarios');
        $this->command->info('   • 10 Clientes');
        $this->command->info('   • 10 Servicios');
        $this->command->info('   • 10 Proyectos');
    }
}
