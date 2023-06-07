<body>
    <div class="container">
        <!-- form  -->
        <div class="row d-flex justify-content-center">
            <div class="col col-8">
                <div class="p-5 col-11">
                    <div class="row text-center">
                        <div class="col">
                            <h3 class="">Recording Managment System</h3>
                            <small class="text-secondary">Organize your recording like never !</small>
                        </div>
                    </div>

                    <hr />

                    <form action="<?php echo base_url("user") ?>" method="POST">
                        <div class="form-group">
                            <label class="lead">Enter Email</label>
                            <input type="email" class="form-control" name="email" />
                            <small class="text-danger"><?php echo form_error('email') ?></small>
                        </div>

                        <div class="form-group">
                            <label class="lead">Enter Phone number</label>
                            <input type="text" class="form-control" name="number" />
                            <small class="text-danger"><?php echo form_error('number') ?></small>
                        </div>

                        <div class="form-group">
                            <label class="lead">Enter your PIN-Code (4 Digits Code PIN)</label>
                            <input type="text" class="form-control" name="pin" />
                            <small class="text-danger"><?php echo form_error('pin') ?></small>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-dark form-control">
                                Register
                            </button>
                        </div>
                    </form>
                    <a href="/login" class="text-dark"><u>Already have an account ?</u></a>
                </div>
            </div>
        </div>
    </div>
</body>
