# YTTA (Youtube Tes Asal 😋)

This repository aims to learn Polymorphic relationships in Laravel. In this repository there are `Video, Post, Comment` **(Polymorphic)** models.


## Usage using `tinker`

### Open tinker
```bash
php artisan tinker
```

### Find `$user`
```php
$user = \App\Models\User::find(1);
```

### Create post and find post

```bash
$user->posts()->create([
    'title'   => 'test title',
    'content' => 'test content'
]);
```



```bash
$post = $user->posts()->find('uuid');
```

### Create comment

```php
$post->comments()->create([
    'user_id' => 1,
    'content' => 'comment post 1'
]);
```

### Show Comments

```php
$post->comments;
```


