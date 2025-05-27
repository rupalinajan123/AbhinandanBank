<?php
namespace App;   
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;   
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use App\Rules\NotInLastPasswords;
use Illuminate\Support\Facades\Hash;
use App\Models\PasswordLog;
use App\Models\User;

  
class ChangePasswordController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.changePassword');
    } 
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    // public function store(Request $request)
    // {
    // $request->validate([
    //     'current_password' => ['required', new MatchOldPassword],
    //     'new_password' => [
    //         'required',
    //         'different:current_password',
    //         'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&()#])[A-Za-z\d@$!%*?&()#]{8,}$/',
    //         new NotInLastPasswords($user->id),
    //     ],
    //     'new_confirm_password' => ['same:new_password'],
    // ]);

    // $user = User::find(auth()->user()->id);

    // // Update the user's password
    // $newHashedPassword = Hash::make($request->new_password);
    // $user->update(['password' => $newHashedPassword]);

    // // Log the password change in the password_logs table
    // PasswordLog::create([
    //     'user_id' => $user->id,
    //     'username' => $user->email,
    //     'password_logs' => $newHashedPassword,
    //     'created_at' => now(),
    //     'updated_at' => now(),
    // ]);

    // return redirect()->intended('change-password')
    //     ->withSuccess('You have successfully changed your password.');
    // }
    
    
public function store(Request $request)
{
    $user = User::find(auth()->user()->id);

    $request->validate([
        'current_password' => ['required', new MatchOldPassword],
        'new_password' => [
            'required',
            'different:current_password',
            'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&()#])[A-Za-z\d@$!%*?&()#]{8,}$/',
            new NotInLastPasswords($user),
        ],
        'new_confirm_password' => ['same:new_password'],
    ]);

    // Update the user's password
    $newHashedPassword = Hash::make($request->new_password);
    $user->update(['password' => $newHashedPassword]);

    // Log the password change in the password_logs table
    PasswordLog::create([
        'user_id' => $user->id,
        'username' => $user->email,
        'password_logs' => $newHashedPassword,
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    return redirect()->intended('change-password')
        ->withSuccess('You have successfully changed your password.');
}
    
    
    
}