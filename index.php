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

    <div class="container main mt-4 p-4">
        <h4 class="display-4 text-center">FCC: Survey Form</h4>
        <hr>

        <form method="POST" action="#" class="mt-4" autocomplete="off">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>

            <div class="form-group">
                <label for="Age">Age (<small class="font-italic">Optional</small>)</label>
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
                    <input class="form-check-input" type="radio" name="definitely" id="definitely" value="definitely">
                    <label class="form-check-label" for="definitely">Definitely</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="maybe" id="maybe" value="maybe">
                    <label class="form-check-label" for="maybe">Maybe</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="not_sure" id="not_sure" value="not_sure">
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

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- JavaScript -->
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>