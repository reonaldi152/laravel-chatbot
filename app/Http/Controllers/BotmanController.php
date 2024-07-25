<?php

namespace App\Http\Controllers;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotMan\Messages\Incoming\Answer;
use Illuminate\Http\Request;
use App\Conversations\LayananBengkelConversation;

class BotmanController extends Controller
{
    // public function handle()
    // {
    //     $botman = app('botman');

    //     $botman->hears('{message}', function($botman, $message){
    //         if ($message == 'hi') {
    //             $this->askName($botman);
    //         } else {
    //             $botman->reply("write 'hi' for testing...");
    //         }
    //     });

    //     $botman->listen();
    // }

    // public function askName($botman)
    // {
    //     $botman->ask("Hello what is your name?", function(Answer $answer){
    //         $name = $answer->getText();
    //         $this->reply('nice to meet you' . $name);
    //     });
    // }

    // public function handle()
    // {
    //     $botman = app('botman');

    //     $botman->hears('hi', function (BotMan $bot) {
    //         $bot->reply('Hello!');
    //     });

    //     // Add your conversation logic here

    //     $botman->listen();
    // }

    // public function startConversation(BotMan $bot)
    // {
    //     $bot->startConversation(new ExampleConversation());
    // }








    // public function handle()
    // {
    //     $botman = app('botman');

    //     $botman->hears('{message}', function (Botman $bot, $message) {
    //         if ($message == 'layanan bengkel') {
    //             $bot->startConversation(new LayananBengkelConversation());

    //         } else {
    //             $bot->reply("tolong ketikan layanan bengkel");
    //         }
    //     });

    //     // Add other conversation handlers here

    //     $botman->listen();
    // }


    public function handle()
    {
        $botman = app('botman');

        $botman->hears('Layanan Bengkel', function (BotMan $bot) {
            $bot->startConversation(new LayananBengkelConversation());
        });

        // Add other conversation handlers here

        $botman->listen();
    }
}
