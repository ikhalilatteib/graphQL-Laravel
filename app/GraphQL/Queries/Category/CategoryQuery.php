<?php

namespace App\GraphQL\Queries\Category;

use App\GraphQL\Fields\CategoryField;
use App\Models\Category;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class CategoryQuery extends Query
{
    protected $attributes = [
        'name' => 'category',
    ];

    public function type(): Type
    {
        return GraphQL::type('Category');
    }

    public function args(): array
    {
        return [
            'uuid' => [
                'name' => 'uuid', // The name of the field
                'type' => Type::string(),
                'description' => 'The uuid of the category',
                'rules' => ['required', 'uuid', 'exists:categories,uuid']
            ],
        ];
    }

    public function resolve($root, $args): ?Category
    {
        return Category::where('uuid', $args['uuid'])->firstOrFail();
    }
}
