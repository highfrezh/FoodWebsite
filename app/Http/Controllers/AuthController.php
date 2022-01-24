<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register(Request $request)
    {

        $attribute = $this->validate($request, [
            'username'   => 'required|unique:users,username', //user here means the name of the table username the name of coloum
            'password'   => 'required|string|min:6',
            'email'      => 'required|string|email|max:191|unique:users',

        ]);

        $attribute['password'] =  Hash::make($request['password']);

        User::create($attribute);

        return response()->json(['status' => 'Registration Successfull']);
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'username'   => 'required|exists:users,username',
            'password'   => 'required|string|min:6',
        ]);

        $credential = request(['username', 'password']);
        if (Auth::attempt($credential)) {
            $user = User::where('username', $request->username)->first();

            //the createToken can accept any name......
            $tokenResult = $user->createToken($request->username)->plainTextToken;

            return //response()->json(Auth::user(), 200);
                response()->json([
                    'user'  => Auth::user(),
                    'token' => $tokenResult,
                ]);
        }
        throw ValidationException::withMessages([
            'username' => ['The provided credential is incorrect..!']
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'status_code' => 200,
            'message' => 'token deleted successful!'
        ]);
    }

    public function profile()
    {
        $user = Auth::user();

        if ($user) {
            return response()->json($user, 200);
        }
    }

    public function updateProfile(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $this->validate($request, [
            'name' => 'required|string|max:191',
            'phone_num' => 'required',
            'zip_code'   =>  'required',
            'country'   =>  'required',
            'address'   =>  'required',
            'state'   =>  'required',

        ]);

        $currentImage = $user->image;

        if ($request->image != $currentImage) {
            // using image intervention package for image uploading
            $name = time() . '.' . explode('/', explode(':', substr($request->image, 0, strpos($request->image, ';')))[1])[1];
            Image::make($request->image)->save(public_path('images/profile/') . $name);

            // $request->image = $name;
            $request->merge(['image' => $name]);

            // deleting the previous Photo from the profile.
            $userPhoto = public_path('images/profile/') . $currentImage;
            if (file_exists($userPhoto)) {
                @unlink($userPhoto);
            }
        }

        $user->update($request->all());

        return response()->json([
            'message' => 'Updated the user info',
            'code'    => 200
        ]);
    }
}
