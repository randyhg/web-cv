<!DOCTYPE html>
<html lang="en">
  <head>
      @include('partials.head')   <!-- Head -->
  </head>
  
  <body>
    <header id="header-wrap">
      @include('partials.navbar')   <!-- Navbar -->
    </header>

    @include('sweetalert::alert')   <!-- SweetAlert -->
    
    @include('partials.home')   <!-- Home -->

    @include('partials.about')   <!-- About -->

    @include('partials.skills')   <!-- Skills --> 

    @include('partials.resume')   <!-- Resume --> 

    @include('partials.contact')   <!-- Contact --> 

    @include('partials.footer')   <!-- Footer --> 

    @include('partials.scripts')   <!-- Scripts -->
      
  </body>
</html>
