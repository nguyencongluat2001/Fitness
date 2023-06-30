<?php 

namespace Modules\System\Dashboard\BackupData\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Base\Library;
use Excel;
use Modules\System\Dashboard\BackupData\Export\dataExport;

class BackupDataController extends Controller
{
    public function __construct(

    ){
        
    }
    public function index()
    {
        return view('dashboard.backupdata.index');
    }
    public function loadList(Request $request)
    {
        $dbName = 'fitness';
        $table_name = \DB::select("SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES
        WHERE TABLE_SCHEMA='".$dbName."'");
        $data['datas'] = $table_name;
        return view('dashboard.backupdata.loadList', $data);
    }
    /**
     * Xuất file SQL
     */
    public function exportSQL(Request $request)
    {
        // $input = $request->all();
        // $table_name = $input->table_name;
        // foreach($table_name as $key => $value){
            
        // }
        \Artisan::call('backup:run');
        return array('success' => true);
    }
    /**
     * Xuất file EXCEL
     */
    public function exportEXCEL(Request $request)
    {
        $input = $request->all();
        $table_name = explode(',', $input['table_name']);
        $arrData = [];
        $i = 0;
        foreach($table_name as $key => $value){
            $columns = \DB::select("SHOW COLUMNS FROM " . $value);
            foreach($columns as $column){
                $arrData[$i][$column->Field] = $column->Field;
            }
            $i++;
            $tables = \DB::table($value)->select('*')->get();
            foreach(json_decode($tables, true) as $keyTB => $valueTB){
                $arrData[$i] = $valueTB;
                $i++;
            }
            // $arrData[$key] = array_merge($arrColumn, json_decode($tables, true));
            // $i++;
            if(count($table_name) == 1){
                Excel::store(new dataExport($arrData), date('Y/m/d') . '/dulieubang_' . $value . '.xlsx', 'real_public');
                $url = url('exports') . '/' . date('Y/m/d') . '/dulieubang_' . $value . '.xlsx';
                return $url;
            }
        }

        Excel::store(new dataExport($arrData), date('Y/m/d') . '/dulieubang_fitness.xlsx', 'real_public');
        $url = url('exports') . '/' . date('Y/m/d') . '/dulieubang_fitness.xlsx';
        return $url;
    }
} 