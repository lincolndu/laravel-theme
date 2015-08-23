<?php 
namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model{
	protected $table='comments';
	protected $dateFormat='U';
}



?>