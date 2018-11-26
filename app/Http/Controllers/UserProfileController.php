<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Storage;

class UserProfileController extends Controller
{
    public function edit()
    {
    	return view('user.edit');
    }

    public function update(Request $request)
    {
        $this->validate(request(),[
            'name' => 'required',
            'avatar' => 'image|nullable|max:1999',
        ]);
    	if($request->user()->avatar!='avatars/default.png')
    	{
    		Storage::delete($request->user()->avatar);
    	}
    	$avatar = $request->file('avatar')->store('avatars');
    	$name = $request->name;
    	$request->user()->update([
    		'avatar' => $avatar,
    		'name' => $name
    	]);
    	return redirect()->back();
    }

    public function destroy(Request $request)
    {
    	if($request->user()->avatar!='avatars/default.png')
    	{
    		Storage::delete($request->user()->avatar);
    	}
    	$request->user()->update([
    		'avatar' => 'avatars/default.png'
    	]);
    	return redirect()->back();
    }
}

