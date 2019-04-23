@isset($viewname)
@php
$editroute = route('admin.edit' , ['slug' => $slug , 'id' => $id]);
$delroute = route('admin.delete' , ['slug' => $slug , 'id' => $id]);
@endphp
@if($viewname == "adminaction")
@php

                  $b = '<a href="'.$editroute.'"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a><a href="'.$delroute.'"><button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></a>';
                  @endphp
                  {!! $b !!}
                  @endif
                  @if($viewname == "citymanagement")
                  @php

                  $b = '<a href="'.$editroute.'"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a><a href="'.$delroute.'"><button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></a>';
                  @endphp
                  {!! $b !!}
                  @endif
@endisset