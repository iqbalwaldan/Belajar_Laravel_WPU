<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Iqbal',
            'username' => 'iqbal',
            'email' => 'iqbal@gmail.com',
            'password' => bcrypt('password'),
        ]);

        // User::create([
        //     'name' => 'Waldan',
        //     'email' => 'waldan@gmail.com',
        //     'password' => bcrypt('12345678'),
        // ]);

        User::factory(4)->create();
        // Category::factory(5)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::factory(30)->create();

        // Post::create(
        //     [
        //         'title' => 'Judul Pertama',
        //         'category_id' => 2,
        //         'user_id' => 2,
        //         'slug' => 'judul-pertama',
        //         'excerpt' => 'Lorem ipsum Pertama',
        //         'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum placeat itaque doloribus accusantium impedit nulla sit saepe quae molestias dolor nobis incidunt iusto id, quam exercitationem tempora ea beatae error vitae alias non est eaque nesciunt! Aliquid, vero maxime? Ad nisi, nulla tenetur quo temporibus voluptates! Corrupti ipsa possimus totam.</p><p>Esse eaque ea ipsam ab, eos aut incidunt voluptatum in, nostrum commodi at magni minima facere officiis repellendus aspernatur reiciendis nesciunt laborum fuga nihil nemo! Error iusto nesciunt at perferendis fuga saepe labore est perspiciatis nemo nam quis, nihil veritatis enim repellat expedita sit porro itaque eum doloribus recusandae.</p><p>Exercitationem odit necessitatibus temporibus provident expedita architecto sunt nemo omnis ratione, accusamus veniam quibusdam aut perferendis labore minima odio laboriosam ipsum officiis dolorem sequi consequatur facilis. Atque ab laborum accusamus possimus, quos quam tempore aliquid est blanditiis deleniti nemo optio dignissimos repellendus! Voluptates dolorum velit doloremque facere laborum sit, temporibus sint.</p>',
        //     ]
        // );
        // Post::create(
        //     [
        //         'title' => 'Judul Kedua',
        //         'category_id' => 1,
        //         'user_id' => 1,
        //         'slug' => 'judul-ke-dua',
        //         'excerpt' => 'Lorem ipsum Ke Dua',
        //         'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum placeat itaque doloribus accusantium impedit nulla sit saepe quae molestias dolor nobis incidunt iusto id, quam exercitationem tempora ea beatae error vitae alias non est eaque nesciunt! Aliquid, vero maxime? Ad nisi, nulla tenetur quo temporibus voluptates! Corrupti ipsa possimus totam.</p><p>Esse eaque ea ipsam ab, eos aut incidunt voluptatum in, nostrum commodi at magni minima facere officiis repellendus aspernatur reiciendis nesciunt laborum fuga nihil nemo! Error iusto nesciunt at perferendis fuga saepe labore est perspiciatis nemo nam quis, nihil veritatis enim repellat expedita sit porro itaque eum doloribus recusandae.</p><p>Exercitationem odit necessitatibus temporibus provident expedita architecto sunt nemo omnis ratione, accusamus veniam quibusdam aut perferendis labore minima odio laboriosam ipsum officiis dolorem sequi consequatur facilis. Atque ab laborum accusamus possimus, quos quam tempore aliquid est blanditiis deleniti nemo optio dignissimos repellendus! Voluptates dolorum velit doloremque facere laborum sit, temporibus sint.</p>',
        //     ]
        // );
        // Post::create(
        //     [
        //         'title' => 'Judul Ke Tiga',
        //         'category_id' => 2,
        //         'user_id' => 1,
        //         'slug' => 'judul-ke-tiga',
        //         'excerpt' => 'Lorem ipsum Ke Tiga',
        //         'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum placeat itaque doloribus accusantium impedit nulla sit saepe quae molestias dolor nobis incidunt iusto id, quam exercitationem tempora ea beatae error vitae alias non est eaque nesciunt! Aliquid, vero maxime? Ad nisi, nulla tenetur quo temporibus voluptates! Corrupti ipsa possimus totam.</p><p>Esse eaque ea ipsam ab, eos aut incidunt voluptatum in, nostrum commodi at magni minima facere officiis repellendus aspernatur reiciendis nesciunt laborum fuga nihil nemo! Error iusto nesciunt at perferendis fuga saepe labore est perspiciatis nemo nam quis, nihil veritatis enim repellat expedita sit porro itaque eum doloribus recusandae.</p><p>Exercitationem odit necessitatibus temporibus provident expedita architecto sunt nemo omnis ratione, accusamus veniam quibusdam aut perferendis labore minima odio laboriosam ipsum officiis dolorem sequi consequatur facilis. Atque ab laborum accusamus possimus, quos quam tempore aliquid est blanditiis deleniti nemo optio dignissimos repellendus! Voluptates dolorum velit doloremque facere laborum sit, temporibus sint.</p>',
        //     ]
        // );
        // Post::create(
        //     [
        //         'title' => 'Judul Ke Empat',
        //         'category_id' => 2,
        //         'user_id' => 2,
        //         'slug' => 'judul-ke-empat',
        //         'excerpt' => 'Lorem ipsum Ke Empat',
        //         'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum placeat itaque doloribus accusantium impedit nulla sit saepe quae molestias dolor nobis incidunt iusto id, quam exercitationem tempora ea beatae error vitae alias non est eaque nesciunt! Aliquid, vero maxime? Ad nisi, nulla tenetur quo temporibus voluptates! Corrupti ipsa possimus totam.</p><p>Esse eaque ea ipsam ab, eos aut incidunt voluptatum in, nostrum commodi at magni minima facere officiis repellendus aspernatur reiciendis nesciunt laborum fuga nihil nemo! Error iusto nesciunt at perferendis fuga saepe labore est perspiciatis nemo nam quis, nihil veritatis enim repellat expedita sit porro itaque eum doloribus recusandae.</p><p>Exercitationem odit necessitatibus temporibus provident expedita architecto sunt nemo omnis ratione, accusamus veniam quibusdam aut perferendis labore minima odio laboriosam ipsum officiis dolorem sequi consequatur facilis. Atque ab laborum accusamus possimus, quos quam tempore aliquid est blanditiis deleniti nemo optio dignissimos repellendus! Voluptates dolorum velit doloremque facere laborum sit, temporibus sint.</p>',
        //     ]
        // );
    }
}
