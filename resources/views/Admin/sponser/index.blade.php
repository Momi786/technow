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
                                <form action="">
                                    <div class="foem-group">
                                        <label for="">
                                            Add Sponser Or CLient Image
                                        </label>
                                        <input type="file" class="form-control" name="sponserimg" id="">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="">
                                    <h4 class="card-title">Client or Sponser List</h4>

                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead class="bg-primary text-white">
                                            <tr>
                                                <th>Name</th>
                                                <th>Img</th>
                                                <th>Operation</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                                <tr>
                                                    <td>Name</td>
                                                    <td>Img</td>

                                                    <td>
                                                        <a href="#" class="btn btn-warning">Edit</a>
                                                        <a href="3" class="btn btn-danger">Delete</a>
                                                    </td>
                                                </tr>

                                        </tbody>
                                    </table>
                                </div>
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
