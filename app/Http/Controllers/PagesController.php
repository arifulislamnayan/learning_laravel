<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {




    public function page()

    {


        $songs = $this->getSongs();
        $name = "English Alphabet";

        return view('pages.description',compact('songs','name'));




    }

    public function show($id){

//        $song = $this->getSongs()[$id];
//        return view('pages.show',compact('song','id'));

      return $id;


    }

    public function about()
    {
        return view('pages.about');




    }

    /**
     * @return array
     */
    public function getSongs()
    {
        $songs= ['A', 'B', 'C', 'D', 'E', 'F', 'G'];
        return $songs;
    }

}
