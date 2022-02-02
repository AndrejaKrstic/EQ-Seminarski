<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Homework;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class HomeworkController extends Controller
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
        //
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
        $homework = Homework::where('id_domaceg',$id)->delete();
        return response()->json("Upseno obrisan zadatak!");
    }
    public function getAllDomaci()
    {
        $domaci = Homework::all();
        return $domaci;
    }
    public function addDomaci(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'naziv_domaceg' => 'required',
            'domaci_zadatak' => 'required',
            'rok_izrade' => 'required',
            'naziv_jezika' => 'required|string',
            'nivo' => 'required|string',
            
        ]);
        if ($validator->fails())
        return response()->json($validator->errors());

        $language = Language::where('naziv',$request->naziv_jezika)->first()->id_jezika;
        if(is_null($language)){
            return response()->json('Nije pronadjen jezik', 404);
        }
        $course = Course::where([
            ['nivo',$request->nivo],
            ['jezik_id',$language],        
            ])->first()->id_kurs;
            
        if(is_null($course))
        return response()->json('Nije pronadjen nivo', 404);


        $user=Auth::user();
        if($user->isProf != 1){
            return response()->json("Samo profesor moze da postavi domaci zadatak!");
        }
        //return $course;
        $ime_prof = $user->ime . ' ' . $user->prezime;
        $homework = Homework::create([
            'naziv_domaceg' => $request->naziv_domaceg,
            'domaci_zadatak' => $request->domaci_zadatak,
            'rok_izrade' => $request->rok_izrade,
            'id_kurs' => $course,
            'domaci_postavio' => $ime_prof,
        ]);
        return $homework;


    }
}
