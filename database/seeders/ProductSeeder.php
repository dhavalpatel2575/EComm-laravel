<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
            'name'=>'LG Mobile',
            'price'=>'200',
            'description'=>'4gb ram and i5 and much more 12 mp camera',
            'category'=>'Mobile',
            'gallery'=>'https://cdn.tmobile.com/content/dam/t-mobile/en-p/cell-phones/lg/LG-Stylo-6/White-Pearl/LG-Stylo-6-White-Pearl-frontimage.png'
            ],
            [
                'name'=>'LG Mobile 3',
                'price'=>'20000',
                'description'=>'4gb ram and i5 and much more 12 mp camera',
                'category'=>'Mobile',
                'gallery'=>'https://www.lg.com/levant_en/images/mobile-phones/MD05885898/gallery/LGH930DS-V30-Zoom-01-05092017.jpg'
            ],
            [
                'name'=>'LG Mobile 2',
                'price'=>'2000',
                'description'=>'4gb ram and i5 and much more 12 mp camera',
                'category'=>'Mobile',
                'gallery'=>'https://www.lg.com/levant_en/images/mobile-phones/md05885898/gallery/large12.jpg'
            ],
            [
                'name'=>'LG Mobile 5',
                'price'=>'2000',
                'description'=>'4gb ram and i5 and much more 12 mp camera',
                'category'=>'Mobile',
                'gallery'=>'https://www.lg.com/us/images/cell-phones/md07000523/gallery/desktop-02.jpg'
            ]
        ] 
        );
    }
}