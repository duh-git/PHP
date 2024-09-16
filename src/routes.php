<?php
return [
    '~^articles/(\d+)/comments$~' => [\MyProject\Controllers\CommentsController::class, 'loadComments'],
    '~^article/update/(\d+)$~' => [\MyProject\Controllers\ArticlesController::class, 'update'],
    '~^article/(\d+)/edit$~' => [\MyProject\Controllers\ArticlesController::class, 'edit'],
    '~^articles/add$~' => [\MyProject\Controllers\ArticlesController::class, 'add'],
    '~^articles/(.*)$~' => [\MyProject\Controllers\ArticlesController::class, 'view'],
    '~^users/register$~' => [\MyProject\Controllers\UsersController::class, 'signUp'],
    '~^users/login$~' => [\MyProject\Controllers\UsersController::class, 'login'],
    '~^users/(\d+)/activate/(.+)$~' => [\MyProject\Controllers\UsersController::class, 'activate'],
    '~^comments/(\d+)/edit$~' => [\MyProject\Controllers\CommentsController::class, 'edit'],
    '~^hello/(.*)$~' => [\MyProject\Controllers\MainController::class, 'sayHello'],
    '~^bye/(.*)$~' => [\MyProject\Controllers\MainController::class, 'sayBye'],
    '~^$~' => [\MyProject\Controllers\MainController::class, 'main'],
];
