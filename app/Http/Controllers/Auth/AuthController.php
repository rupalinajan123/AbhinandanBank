<?php
  
namespace App\Http\Controllers\Auth;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Crypt;
  
class AuthController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
     
    //   public function __construct()
    // {
        
    //     $this->middleware('ip-restriction');
    // }
     
    public function index()
    {
        return view('auth.login');
    }  
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registration()
    {
        return view('auth.registration');
    }
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
         
        // echo $request->password;
        // exit;
        
        $decodedPassword = base64_decode($request->password);
   
        // $credentials = $request->only('email', 'password');
         $credentials = $request->only('email', 'password');
         $credentials['password'] = $decodedPassword;
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('You have Successfully loggedin');
        }
  
        return redirect("login")->withSuccess('Opps! You have entered invalid credentials');
    }
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    // public function postRegistration(Request $request)
    // {  
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email|unique:users',
    //         'password' => 'required|min:6',
    //     ]);
           
    //     $data = $request->all();
    //     $check = $this->create($data);
         
    //     return redirect("dashboard")->withSuccess('Great! You have Successfully loggedin');
    // }
    
    
    public function postRegistration(Request $request)
    {  
      $validator = Validator::make($request->all(), [
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => [
            'required',
            'min:8',  // Minimum length of 8 characters
            'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&]).+$/',
            // At least one lowercase letter, one uppercase letter, one digit, and one special character
        ],
    ]);

    if ($validator->fails()) {
        return redirect('registration')
                    ->withErrors($validator)
                    ->withInput();
    }

    $data = $request->all();
    $check = $this->create($data);

    return redirect("dashboard")->withSuccess('Great! You have Successfully logged in');
}
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard()
    {
        if(Auth::check()){
            return view('admin.dashboard');
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}