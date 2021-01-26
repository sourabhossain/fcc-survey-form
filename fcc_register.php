<?php 
include("db.php");
header('Content-Type: application/json');

// $data = json_decode(stripslashes($_POST['data']));

// foreach($data as $d){
//     echo $d;
// }

if (!empty($_POST['status']) && $_POST['status'] == "insert") {
    
    $patient_id = clean($_POST['p_patient_id']);
	$datetime   = date("Y/m/d h:i:sa");
    
    if(!empty($item_name) && !empty($remarks)) {
        
        $query = $conn->exec("INSERT INTO `registration`(`id`, `name`, `email`, `age`, `current_role`, `recommend_friend`, `favorite_feature`, `suggestions`, `see_improved`, `datetime`) VALUES ('0', '$datetime') ");

        $data['message'] = "Successfully Done";

	} else {
        
        $data['message'] = "Field Empty!";

    }
 
    echo json_encode($data);
    exit();
}

?>