<?php

$user = \App\Models\User::find(1);

// $user->posts()->create([
//     'title'   => 'test title 2',
//     'content' => 'test content 2'
// ]);
$post = $user->posts()->find('9b894027-0050-4d9a-a07d-406ee31ffda4');

// $post->comments()->create([
//     'user_id' => 1,
//     'content' => 'comment post 1'
// ]);

$post->comments;
