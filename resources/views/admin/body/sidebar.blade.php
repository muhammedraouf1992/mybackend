<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-144-layout"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-077-menu-1"></i>
                    <span class="nav-text">User profile</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('admin.profile')}}">Profile</a></li>
                    <li><a href="{{route('admin.password_edit')}}">change password</a></li>
                    
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-061-puzzle"></i>
                    <span class="nav-text">Services</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('allServices')}}">All services</a></li>
                    <li><a href="{{route('addServices')}}">Add services</a></li>
                    
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-003-diamond"></i>
                    <span class="nav-text">Projects</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('allProjects')}}">All Projects</a></li>
                    <li><a href="{{route('addProject')}}">Add Project</a></li>
                    

                </ul>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-003-diamond"></i>
                    <span class="nav-text">Courses</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('allCourses')}}">All Courses</a></li>
                    <li><a href="{{route('addCourse')}}">Add Course</a></li>                
                </ul>
            </li>           
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-003-diamond"></i>
                    <span class="nav-text">Client reviews</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('allReviews')}}">All reviews</a></li>                                
                    <li><a href="{{route('addReview')}}">add review</a></li>                              
                </ul>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-003-diamond"></i>
                    <span class="nav-text">Home Elements</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('allHome')}}">Home elements</a></li>                                  
                </ul>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-003-diamond"></i>
                    <span class="nav-text">Footer Elements</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('allFooter')}}">Footer elements</a></li>                                  
                </ul>
            </li>
        </ul>
        <div class="copyright">
            <p><strong>Zenix Crypto Admin Dashboard</strong> © 2021 All Rights Reserved</p>
            <p class="fs-12">Made with <span class="heart"></span> by DexignZone</p>
        </div>
    </div>
</div>