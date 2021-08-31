@include('Admin.inc.header')


<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" name="name" id="" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Designation</label>
                                        <input type="text" class="form-control" name="designation">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Detail</label>
                                        <textarea name="detail" id="" cols="135" rows="10"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Add Image</label>
                                        <input type="file" name="img">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Feature</label>
                                        <input type="checkbox" name="feature" id="" value="1" class="">
                                    </div>

                                    <button type="submitt" class="btn btn-primary">Submitt</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->



@include('Admin.inc.footer')
