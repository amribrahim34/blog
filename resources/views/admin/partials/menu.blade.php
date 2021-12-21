    
<!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START SIDEBAR -->
<div class="sidebar clearfix">
    <ul class="sidebar-panel nav flex-column">
        <li class="sidetitle d-block ">MAIN</li>
        {{-- <li>
            <a href="#">
                <span class="icon color7">
                    <i class="fa fa-flask"></i>
                </span>UI Elements
                <span class="caret"></span>
            </a>
            <ul>
                <li>
                    <a href="icons.html">Icons</a>
                </li>
            </ul>
        </li> --}}
        <li>
            <a href="{{route('admin.posts.index')}}" class="text-uppercase">
                <span class="icon color8">
                    <i class="fa fa-bar-chart"></i>
                </span>posts
            </a>
        </li>
        <li>
            <a href="{{route('admin.keywords.index')}}" class="text-uppercase">
                <span class="icon color8">
                    <i class="fa fa-bar-chart"></i>
                </span>keywords
            </a>
        </li>
        <li>
            <a href="{{route('admin.categories.index')}}" class="text-uppercase">
                <span class="icon color8">
                    <i class="fa fa-bar-chart"></i>
                </span>categories
            </a>
        </li>
        <li>
            <a href="{{route('admin.comments.index')}}" class="text-uppercase">
                <span class="icon color8">
                    <i class="fa fa-bar-chart"></i>
                </span>comments
            </a>
        </li>
    </ul>
</div>
    <!-- END SIDEBAR -->
    <!-- //////////////////////////////////////////////////////////////////////////// --> 
    
