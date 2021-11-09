<?php

namespace Modules\Setting\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Setting\Entities\Setting;

class SettingDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'company_name' => 'Long Thanh POS',
            'company_email' => 'daihv.dev@gmail.com',
            'company_phone' => '0966922947',
            'notification_email' => 'hvdai22796@gmail.com',
            'default_currency_id' => 1,
            'default_currency_position' => 'prefix',
            'footer_text' => 'Long Thanh POS © 2021 || Developed by HoangDai',
            'company_address' => 'Hai Phong, Viet Nam'
        ]);
    }
}
