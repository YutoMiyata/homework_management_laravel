<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homework;
use App\Http\Requests\StoreHomeworkRequest;


class HomeworkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $homeworks = Homework::select('id','name')->get();
        return view('homework.index',compact('homeworks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('homework.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHomeworkRequest $request)
    {
        Homework::create([
            'name' => $request->name,
            'japanese' => $request->japanese,
            'math' => $request->math,
            'english' => $request->english,
            'science' => $request->science,
            'society' => $request->society,     
        ]);
        return to_route('homework.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $homework = Homework::find($id);

        return view('homework.show',compact('homework'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $homework = Homework::find($id);

        return view('homework.edit',compact('homework'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreHomeworkRequest $request, string $id)
    {
        
        $homework = Homework::find($id);
        $homework->name = $request->name;
        $homework->japanese = $request->japanese;
        $homework->math = $request->math;
        $homework->english = $request->english;
        $homework->science = $request->science;
        $homework->society = $request->society;
        $homework->save();
        return to_route('homework.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $homework = Homework::find($id);
        $homework->delete();

        return to_route('homework.index');
    }
}
