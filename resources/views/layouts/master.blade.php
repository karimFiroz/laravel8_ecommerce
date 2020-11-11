
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('partials.meta')

    <!-- Bootstrap CSS -->
  @include('partials.style')





    <title>@yield('title')</title>
  </head>
  <body>
<!-- wrapper start-->
  <div class="wrapper">
  
 <!-- container start -->
        <div class="content">
        <!-- navbar start -->
@include('partials.navbar')
      <!-- navbar end -->
          </div>
          <!-- content end -->

    
      
      <div class="container margin-top-20">
      
<!--sidebar start-->
          
        @include('partials.sidebar')
          
          
<!--          end of sidebar-->
          
          
          
  <div class="col-md-9">        
          
        
          
@yield('content')
      
          </div>   
      
      
     </div> 
      
      
      </div>
             
<!--end of wrapper-->
 
  @include('partials.footer')


     

 @include('partials.scripts')
       
  </body>
</html>