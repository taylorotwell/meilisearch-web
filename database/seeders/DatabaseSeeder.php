<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Movie::create([
            'name' => 'Star Wars',
            'description' => 'A fantastic space opera.',
        ]);

        Movie::create([
            'name' => 'Star Trek',
            'description' => 'A utopian exploration show.',
        ]);
    }
}
