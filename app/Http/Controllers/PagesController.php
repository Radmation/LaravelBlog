<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function getIndex() {
        # process variable data or params
        # talk to the model
        # receive from model
        # compile of process data again if needed
        # pass data to correct view
        return view('pages.welcome');
    }
    public function getContact() {
        return view('pages.contact');
    }

    public function getAbout() {
        return view('pages.about');
    }

    public function postContact() {

    }

}