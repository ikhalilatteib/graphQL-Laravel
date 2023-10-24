<?php

namespace App\GraphQL\Mutations\Category;

use App\Models\Category;
use GraphQL\Type\Definition\Type;
use GraphQL\Type\Definition\Type as GraphQLType;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Mutation;

class CreateCategoryMutation extends Mutation
{

    protected $attributes = [
        'name' => 'createCategory',
        'description' => 'Create a category'
    ];
    public function type(): GraphQLType
    {
        return GraphQL::type('Category');
    }

    public function args(): array
    {
        return [
            'name' => [
                'type' => Type::nonNull(Type::string()), // Type::nonNull(Type::string()
                'description' => 'The name of the category'
            ],
        ];
    }

    public function resolve($root, $args)
    {
        return Category::create([
            'name' => $args['name'],
        ]);
    }
}
