<?php

use Illuminate\Database\Seeder;
// proveedor\paquete\carpeta\entidad
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * se inicializan los datos en la tabla permiso
     * @return void
     */
    public function run()
    {
        // Users. users nombre de modulo index pagina principal del modulo
        Permission::create([
            'name'         => 'Navegar usuarios',
            'slug'         => 'users.index',
            'description'  => 'Lista y navega todos los usuarios del sistema',
        ]);

        Permission::create([
            'name'         => 'Ver detalle de usuario',
            'slug'         => 'users.show',
            'description'  => 'Ver en detalle cada usuario del sistema del sistema',
        ]);

        Permission::create([
            'name'         => 'Edicion de usuarios',
            'slug'         => 'users.edit',
            'description'  => 'Editar cualquier dato de un usuario del sistema',
        ]);

        Permission::create([
            'name'         => 'Eliminar usuario',
            'slug'         => 'users.destroy',
            'description'  => 'Eliminar cualquier usuario del sistema',
        ]);

        // Roles

        Permission::create([
            'name'         => 'Navegar roles',
            'slug'         => 'roles.index',
            'description'  => 'Lista y navega todos los roles del sistema',
        ]);

        Permission::create([
            'name'         => 'Ver detalle de rol',
            'slug'         => 'roles.show',
            'description'  => 'Ver en detalle cada rol del sistema',
        ]);

        Permission::create([
            'name'         => 'Creación de roles',
            'slug'         => 'roles.create',
            'description'  => 'Editar cualquier dato de un rol del sistema',
        ]);
        
        Permission::create([
            'name'         => 'Edicion de roles',
            'slug'         => 'roles.edit',
            'description'  => 'Editar cualquier dato de un rol del sistema',
        ]);

        Permission::create([
            'name'         => 'Eliminar rol',
            'slug'         => 'roles.destroy',
            'description'  => 'Eliminar cualquier rol del sistema',
        ]);

         // Products 

         Permission::create([
            'name'         => 'Navegar productos',
            'slug'         => 'productos.index',
            'description'  => 'Lista y navega todos los productos del sistema',
        ]);

        Permission::create([
            'name'         => 'Ver detalle de producto',
            'slug'         => 'productos.show',
            'description'  => 'Ver en detalle cada producto del sistema',
        ]);

        Permission::create([
            'name'         => 'Creación de productos',
            'slug'         => 'productos.create',
            'description'  => 'Editar cualquier dato de un producto del sistema',
        ]);
        
        Permission::create([
            'name'         => 'Edicion de productos',
            'slug'         => 'productos.edit',
            'description'  => 'Editar cualquier dato de un producto del sistema',
        ]);

        Permission::create([
            'name'         => 'Eliminar producto',
            'slug'         => 'productos.destroy',
            'description'  => 'Eliminar cualquier producto del sistema',
        ]);


    }
}
