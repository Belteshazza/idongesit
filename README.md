# Wealthy developer Project

## Guide to Contribute

## Clone the Master branch repository to have a copy of it on your own github account
```
git clone -b master https://github.com/Bethesida/wealthy_developer_website-.git

```
Checkout new_branch

## git checkout new_branch

## 4. Set up your project. (See the Initial Set Up section below)
5. Make your changes
6. Push your changes to your repo
7. Make a PR to the project repository, select compare across forks
8. In the dropdown section, select the new_branch branch
9. Make the PR

## Initial Set Up

1. Create .env file by running; create .env.example file manually if not found
```
cp .env.example .env
```

2. Install dependencies
```
composer install
```

4. Update .env with your database details

DB_DATABASE=YOUR_DATABASE_NAME
DB_USERNAME=YOUR_DATABASE_USERNAME
DB_PASSWORD=YOUR_DATABASE_PASSWORD

4. Generate laravel application key
```
php artisan key:generate
```

6. Migrate tables and seed data
```
php artisan migrate --seed
```

7. Start server
```
php artisan serve
```
