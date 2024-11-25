<?php

namespace Database\Seeders;


use App\Models\Job;
use Illuminate\Database\Seeder;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JobSearchApp extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        /*
        Job::factory()->create([
            'entry' => "Today I woke up and saw how the flowers in the garden were beginning to open. The sun was soft and the cool breeze made me smile. It gave me joy to think about how simple can be so beautiful.",
            'emotion' => 'https://res.cloudinary.com/djdpt7dqi/image/upload/v1732179767/joy.png',
        ]);
        */
        Job::factory(20)->create();
    }
}
