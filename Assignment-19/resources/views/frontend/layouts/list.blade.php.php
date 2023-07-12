<!DOCTYPE html>
<html lang="en">

  <head>
        @include('frontend.includes.head')
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

  </head>

  <body>


    <!-- Header -->
        @include('frontend.includes.nav')
    <!-- Page Content -->





    <section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                    @yield('content')
              </div>
            </div>
          </div>
            @include('frontend.includes.sidebar')
        </div>
      </div>
    </section>

    
        @include('frontend.includes.footer')

    <!-- Bootstrap core JavaScript -->

                        @include('frontend.includes.scripts')

 <script>
    axios.get('/posts')
    .then(function (response) {
        // Handle the response data
    })
    .catch(function (error) {
        console.log(error);
    });
</script>

  </body>
</html>