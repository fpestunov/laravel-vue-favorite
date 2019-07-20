# Laravel Vue Favorite

## Что мы сделаем?

## Порядок работы

- устанавливаем Ларавел `laravel new laravel-vue-favorite`;
- устанавливаем NPM зависимости `npm install`, нам понадобятся Bootstrap, Vue, Laravel-Mix;
- добавляем модели Post, Favorite:
```
php artisan make:model Post -m
php artisan make:model Favorite -m
```
- "докручиваем" миграции для этих моделей;
- подгатавливаем базу данных и прописываем ее в `.env`;
- запускаем миграцию `php artisan migrate`;
