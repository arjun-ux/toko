<?php

namespace Database\Factories;
use App\Models\Barang;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'barcode' => $this->faker->ean8(),
            'nama_barang' => $this->faker->name('food'),
            'harga' => $this->faker->numberBetween($min = 500, $max = 10000),
            'gambar' => $this->faker->image ('public/storage/toko',640, 480, 'null', false),
        ];
    }
}
