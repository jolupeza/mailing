<?php

use Styde\Seeder\BaseSeeder;

class DatabaseSeeder extends BaseSeeder
{
    protected $truncate = [
        'users',
    ];
    
    protected $seeders = [
        'User',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
    }
}
