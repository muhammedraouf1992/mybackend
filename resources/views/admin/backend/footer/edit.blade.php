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
                            <h4 class="card-title">Edit project</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form method="post" action="{{route('updateFooter',$footer->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="form-group">
                                        <label for="address" class="text-capitalize">address</label>
                                        <input type="text" class="form-control input-default" name="address" id="address" value="{{$footer->address}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="text-capitalize">email</label>
                                        <input type="email" class="form-control input-default" name="email" id="home_subtitle" value="{{$footer->email}}">
                                    </div>
                                   
                                    <div class="form-group">
                                        <label for="phone" class="text-capitalize">phone</label>
                                        <input type="text" class="form-control input-default" name="phone" id="phone" value="{{$footer->phone}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="facebook" class="text-capitalize">facebook</label>
                                        <input type="text" class="form-control input-default" name="facebook" id="facebook" value="{{$footer->facebook}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="twitter" class="text-capitalize">twitter</label>
                                        <input type="text" class="form-control input-default" name="twitter" id="twitter" value="{{$footer->twitter}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="youtube" class="text-capitalize">youtube</label>
                                        <input type="text" class="form-control input-default" name="youtube" id="youtube" value="{{$footer->youtube}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="copyright">copyright</label>
                                        <textarea name="copyright" id="tech_description" cols="30" rows="6" class="form-control input-default">{{$footer->copyright}}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-success">update footer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
              
                
            </div>
        </div>
    </div>
</x-admin_master>
