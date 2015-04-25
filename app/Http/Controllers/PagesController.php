<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function about() {

        $friends = [];

        return view('pages/about')->with([
            'friends' => $friends
        ]);
    }

    public function contact() {
        return view('pages/contact');
    }

}
