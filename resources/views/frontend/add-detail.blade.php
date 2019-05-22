@extends('frontend.layout.app')
@section('content')

<div class="section-padding">
<div class="container">

<div class="product-info row">
<div class="col-lg-8 col-md-12 col-xs-12">
<div class="ads-details-wrapper">
<div id="owl-demo" class="owl-carousel owl-theme">
<div class="item">
<div class="product-img">
<img class="img-fluid" src="{{asset($add->newspaper_piece)}}" alt="">
</div>
</div>
</div>
</div>
<div class="details-box">
<div class="ads-details-info">
<h2>{{$add->title}}</h2>
<div class="details-meta">
<span><a href="#"><i class="lni-map-marker"></i>{{$add->address}}</a></span>
</div>
<p class="mb-4">{{$add->description}}</p>
<h4 class="title-small mb-3">Qualification:</h4>
<ul class="list-specification">
<li><i class="lni-check-mark-circle"></i>{{$add->getQualification->title}}</li></ul>
<h4 class="title-small mb-3">Minimum Requirements</h4>
<ul class="list-specification">
<li><i class="lni-check-mark-circle"></i>{{$add->minimum_requirements}}</li></ul>
</div>
<div class="tag-bottom">
<div class="float-left">
<ul class="advertisement">
<li>
<p><strong><i class="lni-folder"></i> Job Type:</strong> <a href="#">{{$add->getJobType->job_type_title}}</a></p>
</li>
<li>
<p><strong><i class="lni-archive"></i> Apply Date:</strong> {{$add->apply_by}}</p>
</li>
<li>
<p><strong><i class="lni-archive"></i> Category:</strong> {{$add->getCategory->title}}</p>
</li>
<li>
<p><strong><i class="lni-package"></i> Last Date:</strong> <a href="#">{{$add->last_date}}</a></p>
</li>
</ul>
</div>
<div class="float-right">
<div class="share">
<div class="social-link">
<a class="facebook" data-toggle="tooltip" data-placement="top" title="facebook" href="#"><i class="lni-facebook-filled"></i></a>
<a class="twitter" data-toggle="tooltip" data-placement="top" title="twitter" href="#"><i class="lni-twitter-filled"></i></a>
<a class="linkedin" data-toggle="tooltip" data-placement="top" title="linkedin" href="#"><i class="lni-linkedin-fill"></i></a>
<a class="google" data-toggle="tooltip" data-placement="top" title="google plus" href="#"><i class="lni-google-plus"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-xs-12">

<aside class="details-sidebar">
<div class="widget">
<h4 class="widget-title">Newspaper Name</h4>
<div class="agent-inner">
<div class="agent-title">
<div class="agent-photo">
<a href="#"><img src="{{asset($add->getNewsPaper->logo)}}" alt=""></a>
</div>
<div class="agent-details">
<h3><a href="#">{{$add->getNewsPaper->title}}</a></h3>
</div>
</div>
<!-- <button class="btn btn-common fullwidth mt-4">Send Message</button> -->
</div>
</div>

<div class="widget">
<h4 class="widget-title">More Ads From Newspaper ({{$add->getNewsPaper->title}})</h4>
<ul class="posts-list">
	@foreach($adds as $add)
<li>
<div class="widget-thumb">
<a href="#"><img src="assets/img/details/img1.jpg" alt="" /></a>
</div>
<div class="widget-content">
<h4><a href="#">{{$add->title}}</a></h4>
<div class="meta-tag">
<span>
<a href="#"><i class="lni-map-marker"></i>{{$add->address}}</a>
</span>
<div class="clearfix"></div>
</li>
@endforeach
</ul>
</div>
</aside>

</div>
</div>

</div>
</div>


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


<footer>

<section class="footer-Content">
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
<div class="widget">
<div class="footer-logo"><img src="assets/img/logo.png" alt=""></div>
<div class="textwidget">
<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt consectetur, adipisci velit.</p>
</div>
<ul class="mt-3 footer-social">
<li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
<li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
<li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>
<li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
<div class="widget">
<h3 class="block-title">Quick Link</h3>
<ul class="menu">
<li><a href="#">- About Us</a></li>
<li><a href="#">- Blog</a></li>
<li><a href="#">- Events</a></li>
<li><a href="#">- Shop</a></li>
<li><a href="#">- FAQ's</a></li>
<li><a href="#">- About Us</a></li>
<li><a href="#">- Blog</a></li>
<li><a href="#">- Events</a></li>
<li><a href="#">- Shop</a></li>
<li><a href="#">- FAQ's</a></li>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
<div class="widget">
<h3 class="block-title">Contact Info</h3>
<ul class="contact-footer">
<li>
<strong><i class="lni-phone"></i></strong><span>+1 555 444 66647 <br> +1 555 444 66647</span>
</li>
<li>
<strong><i class="lni-envelope"></i></strong><span>contact@mail.com <br> support@mail.com</span>
</li>
<li>
<strong><i class="lni-map-marker"></i></strong><span><a href="#">9870 St Vincent Place, Glasgow, DC 45 <br>Fr 45</a></span>
</li>
</ul>
 </div>
</div>
</div>
</div>
</section>


<div id="copyright">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="site-info text-center">
<p>Designed and Developed by <a href="https://uideck.com/" rel="nofollow">UIdeck</a></p>
</div>
</div>
</div>
</div>
</div>

@endsection