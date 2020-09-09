<?php

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies = \App\Models\Company::count();
        if ($companies == 0) {
            \App\Models\Company::create([
                'name' => 'BeMo Academic Consulting Inc.',
                'phone' => '1-855-900-BeMo (2366)',
                'email' => 'test@test.com',
                'logo' => 'bemo-logo.png',
                'email_host' => 'mail.test.com',
                'email_port' => 123,
                'email_username' => 'info@test.com',
                'email_password' => 'test',
                'g_analytics' => null,
                'fb_advertising' => null,
            ]);
        }
    }
}
