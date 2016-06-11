<?php
/***********************************************************
 *     FileName: IndexController.class.php
 *         Desc: Layer插件测试入口
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-06-11 23:19:33
 *      History:
 ***********************************************************/

namespace Layer\Controller;
use Think\Controller;
class IndexController extends Controller {
    /**
     * 示例：http://layer.layui.com/hello.html
     * http://123.56.21.232:8082/index.php?m=layer
     * http://123.56.21.232:8082/index.php?m=layer&c=index&a=index
     */
    public function index(){
        $this->display(); //访问页面Application/Layer/View/Index/index.html
    }

    /**
     * http://123.56.21.232:8082/index.php?m=layer&c=index&a=demo
     */
    public function demo(){
        $this->display(); //访问页面Application/Layer/View/Index/demo.html
    }

}
