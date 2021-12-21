<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class DrugsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //biaya antara 1rb - 900rb
        $nama = $this->faker->text(25);
        $biaya = $this->faker->numberBetween($min = 1000, $max=900000);
        return [
            'nama' => $nama,
            'slug' => Str::slug($nama),
            'deskripsi' => $this->faker->text(100),
            'image_nama' => $this->faker->imageUrl($width = 140, $height = 300),
            'biaya' => $biaya,
            'harga' => $biaya - 500,
        ];
    }
}
