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
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <label for="">Service Name</label>
                                        <input type="text" name="title" value="{{$allData->title}}" id="" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Description</label>
                                        <textarea name="description" id="" cols="135" rows="10">{{$allData->description}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Icon</label>
                                        <input type="text" name="icon" id="" value="{{$allData->icon}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Feature</label>
                                        <input type="checkbox" name="feature" id="" value="1" {{$allData->feature == 1 ? 'checked' : ''}} class="">
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
