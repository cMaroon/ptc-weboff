<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post();
        $post->user_id = '1';
        $post->title = 'Welcome to Pateros Technological College Official Website!';
        $post->body = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque molestiae eos veniam cupiditate nobis deserunt accusamus nostrum, vel facere, maiores iure, quod maxime minima ut? Aliquam, labore? Similique provident ducimus ipsam dolorum accusantium praesentium. Ratione a cum facilis, veritatis quod eius aliquam deserunt! Dolorum alias asperiores qui iure nobis fugiat porro delectus? Itaque aliquam voluptatibus possimus velit totam tenetur soluta incidunt odit quisquam. Debitis molestiae est nemo totam corporis officiis hic? In minus ratione impedit nulla hic aperiam molestias voluptates ducimus. Omnis nostrum amet culpa exercitationem, molestiae excepturi odio, nisi similique sed velit nemo illo consectetur, harum delectus! Doloremque quidem, natus at voluptatum, magnam dignissimos aut consequatur repellendus dolor maxime corporis neque voluptas repudiandae sapiente numquam cupiditate veniam unde quae voluptatem animi aliquid libero non hic. Nulla, nobis? Fugit rem beatae placeat magni odio aspernatur, saepe vero quia soluta quae a illum accusamus vel! Adipisci consequatur praesentium dolores totam eius.';
        $post->save();
    }
}
