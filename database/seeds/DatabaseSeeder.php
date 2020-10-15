<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminSeeder::class);
        $this->call(DataSeeder::class);
        $this->call(MetadataSeeder::class);
        $this->call(LogoSeeder::class);
        $this->call(SliderSeeder::class);
        $this->call(ContentSeeder::class);
        $this->call(IconSeeder::class);
        $this->call(ColorSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SizeSeeder::class);
        $this->call(PresentationSeeder::class);
        $this->call(GrammageSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(GallerySeeder::class);
        $this->call(BannerSeeder::class);
        $this->call(RedSeeder::class);
    }
}
