<?php


namespace App\GraphQL\Mutations\Article;

use App\Models\Article;
use Rebing\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;

class CreateArticleMutation extends Mutation
{
    protected $attributes = [
        'name' => 'createArticle',
        'description' => 'Creates a article'
    ];

    public function type(): Type
    {
        return GraphQL::type('Article');
    }

    public function args(): array
    {
        return [
            'title' => [
                'name' => 'title',
                'type' =>  Type::nonNull(Type::string()),
            ],
            'contnet' => [
                'name' => 'contnet',
                'type' =>  Type::nonNull(Type::string()),
            ],
            'category_id' => [
                'name' => 'category_id',
                'type' => Type::nonNull(Type::int()),
                'rules' => ['exists:categories,id']
            ]
        ];
    }

    public function resolve($root, $args)
    {
        $article = new Article();
        $article->fill($args);
        $article->save();

        return $article;
    }
}