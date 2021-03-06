<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ReviewsController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index()
    {
        $reviews = DB::select('select * from Reviews limit 100');

        return view('table', ['reviews' => $reviews]);
    }
}

?>