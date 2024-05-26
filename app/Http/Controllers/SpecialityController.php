<?php

namespace App\Http\Controllers;

use App\Models\Speciality;
use Illuminate\Http\Request;

class SpecialityController extends Controller
{
    public function view(): \Illuminate\Contracts\View\View
    {
        return view('speciality')->with([
            'specialities' => Speciality::all()
        ]);
    }

    public function add(Request $request)
    {
        dd($request);
        $validatedData = $request->validate([
            'name' => 'string|required'
        ]);

        Speciality::create($validatedData);

        return redirect()->route('specialities')
            ->with([
                'message' => 'Speciality was successfully created',
                'success' => 1,
            ]);
    }


    public function edit (Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'string|required'
        ]);

        Speciality::where('id', $id)
            ->update($validatedData);

        return redirect()->route('specialities')
            ->with([
                'message' => 'Speciality was successfully updated',
                'success' => 1,
            ]);
    }

    public function delete (Request $request, $id)
    {
        Speciality::findOrFail($id)
            ->delete();



        return redirect()->route('specialities')
            ->with([
                'message' => 'Speciality was successfully deleted',
                'success' => 1,
            ]);
    }
}
