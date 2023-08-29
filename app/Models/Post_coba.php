<?php

namespace App\Models;

class Post_coba
{
    private static $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Iqbal",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim eum mollitia ratione est aliquid, eos molestiae numquam, excepturi sequi fugit ullam. Laboriosam fugit magnam alias ad cupiditate, odit eaque. Magni ex quaerat unde nemo optio commodi temporibus eum beatae corrupti est. Molestiae ipsum, officiis debitis impedit, ratione iure accusamus aut hic optio quaerat, odio ullam quasi aliquam aliquid quisquam nemo minus. Sequi iste itaque repellat, vel voluptas, est maiores soluta ex corporis officia eligendi at. Quod deleniti et eos nemo officia. Voluptatem nostrum iure autem cupiditate exercitationem totam voluptas tempore excepturi dolores iusto voluptatum voluptates suscipit, dolore ratione sapiente corrupti.",
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Waldan",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim eum mollitia ratione est aliquid, eos molestiae numquam, excepturi sequi fugit ullam. Laboriosam fugit magnam alias ad cupiditate, odit eaque. Magni ex quaerat unde nemo optio commodi temporibus eum beatae corrupti est. Molestiae ipsum, officiis debitis impedit, ratione iure accusamus aut hic optio quaerat, odio ullam quasi aliquam aliquid quisquam nemo minus. Sequi iste itaque repellat, vel voluptas, est maiores soluta ex corporis officia eligendi at. Quod deleniti et eos nemo officia. Voluptatem nostrum iure autem cupiditate exercitationem totam voluptas tempore excepturi dolores iusto voluptatum voluptates suscipit, dolore ratione sapiente corrupti.",
        ],
    ];    

    public static function all()
    {
        // mengembalikan data static self::...
        // mengambil data biasa $this->...
        return collect(self::$blog_post);
    }

    public static function find($slug){
        // self untuk properti static
        // this untuk properti biasa
        // static untuk method static
        $blog_posts = static::all();

        // $new_post = [];
        // foreach($blog_posts as $post){
        //     if($post["slug"] === $slug){
        //         $new_post = $post;
        //     }
        // }

        return $blog_posts->firstWhere('slug', $slug);
    }
}
