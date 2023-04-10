<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\contact;

Use Faker\Factory as faker;

class contactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
		
		/*
		$contact=new contact;
		$contact->name="patel";
		$contact->email="patel@gmail.com";
		$contact->sub="demo";
		$contact->msg="demo msg";
		$contact->save();	
		*/
		$faker= Faker::create();
		for($i=1;$i<=100;$i++)
		{
			$contact=new contact;
			$contact->name=$faker->name;
			$contact->email=$faker->email;
			$contact->sub="demo";
			$contact->msg="demo msg";
			$contact->save();	
		}

		
    }
}
