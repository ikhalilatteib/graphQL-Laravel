<?php

namespace App\GraphQL\Types;

use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Type as GraphQLType;
class UserType extends GraphQLType
{

    protected $attributes = [
        'name' => 'User',
        'description' => 'A user',
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The uuid of the user',
                'alias' => 'uuid', // Use 'alias' if the database column is different from the type name
            ],
            'name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The name of the user',
            ],
            'email' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The email of the user',
            ],
            'email_verified_at' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The email_verified_at of the user',
            ],
            'created_at' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The created_at of the user',
            ],
            'updated_at' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The updated_at of the user',
            ],
            'posts' => [
                'type' => Type::listOf(GraphQL::type('Post')),
                'description' => 'The posts of the user',
            ],
        ];
    }

}
