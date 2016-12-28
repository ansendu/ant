<?php
/**
 * Created by PhpStorm.
 * User: shenzhe
 * Date: 2016/11/29
 * Time: 11:21
 */
use common\Consts;

return array(
    'soa' => array(
        'register_callback' => 'socket\Handler\Soa::register',
        'drop_callback' => 'socket\Handler\Soa::drop',
        'ip' => '10.94.107.22',
        'port' => 9949,
        'timeOut' => 5000,
        'serviceName' => Consts::MONITOR_SERVER_NAME,
        'serviceIp' => '10.94.107.22',
        'servicePort' => 8891,
        'serverType' => Consts::SERVER_TYPE_UDP,
    ),
);