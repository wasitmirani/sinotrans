<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
       <li><a href="{{route('dashboard.home')}}" class="ai-icon" aria-expanded="false">
                <i class="flaticon-381-networking"></i>
                <span class="nav-text">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{route('dashboard.projects')}}" class="ai-icon" aria-expanded="false">
                <i class="flaticon-381-notepad"></i>
                <span class="nav-text">Projects</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0);" class="ai-icon" aria-expanded="false">
                <i class="flaticon-381-notepad"></i>
                <span class="nav-text">Blogs</span>
            </a>
        </li>


        </ul>

        <div class="book-box">

            <a href="javascript:void(0);">Generate Report  </a>
        </div>
        <div class="copyright">
            <p><strong>{{config('app.name')}} Admin Dashboard</strong> © 2021 All Rights Reserved</p>
            <p class="fs-12">Made with <span class="heart"></span> by {{config('app.name')}}</p>
        </div>
    </div>
</div>
