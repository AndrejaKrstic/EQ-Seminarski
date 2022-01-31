<?php

namespace App\Http\Controllers;

use App\Http\Resources\PractiseCollection;
use App\Http\Resources\PractiseResource;
use App\Models\Practise;
use App\Models\PractiseStorage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return $users;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($user_id)
    {
        $user = User::find($user_id);
        if (is_null($user))
            return response()->json('Data not found', 404);
            $practise_database = PractiseStorage::where('korisnik_id',$user_id);
            $ids = $practise_database->pluck('id_vezbanja');
            foreach($ids as $id){
                Practise::where('id',$id)->delete();
            }

        $user->delete();
    }
    public function napredak($user_id)
    {
        $user = User::find($user_id);
        if (is_null($user))
            return response()->json('Data not found', 404);
        $baza_vezbanja = PractiseStorage::where('korisnik_id',$user_id);
        $ids = $baza_vezbanja->pluck('id_vezbanja');
        $vezbanja = Practise::whereIn('id',$ids)->get()->sortByDesc('datum_vezbanja');
        
        return new PractiseCollection($vezbanja);
        
        
    }
    public function passwordChange(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'oldPassword' => 'required',
            'newPassword' => 'required|min:8',
        ]);

        if ($validator->fails())
            return response()->json($validator->errors());


        $user=Auth::user();
        $userPassword = $user->password;

        if (!Hash::check($request->oldPassword, $userPassword)) {
            return response()->json("old password is not correct!");
        }
        
   
        $user->password = Hash::make($request->newPassword);
        $user->save();
        return response()->json("password succesfully changed!");
        
        //return redirect()->back()->with('success','password successfully updated');
    
    }

}
