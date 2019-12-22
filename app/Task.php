<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table='tasks';
    protected $fillable=[
    	'name','content','deadline'
    ];
    var $status_value=['-1'=>'Không làm','0'=>'Chưa làm','1'=>'Đang làm','2'=>'Đã hoàn thành'];
    var $priority_value=['0'=>'Bình thường','1'=>'Quan trọng','2'=>'Khẩn cấp'];
}
