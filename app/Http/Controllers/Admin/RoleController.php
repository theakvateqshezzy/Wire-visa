<?php

namespace App\Http\Controllers\Api;

use App\Enums\DashboardAbilityType;
use App\Http\Controllers\BaseController;

use Exception;

use Illuminate\Support\Facades\DB;

use App\Models\Workspace;
use App\Models\WorkspaceRole;

use App\Http\Requests\RoleIndexRequest;
use App\Http\Requests\RoleStoreRequest;
use App\Http\Requests\RoleUpdateRequest;
use App\Http\Resources\DashboardAbilityResource;
use App\Http\Resources\WorkspaceRoleResource;
use App\Models\DashboardAbility;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController
{
    public function __construct()
    {
        $this->middleware(['allowed:'.DashboardAbilityType::ROLE_VIEW->value])->only(['index', 'show']);
        $this->middleware(['allowed:'.DashboardAbilityType::ROLE_CREATE->value])->only(['store']);
        $this->middleware(['allowed:'.DashboardAbilityType::ROLE_UPDATE->value])->only(['update']);
        $this->middleware(['allowed:'.DashboardAbilityType::ROLE_DELETE->value])->only(['destroy']);
    }

    public function index(Request $request)
    {
        try{

            $roles = Role::active()->get();

            return $this->sendResponse("", WorkspaceRoleResource::collection($roles));


        }catch(Exception $e){

            $this->logError($e);
            return $this->sendError("Something went wrong", [], 500);

        }
    }


    public function store(RoleStoreRequest $request)
    {

        
        try{


            DB::beginTransaction();

            $role = Role::create([
                'name' => $request->name,
            ]);

            
            $abilities = DashboardAbility::whereIn('name', $request->abilities)->pluck('id')->toArray();

            $role->abilities()->attach($abilities);
            
            DB::commit();

            return $this->sendResponse("", new WorkspaceRoleResource($role));

        }catch(Exception $e){

            DB::rollBack();
            
            $this->logError($e);
            return $this->sendError("Something went wrong", [], 500);

        }
        

    }
    

    public function update(RoleUpdateRequest $request)
    {
        
        try{

            $role = Role::find($request->role);

            if(!$role){

                return $this->sendError("Role not found", [], 404);

            }

            if($role->isDefault()){

                return $this->sendError("Cannot Change abilities of default Role");

            }

            $role->update([
                'name' => $request->name,
            ]);

            $abilities = DashboardAbility::whereIn('name', $request->abilities)->pluck('id')->toArray();

            $role->abilities()->sync($abilities);

            DB::commit();

            return $this->sendResponse("Role updated", $role);

        }catch(Exception $e){

            DB::rollBack();
            
            $this->logError($e);
            return $this->sendError("Something went wrong", [], 500);

        }

    }


    public function destroy(Request $request)
    {
        try{

            $role = Role::find($request->role);

            if(!$role){

                return $this->sendError("Role not found", [], 404);

            }

            if($role->isDefault()){

                return $this->sendError("Cannot Change abilities of default Role");

            }

            if(count($role->users)){

                return $this->sendError("Role has users assigned");

            }

            $role->delete();

            DB::commit();
            
            return $this->sendResponse("Role deleted successfully");


        }catch(Exception $e){

            DB::rollBack();
            
            return $this->sendError("Something went wrong", [], 500);
            
        }

    }

    public function abilities()
    {

        $abilities = DashboardAbility::active()->get();
        return $this->sendResponse("", DashboardAbilityResource::collection($abilities));

    }
}