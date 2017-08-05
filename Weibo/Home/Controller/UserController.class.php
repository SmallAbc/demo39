<?php
/**
 * Created by PhpStorm.
 * User: Wang Yuan
 * Date: 2017/8/4
 * Time: 14:43
 */

namespace home\Controller;

use Think\Controller;
use Home\Model\UserModel;

//use Think\Model;  /*使用M()方法就不用引入命名空间*/

class UserController extends Controller
{
    public function index()
    {
        echo 'hello user!';
    }

    public function test($user, $pass)
    {
        echo $user . '<br\>' . $pass;
    }


    public function model()
    {

        //创建Model基类,传递user表
//        $user=new Model('User');
//        $user=M('User');
//       $user=new UserModel();
//        $condition=new \stdClass();
//        $condition->id='1';
//        $condition->user='A++';
//        $condition->_logic='OR';
//        var_dump($user->WHERE($condition)->select());
//        $user=M('User');
//        $map['user']=array('LIKE','%A%');
//        $map['user']=array('NOTLIKE','%A%');
//        $map['user']=array('LIKE',array('%A%','%j%'),'AND');
//        $map['user']=array('LIKE',array('%A%','%j%'),'OR');
//        var_dump($user->WHERE($map)->select());
        $user = M('User');
//        $map['user|email']=array('eq','蜡笔小新');
//        $map['user&email']=array('eq','蜡笔小新');
        $map['id'] = array(array('gt', 1), array('lt', 3), 'OR');
        var_dump($user->WHERE($map)->select());
        $user2 = M('user');
        $user->create();
    }

}