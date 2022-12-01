<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vote>
 */
class VoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
        ];
    }

    public function getVoteData(){
        return [
            'visitor_id' => Visitor::all()->random()->id,
            'user_id' => User::all()->random()->id,
            'is_up' => $this->faker->boolean
        ];
    }

    public function voteExists($voteData){
        return Vote::where([
            'visitor_id' => $voteData['visitor_id'],
            'user_id' => $voteData['user_id']
        ])->exists();
    }

    public function getValidVoteData(){
        $voteData = false;

        while ($voteData === false){

        } // carry on from practical 07 - back to MVC (Step 4)
    }
}
