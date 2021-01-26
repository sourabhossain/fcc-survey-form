<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>FCC: Survey Form</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <form action="" method="post" id="register" role="form">
        <div class="container main mt-4 mb-4 p-4">
            <h4 class="display-4 text-center">FCC: Survey Form</h4>
            <hr>
            
            <input type="hidden" id="id" value="<?php if(!empty($_GET['q']) and $_GET['q'] == 'update'){ print $_GET['id']; } ?>">

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" required name="name" id="name" oninvalid="this.setCustomValidity('Please Enter Your Name')" oninput="setCustomValidity('')">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>

            <div class="form-group">
                <label for="Age">Age</label>
                <input type="number" class="form-control" name="age" id="age">
            </div>

            <div class="form-group">
                <label for="current_role">Which option best describes your current role?</label>
                <select class="form-control" id="current_role" name="current_role">
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
                    <input class="form-check-input" type="radio" name="recommend_friend" id="definitely" value="definitely">
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
                <select class="form-control" id="favorite_feature" name="favorite_feature">
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
                    <input class="form-check-input" type="checkbox" id="videos" value="videos"name="see_improved">
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
                    <input class="form-check-input" type="checkbox" id="forum" value="forum"name="see_improved">
                    <label class="form-check-label" for="forum">Forum</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="additional_courses" value="additional_courses" name="see_improved">
                    <label class="form-check-label" for="additional_courses">Additional Courses</label>
                </div>
            </div>

            <div class="form-group">
                <label for="suggestions">Any comments or suggestions?</label>
                <textarea class="form-control" id="suggestions" rows="5"
                    placeholder="Enter your comment here..."></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

    <footer class="text-center mb-3">
        <small>Copyright &copy; 2021 <strong>Sourab Hossain</strong>. All rights reserved.</small>
    </footer>

    <!-- JavaScript -->
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>