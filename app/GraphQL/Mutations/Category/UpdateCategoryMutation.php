<?php

namespace App\GraphQL\Mutations\Category;

use App\Models\Category;
use GraphQL\Type\Definition\Type;
use GraphQL\Type\Definition\Type as GraphQLType;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Mutation;

class UpdateCategoryMutation extends Mutation
{

    protected $attributes = [
        'name' => 'updateCategory',
        'description' => 'Update a category'
    ];

    public function type(): GraphQLType
    {
        return GraphQL::type('Category');
    }

    public function args(): array
    {
        return [
            'uuid' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The uuid of the category',
                'rules' => ['required', 'uuid', 'exists:categories,uuid']
            ],
            'name' => [
                'type' => Type::nonNull(Type::string()), // Type::nonNull(Type::string()
                'description' => 'The name of the category'
            ],
        ];
    }

    public function resolve($root, $args)
    {
        $category = Category::where('uuid', $args['uuid'])->firstOrFail();
        $category->update([
            'name' => $args['name'],
        ]);
        return $category;
    }
}
