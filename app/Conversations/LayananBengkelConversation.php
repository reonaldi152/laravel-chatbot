<?php

namespace App\Conversations;

use App\Models\Bengkel;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;

class LayananBengkelConversation extends Conversation
{
    public function run()
    {
        $this->askCategory();
    }

    protected function askCategory()
    {
        $this->ask('Silakan pilih kategori bengkel: 1. Bengkel Umum, 2. Bengkel Spesialis', function (Answer $answer) {
            $category = $answer->getText();

            if ($category == '1') {
                $this->showBengkels('Umum');
            } else if ($category == '2') {
                $this->showBengkels('Spesialis');
            } else {
                $this->say('Pilihan tidak valid, silakan coba lagi.');
                $this->askCategory();
            }
        });
    }

    protected function showBengkels($type)
    {
        $bengkels = Bengkel::where('type', $type)->get();

        if ($bengkels->isEmpty()) {
            $this->say("Tidak ada bengkel dengan kategori $type.");
        } else {
            $bengkels->each(function ($bengkel) {
                $this->say("Nama: {$bengkel->name}, Lokasi: {$bengkel->location}");
            });
        }
    }
}
