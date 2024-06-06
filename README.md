- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=pswgampang
- DB_USERNAME=root
- DB_PASSWORD=
- port 8080

## User yang sudah di create :

- Admin : admin@gmail.com [pw(admin)]
- customer : anisetusm@gmail.com [pw(anisetus)]
- employee : manalu@gmail.com [pw(manalu)]

## langkah-langkah untuk membuka
- composer update
- php artisan key:generate
- php artisan migrate
- php artisan db:seed
- php artisan serve
- untuk melihat akun yang terdaftar bisa lihat di seeder.php

## Author
- 11423017_Anisetus Bambang Manalu

- Infokan PSW 100