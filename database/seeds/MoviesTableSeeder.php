<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('movies')->insert([
            [
            'title' => 'How I met your mother',
            'description' => 'Comedy, Suspense, lifestle, relationships, party',
            'price' => '400',
            'quantity' => '50',
            'genre' => 'Comedy',
            'image' => '/image/mother',
            ],
            [
            'title' => 'Game of thrones',
            'description' => 'Action, Suspense, acient, kings',
            'price' => '600',
            'quantity' => '50',
            'genre' => 'Action',
            'image' => '/image/thrones',
        ]
        ]);
    }
}
