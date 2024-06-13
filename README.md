# Basic Livewire CRUD

- Laravel v10
- Livewire v3
- SQLite

## Clone Repository
```bash
git clone git@github.com:putera/basic-livewire-crud.git
```

## Step 1
```bash
cp .env.example .env
```

## Step 2
```bash
composer install
```

## Step 3
```bash
npm install && npm run build
```

## Step 4
```bash
php artisan key:generate
```

## Step 5
```bash
php artisan migrate:fresh --seed
```

## Step 6
```bash
php artisan serve
```

and visit http://127.0.0.1:8000
