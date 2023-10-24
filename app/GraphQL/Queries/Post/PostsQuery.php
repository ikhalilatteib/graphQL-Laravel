<?php

namespace App\GraphQL\Queries\Post;

use App\GraphQL\Fields\PostField;
use App\Models\Post;
use GraphQL\Type\Definition\Type;
use GraphQL\Type\Definition\Type as GraphQLType;
use Illuminate\Database\Eloquent\Collection;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class PostsQuery extends Query
{

    protected $attributes = [
        'name' => 'posts',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('Post'));
    }

    public function resolve($root, $args): Collection
    {
        return Post::all();
    }
}
