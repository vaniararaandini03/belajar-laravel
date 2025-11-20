<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
=======
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
>>>>>>> 8e92dacc93ec66d56a73cc99ba20d5a12de4db4d

class CreateFirstUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
<<<<<<< HEAD
        User::create([
            'name' => 'Admin',
            'email' => 'gator@pcr.ac.id',
            'password' => Hash::make('gatotkaca')
        ]);
=======
        //
>>>>>>> 8e92dacc93ec66d56a73cc99ba20d5a12de4db4d
    }
}
