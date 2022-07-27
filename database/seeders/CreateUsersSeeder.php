<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
  
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'Admin User',
               'email'=>'admin@itsolutionstuff.com',
               'type'=>0,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Teacher User',
               'email'=>'teacher@itsolutionstuff.com',
               'type'=> 1,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Student',
               'email'=>'student@itsolutionstuff.com',
               'type'=>2,
               'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'Parent',
                'email'=>'parent@itsolutionstuff.com',
                'type'=>3,
                'password'=> bcrypt('123456'),
             ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}