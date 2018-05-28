<?php

namespace app\home\controller;

use core\Controller;
use core\model\Model;
use core\view\View;
use system\model\Article;

class Entry extends Controller
{


    public function index()
    {
        //下面所有的方法调用,仅仅是为了测试功能方法是否开发正确,没有任何实际意义
        //调用Model类的get方法获取多条数据
//        $result = Article::where('aid > 30')->get();
//        p($result->toArray());
        //调用获取单条数据方法
//        $result = Article::find(28)->toArray();
//        return View::make()->with('article',$result);
        //比如获取到的post数据是如下数据
//        $post = [
//            'title' => '2018-05-28 后盾96期开课了',
//            'content' => '我是内容!!我是内容!!我是内容!!我是内容!!我是内容!!',
//        ];
//        $result = Article::add($post);
//        p($result);
//        Article::where('aid = 50')->get();
//        $oldData = Article::find(51);

//        $post = [
//        'title' => '我是被修改的标题!!',
//        'content' => '我是被修改的内容!!我是被修改的内容!!我是被修改的内容!!我是被修改的内容!!',
//    ];
//        $result = Article::edit($post);
//        p($result);
//        $result = Article::delete(51);
//        p($result);
        //测试query方法,该方法主要用来处理表关联的sql语句
//        $sql = 'select * from article join article_tag on article.aid = article_tag.aid join tags on article_tag.tid = tags.id';
//        $result = Article::query($sql);
//        p($result->toArray());
        //测试页面跳转方法
//        return $this->redirect()->message('账号或密码错误');
        return View::make()->with('version','版本:v1.0');
    }


}


?>