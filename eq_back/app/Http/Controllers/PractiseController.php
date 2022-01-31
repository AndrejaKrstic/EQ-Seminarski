<?php

namespace App\Http\Controllers;

use App\Models\Practise;
use App\Models\PractiseStorage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PractiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $validator = Validator::make($request->all(), [
            'naziv_vezbanja' => 'required',
            'nivo_vezbanja' => 'required',
            'tacno' => 'required',
            'netacno' => 'required'
        ]);
        if ($validator->fails())
            return response()->json($validator->errors());
        $practise = Practise::create([
            'naziv_vezbanja' => $request->naziv_vezbanja,
            'nivo_vezbanja' => $request->nivo_vezbanja,
            'tacno' => $request->tacno,
            'netacno' => $request->netacno
        ]);
        if($practise){
            $practise_storage = PractiseStorage::create([
                'id_vezbanja'=>$practise->id,
                'korisnik_id'=>Auth::user()->id,
            ]);
        }
        return response()->json(['Practise is created successfully.', $practise]); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getlevels(Request $request){
        $validator = Validator::make($request->all(),[
            'naziv_vezbanja'=>'required'
        ]);
        $user = Auth::user();
        $baza = PractiseStorage::where('korisnik_id',$user->id)->get();
        $ids = $baza->pluck('id_vezbanja');
        $vezbanja = Practise::whereIn('id',$ids)->where('naziv_vezbanja',$request->naziv_vezbanja)->pluck(
            'nivo_vezbanja'
        );
        return $vezbanja;

    }








}