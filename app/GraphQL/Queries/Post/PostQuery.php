<?php

namespace App\GraphQL\Queries\Post;

use App\GraphQL\Fields\PostField;
use App\Models\Post;
use GraphQL\Type\Definition\Type;
use GraphQL\Type\Definition\Type as GraphQLType;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class PostQuery extends Query
{

    protected $attributes = [
        'name' => 'post',
    ];

    public function type(): Type
    {
        return GraphQL::type('Post');
    }


    public function args(): array
    {
        return [
            'uuid' => [
                'name' => 'uuid', // The name of the field
                'type' => Type::string(),
                'description' => 'The uuid of the post',
                'rules' => ['required', 'uuid', 'exists:posts,uuid']
            ]
        ];
    }

    public function resolve($root, $args): ?Post
    {
        return Post::where('uuid', $args['uuid'])->firstOrFail();
    }
}
