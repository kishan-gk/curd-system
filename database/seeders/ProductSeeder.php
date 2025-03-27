<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Product::create([
        //     'name' => 'SAMSUNG Odyssey G3 60.96 cm (24 inch) Full HD LED Backlit VA Panel with DP, HDMI, Height/Tilt/Pivot Adjustable Stand, Eye-Saver, Bezel Less Gaming Monitor',
        //     'sku' => 50,
        //     'price' => 10399,
        //     'description' => 'Experience gaming like never before with the Samsung Odyssey G30D. Featuring a 180 Hz refresh rate and 1ms response time (MPRT), it ensures ultra-smooth, blur-free action. AMD Radeon FreeSync syncs with your graphics card for seamless gameplay. Enhance visibility with Black Equalizer and improve aim with Virtual Aim Point. Eye Saver Mode and reduced screen flicker ensure comfortable, extended play. The 3-sided borderless design offers immersive visuals, while the ergonomic stand allows for optimal positioning. Elevate your gaming with the Samsung Odyssey G30D—epic screen, epic play.',
        //     'image' => '1743103822.webp'
        // ]);
        Product::factory()->count(5)->create();
    }
}
