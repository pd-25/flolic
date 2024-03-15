<?php

namespace App\Http\Controllers\frontend;

use App\core\project\ProjectInterface;
use App\Http\Controllers\Controller;
use App\Models\Testimonials;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public $projectInterface;
    public function __construct(ProjectInterface $projectInterface)
    {
        $this->projectInterface  = $projectInterface;
    }
    public function index (){
        return view("frontend.home.home");
    }
    public function gallery (){
        return view("frontend.gallery.gallery");
    }
    public function testimonials (){
        $data['testimonials'] = Testimonials::get();
        return view("frontend.testimonials.testimonials", $data);
    }
    public function contact (){
        return view("frontend.contact.contact");
    }
    public function about (){
        return view("frontend.about.about");
    }

    // service

    public function services(){
        return view("frontend.service.service");
    }
    public function services_details(){
        return view("frontend.service.servicedetails");
    }
}
