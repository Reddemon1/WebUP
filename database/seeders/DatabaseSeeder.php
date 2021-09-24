<?php

namespace Database\Seeders;

use App\Models\User;
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
        $user = new User();
        $user->name = 'Rionaldo Tio';
        $user->email = 'rionaldo.6639@ski.sch.id';
        $user->password = bcrypt('rionaldo1');
        $user->image = 's';
        $user->save();
    }
}
