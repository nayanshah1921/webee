<?php


namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Routing\Controller as BaseController;

class MenuController extends BaseController
{
    public function getMenuItems() {
        $children = MenuItem::get()->toArray();
        $data = array("id" =>1,
        "name" => "All events",
        "url" => "/events",
        "parent_id" => null,
        "created_at" => "2021-04-20T07:01:14.000000Z",
        "updated_at"=> "2021-04-20T07:01:14.000000Z",
        "children" => $children
        );
        echo json_encode($data);
    }
}
