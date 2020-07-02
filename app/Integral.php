<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/7/2
 * Time: 17:13
 * Created by PhpStorm.
 */

class Integral implements IntegralInterface
{
    public function action()
    {
        $methods = get_class_methods('IntegralInterface');

        foreach ($methods as $method) {
            $this->$method();
        }
    }

    public function signIn()
    {
        $options = [
            'headers' => [
                'Cookie' => constant('cookie')
            ]
        ];

        $res = Http::get(IntegralInterface::SIGN_IN_URL, $options);
        var_dump($res);
        return $res;
    }

    public function getArticle()
    {
        return;
    }

    private function getArticleIds()
    {
        // TODO: Implement getArticle() method.
        $options = [
            'headers' => [
                'Cookie' => constant('cookie')
            ]
        ];

        list($res, $ary) = Http::post(IntegralInterface::GET_ARTICLE_URL, $options);

        return array_column($ary['data'], 'id');
    }

    public function readArticle()
    {
        $ids = $this->getArticleIds();
        var_dump("获取文章ID", $ids);
        foreach ($ids as $id) {
            var_dump("当前文章ID", $id);
            $options = [
                'headers' => [
                    'Cookie' => constant('cookie')
                ],
                'form_params' => [
                    'id' => $id
                ]
            ];
            $res = Http::post(IntegralInterface::READ_ARTICLE_URL, $options);
            var_dump($res);
        }
        return;
    }

    public function earn()
    {
        $options = [
            'headers' => [
                'Cookie' => constant('cookie')
            ]
        ];

        $res = Http::post(IntegralInterface::EARN_URL, $options);
        var_dump($res);
        return $res;
    }

    public function lottery()
    {
        $options = [
            'headers' => [
                'Cookie' => constant('cookie')
            ]
        ];

        $res = Http::get(IntegralInterface::LOTTERY_URL, $options);
        var_dump($res);
        return $res;
    }
}