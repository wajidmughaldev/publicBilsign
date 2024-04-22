<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Term; 

class AdminController extends Controller
{
    public function dashboard()
    {
    $users = User::latest()->take(3)->get(); 
    return view('admin.dashboard', ['users' => $users]);
    }

    public function newUsers()
    {
        $users = User::whereIn('role', ['company', 'employee'])
                     ->latest()
                     ->paginate(10); // Change 10 to the desired number of users per page
    
        return view('admin.new-users', ['users' => $users]);
    }

    public function allCustomers(Request $request)
    {
    $status = $request->input('status'); // Default to 'activate' if status is not provided
    $search = $request->input('search');
    $usersQuery = User::whereIn('role', ['company', 'employee']);

    if ($status === 'activate') {
        $usersQuery->where('status', 'activate');
    } elseif ($status === 'deactivate') {
        $usersQuery->where('status', 'deactivate');
    }

    if ($search) {
        $usersQuery->where(function ($query) use ($search) {
            $query->where('name', 'like', "%$search%")
                ->orWhere('email', 'like', "%$search%")
                ->orWhere('phone_num', 'like', "%$search%");
        });
    }

    $users = $usersQuery->latest()->paginate(10);

    return view('admin.all-customers', ['users' => $users]);
    }

    public function allDocuments(Request $request)
    {
    $status = $request->input('status'); // Default to 'activate' if status is not provided
    $search = $request->input('search');
    $usersQuery = User::whereIn('role', ['company', 'employee']);

    if ($status === 'activate') {
        $usersQuery->where('status', 'activate');
    } elseif ($status === 'deactivate') {
        $usersQuery->where('status', 'deactivate');
    }

    if ($search) {
        $usersQuery->where(function ($query) use ($search) {
            $query->where('name', 'like', "%$search%")
                ->orWhere('email', 'like', "%$search%")
                ->orWhere('phone_num', 'like', "%$search%");
        });
    }

    $users = $usersQuery->latest()->paginate(10);

    return view('admin.all-documents', ['users' => $users]);
    }

    

     // Verify Status Function
    public function updateStatus(Request $request, $id)
    {
    $user = User::find($id);
    $user->status = $request->input('status');
    $user->save();
    
    return redirect()->back()->with('message', 'Status updated successfully');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        if(!$user) {
            return redirect()->route('admin.all-customers')->with('error', 'User not found');
        }
        $user->delete();
        return redirect()->route('admin.all-customers')->with('success', 'User deleted successfully');
    }
    
    public function settings()
    {
        $term = Term::first(); // Assuming there's only one record for terms
        return view('admin.settings', compact('term'));
    }

    public function bankID()
    {
        return view('admin.bank');
    }

    // SAVE TERMS
    public function saveTerms(Request $request)
    {
    $request->validate([
        'purchase_terms' => 'required|string|max:1000',
        'mediation_terms' => 'required|string|max:1000',
        'purchase_contract_terms' => 'required|string|max:2000',
    ]);

    $term = Term::firstOrNew([]);

    $term->purchase_terms = $request->input('purchase_terms');
    $term->mediation_terms = $request->input('mediation_terms');
    $term->purchase_contract_terms = $request->input('purchase_contract_terms');
    
    $term->save();

    return redirect()->route('admin.settings')->with('success', 'Term updated successfully!');
    }

    // UPDATE PASSWORD
    public function updatePassword(Request $request): JsonResponse
{
    $request->validate([
        'current_password' => 'required',
        'password' => 'required|min:8|confirmed',
    ]);

    $user = Auth::user();

    if (!Hash::check($request->input('current_password'), $user->password)) {
        return response()->json(['message' => 'The current password is incorrect.'], 422);
    }

    $user->password = Hash::make($request->input('password'));
    $user->save();

    return response()->json(['message' => 'Password updated successfully.']);
}

}
