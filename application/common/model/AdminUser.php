<?php
// +----------------------------------------------------------------
// | IAIO [ I'm ALL IN ONE ]
// +----------------------------------------------------------------
// | Powered by http://www.iaio.cn
// +----------------------------------------------------------------
// | Author: 油腻大叔 <gephene@gmail.com>
// +----------------------------------------------------------------


namespace app\common\model;

use think\Model;

class AdminUser extends Model
{
    protected $table = 'my_admin_user';
    protected $name = 'AdminUser';
    protected $pk = 'id';
}