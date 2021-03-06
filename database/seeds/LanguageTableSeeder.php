<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Language;

class LanguageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('languages')->insert([

            [
                'code' => 'en',
                'name' => 'English',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],[
                'code' => 'ar',
                'name' => 'عربي',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')           
            ]
        ]);
        // $language = new Language;
        // $language->code = "en";
        // $language->name = "English";
        // $language->save();
        
        // $language = new Language;
        // $language->code = "ar";
        // $language->name = "عربي";
        // $language->save();
    }
}
