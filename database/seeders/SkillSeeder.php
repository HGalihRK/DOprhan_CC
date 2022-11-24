<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skill = ['Chess','Swimming','Boxing','Drawing','Singing','Painting'];
        foreach($skill as $skill){
            Skill::create([
                'name'=>$skill,
            ]);
        }
    }
}