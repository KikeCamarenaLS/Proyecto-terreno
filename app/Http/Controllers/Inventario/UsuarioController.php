<?php

namespace App\Http\Controllers\Inventario;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use Auth;
use Illuminate\Support\Facades\Validator;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UsuarioController extends Controller
{   


    public function __construct()
    {
        $this->middleware(['auth','checkstatus']);
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    
    public function nuevo_usuario()
    {


        $roles= Role::all();
        return view('inventario.Usuarios.NuevoUsuario',compact('roles'));


    }

     public function insert_usuario(Request $request)
    {
$Nombre= $request->input("Nombre");
        $Apellido_Paterno= $request->input("Apellido_Paterno");
        $Apellido_Materno= $request->input("Apellido_Materno");
        $Telefono1= $request->input("Telefono1");
        $Telefono2= $request->input("Telefono2");
        $Calle= $request->input("Calle");
        $Ninterior= $request->input("Ninterior");
        $NExterior= $request->input("NExterior");
        $Colonia= $request->input("Colonia");
        $Municipio= $request->input("Municipio");
        $Estado= $request->input("Estado");
        $Referencia= $request->input("Referencia");

         $insert =DB::select('insert into vendedores (Nombre,Apaterno,Amaterno, Tel1, Tel2, Calle, Ninterior, Nexterior, Colonia, Municipio, Estado, Referencia,created_at) values ("'.$Nombre.'","'.$Apellido_Paterno.'","'.$Apellido_Materno.'","'.$Telefono1.'","'.$Telefono2.'","'.$Calle.'","'.$Ninterior.'","'.$NExterior.'","'.$Colonia.'","'.$Municipio.'","'.$Estado.'","'.$Referencia.'",now())');

        

        return $insert;

                $password=bcrypt($request['password']);            
                   $guardar=User::create([
                                   'Nombre'=>$request['Nombre'],
                                   'Apaterno'=>$request['Apaterno'],
                                   'password'=>$password,
                                   'email'=>$request['email'],
                                   'name'=>$request['name'],
                                   'password'=>$password,
                                   'email'=>$request['email'],
                                   'name'=>$request['name'],
                                   'password'=>$password,
                                   'email'=>$request['email'],
                                   'name'=>$request['name'],
                                   'password'=>$password,
                                   'email'=>$request['email'],
                                   'name'=>$request['name'],
                                   'password'=>$password,
                                   'estatus'=>'1'
                                  ]);

                    foreach ($request['rolesuser'] as $key) {
                          $guardar->assignRole($key);
                         }


                   


    }

    

     public function listado_usuario()
    {
        
        $usuarios=User::all();
        $roles= Role::all();
        return view('inventario.Usuarios.ListadoUsuarios',compact('usuarios','roles'));
    }




    public function mi_perfil()
    {
        //
        $mis_datos=User::where('id',Auth::user()->id)->first();
        return view('inventario.Usuarios.MiPerfil',compact('mis_datos'));
    }
    

    public function update_mi_perfil(Request $request)
    {


       $validator = Validator::make($request->all(), [
                 
              ]);
       
              if ($validator->fails()) {
                  return redirect('/miperfil')->withErrors($validator)->withInput();
              }else{

               

                $actualizar = User::where('id', Auth::user()->id)->first();


                if($request['password']!=null){
                    $password=bcrypt($request['password']);
                }else{
                    $password=$actualizar->password;
                }
                  
                  $actualizar->update([
                                  'email'=>$request['email'],
                                  'name'=>$request['name'],
                                  'password'=>$password
                                 ]);
                  


                  return redirect('/miperfil')->with(['message' => 'Actualización correcta', 'color' => 'success']);



              }


    }

    public function update_usuario(Request $request)
    {


       $validator = Validator::make($request->all(), [
                 
              ]);
       
              if ($validator->fails()) {
                  return redirect('/listado_usuario')->withErrors($validator)->withInput();
              }else{

               

                $actualizar = User::where('id', $request['id'])->first();

                if($request['password']!=null){
                    $password=bcrypt($request['password']);
                }else{
                    $password=$actualizar->password;
                }

                              
                  $actualizar->update([
                                  'email'=>$request['email'],
                                  'name'=>$request['name'],
                                  'password'=>$password
                                 ]);

                   $actualizar->roles()->detach();
                  foreach ($request['rolesuser'] as $key) {
                        $actualizar->assignRole($key);
                       }

                  return redirect('/listado_usuario')->with(['message' => 'Actualización correcta', 'color' => 'success']);



              }


    }


    public function admin_rolespermisos()
    {   
        $permisos= Permission::all();


        $roles= Role::all();
       // dd()
        return view('inventario.Usuarios.adminRolesPermisos',compact('permisos','roles'));
    }


     public function save_permiso(Request $request)
    {
      Permission::create(['name' => $request['name']]);

      return redirect('/rolesypermisos')->with(['message' => 'Permiso Creado', 'color' => 'success']);
    }

     public function save_rol(Request $request)
    {
      Role::create(['name' => $request['name']]);

       return redirect('/rolesypermisos')->with(['message' => 'Rol Creado', 'color' => 'success']);
    }

     public function get_permisos_rol($id)
    {
     
     $role = Role::find($id);


            $rolePermissions = Permission::select("name")
                ->join("role_has_permissions","role_has_permissions.permission_id","=","permissions.id")
                ->where("role_has_permissions.role_id",$id)
                ->get();

      return json_encode($rolePermissions);
    }



    

     public function rol_permisos($rol,$permisos)
    {
      $porciones = explode(",", $permisos); 
      $role=Role::find($rol);
      $role->permissions()->detach();

       foreach ($porciones as $key) {
             $role->givePermissionTo($key);
            }

     // $role->givePermissionTo($permisos);
      return  count($porciones);
    }

     public function roles()
    {   
         $roles= Role::all();
         return json_encode($roles);
    }

     public function user_roles($id)
    {    

         $user=User::find($id);
         $roles = $user->getRoleNames();
         return $roles;
    }

     public function update_estatus(Request $request)
    {    

         $request['id_user'];
         $request['estatus_user'];

         if($request['estatus_user']==1){
            $new_status=0;
         }else{
            $new_status=1;
         }

          User::where('id',$request['id_user'])
                    ->update(['estatus' => $new_status]);

       return redirect('/listado_usuario')->with(['message' => 'Actualización correcta', 'color' => 'success']);
    }

    


   


   



    



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}