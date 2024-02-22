<?php

use App\Models\Belief;
use App\Models\EducationBackground;
use App\Models\Ethinicity;
use App\Models\MaritalBackground;
use App\Models\ProfessionalBackground;
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

if(!function_exists('educationalBackground')){
     function educationalBackground(){
         
        return EducationBackground::all();
        
     }
 }

 if(!function_exists('professionalBackground')){
     function professionalBackground(){
         
        return ProfessionalBackground::all();
        
     }
 }

 if(!function_exists('ethnicity')){
     function ethnicity(){
         
        return Ethinicity::all();
        
     }
 }

 if(!function_exists('maritalStatus')){
     function maritalStatus(){
         
        return MaritalBackground::all();
        
     }
 }

 if(!function_exists('belief')){
     function belief(){
         
        return Belief::all();
        
     }
 }