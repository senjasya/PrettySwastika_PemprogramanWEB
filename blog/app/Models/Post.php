<?php

namespace App\Models;



class Post
{
   private static $blog_post = [
        [
            'title' => 'Judul Pertama',
            'slug' => 'judul-tulisan-pertama',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore, vitae nam? Vitae dolorum repellat ipsum. Similique ipsum dolor officiis enim fugiat quaerat ut eum rerum esse delectus id aspernatur perspiciatis, tenetur asperiores eos aperiam commodi cupiditate inventore corporis cumque voluptas tempore placeat! Rerum nostrum itaque id alias ipsam vel, consectetur eligendi eveniet quod accusantium impedit similique provident eum recusandae aliquid ad. A laudantium earum vitae dignissimos temporibus cupiditate odit iure, eius magni totam aut nemo inventore consectetur pariatur non dolores recusandae enim tempore aperiam consequatur! Distinctio laudantium voluptatum eligendi expedita tempora! Nobis facere error unde rem totam accusamus minus molestiae.'
        ],
        [
            'title' => 'Judul Kedua',
            'slug' => 'judul-tulisan-kedua',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore, vitae nam? Vitae dolorum repellat ipsum. Similique ipsum dolor officiis enim fugiat quaerat ut eum rerum esse delectus id aspernatur perspiciatis, tenetur asperiores eos aperiam commodi cupiditate inventore corporis cumque voluptas tempore placeat! Rerum nostrum itaque id alias ipsam vel, consectetur eligendi eveniet quod accusantium impedit similique provident eum recusandae aliquid ad. A laudantium earum vitae dignissimos temporibus cupiditate odit iure, eius magni totam aut nemo inventore consectetur pariatur non dolores recusandae enim tempore aperiam consequatur! Distinctio laudantium voluptatum eligendi expedita tempora! Nobis facere error unde rem totam accusamus minus molestiae.'
        ],
    ];


    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug) {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }

};

