<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $users = User::where('user_role_id', 3)->orderBy('created_at', 'desc')->paginate(15);

        return view('admin.manager.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $user = new User();
        $cities = City::get();

        return view('admin.manager.create', compact('user', 'cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        request()->validate(User::$rules);
        $data = $request->all();
        if ($request->hasFile('image')) {
            $path = $this->uploadImage($request->file('image'));
            $data['image'] = $path;
        }

        User::create($data);

        return redirect()->route('managers.index')->with('success', 'Manager created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('admin.manager.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $user = User::find($id);
        $cities = City::get();

        return view('admin.manager.edit', compact('user', 'cities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        request()->validate(User::$rules);
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        if ($request->hasFile('image')) {
            $path = $this->uploadImage($request->file('image'));
            $data['image'] = $path;
        }
        $user->update($data);

        return redirect()->route('managers.index')->with('success', 'Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $user = User::find($id)->delete();

        return redirect()->route('managers.index')
            ->with('success', 'Manager deleted successfully');
    }
}
