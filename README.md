# CakePHP Application
This is a basic CRUD of a stock  made with cakePHP

# How to load dependencies 
Use the composer to install the dependencies:
```bash
    composer install
```

# How connect the database in cake php
first, load the dependencies. Then open "config/app_local.php" and fill the datasource config 
```php
    'Datasources' => [
        'default' => [
            'host' => 'your_host',
            'username' => 'your_username',
            'password' => 'your_password',
            'database' => 'your_databasename',
            'url' => env('DATABASE_URL', null),
        ],
        'test' => [
            'host' => 'your_host',
            'username' => 'your_username',
            'password' => 'your_password',
            'database' => 'your_databasename',
            'url' => env('DATABASE_TEST_URL', 'sqlite://127.0.0.1/tests.sqlite'),
        ],
    ],
```
finally, load the 'stock.sql' in your database
