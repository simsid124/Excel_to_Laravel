<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\study_scheme_import;

class study_scheme_controller extends Controller
{
    public function index(){
        return view('index');
    }

    public function importExcelData(Request $request){
        $request->validate([
            'import_file' => [
                'required',
                'file'
            ]
        ]);

        Excel::import(new study_scheme_import, $request->file('import_file'));

        return redirect()->back()->with('status', 'Imported Successfully.');
    }
}
