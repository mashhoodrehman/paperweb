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
                  @if($viewname == "cateimage")
                  @php
                  $b = '<img src="'.asset($columnval).'" width="50px" height="50x">';
                  @endphp
                  {!! $b !!}
                  @endif
                  @if($viewname == "logoimg")
                  @php
                  $logoimg = '<img src="'.asset($columnval).'" width="50px" height="50x">';
                  @endphp
                  {!! $logoimg !!}
                  @endif
                  @if($viewname == "newspapertitle")
                  @php
                  $newspapertitle = $json->getNewsPaper->title;
                  @endphp
                  {!! $newspapertitle !!}
                  @endif
                   @if($viewname == "categorytitle")
                  @php
                  $getCategory = ( $json->getCategory ? $json->getCategory->title : "N/A" );
                  @endphp
                  {!! $getCategory !!}
                  @endif
                  @if($viewname == "jobtype")
                  @php
                  $getJobType = ( $json->getJobType ? $json->getJobType->job_type_title : "N/A" );
                  @endphp
                  {!! $getJobType !!}
                  @endif
                  @if($viewname == "citytitle")
                  @php
                  $getJobType = ( $json->getCity ? $json->getCity->title : "N/A" );
                  @endphp
                  {!! $getJobType !!}
                  @endif
                  @if($viewname == "qualificationtitle")
                  @php
                  $getJobType = ( $json->getQualification ? $json->getQualification->title : "N/A" );
                  @endphp
                  {!! $getJobType !!}
                  @endif
@endisset