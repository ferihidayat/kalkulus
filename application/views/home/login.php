<body class="bg-dark">
    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">
                <center>Login</center>
            </div>

            <div class="card-body">
                <?= $this->session->flashdata('message'); ?>
                <form method="POST" action="<?= base_url('home/login'); ?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input name="email" class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email" value="<?= set_value('email'); ?>">
                        <?= form_error('email', ' <small class="text-danger pl-3"> ', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input name="password" class="form-control" id="exampleInputPassword1" type="password" placeholder="Password">
                        <?= form_error('password', ' <small class="text-danger pl-3"> ', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox"> Remember Password</label>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">Login</button>
                </form>
                <div class="text-center">
                    <a class="d-block small mt-3" href="<?php echo site_url('home/register'); ?>">Register an Account</a>
                    <a class="d-block small" href="<?php echo site_url('home/forgotpassword'); ?>">Forgot Password?</a>
                    <a class="d-block small" href="<?php echo site_url('home'); ?>">Home</a>

                </div>
            </div>
        </div>
    </div>