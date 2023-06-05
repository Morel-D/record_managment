<?php
$num = 1;

?>

<body>
    <div class="container p-5">
        <div class="row">
            <?php if ($this->session->flashdata('status')) : ?>
                <div class="col-3 alert alert-success alert-dismissible fade show" role="alert">
                    Record has been added
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php elseif ($this->session->flashdata('delete')) : ?>
                <div class="col-3 alert alert-danger alert-dismissible fade show" role="alert">
                    Record has been deleted
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif ?>

            <div class="col-10">
                <h3 class="">Product managment system</h3>
            </div>
            <div class="col text-center">
                <a href="/add" class="btn btn-dark">Add Employee</a>
            </div>
        </div>
        <hr />
        <br />

        <table id="productTable" class="table table-hover">
            <thead class="thead-dark">
                <tr class="">
                    <th scope="col">#</th>
                    <th scope="col">Matricule</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($records as $record) { ?>

                    <?php


                    ?>

                    <tr class="text-left">
                        <td><?php echo $num++ ?></td>
                        <td><?php echo $record->uid ?></td>
                        <td><?php echo $record->name ?></td>
                        <td><?php echo $record->email ?></td>
                        <td class="text-end"><?php echo $record->number ?></td>
                        <td><?php
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
                        </td>
                        <td><?php echo $record->price ?> FCFA</td>
                        <td>
                            <a class="btn btn-dark btn-sm" href="<?php echo base_url('show/' . $record->id) ?>">
                                <i class="bi bi-gear-fill text-white"></i>
                            </a>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal<?php echo $record->id; ?>" name="btn">
                                <i class="bi bi-trash3-fill text-white"></i>
                            </button>
                        </td>

                        <?php

                        $seletcted = $this->input->post('btn');

                        ?>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal<?php echo $record->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Delete this record</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete this record of <b><?php echo $record->name; ?></b> ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <a class="btn btn-danger" href="<?php echo base_url('delete/' . $record->id) ?>">
                                            Delete Record
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Ends here -->


                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
