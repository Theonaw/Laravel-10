<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $sql = file_get_contents(__DIR__.'/categories.sql');
       DB::unprepared($sql);
       
       $sql = file_get_contents(__DIR__.'/etiquettes.sql');
       DB::unprepared($sql);

       $sql = file_get_contents(__DIR__.'/plats.sql');
       DB::unprepared($sql);

       $sql = file_get_contents(__DIR__.'/etiquettes_plats.sql');
       DB::unprepared($sql);

       $sql = file_get_contents(__DIR__.'/users.sql');
       DB::unprepared($sql);
    }
}
