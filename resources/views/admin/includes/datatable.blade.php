var oTable =   $('#datatable').DataTable({
          seaching: true,
          @isset($config['dom'])
          @if($config['dom'] == "true")
          "dom": '<"toolbar">lfrtip',
          @endif
          @endisset
          
  "fnDrawCallback": function( oSettings ) {
  @if($config['switchery'] == "true")
      var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

elems.forEach(function(html) {
  var switchery = new Switchery(html);
});
@endif
    },
          oLanguage: {
        sProcessing: "<img src='{{asset('30.gif')}}'>"
        },
          processing: true,
          serverSide: true,
          lengthChange: {{$config['length']}},
          @isset($config['nexttolen'])
          "lengthMenu": [10, 25, 50, 150 , 200],
          @endisset
          order: [[ 1, 'asc' ]],
          "ajax": {
          'url': "{{ route('admin.datatable' , $slug) }}",
          'type': 'POST',
          'headers': {
          'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        
        data: function (d) {
        @if($config['columnsearch'] == "true")
                d.status = $('input[name=status]').val();
                d.newseller = $('input[name=newseller]').val();
                d.new = $('input[name=new]').val();
                d.deliver = $('input[name=deliver]').val();
                d.top = $('input[name=top]').val();
            @endif
            }
        },
        
          
        columns: [ 
          @if($config['child'] == "true")
          {
            "className":      'details-control',
            "orderable":      false,
            "data":           null,
            "defaultContent": ''
        },
        @endif
        @foreach($columns as $column)  
          {data: '{{$column}}', "width": "{{$column['width']}}%"  , name:'{{$column['name']}}', searchable: '{{$column["searchable"]}}'},
        @endforeach      
        ]
    });
        @isset($config['create'])
          @if($config['create'] == "true")
          @php $route = $config['create-route']; @endphp
          $("div.toolbar").append('<a href="{{route('admin.'.$route)}}"><button type="button" class="btn btn-success"><i class="fa fa-plus-circle"></i></button></a> ');
         
        @endif
        @endisset
        @isset($config['button'])
          @if($config['button'] == "true")
          @php $url = $config['exporturl']; @endphp
          $("div.toolbar").append(' <a href="{{url($url)}}"><button type="button" class="btn btn-success"><i class="fa fa-print"></i></button></a> ');
        @endif
        @endisset
         
        @if($config['child'] == "true")
        $('#datatable1 tbody').on('click', 'td.details-control', function () {
          var tr = $(this).closest('tr');
          var row = oTable.row( tr );
     
          if ( row.child.isShown() ) {
              // This row is already open - close it
              row.child.hide();
              tr.removeClass('shown');
          }
          else {
              // Open this row
              row.child( format(row.data()) ).show();
              tr.addClass('shown');
          }
          $('#childtable').dataTable({
            searching: false,
            lengthChange: false
          });
      } );
      @endif



        @isset($config['nexttolen'])
        $('#datatable1_length').append('<h3>{{$config["text"]}}</h3>');
        @else
        $('#datatable1_length').html('<h3>{{$config["text"]}}</h3>');
        @endisset