<?php

namespace Mahmoudeldegwey\Inspire;

use Illuminate\Support\Facades\Http;

class Inspire {
    public function justDoIt() {
        return "Ssssssss";  
        //$response = Http::get('https://inspiration.goprogram.ai/');

        return $response['quote'] . ' -' . $response['author'];
    }
}