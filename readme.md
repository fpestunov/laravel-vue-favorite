# Laravel Vue Favorite

## Что мы сделаем?

## Порядок работы

### подготовка среды

- устанавливаем Ларавел `laravel new laravel-vue-favorite`;
- устанавливаем NPM зависимости `npm install`, нам понадобятся Bootstrap, Vue, Laravel-Mix;

### создаем модели и базу данных

- добавляем модели Post, Favorite:
```
php artisan make:model Post -m
php artisan make:model Favorite -m
```
- "докручиваем" миграции для этих моделей;
- подгатавливаем базу данных и прописываем ее в `.env`;
- запускаем миграцию `php artisan migrate`;

### наполним вымышленными данными

https://laravel.com/docs/5.8/database-testing#generating-factories

- создадим фабрику `php artisan make:factory PostFactory --model=Post`;
- создадим сидеры и добавим в них фабрики-генераторы данных:
```
php artisan make:seeder UsersTableSeeder
php artisan make:seeder PostsTableSeeder
```
- в файле `database/seeds/DatabaseSeeder.php` добавим ссылки на эти сидеры;
- теперь заполним базу данными `php artisan db:seed`

### аутентификация пользователей

- настроим аутентификацию `php artisan make:auth` (отмечать полюбившиеся сообщения может только авторизованный пользователь)
