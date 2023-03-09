# Tabor application
_ _ _

## Setup

1. Clone this repo to your desktop.
1. Create local MySQL database or connect to remote and add credentials in **.env** file.
1. In **.env** file add also: `FILESYSTEM_DRIVER=public`, `APP_URL=http://localhost:8000` and `APP_NAME=Tabor`
1. Run commands in terminal:
    1. `composer install` - download libs to vendor directory
    1. `npm install` - download js libs to node_modules dir1. 
    1. `npm run dev` - build assets and place them into the public directory   
    1. `php artisan migrate` - create tables with columns
    1. `php artisan db:seed` - add initial data to database
    1. `php artisan storage:link` - create the symbolic link to storage
    1. `php artisan serve` - startup local server at port 8000
1. Credentials for testing users:
    1. admin@example.com / admin1234
    1. user@example.com / user1234


