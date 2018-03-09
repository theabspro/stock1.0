<?php

namespace App\Http\Controllers\Masters;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Role;
use App\Permission;
use Validator;
use DB;
use Illuminate\Validation\Rule;

class RolesController extends Controller{
    public function __construct(){
    	$this->data['theme'] = 'theme1/';
    }

    public function list(){
    	$this->data['roles'] = Role::select('id','name','image')->get();
        return view($this->data['theme'].'masters/role/list', $this->data);
    }

    public function add(){
    	$this->data['role'] = new Role;
    	$this->data['permission_list'] = Permission::get();
    	$this->data['action'] = 'Add';
    	$this->data['selected_permissions'] = [];
        return view($this->data['theme'].'masters/role/form', $this->data);
    }

    public function edit(Role $role){
    	$this->data['role'] = $role;
    	$this->data['permission_list'] = Permission::get();
    	$this->data['action'] = 'Edit';
    	$this->data['selected_permissions'] = $role->perms()->pluck('id')->toArray();
        return view($this->data['theme'].'masters/role/form', $this->data);
    }

    public function save(Request $request){
    	//var_dump($request->id);die;
		DB::beginTransaction();
    	try{
			$error_messages = [
			    'display_name.required' => 'Role name is required',
			    'display_name.unique' => 'Role name has already been taken',
			    'display_name.max' => 'Maximum length of Role name is 255',
			];

	        $validator = Validator::make($request->all(), [
	            'display_name' => [
	            	'required',
	            	Rule::unique('roles')->ignore($request->id),
	            	'max:255'
	            ],
	            'image' => 'image',
	            'permission_ids' => 'required|array'
	        ],$error_messages);


	        if ($validator->fails()) {
				return response()->json(['success' => false,'errors'=>$validator->errors()->all()]);
	        }

	        if(empty($request->id)){
	        	$role = new Role;
	        }else{
	        	$role = Role::findOrFail($request->id);
		        //Removing all existing permissions
                $role->perms()->sync([]);
	        }

	        $role->fill($request->all());
	        $role->name = str_replace(" ","_",strtolower($request->display_name));
	        $role->save();

	        //Attaching permissions
	        $role->attachPermissions($request->permission_ids);

	        //Saving image
	        if($request->hasFile('image')){

		        $destination = roleImagePath();
		        $extension = $request->file('image')->getClientOriginalExtension();
	            $path = $request->file('image')->storeAs($destination, $role->id.'.'.$extension);
	            $role->image = $role->id.'.'.$extension;
	            $role->save();
	        }




			DB::commit();

			$request->session()->flash('success', 'Role saved successfully!');
			return response()->json(['success' => true]);
    	}catch(Exception $e){
			DB::rollBack();	
			return response()->json(['success' => false,'errors'=>['Exception Error' => $e->getMessage()]]);
    	}

    }

    public function delete($id){
    	Role::destroy($id);
        return redirect()->route('listRoles')->with(['success' => 'Role deleted successfully!']);
    }

}
