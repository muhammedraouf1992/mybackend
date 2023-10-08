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
                            <h4 class="card-title">Edit footer</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form method="post" action="{{route('updateHome',$home->id)}}" enctype="multipart/form-data">
                                    @csrf
                                   @method('put')
                                    <div class="form-group">
                                        <label for="home_title" class="text-capitalize">home title</label>
                                        <input type="text" class="form-control input-default" name="home_title" id="home_title" value="{{$home->home_title}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="home_subtitle" class="text-capitalize">home subtitle</label>
                                        <input type="text" class="form-control input-default" name="home_subtitle" id="home_subtitle" value="{{$home->home_subtitle}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="tech_description">technology description</label>
                                        <textarea name="tech_description" id="tech_description" cols="30" rows="6" class="form-control input-default">{{$home->tech_description}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="student_count" class="text-capitalize">student count</label>
                                        <input type="number" class="form-control input-default" name="student_count" id="student_count" value="{{$home->student_count}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="lecture_count" class="text-capitalize">lecture count</label>
                                        <input type="number" class="form-control input-default" name="lecture_count" id="lecture_count" value="{{$home->lecture_count}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="review_count" class="text-capitalize">review count</label>
                                        <input type="number" class="form-control input-default" name="review_count" id="review_count" value="{{$home->review_count}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="video_url" class="text-capitalize">video url</label>
                                        <input type="text" class="form-control input-default" name="video_url" id="video_url" value="{{$home->video_url}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="video_description">video description</label>
                                        <textarea name="video_description" id="video_description" cols="30" rows="6" class="form-control input-default">{{$home->video_description}}</textarea>
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
                                    <img src="{{asset($home->home_image)}}" alt="" width="150px" height="150px" class="mb-5">
                                    </div> 
                                    
                                   
                                    <button type="submit" class="btn btn-success">update home</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
              
                
            </div>
        </div>
    </div>
</x-admin_master>
