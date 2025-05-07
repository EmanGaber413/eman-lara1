
@extends("layouts.app")


@section("root")
<div>
<div class="bg-secondary-subtle ">
    <div class="container row m-auto">
        <div class="col-6 p-5">
            <h1>Hello, I’m Steven
                Welcome to my blog</h1>
            <p>Don't miss out on the latest news about Travel tips,
                 Hotels review, Food guide...</p>
                <div class="input-group flex-nowrap my-5">

                    <input type="text" class="form-control p-3"
                     placeholder="Enter your email" aria-label="Username"
                      aria-describedby="addon-wrapping">
                     <span class="input-group-text rounded-e-5 bg-info rounded-start rounded-5"
                     id="addon-wrapping">subscribe</span>
                </div>
        </div>
        <div class="col-6 p-5"><img src="{{asset("featured.png")}}" alt="" srcset=""></div>
    </div>
</div>


<div class="container row m-auto my-2">
    <h3 class="my-3">Featured posts</h3>


 <div id="carouselExample" class="carousel slide col-8 rounded-1">
    <div class="carousel-inner">

      <div class="carousel-item active">
        <img class="img-fluid rounded-4" src="{{asset("1.jpg")}}" alt="" srcset="">
      </div>
      <div class="carousel-item">
        <img class="img-fluid rounded-4" src="{{asset("2.jpg")}}" alt="" srcset="">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

   <div class="card col-4 shadow" style="  padding:0px !important;">
        <a href="#" class="text-decoration-none">
        <img src="{{asset("3.jpg")}}" class="card-img-top" alt="..." >
        <div class="card-body">

          <h3 class="card-text py-4">Which copany would you choice?</h3>
          </a>
        </div>
    </div>

</div>
@endsection

@section("title","Stories")




