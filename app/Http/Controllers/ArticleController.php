<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    const MY_AUTHOR = [
        'username' => 'laith',
        'bio' => null,
        'image' => 'https://l3.ai/p.jpg',
        'following' => false
    ];

    const MY_ARTICLES = [
        'articles' => [
            [
                'title' => 'something',
                'slug' => 'dixx',
                'body' => 'im body',
                'createdAt' => '2017-09-23T13:45:09.129Z',
                'updatedAt' => '2018-02-18T10:06:41.947Z',
                'tagList' => [],
                'description' => 'something desc',
                'author' => self::MY_AUTHOR,
                'favorited' => false,
                'favoritesCount' => 1
            ],
        ],
        'articlesCount' => 1
    ];

    const MY_COMMENTS = [
        'comments' => [
            [
                'id' => 22825,
                'createdAt' => "2018-06-02T15:44:06.486Z",
                'updatedAt' => "2018-06-02T15:44:06.486Z",
                'body' => "Thank you so much!",
                'author' => self::MY_AUTHOR
            ]
        ]
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(self::MY_ARTICLES);
    }

    public function feed()
    {
        return response()->json(self::MY_ARTICLES);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->json(['article' => self::MY_ARTICLES['articles'][0]]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return response()->json(['article' => self::MY_ARTICLES['articles'][0]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        return response()->json(['article' => self::MY_ARTICLES['articles'][0]]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        return response()->json(['article' => self::MY_ARTICLES['articles'][0]]);
    }

    public function favorite()
    {
        $article = self::MY_ARTICLES['articles'][0];
        $article['favorited'] = true;
        return response()->json(['article' => $article]);
    }

    public function unfavorite()
    {
        $article = self::MY_ARTICLES['articles'][0];
        $article['favorited'] = false;
        return response()->json(['article' => $article]);
    }

    public function getComments()
    {
        return response()->json(self::MY_COMMENTS);
    }

    public function createComment()
    {
        return response()->json(['comment' => self::MY_COMMENTS['comments'][0]]);
    }

    public function deleteComment()
    {
        return response()->json();
    }
}
