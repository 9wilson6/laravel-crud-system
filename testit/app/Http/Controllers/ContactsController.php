<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Contact;
class ContactsController extends Controller
{
   public function AddContact(){
   	return view('add_contact');
   }

    public function AllContact(){
	// 	$contacts=DB::table('contacts')->get();
	   
	  $contacts= Contact::all();
	  return view('all_contact')->with('all_contacts',$contacts);
   }
   public function InsertContact(Request $request){

   		// $data=array();
   		// $data['name']=$request->name;
   		// $data['email']=$request->email;
   		// $data['phone']=$request->phone;
   		// $st=DB::table('contacts')
   		// ->insert($data);

		   $contact= new Contact;
		   $contact->name=$request->name;
		   $contact->email=$request->email;
		   $contact->phone=$request->phone;
		   $st=$contact->save();
		   if ($st) {
			  $notification=array(
				  'message'=>'Contact Added Successfully',
				  'alert-type'=>'success'
			  );
			  return Redirect()->back()->with($notification);
		   }else{
			   echo "error";
		   }
   }
   public function DeleteContact($id){
	   $dlt=Contact::find($id)->delete();
	//   $dlt=DB::table('contacts')->where('id', $id)->delete();

	  if ($dlt) {
		$notification=array(
			'message'=>'Contact Deleted Successfully',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification);
	  }
	  
   }
   public function ShowContact($id){
	//  $con=DB::table('contacts') ->where('id', $id)->first();
	$con=Contact::find($id)->first();
	 return view('show_data')->with('sngl_con', $con);

   }

   public function EditContact($id){
	   $des=DB::table('contacts')->where('id', $id)->first();
return view('edit_contact')->with('info', $des);
   }

   public function UpdateContact(Request $request,$id){
	// $data=array();
	// $data['name']=$request->name;
	// $data['email']=$request->email;
	// $data['phone']=$request->phone;
	
	// $cont_update=DB::table('contacts')	->where('id',$id)
	// ->update($data);
	$cont_update=Contact::find($id);
	$cont_update->name=$request->name;
	$cont_update->email=$request->email;
	$cont_update->phone=$request->phone;
	$cont_update->save();
	if ($cont_update->save()){
		$notification=array(
			'message'=>'Contact Updated Successfully',
			'alert-type'=>'success'
		);
		return Redirect()->route('all.contact')->with($notification);
	 }else{
		echo "error";
	 }
   }
}
