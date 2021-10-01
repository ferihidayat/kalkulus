<body class="bg-dark">
    <div class="container">
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">Register an Account</div>
            <div class="card-body">
                <form action="<?= base_url('home/register'); ?>" method="POST">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-12">
                                <label for="exampleInputName">Full Name</label>
                                <input class="form-control" name="name" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter Full Name" value="<?= set_value('name'); ?>">
                                <?= form_error('name', ' <small class="text-danger pl-3"> ', '</small>'); ?>
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input class="form-control" name="email" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter email" <?= set_value('email'); ?>>
                        <?= form_error('email', ' <small class="text-danger pl-3"> ', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Password</label>
                                <input name="password1" class="form-control" id="exampleInputPassword1" type="password" placeholder="Password">
                                <?= form_error('password1', ' <small class="text-danger pl-3"> ', '</small>'); ?>
                            </div>
                            <div class="col-md-6">
                                <label for="exampleConfirmPassword">Confirm password</label>
                                <input name="password2" class="form-control" id="exampleConfirmPassword" type="password" placeholder="Confirm password">

                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                </form>
                <div class="text-center">
                    <a class="d-block small mt-3" href="<?php echo site_url() . 'home/login' ?>">Login Page</a>
                    <a class="d-block small" href="<?php echo site_url('home/forgotpassword'); ?>">Forgot Password?</a>
                    <a class="d-block small" href="<?php echo site_url('home'); ?>">Home</a>
                </div>
            </div>
        </div>
    </div>