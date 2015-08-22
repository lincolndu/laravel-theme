<?php 
namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model; 

class Post extends Model{
	protected $table='posts';

	protected function getDateFormat(){
		return 'U';
	}
}

