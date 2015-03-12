<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class NoticesController extends Controller {


    /**
     * Require Authentication
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show all notices
     * @return string
     */
    public function index()
    {
        return 'all notices';
    }

    /**
     * Show a page to create a new notice
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // get list of providers

        // load a view to create a new notice
        return view ('notices.create');
    }
}
