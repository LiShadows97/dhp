<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class general extends Controller
{
    
    public function solutions()
    {
        return view('solutions');
    }

    public function partners()
    {
        return view('partners');
    }

    public function partners_details($brand_name)
    {
        return view('partners_Template');
    }

    public function hiring()
    {
        return view('hiring');
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }

    // Solutions navigation
        public function Sol($id)
        {   
            $id=strtolower($id);
            //dd($id);

            if($id=="smartsignage"){
                return view('display/smartsignage');
            }
            else if($id=="led"){
                return view('display/led');
            }
            else if($id=="hospitality"){
                return view('display/hospitality');
            }
            else if($id=="lcd"){
                return view('display/lcd');
            }
            abort(404);
        }

        public function Security($id)
        {   
            $id=strtolower($id);
            //dd($id);

            if($id=="accesscontrol"){
                return view('security/accesscontrol');
            }
            else if($id=="gatecontrol"){
                return view('security/gatecontrol');
            }
            else if($id=="carparking"){
                return view('security/carparking');
            }
            else if($id=="cctv"){
                return view('security/cctv');
            }
            else if($id=="videodoorphone"){
                return view('security/videodoorphone');
            }
            abort(404);
        }
}
