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
                            <h4 class="card-title">Add a new review</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form method="POST" action="{{route('storeReview')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name" class="text-capitalize">Review title</label>
                                        <input type="text" class="form-control input-default" name="name" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Review description</label>
                                        <textarea name="description" id="description" cols="30" rows="6" class="form-control input-default"></textarea>
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
                                    <button type="submit" class="btn btn-success">Add project</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin_master>
