<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FileController extends Controller
{

    // รับค่าการส่งไฟล์ 
    public function upload(Request $req){

        $file = $req->file('uploadfile');
        $name = $req->uploadfilename;
        $randomeName = rand(1001,9999);
        if ($req->hasFile('uploadfile')) {

            $type = $req->uploadfile->extension();
            $namefile =  $randomeName.'.'.$type;
            $size = $file->getClientSize();
            DB::table('files')->insert(
                [
                    'FileName' => $name, 
                    'FileType' => $type, 
                    'FilePath' => $namefile, 
                    'FileSize' => $size/1024, // -> KB 
                ]
            );
 
            $file->move('upload',$namefile);
            echo "upload success";
            return redirect('upload1');
        }

       # $file->getClientSize()
    }


         public function show(){
            $query = DB::table('file')->select('*')->get();
            return view('file.upload',[
                'datatable' => $query,
                'i'=> 1
            ]);
        }
        public function dl(Request $req){
            return response()->download('upload/'.$req->path);
            return response()->download('upload/'.$req->path,$req->name);
            
        }
        public function rm(Request $req){
            $query = DB::table('file')->where('ID','=',$req->ID)->get();
            foreach($query as $row){
                if(unlink('upload/'.$row->FilePath)){
                    DB::table('file')->where('ID','=',$req->ID)->delete();
                }
            }
            return redirect('upload1');
           
        }


    
        //$path = $req->uploadfile->path();
        //echo $path;
        //$extension = $req->photo->extension();
    
}
        
        
        
    



 // end class