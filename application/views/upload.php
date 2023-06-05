	<body>
	    <div class="container">
	        <!-- form  -->
	        <div class="row d-flex justify-content-center">
	            <div class="col col-8">
	                <div class="p-5 col-11">

	                    <hr />
	                    <br />
	                    <form method="post" action="<?php echo base_url('upload') ?>" enctype="multipart/form-data">
	                        <div class="form-group">
	                            <label class="lead">Enter Full Name</label>
	                            <input type="file" class="form-control" name="image" />
	                        </div>
	                        <br />
	                        <div class="form-group text-center">
	                            <button type="submit" class="btn btn-dark form-control">
	                                AUpload file
	                            </button>
	                        </div>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>
	</body>
