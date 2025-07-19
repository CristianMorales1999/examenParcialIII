<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class PopulateDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:populate {--fresh : Ejecutar migraciones frescas antes de poblar}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Poblar la base de datos con datos de ejemplo';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('🚀 Iniciando proceso de población de base de datos...');

        // Opción para ejecutar migraciones frescas
        if ($this->option('fresh')) {
            $this->warn('⚠️  Ejecutando migraciones frescas...');
            $this->call('migrate:fresh');
        }

        // Ejecutar seeders
        $this->info('📦 Ejecutando seeders...');
        
        $this->call('db:seed');
        
        $this->newLine();
        $this->info('✅ ¡Base de datos poblada exitosamente!');
        $this->newLine();
        
        $this->info('📊 Datos creados:');
        $this->line('   • 5 Usuarios del sistema');
        $this->line('   • 10 Clientes con información completa');
        $this->line('   • 10 Servicios profesionales');
        $this->line('   • 10 Proyectos detallados');
        
        $this->newLine();
        $this->info('🔑 Credenciales de acceso:');
        $this->line('   • admin@sistema.com | password');
        $this->line('   • dev@sistema.com | password');
        $this->line('   • designer@sistema.com | password');
        $this->line('   • pm@sistema.com | password');
        $this->line('   • analyst@sistema.com | password');
        
        $this->newLine();
        $this->info('🌐 Puedes acceder al sistema en: http://localhost:8000');
        
        return Command::SUCCESS;
    }
}
