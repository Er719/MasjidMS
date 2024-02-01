<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class UserCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class UserCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\User::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/user');
        CRUD::setEntityNameStrings('user', 'users');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::setFromDb(); // set columns from db columns.

        /**
         * Columns can be defined using the fluent syntax:
         * - CRUD::column('price')->type('number');
         */
         $this->crud->addColumn([
            'name' => 'id',
            'label' => 'User ID',
         ]);
         CRUD::column('name')->type('text')->after('id');
         CRUD::column('role')->type('text')->after('name');
         CRUD::column('email')->type('text')->after('role');
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(UserRequest::class);
        CRUD::setFromDb(); // set fields from db columns.

        /**
         * Fields can be defined using the fluent syntax:
         * - CRUD::field('price')->type('number');
         */
         CRUD::field([   // select_from_array
            'name'        => 'role',
            'label'       => "Role",
            'type'        => 'select_from_array',
            'options'     => ['admin' => 'Admin', 'user' => 'User'],
            'allows_null' => false,
            'default'     => 'user',
            // 'allows_multiple' => true, // OPTIONAL; needs you to cast this to array in your model;
         ]);
         CRUD::field('name')->type('text');
         CRUD::field('email')->type('text');
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        CRUD::setValidation(UserRequest::class);
        // set fields from db columns.

        /**
         * Fields can be defined using the fluent syntax:
         * - CRUD::field('price')->type('number');
         */
         CRUD::field('name')->type('text');
         CRUD::field('email')->type('text');
         CRUD::field([   // select_from_array
            'name'        => 'role',
            'label'       => "Role",
            'type'        => 'select_from_array',
            'options'     => ['admin' => 'Admin', 'user' => 'User'],
            'allows_null' => false,
            'default'     => 'user',
            // 'allows_multiple' => true, // OPTIONAL; needs you to cast this to array in your model;
         ]);
         // Remove the password field for the update operation
         CRUD::addField([
            'name' => 'password',
            'label' => 'password',
            'type' => 'hidden',
            'attributes' => [
               'readonly' => 'readonly',
             ],
        ]);
    }
}
