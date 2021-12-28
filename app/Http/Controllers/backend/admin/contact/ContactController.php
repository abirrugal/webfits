<?php

namespace App\Http\Controllers\backend\admin\contact;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
     //contact 
public function contact(){

    $contacts = Contact::latest()->paginate(20);
 
    return view('backend.contact1.index', compact('contacts'));
 
     }
 
 //Create contact 
  public function create_contact(){
      
     return view('backend.contact1.new');
  }
 
  //Store contact 
 
  public function store_contact(Request $request){
 
     $validator = Validator::make($request->all(), [
        'phone'                => 'required',
        'email'                => 'required|min:2',
        'address'                => 'required|min:2',
        
     ]);
 
     if($validator->fails()){
         return redirect()->back()->withErrors($validator)->withInput();
     }
 



 
   Contact::create([

            'phone'              => $request->phone,
            'email'              => $request->email,
            'address'              => $request->address,
         
         ]);
 




     $this->successMessage('Created success');
     return redirect()->back();
 
     
 
 
  }
 
  //Goto Edit page contact 
  public function edit_contact($id){
 
 
     $contact = Contact::find($id);
 
 
     return view('backend.contact1.edit', compact('contact'));
     
  }
 
  //Update Slider contact 
  public function update_contact(Request $request, $id){
 
 $management = Contact::find($id);

    $validator = Validator::make($request->all(), [

        'phone'                => 'required',
        'email'                => 'required|min:2',
        'address'                => 'required|min:2',
        
     ]);
 
     if($validator->fails()){
         return redirect()->back()->withErrors($validator)->withInput();
     }
 



 

   $management->update([

      'phone'              => $request->phone,
      'email'              => $request->email,
      'address'              => $request->address,
         
]);
 
          

     $this->successMessage('Updated success');
     return redirect()->back();
 
     
 
 
  }
  //Delete Slider contact 
  public function delete_contact($id){
 
    if (auth()->user()->role_as !== 'creator'){

      $slider_img = Contact::find($id);
      if($slider_img->image){
               
        unlink($slider_img->image);
    
    }
  
      $slider_img->delete();
      $this->successMessage('Deleted success');
      return redirect()->back();
    }

  }
}
