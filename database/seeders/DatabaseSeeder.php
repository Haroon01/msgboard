<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Database\Seeders\VisitorSeeder;
class DatabaseSeeder extends Seeder
{
public function run()
{
$this->call([
VisitorSeeder::class
]);
}
}
