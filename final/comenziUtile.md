#1 Cum pornesc laravel ?

daca il am creat, il pot porni :)
#1 - 1 = 0, cum cream un proiect laravel ?

composer create-project laravel/laravel numeleAplicatiei

#2 cd numeleAplicatiei
ls si verific daca am un folder /vendor
#3 pornim proiectul
php artisan serve
locahost::3000

#4 php artisan ,pentru comenzi

#5 Creare fisier controller(concept in oop )
php artisan make:controller OrderController
app/Http/Controllers 

#5.1 controller cu functii in el
php artisan make:controller UsersController --resource
dupa generare fisierul UsersController.php va si gasit in 
app/Http/Controllers

#6 creare migrarii
php artisan make:migration createOrderProducts
dupa ce ai create migrare
fisierul va fi gasit in 
app/database/migrations

#7 cum pui in mysql o migrate
php artisan migrate
