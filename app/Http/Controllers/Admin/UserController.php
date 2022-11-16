<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        $type = $request['type'];
        $users = User::where('user_role_id', $type)->orderByDesc('created_at')->paginate(15);

        return view('admin.user.index', compact('users', 'type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(Request $request)
    {
        $type = $request['type'];
        $user = new User();

        return view('admin.user.create', compact('user', 'type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        request()->validate(User::$rules);
        $user = User::create([
            'name'  =>  $request['name'],
            'email' =>  $request['email'],
            'password'  =>  Hash::make($request['password']),
            'user_role_id'  =>  $request['type'],
        ]);

        return redirect()->route('users.index', ['type' => $request['type']])
            ->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('admin.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, User $user)
    {
        request()->validate(User::$rules);
        $user->update([
            'name'  =>  $request['name'],
            'email' =>  $request['email'],
            'password'  =>  Hash::make($request['password']),
            'user_role_id'  =>  $request['type'],
        ]);

        return redirect()->action("\App\Http\Controllers\Admin\UserController@index", [$request])->with('success', 'Successfully updated');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $user = User::find($id)->delete();

        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully');
    }
}
