<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Nette\Schema\Schema;
use App\Models\ClassRoom;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //membuat data untuk table class
        // ClassRoom::insert([
        //     'name' => '12TKJA',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()
        // ]);
        //disable foreignkey
        Schema::disableForeignKeyConstraints();
        //mengosongkan isi table
        ClassRoom::truncate();
        //enable foreignkey
        Schesma::enableForeignKeyConstraints();
        $data =[
            [
                'name' => '12RPLA',
                'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            ],
            [
                'name' => '12RPLB',
                'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            ],
            [
                'name' => '12RPLC',
                'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            ]
            ];
            foreach ($data as $value){
                ClassRoom::insert([
                    'name'=> $value['name'],
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
            }}

