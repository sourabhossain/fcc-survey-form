<?php 

include('db.php');

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
    <div class="container-fluid mt-4 mb-4 p-4">
        <div class="card">
            <h5 class="card-header">FCC: Survey Form</h5>

            <div class="card-body">
                <form action="" method="post" id="register" role="form" autocomplete="off">
                    <input type="hidden" id="id" value="<?= !empty($_GET['update'])? $_GET['id'] : "" ?>">

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" required oninvalid="this.setCustomValidity('Please enter your name')" oninput="setCustomValidity('')">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" required oninvalid="this.setCustomValidity('Please enter your email')" oninput="setCustomValidity('')">
                    </div>

                    <div class="form-group">
                        <label for="Age">Age</label>
                        <input type="number" class="form-control" name="age" id="age" required oninvalid="this.setCustomValidity('Please enter your age')" oninput="setCustomValidity('')">
                    </div>

                    <div class="form-group">
                        <label for="current_role">Which option best describes your current role?</label>
                        <select class="form-control" id="current_role" name="current_role" required oninvalid="this.setCustomValidity('Please enter your current role')"
                            oninput="setCustomValidity('')">
                            <option value="">Select current role</option>
                            <option value="student">Student</option>
                            <option value="job">Full Time Job</option>
                            <option value="learner">Full Time Learner</option>
                            <option value="not_say">Prefer not to say</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="recommend_friend">Would you recommend freeCodeCamp to a friend?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="recommend_friend" id="definitely" value="definitely" required oninvalid="this.setCustomValidity('Please enter your recommend friend')" oninput="setCustomValidity('')">
                            <label class="form-check-label" for="definitely">Definitely</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="recommend_friend" id="maybe" value="maybe">
                            <label class="form-check-label" for="maybe">Maybe</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="recommend_friend" id="not_sure" value="not_sure">
                            <label class="form-check-label" for="not_sure">Not sure</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="favorite_feature">What is your favorite feature of freeCodeCamp?</label>
                        <select class="form-control" id="favorite_feature" name="favorite_feature" required oninvalid="this.setCustomValidity('Please enter your favorite feature')" oninput="setCustomValidity('')">
                            <option value="">Select an option</option>
                            <option value="challenges">Challenges</option>
                            <option value="projects">Projects</option>
                            <option value="community">Community</option>
                            <option value="open_source">Open Source</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="see_improved">What would you like to see improved? (<small>Check all that apply</small>)</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="front_end_projects" value="front_end_projects" name="see_improved">
                            <label class="form-check-label" for="front_end_projects">Front-end Projects</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="back_end_projects" value="back_end_projects" name="see_improved">
                            <label class="form-check-label" for="back_end_projects">Back-end Projects</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="data_visualization" value="data_visualization" name="see_improved">
                            <label class="form-check-label" for="data_visualization">Data Visualization</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="challenges" value="challenges" name="see_improved">
                            <label class="form-check-label" for="challenges">Challenges</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="open_source_community" value="open_source_community" name="see_improved">
                            <label class="form-check-label" for="open_source_community">Open Source Community</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gitter" value="gitter" name="see_improved">
                            <label class="form-check-label" for="gitter">Gitter help rooms</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="videos" value="videos" name="see_improved">
                            <label class="form-check-label" for="videos">Videos</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="city_meetups" value="city_meetups" name="see_improved">
                            <label class="form-check-label" for="city_meetups">City Meetups</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="wiki" value="wiki" name="see_improved">
                            <label class="form-check-label" for="wiki">Wiki</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="forum" value="forum" name="see_improved">
                            <label class="form-check-label" for="forum">Forum</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="additional_courses" value="additional_courses" name="see_improved">
                            <label class="form-check-label" for="additional_courses">Additional Courses</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="suggestions">Any comments or suggestions?</label>
                        <textarea class="form-control" id="suggestions" rows="5" placeholder="Enter your comment here..." required oninvalid="this.setCustomValidity('Please enter your suggestions')" oninput="setCustomValidity('')"></textarea>
                    </div>

                    <input type="submit" class="btn btn-primary" value="<?= !empty($_GET['update'])? 'Update Data' : 'Save Data'; ?>">
                </form>
            </div>
        </div>
    </div>

    <div class="container-fluid mb-4">
        <div class="card">
            <h5 class="card-header">All FCC Survey</h5>
            
            <div class="card-body">
                <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th class="text-center" width="8%">Action</th>
                            <th class="text-center" width="12%">Name</th>
                            <th class="text-center" width="12%">Email</th>
                            <th class="text-center" width="8%">Age</th>
                            <th class="text-center" width="10%">Current Status</th>
                            <th class="text-center" width="15%">Recommend Friend</th>
                            <th class="text-center" width="10%">Favorite Feature</th>
                            <th class="text-center" width="13%">See Improved</th>
                            <th class="text-center" width="12%">Suggestions</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php 
                        
                            $query = $conn->prepare("SELECT * FROM `registration` ORDER BY `id` ASC "); 
                            $query->execute();
                            $fetch_list = $query->fetchAll(PDO::FETCH_ASSOC);
                            foreach($fetch_list AS $fetch) {

                        ?>    

                        <tr <?= (!empty($_GET['id']) && $fetch['id'] == $_GET['id'])? 'style="background: #1f2d3d; color: #ffffff;"' : '' ?>>
                            <td  class="text-center">
                                <a class="btn btn-info btn-sm" href="index.php?update=update&id=<?=$fetch['id'];?>">
                                    <i class="far fa-edit"></i>
                                </a>
                                
                                <a class="btn btn-danger btn-sm" href="javascript:delete_confirm('<?=$fetch['id'];?>');">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </td>

                            <td class="text-center"><?= $fetch['name']; ?></td>
                            <td class="text-center"><?= $fetch['email']; ?></td>
                            <td class="text-center"><?= $fetch['age']; ?></td>
                            <td class="text-center"><?= $fetch['current_role']; ?></td>
                            <td class="text-center"><?= $fetch['recommend_friend']; ?></td>
                            <td class="text-center"><?= $fetch['favorite_feature']; ?></td>
                            <td class="text-center"><?= $fetch['suggestions']; ?></td>
                            <td class="text-center"><?= $fetch['see_improved']; ?></td>
                        </tr>

                        <?php

                            }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <footer class="text-center mb-3">
        <small>Copyright &copy; 2021 <strong>Sourab Hossain</strong>. All rights reserved.</small>
    </footer>

    <!-- JavaScript -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>