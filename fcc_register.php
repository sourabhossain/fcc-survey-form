<?php 
include("db.php");
header('Content-Type: application/json');
date_default_timezone_set('Asia/Dhaka');

if (!empty($_POST['status']) && $_POST['status'] == "insert") {
    
    $name             = clean($_POST['name']);
    $email            = clean($_POST['email']);
    $age              = clean($_POST['age']);
    $current_role     = clean($_POST['current_role']);
    $recommend_friend = clean($_POST['recommend_friend']);
    $favorite_feature = clean($_POST['favorite_feature']);
    $suggestions      = clean($_POST['suggestions']);
    $see_improved     = clean($_POST['see_improved']);
    $datetime         = date('m-d-Y h:i:sa', time());
    
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
        
        if ($query) {

            $data['message'] = "Saved_Successfully";

        } else {
            
            $data['message'] = "Saved_Failed";
            
        }
	} else {
        
        $data['message'] = "Field_Empty";

    }
 
    echo json_encode($data);
    exit();
}

if (!empty($_POST['status']) && $_POST['status'] == "update") {
    
    $id               = clean($_POST['id']);
    $name             = clean($_POST['name']);
    $email            = clean($_POST['email']);
    $age              = clean($_POST['age']);
    $current_role     = clean($_POST['current_role']);
    $recommend_friend = clean($_POST['recommend_friend']);
    $favorite_feature = clean($_POST['favorite_feature']);
    $suggestions      = clean($_POST['suggestions']);
    $see_improved     = clean($_POST['see_improved']);
    $datetime         = date('m-d-Y h:i:sa', time());
    
    if(!empty($id) && !empty($name) && !empty($email) && !empty($age) && !empty($current_role) && !empty($recommend_friend) && !empty($favorite_feature) && !empty($suggestions) && !empty($see_improved)) {
        
        $query = $conn->prepare("UPDATE `registration` 
                        SET 
                            `name`             = '$name',
                            `email`            = '$email',
                            `age`              = '$age',
                            `current_role`     = '$current_role',
                            `recommend_friend` = '$recommend_friend',
                            `favorite_feature` = '$favorite_feature',
                            `suggestions`      = '$suggestions',
                            `see_improved`     = '$see_improved',
                            `datetime`         = '$datetime'
                        WHERE `id` = '$id' ");
        $query->execute();
        
        if ($query) {

            $data['message'] = "Update_Successfully";

        } else {
            
            $data['message'] = "Update_Failed";
            
        }
	} else {
        
        $data['message'] = "Field_Empty";

    }
 
    echo json_encode($data);
    exit();
}

if (!empty($_POST['confirm']) && $_POST['confirm'] == "yes") {
    $query = $conn->prepare("DELETE FROM `registration` WHERE `id` = '".$_POST['id']."' "); 
    $query->execute();

    if ($query) {
        $data['message'] = "Delete_Successfully";
    } else {
        $data['message'] = "Delete_Field";
    }

    echo json_encode($data);
    exit();
}

?>