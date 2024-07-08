<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->delete();

        $this->createSkills();
    }

    protected function createSkills()
    {

        $types = ['AF', 'PS']; // Affective & Psychomotor Traits/Skills
        $d = [

            ['name' => 'PUNCTUALITY', 'skill_type' => $types[0]],
            ['name' => 'NEATNESS', 'skill_type' => $types[0]],
            ['name' => 'POLITENESS', 'skill_type' => $types[0]],
            ['name' => 'HONESTY', 'skill_type' => $types[0]],
            ['name' => 'COOPERATION WITH OTHERS', 'skill_type' => $types[0]],
            ['name' => 'LEADERSHIP', 'skill_type' => $types[0]],
            ['name' => 'HELPING OTHERS', 'skill_type' => $types[0]],
            ['name' => 'EMOTIONAL STABILITY', 'skill_type' => $types[0]],
            ['name' => 'HEALTH', 'skill_type' => $types[0]],
            ['name' => 'ATTITUDE TO SCHOOL WORK', 'skill_type' => $types[0]],
            ['name' => 'ATTENTIVENESS', 'skill_type' => $types[0]],
            ['name' => 'PERSEVERANCCE', 'skill_type' => $types[0]],
            ['name' => 'SPEAKING/HANDWRITTING', 'skill_type' => $types[0]],
            ['name' => 'HANDWRITING', 'skill_type' => $types[1]],
            ['name' => 'VERBAL FLUENCY', 'skill_type' => $types[1]],
            ['name' => 'GAMES', 'skill_type' => $types[1]],
            ['name' => 'SPORTS', 'skill_type' => $types[1]],
            ['name' => 'HANDLING SKILLS', 'skill_type' => $types[1]],
            ['name' => 'DRAWING & PAINTING', 'skill_type' => $types[1]],
            ['name' => 'MUSICAL SKILLS', 'skill_type' => $types[1]],

        ];
        DB::table('skills')->insert($d);
    }

}