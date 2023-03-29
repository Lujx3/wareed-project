<?php 
require './vendor/autoload.php';
error_reporting(E_ALL);
ini_set("display_errors", 1);

function sendMsg($phone, $msg){

    $params = array(
        'credentials' => array(
            'key' => 'AKIA35VFE52CWBWKVJEH',
            'secret' => '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',
        ),
        'region' => 'eu-west-3',
        'version' => 'latest'
    );

    $sns = new \Aws\Sns\SnsClient($params);

    $args = array(
        "SenderID" => "1",
        "SMSType" => "Transactional",
        "Message" => $msg,
        "PhoneNumber" => $phone
    );
    
    $sns->publish($args);

}

?>