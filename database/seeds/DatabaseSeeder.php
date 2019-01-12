<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(GradeTableSeeder::class);
        $this->call(ProjectTableSeeder::class);
        $this->call(PageTableSeeder::class);
        $this->call(InvestigationSeeder::class);
    }
}
