<?php

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'title-article-1',
                'title' => 'Title Article 1',
                'author' => 'Anis Nadhirah',
                'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id facilis quis amet ad rerum molestiae explicabo, placeat veritatis! Autem vero deleniti placeat et, voluptatibus aspernatur rem officiis ab voluptatem cum.'
            ],
            [
                'id' => 2,
                'slug' => 'title-article-2',
                'title' => 'Title Article 2',
                'author' => 'Anis Nadhirah',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum maxime ipsam dolores delectus nihil enim autem non dicta vero iusto fugiat nemo asperiores, eaque deserunt a modi deleniti? Dolorem, quasi.'
            ]
        ];
    }
}