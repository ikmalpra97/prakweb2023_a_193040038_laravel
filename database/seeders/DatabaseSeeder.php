<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Ilham Akmal',
            'email' => 'ilhamakmalrp@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Mira Kameria',
        //     'email' => 'MiraKameria@gmail.com',
        //     'password' => bcrypt('123')
        // ]);
        
        User::factory(3)->create();

        Category::create([
            'name' => "Web Programming",
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => "Web Design",
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => "Personal",
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'tittle' => "Judul Pertama",
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam iure atque culpa dignissimos reprehenderit delectus consequatur, perspiciatis tempora vel beatae iusto! Ab nam id, consequatur commodi est optio quis inventore quidem unde!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam iure atque culpa dignissimos reprehenderit delectus consequatur, perspiciatis tempora vel beatae iusto! Ab nam id, consequatur commodi est optio quis inventore quidem unde! Autem, atque maxime quidem, sapiente, dolorem illum iste cupiditate expedita delectus asperiores praesentium doloremque ex vero. Est rem quisquam sed nihil recusandae aut quasi iure expedita repellendus placeat! Unde ipsum id, placeat dicta voluptatibus qui fugiat incidunt numquam veritatis dolores perspiciatis ad? Praesentium magni dolores ut nostrum rem vel perspiciatis illo nobis delectus modi autem, eos deserunt laborum cupiditate? Quasi quam, totam dolor sint quaerat cum itaque numquam!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'tittle' => "Judul Ke Dua",
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam iure atque culpa dignissimos reprehenderit delectus consequatur, perspiciatis tempora vel beatae iusto! Ab nam id, consequatur commodi est optio quis inventore quidem unde!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam iure atque culpa dignissimos reprehenderit delectus consequatur, perspiciatis tempora vel beatae iusto! Ab nam id, consequatur commodi est optio quis inventore quidem unde! Autem, atque maxime quidem, sapiente, dolorem illum iste cupiditate expedita delectus asperiores praesentium doloremque ex vero. Est rem quisquam sed nihil recusandae aut quasi iure expedita repellendus placeat! Unde ipsum id, placeat dicta voluptatibus qui fugiat incidunt numquam veritatis dolores perspiciatis ad? Praesentium magni dolores ut nostrum rem vel perspiciatis illo nobis delectus modi autem, eos deserunt laborum cupiditate? Quasi quam, totam dolor sint quaerat cum itaque numquam!',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'tittle' => "Judul Ke Tiga",
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam iure atque culpa dignissimos reprehenderit delectus consequatur, perspiciatis tempora vel beatae iusto! Ab nam id, consequatur commodi est optio quis inventore quidem unde!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam iure atque culpa dignissimos reprehenderit delectus consequatur, perspiciatis tempora vel beatae iusto! Ab nam id, consequatur commodi est optio quis inventore quidem unde! Autem, atque maxime quidem, sapiente, dolorem illum iste cupiditate expedita delectus asperiores praesentium doloremque ex vero. Est rem quisquam sed nihil recusandae aut quasi iure expedita repellendus placeat! Unde ipsum id, placeat dicta voluptatibus qui fugiat incidunt numquam veritatis dolores perspiciatis ad? Praesentium magni dolores ut nostrum rem vel perspiciatis illo nobis delectus modi autem, eos deserunt laborum cupiditate? Quasi quam, totam dolor sint quaerat cum itaque numquam!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'tittle' => "Judul Ke Empat",
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam iure atque culpa dignissimos reprehenderit delectus consequatur, perspiciatis tempora vel beatae iusto! Ab nam id, consequatur commodi est optio quis inventore quidem unde!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam iure atque culpa dignissimos reprehenderit delectus consequatur, perspiciatis tempora vel beatae iusto! Ab nam id, consequatur commodi est optio quis inventore quidem unde! Autem, atque maxime quidem, sapiente, dolorem illum iste cupiditate expedita delectus asperiores praesentium doloremque ex vero. Est rem quisquam sed nihil recusandae aut quasi iure expedita repellendus placeat! Unde ipsum id, placeat dicta voluptatibus qui fugiat incidunt numquam veritatis dolores perspiciatis ad? Praesentium magni dolores ut nostrum rem vel perspiciatis illo nobis delectus modi autem, eos deserunt laborum cupiditate? Quasi quam, totam dolor sint quaerat cum itaque numquam!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
