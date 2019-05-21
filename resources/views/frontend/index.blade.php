@extends('frontend.layout.app')
@section('content')

<section class="categories-icon bg-light section-padding">
        <div class="container">
            <h1 class="section-title">Categories</h1>
            <div class="row justify-content-center">
                @foreach($categories as $category)
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <a href="category.html">
                        <div class="icon-box">
                            <div class="icon">
                                <i class="lni-car"></i>
                            </div>
                            <h4>{{$category->title}}</h4>
                        </div>
                    </a>
                </div>
                @endforeach

            </div>
        </div>
    </section>

<section class="featured section-padding">
  <div class="container">
    <h1 class="section-title">Latest Products</h1>
    <div class="row">
      @foreach($adds as $add)
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
        <div class="featured-box">
          <figure>
            <div class="icon">
              <span class="bg-green"><i class="lni-heart"></i></span>
              <span><i class="lni-bookmark"></i></span>
            </div>
            <a href="#"><img class="img-fluid" src="{{asset($add->newspaper_piece)}}" alt=""></a>
          </figure>
          <div class="feature-content">
            <div class="product">
              <a href="#">{{$add->newspaper_id}}</a>
            </div>
            <h4><a href="ads-details.html">{{$add->title}}</a></h4>
            <div class="meta-tag">
              <span>
                <a href="#"><i class="lni-map-marker"></i>{{$add->address}}</a>
              </span>
            </div>
            <p class="dsc">{{$add->description}}</p>
            <div class="listing-bottom">
              <h3 class="price float-left"></h3>
              <a href="ads-details.html" class="btn btn-common float-right">View Details</a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>


<section class="featured-lis section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 wow fadeIn" data-wow-delay="0.5s">
        <h3 class="section-title">Featured Products</h3>
        <div id="new-products" class="owl-carousel owl-theme">
          @foreach($adds as $add)
          <div class="item">
            <div class="product-item">
              <div class="carousel-thumb">
                <img class="img-fluid" src="{{asset($add->newspaper_piece)}}" alt="">
                <div class="overlay">
                  <div>
                    <a class="btn btn-common" href="ads-details.html">View Details</a>
                  </div>
                </div>
                
               
              </div>
              <div class="product-content">
                <h3 class="product-title"><a href="ads-details.html">{{$add->title}}</a></h3>
                <span>{{$add->newspaper_id}}</span>
                <div class="icon">
                  <span><i class="lni-bookmark"></i></span>
                  <span><i class="lni-heart"></i></span>
                </div>
                <div class="card-text">
                  
                  <div class="float-right">
                    <a class="address" href="#"><i class="lni-map-marker"></i> {{$add->address}}</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>


<section class="works section-padding">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h3 class="section-title">How It Works?</h3>
      </div>
      <div class="col-lg-4 col-md-4 col-xs-12">
        <div class="works-item">
          <div class="icon-box">
            <i class="lni-users"></i>
          </div>
          <p>Create an Account</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-xs-12">
        <div class="works-item">
          <div class="icon-box">
            <i class="lni-bookmark-alt"></i>
          </div>
          <p>Post Free Ad</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-xs-12">
        <div class="works-item">
          <div class="icon-box">
            <i class="lni-thumbs-up"></i>
          </div>
          <p>Deal Done</p>
        </div>
      </div>
      <hr class="works-line">
    </div>
  </div>
</section>


