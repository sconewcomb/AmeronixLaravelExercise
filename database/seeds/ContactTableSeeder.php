<?php

    class ContactTableSeeder extends Seeder {
        
        public function run()
        {
            $faker = Faker\Factory::create();
                                  
            for ($i=0; $i <10; $i++) {
                $notes = Note::create(array(    
                     'name' => $faker->name($gender = null|'male'|'female') ,
                     'phone' => $faker->phoneNumber,
                     'email' => $faker->email
                                          
                ));
            }
        }
    }