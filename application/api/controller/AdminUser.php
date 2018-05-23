<?php
// +----------------------------------------------------------------
// | IAIO [ I'm ALL IN ONE ]
// +----------------------------------------------------------------
// | Powered by http://www.iaio.cn
// +----------------------------------------------------------------
// | Author: 油腻大叔 <gephene@gmail.com>
// +----------------------------------------------------------------


namespace app\api\controller;

use app\common\controller\Base;

class AdminUser extends Base
{


    public function adminUserInfo($id = 1)
    {
        $open_id = 'oO059v39zsst76IkuiYV3yMvc4Sw';
        $user_info = model('AdminUser')->getByWeixinOpenid($open_id);
        return $user_info->getdata();
    }

    public function adminUserWithDepartment()
    {
        $open_id = 'oO059v39zsst76IkuiYV3yMvc4Sw';
        $user_info = model('AdminUser')->getByWeixinOpenid($open_id);
        return $user_info->toArray();
    }
}
