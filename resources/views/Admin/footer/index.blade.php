
@include('Admin.inc.header')


@php
    foreach ($allData as $data)
        {
            if($data->name == 'footer'){
            $footer = $data;
            }
        }


@endphp

<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Home Content</a></li>
            </ol>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5>Address</h5>
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="">Address</label>
                                <input type="text" name="adddress" value="{{$footer->address}}" id="" class="form-control"
                                    >
                            </div>
                            <div class="form-group">
                                <label for="">Phone Number</label>
                                <input type="text" name="phone" value="{{$footer->phone}}" id="" class="form-control"
                                    >
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" value="{{$footer->email}}"  id="" class="form-control"
                                    >
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <input type="text" name="description" value="{{$footer->description}}"  id="" class="form-control"
                                    >
                            </div>
                            <input type="hidden" name="name" value="{{$footer->name}}">
                            <button type="submitt" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!--**********************************
            Content body end
        ***********************************-->


@include('Admin.inc.footer')
