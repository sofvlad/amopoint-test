<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## О Laravel

Laravel - это фреймворк для веб-приложений с выразительным, элегантным синтаксисом. Мы считаем, что разработка должна быть приятным и творческим процессом, чтобы приносить истинное удовлетворение.

## Запуск

```bash
docker-compose up
```

## Возможности проекта

### JokeClient
Клиент для работы с внешним API шутков (`https://official-joke-api.appspot.com`)
- Автоматические повторные попытки при ошибках (3 попытки, задержка 500/1000/2000мс)
- Отдельное логирование в `storage/logs/joke-client.log`
- DTO для типизации данных
- Обработка исключений

### JokeService
Сервисный слой для оркестрации получения и сохранения шутков
- Инкапсулирует логику взаимодействия с `JokeClient` и репозиторием
- Метод `fetchAndStoreRandomJoke()` — получение и сохранение шутка

### JokeRepository
Репозиторий для работы с таблицей `jokes`
- Интерфейс `JokeRepositoryInterface` для внедрения зависимостей
- Метод `save()` — сохранение/обновление записей через `updateOrCreate`

### Планировщик задач
- Консольная команда `joke:fetch` — получение шутков из API каждые 5 минут
- Автоматическое сохранение данных в таблицу `jokes`

### REST API
- `GET /api/v1/jokes` — возвращает массив шутков из БД в формате JSON

### Фильтрация полей (JS)
- Динамическое отображение полей таблицы в зависимости от выбранного типа
- Файл: `resources/js/filterFields.js`
- Подключен через Vite, но можно так: `<script src="/js/filterFields.js"></script>`

