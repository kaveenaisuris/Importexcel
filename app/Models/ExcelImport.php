<?php

namespace App\Models;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;

class ExcelImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        DB::table('importexcle3_models')->truncate();
        foreach($collection as $key => $value)
        {
            if($key > 0)
            {
                DB::table('importexcle3_models')->insert([

                    'Stock'	   =>$value[0]
                    ,'St'    =>$value[1]
                    ,'Loc'     =>$value[2]
                    ,'ManOrder'     =>$value[3]
                    ,'Slp'    =>$value[4]
                    ,'Serial'     =>$value[5]
                    ,'Make'     =>$value[6]
                    ,'ModelName'    =>$value[7]
                    ,'Line'     =>$value[8]
                    ,'ModelCode'     =>$value[9]
                    ,'Body'     =>$value[10]
                    ,'Colour'    =>$value[11]
                    ,'Type'     =>$value[12]
                    ,'Opt1'     =>$value[13]
                    ,'Opt2'    =>$value[14]
                    ,'Opt3'     =>$value[15]
                    ,'Opt4'     =>$value[16]
                    ,'Opt5'    =>$value[17]
                    ,'Notes'     =>$value[18]
                    ,'BaseCost'     =>$value[19]
                    ,'Addons'    =>$value[20]
                    ,'TotalCost'     =>$value[21]
                    ,'Retail'     =>$value[22]
                    ,'SaleTotal'    =>$value[23]
                    ,'Disc'     =>$value[24]
                    ,'SoldDate'     =>$value[25]
                    ,'StockDate'    =>$value[26]
                    ,'OrderDate'     =>$value[27]
                    ,'ETADate'     =>$value[28]
                    ,'FlpDueDate'    =>$value[29]
                    ,'Bail'     =>$value[30]
                    ,'OrderType'     =>$value[31]
                    ,'SourceNo'    =>$value[32]
                    ,'GOFNo'     =>$value[33]
                    ,'Program'     =>$value[34]
                    ,'CRA'    =>$value[35]
                    ,'ManfCode'     =>$value[36]
                    ,'ManfDesc'     =>$value[37]
                    ,'PriceList'    =>$value[38]
                    ,'Desc'     =>$value[39]
                    ,'Status'     =>$value[40]
                    ,'Safety'    =>$value[41]
                    ,'Engine#'     =>$value[42]
                    ,'Manuf#'     =>$value[43]
                    ,'Comp'    =>$value[44]
                    ,'Built'     =>$value[45]
                    ,'TradedCus'     =>$value[46]
                    ,'TradedName'    =>$value[47]
                    ,'SoldCus'     =>$value[48]
                    ,'SoldName'     =>$value[49]
                    ,'InStk'    =>$value[50]
                    ,'Prohibit'     =>$value[51]
                    ,'Slsp'     =>$value[52]
                    ,'SlspName'    =>$value[53]
                    ,'Alert'     =>$value[54]
                    ,'Version'     =>$value[55]
                    ,'ColourDesc'    =>$value[56]
                    ,'Rego'     =>$value[57]
                    ,'FlpExtDate'     =>$value[58]
                    ,'Pending'    =>$value[59]

                ]);
            }
        }
    }
}