<section class="services bg-light section-padding">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h3 class="section-title">Key Features</h3>
      </div>

      <div class="col-md-6 col-lg-4 col-xs-12">
        <div class="services-item wow fadeInRight" data-wow-delay="0.2s">
          <div class="icon">
            <i class="lni-leaf"></i>
          </div>
          <div class="services-content">
            <h3><a href="#">Elegant Design</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 col-xs-12">
        <div class="services-item wow fadeInRight" data-wow-delay="0.4s">
          <div class="icon">
            <i class="lni-display"></i>
          </div>
          <div class="services-content">
            <h3><a href="#">Responsive Design</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 col-xs-12">
        <div class="services-item wow fadeInRight" data-wow-delay="0.6s">
          <div class="icon">
            <i class="lni-color-pallet"></i>
          </div>
          <div class="services-content">
            <h3><a href="#">Clean UI</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 col-xs-12">
        <div class="services-item wow fadeInRight" data-wow-delay="0.8s">
          <div class="icon">
            <i class="lni-emoji-smile"></i>
          </div>
          <div class="services-content">
            <h3><a href="#">UX Friendly</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 col-xs-12">
        <div class="services-item wow fadeInRight" data-wow-delay="1s">
          <div class="icon">
            <i class="lni-pencil-alt"></i>
          </div>
          <div class="services-content">
            <h3><a href="#">Easily Customizable</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 col-xs-12">
        <div class="services-item wow fadeInRight" data-wow-delay="1.2s">
          <div class="icon">
            <i class="lni-headphone-alt"></i>
          </div>
          <div class="services-content">
            <h3><a href="#">Security Support</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section id="pricing-table" class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="section-title">Pricing Plan</h2>
      </div>
      <div class="col-lg-4 col-md-6 col-xs-12">
        <div class="table">
          <div class="icon">
            <i class="lni-gift"></i>
          </div>
          <div class="pricing-header">
            <p class="price-value">$29</p>
          </div>
          <div class="title">
            <h3>Basic</h3>
          </div>
          <ul class="description">
            <li>Free ad posting</li>
            <li>No Featured ads availability</li>
            <li>Access to limited features</li>
            <li>For 30 days</li>
            <li>100% Secure!</li>
          </ul>
          <button class="btn btn-common">Purchase</button>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-xs-12">
        <div class="table" id="active-tb">
          <div class="icon">
            <i class="lni-leaf"></i>
          </div>
          <div class="pricing-header">
            <p class="price-value">$49</p>
          </div>
          <div class="title">
            <h3>Standard</h3>
          </div>
          <ul class="description">
            <li>Free ad posting</li>
            <li>10 Featured ads availability</li>
            <li>Access to unlimited features</li>
            <li>For 30 days</li>
            <li>100% Secure!</li>
          </ul>
          <button class="btn btn-common">Purchase</button>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-xs-12">
        <div class="table">
          <div class="icon">
            <i class="lni-layers"></i>
          </div>
          <div class="pricing-header">
            <p class="price-value">$69</p>
          </div>
          <div class="title">
            <h3>Premium</h3>
          </div>
          <ul class="description">
            <li>Free ad posting</li>
            <li>100 Featured ads availability</li>
            <li>Access to unlimited features</li>
            <li>For 30 days</li>
            <li>100% Secure!</li>
          </ul>
          <button class="btn btn-common">Purchase</button>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="testimonial section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div id="testimonials" class="owl-carousel">
          <div class="item">
            <div class="img-thumb">
              <img src="assets/img/testimonial/img1.png" alt="">
            </div>
            <div class="testimonial-item">
              <div class="content">
                <p class="description">Eiusmod tempor incidiunt labore velit dolore magna aliqu sed eniminim veniam quis
                  nostrud exercition eullamco laborisaa, Eiusmod tempor incidiunt labore velit dolore magna.</p>
                <div class="info-text">
                  <h2><a href="#">Josh Rossi</a></h2>
                  <h4><a href="#">CEO of Fiverr</a></h4>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="item">
              <div class="img-thumb">
                <img src="assets/img/testimonial/img2.png" alt="">
              </div>
              <div class="testimonial-item">
                <div class="content">
                  <p class="description">Eiusmod tempor incidiunt labore velit dolore magna aliqu sed eniminim veniam
                    quis nostrud exercition eullamco laborisaa, Eiusmod tempor incidiunt labore velit dolore magna.</p>
                  <div class="info-text">
                    <h2><a href="#">Jessica</a></h2>
                    <h4><a href="#">CEO of Dropbox</a></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="item">
              <div class="img-thumb">
                <img src="assets/img/testimonial/img3.png" alt="">
              </div>
              <div class="testimonial-item">
                <div class="content">
                  <p class="description">Eiusmod tempor incidiunt labore velit dolore magna aliqu sed eniminim veniam
                    quis nostrud exercition eullamco laborisaa, Eiusmod tempor incidiunt labore velit dolore magna.</p>
                  <div class="info-text">
                    <h2><a href="#">Johnny Zeigler</a></h2>
                    <h4><a href="#">CEO of Fiverr</a></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="item">
              <div class="img-thumb">
                <img src="assets/img/testimonial/img4.png" alt="">
              </div>
              <div class="testimonial-item">
                <div class="content">
                  <p class="description">Eiusmod tempor incidiunt labore velit dolore magna aliqu sed eniminim veniam
                    quis nostrud exercition eullamco laborisaa, Eiusmod tempor incidiunt labore velit dolore magna.</p>
                  <div class="info-text">
                    <h2><a href="#">Josh Rossi</a></h2>
                    <h4><a href="#">CEO of Fiverr</a></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="item">
              <div class="img-thumb">
                <img src="assets/img/testimonial/img5.png" alt="">
              </div>
              <div class="testimonial-item">
                <div class="content">
                  <p class="description">Eiusmod tempor incidiunt labore velit dolore magna aliqu sed eniminim veniam
                    quis nostrud exercition eullamco laborisaa, Eiusmod tempor incidiunt labore velit dolore magna.</p>
                  <div class="info-text">
                    <h2><a href="#">Priyanka</a></h2>
                    <h4><a href="#">CEO of Dropbox</a></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section id="blog" class="section-padding">

  <div class="container">
    <h2 class="section-title">
      Blog Post
    </h2>
    <div class="row">
      <div class="col-lg-4 col-md-6 col-xs-12 blog-item">

        <div class="blog-item-wrapper">
          <div class="blog-item-img">
            <a href="single-post.html">
              <img src="assets/img/blog/img-1.jpg" alt="">
            </a>
          </div>
          <div class="blog-item-text">
            <div class="meta-tags">
              <span class="user float-left"><a href="#"><i class="lni-user"></i> Posted By Admin</a></span>
              <span class="date float-right"><i class="lni-calendar"></i> 24 May, 2018</span>
            </div>
            <h3>
              <a href="single-post.html">Recently Launching Our Iphone X</a>
            </h3>
            <p>
              Reprehenderit nemo quod tempore doloribus ratione distinctio quis quidem vitae sunt reiciendis, molestias
              omnis soluta.
            </p>
            <a href="single-post.html" class="btn btn-common">Read More</a>
          </div>
        </div>

      </div>
      <div class="col-lg-4 col-md-6 col-xs-12 blog-item">

        <div class="blog-item-wrapper">
          <div class="blog-item-img">
            <a href="single-post.html">
              <img src="assets/img/blog/img-2.jpg" alt="">
            </a>
          </div>
          <div class="blog-item-text">
            <div class="meta-tags">
              <span class="user float-left"><a href="#"><i class="lni-user"></i> Posted By Admin</a></span>
              <span class="date float-right"><i class="lni-calendar"></i> 24 May, 2018</span>
            </div>
            <h3>
              <a href="single-post.html">How to get more ad views</a>
            </h3>
            <p>
              Reprehenderit nemo quod tempore doloribus ratione distinctio quis quidem vitae sunt reiciendis, molestias
              omnis soluta.
            </p>
            <a href="single-post.html" class="btn btn-common">Read More</a>
          </div>
        </div>

      </div>
      <div class="col-lg-4 col-md-6 col-xs-12 blog-item">

        <div class="blog-item-wrapper">
          <div class="blog-item-img">
            <a href="single-post.html">
              <img src="assets/img/blog/img-3.jpg" alt="">
            </a>
          </div>
          <div class="blog-item-text">
            <div class="meta-tags">
              <span class="user float-left"><a href="#"><i class="lni-user"></i> Posted By Admin</a></span>
              <span class="date float-right"><i class="lni-calendar"></i> 24 May, 2018</span>
            </div>
            <h3>
              <a href="single-post.html">Writing a better product description</a>
            </h3>
            <p>
              Reprehenderit nemo quod tempore doloribus ratione distinctio quis quidem vitae sunt reiciendis, molestias
              omnis soluta.
            </p>
            <a href="single-post.html" class="btn btn-common">Read More</a>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>


<section class="subscribes section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="subscribes-inner">
          <div class="icon">
            <i class="lni-pointer"></i>
          </div>
          <div class="sub-text">
            <h3>Subscribe to Newsletter</h3>
            <p>and receive new ads in inbox</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <form>
          <div class="subscribe">
            <input class="form-control" name="EMAIL" placeholder="Enter your Email" required="" type="email">
            <button class="btn btn-common" type="submit">Subscribe</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection