<?php

namespace App\GraphQL\Mutations\Post;

use App\Models\Post;
use GraphQL\Type\Definition\Type;
use GraphQL\Type\Definition\Type as GraphQLType;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Mutation;

class UpdatePostMutation extends Mutation
{

    protected $attributes = [
        'name' => 'updatePost',
        'description' => 'Update a post'
    ];

    public function type(): GraphQLType
    {
        return GraphQL::type('Post');
    }

    public function args(): array
    {
        return [
            'uuid' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The uuid of the post',
                'rules' => ['required', 'uuid', 'exists:posts,uuid']
            ],
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
        $post = Post::where('uuid', $args['uuid'])->firstOrFail();
        $post->update([
            'title'       => $args['title'],
            'content'     => $args['content'],
            'category_id' => $args['category_id'],
        ]);
        return $post;
    }
}
