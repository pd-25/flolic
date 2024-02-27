<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index (){
        return view("frontend.home.home");
    }
    public function ceo_desk (){
        return view("frontend.ceo.ceo");
    }
    public function our_project (){
        return view("frontend.project.project");
    }
    public function testimonials (){
        return view("frontend.testimonials.testimonials");
    }
    public function contact (){
        return view("frontend.contact.contact");
    }

    // service

    public function electrical_design (){
        return view("frontend.service.electrical.electrical");
    }
    public function hvac_design (){
        return view("frontend.service.hvac.hvac");
    }
    public function phe_design (){
        return view("frontend.service.phe.phe");
    }
    public function fire_system_design (){
        return view("frontend.service.fire.fire");
    }
    public function elv_network_design(){
        return view("frontend.service.elv.elv");
    }
    public function cctv_and_security_system_design(){
        return view("frontend.service.cctv.cctv");
    }
}
