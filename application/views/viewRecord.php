<body>
    <div class="container p-5">

        <div class="row">
            <div class="col col-3">
                <a href="/" class="btn btn-dark"><i class="bi bi-caret-left"></i></a>
            </div>
            <div class="col text-start">
                <h3 class="" style="padding-left: 83px;">View Profile</h3>
            </div>


            <div class="col d-flex justify-content-end mb-3">
                <button class="btn btn-warning mx-3"><i class="bi bi-printer-fill"></i></button>
                <button class="btn btn-danger "><i class="bi bi-trash3-fill text-white"></i></button>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <hr />
                <?php foreach ($records as $record) {   ?>
                    <form action="">
                        <div class="form-group">
                            <label class="lead">Enter Full Name</label>
                            <input type="text" class="form-control" value="<?php echo $record->name ?>" />
                        </div>

                        <div class="form-group">
                            <label class="lead">Enter Phone Number</label>
                            <input type="text" class="form-control" value="<?php echo $record->number ?> " />
                        </div>

                        <div class="form-group">
                            <label class="lead">Enter Email</label>
                            <input type="email" class="form-control" value="<?php echo $record->email ?>" />
                        </div>

                        <div class="form-group">
                            <label class="lead">Select Product</label>
                            <select class="form-control" aria-label="Default select example" name="product">
                                <option value="<?php echo $record->product ?>">
                                    <?php

                                    switch ($record->product) {
                                        case $record->product == 1:
                                            echo "Top Grenadine";
                                            break;
                                        case $record->product == 2:
                                            echo "Top Ananas";
                                            break;
                                        case $record->product == 3:
                                            echo "Top Pamplemousse";
                                            break;
                                        case $record->product == 4:
                                            echo "Top Tropical";
                                            break;
                                    }
                                    ?></option>
                                <option value="1">Top Grenadine</option>
                                <option value="2">Top Ananas</option>
                                <option value="3">Top Pamplemousse</option>
                                <option value="3">Top Tropical</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="lead">Enter Price</label>
                            <input type="email" class="form-control" value="<?php echo $record->price ?>" />
                        </div>

                        <div class=" form-group">
                            <button type="submit" class="btn btn-dark form-control col-5">
                                Update
                            </button>
                        </div>
                    </form>
                <?php } ?>
            </div>
            <div class="col col-1"></div>
            <div class="col">

                <div class="card">
                    <div class="conatiner-fluid p-4">
                        <?php foreach ($records as $record) { ?>
                            <div class="mb-3">
                                <h2><?php echo $record->name ?></h2>
                                <small class="text-secondary"><i><?php echo $record->email ?></i> </small>
                                <small class="text-secondary">/ <i><?php echo $record->number ?></i></small>
                            </div>
                            <hr />

                            <label><b>Product Name :</b>
                                <?php

                                switch ($record->product) {
                                    case $record->product == 1:
                                        echo "Top Grenadine";
                                        break;
                                    case $record->product == 2:
                                        echo "Top Ananas";
                                        break;
                                    case $record->product == 3:
                                        echo "Top Pamplemousse";
                                        break;
                                    case $record->product == 4:
                                        echo "Top Tropical";
                                        break;
                                }
                                ?>

                            </label><br />
                            <label><b>Price :</b> <?php echo $record->price ?> FCFA</label>
                            <br />
                            <label><b>Recipt Matricule :</b> <i><?php echo $record->uid ?></i></label>

                            <hr />
                            <label class="text-secondary"><i>Recorded on the <?php echo $record->date ?></i></label>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
</body>
