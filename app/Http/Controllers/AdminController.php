<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller{
 public function adminSaveSalle(Request $request){
    $name_space= $request->get('Name_space');
    $Place= $request->get('Place'); 
    $Capacity = $request->get('Capacity');
    $Owner_name = $request->get('Owner_name'); 
    $Owner_phone= $request->get('Owner_phone'); 
    $Price = $request->get('Price'); 


    //CHANGE TO MODEL 
    DB::table('events_space')->insert(['id'=> null , 'Name_space'=>$name_space,'Place'=>$Place,'Capacity'=>$Capacity,'Owner_name'=>$Owner_name,
    'Owner_phone'=>$Owner_phone,'Price'=>$Price,'created_at'=>null ,'updated_at'=>null

    ]);
    return view('ajoutersalle');
    }


 public function adminSaveTroupe(Request $request){
    $Name_Group= $request->get('Name_Group');
    $Style= $request->get('Style'); 
    $Nb_pers= $request->get('Nb_pers');
    $Resp_name = $request->get('Resp_name'); 
    $Resp_phone= $request->get('RESP_phone'); 
    $Price = $request->get('Price'); 


    //CHANGE TO MODEL 
    DB::table('musicalgroup')->insert(['id'=> null , 'Name_Group'=>$Name_Group,'Style'=>$Style,'Nb-pers'=>$Nb_pers,'Resp_name'=>$Resp_name,
    'Resp_phone'=>$Resp_phone,'Price'=>$Price,'created_at'=>null ,'updated_at'=>null

    ]);
    return view('ajouterTroupe');
    }




 public function adminSaveServeurs(Request $request){
    $Name_Waiters= $request->get('Name_waiters');
    $Nb_pers= $request->get('Nb_pers');
    $Resp_name = $request->get('Resp_name'); 
    $Resp_phone= $request->get('RESP_phone'); 
    $Price = $request->get('Price');  


    //CHANGE TO MODEL 
    DB::table('waiters')->insert(['id'=> null , 'Name_waiters'=>$Name_Waiters,'Nb_pers'=>$Nb_pers,'Resp_name'=>$Resp_name,'Resp_phone'=>$Resp_name,
   'Price'=>$Price,'created_at'=>null ,'updated_at'=>null

    ]);
    return view('ajouterserveurs');
    }


 public function adminSaveCarte(Request $request){
    $Design= $request->get('Design');
    $Capacity = $request->get('Capacity');
    $Price = $request->get('Price'); 


    //CHANGE TO MODEL 
    DB::table('invitation_card')->insert(['id'=> null , 'Design'=>$Design,'Capacity'=>$Capacity,'Price'=>$Price,'created_at'=>null ,'updated_at'=>null

    ]);
    return view('ajoutercarte');
    }

 public function goToAdd()
    {
        return view('admin/add');
    }





}