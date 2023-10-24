<?php

namespace App\GraphQL\Mutations\Post;

use App\Models\Post;
use GraphQL\Type\Definition\Type;
use GraphQL\Type\Definition\Type as GraphQLType;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Mutation;

class DeletePostMutation extends Mutation
{

    protected $attributes = [
        'name' => 'deletePost',
        'description' => 'Delete a post'
    ];

    public function type(): Type

    {
        return Type::boolean();
    }

    public function args(): array
    {
        return [
            'uuid' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The uuid of the post',
                'rules' => ['required', 'uuid', 'exists:posts,uuid']
            ],
        ];
    }

    public function resolve($root, $args)
    {
        $post = Post::where('uuid', $args['uuid'])->firstOrFail();
        return $post->delete();
    }
}
