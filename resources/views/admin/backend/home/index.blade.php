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
                                <h4 class="card-title">home Page </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th><strong>home title </strong></th>
                                                <th><strong>home subtitle</strong></th>
                                                <th><strong>tech description</strong></th>
                                                <th><strong>student count</strong></th>
                                                <th><strong>lecture count</strong></th>
                                                <th><strong>review count</strong></th>
                                                <th><strong>video url</strong></th>
                                                <th><strong>video description</strong></th>
                                                <th><strong>Home Image</strong></th>
                                                <th><strong>actions</strong></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
    
                                            @foreach($homeData as $item)							 
                                                <tr>    
                                                    <td> {{ $item->home_title  }}  </td>
                                                    <td>{{ Str::limit($item->home_subtitle, 15, '..') }} </td>
                                                    <td>{{ Str::limit($item->tech_description, 15, '..') }} </td>
                                                    
                                                    <td>{{ $item->student_count}}</td>
                                                    <td>{{ $item->lecture_count}}</td>
                                                    <td>{{ $item->lecture_count}}</td>
                                                     
                                                    <td>{{ Str::limit($item->video_url, 15, '..') }} </td>
                                                    <td>{{ Str::limit($item->video_description, 15, '..') }} </td>
                                                    <td> 
                                                        <img src="{{ asset($item->home_image) }}" style="width: 70px; height: 40px;"> 
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="{{route('editHome',$item->id)}}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
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