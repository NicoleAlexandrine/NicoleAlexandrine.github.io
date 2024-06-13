<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home_page');
    }
    public function home()
    {
        return view('home_page');
    }
    public function mayor()
    {
        return view('mayor_page');
    }
    public function barangays()
    {
        return view('barangays_page');
    }
    public function barangay()
    {
        return view('barangay_page');
    }
    public function barangaycontent()
    {
        return view('barangaycontent_page');
    }
    public function department()
    {
        return view('department_page');
    }
    public function departmentcontent()
    {
        return view('departmentcontent_page');
    }
    public function services()
    {
        return view('services_page');
    }
    public function servicescontent()
    {
        return view('servicescontent_page');
    }
    public function about()
    {
        return view('about_page');
    }
    public function contact()
    {
        return view('contact_page');
    }
    public function career()
    {
        return view('career_page');
    }
    public function careers()
    {
        return view('careers_page');
    }
    public function fulldisc()
    {
        return view('fulldisc_page');
    }
    public function jobs()
    {
        return view('jobs_page');
    }
    public function officials()
    {
        return view('officials_page');
        
    }
    public function cityofficials()
    {
        return view('cityofficials_page');
    }
    public function newsevents()
    {
        return view('newsevents_page');
    }
    public function newseventscontent()
    {
        return view('newseventscontent_page');
    }
    public function history()
    {
        return view('history');
    }
    public function invest()
    {
        return view('invest_page');
    }
    public function investmentopp()
    {
        return view('investment_opp');
    }

    public function safetyseal()
    {
        return view('safetyseal');
    }

    public function safetysealprocess()
    {
        return view('safetysealprocess');
    }
    public function hotlines()
    {
        return view('hotlines');
    }

}
