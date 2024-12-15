<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolTournamentSeeder extends Seeder
{
    public function run()
    {
        // Example seeding: Assign random schools to tournaments
        $schoolIds = \App\Models\School::pluck('id')->toArray();
        $tournamentIds = \App\Models\Tournament::pluck('id')->toArray();

        foreach ($tournamentIds as $tournamentId) {
            $randomSchoolIds = \Illuminate\Support\Arr::random($schoolIds, rand(2, 5)); // Select 2-5 random schools

            foreach ($randomSchoolIds as $schoolId) {
                DB::table('school_tournament')->insert([
                    'school_id' => $schoolId,
                    'tournament_id' => $tournamentId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
