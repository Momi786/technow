
@include('Admin.inc.header')
@php
foreach($allData as $data){
    if ($data->name == "about-section") {
        $aboutSection = $data;
    }
    if($data->name == "why-us"){
        $why = $data;
    }
    if($data->name == "drop1"){
        $drop1 = $data;
    }
    if($data->name == "drop2"){
        $drop2 = $data;
    }
    if($data->name == "drop3"){
        $drop3 = $data;
    }
    if($data->name == "service-section"){
        $serviceSection = $data;
    }
    if($data->name == "team"){
        $team1 = $data;
    }
    if($data->name == "pricing"){
        $pricing = $data;
    }
}
@endphp




<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Home Content</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5>About Section</h5>
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" name="title" id="" class="form-control"
                                    value="{{$aboutSection->title}}">
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea class="summernote" name="description">
                                    @php
                                        echo $aboutSection->description;
                                    @endphp
                                </textarea>
                            </div>
                            <input type="hidden" name="name" value="{{$aboutSection->name}}">
                            <button type="submitt" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5>Why Us</h5>
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" name="title" id="" class="form-control"
                                    value="{{$why->title}}">
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="description" cols="30" rows="10" class="form-control">

                                        {{$why->description;}}

                                </textarea>

                            </div>
                            <input type="hidden" name="name" value="{{$why->name}}">
                            <button type="submitt" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5>Drop Down 1</h5>
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" name="title" id="" class="form-control"
                                    value="{{$drop1->title}}">
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="description" cols="30" rows="10" class="form-control">

                                        {{$drop1->description;}}

                                </textarea>

                            </div>
                            <input type="hidden" name="name" value="{{$drop1->name}}">
                            <button type="submitt" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5>Drop Down 2</h5>
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" name="title" id="" class="form-control"
                                    value="{{$drop2->title}}">
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="description" cols="30" rows="10" class="form-control">

                                        {{$drop2->description;}}

                                </textarea>

                            </div>
                            <input type="hidden" name="name" value="{{$drop2->name}}">
                            <button type="submitt" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5>Drop Down 3</h5>
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" name="title" id="" class="form-control"
                                    value="{{$drop3->title}}">
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="description" cols="30" rows="10" class="form-control">

                                        {{$drop3->description;}}

                                </textarea>

                            </div>
                            <input type="hidden" name="name" value="{{$drop3->name}}">
                            <button type="submitt" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5>Service</h5>
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" name="title" id="" class="form-control"
                                    value="{{$serviceSection->title}}">
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="description" cols="30" rows="10" class="form-control">

                                    {{$serviceSection->description}}

                                </textarea>

                            </div>
                            <input type="hidden" name="name" value="{{$serviceSection->name}}">
                            <button type="submitt" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5>Team</h5>
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" name="title" id="" class="form-control"
                                    value="{{$team1->title}}">
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="description" cols="30" rows="10" class="form-control">

                                    {{$team1->description}}

                                </textarea>

                            </div>
                            <input type="hidden" name="name" value="{{$team1->name}}">
                            <button type="submitt" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5>Pricing</h5>
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" name="title" id="" class="form-control"
                                    value="{{$pricing->title}}">
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="description" cols="30" rows="10" class="form-control">

                                    {{$pricing->description}}

                                </textarea>

                            </div>
                            <input type="hidden" name="name" value="{{$pricing->name}}">
                            <button type="submitt" class="btn btn-primary">Submit</button>
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
