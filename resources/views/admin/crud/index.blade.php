@extends('admin.layout.app')
@section('main-panel')
<!-- ########## START: MAIN PANEL ########## -->
<div class="br-pagebody mg-t-5 pd-x-30"> 
  
   <!-- br-pageheader -->
   <!-- <p class="mg-b-25 mg-lg-b-50"> Seller Products </p> -->
   <p class="mg-t-25 mg-lg-b-50 pull-right "> <a href="{{route('admin.create' , $slug)}}"><button type="button" class="btn btn-success"><i class="fa fa-plus-circle"></i></button></a> </p>
   <div class="table-wrapper">
      <table id="datatable" class="table">
         <thead>
            <tr class="table-row">
               @foreach($headers as $header)
               <th class="wd-15p table-data">{{$header}}</th>
               @endforeach
            </tr>
         </thead>
         <tbody>
         </tbody>
      </table>
   </div>
   <!-- table-wrapper -->
</div>
<!-- br-section-wrapper -->
<footer class="br-footer">
   <div class="footer-left">
      <div class="mg-b-2">Copyright &copy; 2017. Bracket. All Rights Reserved.</div>
      <div>Attentively and carefully made by ThemePixels.</div>
   </div>
   <div class="footer-right d-flex align-items-center">
      <span class="tx-uppercase mg-r-10">Share:</span>
      <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/bracket/intro"><i class="fa fa-facebook tx-20"></i></a>
      <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Bracket,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/bracket/intro"><i class="fa fa-twitter tx-20"></i></a>
   </div>
</footer>
<!-- ########## END: MAIN PANEL ########## -->
@endsection
@section('js-classes')
<script>
         {!! $datatable !!}
</script>

@endsection