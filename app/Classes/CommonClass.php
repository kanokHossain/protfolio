<?php


namespace App\Classes;


class CommonClass
{
    public function save($model_name, $array) {
        if(array_key_exists('id' , $array))
            $record = $model_name::find($array['id']);
        else
            $record = new $model_name;

        foreach ($array as $key => $value)
        {
            if($key !== '_token')
                $record->$key = $value;
        }
        $record->save();
        return $record;
    }

    public function edit($model_name,$id){
        return $record = $model_name::find($id);
    }

    public function dateToMysql($date_string) {
        if (is_null($date_string)) {
            return null;
        }
        $date = new \Carbon\Carbon($date_string);
        return $date->format("Y-m-d");
    }

    public function dateToview($date_string) {
        if (is_null($date_string)) {
            return null;
        }
        $date = new \Carbon\Carbon($date_string);
        return $date->format("d-m-Y");
    }

}
