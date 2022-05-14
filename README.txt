composer dump-autoload - оптимизация файлов для Laravel
coposer update - обновляет файлы, лучше всего делай когда их добавляешь, а то мало ли

php artisan make:migration *название таблицы миграции
php artisan migrate создание миграции
php artisan migrate:refresh - реврешить миграцию

https://laravel.su/docs/8.x/migrations#generating-migrations - документация на русском по миграции


CREATE SCHEMA `Название базы данных` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci; 
Создает базу данных по кадировке utf8mb4 - запомни и радуйся  (создание в базе данных)

В web.php ты создаешь страницы, они сразу ЧПУшаться
В контроллерах ты задаешь функции вызова, там глянь, простые достаточно штуки
В моделях ты уже там более менее все сделал, не парься, будешь восполнять

Route::get('/ЧПУ', 'НазваниеController@index')->name('Имя.index'); - это пример рута ссылки, ты так создаешь страницы
href="{{route}('имя.index')}" -это транш ссылка, привыкай, так правильно

@extends('layouts.main') //шаблон
@section('content') //секция контент