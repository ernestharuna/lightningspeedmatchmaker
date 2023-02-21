<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['Male', 'Female']);
        $orient = $gender == 'Male' ? $this->faker->randomElement(['Heterosexual', 'Gay']) : $this->faker->randomElement(['Heterosexual', 'Lesbian']);

        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),

            'phone_number' => $this->faker->phoneNumber(),
            'date_of_birth' => $this->faker->dateTimeThisCentury(),
            'gender' => $gender, //$this->faker->randomElement(['Male', 'Female']),
            'orientation' => $orient, // $this->faker->randomElement(['Lesbian', 'Heterosexual', 'Gay']),
            'relationship_status' => $this->faker->randomElement(['Single', 'Divorced']),
            'looking_for' => $this->faker->randomElement(['Marriage', 'Hang Out Buddy', 'Friends with benefit']),
            'children' => $this->faker->randomElement(['Yes, They live with me', 'Yes, but they live elsewhere', 'No']),

            'height' => $this->faker->randomElement(["4ft - 4'5ft", "4'6ft - 5'5ft", "5'5ft - 6ft", "6ft - 6'5ft", "6'5 above"]),
            'weight' => $this->faker->numberBetween(80, 200),
            'body_type' => $this->faker->randomElement(['Slim', 'Petite', 'Muscular', 'Fat', 'Chubby']),
            'hair_color' => $this->faker->randomElement(['Black', 'Blonde', 'Brunette', 'Red']),
            'eye_color' => $this->faker->randomElement(['Black', 'Brown', 'Blue', 'Green', 'Hazel']),
            'ethnicity' => $this->faker->randomElement(['American', 'Asian', 'African', 'Latino/Hispanic']),
            'zodiac_sign' => $this->faker->randomElement(['Leo', 'Cancer', 'Capricon']),
            'religion' => $this->faker->randomElement(['Christian', 'Muslim', 'Atheist']),
            'activity_level' => $this->faker->randomElement(['I go to the Gym once a year', 'I am a weekend warrior', "I don't workout", "I go 3-5 days a week"]),

            'first_language' => $this->faker->randomElement(['English', 'Spanish']),
            'second_language' => $this->faker->randomElement(['French', 'Chinese', 'Spanish', 'English']),
            'employed' => $this->faker->randomElement(['Employed', 'Unemployed', 'Retired', 'Self-employed', 'Student']),
            'profession' => $this->faker->randomElement(['Teacher', 'Bussiness Man']),
            'education' => $this->faker->randomElement(['Bachelors', 'Masters', "Post-graduate"]),

            'pets' => $this->faker->randomElement(['Yes', 'No']),
            'smokes' => $this->faker->randomElement(['Yes', 'No']),
            'drinks' => $this->faker->randomElement(['Yes, once a week<', 'Yes, Socially', 'No']),
            'drugs' => $this->faker->randomElement(['Yes', 'No']),
            'city' => $this->faker->city(),
            'country' => $this->faker->country(),
            'how_jelly' => $this->faker->randomElement(['Yes', 'No']),
            'extra' => $this->faker->randomElement(["There was a lice infestation in my dog farm which was proving to be hard to get rid of. I had contacted many veterinarians but their western methods didn't come through. This also cost the life of a precious pet dog I had because of the chemicals used. however, after much research, I found a natural remedy afterwards which did a fantastic job, and this method costs so much less", "I do believe that a university degree has its perks in shaping one's understanding and method of learning. I have an undying enthusiasm for learning, and getting enrolled in a university has been what I've been trying to achieve since I graduated in 2019. I'm convinced that EARTH is a great course for me, and with the scholarships offered there, I am sure it would make my ambitions more achievable."]),
            'subscription' => $this->faker->randomElement(['Free', 'Basic', 'Premium']),

            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
