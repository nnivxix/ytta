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


## Usage using `tinkerun`

1. open file `./.tinkerun/post.php`.
2. uncomments all codes,
3. click run (click on top right corner) or `ctrl + r` (if you have configured the keybinding).

## References

- [Polymorphic Relationships - Laravel Documentation](https://laravel.com/docs/10.x/eloquent-relationships#polymorphic-relationships)
- [Enforcing Morph Maps in Laravel - Laravel News](https://laravel-news.com/enforcing-morph-maps-in-laravel)
- [Polymorphic relationships in Laravel and their use cases - Blog/Log Rocket](https://blog.logrocket.com/polymorphic-relationships-laravel/)
- [Tinkerun for Visual Studio Code](https://github.com/tinkerun/tinkerun-vscode)
