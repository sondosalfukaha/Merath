<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function toggleRole(User $user)
    {
        // Count how many admins exist
        $adminCount = User::where('usertype', 'admin')->count();
        

        // Prevent current logged-in admin from demoting themselves
        if (auth()->id() === $user->id) {
            return back()->with('error', 'You cannot change your own role.');
        }

        // Prevent removing the last admin
        if ($user->usertype === 'admin' && $adminCount <= 1) {
            return back()->with('error', 'At least one admin is required.');
        }

        // Toggle role
        $user->usertype = $user->usertype === 'admin' ? 'user' : 'admin';
        $user->save();

        return back()->with('success', 'User role updated successfully.');
    }
}
