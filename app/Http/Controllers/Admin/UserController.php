<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Helpers\Flash;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index()
    {
        $users = User::users()->paginate(10);

        return view('dashboard.users.index', compact('users'));
    }

    public function store(ClientStoreRequest $request){
        try{

            DB::beginTransaction();

            $password = Str::password(8);
            
            $user = User::create([
                'name' => ucfirst(explode('@', $request->email)[0]),
                'email' => $request->email,
                // 'password' => bcrypt($password),
                'password' => bcrypt('123123'),
                'email_verified_at' => Carbon::now()
            ]);

            $user->details()->create([
                'invited_by' => Auth::user()->id,
            ]);

            //TODO: SEND PASSWORD
                
            DB::commit();

        return redirect()->route('users.index');

        }catch(Exception $e){

            DB::rollBack();
            
            Flash::failure("Something went wrong");
            
            return redirect()->back();

        }
    }

    public function update(Request $request)
    {
        try{
            

            DB::beginTransaction();

            $user = User::find($request->user);

            if(!$user){

                Flash::failure("User not found");
                return redirect()->route('users.index');
            }


            $user->update([
                'name' => $request->name,
                
            ]);

            $user->details->update([
                'phone' => $request->phone
            ]);

            DB::commit();

            Flash::success("User updated successfully");

            return redirect()->route('users.index');

        }catch(Exception $e){

            DB::rollBack();
            
            Flash::failure("Something went wrong");
            
            return redirect()->back();

        }
    }

    public function destroy(Request $request)
    {
        try{


            DB::beginTransaction();

            $user = User::find($request->user);

            if(!$user){

                Flash::failure("User not found");
                return redirect()->route('users.index');
            }

            $user->delete();

            DB::commit();

            Flash::success("User removed successfully");

            return redirect()->route('users.index');

        }catch(Exception $e){

            DB::rollBack();
            
            Flash::failure("Something went wrong");
            
            return redirect()->back();;
                    
            }
    }
}