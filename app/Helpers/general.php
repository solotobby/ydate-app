<?php

use App\Models\Belief;
use App\Models\EducationBackground;
use App\Models\Ethinicity;
use App\Models\Interest;
use App\Models\MaritalBackground;
use App\Models\ProfessionalBackground;
use App\Models\Profile;
use App\Models\UserInterest;

if(!function_exists('hasUpdatedInfo')){
    function hasUpdatedInfo(){
        
       $profile = Profile::where('user_id', auth()->user()->id)->first();//OrFail();
       if($profile->is_onboarded != false){
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

 if(!function_exists('last18Years')){
     function last18Years(){
          $last18years = date("Y") -18;
         return range(1950, $last18years);       
        
     }
 }

 if(!function_exists('interests')){
     function interests(){
         
        return Interest::all();
        
     }
 }

 if(!function_exists('onboardMember')){
     function onboardMember($request, $age){
                
          $profile = Profile::where('user_id', auth()->user()->id)->firstOrFail();
          $profile->avarta = null;
          $profile->age = $age;
          $profile->day = $request->day;
          $profile->month = $request->month;
          $profile->year = $request->year;
          $profile->gender = $request->gender;
          $profile->gender_interest = $request->gender_interest;
          $profile->relationship_interest = $request->relationship_interest;
          $profile->educational_background = $request->educational_background;
          $profile->professional_background = $request->professional_background;
          $profile->ethnicity = $request->ethnicity;
          $profile->marital_status = $request->marital_status;
          $profile->belief = $request->belief;
          $profile->about = $request->about;
          $profile->age_bracket = $request->age_bracket;
          $profile->prospective_partner = $request->prospective_partner;
          $profile->occupation = $request->occupation;
          $profile->is_onboarded = true;
          $profile->save();

          foreach($request->interest as $interest){
               UserInterest::create(['user_id' => auth()->user()->id, 'interest_id' => $interest]);
          }

          return $profile;

     }
 }

 if(!function_exists('timeline')){
     function timeline(){
          
          $id = '3'; 
          $currentUserPreference = Profile::where('user_id', $id)->select(['gender_interest', 'relationship_interest'])->first();
          $tlIds = [];
          
          if($currentUserPreference->gender_interest == 'Both'){
               $tlIds = Profile::with(['user'])->whereNot('user_id', $id)->whereIn('gender', ['Man', 'Woman'])->select(['id', 'age','gender', 'user_id', 'avarta', 'age', 'gender'])->get();
          }else{
               $tlIds = Profile::with(['user'])->whereNot('user_id', $id)->where('gender', $currentUserPreference->gender_interest)->select(['id', 'age', 'gender', 'user_id', 'avarta', 'age', 'gender'])->get();
     
          }

          return $tlIds;
     } 
}

 