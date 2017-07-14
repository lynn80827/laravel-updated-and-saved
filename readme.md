## Description

A demo code for my [medium article](https://medium.com/@lynn80827/laravel-eloquent-%E4%BA%8B%E4%BB%B6%E4%B8%AD%E7%9A%84-updated-%E5%92%8C-saved-%E5%8E%9F%E4%BE%86%E4%B8%8D%E4%B8%80%E6%A8%A3-caa8ef0ddbc). The repository is simple just to show the difference between laravel elqouent events `created` and `updatedAt`.

```diff
new file:   app/Observers/PostObserver.php
new file:   app/Post.php
modified:   app/Providers/AppServiceProvider.php
```

## Demo

### Case 1

```
>>> App\Post::find(1)
=> App\Post {
     postId: 1,
     title: "Consectetur corporis quam vitae qui suscipit cumque.",
     summary: "Magnam recusandae voluptatem itaque officiis optio occaecati alias.",
     content: "Voluptatum temporibus ab illum non qui rem quis. Non odio consequatur cumque iure eum.",
     keywords: "sint",
     pageview: 73,
     publishedAt: null,
     createdAt: "2017-05-05 07:06:59",
     updatedAt: "2017-07-14 06:33:29",
   }
>>> App\Post::find(1)->update(['pageview' => 73])
saved
=> true
>>> App\Post::find(1)->update(['pageview' => 74])
updatedAt
saved
=> true
```

### Case 2

```
>>> App\Post::find(1)
=> App\Post {
     postId: 1,
     title: "Consectetur corporis quam vitae qui suscipit cumque.",
     summary: "Magnam recusandae voluptatem itaque officiis optio occaecati alias.",
     content: "Voluptatum temporibus ab illum non qui rem quis. Non odio consequatur cumque iure eum.",
     keywords: "sint",
     pageview: 73,
     publishedAt: null,
     createdAt: "2017-05-05 07:06:59",
     updatedAt: "2017-07-14 06:54:28",
   }
>>> App\Post::select(['postId', 'title'])->find(1)->update(['pageview' => 73])
updatedAt
saved
=> true
```
