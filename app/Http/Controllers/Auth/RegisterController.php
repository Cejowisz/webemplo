<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\LevelOneModel;
use App\Downline;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\TestController;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/users';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|max:255|unique:users,email',
            'phone' => 'required|max:255',
            'bank_name' => 'required|max:255',
            'acct_name' => 'required|max:255',
            'acct_number' => 'required|max:255',
            //'profile_pix'       =>  'nullable',
            'sme' => 'nullable|max:255',
            'other_sme' => 'nullable|max:255',
            'password' => 'confirmed'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return User
     */
    protected function create(array $data)
    {
        // Add new user to level one table


        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'bank_name' => $data['bank_name'],
            'acct_name' => $data['acct_name'],
            'acct_number' => $data['acct_number'],
            //'profile_pix'   => $data['profile_pix']->store('pictures'),
            'sme' => $data['sme'],
            'other_sme' => $data['other_sme'],
            'password' => bcrypt($data['password'])

        ]);


        // The Admin
        if($data['email'] == 'cjustinobi@gmail.com'){
            return $user;
        }else{
            $levelone = new LevelOneModel();
            $levelone->user_email = $data['email'];

            $levelone->save();


            // Selects older user column in levelone table and checks
            // if it qualified to be incremented.
            $countFollowers = DB::table('level_one_models')
                ->select('followers')
                ->where('active', '=', '1')
                ->orderBy('created_at', 'desc')
                ->first()
                ->followers;

            if ($countFollowers <= 6) {

                DB::table('level_one_models')
                    ->where('active', '=', 1)
                    ->where('stop_count', '=', '1')
                    ->increment('followers', 1);

                $email = DB::table('level_one_models')
                    ->select('user_email')
                    ->where('active', '=', '1')
                    ->orderBy('created_at', 'desc')
                    ->first()
                    ->user_email;

                $downline = new Downline();
                $downline->user_email = $email;
                $downline->downline_email = $data['email'];

                $downline->save();

            } else {
                // A user completes his stage on and should begin stage 2
                DB::table('level_one_models')
                    ->where('followers', '=', 7)
                    ->where('active', '=', 1)
                    ->update(['completed' => 1, 'stop_count' => 0]);


                DB::table('level_one_models')
                    ->where('followers', '=', 5)
                    ->update(['active' => 1]);
                // and should move to the next level!

                // Next user to receive
                $nextTurn = DB::table('level_one_models')->select('user_email')
                    ->where('completed', '=', '0')->first()->user_email;

                DB::table('level_one_models')
                    ->where('user_email', $nextTurn)
                    ->where('completed', 0)
                    ->increment('followers', 1);
            }

            return $user;
        }
    }


}