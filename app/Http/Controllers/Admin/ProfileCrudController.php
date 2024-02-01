<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProfileRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ProfileCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProfileCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Profile::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/profile');
        CRUD::setEntityNameStrings('profile', 'profiles');
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
            'label'     => "User ID",
            'type'      => 'select',
            'name'      => 'user_id', // the db column for the foreign key
            'entity'    => 'user',
            'model'     => "App\Models\User", // related model
            'attribute' => 'id', // foreign key attribute that is shown to user

         ]);
         CRUD::column([  // Select
            'label'     => "User Name",
            'type'      => 'select',
            'name'      => 'user_name', // the db column for the foreign key
            'entity'    => 'user',
            'model'     => "App\Models\User", // related model
            'attribute' => 'name', // foreign key attribute that is shown to user

         ]);

         CRUD::setFromDb();
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ProfileRequest::class);

        /**
         * Fields can be defined using the fluent syntax:
         * - CRUD::field('price')->type('number');
         */

         CRUD::field([  // Select
            'label'     => "User ID",
            'type'      => 'select',
            'name'      => 'user_id', // the db column for the foreign key
            'entity'    => 'user',
            'model'     => "App\Models\User", // related model
            'attribute' => 'id', // foreign key attribute that is shown to user

         ]);
         CRUD::field([  // Select
            'label'     => "User Name",
            'type'      => 'select',
            'name'      => 'user_name', // the db column for the foreign key
            'entity'    => 'user',
            'model'     => "App\Models\User", // related model
            'attribute' => 'name', // foreign key attribute that is shown to user

         ]);
         CRUD::field('no_kad_pengenalan')->type('number')->label('No. Kad Pengenalan');
         CRUD::field([   
            'name'        => 'kewarganegaraan',
            'label'       => "Kewarganegaraan",
            'type'        => 'select_from_array',
            'options'     => ['Warganegara' => 'Warganegara', 'Penduduk Tetap' => 'Penduduk Tetap', 'Bukan Warganegara' => 'Bukan Warganegara'],
            'allows_null' => false,
            'default'     => 'Warganegara',
         ]);
         CRUD::field('alamat_dalam_kad_pengenalan')->type('text')->label('Alamat Dalam Kad Pengenalan');
         CRUD::field('alamat_tempat_tinggal_sekarang')->type('text')->label('Alamat Tempat Tinggal Sekarang');
         CRUD::field('no_telefon')->type('number')->label('No. Telefon');
         CRUD::field([  
            'name'        => 'status_perkahwinan',
            'label'       => "Status Perkahwinan",
            'type'        => 'select_from_array',
            'options'     => ['Bujang' => 'Bujang', 'Sudah Berkahwin' => 'Sudah Berkahwin'],
            'allows_null' => false,
            'default'     => 'Bujang',
         ]);
         CRUD::field([   
            'name'        => 'jenis_pemilikan_kediaman',
            'label'       => "Jenis Pemilikan Kediaman",
            'type'        => 'select_from_array',
            'options'     => ['Rumah Sendiri' => 'Rumah Sendiri', 'Menyewa' => 'Menyewa'],
            'allows_null' => false,
            'default'     => 'Rumah Sendiri',
         ]);
         CRUD::field([  
            'name'        => 'kategori_pekerjaan',
            'label'       => "Kategori Pekerjaan",
            'type'        => 'select_from_array',
            'options'     => ['Pengurus' => 'Pengurus',
                              'Profesional' => 'Profesional', 
                              'Juruteknik dan Profesional Bersekutu' => 'Juruteknik dan Profesional Bersekutu',
                              'Pekerja Sokongan Perkeranian' => 'Pekerja Sokongan Perkeranian',
                              'Pekerja Perkhidmatan dan Jualan' => 'Pekerja Perkhidmatan dan Jualan',
                              'Pekerja Kemahiran Pertanian, Perhutanan, Penternakan' => 'Pekerja Kemahiran Pertanian, Perhutanan, Penternakan',
                              'Pekerja Kemahiran dan Pekerja Pertukangan Yang Berkaitan' => 'Pekerja Kemahiran dan Pekerja Pertukangan Yang Berkaitan',
                              'Operator Mesin dan Loji dan Pemasang' => 'Operator Mesin dan Loji dan Pemasang',
                              'Pekerja Asas' => 'Pekerja Asas',
                              'Angkatan Tentera' => 'Angkatan Tentera',
                              'Pesara' => 'Pesara'],
            'allows_null' => false,
            'default'     => 'Pengurus',
         ]);
         CRUD::field([   
            'name'        => 'surau_kariah',
            'label'       => "Surau Kariah",
            'type'        => 'select_from_array',
            'options'     => ['Surau Kampung Simpang Empat' => 'Surau Kampung Simpang Empat', 
                              'Surau Kampung Lubuk Salak' => 'Surau Kampung Lubuk Salak',
                              'Surau Kampung Ketoyong' => 'Surau Kampung Ketoyong',
                              'Surau Kampung Berop' => 'Surau Kampung Berop',
                              'Surau Kampung Kubu' => 'Surau Kampung Kubu',
                              'Surau Kampung Mogah' => 'Surau Kampung Mogah',
                              'Surau Khairiah, Taman Hijau' => 'Surau Khairiah, Taman Hijau',
                              'Surau Hidayah, Jalan Mustafa Raja Kamala' => 'Surau Hidayah, Jalan Mustafa Raja Kamala',
                              'Surau Annur Taman Wangsa' => 'Surau Annur Taman Wangsa'],
            'allows_null' => false,
            'default'     => 'surau1',
         ]);
         CRUD::field([   
            'name'        => 'bilangan_isi_rumah',
            'label'       => "Bilangan Isi Rumah",
            'type'        => 'select_from_array',
            'options'     => ['1' => '1', 
                              '2' => '2',
                              '3' => '3',
                              '4' => '4',
                              '5' => '5',
                              '6' => '6',
                              '7' => '7',
                              '8' => '8',
                              '9' => '9',
                              '10' => '10'],
            'allows_null' => false,
            'default'     => '1',
         ]);
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {   
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
         CRUD::field('no_kad_pengenalan')->type('number')->label('No. Kad Pengenalan');
         CRUD::field([   
            'name'        => 'kewarganegaraan',
            'label'       => "Kewarganegaraan",
            'type'        => 'select_from_array',
            'options'     => ['Warganegara' => 'Warganegara', 'Penduduk Tetap' => 'Penduduk Tetap', 'Bukan Warganegara' => 'Bukan Warganegara'],
            'allows_null' => false,
            'default'     => 'Warganegara',
         ]);
         CRUD::field('alamat_dalam_kad_pengenalan')->type('text')->label('Alamat Dalam Kad Pengenalan');
         CRUD::field('alamat_tempat_tinggal_sekarang')->type('text')->label('Alamat Tempat Tinggal Sekarang');
         CRUD::field('no_telefon')->type('number')->label('No. Telefon');
         CRUD::field([  
            'name'        => 'status_perkahwinan',
            'label'       => "Status Perkahwinan",
            'type'        => 'select_from_array',
            'options'     => ['Bujang' => 'Bujang', 'Sudah Berkahwin' => 'Sudah Berkahwin'],
            'allows_null' => false,
            'default'     => 'Bujang',
         ]);
         CRUD::field([   
            'name'        => 'jenis_pemilikan_kediaman',
            'label'       => "Jenis Pemilikan Kediaman",
            'type'        => 'select_from_array',
            'options'     => ['Rumah Sendiri' => 'Rumah Sendiri', 'Menyewa' => 'Menyewa'],
            'allows_null' => false,
            'default'     => 'Rumah Sendiri',
         ]);
         CRUD::field([  
            'name'        => 'kategori_pekerjaan',
            'label'       => "Kategori Pekerjaan",
            'type'        => 'select_from_array',
            'options'     => ['Pengurus' => 'Pengurus',
                              'Profesional' => 'Profesional', 
                              'Juruteknik dan Profesional Bersekutu' => 'Juruteknik dan Profesional Bersekutu',
                              'Pekerja Sokongan Perkeranian' => 'Pekerja Sokongan Perkeranian',
                              'Pekerja Perkhidmatan dan Jualan' => 'Pekerja Perkhidmatan dan Jualan',
                              'Pekerja Kemahiran Pertanian, Perhutanan, Penternakan' => 'Pekerja Kemahiran Pertanian, Perhutanan, Penternakan',
                              'Pekerja Kemahiran dan Pekerja Pertukangan Yang Berkaitan' => 'Pekerja Kemahiran dan Pekerja Pertukangan Yang Berkaitan',
                              'Operator Mesin dan Loji dan Pemasang' => 'Operator Mesin dan Loji dan Pemasang',
                              'Pekerja Asas' => 'Pekerja Asas',
                              'Angkatan Tentera' => 'Angkatan Tentera',
                              'Pesara' => 'Pesara'],
            'allows_null' => false,
            'default'     => 'Pengurus',
         ]);
         CRUD::field([   
            'name'        => 'surau_kariah',
            'label'       => "Surau Kariah",
            'type'        => 'select_from_array',
            'options'     => ['Surau Kampung Simpang Empat' => 'Surau Kampung Simpang Empat', 
                              'Surau Kampung Lubuk Salak' => 'Surau Kampung Lubuk Salak',
                              'Surau Kampung Ketoyong' => 'Surau Kampung Ketoyong',
                              'Surau Kampung Berop' => 'Surau Kampung Berop',
                              'Surau Kampung Kubu' => 'Surau Kampung Kubu',
                              'Surau Kampung Mogah' => 'Surau Kampung Mogah',
                              'Surau Khairiah, Taman Hijau' => 'Surau Khairiah, Taman Hijau',
                              'Surau Hidayah, Jalan Mustafa Raja Kamala' => 'Surau Hidayah, Jalan Mustafa Raja Kamala',
                              'Surau Annur Taman Wangsa' => 'Surau Annur Taman Wangsa'],
            'allows_null' => false,
            'default'     => 'surau1',
         ]);
         CRUD::field([   
            'name'        => 'bilangan_isi_rumah',
            'label'       => "Bilangan Isi Rumah",
            'type'        => 'select_from_array',
            'options'     => ['1' => '1', 
                              '2' => '2',
                              '3' => '3',
                              '4' => '4',
                              '5' => '5',
                              '6' => '6',
                              '7' => '7',
                              '8' => '8',
                              '9' => '9',
                              '10' => '10'],
            'allows_null' => false,
            'default'     => '1',
         ]);
    }
}
