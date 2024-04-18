<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $users = User::All();
        return view('users', compact ('users'), [
            'title' => 'Gestion des utilisateurs'
        ]);
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('user-edit', compact('user'), [
            'title' => 'Modifier un utilisateur',
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
//        $request->validate([
//            'role' => 'required',
//        ]);
        $user = User::find($id);
        $user->update($request->all());
        return redirect()->route('users')
            ->with('success', 'User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users')
            ->with('success', 'User deleted successfully');
    }
}
