<?php
/**
 * Created by PhpStorm.
 * User: hengliu
 * Date: 2019/5/13
 * Time: 10:56 AM
 */


namespace okv3;

class Config{
    public static $config=[
        "apiKey"=>"",
        "apiSecret"=>"",
        "passphrase"=>"",
    ];

    /**
     * @var int
     * 0 不debug
     * 1 全部debug
     * 2 jsut response body
     */
    public static $debug=0;
}
