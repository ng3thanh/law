<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Admin System</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
					<button type="submit" name="search" id="search-btn" class="btn btn-flat">
						<i class="fa fa-search"></i>
					</button>
				</span>
            </div>
        </form>
        <!-- /.search form -->


        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">

            <li class="header">DANH MỤC</li>

            <li class="active treeview">
                <a href="{{ route('dashboard') }}">
                    <i class="fa fa-dashboard"></i>
                    <span> Dashboard</span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span> News</span>
                    <span class="pull-right-container"> 
						<i class="fa fa-angle-left pull-right"></i>
					</span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ route('news.index') }}">
                            <i class="fa fa-circle-o"></i> News index
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('news.create') }}">
                            <i class="fa fa-plus-circle"></i> Add new
                        </a>
                    </li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-calendar"></i>
                    <span> Blogs</span>
                    <span class="pull-right-container"> 
						<i class="fa fa-angle-left pull-right"></i>
					</span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ route('blog.index') }}">
                            <i class="fa fa-asterisk"></i> Blogs index
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('blog.create') }}">
                            <i class="fa fa-edit"></i> Add blog
                        </a>
                    </li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"> <i class="fa fa-usd"></i>
                    <span> Contact</span>
                    <span class="pull-right-container"> 
						<i class="fa fa-angle-left pull-right"></i>
        			</span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="#">
                            <i class="fa fa-circle-o"></i>Contact index
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-circle-o"></i>General Elements
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-circle-o"></i>General Elements
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-cubes"></i>
                    <span> Setting</span>
                    <span class="pull-right-container"> 
						<small class="label pull-right bg-red">3</small> 
						<small class="label pull-right bg-blue">17</small>
					</span>
                </a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->

</aside>