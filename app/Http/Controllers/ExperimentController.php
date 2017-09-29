<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


    
class ExperimentController extends Controller
{
    //veiw
	public function insertform(){
		return view('register');
	}

	//password checker


	public function insert(Request $request){
	$auth_pass = $request->input('password');
	$rep_pass = $request->input('psw-repeat');
	
	//set connections
	$conn = mysqli_connect("localhost", "root", "password", "blog");
	$query = "SELECT user_id FROM users";
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC) ;
			if(is_null($row) || $row === 0){
				//when it is null do this
   			$fname = $request->input('lastname');
			$lname = $request->input('firstname');
			$userid = 0;
			$uname = $request->input('username');
			$pass = $request->input('password');
			DB::insert('INSERT INTO users (user_id,lastName,firstName,username,password) VALUES(?,?,?,?,?)', [$userid,$lname,$fname,$uname,$pass]);
			echo "New account created!";
			mysqli_close($conn);
			}else{
				$max_id = DB::table('users')->max('user_id');
				$inc_maxID = $max_id+1;
				$fname = $request->input('firstname');
				$lname = $request->input('lastname');
				$userid = $inc_maxID;
				$uname = $request->input('username');
				$pass = $request->input('password');
				DB::insert('INSERT INTO users (user_id,lastName,firstName,username,password) VALUES(?,?,?,?,?)', [$userid,$lname,$fname,$uname,$pass]);
				echo "New account created!";
				mysqli_close($conn);
			}




	}
}

