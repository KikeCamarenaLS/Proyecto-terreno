<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

          $roles=['Administrador','Vendedor','Clientes','Recursos Humanos','Ejecutivo de cuenta(Capturista)','Ejecutivo de proyectos'];

    	for ($i=0; $i < count($roles); $i++) { 
    		DB::table('roles')->insert([
                    'name' => $roles[$i],
                    'guard_name'=> 'web'
                ]);
    	}
    }
}
