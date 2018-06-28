<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cat = new Category();
        $cat->title = 'News';
        $cat->color = 'badge-success';
        $cat->save();
    
        $cat = new Category();
        $cat->title = 'Event';
        $cat->color = 'badge-warning';
        $cat->save();
    
        $cat = new Category();
        $cat->title = 'Guide';
        $cat->color = 'badge-info';
        $cat->save();
    
        $cat = new Category();
        $cat->title = 'Announcement';
        $cat->color = 'badge-danger';
        $cat->save();
    }
}
