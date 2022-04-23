<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class IndexController extends Controller
{
    public function goToIndex()
    {
        return view('index');
    }
    public function goToContact()
    {
        return view('contact');
    }
    public function goToServices()
    {
        return view('services');
    }
    public function goToMariage()
    {
        return view('Mariage');
    }
    public function goToSoiree()
    {
        return view('Soiree');
    }
    public function goToConf()
    {
        return view('Conf');
    }
    public function goToBlank()
    {
        return view('blank');
    }
    public function goToDash()
    {
        return view('admin/dashindex');
    }
    public function goToTables()
    {
        return view('admin/tables');
    }
    public function goToProfile()
    {
        return view('admin/page-profile');
    }
    public function goToLockscreen()
    {
        return view('admin/page-lockscreen');
    }
    public function goToLogin()
    {
        return view('admin/page-login');
    }



}
