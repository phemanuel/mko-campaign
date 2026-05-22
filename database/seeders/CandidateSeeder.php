<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CandidateProfile;

class CandidateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        CandidateProfile::create([

        'name'=>'Kehinde Matthew Ogunniyi',

        'position'=>'House of Representatives',

        'constituency'=>'Ibadan North',

        'party'=>'People\'s Democratic Party',

        'slogan'=>'For The People',

        'biography'=>'

        Kehinde Matthew Ogunniyi is committed to transformational leadership, youth empowerment, improved infrastructure, quality education and sustainable development for Ibadan North.

        ',

        'photo'=>'candidate.jpg'

        ]);
    }
}
