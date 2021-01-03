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
                <input type="text" class="form-control" id="name">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email">
            </div>

            <div class="form-group">
                <label for="Age">Age (<small class="font-italic">Optional</small>)</label>
                <input type="number" class="form-control" id="age">
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Which option best describes your current role?</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>Select current role</option>
                    <option>Student</option>
                    <option>Full Time Job</option>
                    <option>Full Time Learner</option>
                    <option>Prefer not to say</option>
                    <option>Other</option>
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