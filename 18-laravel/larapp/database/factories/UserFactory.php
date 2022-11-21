<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // return [
        //     'fullname'          => $this->faker->firstNameFemale(),
        //     'email'             => $this->faker->unique()->safeEmail(),
        //     'phone'             => $this->faker->phoneNumber(),
        //     'birthdate'         => $this->faker->date(),
        //     'gender'            => 'Female',
        //     'address'           => $this->faker->secondaryAddress(),
        //     'email_verified_at' => now(),
        //     'password'          => $this->faker->password(),
        //     'remember_token'    => Str::random(10),
        // ];

        $gender = $this->faker->randomElement($array = array('Female', 'Male'));

        //https://via.placeholder.com/140x140.png/004411?text=illum

        //$photo  = $this->faker->image(public_path("images/"),140,140, null, false);

        if ($gender == 'Female') {
            $name = $this->faker->firstNameFemale();
        } else {
            $name = $this->faker->firstNameMale();
        }

        return [
            'fullname'          => $name . ' ' . $this->faker->lastname(),
            'email'             => $this->faker->unique()->safeEmail,
            'phone'             => $this->faker->phoneNumber(),
            'birthdate'         => $this->faker->dateTimeBetween('1970-01-01', '2002-12-31'),
            'gender'            => $gender,
            'address'           => $this->faker->streetAddress,
            //'photo'             => substr($photo, 7),
            'email_verified_at' => now(),
            'password'          => bcrypt('customer'), 
            'remember_token'    => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
