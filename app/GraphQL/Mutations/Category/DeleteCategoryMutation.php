<?php

namespace App\GraphQL\Mutations\Category;

use App\Models\Category;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Mutation;

class DeleteCategoryMutation extends Mutation
{

    protected $attributes = [
        'name' => 'deleteCategory',
        'description' => 'Delete a category'
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
                'description' => 'The uuid of the category',
                'rules' => ['required', 'uuid', 'exists:categories,uuid']
            ],
        ];
    }

    public function resolve($root, $args)
    {
        $category = Category::where('uuid', $args['uuid'])->firstOrFail();
        return $category->delete();
    }
}
