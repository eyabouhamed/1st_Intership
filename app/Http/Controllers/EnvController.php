<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EnvController extends Controller{

    public function checkEvent(Request $request){
        $dateR=$request->input('dateR');
        
        $res = DB::table('reservation')->where('date', $dateR)->first(); 

        if(isset($res)){   ?>
           <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="modaaalLabel" style="color: black;">Cette date a ete reserve. Merci d'insérer une autre date</h5>
               
                </div>
                </div>
                </div>
            </div>

       <?php }
        else { ?>
           <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="color: black;">Votre réponse a été bien enregistrée.</h5>
                        
        </div>
                </div>
                </div>
            </div>

                        
       
       <?php }
    }
} 





