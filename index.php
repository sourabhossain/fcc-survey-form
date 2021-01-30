<?php 

include('db.php');

if (!empty($_GET['update'])) {
    $query = $conn->prepare("SELECT * FROM `registration` WHERE `id` = '".$_GET['id']."' "); 
    $query->execute();
    $fetch_list = $query->fetch(PDO::FETCH_ASSOC); 
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>FCC: Survey Form</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container mt-4 mb-4 p-4">
        <div class="card">
            <h5 class="card-header">FCC: Survey Form</h5>

            <div class="card-body">
                <form action="" method="post" id="register" role="form" autocomplete="off">
                    <input type="hidden" id="id" value="<?= !empty($_GET['update'])? $_GET['id'] : "" ?>">

                    <?php 
                    
                        if (!empty($fetch_list['name'])) {
                            $name = $fetch_list['name'];
                        } else {
                            $name = "";
                        }

                    ?>    

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" required oninvalid="this.setCustomValidity('Please enter your name')" oninput="setCustomValidity('')" value="<?= $name; ?>">
                    </div>

                    <?php 
                    
                        if (!empty($fetch_list['email'])) {
                            $email = $fetch_list['email'];
                        } else {
                            $email = "";
                        }

                    ?>  

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" required oninvalid="this.setCustomValidity('Please enter your email')" oninput="setCustomValidity('')" value="<?= $email; ?>">
                    </div>

                    <?php 
                        
                        if (!empty($fetch_list['age'])) {
                            $age = $fetch_list['age'];
                        } else {
                            $age = "";
                        }

                    ?>  

                    <div class="form-group">
                        <label for="Age">Age</label>
                        <input type="number" class="form-control" name="age" id="age" required oninvalid="this.setCustomValidity('Please enter your age')" oninput="setCustomValidity('')" value="<?= $age; ?>">
                    </div>

                    <div class="form-group">
                        <label for="current_role">Which option best describes your current role?</label>
                        <select class="form-control" id="current_role" name="current_role" required oninvalid="this.setCustomValidity('Please enter your current role')"
                            oninput="setCustomValidity('')">
                            <option value="">Select current role</option>
                            <option <?= (!empty($fetch_list['current_role']) && $fetch_list['current_role'] == "student")?  "selected" : "" ?> value="student">Student</option>
                            <option <?= (!empty($fetch_list['current_role']) && $fetch_list['current_role'] == "job")?  "selected" : "" ?> value="job">Full Time Job</option>
                            <option <?= (!empty($fetch_list['current_role']) && $fetch_list['current_role'] == "learner")?  "selected" : "" ?> value="learner">Full Time Learner</option>
                            <option <?= (!empty($fetch_list['current_role']) && $fetch_list['current_role'] == "not_say")?  "selected" : "" ?> value="not_say">Prefer not to say</option>
                            <option <?= (!empty($fetch_list['current_role']) && $fetch_list['current_role'] == "other")?  "selected" : "" ?> value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="recommend_friend">Would you recommend freeCodeCamp to a friend?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="recommend_friend" id="definitely" value="definitely" required oninvalid="this.setCustomValidity('Please enter your recommend friend')" oninput="setCustomValidity('')" <?= (!empty($fetch_list['recommend_friend']) && $fetch_list['recommend_friend'] == "definitely")?  "checked" : "" ?> >
                            <label class="form-check-label" for="definitely">Definitely</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="recommend_friend" id="maybe" value="maybe" <?= (!empty($fetch_list['recommend_friend']) && $fetch_list['recommend_friend'] == "maybe")?  "checked" : "" ?> >
                            <label class="form-check-label" for="maybe">Maybe</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="recommend_friend" id="not_sure" value="not_sure" <?= (!empty($fetch_list['recommend_friend']) && $fetch_list['recommend_friend'] == "not_sure")?  "checked" : "" ?> >
                            <label class="form-check-label" for="not_sure">Not sure</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="favorite_feature">What is your favorite feature of freeCodeCamp?</label>
                        <select class="form-control" id="favorite_feature" name="favorite_feature" required oninvalid="this.setCustomValidity('Please enter your favorite feature')" oninput="setCustomValidity('')">
                            <option value="">Select an option</option>
                            <option <?= (!empty($fetch_list['favorite_feature']) && $fetch_list['favorite_feature'] == "challenges")?  "selected" : "" ?> value="challenges">Challenges</option>
                            <option <?= (!empty($fetch_list['favorite_feature']) && $fetch_list['favorite_feature'] == "projects")?  "selected" : "" ?> value="projects">Projects</option>
                            <option <?= (!empty($fetch_list['favorite_feature']) && $fetch_list['favorite_feature'] == "community")?  "selected" : "" ?> value="community">Community</option>
                            <option <?= (!empty($fetch_list['favorite_feature']) && $fetch_list['favorite_feature'] == "open_source")?  "selected" : "" ?> value="open_source">Open Source</option>
                        </select>
                    </div>

                    <?php 
                        
                        if (!empty($fetch_list['see_improved'])) {
                            $see_improved = explode(",", $fetch_list['see_improved']);
                        } else {
                            $see_improved = [];
                        }

                    ?>  

                    <div class="form-group">
                        <label for="see_improved">What would you like to see improved? (<small>Check all that apply</small>)</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="front_end_projects" value="front_end_projects" name="see_improved" <?= (!empty($fetch_list['see_improved']) && in_array("front_end_projects", $see_improved))?  "checked" : "" ?> >
                            <label class="form-check-label" for="front_end_projects">Front-end Projects</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="back_end_projects" value="back_end_projects" name="see_improved" <?= (!empty($fetch_list['see_improved']) && in_array("back_end_projects", $see_improved))?  "checked" : "" ?> >
                            <label class="form-check-label" for="back_end_projects">Back-end Projects</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="data_visualization" value="data_visualization" name="see_improved" <?= (!empty($fetch_list['see_improved']) && in_array("data_visualization", $see_improved))?  "checked" : "" ?> >
                            <label class="form-check-label" for="data_visualization">Data Visualization</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="challenges" value="challenges" name="see_improved" <?= (!empty($fetch_list['see_improved']) && in_array("challenges", $see_improved))?  "checked" : "" ?> >
                            <label class="form-check-label" for="challenges">Challenges</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="open_source_community" value="open_source_community" name="see_improved" <?= (!empty($fetch_list['see_improved']) && in_array("open_source_community", $see_improved))?  "checked" : "" ?> >
                            <label class="form-check-label" for="open_source_community">Open Source Community</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gitter" value="gitter" name="see_improved" <?= (!empty($fetch_list['see_improved']) && in_array("gitter", $see_improved))?  "checked" : "" ?> >
                            <label class="form-check-label" for="gitter">Gitter help rooms</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="videos" value="videos" name="see_improved" <?= (!empty($fetch_list['see_improved']) && in_array("Videos", $see_improved))?  "checked" : "" ?> >
                            <label class="form-check-label" for="videos">Videos</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="city_meetups" value="city_meetups" name="see_improved" <?= (!empty($fetch_list['see_improved']) && in_array("city_meetups", $see_improved))?  "checked" : "" ?> >
                            <label class="form-check-label" for="city_meetups">City Meetups</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="wiki" value="wiki" name="see_improved" <?= (!empty($fetch_list['see_improved']) && in_array("wiki", $see_improved))?  "checked" : "" ?> >
                            <label class="form-check-label" for="wiki">Wiki</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="forum" value="forum" name="see_improved" <?= (!empty($fetch_list['see_improved']) && in_array("forum", $see_improved))?  "checked" : "" ?> >
                            <label class="form-check-label" for="forum">Forum</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="additional_courses" value="additional_courses" name="see_improved" <?= (!empty($fetch_list['see_improved']) && in_array("additional_courses", $see_improved))?  "checked" : "" ?> >
                            <label class="form-check-label" for="additional_courses">Additional Courses</label>
                        </div>
                    </div>


                    <?php 
                            
                        if (!empty($fetch_list['suggestions'])) {
                            $suggestions = $fetch_list['suggestions'];
                        } else {
                            $suggestions = "";
                        }

                    ?> 

                    <div class="form-group">
                        <label for="suggestions">Any comments or suggestions?</label>
                        <textarea class="form-control" id="suggestions" rows="5" placeholder="Enter your comment here..." required oninvalid="this.setCustomValidity('Please enter your suggestions')" oninput="setCustomValidity('')"><?= $suggestions; ?></textarea>
                    </div>

                    <input type="submit" class="btn btn-primary" value="<?= !empty($_GET['update'])? 'Update Data' : 'Save Data'; ?>">
                </form>
            </div>
        </div>
    </div>

    <div class="container-fluid mb-4">
        <div class="card">
            <h5 class="card-header">All FCC Survey</h5>
            
            <div class="card-body" id="member_table">
                <?php 
                
                include("member_view.php");

                ?>
            </div>
        </div>
    </div>

    <footer class="text-center mb-3">
        <small>Copyright &copy; 2021 <strong>Sourab Hossain</strong>. All rights reserved.</small>
    </footer>

    <script type="text/javascript">

        function delete_confirm(id) { 
            const confirm = window.confirm("Are you sure?");
            
            if(confirm) {
                $.post("fcc_register.php", {
                    id: id,
                    confirm: 'yes'
                }, (result) => {
                    // alert(result['message']);
                    $('#member_table').load('member_view.php');
                });
            }
        }

    </script>

    <!-- JavaScript -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>