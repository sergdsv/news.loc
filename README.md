<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

##Практическое задание:
Реализуйте на laravel простую новостную ленту с простым управлением содержимого.

Стек:
MySQL 5.7
Laravel 5.7
php 7.1

Требования:
На главной странице, расположенной на http://localhost:8000/ отображается список новостей отсортированный по дате и времени создания от новых к старым. С возможностью фильтрации по категории.
Заголовок новости ведёт на подробное описание новости (модальное окно или отдельная страница детальной новости)
Управление(создание, изменение, просмотр списка, удаление) списком новостей происходит со страницы http://localhost:8000/manager, обязательные поля к заполнению: Название(короткий текст), Текст(полный текст), Категория(короткий текст или выпадающий список).
Для клиентской части можно использовать Bootstrap

Дополнительно:
По разработке задания возможно задавать вопросы, в случае недопонимания. Основной упор задания узнать уровень и способность мыслить разработчика отталкиваясь от описанных требований.

Передача проекта:
Проект размешается в публичном репозитории github.com
В описании проекта описывается инструкция «как запустить проект»
Не использовать в названии репозитория или описании слова связанные с компанией.
Ссылка на репозиторий отсылается принимающему.

UI тут не важен, главное бекенд

по времение ограничний нет.
От выполнения тестового задания мы смотрим на подход и мышление кандидата.

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

