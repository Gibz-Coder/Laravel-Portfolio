<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email',
            'project' => 'required|string',
            'description' => 'required|string'
        ]);

        if ($validator->fails()) {
            $failedFields = [];
            $errors = $validator->errors();

            if ($errors->has('name')) $failedFields[] = 'Name';
            if ($errors->has('email')) $failedFields[] = 'Email';
            if ($errors->has('project')) $failedFields[] = 'Project';
            if ($errors->has('description')) $failedFields[] = 'Description';

            $errorMessage = 'Please fill in all required fields: ' . implode(', ', $failedFields) . '.';

            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('flash_error', $errorMessage);
        }

        $message = new Message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->project;
        $message->description = $request->description;
        $message->save();

        return redirect('/#home')->with('flash_message', 'Message sent successfully. I will get back to you as soon as possible.');
    }
}
