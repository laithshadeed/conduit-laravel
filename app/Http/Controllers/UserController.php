<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    const MY_USER = [
        'user' => [
            'id' => 12131,
            'email' => 'spam@l3.io',
            'createdAt' => '2017-09-23T13:45:09.129Z',
            'updatedAt' => '2018-02-18T10:06:41.947Z',
            'username' => 'l3io',
            'bio' => 'Something',
            'image' => 'https://l3.ai/p.jpg',
            'token' => 'eyJ0eXAiOiJKV1QiL'
        ]
    ];

    const SOME_PROFILE = [
        'profile' => [
            'username' => 'user1',
            'bio' => 'short bio',
            'image' => null,
            'following' => false
        ]
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response('Unimplemented endpoint', 400);
    }

    /**
     * Perform login
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return response()->json(self::MY_USER);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->json(self::MY_USER);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return response('Unimplemented endpoint', 400);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return response()->json(self::MY_USER);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return response('Unimplemented endpoint', 400);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        return response()->json(self::MY_USER);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        return response('Unimplemented endpoint', 400);
    }

    public function showProfile()
    {
        return response()->json(self::SOME_PROFILE);
    }

    public function followProfile()
    {
        $profile = self::SOME_PROFILE;
        $profile['following'] = true;
        return response()->json($profile);
    }

    public function unfollowProfile()
    {
        $profile = self::SOME_PROFILE;
        $profile['following'] = false;
        return response()->json($profile);
    }
}
