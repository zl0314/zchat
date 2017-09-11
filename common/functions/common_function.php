<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 2017/6/27
 * Time: 16:57
 */
/**
 * 执行成功输出, 用ajax请求输出JSON数据
 * @param array $data
 * @param string $message
 * @param boolean $is_app
 * @param int $success
 */
function success($data = array() , $message = '', $success = '1'){
    $result = array(
        'success' => $success,
        'data' => $data,
        'message' => $message,
    );
    if(!is_array($data)){
        $result['message'] = $data;
    }
    if(is_array($message)){
        $result['data'] = $message;
        $result['message'] = !empty($message['message']) ? $message['message'] : $message;
    }
    echo json_encode( $result );exit;
}

/**
 * 执行失败输出, 用ajax请求输出JSON数据
 * @param array $data
 * @param string $message
 * @param boolean $is_app
 * @param int $success
 */
function fail($message = '', $data = array()){
    success($data, $message,'0');
}