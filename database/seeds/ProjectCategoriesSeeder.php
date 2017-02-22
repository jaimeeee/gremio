<?php

use Illuminate\Database\Seeder;

class ProjectCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_categories')->insert([[
                    'name' => 'Quiosco',
                    'url' => 'quiosco',
                    'created_at' => DB::raw('NOW()'),
                    'updated_at' => DB::raw('NOW()'),
                ],[
                    'name' => 'Exhibiciones',
                    'url' => 'exhibiciones',
                    'created_at' => DB::raw('NOW()'),
                    'updated_at' => DB::raw('NOW()'),
                ],[
                    'name' => 'Interiores',
                    'url' => 'interiores',
                    'created_at' => DB::raw('NOW()'),
                    'updated_at' => DB::raw('NOW()'),
                ],[
                    'name' => 'Mobiliario urbano',
                    'url' => 'mobiliario-urbano',
                    'created_at' => DB::raw('NOW()'),
                    'updated_at' => DB::raw('NOW()'),
                ],[
                    'name' => 'Señalización',
                    'url' => 'senalizacion',
                    'created_at' => DB::raw('NOW()'),
                    'updated_at' => DB::raw('NOW()'),
                ],[
                    'name' => 'Construcción especializada',
                    'url' => 'construccion-especializada',
                    'created_at' => DB::raw('NOW()'),
                    'updated_at' => DB::raw('NOW()'),
                ],
                ]);
    }
}
