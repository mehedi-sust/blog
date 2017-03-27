<?php 

namespace App\Http\Controllers;

class PagesController extends Controller{
	public function getIndex() {
		# process varibale data or params
		#talk to the Model
		#recive from model
		#compile or process the data fform the model if needed
		#pass that data to the correct view
		return view('pages.login');
	}

	public function getAbout(){
		return view('pages/about');// .or / works the same they mean the directory 
	}

	public function  getContact(){
		return view('pages/contact');
	}

	public function  getDash(){
		return view('pages/dash');
	}
	
	public function getSignup(){
		return view('pages/signup');
	}

	public function test(){
		return view('test');
	}

}

?>