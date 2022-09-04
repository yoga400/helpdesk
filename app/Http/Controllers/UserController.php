<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Psy\Command\ListCommand\FunctionEnumerator;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('pages.admin.user.index', [
            'users' => $users
        ]);
    }

    public function setStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required'
        ]);

        $user = User::findOrFail($id);
        $user->status = $request->status;
        $user->save();

        return redirect()->route('user.index');
    }
}
