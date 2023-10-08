<x-admin_master>
    <div class="content-body">
        <div class="container-fluid">
            <!-- Add Project -->
           
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi,{{$user->name}} welcome back!</h4>
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
                            <h4 class="card-title">User profile edit</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form enctype="multipart/form-data" method="POST" action="{{route('admin.update')}}">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <input type="text" class="form-control input-default " name="name" value="{{$user->name}}" placeholder="input-default">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control input-default " name="email" value="{{$user->email}}" placeholder="input-default">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <label class="custom-file-label">Choose file</label>
                                            <input type="file" class="custom-file-input" name="profile_photo_path">
                                        </div>
                                        
                                    </div>
                                    <div class="form-group">
                                        <img src="{{$user->profile_photo_path ?  asset('backend/images/profile/profile.png') :asset('uploads/no_image.jpg') }}" class="img-fluid" alt="" width="150px" height="150px">
                                    </div>
                                    <button type="submit" class="btn btn-success">Update profile</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
              
                
            </div>
        </div>
    </div>

</x-admin_master>