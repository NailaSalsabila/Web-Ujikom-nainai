<?php

namespace Database\Seeders;

use App\Models\produk;
use App\Models\kategori;
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
        // \App\Models\User::factory(10)->create();
        $kategori=kategori::create([
            'nama'=>'makanan'
        ]);
        $kategori=kategori::create([
            'nama'=>'minuman'
        ]);
        $kategori=kategori::create([
            'nama'=>'aksesoris'
        ]);

        produk::create([
            'kategori_id'=>1,
            'nama'=> 'aple',
            'harga'=>30.000,
            'foto'=>'https://idblogging.com/wp-content/uploads/2021/04/Haus-1024x1024.jpg'
        ]);
        produk::create([
            'kategori_id'=>2,
            'nama'=> 'aple',
            'harga'=>20.000,
            'foto'=>'https://idblogging.com/wp-content/uploads/2021/04/Haus-1024x1024.jpg'
        ]);
        produk::create([
            'kategori_id'=>3,
            'nama'=> 'aple',
            'harga'=>20.000,
            'foto'=>'https://idblogging.com/wp-content/uploads/2021/04/Haus-1024x1024.jpg'
        ]);
        produk::create([
            'kategori_id'=>1,
            'nama'=> 'aple',
            'harga'=>20.000,
            'foto'=>'https://idblogging.com/wp-content/uploads/2021/04/Haus-1024x1024.jpg'
        ]);
        produk::create([
            'kategori_id'=>2,
            'nama'=> 'aple',
            'harga'=>20.000,
            'foto'=>'https://idblogging.com/wp-content/uploads/2021/04/Haus-1024x1024.jpg'
        ]);
        produk::create([
            'kategori_id'=>3,
            'nama'=> 'aple',
            'harga'=>20.000,
            'foto'=>'https://idblogging.com/wp-content/uploads/2021/04/Haus-1024x1024.jpg'
        ]);
    }
}
