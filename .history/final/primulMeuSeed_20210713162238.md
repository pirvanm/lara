#1
php artisan make:seed CategorySeeder
#2
te duci in app /database/seeds
verifici daca exista daca nu il poti face si manul

#3 te duci in fisierul databaseSeeder si adauga noua clasa in metoda run

#4 In clasa Database Seed
exemplu :
public function run()
{
// $this->call(UsersTableSeeder::class);
$this->call(CategorySeeder::class);
}

#5 de citit :
https://laravel.com/docs/8.x/queries
