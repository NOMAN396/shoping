<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Backend\User;
use App\Models\Backend\Role;
use App\Models\Backend\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Authenticantion\SigninRequest;
use App\Http\Requests\Authenticantion\SignupRequest;
use Exception;
class AuthController extends Controller
{
    public function signUpForm(){
        return view('backend.authentication.register');
    }

    public function signUpstore(SignupRequest $request){
        try{
            $user = new User;
            $user->name=$request->name;
            $user->email=$request->email;
            $user->contact=$request->contact;
            $user->image=$request->image;
            $user->password=Hash::make($request->password);
            $user->role_id=1;

            if($user->save())
            return redirect('login')->with('success','Successfully Registered');
        else
        return redirect('login')->with('danger','please try again');
        }catch(Exception $e){
            dd($e);
            return redirect()->back()->with('danger','please try again');
        }

    }

    public function signInForm(){
        return view('backend.authentication.login');
    }

    public function signInCheck(SignInRequest $request){
        try{
            $user = User::where('name',$request->name)->orWhere('email',$request->email)->first();
            
            if($user){
                if($user->status==1){
                    if(Hash::check($request->password,$user->password)){
                        $this->setSession($user);
                        return redirect()->route('dashboard')->with('Success','Successfully Loggin');
                    }else
                    return redirect()->route('login')->with('error','You are not active user d is wrong!');
                }else 
                return redirect()->route('login')->with('error','your phone number is wrong');
            }else
            return redirect()->route('login')->with('error','your password is wrong');
        }catch(Exception $e){
            dd($e);
            return redirect()->route('login')->with('error','your phone is wrong with password');

        }
    }

    public function setSession($user){
       return request()->session()->put([
            'userId'=>encryptor('encrypt',$user->id),
            'name'=>encryptor('encrypt',$user->name),
            'email'=>encryptor('encrypt',$user->email),
            'contact'=>encryptor('encrypt',$user->contact),
            'image'=>$user->image ?? 'no-image.png'
        ]
    );
}

    public function singOut(){
        request()->session()->flush();

        return redirect('login')->with('danger','Successfully logged Out');
    }

    public function index()

    
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Auth $auth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Auth $auth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Auth $auth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Auth $auth)
    {
        //
    }
}
