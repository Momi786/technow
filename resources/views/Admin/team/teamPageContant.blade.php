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
                {{-- front Side Contact --}}

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <label for="Title">
                                            Enter Title
                                        </label>
                                        <input type="text" name="title" class="form-control" id="">
                                    </div>
                                    <div class="form-group">
                                        <label for="Title">
                                            Enter Heading
                                        </label>
                                        <input type="text" name="heading" class="form-control" id="">
                                    </div>
                                    <div class="form-group">
                                        <label for="Title">
                                            Enter Description
                                        </label>
                                        <textarea name="desc" id="" cols="135" rows="5"></textarea>
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
