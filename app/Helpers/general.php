<?php

use App\Models\Profile;

if(!function_exists('hasUpdatedInfo')){
    function hasUpdatedInfo(){
        
       $profile = Profile::where('user_id', auth()->user()->id)->first();//OrFail();
       if($profile->gender != null){
            return true;
       }else{
            return false;
       }
       
    }
}