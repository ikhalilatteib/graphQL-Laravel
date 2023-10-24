<?php

namespace App\GraphQL\Mutations\Post;

use App\Models\Post;
use GraphQL\Type\Definition\Type;
use GraphQL\Type\Definition\Type as GraphQLType;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Mutation;

class CreatePostMutation extends Mutation
{

    protected $attributes = [
        'name' => 'createPost',
        'description' => 'Create a post'
    ];

    public function type(): GraphQLType
    {
        return GraphQL::type('Post');
    }

    public function args(): array
    {
        return [
            'title' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The title of the post'
            ],
            'content' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The content of the post'
            ],
            'category_id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The category id of the post'
            ],
        ];
    }

    public function resolve($root, $args)
    {
        return Post::create([
            'title'       => $args['title'],
            'content'     => $args['content'],
            'category_id' => $args['category_id'],
            'user_id'     => auth()->user()->id,
        ]);
    }
}
