<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    public $roles;

    public function __construct()
    {
        $this->roles = [
            [
                'title'         => 'Admin',
                'description'   => 'Admin Role',
                'key'           => 'ADMIN',
                'roles'         => json_encode([
                    'ADMIN'
                ])
            ],
            [
                'title'         => 'Member',
                'description'   => 'Member Role',
                'key'           => 'MEMBER',
                'roles'         => json_encode([
                    'VIEW', 'BROWSE'
                ])
            ],
            [
                'title'         => 'Guest',
                'description'   => 'Guest Role',
                'key'           => 'GUEST',
                'roles'         => json_encode([])
            ]
        ];
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->roles as $role){
            if(!(Roles::where('key', '=', $role['key'])->get()[0] ?? false)){
                Roles::create($role);
            }
        }
    }
}
