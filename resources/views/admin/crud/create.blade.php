@extends('admin.layout.app')
@section('main-panel')
      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <h6 class="br-section-label">{{$label}}</h6>
          <p class="br-section-text">{{$labeldesc}}</p>

          <div class="form-layout form-layout-1">
            <form action="{{route('admin.store' , $slug)}}" method="POST" {!!$encytype!!}>
              {{csrf_field()}}
            <div class="row mg-b-25">
              @foreach($inputs as $input)
              <div class="{{$input->class}}">
                <div class="form-group">
                  <label class="form-control-label">{{$input->label}}<span class="{{$input->span['class']}}">{{$input->span['label']}}</span></label>
                  @if($input->input['type'] == "select")
                  @isset($input->values)
                  <select name="{{$input->input['name']}}" class="{{$input->input['class']}}">
                    @foreach($input->values as $value)
                    <option value="{{$value['id']}}" >{{$value}}</option>
                    @endforeach
                  </select>
                  @else
                  @php $var = (string) $input->variable; $varcol = (string) $input->variablecol; $p = (string) $input->variablecol['primary'];  @endphp
                  <select name="{{$input->input['name']}}" class="{{$input->input['class']}}">
                    @foreach( $data[$var] as $select)
                    <option value="{{ $select->{$p} }}">{{$select->{$varcol} }}
                    </option>
                    @endforeach
                  </select>
                  @endisset
                  @elseif($input->input['type'] == "textarea")
                  <textarea name="{{$input->input['name']}}" id="{{$input->input['id']}}"></textarea>

                  <script>{!! $input->code !!}</script>
                   @elseif($input->input['type'] == "hidden")
                   <input type="hidden" name="{{$input->input['name']}}" value="{{$input->input['value']}}">
                  @else
                  <input class="{{$input->input['class']}}" type="{{$input->input['type']}}" id="{{$input->input['id']}}" name="{{$input->input['name']}}" value="{{$input->input['value']}}" placeholder="{{$input->input['placeholder']}}" {{$input->input['required']}}>
                  @endif
                </div>
              </div>
              @endforeach
              <input type="hidden" name="slug_xml" value="{{$slug}}">
            </div><!-- row -->

            <div class="form-layout-footer">
              <button class="btn btn-info">Submit Form</button>
              <button class="btn btn-secondary">Cancel</button>
            </div><!-- form-layout-footer -->
            </form>
          </div><!-- form-layout -->

        </div><!-- br-section-wrapper -->
      </div><!-- br-pagebody -->
      <footer class="br-footer">
        <div class="footer-left">
          <div class="mg-b-2">Copyright © 2017. Bracket Plus. All Rights Reserved.</div>
          <div>Attentively and carefully made by ThemePixels.</div>
        </div>
        <div class="footer-right d-flex align-items-center">
          <span class="tx-uppercase mg-r-10">Share:</span>
          <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/bracketplus/intro"><i class="fab fa-facebook tx-20"></i></a>
          <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Bracket%20Plus,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/bracketplus/intro"><i class="fab fa-twitter tx-20"></i></a>
        </div>
      </footer>

      @push('script-js')
      @if(!empty($push))

      {!! $push !!}
      @endif
      @endpush
                @endsection