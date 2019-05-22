@extends('frontend.layout.newspaper-head')
@section('content')

<div class="main-container section-padding">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-12 col-xs-12 page-sidebar">
<aside>

<!-- <div class="widget_search">
<form role="search" id="search-form">
<input type="search" class="form-control" autocomplete="off" name="s" placeholder="Search..." id="search-input" value="">
<button type="submit" id="search-submit" class="search-btn"><i class="lni-search"></i></button>
</form>
</div> -->

<div class="widget categories">
<h4 class="widget-title">All Categories</h4>
<ul class="categories-list">
<li @if("none" == app('request')->input('category')) style="background-color: #e91e63;" @endif>
<a href="#" @if("none" == app('request')->input('category')) style="color: white;" @endif>
<i class="lni-empty-file"></i>
All Categories <span class="category-counter"></span>
</a>
</li>
  @foreach($newspapers as $newspaper)
<li @if($newspaper->id == $adds->first()->newspaper_id) style="background-color: #e91e63;" @endif>
<a href="#" @if($newspaper->id == $adds->first()->newspaper_id) style="color: white;" @endif>
<i class="lni-empty-file"></i>{{$newspaper->title}} <span class="category-counter"></span>
</a>
</li>
@endforeach
</ul>
</div>
<div class="widget">
<h4 class="widget-title">Advertisement</h4>
<div class="add-box">
<img class="img-fluid" src="assets/img/img1.jpg" alt="">
</div>
</div>
</aside>
</div>
<div class="col-lg-9 col-md-12 col-xs-12 page-content">

<!-- <div class="product-filter">
<div class="short-name">
</div>
<div class="Show-item">
<span>Show Items</span>
<form class="woocommerce-ordering" method="post">
<label>
<select name="order" class="orderby">
<option selected="selected" value="menu-order">49 items</option>
<option value="popularity">popularity</option>
<option value="popularity">Average ration</option>
<option value="popularity">newness</option>
<option value="popularity">price</option>
</select>
</label>
</form>
</div>
<ul class="nav nav-tabs">
<li class="nav-item">
<a class="nav-link active" data-toggle="tab" href="#grid-view"><i class="lni-grid"></i></a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#list-view"><i class="lni-list"></i></a>
</li>
</ul>
</div> -->
<div class="adds-wrapper">
<div class="tab-content">
<div id="grid-view" class="tab-pane fade active show">
<div class="row">
@foreach($adds as $add)
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div class="featured-box">
<figure>
<div class="icon">
<span class="bg-green"><i class="lni-heart"></i></span>
<span><i class="lni-bookmark"></i></span>
</div>
<a href="{{url('add-detail' , $add->id)}}"><img class="img-fluid" src="{{asset($add->newspaper_piece)}}" alt=""></a>
</figure>
<div class="feature-content">
<div class="product">
<a href="#">{{$add->getNewsPaper->title}}</a>
</div>
<h4><a href="ads-details.html">{{$add->title}}</a></h4>
<div class="meta-tag">
<span>
<a href="#"><i class="lni-map-marker"></i>{{$add->address}}</a>
</span>
</div>
<p class="dsc">{{$add->description}}</p>
<div class="listing-bottom">
<a href="ads-details.html" class="btn btn-common float-right">View Details</a>
</div>
</div>
</div>
</div>
@endforeach
</div>
</div>
</div>
</div>


<div class="pagination-bar">
<nav>
{{$adds->appends(request()->except(['page','_token']))->links('frontend.pagination')}}
</nav>
</div>

</div>
</div>
</div>
</div>


@endsection