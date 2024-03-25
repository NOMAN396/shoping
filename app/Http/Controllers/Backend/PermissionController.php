<?php
namespace App\Http\Controllers\Backend;
use App\Models\Backend\Permission;
use App\Models\Backend\Role;
use App\Models\Backend\User;
use App\Http\Requests\Backend\Permission\SaveRequest;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $role=Role::findOrFail(encryptor('decrypt',$id));
        $permission=Permission::where('role_id',encryptor('decrypt',$id))->get();
        return view('backend.permission.index',compact('role','permission'));
    }

    /**
     * Show the form for creating a new resource.
     */

     public function save(SaveRequest $request,$role){
        try{
            Permission::where('role_id',encryptor('decrypt',$role))->delete();
            foreach($request->permission as $permission){
                $data=new Permission;
                $data->role_id=encryptor('decrypt',$role);
                $data->name=$permission;
                $data->save();
            }
            $this->notice::success('Permission granted');
              return redirect()->route('role.index');
        }catch(Exception $e){
            $this->notice::error('plese try and try ');
            d($e);
            return redirect()->back()->withInput();
        }
     }




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
    public function show(Permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permission $permission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Permission $permission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission)
    {
        //
    }
}
