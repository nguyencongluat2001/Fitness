<?php 

namespace Modules\System\Dashboard\BackupData\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Base\Library;
use Excel;

class BackupDataController extends Controller
{
    public function __construct(

    ){
        
    }
    public function index()
    {
        return view('dashboard.backupData.index');
    }
    public function loadList(Request $request)
    {
        $dbName = 'fitness';
        $table_name = \DB::select("SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES
        WHERE TABLE_SCHEMA='".$dbName."'");
        $data['datas'] = $table_name;
        return view('dashboard.backupData.loadList', $data);
    }
    /**
     * Xuất file SQL
     */
    public function exportSQL(Request $request)
    {
        $input = $request->all();
        $table_name = $input->table_name;
        foreach($table_name as $key => $value){
            
        }
    }
    /**
     * Xuất file EXCEL
     */
    public function exportEXCEL(Request $request)
    {
        $input = $request->all();
        $table_name = explode(',', $input['table_name']);
        foreach($table_name as $key => $value){
            $columns = \DB::select("SHOW COLUMNS FROM " . $value);
            foreach($columns as $column){
                $arrColumn[0][$column->Field] = $column->Field;
            }
            $tables = \DB::table($value)->select('*')->get();
            $arrData = array_merge($arrColumn, json_decode($tables, true));
            Excel::store($arrData, date('Y/m/d') . '/dulieubang_' . $value . '.xlsx', 'real_public');
            $url = url('/storage/app/exports') . '/' . date('Y/m/d') . '/dulieubang_' . $value . '.xlsx';
            return $url;
        }
        return false;
    }
} 