<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">My Dashboard</li>
        </ol>
        <!-- Icon Cards-->

        <!-- Area Chart Example-->
        <style>
            .btn.btn-primary {

                background-color: grey;
                border-color: red;
            }
        </style>

        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Data User
            </div>
            <div class="card-body">
                <button class="btn btn-secondary" type="button" data-dismiss="modal" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Add User</button> <br> <br>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>

                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Date Created</th>
                                <th style="text-align:right;">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            foreach ($data->result_array() as $i) :
                                $id = $i['id'];
                                $name = $i['name'];
                                $email = $i['email'];
                                $role_id = $i['role_id'];
                                $is_active = $i['is_active'];
                                $date_created = date('d F Y H:i', $i['date_created']);
                            ?>
                                <tr>

                                    <td><?php echo $name; ?></td>
                                    <td><?php echo $email; ?></td>
                                    <?php if ($role_id == '1') : ?>
                                        <td>Admin</td>
                                    <?php else : ?>
                                        <td>User</td>
                                    <?php endif; ?>
                                    <?php if ($is_active == '1') : ?>
                                        <td>Active</td>
                                    <?php else : ?>
                                        <td>Non Active</td>
                                    <?php endif; ?>
                                    <td><?php echo $date_created; ?></td>
                                    <td style="text-align:center;">

                                        <a class="btn btn-primary" data-toggle="modal" data-target="#ModalHapus<?php echo $id; ?>"><span class="fa fa-trash"></span></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
    </div>
    <?php foreach ($data->result_array() as $i) :
        $id = $i['id'];
        $name = $i['name'];
        $email = $i['email'];
        $password = $i['password'];
        $role_id = $i['role_id'];
        $is_active = $i['is_active'];
        $date_created = date('d F Y', $i['date_created']);
    ?>
        <!--Modal Add Pengguna-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add User?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="container">
                        <form class="form-horizontal" action="<?= base_url('admin/register'); ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <label for="exampleInputName">Full Name</label>
                                        <input class="form-control" name="name" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter Full Name" value="<?= set_value('name'); ?>" required>
                                        <?= form_error('name', ' <small class="text-danger pl-3"> ', '</small>'); ?>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input class="form-control" name="email" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter email" <?= set_value('email'); ?> required>
                                <?= form_error('email', ' <small class="text-danger pl-3"> ', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input name="password1" class="form-control" id="exampleInputPassword1" type="password" placeholder="Password" required>
                                        <?= form_error('password1', ' <small class="text-danger pl-3"> ', '</small>'); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleConfirmPassword">Confirm password</label>
                                        <input name="password2" class="form-control" id="exampleConfirmPassword" type="password" placeholder="Confirm password">

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Role</label>
                                <br>
                                <input type="radio" name="role_id" id="role_id" value="1" />
                                Admin
                                <input style="margin-left:50px; " type="radio" name="role_id" id="role_id" value="2" checked />
                                User
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                            <br><br>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>


    <?php foreach ($data->result_array() as $i) :
        $id = $i['id'];
        $name = $i['name'];
        $email = $i['email'];
        $password = $i['password'];
        $role_id = $i['role_id'];
        $is_active = $i['is_active'];
        $date_created = date('d F Y', $i['date_created']);
    ?>
        <!--Modal Hapus Pengguna-->
        <div class="modal fade" id="ModalHapus<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hapus User?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url() . 'admin/hapus_user' ?>" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <input type="hidden" name="id" value="<?php echo $id; ?>" />
                            <p>Apakah Anda yakin mau menghapus User <b><?php echo $name; ?></b> ?</p>

                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <script>
        $(document).ready(function() {
            $('#mydata').DataTable();
        });
        $(function() {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
        });
    </script>
    <?php if ($this->session->flashdata('msg') == 'error') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Error',
                text: "Password dan Ulangi Password yang Anda masukan tidak sama.",
                showHideTransition: 'slide',
                icon: 'error',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#FF4859'
            });
        </script>

    <?php elseif ($this->session->flashdata('msg') == 'success') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Success',
                text: "User Berhasil disimpan ke database.",
                showHideTransition: 'slide',
                icon: 'success',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#7EC857'
            });
        </script>
    <?php elseif ($this->session->flashdata('msg') == 'info') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Info',
                text: "User berhasil di update",
                showHideTransition: 'slide',
                icon: 'info',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#00C9E6'
            });
        </script>
    <?php elseif ($this->session->flashdata('msg') == 'success-hapus') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Success',
                text: "User Berhasil dihapus.",
                showHideTransition: 'slide',
                icon: 'success',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#7EC857'
            });
        </script>
    <?php else : ?>

    <?php endif; ?>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->