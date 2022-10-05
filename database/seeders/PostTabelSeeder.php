<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTabelSeeder extends Seeder
{
    private $_posts = [
        ["nama_project" => "Seeder 1", "deskripsi_project" => "Deskripsi seeder 1"],
        ["nama_project" => "Seeder 2", "deskripsi_project" => "Deskripsi seeder 2"],
        ["nama_project" => "Seeder 3", "deskripsi_project" => "Deskripsi seeder 3"],
        ["nama_project" => "Seeder 4", "deskripsi_project" => "Deskripsi seeder 4"],
        ["nama_project" => "Seeder 5", "deskripsi_project" => "Deskripsi seeder 5"],
        ["nama_project" => "Seeder 6", "deskripsi_project" => "Deskripsi seeder 6"],
        ["nama_project" => "Seeder 7", "deskripsi_project" => "Deskripsi seeder 7"],
        ["nama_project" => "Seeder 8", "deskripsi_project" => "Deskripsi seeder 8"],
        ["nama_project" => "Seeder 9", "deskripsi_project" => "Deskripsi seeder 9"],
        ["nama_project" => "Seeder 10", "deskripsi_project" => "Deskripsi seeder 10"]
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        foreach ($this->_posts as $posts){
            $data[] = [
                'nama_project' => $posts['nama_project'],
                'deskripsi_project' => $posts['deskripsi_project']
            ];
        }
        DB::table('project_models')->insert($data);
    }
}
