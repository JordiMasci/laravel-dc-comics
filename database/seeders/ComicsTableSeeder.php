<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Comics;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comicsData = config("db.comics");

        foreach ($comicsData as $comicData) {
            $comics = new Comics();
            $comics->title = $comicData['title'];
            $comics->description = substr($comicData['description'], 0, 255);
            $comics->thumb = $comicData['thumb'];
            $comics->price = $comicData['price'];
            $comics->series = $comicData['series'];
            $comics->sale_date = $comicData['sale_date'];
            $comics->type = $comicData['type'];
            $comics->save();
        }
    }
}