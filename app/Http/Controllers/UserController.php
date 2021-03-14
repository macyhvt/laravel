<?php

namespace App\Http\Controllers;
//namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        //manual Insert into Laravel
        //DB::insert('insert into users(name, email, password) values(?,?,?)',['mike', 'mike@gmail.com','pass']);
        
        //manual update into Laravel
        //DB::update('update users set name="mayank" where id =1');
        //DB::update('update users set name= ? where id =1',['mayank khatri']);
        
        //manual delete into Laravel
        //DB::delete('delete from users where id=1');

        //manual retreive data from Laravel
        //$users = DB::select('select * from users');
        //return $users;

        //with elequont
        /*$user = new User();
        $user->name = 'Macy';
        $user->email = 'Macy@gamil.com';
        $user->password = 'Macy';
        $user->save();*/

        //$selusers = User::all();
        //return $selusers;

        //$deluser=User::where('id',2)->delete();
        $data = [
            'name'=>'manoj',
            'email'=>'kumar@gmail.com',
            //'password'=>bcrypt('pass'),
            'password'=>'pass',
        ];
       // User::create($data);
        
       $selusers = User::all();
        return $selusers;
        return 'I am in User Controller';
    }
}
