<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use mikehaertl\shellcommand\Command;

class ComandosController extends Controller
{
    //
	public function store(Request $request){
	
	$comando=request('comando');
	/*$command = new Command($comando);
	$resultado='';
	if($command->execute()){
		$resultado=$command->getOutput();
	}*/
	$resultado=shell_exec($comando);			
	
	return response($resultado);
	
	}
}
