<!-- Left side column. contains the logo and sidebar -->

  <aside class="main-sidebar" >
     <!-- sidebar: style can be found in sidebar.less style="height:100% !important;" -->
    <br><br><br>
 
    <section class="sidebar" >
      <!-- Sidebar user panel -->
      <div class="user-panel" >
        <div class="pull-left image">
          <img src="{{asset('dist/img/user2-160x160	.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
                                    {{ Auth::user()->name }}
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu " data-widget="tree">
       <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        
                                <li class="nav-item" >
                                    <a class="nav-link" href="{{ url('Data_Entry') }}">{{ __('Data_Entry') }}</a>
                                </li>
                       
                            <br/><br/>
                          
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('report') }}">{{ __('Generate Report') }}</a>
                                </li><br/><br/>
                                <li>
                                    
                                <a href="#" class="navbar-btn iconS ham-Icon" data-toggle="push-menu" role="button">
					<div class="menu-txt" style="font-weight: bold;color:black"> 
						<a href="{{ route('logout') }}" class="log"  title="Logout"  onclick="event.preventDefault();
		                          document.getElementById('logout-form').submit();">
							<i class="fa fa-sign-out" style="color:darkgray;font-size: 25px;"></i>
                                                        <br>{{ __('Log out') }} 
						</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
		                  {{ csrf_field() }}
		             	</form>  
					</div>
				</a>
                                </li>
                          
                          
                        
                    </ul>

          
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
