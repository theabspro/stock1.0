<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('theme1.includes.common.head')

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('theme1/css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="{{ asset('theme1/css/style.css')}}" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{ asset('theme1/css/morris.css')}}" type="text/css"/>
    <!-- Graph CSS -->
    <link href="{{ asset('theme1/css/font-awesome.css')}}" rel="stylesheet"> 
    <!-- jQuery -->
    <script src="{{ asset('theme1/js/jquery-2.1.4.min.js')}}"></script>
    <!-- //jQuery -->
    <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- lined-icons -->
    <link rel="stylesheet" href="{{ asset('theme1/css/icon-font.min.css')}}" type='text/css' />

    @yield('header_css')
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

</head>
<body>
   <div class="page-container">
   <!--/content-inner-->
    <div class="left-content">
       <div class="mother-grid-inner">
             <!--header start here-->
                <div class="header-main">
                    <div class="logo-w3-agile">
                                <h1><a href="home.html">Ware Housing</a></h1>
                            </div>
                    <div class="w3layouts-left">
                            
                            <!--search-box-->
                                <div class="w3-search-box">
                                    <form action="#" method="post">
                                        <input type="text" placeholder="Search..." required=""> 
                                        <input type="submit" value="">                  
                                    </form>
                                </div><!--//end-search-box-->
                            <div class="clearfix"> </div>
                         </div>
                         <div class="w3layouts-right">
                            <div class="profile_details_left"><!--notifications of menu start -->
                                <ul class="nofitications-dropdown">
                                    <li class="dropdown head-dpdn">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="notification_header">
                                                    <h3>You have 3 new messages</h3>
                                                </div>
                                            </li>
                                            <li><a href="#">
                                               <div class="user_img"><img src="images/in11.jpg" alt=""></div>
                                               <div class="notification_desc">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                                </div>
                                               <div class="clearfix"></div> 
                                            </a></li>
                                            <li class="odd"><a href="#">
                                                <div class="user_img"><img src="{{asset('theme1/images/in10.jpg')}}" alt=""></div>
                                               <div class="notification_desc">
                                                <p>Lorem ipsum dolor </p>
                                                <p><span>1 hour ago</span></p>
                                                </div>
                                              <div class="clearfix"></div>  
                                            </a></li>
                                            <li><a href="#">
                                               <div class="user_img"><img src="{{asset('theme1/images/in9.jpg')}}" alt=""></div>
                                               <div class="notification_desc">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                                </div>
                                               <div class="clearfix"></div> 
                                            </a></li>
                                            <li>
                                                <div class="notification_bottom">
                                                    <a href="#">See all messages</a>
                                                </div> 
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown head-dpdn">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="notification_header">
                                                    <h3>You have 3 new notification</h3>
                                                </div>
                                            </li>
                                            <li><a href="#">
                                                <div class="user_img"><img src="{{asset('theme1/images/in8.jpg')}}" alt=""></div>
                                               <div class="notification_desc">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                                </div>
                                              <div class="clearfix"></div>  
                                             </a></li>
                                             <li class="odd"><a href="#">
                                                <div class="user_img"><img src="{{asset('theme1/images/in6.jpg')}}" alt=""></div>
                                               <div class="notification_desc">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                                </div>
                                               <div class="clearfix"></div> 
                                             </a></li>
                                             <li><a href="#">
                                                <div class="user_img"><img src="images/in7.jpg" alt=""></div>
                                               <div class="notification_desc">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                                </div>
                                               <div class="clearfix"></div> 
                                             </a></li>
                                             <li>
                                                <div class="notification_bottom">
                                                    <a href="#">See all notifications</a>
                                                </div> 
                                            </li>
                                        </ul>
                                    </li>   
                                    <li class="dropdown head-dpdn">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">9</span></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="notification_header">
                                                    <h3>You have 8 pending task</h3>
                                                </div>
                                            </li>
                                            <li><a href="#">
                                                <div class="task-info">
                                                    <span class="task-desc">Database update</span><span class="percentage">40%</span>
                                                    <div class="clearfix"></div>    
                                                </div>
                                                <div class="progress progress-striped active">
                                                    <div class="bar yellow" style="width:40%;"></div>
                                                </div>
                                            </a></li>
                                            <li><a href="#">
                                                <div class="task-info">
                                                    <span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
                                                   <div class="clearfix"></div> 
                                                </div>
                                                <div class="progress progress-striped active">
                                                     <div class="bar green" style="width:90%;"></div>
                                                </div>
                                            </a></li>
                                            <li><a href="#">
                                                <div class="task-info">
                                                    <span class="task-desc">Mobile App</span><span class="percentage">33%</span>
                                                    <div class="clearfix"></div>    
                                                </div>
                                               <div class="progress progress-striped active">
                                                     <div class="bar red" style="width: 33%;"></div>
                                                </div>
                                            </a></li>
                                            <li><a href="#">
                                                <div class="task-info">
                                                    <span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
                                                   <div class="clearfix"></div> 
                                                </div>
                                                <div class="progress progress-striped active">
                                                     <div class="bar  blue" style="width: 80%;"></div>
                                                </div>
                                            </a></li>
                                            <li>
                                                <div class="notification_bottom">
                                                    <a href="#">See all pending tasks</a>
                                                </div> 
                                            </li>
                                        </ul>
                                    </li>   
                                    <div class="clearfix"> </div>
                                </ul>
                                <div class="clearfix"> </div>
                            </div>
                            <!--notification menu end -->
                            
                            <div class="clearfix"> </div>               
                        </div>
                        <div class="profile_details w3l">       
                                <ul>
                                    <li class="dropdown profile_details_drop">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <div class="profile_img">   
                                                <span class="prfil-img"><img src="{{asset('theme1/images/in4.jpg')}}" alt=""> </span> 
                                                <div class="user-name">
                                                    
                                                    <span>Administrator</span>
                                                </div>
                                                <i class="fa fa-angle-down"></i>
                                                <i class="fa fa-angle-up"></i>
                                                <div class="clearfix"></div>    
                                            </div>  
                                        </a>
                                        <ul class="dropdown-menu drp-mnu">
                                             
                                            <li> <a href="index.html"><i class="fa fa-sign-out"></i> Logout</a> </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            
                     <div class="clearfix"> </div>  
                </div>
        <!--heder end here-->
                @yield('content')

</div>
    <div class="clearfix"></div>
        <!--photoday-section--> 

        <!-- script-for sticky-nav -->
        <script>
        $(document).ready(function() {
             var navoffeset=$(".header-main").offset().top;
             $(window).scroll(function(){
                var scrollpos=$(window).scrollTop(); 
                if(scrollpos >=navoffeset){
                    $(".header-main").addClass("fixed");
                }else{
                    $(".header-main").removeClass("fixed");
                }
             });
             
        });
        </script>
        <!-- /script-for sticky-nav -->
        <!--inner block start here-->
        <div class="inner-block">

        </div>

        <div class="copyrights">
            <p>© 2018 Phoinix Solution | Design by  <a href="http://phoinixsolution.com/" target="_blank">Phoinix Solution</a> </p>
        </div>  

    </div>
</div>
  <!--//content-inner-->
            <!--/sidebar-menu-->
                <div class="sidebar-menu">
                    <header class="logo1">
                        <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
                    </header>
                        <div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
                                    <ul id="menu" >
                                        <li><a href="index1.html"><i class="fa fa-tachometer"></i> <span>Dashboard</span><div class="clearfix"></div></a></li>
                                        <li><a href="#"><i class="fa fa-check-square-o nav_icon"></i><span>Category</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                                      <ul>
                                      <li><a href="cat.html">Add Category</a></li>
                                        <li><a href="clist.html"> Category Listing</a></li>
                                        
                                    </ul>
                                    </li>
                                    
                                    
                                        <li><a href="#"><i class="fa fa-check-square-o nav_icon"></i><span>Brands</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                                      <ul>
                                      <li><a href="br.html">Add Brands</a></li>
                                        <li><a href="blist.html"> Brand Listing</a></li>
                                        
                                    </ul>
                                    </li>
                                    <li><a href="#"><i class="fa fa-check-square-o nav_icon"></i><span> Products</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                                      <ul>
                                      <li><a href="pro.html">Add Products</a></li>
                                        <li><a href="plist.html"> Product Listing</a></li>
                                        
                                    </ul>
                                    </li>
                                    <li><a href="#"><i class="fa fa-check-square-o nav_icon"></i><span>Mangage Orders</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                                    <ul>
                                 
                                        <li><a href="print.html"> Print Invoice</a></li>
                                        
                                    </ul>
                                    </li>
                                    <li><a href="#"><i class="fa fa-check-square-o nav_icon"></i><span>Reports</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                                      <ul>
                                      <li><a href="reports.html">Sales Reports</a></li>
                                    
                                        
                                    </ul>
                                    </li>
                                    

                                  </ul>
                                </div>
                              </div>
                              <div class="clearfix"></div>      
                            </div>

    <!-- Scripts -->
    <script src="{{ asset('theme1/js/app.js') }}"></script>


    <script>
        var toggle = true;
                    
        $(".sidebar-icon").click(function() {                
            if (toggle){
                $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                $("#menu span").css({"position":"absolute"});
            }else{
                $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                setTimeout(function() {
                  $("#menu span").css({"position":"relative"});
                }, 400);
            }                    
            toggle = !toggle;
        });
    </script>

    <script src="{{ asset('theme1/js/jquery.nicescroll.js') }}"></script>
    <script src="{{ asset('theme1/js/scripts.js') }}"></script>
    <script src="{{ asset('theme1/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('theme1/js/raphael-min.js') }}"></script>
    <script src="{{ asset('theme1/js/morris.js') }}"></script>
    <script>
        $(document).ready(function() {
            //BOX BUTTON SHOW AND CLOSE
           jQuery('.small-graph-box').hover(function() {
              jQuery(this).find('.box-button').fadeIn('fast');
           }, function() {
              jQuery(this).find('.box-button').fadeOut('fast');
           });
           jQuery('.small-graph-box .box-close').click(function() {
              jQuery(this).closest('.small-graph-box').fadeOut(200);
              return false;
           });
           
            //CHARTS
            function gd(year, day, month) {
                return new Date(year, month - 1, day).getTime();
            }
            

            
           
        });
    </script>

    <script src="{{ asset('theme1/plugins/jquery-validation/dist/jquery.validate.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('theme1/plugins/jquery-validation/dist/additional-methods.min.js') }}" type="text/javascript"></script>

    @yield('footer_scripts')
    <script src="{{ URL::asset('theme1/js/custom.js')}}"></script>

</body>
</html>
