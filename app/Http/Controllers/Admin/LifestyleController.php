<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lifestyle;
use Illuminate\Http\Request;

/**
 * Class LifestyleController
 * @package App\Http\Controllers
 */
class LifestyleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lifestyles = Lifestyle::paginate(15);

        return view('admin.lifestyle.index', compact('lifestyles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lifestyle = new Lifestyle();
        return view('admin.lifestyle.create', compact('lifestyle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Lifestyle::$rules);

        $lifestyle = Lifestyle::create($request->all());

        return redirect()->route('lifestyles.index')
            ->with('success', 'Lifestyle created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lifestyle = Lifestyle::find($id);

        return view('admin.lifestyle.show', compact('lifestyle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lifestyle = Lifestyle::find($id);

        return view('admin.lifestyle.edit', compact('lifestyle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Lifestyle $lifestyle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lifestyle $lifestyle)
    {
        request()->validate(Lifestyle::$rules);

        $lifestyle->update($request->all());

        return redirect()->route('lifestyles.index')
            ->with('success', 'Lifestyle updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $lifestyle = Lifestyle::find($id)->delete();

        return redirect()->route('lifestyles.index')
            ->with('success', 'Lifestyle deleted successfully');
    }
}
