<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
im

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         //\App\Models\User::factory(5)->create();

        DB::table('products')->insert(
         [
            'name' => 'Libante, Rhom Lauren R.',
            'address' => '3542 MANGGO STREET · GRANDMEADOWS BATANGAN VALENCIA CITY BUKIDNON, LAURELLIBANTE3@GMAIL.COM',
            'contact' => '09353922587',
            'about' => 'I am experienced in manages security solutions. They may help organize information and efforts and create plans for implementing new security measures. The administrator can also develop training documents to help educate team members about new cybersecurity policies and procedures. Administrators for security may focus on helping others adhere to security policies and managing situations in which they dont.'
         ]


        )
    }
}
