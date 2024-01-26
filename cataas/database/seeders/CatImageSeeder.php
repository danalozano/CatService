<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CatImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $client = new Client(); //  GuzzleHttp\Client class

        $response = $client->get('https://cataas.com/api/cats?&skip=0&limit=1000');
        $data = json_decode($response->getBody(), true);

        foreach ($data as $item) {
            CatImage::create([
                '_id' => $item['_id'],
                'mimetype' => $item['mimetype'],
                'size' => isset($item['size']) ? $item['size'] : '0',
                'tags' => json_encode($item['tags']),
            ]);
        }
    }
}
