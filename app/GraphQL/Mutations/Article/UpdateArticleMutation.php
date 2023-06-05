<?php

namespace App\GraphQL\Mutations\Article;

use App\Models\Article;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Mutation;

class UpdateArticleMutation extends Mutation
{
    protected $attributes = [
        'name' => 'updateArticle',
        'description' => 'Updates a article'
    ];

    public function type(): Type
    {
        return GraphQL::type('Article');
    }

    public function args(): array
    {
        return [
            'id' => [
                'name' => 'id',
                'type' =>  Type::nonNull(Type::int()),
            ],
            'title' => [
                'name' => 'title',
                'type' =>  Type::nonNull(Type::string()),
            ],
            'contnet' => [
                'name' => 'contnet',
                'type' =>  Type::nonNull(Type::string()),
            ],
            'cateogry_id' => [
                'name' => 'cateogry_id',
                'type' => Type::nonNull(Type::int()),
                'rules' => ['exists:categories,id']
            ]
        ];
    }

    public function resolve($root, $args)
    {
        $Article = Article::findOrFail($args['id']);
        $Article->fill($args);
        $Article->save();

        return $Article;
    }
}