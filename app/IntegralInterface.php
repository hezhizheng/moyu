<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/7/2
 * Time: 17:04
 * Created by PhpStorm.
 */

interface IntegralInterface
{
    const SIGN_IN_URL = 'https://wx.99.com/ucenter/index/activity/signIn/index';

    const LOTTERY_URL = 'http://wx.99.com/ucenter/index/activity/lottery/index/lotto';

    const GET_ARTICLE_URL = 'https://wx.99.com/ucenter/index/activity/readme/index/getArticles.html';

    const READ_ARTICLE_URL = 'https://wx.99.com/ucenter/index/activity/readme/index/readMe.html';

    const EARN_URL = 'https://wx.99.com/ucenter/index/activity/_2018/_09/redpacket/earn';

    public function signIn();

    public function getArticle();

    public function readArticle();

    public function earn();

    public function lottery();
}