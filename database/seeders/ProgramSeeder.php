<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::withoutForeignKeyConstraints(function () {
            Program::truncate();
        });

        Program::create([
            'name' => 'Web'
        ]);

        Program::create([
            'name' => 'Flutter'
        ]);

        Program::create([
            'name' => 'UI/UX'
        ]);

        Program::create([
            'name' => 'Kotlin'
        ]);

        Program::create([
            'name' => 'English'
        ]);
    }
}
