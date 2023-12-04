<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // student::create([
        //     'name' => 'Mandar',
        //     'email' => 'mandar@email.com'
        // ]);

        $students = collect([
            [
                'name' => 'Mandar',
                'email' => 'mandar@email.com'
            ],
            [
                'name' => 'Aman',
                'email' => 'aman@email.com'
            ],
            [
                'name' => 'Akash',
                'email' => 'akash@email.com'
            ]
        ]);

        $students->each(function ($student) {
            student::insert($student);
        });
    }
}
