<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserRole;
use Illuminate\Http\Request;

/**
 * Class UserRoleController
 * @package App\Http\Controllers
 */
class UserRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $userRoles = UserRole::where('id', '!=', 1)->paginate(15);

        return view('admin.user-role.index', compact('userRoles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $userRole = new UserRole();
        return view('admin.user-role.create', compact('userRole'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        request()->validate(UserRole::$rules);

        $userRole = UserRole::create($request->all());

        return redirect()->route('user-roles.index')
            ->with('success', 'UserRole created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $userRole = UserRole::find($id);

        return view('admin.user-role.show', compact('userRole'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $userRole = UserRole::find($id);

        return view('admin.user-role.edit', compact('userRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  UserRole $userRole
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, UserRole $userRole)
    {
        request()->validate(UserRole::$rules);

        $userRole->update($request->all());

        return redirect()->route('user-roles.index')
            ->with('success', 'UserRole updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $userRole = UserRole::find($id)->delete();

        return redirect()->route('user-roles.index')
            ->with('success', 'UserRole deleted successfully');
    }
}
