<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Proyecto;

class ProyectoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $proyectos = [
            [
                'titulo' => 'E-commerce para Restaurante Gourmet',
                'descripcion' => 'Desarrollo de una plataforma completa de e-commerce para un restaurante gourmet, incluyendo sistema de pedidos online, gestión de menús, pasarela de pagos y panel administrativo. El proyecto incluye diseño responsivo, integración con WhatsApp Business y sistema de notificaciones.',
                'created_at' => now()->subDays(60),
                'updated_at' => now()->subDays(60),
            ],
            [
                'titulo' => 'App Móvil de Delivery',
                'descripcion' => 'Aplicación móvil nativa para iOS y Android de servicio de delivery. Características: geolocalización en tiempo real, sistema de calificaciones, chat integrado, múltiples métodos de pago y panel de control para administradores y repartidores.',
                'created_at' => now()->subDays(55),
                'updated_at' => now()->subDays(55),
            ],
            [
                'titulo' => 'Sistema de Gestión Escolar',
                'descripcion' => 'Plataforma web completa para gestión escolar que incluye: matrículas online, calificaciones, asistencia, comunicación padres-profesores, biblioteca digital y reportes académicos. Desarrollado con Laravel y Vue.js.',
                'created_at' => now()->subDays(50),
                'updated_at' => now()->subDays(50),
            ],
            [
                'titulo' => 'Portal Corporativo Multinacional',
                'descripcion' => 'Portal web corporativo para empresa multinacional con múltiples idiomas, gestión de contenido dinámico, integración con sistemas ERP, dashboard ejecutivo y herramientas de colaboración interna.',
                'created_at' => now()->subDays(45),
                'updated_at' => now()->subDays(45),
            ],
            [
                'titulo' => 'Plataforma de Cursos Online',
                'descripcion' => 'Sistema LMS (Learning Management System) completo con: creación de cursos, videoconferencias, evaluaciones automáticas, certificados digitales, marketplace de instructores y análisis de aprendizaje.',
                'created_at' => now()->subDays(40),
                'updated_at' => now()->subDays(40),
            ],
            [
                'titulo' => 'CRM para Inmobiliaria',
                'descripcion' => 'Sistema CRM especializado para inmobiliaria con gestión de propiedades, clientes potenciales, visitas programadas, documentación digital, reportes de ventas y integración con portales inmobiliarios.',
                'created_at' => now()->subDays(35),
                'updated_at' => now()->subDays(35),
            ],
            [
                'titulo' => 'App de Fitness y Nutrición',
                'descripcion' => 'Aplicación móvil integral de fitness que incluye: planificación de entrenamientos, seguimiento nutricional, integración con wearables, comunidad de usuarios, videollamadas con entrenadores y análisis de progreso.',
                'created_at' => now()->subDays(30),
                'updated_at' => now()->subDays(30),
            ],
            [
                'titulo' => 'Sistema de Facturación Electrónica',
                'descripcion' => 'Plataforma de facturación electrónica que cumple con las regulaciones peruanas (SUNAT). Incluye: generación de comprobantes, envío automático, gestión de clientes, reportes tributarios y integración con sistemas contables.',
                'created_at' => now()->subDays(25),
                'updated_at' => now()->subDays(25),
            ],
            [
                'titulo' => 'Marketplace de Artesanías',
                'descripcion' => 'Plataforma marketplace para artesanos peruanos con: catálogo de productos, sistema de pagos, gestión de envíos, herramientas de marketing para vendedores, app móvil y integración con redes sociales.',
                'created_at' => now()->subDays(20),
                'updated_at' => now()->subDays(20),
            ],
            [
                'titulo' => 'Sistema de Monitoreo IoT',
                'descripcion' => 'Plataforma de monitoreo IoT para industria manufacturera con: sensores en tiempo real, alertas automáticas, dashboard de control, análisis predictivo, reportes de eficiencia y integración con sistemas SCADA.',
                'created_at' => now()->subDays(15),
                'updated_at' => now()->subDays(15),
            ],
        ];

        foreach ($proyectos as $proyecto) {
            Proyecto::create($proyecto);
        }

        $this->command->info('✅ 10 proyectos creados exitosamente');
    }
}
