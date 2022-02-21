<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Seeder;
use App\Models\Industry;

class IndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data_industry = Industry::insert(
            [
                'id' => '1',
                'industry' => 'Agribusiness',
            ]
        );

        $data_industry = Industry::insert(
            [
                'id' => '2',
                'industry' => 'Construction',
            ]
        );

        $data_industry = Industry::insert(
            [
                'id' => '3',
                'industry' => 'Consultancy & Other Services',
            ]
        );

        $data_industry = Industry::insert(
            [
                'id' => '4',
                'industry' => 'Energy',
            ]
        );

        $data_industry = Industry::insert(
            [
                'id' => '5',
                'industry' => 'Food',
            ]
        );

        $data_industry = Industry::insert(
            [
                'id' => '6',
                'industry' => 'Healthcare & Pharmaceutical',
            ]
        );

        $data_industry = Industry::insert(
            [
                'id' => '7',
                'industry' => 'Hospitality',
            ]
        );

        $data_industry = Industry::insert(
            [
                'id' => '8',
                'industry' => 'Manufacturing',
            ]
        );

        $data_industry = Industry::insert(
            [
                'id' => '9',
                'industry' => 'Media & IT',
            ]
        );

        $data_industry = Industry::insert(
            [
                'id' => '10',
                'industry' => 'Transport & Logistics',
            ]
        );
        
    }
}
