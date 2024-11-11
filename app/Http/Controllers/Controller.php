<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Film;
use App\Models\Pesan;
use Illuminate\Http\Request;
use App\Http\Requests\SquereAreaRequest;
use App\Http\Requests\PesanRequest;
use Carbon\Carbon;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
    }

    public function searchFilm(Request $request)
    {
        if(isset($request->all()['genre'])){
            $data = Film::where('genre','like','%'.$request->all()['genre'].'%')->get();
        }else{
            $data = Film::all();
        }
        if(count($data) == 0){
            $data = [
                'Data Film tidak ada'
            ];
        }
        $result = [
            'status'  => 'success',
            'result'  => array(
                'data' => $data
            )
        ];
        return response()->json($result);
    }
    public function squareArea(SquereAreaRequest $request)
    {
        $post = $request->json()->all();
        $result = [
            'status'  => 'success',
            'result'  => array(
                'data' => $post['lebar'] * $post['panjang']
            )
        ];
        return response()->json($result);
    }
   
    public function pesan(PesanRequest $request)
    {
        $post = $request->json()->all();
        try {
             $save = Pesan::create(array(
                'pesan'=>$post['pesan']
             ));
            
            $result = [
                'status'  => 'success',
                'result'  => "Data Berhasil di simpan"
            ];
          
          } catch (\Exception $e) {
          
            $result = [
                'status'  => 'fail',
                'result'  => $e
            ];
          }
        
        return response()->json($result);
    }
    public function time(Request $request)
    {
            $result = [
                'status'  => 'success',
                'result'  => array(
                    'Tanggal' => Carbon::now()->formatLocalized('%A %d %B %Y %H:%I:%S')
                )
            ];
        
        
        return response()->json($result);
    }
    public function name(Request $request)
    {
        $name = $request->all()['nama'] ?? null;

        try {
           
            $result = [
                'status'  => 'success',
                'result'  => 'Selamat pagi '.$name.' semoga selalu diberikan kelancaran'
            ];
            
            return response()->json($result);
         } catch (\Exception $e) {
         
           $result = [
               'status'  => 'fail',
               'result'  => $e->getMessage()
           ];
           
            return response()->json($result);
         }
       
        
        
    }
    private function mergeSortArray($a,$b){
		$countA = count($a);
        $countB = count($b);
        $d = 0;
        $e = [];
        $f = 0;
        if($countA>$countB){
            $c = $countA;
        }else{
            
            $c = $countB;
        }
        for ($x=0; $x < $c; $x++){
            if(isset($a[$x])&&isset($b[$x])){
                if($a[$x]>$b[$x]){
                    if($b[$x]<$f){
                        $e[$d-1]=$b[$x];
                        $d++;
                    }else{
                        $e[$d] = $b[$x];
                        $d++;
                    }
                    $e[$d] = $a[$x];
                    $f = $a[$x];
                    $d++;
                    
                 }else{
                    if($a[$x]<$f){
                        $e[$d-1]=$a[$x];
                        $d++;
                    }else{
                        $e[$d] = $a[$x];
                        $d++;
                        
                    }
                    $e[$d] = $b[$x];
                    $d++;  
                    $f = $b[$x];
                 }
            }
			 
		}
        return $e;
	}
	private function getMissingData($a,$b){
		$countA = count($a);
        $countB = count($b);
        $d = 0;
        $e = [];
        $f = 0;
        $h = [];
        $g = 0;
       
        if($countA>$countB){
            $c = $countA;
        }else{
            
            $c = $countB;
        }
        for ($x=0; $x < $c; $x++){
            if(isset($a[$x])&&isset($b[$x])){
                if($a[$x]>$b[$x]){
                    if($b[$x]<$f){
                        $h[$g] =  $e[$d-1];
                        $e[$d-1]=$b[$x];
                        $d++;
                        $g++;
                    }else{
                        $e[$d] = $b[$x];
                        $d++;
                    }
                    $e[$d] = $a[$x];
                    $f = $a[$x];
                    $d++;
                    
                 }else{
                    if($a[$x]<$f){
                        $h[$g] =  $e[$d-1];
                        $e[$d-1]=$a[$x];
                        $d++;
                        $g++;
                    }else{
                        $e[$d] = $a[$x];
                        $d++;
                        
                    }
                    $e[$d] = $b[$x];
                    $d++;  
                    $f = $b[$x];
                 }
            }else{
                if(isset($a[$x])){
                    if($h[$g-1]>$a[$x]){
                        $h[$g] = $h[$g-1];
                        $h[$g-1] = $a[$x];
                    }else{
                        $h[$g] = $a[$x];
                    }
                }else{
                    if($h[$g-1]>$b[$x]){
                        $h[$g] = $h[$g-1];
                        $h[$g-1] = $b[$x];
                    }else{
                        $h[$g] = $b[$x];
                    } 
                }
                $g++;
            }
			 
		}
        return $h;
	}
	private function insertMissingData($c,$i){
        $d = array();
        $j = 0;
		foreach ($i as $key => $value) {
            $y = 0;
            foreach ($c as $keys => $values) {
                    if($y == 0){
                        if($value>$values){
                            $d[$j]= $values;
                            $j++;
                        }else{
                            $d[$j]= $value;
                            $j++;
                            $d[$j]= $values;
                            $j++;
                            $y = 1;
                        }
                    }else{
                        $d[$j]= $values;
                    }
               			
            }
            $c = $d;
            $j = 0;
        }
        return $d;
	}
    public function main(){
		$a = array(11, 36, 65, 135, 98);
		$b = array();
		$b[0] = 81;
		$b[1] = 23;
		$b[2] = 50;
		$b[3] = 155;
		
		$c = $this->mergeSortArray($a, $b);
		$i = $this->getMissingData($a, $b);
		$d = $this->insertMissingData($c, $i);
		
		for ($x=0; $x < count($d); $x++){
			echo $d[$x]." ";			
		}
	}

}
