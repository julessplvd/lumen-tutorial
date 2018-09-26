<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{

    public function showAllRoles()
    {
        return response()->json(Role::all());
    }

    public function showOneRole($id)
    {
        return response()->json(Role::find($id));
    }

    public function create(Request $request)
    {
        $role = Role::create($request->all());

        return response()->json($Role, 201);
    }

    // public function update($id, Request $request)
    // {
    //     $author = Author::findOrFail($id);
    //     $author->update($request->all());

    //     return response()->json($author, 200);
    // }

    // public function delete($id)
    // {
    //     Author::findOrFail($id)->delete();
    //     return response('Deleted Successfully', 200);
    // }
}