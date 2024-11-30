<?php
if(isset($_POST['orderId'])){
    $order_id = $_POST['orderId'];
    $status_id = $_POST['orderStatus'];
    orders_update($status_id,$order_id);
    $status_result = select_status_by_id($status_id);
    if($status_result['status_id'] == 5){
        $time = date('Y-m-d H:i:s');
        update_completed($time,$order_id);
    }
    echo json_encode($status_result);
}