
<x-admin_master>
    <div class="content-body">
        <div class="container-fluid">
            <!-- Add Project -->
           
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi {{auth()->user()->name}} welcome back!</h4>
                        <span>React</span>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Element</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-xl-9 col-lg-9">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add a new course</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form method="POST" action="{{route('updateCourse',$course->id)}}" enctype="multipart/form-data">
                                    @csrf
                                   @method('PUT')
                                    <div class="form-group">
                                        <label for="short_title" class="text-capitalize">course short title</label>
                                        <input type="text" class="form-control input-default" name="short_title" id="short_title" value="{{$course->short_title}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="short_description" class="text-capitalize">course short description</label>
                                        <input type="text" class="form-control input-default" name="short_description" id="short_description" value="{{$course->short_description}}" >
                                    </div>
                                    <div class="form-group">
                                        <label for="long_title" class="text-capitalize">course long title</label>
                                        <input type="text" class="form-control input-default" name="long_title" id="long_title" value="{{$course->long_title}}" >
                                    </div>
                                    <div class="form-group">
                                        <label for="long_description" class="text-capitalize">course long description</label>
                                        <textarea name="long_description" id="long_description" cols="30" rows="5" class="form-control input-default">{{$course->long_description}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="duration" class="text-capitalize">duration</label>
                                        <input type="number" class="form-control input-default" name="duration" id="duration" value="{{$course->duration}}" >
                                    </div>
                                    <div class="form-group">
                                        <label for="lectures" class="text-capitalize">lectures</label>
                                        <input type="number" class="form-control input-default" name="lectures" id="lectures" value="{{$course->lectures}}" >
                                    </div>
                                    <div class="form-group">
                                        <label for="student" class="text-capitalize">students</label>
                                        <input type="number" class="form-control input-default" name="student" id="student" value="{{$course->student}}" >
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <label class="custom-file-label">Choose file</label>
                                            <input type="file" class="custom-file-input" name="image">
                                        </div>   
                                    </div>
                                    <div class="form-group">
                                        <img src="{{asset($course->short_image)}}" alt="" width="100px" height="100px">
                                    </div>
                                    <button type="submit" class="btn btn-success text-capitalize">Edit course</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>                              
            </div>
        </div>
    </div>

</x-admin_master>
