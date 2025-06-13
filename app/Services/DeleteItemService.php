<?php

namespace App\Services;

use App\Models\EntryCode;
use App\Models\Person;
use App\Models\PersonPermission;
use App\Models\Superviced;
use App\Services\Log\LogService;
use Exception;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DeleteItemService
{
  public static function delete($tb_name, $id)
  {

      $className = 'App\Models\\' . Str::studly(Str::singular($tb_name));


      $model = '';

      if(class_exists($className)) {
          $model = new $className;

      }


      if(!is_string($model)){

          $item = $model->where('id', $id);
          if (!$item) {
            throw new Exception('Սխալ է տեղի ունեցել։');
        }

          $file_path = '';
          $item_db = $item->first();

         

          if(isset($item_db->image)){

            Storage::disk('public')->deleteDirectory("$tb_name/$id");
          }
           elseif(isset($item_db->files) && count($item_db->files) > 0){
                Storage::disk('public')->deleteDirectory("$tb_name/$id");
          }
          else{

                if(isset($item_db->logo)){
                    $file_path = $item_db->logo;
                }

                if(isset($item_db->video)){
                  $file_path = $item_db->video;
                }
                if(isset($item_db->map)){
                  $file_path = $item_db->map;
                }
                if(isset($item_db->path)){
                  $file_path = $item_db->path;
                }

                Storage::delete($file_path);
          }




        // dd($tb_name, $item);

        //   $delete = $item ? $item->delete() : false;

        //   $delete ? LogService::store(null, $id, $tb_name, 'delete') : '';


        //   return $delete;
            return $item->delete();
      }

  }
  public static function entryCodeChangeStatus($entryCodeId){

    $entry_code = EntryCode::where('id',$entryCodeId)->first();
    $entry_code->activation = 0;
    $entry_code->save();

  }
}
