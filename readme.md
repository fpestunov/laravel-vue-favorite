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
- теперь заполним базу данными `php artisan db:seed`;

### аутентификация пользователей

- настроим аутентификацию `php artisan make:auth` (отмечать полюбившиеся сообщения может только авторизованный пользователь);

### настройка роутов

- добавим роуты в `routes/web.php`;
- меняем редиректы в файлах `LoginController.php` и `RegisterController.php`:
```
protected $redirectTo = '/home';
protected $redirectTo = '/';
```

### настройка связи пользователей и любимы постов

- добавим связи в файле `app/User.php`;

### добавляем и настраиваем контроллер постов

- создаем контроллер `php artisan make:controller PostsController`;
- добавим метод `index()` в контроллер;
- добавим ссылки в `resources/views/layouts/app.blade.php`;
- теперь созадим вью `resources/views/posts/index.blade.php`;
- скомпилируем css `npm run dev`;
- посмотрим на результат `php artisan serve`;

- добавляем в контроллер методы `fovorite` и `unfovorite`;

### добавляем Vue.js

- добавим компонент `Favorite.vue` в папке `resources/js/components`;
- регистрируем компонент в `resources/js/app.js`;
- компилируем стили и скрипты `npm run dev`;

### используем Favorite компонент

- добавим компонент в нашу вью с постами `resources/views/posts/index.blade.php`;
- добавим метод `favorited()` в модель `app/Post.php`;
