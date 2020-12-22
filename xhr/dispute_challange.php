<?php
if ($f == 'dispute_challange') {
    $html = '';
    if (!empty($_GET['acceptor_id']) && !empty($_GET['creator_id']) && !empty($_GET['challange_id'])) {
        $acceptor_id=$_GET['acceptor_id'];
        $creator_id=$_GET['creator_id'];
        $challange_id=$_GET['challange_id'];
        $data=Dispute_Challange($acceptor_id,$creator_id,$challange_id);
    }
    $data = array(
        'status' => 200,
        'message'=>$data
    );
    header("Content-type: application/json");
    echo json_encode($data);
    exit();
}
