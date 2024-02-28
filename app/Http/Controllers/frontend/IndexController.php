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
    public function ceo_desk (){
        return view("frontend.ceo.ceo");
    }
    public function our_project (){
        $data['projects'] = $this->projectInterface->getAllProjects();
        return view("frontend.project.project", $data);
    }

    public function single_project($slug){
        $data['project'] = $this->projectInterface->getSingleProject($slug);
        return view('frontend.project.single-project', $data);
    }
    public function testimonials (){
        $data['testimonials'] = Testimonials::get();
        return view("frontend.testimonials.testimonials", $data);
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
