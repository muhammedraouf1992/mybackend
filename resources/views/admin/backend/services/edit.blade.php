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
                            <h4 class="card-title">Edit service</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form method="post" action="/services/{{$service->id}}" enctype="multipart/form-data">
                                    @csrf
                                   @method('put')
                                    <div class="form-group">
                                        <label for="name" class="text-capitalize">service name</label>
                                        <input type="text" class="form-control input-default" name="name" id="name" value="{{$service->service_name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">service description</label>
                                        <textarea name="description" id="description" cols="30" rows="10" class="form-control input-default">{{$service->service_description}}</textarea>
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
                                   
                                   <div>
                                    <img src="{{asset($service->service_image)}}" alt="" width="150px" height="150px" class="mb-5">
                                    </div> 
                                    
                                   
                                    <button type="submit" class="btn btn-success">update service</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
              
                
            </div>
        </div>
    </div>
</x-admin_master>
