<?php 

namespace app\Controller;

use app\core\Home_Controller;
/**
 * 默认控制器
 */
class IndexController extends Home_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		view('home/index', ['c' => get('c')]);
	}

    /**
     * 验证申请参数
     * @param  array $data 申请参数
     */
    private function _ckeckData($data)
    {
        if(empty($data['username'])) {
            ajaxReturn(202, '请填写姓名');
        }
        if(empty($data['phone'])) {
            ajaxReturn(202, '请填写手机号码');
        }else {
            if($this->checkPhoneNumber($data['phone']) == false) {
                ajaxReturn(202, '请填写正确的手机号码');
            }
        }
    }

    /**
     * 提交申请
     */
    public function submitContect()
    {
        $postData = post();
        $this->_ckeckData($postData);
        
        $postData['time'] = time();
        $postData['ip']   = getIp();
        parent::$model->insert('contect', $postData);
        
        if(parent::$model->id()) {
            ajaxReturn(200);
        }else {
            ajaxReturn(202, '申请失败');
        }
    }

    /**
     * 验证留言板参数
     * @param  array $data 申请参数
     */
    public function _checkBoard($data)
    {
        if(empty($data['username'])) {
            ajaxReturn(202, '请填写姓名');
        }
        if(empty($data['phone'])) {
            ajaxReturn(202, '请填写手机号码');
        }else {
            if($this->checkPhoneNumber($data['phone']) == false) {
                ajaxReturn(202, '请填写正确的手机号码');
            }
        }
        if(!empty($data['email'])) {
            
        }
        if(empty($data['contect'])) {
            ajaxReturn(202, '请填写留言内容');
        }
    }

    /**
     * 留言板页面
     */
    public function board()
    {
        if(post()) {
            $postData = post();
            $this->_checkBoard($postData);
            $postData['time'] = time();
            $postData['ip']   = getIp();

            parent::$model->insert('board', $postData);
            if(parent::$model->id()) {
                ajaxReturn(200);
            }else {
                ajaxReturn(202, '申请失败');
            }
        }else {
            view('home/board');
        }
        
    }

}