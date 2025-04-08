<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Seeder;
use App\Models\Entry;
use App\Models\User;
use Dotenv\Parser\Entry as ParserEntry;
use Database\Factories\EntryFactory;

class EntriesTableSeeder extends Seeder
{
    use HasFactory;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $users->each(function($user){
            EntryFactory::new()->count(10)->create([
                'user_id' => $user->id
            ]);
        });
    }
}
