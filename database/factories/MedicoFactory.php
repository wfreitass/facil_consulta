<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MedicoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create('pt_BR');
        return [
            'nome' => $faker->name,
            'especialista' => $faker->randomElement(['Médico', 'Dentista', 'Enfermeiro', 'Fisioterapeuta', 'Psicólogo']),
            'cidade_id' =>
            function () {
                return \App\Models\Cidade::inRandomOrder()->first()->id;
            },
        ];
    }
}
