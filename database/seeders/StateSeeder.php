<?php

namespace Database\Seeders;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Seeder;
use App\Models\State;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data_state = State::insert(
            [
                'id' => '1',
                'state' => 'Wilayah Persekutuan Kuala Lumpur',
            ]
        );

        $data_state = State::insert(
            [
                'id' => '2',
                'state' => 'Wilayah Persekutuan Labuan',
            ]
        );

        $data_state = State::insert(
            [
                'id' => '3',
                'state' => 'Wilayah Persekutuan Putrajaya',
            ]
        );

        $data_state = State::insert(
            [
                'id' => '4',
                'state' => 'Johor',
            ]
        );

        $data_state = State::insert(
            [
                'id' => '5',
                'state' => 'Kedah',
            ]
        );

        $data_state = State::insert(
            [
                'id' => '6',
                'state' => 'Kelantan',
            ]
        );

        $data_state = State::insert(
            [
                'id' => '7',
                'state' => 'Melaka',
            ]
        );

        $data_state = State::insert(
            [
                'id' => '8',
                'state' => 'Negeri Sembilan',
            ]
        );

        $data_state = State::insert(
            [
                'id' => '9',
                'state' => 'Pahang',
            ]
        );

        $data_state = State::insert(
            [
                'id' => '10',
                'state' => 'Perak',
            ]
        );

        $data_state = State::insert(
            [
                'id' => '11',
                'state' => 'Perlis',
            ]
        );

        $data_state = State::insert(
            [
                'id' => '12',
                'state' => 'Pulau Pinang',
            ]
        );

        $data_state = State::insert(
            [
                'id' => '13',
                'state' => 'Sabah',
            ]
        );

        $data_state = State::insert(
            [
                'id' => '14',
                'state' => 'Sarawak',
            ]
        );

        $data_state = State::insert(
            [
                'id' => '15',
                'state' => 'Selangor',
            ]
        );

        $data_state = State::insert(
            [
                'id' => '16',
                'state' => 'Terengganu',
            ]
        );
    }
}
