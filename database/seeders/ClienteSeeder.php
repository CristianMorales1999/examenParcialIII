<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clientes = [
            [
                'nombres' => 'María',
                'apellidos' => 'González López',
                'email' => 'maria.gonzalez@email.com',
                'telefono' => '+51 987 123 456',
                'direccion' => 'Av. Arequipa 123, Lima, Perú',
                'created_at' => now()->subDays(30),
                'updated_at' => now()->subDays(30),
            ],
            [
                'nombres' => 'Carlos',
                'apellidos' => 'Rodríguez Silva',
                'email' => 'carlos.rodriguez@empresa.com',
                'telefono' => '+51 955 789 123',
                'direccion' => 'Jr. Tacna 456, Arequipa, Perú',
                'created_at' => now()->subDays(25),
                'updated_at' => now()->subDays(25),
            ],
            [
                'nombres' => 'Ana',
                'apellidos' => 'Martínez Vargas',
                'email' => 'ana.martinez@consultoria.pe',
                'telefono' => '+51 944 456 789',
                'direccion' => 'Calle Los Pinos 789, Trujillo, La Libertad',
                'created_at' => now()->subDays(20),
                'updated_at' => now()->subDays(20),
            ],
            [
                'nombres' => 'Luis',
                'apellidos' => 'Fernández Torres',
                'email' => 'luis.fernandez@startup.com',
                'telefono' => '+51 933 321 654',
                'direccion' => 'Av. Grau 321, Piura, Perú',
                'created_at' => now()->subDays(15),
                'updated_at' => now()->subDays(15),
            ],
            [
                'nombres' => 'Carmen',
                'apellidos' => 'Herrera Mendoza',
                'email' => 'carmen.herrera@tech.pe',
                'telefono' => '+51 922 654 321',
                'direccion' => 'Jr. San Martín 654, Cusco, Perú',
                'created_at' => now()->subDays(12),
                'updated_at' => now()->subDays(12),
            ],
            [
                'nombres' => 'Roberto',
                'apellidos' => 'Jiménez Ruiz',
                'email' => 'roberto.jimenez@innovacion.com',
                'telefono' => '+51 911 987 654',
                'direccion' => 'Av. La Marina 987, Callao, Perú',
                'created_at' => now()->subDays(10),
                'updated_at' => now()->subDays(10),
            ],
            [
                'nombres' => 'Patricia',
                'apellidos' => 'Díaz Morales',
                'email' => 'patricia.diaz@digital.pe',
                'telefono' => '+51 900 147 258',
                'direccion' => 'Calle Real 147, Iquitos, Loreto',
                'created_at' => now()->subDays(8),
                'updated_at' => now()->subDays(8),
            ],
            [
                'nombres' => 'Miguel',
                'apellidos' => 'Sánchez Castro',
                'email' => 'miguel.sanchez@emprendedor.com',
                'telefono' => '+51 989 258 369',
                'direccion' => 'Av. Bolognesi 258, Tacna, Perú',
                'created_at' => now()->subDays(5),
                'updated_at' => now()->subDays(5),
            ],
            [
                'nombres' => 'Sofia',
                'apellidos' => 'Ramírez Vega',
                'email' => 'sofia.ramirez@creativa.pe',
                'telefono' => '+51 978 369 147',
                'direccion' => 'Jr. Independencia 369, Huancayo, Junín',
                'created_at' => now()->subDays(3),
                'updated_at' => now()->subDays(3),
            ],
            [
                'nombres' => 'Diego',
                'apellidos' => 'Moreno Ríos',
                'email' => 'diego.moreno@soluciones.com',
                'telefono' => '+51 967 741 852',
                'direccion' => 'Av. Libertad 741, Chiclayo, Lambayeque',
                'created_at' => now()->subDays(1),
                'updated_at' => now()->subDays(1),
            ],
        ];

        $created = 0;
        foreach ($clientes as $cliente) {
            if (!Cliente::where('email', $cliente['email'])->exists()) {
                Cliente::create($cliente);
                $created++;
            }
        }

        if ($created > 0) {
            $this->command->info("✅ {$created} clientes creados exitosamente");
        } else {
            $this->command->info("ℹ️  Los clientes ya existen en la base de datos");
        }
    }
}
