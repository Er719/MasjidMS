<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\EventRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class EventCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class EventCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Event::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/event');
        CRUD::setEntityNameStrings('event', 'events');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {

        /**
         * Columns can be defined using the fluent syntax:
         * - CRUD::column('price')->type('number');
         */
         CRUD::column([  // Select
            'label'     => "Admin ID",
            'type'      => 'select',
            'name'      => 'user_id', // the db column for the foreign key
            'entity'    => 'user',
            'model'     => "App\Models\User", // related model
            'attribute' => 'id', // foreign key attribute that is shown to user

         ]);
         CRUD::column([  // Select
            'label'     => "Admin Name",
            'type'      => 'select',
            'name'      => 'user_name', // the db column for the foreign key
            'entity'    => 'user',
            'model'     => "App\Models\User", // related model
            'attribute' => 'name', // foreign key attribute that is shown to user

         ]);
         CRUD::column('name')->type('text')->label('Event Name');
         CRUD::column([
            'name'      => 'image', // The db column name
            'label'     => 'Event Image', // Table column heading
            'type'      => 'image',
            'prefix'    => '',
            'disk'   => 'public',
            // optional width/height if 25px is not ok with you
            'height' => '150px',
            'width'  => '150px',
         ],);
         CRUD::column('description')->type('text');
         CRUD::column('date')->type('datetime');
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(EventRequest::class);

        /**
         * Fields can be defined using the fluent syntax:
         * - CRUD::field('price')->type('number');
         */
         CRUD::addField([
            'name'      => 'user_id',
            'label'     => 'User',
            'type'      => 'select',
            'entity'    => 'user',
            'attribute' => 'name', // Display the user name in the dropdown
            'model'     => 'App\Models\User',
            'attributes' => [
               'id', // Include the user ID as a hidden attribute
            ],
            'allows_null' => false,
            'default'     => 1, // Set a default user ID if needed
         ]);
         CRUD::field('name')->type('text')->label('Event Name');;
         CRUD::field('image')->type('upload')->label('Event Image')->withFiles(true);
         CRUD::field('description')->type('text');
         CRUD::field('date')->type('datetime');
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {   
        CRUD::setValidation(EventRequest::class);
        CRUD::field([  // Select
            'label'     => "Admin ID",
            'type'      => 'select',
            'name'      => 'user_id', // the db column for the foreign key
            'entity'    => 'user',
            'model'     => "App\Models\User", // related model
            'attribute' => 'id', // foreign key attribute that is shown to user
            'attributes' => [
                'disabled' => 'disabled'
            ]
         ]);
         CRUD::field([  // Select
            'label'     => "Admin Name",
            'type'      => 'select',
            'name'      => 'user_name', // the db column for the foreign key
            'entity'    => 'user',
            'model'     => "App\Models\User", // related model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'attributes' => [
                'disabled' => 'disabled'
            ]
         ]);
         CRUD::field('name')->type('text')->label('Event Name');;
         CRUD::field('image')->type('upload')->label('Event Image')->withFiles(true);
         CRUD::field('description')->type('text');
         CRUD::field('date')->type('datetime');
    }
}
