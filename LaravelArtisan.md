#### Create New Laravel Project:
> composer create-project laravel/laravel <ProjectName>

#### Run Laravel Project:
> php artisan serve

#### Crete Controller
> php artisan make:controller <ControllerName>

#### Crete Resource Controller
php artisan make:controller <ResourceController> --resource

#### Create DB Model
php artisan make:model <Model>

#### Create Migration Table
php artisan make:migration <create_users_table>

#### Run Migrations
php artisan migrate

#### Create Component
php artisan make:component <input>

#### Create Import/Export:
> php artisan make:import <ModelImport> --model=<Model>
> php artisan make:export <ModelExport> --model=<Model>


# Generate New ENV
> Copy .env.example -> .env
> php artisan config:clear
> php artisan config:cache
> php artisan key:generate


# Run Existing Laravel Project:
```
- composer install
- composer dump-autoload
```