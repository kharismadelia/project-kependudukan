<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Data_kelahiran extends Model
{
	protected $table = "data_kelahiran";

    public function penduduks(){
    	return $this->hasOne('App\Data_penduduk');
    }
}