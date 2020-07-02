<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/7/2
 * Time: 17:33
 * Created by PhpStorm.
 */


class Http
{
    private static $client;

    public static function client()
    {
        if (self::$client == null) {
            self::$client = new \GuzzleHttp\Client();
        }
        return self::$client;
    }

    public static function post(string $url, array $options = [])
    {
        $client = self::client();
        $request = $client->post($url, $options);
        $res = $request->getBody()->getContents();
        $ary = json_decode($res,true);
        return [$res,$ary];
    }

    public static function get(string $url, array $options = [])
    {
        $client = self::client();
        $request = $client->get($url, $options);
        $res = $request->getBody()->getContents();
        $ary = json_decode($res,true);
        return [$res,$ary];
    }
}