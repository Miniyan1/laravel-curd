<?php

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $facker =\Faker\Factory::create('ne_NP');

        for($i=0; $i<100; $i++){

           $user =  User::create([
                'first_name' =>$facker->firstName,
                'last_name' =>$facker->lastName,
                'address' =>$facker->address,
                'phone' =>$facker->phoneNumber,
                'email' =>$facker->email,
            ]);
            echo $user->name . "seeded" . PHP_EOL ;
        }

    }
}
