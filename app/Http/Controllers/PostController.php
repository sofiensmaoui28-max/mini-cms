<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    private function posts(): array
    {
        return [
            [
                'slug' => 'bienvenue-sur-mini-cms',
                'title' => 'Bienvenue sur Mini-CMS',
                'excerpt' => 'Premier article du projet fil rouge.',
                'author' => 'Sofien Smaoui',
                'date' => '2026-11-20',
                'year' => 2026,
                'featured' => true,
            ],
            [
                'slug' => 'comprendre-le-routage',
                'title' => 'Comprendre le routage Laravel',
                'excerpt' => 'Routes, closures et contrôleurs.',
                'author' => 'Sofien Smaoui',
                'date' => '2026-11-19',
                'year' => 2026,
                'featured' => false,
            ],
            [
                'slug' => 'retour-sur-2025',
                'title' => 'Retour sur 2025',
                'excerpt' => 'Un article de l\'année précédente.',
                'author' => 'Sofien Smaoui',
                'date' => '2025-06-10',
                'year' => 2025,
                'featured' => false,
            ],
        ];
    }

    public function index()
    {
        return view('posts.index', ['posts' => $this->posts()]);
    }

    public function show(string $slug)
    {
        $post = collect($this->posts())->firstWhere('slug', $slug);

        abort_if($post === null, 404);

        return view('posts.show', ['post' => $post]);
    }

    public function archive(int $year)
    {
        $posts = collect($this->posts())->where('year', $year)->all();

        return view('posts.index', ['posts' => $posts]);
    }
}