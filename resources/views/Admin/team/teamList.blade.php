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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h4 class="card-title">Team Member List</h4>
                                    <div>
                                        <a href="{{url('/admin/add-team')}}">
                                            <button type="button" class="btn mb-1 btn-primary">Add Team <span class="btn-icon-right"><i class="fa fa-plus"></i></span>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead class="bg-primary text-white">
                                            <tr>
                                                <th>Name</th>
                                                <th>Designation</th>
                                                <th>Description</th>
                                                <th>Feature</th>
                                                <th>Operation</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($allData as $data)
                                                <tr>
                                                    <td>{{$data->name}}</td>
                                                    <td>{{$data->designation}}</td>
                                                    <td>{{$data->detail}}</td>
                                                    <th>
                                                        {{$data->feature == 1 ? 'Featured' : 'Unfeatured'}}
                                                    </th>
                                                    <td>
                                                        <a href="{{url('/admin/edit-team')}}/{{$data->id}}" class="btn btn-warning">Edit</a>
                                                        <a href="{{url('/admin/delete-team')}}/{{$data->id}}" class="btn btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach

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

