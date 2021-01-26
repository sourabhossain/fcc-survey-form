<?php 
include("db.php");
header('Content-Type: application/json');

if (!empty($_POST['status']) && $_POST['status'] == "insert") {
    
    $name = clean($_POST['name']);
    $email = clean($_POST['email']);
    $age = clean($_POST['age']);
    $current_role = clean($_POST['current_role']);
    $recommend_friend = clean($_POST['recommend_friend']);
    $favorite_feature = clean($_POST['favorite_feature']);
    $suggestions = clean($_POST['suggestions']);
    $datetime   = date("Y/m/d h:i:sa");
    $see_improved = clean($_POST['see_improved']);
    
    if(!empty($name) && !empty($email) && !empty($age) && !empty($current_role) && !empty($recommend_friend) && !empty($favorite_feature) && !empty($suggestions) && !empty($see_improved)) {
        
        $query = $conn->exec("INSERT INTO `registration`
                (
                    `id`, 
                    `name`, 
                    `email`, 
                    `age`, 
                    `current_role`, 
                    `recommend_friend`, 
                    `favorite_feature`, 
                    `suggestions`, 
                    `see_improved`, 
                    `datetime`
                ) 
                VALUES 
                (
                    '0', 
                    '$name', 
                    '$email', 
                    '$age', 
                    '$current_role', 
                    '$recommend_friend', 
                    '$favorite_feature', 
                    '$suggestions', 
                    '$see_improved', 
                    '$datetime'
                ) 
            ");

        $data['message'] = "Successfully Done";

	} else {
        
        $data['message'] = "Field Empty!";

    }
 
    echo json_encode($data);
    exit();
}

?>