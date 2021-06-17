<?php

namespace App\Http\Controllers;

use App\Models\ExcelImport;
use Illuminate\Http\Request;

use Maatwebsite\Excel\Facades\Excel;
use App\User;
use Session;
use Hash;

use Image;
use Carbon\Carbon;
use App\Models\import_excle;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ImportExcleController extends Controller
{
    function index()
    {
        $data = DB::table('importexcle3_models')->orderBy('id', 'DESC')->get();
        $user = Auth::user();
        return view('importexcel3', compact('data','user',$user));
    }

    function import(Request $request)
    {

        $this->validate($request, [
            'select_file'  => 'required|mimes:xls,xlsx'
        ],

        [
            'select_file.required' => __('.'),
        ]);

        $file = $request->select_file;
        Excel::import(new ExcelImport ,$file);

        return redirect()->back()->with('success', 'Import successful.!');

    }

    // insert
    public function importInsert(Request $request)
    {
		$request->validate([
            'Stock #'   => 'required',
            'St' => 'required',
            'Loc'  => 'required',
            'Man Order'  => 'required',
            'Slp'   => 'required',
            'Serial' => 'required',
            'Make'  => 'required',
            'Model Name'  => 'required',
            'Line'=>'required',
            'Model Code'   => 'required',
            'Body' => 'required',
            'Colour'  => 'required',
            'Type'  => 'required',
            'Opt1'   => 'required',
            'Opt2' => 'required',
            'Opt3'  => 'required',
            'Opt4'  => 'required',
            'Opt5'   => 'required',
            'Notes' => 'required',
            'Base Cost'  => 'required',
            'Addons'  => 'required',
            'Total Cost'   => 'required',
            'Retail' => 'required',
            'SaleTotal'  => 'required',
            'Stock Date'  => 'required',
            'Order Date'   => 'required',
            'ETA Date' => 'required',
            'FlpDueDate'  => 'required',
            'Bail #'  => 'required',
            'OrderType'   => 'required',
            'SourceNo' => 'required',
            'GOFNo'  => 'required',
            'Program'  => 'required',
            'CRA'   => 'required',
            'Manf Code' => 'required',
            'Manf Desc'  => 'required',
            'PriceList'   => 'required',
            'Desc' => 'required',
            'Status'  => 'required',
            'Safety'  => 'required',
            'Engine#'   => 'required',
            'Manuf#' => 'required',
            'Comp'  => 'required',
            'Built'  => 'required',
            'Traded Cus#'   => 'required',
            'Traded Name' => 'required',
            'Sold Cus#'  => 'required',
            'Sold Name'  => 'required',
            'In Stk'   => 'required',
            'Prohibit' => 'required',
            'Slsp#'  => 'required',
            'SlspName'  => 'required',
            'Alert'   => 'required',
            'Version' => 'required',
            'ColourDesc'  => 'required',
            'Rego'  => 'required',
            'FlpExtDate'   => 'required',
            'Pending' => 'required',
                        ]);
        if($request->get('No'))
        {
            $codesExists = $request->get('No');
            $data = DB::table("importexcle3_models")->where('id', $codesExists)->count();
            if($data > 0)
            {
                return redirect()->back()->with('codesExists',"Exit already.!");
            }
            else
            {
                $importInsert = [
                    'Stock #' 	=>	$request->Stock,
                    'St' 	=>	$request->St,
                   'Loc' 	=>	$request->Loc,
                   'Man Order' =>	$request-> ManOrder,

                   'Slp' 	=>	$request->Slp,
                   'Serial' =>	$request-> Serial,
                   'Make' 	=>	$request->Make,

                   'Model Name' 	=>	$request->ModelName,
                   'Line' =>	$request-> Line,
                   'Model Code' 	=>	$request->ModelCode,

                   'Body' 	=>	$request->Body,
                   'Colour' =>	$request-> Colour,
                   'Type' 	=>	$request->Type,
                   'Opt1' =>	$request-> Opt1,
                   'Opt2' 	=>	$request->Opt2,
                   'Opt3' =>	$request->Opt3,
                   'Opt4' 	=>	$request->Opt4,
                   'Opt5' =>	$request->Opt5,
                   'Notes' 	=>	$request->Notes,
                   'Base Cost' =>	$request->BaseCost,
                   'Addons' 	=>	$request->Addons,
                   'Total Cost' =>	$request-> TotalCost,
                   'Retail' 	=>	$request->Retail,
                   'SaleTotal' =>	$request->SaleTotal,
                   'Disc' 	=>	$request->Disc,
                   'Sold Date' =>	$request-> SoldDate,
                   'Stock Date' =>	$request-> StockDate,
                   'Order Date' 	=>	$request->OrderDate,
                   'ETAD ate' =>	$request-> ETADate,
                   'FlpDueDate' 	=>	$request->FlpDueDate,
                   'Bail #' =>	$request-> Bail,
                   'OrderType' 	=>	$request->OrderType,
                   'SourceNo' =>	$request-> SourceNo,
                   'GOFNo' 	=>	$request->GOFNo,
                   'Program' =>	$request-> Program,
                   'CRA' =>	$request-> CRA,
                   'Manf Code' 	=>	$request->ManfCode,
                   'Manf Desc' 	=>	$request->ManfDesc,
                   'PriceList' =>	$request-> PriceList,
                   'Desc' 	=>	$request->Desc,
                   'Status' =>	$request-> Status,
                   'Safety' 	=>	$request->Safety,
                   'Engine#' =>	$request-> Engine,
                   'Manuf#' 	=>	$request->Manuf,
                   'Comp' =>	$request-> Comp,
                   'Built' 	=>	$request->Built,
                   'Traded Cus#' =>	$request-> TradedCus,
                   'Traded Name' 	=>	$request->TradedName,
                   'Sold Cus#' =>	$request-> SoldCus,
                   'Sold Name' =>	$request-> SoldName,
                   'In Stk' 	=>	$request->InStk,
                   'Prohibit' =>	$request-> Prohibit,
                   'Slsp#' 	=>	$request->Slsp,
                   'Slsp Name' =>	$request-> SlspName,
                   'Alert' 	=>	$request->Alert,
                   'ColourDesc' =>	$request->ColourDesc,
                   'Rego' 	=>	$request->Rego,
                   'FlpExtDate' =>	$request-> FlpExtDate,
                   'Pending' 	=>	$request->Pending,

                ];
                DB::table('importexcle3_models')->insert($importInsert);
                return redirect()->back()->with('importInsert','Insert Sucessful.!');
            }

        }
    }
}
