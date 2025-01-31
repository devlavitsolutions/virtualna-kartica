<?php

namespace App\Console;

use App\Console\Commands\GenerateSiteMap;
use Illuminate\Console\Scheduling\Schedule;
use App\Console\Commands\PlanExpirationMailCommand;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        GenerateSiteMap::class,
    ];

    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->command('sitemap:generate')->daily();
        // This will automatically renew every certificate that is older than 60 days, ensuring that they never expire.
        $schedule->job(new \Daanra\LaravelLetsEncrypt\Jobs\RenewExpiringCertificates)
                 ->daily()
                 ->sendOutputTo(storage_path('logs/letsencrypt_schedule_renew.log'));
    }


    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
