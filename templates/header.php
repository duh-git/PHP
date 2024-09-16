<!DOCTYPE html>

<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title><?= isset($title) ? $title : "Мой блог" ?></title>
    <link rel="stylesheet" href="/styles/styles.css">
</head>

<body>
    <table class="layout">
        <tr>
            <td colspan="2" class="header">
                <?= !empty($user) ? 'Привет, ' . $user->getNickname() : 'Войдите на сайт' ?>
            </td>
        </tr>
        <tr>
            <td>