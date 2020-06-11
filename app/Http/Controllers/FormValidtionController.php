<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Form;

class FormValidtionController extends Controller {

  // Create Form
  public function createUserForm(Request $request) {
    return view('form');
  }

  // Store Form data in database
  public function UserForm(Request $request) {

      // Form validation
      $this->validate($request, [
          'name' => 'required',
          'email' => 'required|email',
          'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
          'subject'=>'required',
          'message' => 'required'
       ]);

      //  Store data in database
      Form::create($request->all());

      //
      return back()->with('success', 'Your form has been submitted.');
  }

}
