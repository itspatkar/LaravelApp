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
                'email' => 'mandar@email.com',
                'age' => '18',
                'city' => 'Mumbai'
            ],
            [
                'name' => 'Aman',
                'email' => 'aman@email.com',
                'age' => '16',
                'city' => 'Pune'
            ],
            [
                'name' => 'Akash',
                'email' => 'akash@email.com',
                'age' => '20',
                'city' => 'Thane'
            ]
        ]);

        $students->each(function ($student) {
            student::insert($student);
        });
    }
}
