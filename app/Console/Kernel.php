<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Http;
use App\Models\Instagram;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {

        $schedule->call(function () {
            $response = Http::get('https://graph.instagram.com/me/media?access_token=' . env('INSTAGRAM_ACCESS_TOKEN'));
            $instagramData = json_decode($response->body());
            // If the API limit has been reached or a connection issue occurs
            if (!isset($instagramData->data)) {
                return;
            }
            foreach ($instagramData->data as $instagramMedia) {
                $mediaResponse = Http::get('https://graph.instagram.com/' . $instagramMedia->id . '?fields=id,media_type,media_url,permalink&access_token=' . env('INSTAGRAM_ACCESS_TOKEN'));
                $mediaResponse = json_decode($mediaResponse->body());
                // Used to prevent possible connection failure issues impacting the website
                if (!isset($mediaResponse->media_url) || !isset($mediaResponse->permalink)) {
                    break;
                }
                Instagram::updateOrCreate([
                    'id' => $instagramMedia->id,
                ],
                    [
                        'id' => $instagramMedia->id,
                        'media_url' => $mediaResponse->media_url,
                        'permalink' => $mediaResponse->permalink,
                    ]);
            }
        })->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
