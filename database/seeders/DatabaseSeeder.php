<?php
namespace Database\Seeders;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
/**
* Seed the application's database.
*/
public function run(): void
{
User::create([
'nama' => 'Cornelius',
'email' => 'cornelius@gmail.com',
'role' => '1',
'status' => 1,
'hp' => '082122184742',
'password' => bcrypt('Cornelius123'),
]);
#untuk record berikutnya silahkan, beri nilai berbeda pada nilai: nama, email, hp dengan nilai masing-masing anggota kelompok
User::create([
'nama' => 'Sopian Aji',
'email' => 'sopian4ji@gmail.com',
'role' => '0',
'status' => 1,
'hp' => '081234567892',
'password' => bcrypt('P@55word'),
]);
}
}