<?php

namespace App\Http\Controllers\Admin;

use App\Models\BadHabit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Class BadHabitController
 * @package App\Http\Controllers
 */
class BadHabitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $badHabits = BadHabit::paginate(15);

        return view('admin.bad-habit.index', compact('badHabits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $badHabit = new BadHabit();
        return view('admin.bad-habit.create', compact('badHabit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(BadHabit::$rules);

        $badHabit = BadHabit::create($request->all());

        return redirect()->route('bad-habits.index')
            ->with('success', 'BadHabit created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $badHabit = BadHabit::find($id);

        return view('admin.bad-habit.show', compact('badHabit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $badHabit = BadHabit::find($id);

        return view('admin.bad-habit.edit', compact('badHabit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  BadHabit $badHabit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BadHabit $badHabit)
    {
        request()->validate(BadHabit::$rules);

        $badHabit->update($request->all());

        return redirect()->route('bad-habits.index')
            ->with('success', 'BadHabit updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $badHabit = BadHabit::find($id)->delete();

        return redirect()->route('bad-habits.index')
            ->with('success', 'BadHabit deleted successfully');
    }
}
