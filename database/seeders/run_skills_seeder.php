<?php

use Illuminate\Support\Facades\Artisan;

// Include your application's autoload file
require __DIR__.'/vendor/autoload.php';

// Include your application's bootstrap file
require_once __DIR__.'/bootstrap/app.php';

// Run the specific seeder
Artisan::call('db:seed', [
    '--class' => 'SkillsTableSeeder'
]);

echo 'SkillsTableSeeder has been run successfully.';
