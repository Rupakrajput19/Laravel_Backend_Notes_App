<?php
/**
 * Created by PhpStorm.
 * User: Dell-pc
 * Date: 8/13/2021
 * Time: 11:57 AM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Kyslik\ColumnSortable\Sortable;

class User extends Model{
    protected $fillable = [
        // 'name',
        // 'email',
        // 'mobile',
        // 'password',
	];
	protected $table = 'user_data';	
}