<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
	//atribuir o nome à variável table é opcional, pois o laravel sabe que o nome da tabela
	//será o mesmo da classe com letra minúscula
    protected $table = 'series';
	
	public $timestamps = false;
	
	protected $fillable = array('serie','assistida');
	
	protected $guarded = ['id'];
}
