### Создать приложение на Laravel

Есть пользователь с admin@admin.com  pass: secret должен быть предустановлен через сидер
После авторизации есть форма в которой есть кнопка загрузить.
При нажатии на кнопку Загрузить в грид загружается список товаров maybelline из этого api. На странице показывать название + изображение.


### Запуск

```
composer install
./vendor/bin/sail up
./vendor/bin/sail artisan migrate:fresh --seed
```

http://localhost:80
