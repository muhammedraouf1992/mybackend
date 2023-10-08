
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
                                <h4 class="card-title">Change Password</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="POST" action="{{route('admin.update_password')}}">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="current_password">Current password</label>
                                            <input type="password" class="form-control input-default" name="current_password" id="current_password" >
                                        </div>
                                        <div class="form-group">
                                            <label for="password">New password</label>
                                            <input type="password" class="form-control input-default" name="password"  >
                                        </div>
                                        <div class="form-group">
                                            <label for="password_confirmation">Confirm password</label>
                                            <input type="password" class="form-control input-default" name="password_confirmation"  id="password_confirmation">
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
