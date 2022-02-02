<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\Course;
use App\Models\Language;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'ime' => 'required|string|max:255',
            'prezime' => 'required|string|max:255',
            'korisnicko_ime' => 'required|string|min:5|unique:users',
            'password' => 'required|string|min:8',
            'naziv_jezika' => 'required|string',
            'nivo' => 'required|string',
            'isProf'=>'required',
        ]);


        if ($validator->fails())
            return response()->json($validator->errors());

        $user = User::create([
            'ime' => $request->ime,
            'prezime' => $request->prezime,
            'korisnicko_ime' => $request->korisnicko_ime,
            'isProf' => $request->isProf,
            'password' => Hash::make($request->password),
        ]);

        $language = Language::where('naziv',$request->naziv_jezika)->first()->id_jezika;
        //return response()->json($language);
        $course = Course::where([
            ['nivo',$request->nivo],
            ['jezik_id',$language],        
            ])->first()->id_kurs;
            
        if(is_null($course))
        return response()->json('Nije pronadjen nivo', 404);
        

        Attendance::create([
            'id_kurs'=>$course,
            'korisnik_id'=>$user->id,
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json(['data' => $user, 'access_token' => $token, 'token_type' => 'Bearer']);
    }

    public function login(Request $request)
    {
        
        if (!Auth::attempt($request->only('korisnicko_ime', 'password'))) {
            return response()->json(['success' => false]);
        }
        
        
        $user = User::where('korisnicko_ime', $request['korisnicko_ime'])->firstOrFail();
        
        $token = $user->createToken('auth_token')->plainTextToken;
        
        $imePrezime = $user->ime . ' ' . $user->prezime;
        return response()
            ->json(['success'=>true, 'access_token' => $token, 'token_type' => 'Bearer', 'imePrezime'=>$imePrezime, 'id'=>$user->id, 'isProf'=>$user->isProf]);
    }


    public function logout()
    {
        auth()->user()->tokens()->delete();
        return [
            'message' => 'You have successfully logged out and the token was successfully deleted'
        ];
    }
}
