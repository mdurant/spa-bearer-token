<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations = [
            ['id' => 1, 'name' => 'Región Metropolitana - Melipilla', 'slug' => 'melipilla', 'parent_id' => null],
            ['id' => 2, 'name' => 'Región Metropolitana - Chacabuco', 'slug' => 'chacabuco', 'parent_id' => null],
            ['id' => 3, 'name' => 'Región Metropolitana - Maipo', 'slug' => 'maipo', 'parent_id' => null],
            ['id' => 4, 'name' => 'Región Metropolitana - Cordillera', 'slug' => 'cordillera', 'parent_id' => null],
            ['id' => 5, 'name' => 'Región Metropolitana - Talagante', 'slug' => 'talagante', 'parent_id' => null],
            ['id' => 6, 'name' => 'Región Metropolitana - Santiago', 'slug' => 'santiago', 'parent_id' => null],
            ['id' => 7, 'name' => 'Región I Tarapacá - Iquique', 'slug' => 'iquique', 'parent_id' => null],
            ['id' => 8, 'name' => 'Región I Tarapacá - Tamarugal', 'slug' => 'tamarugal', 'parent_id' => null],
            ['id' => 9, 'name' => 'Región II Antofagasta - El Loa', 'slug' => 'el-loa', 'parent_id' => null],
            ['id' => 10, 'name' => 'Región II Antofagasta - Tocopilla', 'slug' => 'tocopilla', 'parent_id' => null],
            ['id' => 11, 'name' => 'Región II Antofagasta - Antofagasta', 'slug' => 'antofagasta', 'parent_id' => null],
            ['id' => 12, 'name' => 'Región III Atacama - Copiapó', 'slug' => 'copiapo', 'parent_id' => null],
            ['id' => 13, 'name' => 'Región III Atacama - Chañaral', 'slug' => 'chanaral', 'parent_id' => null],
            ['id' => 14, 'name' => 'Región III Atacama - Huasco', 'slug' => 'huasco', 'parent_id' => null],
            ['id' => 15, 'name' => 'Región IV Coquimbo - Choapa', 'slug' => 'choapa', 'parent_id' => null],
            ['id' => 16, 'name' => 'Región IV Coquimbo - Limarí', 'slug' => 'limari', 'parent_id' => null],
            ['id' => 17, 'name' => 'Región IV Coquimbo - Elqui', 'slug' => 'elqui', 'parent_id' => null],
            ['id' => 18, 'name' => 'Región V Valparaíso - San Felipe de Aconcagua', 'slug' => 'san-felipe-de-aconcagua', 'parent_id' => null],
            ['id' => 19, 'name' => 'Región V Valparaíso - Isla de Pascua', 'slug' => 'isla-de-pascua', 'parent_id' => null],
            ['id' => 20, 'name' => 'Región V Valparaíso - Valparaíso', 'slug' => 'valparaiso', 'parent_id' => null],
            ['id' => 21, 'name' => 'Región V Valparaíso - San Antonio', 'slug' => 'san-antonio', 'parent_id' => null],
            ['id' => 22, 'name' => 'Región V Valparaíso - Marga Marga', 'slug' => 'marga-marga', 'parent_id' => null],
            ['id' => 23, 'name' => 'Región V Valparaíso - Los Andes', 'slug' => 'los-andes', 'parent_id' => null],
            ['id' => 24, 'name' => 'Región V Valparaíso - Quillota', 'slug' => 'quillota', 'parent_id' => null],
            ['id' => 25, 'name' => 'Región V Valparaíso - Petorca', 'slug' => 'petorca', 'parent_id' => null],
            ['id' => 26, 'name' => 'Región VI Libertador B. O\'Higgins - Cardenal Caro', 'slug' => 'cardenal-caro', 'parent_id' => null],
            ['id' => 27, 'name' => 'Región VI Libertador B. O\'Higgins - Cachapoal', 'slug' => 'cachapoal', 'parent_id' => null],
            ['id' => 28, 'name' => 'Región VI Libertador B. O\'Higgins - Colchagua', 'slug' => 'colchagua', 'parent_id' => null],
            ['id' => 29, 'name' => 'Región VII Maule - Cauquenes', 'slug' => 'cauquenes', 'parent_id' => null],
            ['id' => 30, 'name' => 'Región VII Maule - Talca', 'slug' => 'talca', 'parent_id' => null],
            ['id' => 31, 'name' => 'Región VII Maule - Linares', 'slug' => 'linares', 'parent_id' => null],
            ['id' => 32, 'name' => 'Región VII Maule - Curicó', 'slug' => 'curico', 'parent_id' => null],
            ['id' => 33, 'name' => 'Región VIII Biobío - Arauco', 'slug' => 'arauco', 'parent_id' => null],
            ['id' => 34, 'name' => 'Región VIII Biobío - Ñuble', 'slug' => 'nuble', 'parent_id' => null],
            ['id' => 35, 'name' => 'Región VIII Biobío - Concepción', 'slug' => 'concepcion', 'parent_id' => null],
            ['id' => 36, 'name' => 'Región VIII Biobío - Bío-Bío', 'slug' => 'bio-bio', 'parent_id' => null],
            ['id' => 37, 'name' => 'Región IX La Araucanía - Malleco', 'slug' => 'malleco', 'parent_id' => null],
            ['id' => 38, 'name' => 'Región IX La Araucanía - Cautín', 'slug' => 'cautin', 'parent_id' => null],
            ['id' => 39, 'name' => 'Región X Los Lagos - Llanquihue', 'slug' => 'llanquihue', 'parent_id' => null],
            ['id' => 40, 'name' => 'Región X Los Lagos - Palena', 'slug' => 'palena', 'parent_id' => null],
            ['id' => 41, 'name' => 'Región X Los Lagos - Osorno', 'slug' => 'osorno', 'parent_id' => null],
            ['id' => 42, 'name' => 'Región X Los Lagos - Chiloé', 'slug' => 'chiloe', 'parent_id' => null],
            ['id' => 43, 'name' => 'Región XI Aysen - Aysen', 'slug' => 'aysen', 'parent_id' => null],
            ['id' => 44, 'name' => 'Región XI Aysen - Capitán Prat', 'slug' => 'capitan-prat', 'parent_id' => null],
            ['id' => 45, 'name' => 'Región XII Magallanes - Antártica Chilena', 'slug' => 'antartica-chilena', 'parent_id' => null],
            ['id' => 46, 'name' => 'Región XII Magallanes - Última Esperanza', 'slug' => 'ultima-esperanza', 'parent_id' => null],
            ['id' => 47, 'name' => 'Región XII Magallanes - Magallanes', 'slug' => 'magallanes', 'parent_id' => null],
            ['id' => 48, 'name' => 'Región XIV Los Ríos - Valdivia', 'slug' => 'valdivia', 'parent_id' => null],
            ['id' => 49, 'name' => 'Región XIV Los Ríos - Ranco', 'slug' => 'ranco', 'parent_id' => null],
            ['id' => 50, 'name' => 'Región XV Arica y Parinacota - Arica', 'slug' => 'arica', 'parent_id' => null],
            ['id' => 51, 'name' => 'Región XV Arica y Parinacota - Parinacota', 'slug' => 'parinacota', 'parent_id' => null],
        ];

    }
}
