<?php

namespace App\Http\Controllers\Masters;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Role;
use App\User;
use App\Company;
use App\Permission;
use Illuminate\Validation\Rule;
use Validator;
use DB;

class UsersController extends Controller
{
    public function __construct(){
    	$this->data['theme'] = 'pooled/';
    }

    public function list(){
    	$this->data['users'] = User::with('role')->get();
        return view($this->data['theme'].'masters/users/list', $this->data);
    }

    public function add(){
    	$this->data['user'] = new User();
    	$this->data['action'] = 'Add';
    	$this->data['roles_list'] = Role::pluck('name','id');
    	$this->data['company'] = Company::pluck('name','id');
    	$this->data['selected_role'] = [];
    	//print_r($this->data['company']);
        return view($this->data['theme'].'masters/users/form', $this->data);
    }

    public function edit(User $user)
    {
		$this->data['action'] = 'Edit';
    	$this->data['user'] = $user;
    	$this->data['company'] = Company::pluck('name','id');
    	$this->data['role'] = Role::pluck('name','id');
    	$this->data['selected_role'] = $user->roles()->first()->id;
    	//print_r($this->data['selected_role']);
    	return view($this->data['theme'].'masters/users/form', $this->data);
    }

    public function save(Request $request){
		DB::beginTransaction();
    	try{
	        $error_messages = [
			    'password.name' => 'Name is required',
			    'password.username' => 'Username is required',
			    'password.email' => 'Email is required',
			    'password.required_if' => 'Password is required',
			    'password.company_id' => 'Company ID is required',
			];

	        $validator = Validator::make($request->all(), [
	            'name' => 'required|max:255',
	            'username' => ['required',
	            Rule::unique('users')->ignore($request->id)
	            ,'max:255'],
	            'email' => ['required',
	            Rule::unique('users')->ignore($request->id)
	            ,'max:255'],
	           	//'password' => [ Rule::required_without(['password_yes', $request->id]),'max:255'],
	           	'password' => ['required_if:password_yes,Yes', 'max:255'],
	            //'password' => 'required|max:255',
	            'company_id' => 'required',
	            'role_id' => 'required',
	            'profile_image' => 'image',
	            'is_active' => 'required',
	        ],$error_messages);

	        if ($validator->fails()) {
				return response()->json(['success' => false,'errors'=>$validator->errors()->all()]);
	        }

	        if(empty($request->id)){
	        	$user = new User;
	        }else{
	        	$user = User::findOrFail($request->id);
		        //Removing all existing permissions
                //$role->perms()->sync([]);
                $user->roles()->sync([]);
	        }

	        
	        $user->fill($request->all());
	        //$user->profile_image = '';
	        $user->save();

	        //Saving image
	        if($request->hasFile('profile_image')){
	        $destination = userImagePath();
	        $extension = $request->file('profile_image')->getClientOriginalExtension();
            $path = $request->file('profile_image')->storeAs($destination, $user->id.'.'.$extension);
            //$filename = userImage($user->id.'.'.$extension);
            $user->profile_image = $user->id.'.'.$extension;
            $user->save();
        	}

            $user->attachRole($request->role_id);

			DB::commit();

			$request->session()->flash('success', 'User added successfully!');
			return response()->json(['success' => true]);
    	}catch(Exception $e){
			DB::rollBack();	
			return response()->json(['success' => false,'errors'=>['Exception Error' => $e->getMessage()]]);
    	}

    }

    public function delete($id){
    	User::destroy($id);
        return redirect()->route('listUsers')->with(['success' => 'User deleted successfully!']);
    }
}
