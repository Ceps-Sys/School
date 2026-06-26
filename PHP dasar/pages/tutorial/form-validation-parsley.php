<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation - Mazer Admin Dashboard</title>
    
    <link rel="stylesheet" crossorigin href="../../admin/assets1/compiled/css/app.css">
    <link rel="stylesheet" crossorigin href="../../admin/assets1/compiled/css/app-dark.css">
</head>

<body>
    <script src="../../admin/assets1/static/js/initTheme.js"></script>
    
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h3>Form Validation</h3>
                    <p class="text-subtitle text-muted">
                        Complete the form with powerful validation library such as Parsley.
                    </p>
                </div>
            </div>
        </div>

        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Multiple Column</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form" data-parsley-validate>
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mandatory">
                                                <label for="first-name-column" class="form-label">First Name</label>
                                                <input type="text" id="first-name-column" class="form-control" placeholder="First Name" name="fname-column" data-parsley-required="true" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="last-name-column" class="form-label">Last Name</label>
                                                <input type="text" id="last-name-column" class="form-control" placeholder="Last Name" name="lname-column" data-parsley-required="true" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="city-column" class="form-label">City</label>
                                                <input type="text" id="city-column" class="form-control" placeholder="City" name="city-column" data-parsley-required="true" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="country-floating" class="form-label">Country</label>
                                                <input type="text" id="country-floating" class="form-control" name="country-floating" placeholder="Country" data-parsley-required="true" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="company-column" class="form-label">Company</label>
                                                <input type="text" id="company-column" class="form-control" name="company-column" placeholder="Company" data-parsley-required="true" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mandatory">
                                                <label for="email-id-column" class="form-label">Email</label>
                                                <input type="email" id="email-id-column" class="form-control" name="email-id-column" placeholder="Email" data-parsley-required="true" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class='form-check mandatory'>
                                                <input type="checkbox" id="checkbox5" class='form-check-input' checked data-parsley-required="true" data-parsley-error-message="You have to accept our terms and conditions to proceed.">
                                                <label for="checkbox5" class="form-check-label form-label">I accept these terms and conditions.</label>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="../../admin/assets1/static/js/components/dark.js"></script>
    <script src="../../admin/assets1/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../../admin/assets1/compiled/js/app.js"></script>
    <script src="../../admin/assets1/extensions/jquery/jquery.min.js"></script>
    <script src="../../admin/assets1/extensions/parsleyjs/parsley.min.js"></script>
    <script src="../../admin/assets1/static/js/pages/parsley.js"></script>
</body>
</html>