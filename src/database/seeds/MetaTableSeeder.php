<?php

use Illuminate\Database\Seeder;
use Quill\Meta\Models\Meta;

class MetaTableSeeder extends Seeder
{
   	/**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Meta::class, 10)->create();
    }

}
