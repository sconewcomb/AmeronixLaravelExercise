<?php

    class NoteTableSeeder extends Seeder {
        
        public function run()
        {
            $faker = Faker\Factory::create();
                                  
            for ($i=0; $i <10; $i++) {
                $notes = Note::create(array(    
                     'note' => $faker->realText(rand(20,40)),
                     'contact_id' => str_rand(20),
                                          
                ));
            }
        }
    }