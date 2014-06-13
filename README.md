laravel-crud
============

a simple powerful artisan command to create crud for laravel in 5 mintues
----

> copy commands/crud/ dir to your laravel : app/commands/

> open and edit app/start/artisan.php

add these codes to end of the file

```sh

Artisan::add(new CrudMock);
Artisan::add(new CrudMake);
```
>  registers artisan command to laravel


then you should create your mock in order to build your crud

```sh
php artisan crud:mock user
```

> this command creates a mock for user Model

> you can find it in app/mocks/MockUser.php 

in order to create Multiple mocks you can run this command

```sh
php artisan crud:mock user,company,category
```

> mocks must be seprated with ","






