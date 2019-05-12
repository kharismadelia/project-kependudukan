<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Data_kematian extends Model
{
	protected $table = "data_kematian";

    public function penduduks(){
    	return $this->belongsTo(Data_penduduk::class, 'id_penduduk', 'id_penduduk');
    }
}