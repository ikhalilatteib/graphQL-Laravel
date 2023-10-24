<?php

namespace App\GraphQL\Types;
use App\Models\Category;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Type as GraphQLType;
class CategoryType extends GraphQLType
{

    protected $attributes = [
        'name' => 'Category',
        'description' => 'Collection of categories',
        'model' => Category::class,
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The uuid of the category',
                'alias' => 'uuid', // Use 'alias' if the database column is different from the type name
            ],
            'name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The name of the category',
            ],
            'slug' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The slug of the category',
            ],
            'created_at' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The created_at of the category',
            ],
            'updated_at' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The updated_at of the category',
            ],
            'posts' => [
                'type' => Type::listOf(GraphQL::type('Post')),
                'description' => 'The posts of the category',
            ],
        ];
    }
}
