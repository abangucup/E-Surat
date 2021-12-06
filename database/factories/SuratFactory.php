<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SuratFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => '2',
            'jenis_id' => '1',
            'judul' => $this->faker->sentence(),
            'tgl_pelaksanaan' => $this->faker->date(),
            'lokasi' => $this->faker->address(),
            'tujuan' => $this->faker->address(),
            'mitra' => $this->faker->company(),
            'alamat_mitra' => $this->faker->address(),
            'keterangan' => $this->faker->sentence(),
        ];
    }
}
