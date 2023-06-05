<body>
    <div class="container">
        <!-- form  -->
        <div class="row d-flex justify-content-center">
            <div class="col col-8">
                <div class="p-5 col-11">
                    <div class="row text-center">
                        <div class="col col-4  d-flex justify-content-start">
                            <a href="/" class="btn btn-dark"><i class="bi bi-caret-left"></i></a>
                        </div>
                        <div class="col-8 d-flex justify-content-start">
                            <h3 class="">Add Records</h3>
                        </div>
                    </div>
                    <br />
                    <hr />
                    <br />
                    <form action="<?php echo base_url("store") ?>" method="POST">
                        <div class="form-group">
                            <label class="lead">Enter Full Name</label>
                            <input type="text" name="name" class="form-control">
                            <small class="text-danger"><?php echo form_error('name') ?></small>
                        </div>

                        <div class="form-group">
                            <label class="lead">Enter Phone Number</label>
                            <input type="text" name="number" class="form-control">
                            <small class="text-danger"><?php echo form_error('number') ?></small>
                        </div>

                        <div class="form-group">
                            <label class="lead">Enter Email</label>
                            <input type="email" name="email" class="form-control">
                            <small class="text-danger"><?php echo form_error('email') ?></small>
                        </div>

                        <div class="form-group">
                            <label class="lead">Select Product</label>
                            <select class="form-control" aria-label="Default select example" name="product">
                                <option selected>Open this select menu</option>
                                <option value="1">Top Grenadine</option>
                                <option value="2">Top Ananas</option>
                                <option value="3">Top Pamplemousse</option>
                                <option value="3">Top Tropical</option>
                            </select>
                            <small class="text-danger"><?php echo form_error('product') ?></small>
                        </div>

                        <div class="form-group">
                            <label class="lead">Enter Price</label>
                            <input type="text" name="price" class="form-control">
                            <small class="text-danger"><?php echo form_error('price') ?></small>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-dark form-control">
                                Add Record
                            </button>
                        </div>

                        <?php if (isset($error)) {  ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <?php echo $error ?>
                            </div>
                        <?php } ?>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
