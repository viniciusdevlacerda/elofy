<?php
namespace App\Http\Controllers\Index;

use \App\Http\Controllers\Controller;
use App\People;

class IndexController extends Controller
{
    private $people;

    public function __construct()
    {
        $this->people = new People();
    }

    public function view(){

        return view('index.view', ['people'=> $this->people->get()]);
    }
}
