
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Listing Patients</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <meta name="theme-color" content="#563d7c">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

</head>
<body class="bg-light">
<div class="container">
    <div class="row">
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Medical record</h4>
            <form class="needs-validation">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">First name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Last name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="firstName">Age</label>
                    <input type="text" class="form-control" id="age" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Valid age is required.
                    </div>
                </div>

                <h4 class="mb-3">Gender</h4>
                <div class="d-block my-3">
                    <div class="custom-control custom-radio">
                        <input id="credit" name="gender" type="radio" class="custom-control-input" checked required>
                        <label class="custom-control-label" for="male">Male</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="debit" name="gender" type="radio" class="custom-control-input" required>
                        <label class="custom-control-label" for="female">Female</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="country">Country</label>
                        <select class="custom-select d-block w-100" id="country" required>
                            <option value="">Cameroon</option>
                            <option>France</option>
                            <option>Senegal</option>
                            <option>Ivory Coast</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid country.
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="state">City</label>
                        <select class="custom-select d-block w-100" id="state" required>
                            <option value="">Yaounde</option>
                            <option>Douala</option>
                        </select>
                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>
                </div>

                <h4 class="mb-3">Living with diabetes ?</h4>
                <div class="d-block my-3">
                    <div class="custom-control custom-radio">
                        <input id="credit" name="gender" type="radio" class="custom-control-input" checked required>
                        <label class="custom-control-label" for="yes">Yes</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="debit" name="gender" type="radio" class="custom-control-input" required>
                        <label class="custom-control-label" for="no">No</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="debit" name="gender" type="radio" class="custom-control-input" required>
                        <label class="custom-control-label" for="unknown">Unknown</label>
                    </div>
                </div>

                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Save</button>

                <hr class="mb-4">
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</body>
</html>
