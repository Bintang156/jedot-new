<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\authors;
use Illuminate\Support\Facades\Auth;
use PharIo\Manifest\Author;

class Control_Home extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $file = $request->file('file');
        // Authors::create([
        //     'name' => $request -> name,
        //     'picture' => $file,
        // ]);

        Authors::create($request->all());
        return redirect('admin');
        //return redirect()->view('admin');
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
        $author = authors::findOrFail($id);
        echo $author;
        return view('admin.edit', compact('author'));
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
        Authors::findOrFail($id)->update([
            'name' => $request->name,
            'address' => $request->address,
        ]);
        return redirect('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Authors::findOrFail($id)->delete();
        return redirect('admin');
    }
}
