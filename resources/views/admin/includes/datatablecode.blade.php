@isset($viewname)
@if($viewname == "adminaction")
@php
$editroute = route('admin.edit' , ['slug' => $slug , 'id' => 1]);
                  $b = '<a href="'.$editroute.'"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>';
                  @endphp
                  {!! $b !!}
                  @endif
                  @if($viewname == "adminactions")
                  <a href="#"><button class="btn btn-primary btn-xs"><i class="fa fa-trash"></i></button></a>
                  @endif
@endisset