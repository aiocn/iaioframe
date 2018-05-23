<?php
// +----------------------------------------------------------------
// | IAIO [ I'm ALL IN ONE ]
// +----------------------------------------------------------------
// | Powered by http://www.iaio.cn
// +----------------------------------------------------------------
// | Author: 油腻大叔 <gephene@gmail.com>
// +----------------------------------------------------------------

namespace app\index\controller;

use app\common\controller\Base;
use think\Request;

class Index extends Base
{
    public function index()
    {

        return $this->fetch();
    }

    public function demo(Request $request)
    {
        $data = $request->post();
        dump($data);
        if (model('Member')->save($data)) {
            echo model("Member")->id;
            $this->success('插入数据成功');
        } else {
            $this->error('failed', url('index'));
        }
    }
}