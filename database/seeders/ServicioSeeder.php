<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Servicio;

class ServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $servicios = [
            [
                'titulo' => 'Desarrollo Web Profesional',
                'descripcion' => 'Creamos sitios web modernos, responsivos y optimizados para SEO. Utilizamos las últimas tecnologías como React, Vue.js, Laravel y Node.js para garantizar un rendimiento excepcional y una experiencia de usuario superior.',
                'created_at' => now()->subDays(45),
                'updated_at' => now()->subDays(45),
            ],
            [
                'titulo' => 'Aplicaciones Móviles',
                'descripcion' => 'Desarrollo de aplicaciones móviles nativas e híbridas para iOS y Android. Incluye diseño de UX/UI, desarrollo backend, integración con APIs y publicación en las tiendas oficiales.',
                'created_at' => now()->subDays(40),
                'updated_at' => now()->subDays(40),
            ],
            [
                'titulo' => 'Consultoría en Tecnología',
                'descripcion' => 'Asesoramiento especializado en transformación digital, arquitectura de software, migración a la nube y optimización de procesos tecnológicos para empresas de todos los tamaños.',
                'created_at' => now()->subDays(35),
                'updated_at' => now()->subDays(35),
            ],
            [
                'titulo' => 'Diseño Gráfico y Branding',
                'descripcion' => 'Servicios completos de diseño gráfico incluyendo identidad visual, logos, material promocional, redes sociales y estrategias de branding que fortalezcan la imagen de tu empresa.',
                'created_at' => now()->subDays(30),
                'updated_at' => now()->subDays(30),
            ],
            [
                'titulo' => 'Marketing Digital',
                'descripcion' => 'Estrategias integrales de marketing digital: SEO, SEM, redes sociales, email marketing, content marketing y análisis de datos para aumentar la visibilidad y conversiones de tu negocio.',
                'created_at' => now()->subDays(25),
                'updated_at' => now()->subDays(25),
            ],
            [
                'titulo' => 'Sistemas de Gestión Empresarial',
                'descripcion' => 'Desarrollo e implementación de sistemas ERP, CRM y software de gestión personalizado para optimizar los procesos internos de tu empresa y mejorar la productividad.',
                'created_at' => now()->subDays(20),
                'updated_at' => now()->subDays(20),
            ],
            [
                'titulo' => 'E-commerce y Tiendas Online',
                'descripcion' => 'Creación de tiendas online completas con pasarelas de pago, gestión de inventario, sistemas de envío y herramientas de análisis para maximizar las ventas online.',
                'created_at' => now()->subDays(15),
                'updated_at' => now()->subDays(15),
            ],
            [
                'titulo' => 'Ciberseguridad y Auditoría',
                'descripcion' => 'Servicios de seguridad informática, auditorías de vulnerabilidades, implementación de políticas de seguridad y protección de datos para mantener tu información segura.',
                'created_at' => now()->subDays(12),
                'updated_at' => now()->subDays(12),
            ],
            [
                'titulo' => 'Inteligencia Artificial y Machine Learning',
                'descripcion' => 'Desarrollo de soluciones con IA y ML para automatización de procesos, análisis predictivo, chatbots inteligentes y optimización de decisiones empresariales.',
                'created_at' => now()->subDays(8),
                'updated_at' => now()->subDays(8),
            ],
            [
                'titulo' => 'Mantenimiento y Soporte Técnico',
                'descripcion' => 'Servicios de mantenimiento preventivo, soporte técnico 24/7, actualizaciones de seguridad y monitoreo continuo para garantizar el funcionamiento óptimo de tus sistemas.',
                'created_at' => now()->subDays(5),
                'updated_at' => now()->subDays(5),
            ],
        ];

        foreach ($servicios as $servicio) {
            Servicio::create($servicio);
        }

        $this->command->info('✅ 10 servicios creados exitosamente');
    }
}
