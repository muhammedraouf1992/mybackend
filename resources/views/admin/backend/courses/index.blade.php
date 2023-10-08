<x-admin_master>
    <div class="content-body" style="min-height: 788px;">
        <div class="container-fluid">
          
           
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
                <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Service Page </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th><strong>Course short title </strong></th>
                                                <th><strong>Course short Description</strong></th>
                                                <th><strong>Course long title</strong></th>
                                                <th><strong>Course long Description</strong></th>
                                                <th><strong>Course duration</strong></th>
                                                <th><strong>Course lectures</strong></th>
                                                <th><strong>Course student</strong></th>
                                                <th><strong>course image</strong></th>
                                                <th><strong>actions</strong></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
    
                                            @foreach($courses as $item)								 
                                                <tr>    
                                                    <td> {{ $item->short_title  }}  </td>
                                                    <td>{{ Str::limit($item->short_description, 15, '..') }} </td>
                                                    <td>{{ Str::limit($item->long_title, 15, '..') }} </td>
                                                    <td>{{ Str::limit($item->long_description, 15, '..') }} </td>
                                                    <td>{{ $item->duration}}</td>
                                                    <td>{{ $item->lectures}}</td>
                                                    <td>{{ $item->student}}</td>  
                                                    <td> 
                                                        <img src="{{ asset($item->short_image) }}" style="width: 70px; height: 40px;"> 
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="{{route('editCourse',$item->id)}}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        
                                                            <form action="{{route('deleteCourse',$item->id)}}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>    
                 </div>
            </div>
        </div>
    </div>                
</x-admin_master>