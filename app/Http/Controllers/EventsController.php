<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Workshop;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Date;

class EventsController extends BaseController
{
    public function getEventsWithWorkshops() {
        $data = Event::with('workshops')->get()->toArray();
        echo json_encode($data);
    }

    public function getFutureEventsWithWorkshops() {
        $data = Event::with('futureworkshops')->has('futureworkshops','>',0)->get()->toArray();
        echo json_encode($data);
    }
}
