<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title'=> 'Artikel 1',
                'author'=> 'Amelia',
                'body'=> 'Lorem ipsum odor amet, consectetuer adipiscing elit. Aptent dui non vitae iaculis tempus amet. Ac accumsan himenaeos sit parturient sagittis quam. Metus parturient hendrerit fames platea convallis penatibus elit potenti. Sapien finibus efficitur; cursus vestibulum montes non venenatis nostra. Hac tristique et sit, phasellus pulvinar gravida. Per elementum arcu montes volutpat duis. Diam tellus ultricies fusce sollicitudin nostra magnis volutpat nam praesent. Mi sagittis etiam dictum nullam cursus eu.'
            ],
            [
                'id'=> 2,
                'title'=> 'Artikel 2',
                'author'=> 'Gizzela',
                'body'=> 'Lorem ipsum odor amet, consectetuer adipiscing elit. Sem accumsan aliquam quam lacinia ullamcorper habitasse. Phasellus vestibulum mollis sed tincidunt fermentum erat. Lorem leo tempus cubilia viverra vulputate ullamcorper mollis et cras. Ut iaculis ut semper montes blandit risus commodo adipiscing. Tortor torquent enim leo, aptent neque varius. Quis congue tristique sociosqu dis dictum sit molestie gravida erat. In enim sodales orci nam morbi sit ridiculus commodo. Placerat congue sed lectus dolor tristique per.'
            ]
            ];
    }
    public static function find($id) :array
    {
        // return Arr::first(static::all(), function ($post) use ($id) {
        //     return $post['id'] == $id;
        // });

        $post= Arr::first(static::all(), fn($post)=> $post['id']==$id);

        if (!$post){
            abort(404);
        };

        return $post;
    }
}