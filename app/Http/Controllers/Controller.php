<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

use DB;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



    public function insert(Request $req)

    {
    	$isim = $req->input('isim');

		$soyisim = $req->input('soyisim');
    	
		$data= array('isim'=>$isim , 'soyisim'=>$soyisim );

		DB::table('posta')->insert($data);

		echo 'başarılı';
    }
}
