<?php
return [
    '~^$~' => [\MyProject\Controllers\MainController::class, 'main'],
    '~^hello/(.*)$~' => [\MyProject\Controllers\MainController::class, 'sayHello'],
    '~^bye/(.*)$~' => [\MyProject\Controllers\MainController::class, 'sayBye'],
    '~^articles/(\d)/comments$~' => [\MyProject\Controllers\CommentsController::class, 'loadComments'],
    '~^comments/(\d)/edit$~' => [\MyProject\Controllers\CommentsController::class, 'edit'],
    '~^articles/(.*)$~' => [\MyProject\Controllers\ArticlesController::class, 'view'],
    '~^article/(\d)/edit$~' => [\MyProject\Controllers\ArticlesController::class, 'edit'],
];
