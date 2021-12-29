<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Attendee;
use App\Models\Event;
use App\Models\Photo;

class PhotoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Photo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'attendee_id' => Attendee::factory(),
            'event_id' => Event::factory(),
            'path' => $this->faker->word,
            'reviewed' => $this->faker->boolean,
        ];
    }
}
