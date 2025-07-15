# ООО МК-Бизнес Онлайн

![Debian](https://img.shields.io/badge/Debian-12-A81D33?logo=debian&logoColor=white)
![Docker](https://img.shields.io/badge/Docker-28.2-2496ED?logo=docker&logoColor=white)
![Nginx](https://img.shields.io/badge/Nginx-1.27-009639?logo=nginx&logoColor=white)
![PHP-FPM](https://img.shields.io/badge/PHP_FPM-8.4-777BB4?logo=php&logoColor=white)


## 🌟 Установка
```bash
git clone git@github.com:ivanitch/bizon-test.git .
```

## 🚀 Запуск Docker и установка зависимостей Composer
```bash
# http://localhost
make build && make up

# Container php-fpm
make app 

# Composer
composer install
```