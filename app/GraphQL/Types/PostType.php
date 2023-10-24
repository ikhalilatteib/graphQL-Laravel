<?php

namespace App\GraphQL\Types;

use App\Models\Post;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Type as GraphQLType;

class PostType extends GraphQLType
{

    protected $attributes = [
        'name' => 'Post',
        'description' => 'Collection of posts',
        'model' => Post::class,
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The uuid of the post',
                'alias' => 'uuid', // Use 'alias' if the database column is different from the type name
            ],
            'slug' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The slug of the post',
            ],
            'title' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The title of the post',
            ],
            'description' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The description of the post',
            ],
            'content' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The content of the post',
            ],
            'created_at' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The created_at of the post',
            ],
            'category' => [
                'type' => GraphQL::type('Category'),
                'description' => 'The category of the post',
            ],
            'user' => [
                'type' => GraphQL::type('User'),
                'description' => 'The user of the post',
            ],
        ];
    }
}
