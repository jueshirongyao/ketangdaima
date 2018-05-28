<?php
namespace app\admin\controller;

use core\Controller;
use core\view\View;
use Gregwar\Captcha\CaptchaBuilder;
use Gregwar\Captcha\PhraseBuilder;
class Login extends Controller {

    /**
     * 加载登录模板方法
     */
    public function loginForm(){
        if ($_POST){
            //1.判断验证码是否输入正确,如果输入错误,提示验证码错误
//            if (1 == 1){
//                return $this->redirect()->message('验证码输入错误');
//            }
            //判断是否存在当前的用户名和密码
            $info = User::where()->get();


        }


        return View::make();
    }

    /**
     * 生成验证码方法
     */
    public function code(){
        $phraseBuilder = new PhraseBuilder(4,'1234567890');

// Pass it as first argument of CaptchaBuilder, passing it the phrase
// builder
        $builder = new CaptchaBuilder(null, $phraseBuilder);
        $builder->build();
        header('Content-type: image/jpeg');
        $builder->output();
        //将生成的验证码存入session
        $_SESSION['code'] = $builder->getPhrase();
    }

}









?>