<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Data_penduduk extends Model
{
	protected $table = "data_penduduk";

    public function kelahirans(){
    	return $this->belongsTo(Data_kelahiran::class, 'id_kelahiran', 'id_kelahiran');
    }
    public function kematians(){
    	return $this->hasOne('App\Data_kematian');
    }
}