<?php
/**
 * Created by PhpStorm.
 * User: 44844
 * Date: 2019/11/16
 * Time: 17:21
 * 对微信小程序用户加密数据的解密示例代码.
 */

namespace App\Http\Controllers;

use EasyWeChat\Factory;

 class WechatJSSKD
{

    /*
     * 获取宣城直播公众号开发权限配置
     */
    public static function xczbconfig($debug=false)
    {
        $config = config('wechat.official_account.default');
        $app = Factory::officialAccount($config);

        $apis=array('checkJsApi',
            //分享
            'updateAppMessageShareData',
            'updateTimelineShareData',
            'onMenuShareAppMessage',
            'onMenuShareTimeline',
            //支付
            'chooseWXPay',
            //获取微信地址
            'openAddress'
        );

        return  $app->jssdk->buildConfig($apis,false);

    }



    /*
     * 宣城直播支付
     */
    public function xczbpay()
    {

        $config = [
            // 前面的appid什么的也得保留哦
            'app_id'             => 'xxxx',
            'mch_id'             => 'your-mch-id',
            'key'                => 'key-for-signature',
            'cert_path'          => 'path/to/your/cert.pem', // XXX: 绝对路径！！！！
            'key_path'           => 'path/to/your/key',      // XXX: 绝对路径！！！！
            'notify_url'         => '默认的订单回调地址',     // 你也可以在下单时单独设置来想覆盖它
            // 'device_info'     => '013467007045764',
            // 'sub_app_id'      => '',
            // 'sub_merchant_id' => '',
            // ...
        ];
        $payment = Factory::payment($config);
        $jssdk = $payment->jssdk;
        return $jssdk;
    }





}
