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
                                                <th><strong>address</strong></th>
                                                <th><strong>email</strong></th>
                                                <th><strong>phone</strong></th>
                                                <th><strong>facebook</strong></th>
                                                <th><strong>twitter</strong></th>
                                                <th><strong>youtube</strong></th>
                                                <th><strong>copyright</strong></th>
                                                <th><strong>actions</strong></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
    
                                            @foreach($footer as $item)							 
                                                <tr>    
                                                    
                                                    <td>{{ Str::limit($item->address, 15, '..') }} </td>
                                                    <td>{{ Str::limit($item->email, 15, '..') }} </td>
                                                    <td>{{ Str::limit($item->phone, 15, '..') }} </td>
                                                    <td>{{ Str::limit($item->facebook, 15, '..') }} </td>
                                                    <td>{{ Str::limit($item->twitter, 15, '..') }} </td>
                                                    <td>{{ Str::limit($item->youtube, 15, '..') }} </td>
                                                    <td>{{ Str::limit($item->copyright, 15, '..') }} </td>
                                                  
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="{{route('editFooter',$item->id)}}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
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