   <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
  <style type="text/css">
  	@media only screen and (max-width: 100px) {
  		#one{
  			width: 100px !important;
  		}
  	}
  </style>
  <div>
  <header class="main-header" style="text-align: center !important; background-color: #0077b3; margin-top: 0px; margin-left: -500px; margin-right: -250px">
  <table width="100%" class="table-scrollable">
    <tr>
        <td style=" text-align:left;width: 130px;" id="one">
			<div class="navbar-center" style="padding-left:10px;">
				<a href="#" class="navbar-btn iconS ham-Icon" title="Menu" data-toggle="push-menu" role="button">
					<div class="menu-txt" style="font-weight: bold;color:white"> 
						<i class="fa fa-list pull-left" style="padding-top: 40px;padding-left: 15px;font-size: 20px;"></i>
					</div>
				</a>
			</div>
		</td>
        <td style=" text-align:center" >
			<div class="navbar-center" align="left" style="padding-top:20px; padding-left: 400px">                                        
				 <b class="header-top-txt" style="font-family:Monotype-Corsiva; color: white; font-size: 25px">GOVERNMENT OF MEGHALAYA</b><br/>
				<b class="header-top-txt" style="font-family:Monotype-Corsiva; color: white; font-size: 15px;">DEPARTMENT OF ACCOUNTS & TREASURIES</b><br/>
				
			</div>
			
		</td>
		<td style="text-align:right; padding-right:10px;padding-top:10px;" >
		  
     		 <div class="navbar-center" >
				<a href="#" class="navbar-btn iconS ham-Icon" data-toggle="push-menu" role="button">
					<div class="menu-txt" style="font-weight: bold;color:white"> 
						<a href="{{ route('logout') }}" class="log"  title="Logout"  onclick="event.preventDefault();
		                          document.getElementById('logout-form').submit();">
							<i class="fa fa-sign-out" style="color:white;font-size: 25px;"></i>
						</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
		                  {{ csrf_field() }}
		             	</form>  
					</div>
				</a>
			</div>
		</td>
    </tr>
</table>
</header>
  </div>