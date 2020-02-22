<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

## Как запустить проект

1) Создать виртуальный хотс в своем WEB сервере.
2) Склонировать проект к себе на сервер `clone https://github.com/sergdsv/news.loc.git`
3) Создать базу данных на своем МуSQL сервере.
4) Перейти в каталог с проектом и запустить
`cp .env.example .env`
`php artisan key:generate`
5) Отредактировать .env для соединения с базой данных.
6) Сделать миграции для базы данных `php artisan migrate`
7) Сделать seed для базазы данных `php artisan db:seed`
8) В каталоге проекта установить необходимые пакеты Laravel
`composer install`
9) Установить и скомпилировать пасеты Webpack `npm install`
`npm run dev`

