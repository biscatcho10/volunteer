<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Accounts\Database\Seeders\UsersTableSeeder;
use Modules\Countries\Database\Seeders\CountriesTableSeeder;
use Modules\Donations\Database\Seeders\DonationMethodTableSeeder;
use Modules\Donations\Database\Seeders\DonationTableSeeder;
use Modules\HowKnow\Database\Seeders\ReasonSeederTableSeeder;
use Modules\News\Database\Seeders\NewsDatabaseSeeder;
use Modules\Partners\Database\Seeders\PartnersDatabaseSeeder;
use Modules\Reports\Database\Seeders\ReportsDatabaseSeeder;
use Modules\Services\Database\Seeders\MediaTableSeeder;
use Modules\Services\Database\Seeders\ServiceTableSeeder;
use Modules\Settings\Database\Seeders\AboutUsTableSeeder;
use Modules\Settings\Database\Seeders\AwardTableSeeder;
use Modules\Settings\Database\Seeders\ContactusTableSeeder;
use Modules\Settings\Database\Seeders\SettingsDatabaseSeeder;
use Modules\Settings\Database\Seeders\SubscribersTableSeeder;
use Modules\Sliders\Database\Seeders\SlidersTableSeeder;
use Modules\Volunteers\Database\Seeders\CategoryTableSeeder;
use Modules\Volunteers\Database\Seeders\FieldTableSeeder;

class DummyDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LaratrustSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ReasonSeederTableSeeder::class);
        $this->call(SettingsDatabaseSeeder::class);
        $this->call(AboutUsTableSeeder::class);
        $this->call(FieldTableSeeder::class);
        $this->call(ServiceTableSeeder::class);
        $this->call(DonationMethodTableSeeder::class);
        $this->call(DonationTableSeeder::class);
        $this->call(SubscribersTableSeeder::class);
        $this->call(ContactusTableSeeder::class);
        $this->call(PartnersDatabaseSeeder::class);
        $this->call(NewsDatabaseSeeder::class);
        $this->call(SlidersTableSeeder::class);
        $this->call(AwardTableSeeder::class);
        $this->call(MediaTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(ReportsDatabaseSeeder::class);

    }
}
