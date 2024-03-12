<?php

namespace Database\Factories;

use PhpParser\Node\Name;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Name>
 */
class NameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Name::class;
    public function definition(): array
    {
        return [
            //
        ];
    }
}
