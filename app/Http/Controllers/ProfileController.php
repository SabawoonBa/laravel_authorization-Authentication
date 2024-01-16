<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request)
    {
        $request->user()->fill($request->validated());

        // if ($request->user()->isDirty('email')) {
        //     $request->user()->email_verified_at = null;
        // }

        // $request->user()->save();

        // return Redirect::route('profile.edit')->with('status', 'profile-updated');

        $id = Auth::user()->id;
        $data = User::find($id);

        $data->name = $request->fullname;
        $data->username = $request->username;
        $data->phone = $request->phone;
        $data->phone_verified = $request->phone_verified;
        $data->address = $request->address;
        $data->company = $request->company;
        $data->company_site = $request->website;
        $data->country = $request->country;
        $data->currency = $request->currency;
        $data->language = $request->language;
        $data->allow_changes = $request->allowchanges;

        if($request->file('avatar')) {
            $file = $request->file('avatar');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('uploads/avatars'), $filename);
            $data['photo'] = $filename;
        }

        $data->save();

        return redirect()->back();
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function profile() {
        $id = Auth::user()->id;
        $user = User::find($id);

        return view('profile.profile', compact('user'));
    }

    public function patch(Request $request)
    {

        $id = Auth::user()->id;
        $data = User::findOrFail($id);

        $data->name = $request->fullname;
        $data->username = $request->username;
        $data->phone = $request->phone;
        $data->phone_verified = $request->phone_verified;
        $data->address = $request->address;
        $data->company = $request->company;
        $data->company_site = $request->website;
        $data->country = $request->country;
        $data->currency = $request->currency;
        $data->language = $request->language;
        $data->allow_changes = $request->allowchanges;

        if($request->allowchanges === 'on') {
            $data->allow_changes = true;
        } else {
            $data->allow_changes = false;
        }

        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $fileName = time() . $id . $file->extension();
            $file->move(public_path('uploads/avatars'), $fileName);
            $data->photo = $fileName;
        }


        if($data->save()) {
            notify()->success('Profile data updated successfully.', 'Profile updated.');
        } else {
            notify()->error('There was some error in updating your profile!', 'Error');
        }

        return redirect()->back();
    }

    public function patchPassword(Request $request) {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|confirmed'
        ]);

        $id = Auth::user()->id;
        $user = User::findOrFail($id);

        if(Hash::check($request->current_password, $user->password)) {
            $user->password = Hash::make($request->new_password);
        } else {
            notify()->error('The Current password you entered is not correct! Please try again.', 'Password Mismatch!');

            return redirect()->back();
        }

        if($user->save()) {
            notify()->success('Password updated successfully.', 'Success');
        } else {
            notify()->error('There was some error in updating your password!', 'Error');
        }

        return redirect()->back();
    }

    public function patchEmail(Request $request) {
        $id = Auth::user()->id;
        $user = User::findOrFail($id);

        if(Hash::check($request->confirmemailpassword, $user->password)) {
            $user->email = $request->emailaddress;
        } else {
            notify()->error('The password you entered does not match our records. Please try again.', 'Password Mismatch!');

            return redirect()->back();
        }

        if($user->save()) {
            notify()->success('Email updated successfully.', 'Success');
        } else {
            notify()->error('There was some error in updating your email!', 'Error');
        }

        return redirect()->back();
    }

    public function deactivate($id) {

        $user = User::findOrFail($id);

        if(!$user) {
            notify()->error('The user was not found!', 'User not found');
            return redirect()->back();
        }

        $user->status = 'inactive';

        if($user->save()) {
            notify()->success('Your account has been deactivated.', 'Success');
        } else {
            notify()->error('There was some error in deactivating your account!', 'Error');
        }

        if(Auth::user()->id == $id) {
            Auth::guard('web')->logout();
            return redirect('/login');
        }

        return redirect()->back();
    }
}
