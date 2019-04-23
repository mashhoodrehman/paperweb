<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Paper Web</title>
    <!-- vendor css -->
    <link href="{{url('bracketThemes/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{url('bracketThemes/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    <link href="{{url('bracketThemes/lib/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
    <link href="{{url('bracketThemes/lib/jquery-switchbutton/jquery.switchButton.css')}}" rel="stylesheet">
    <link href="{{url('bracketThemes/lib/rickshaw/rickshaw.min.css')}}" rel="stylesheet">
    <link href="{{url('bracketThemes/lib/chartist/chartist.css')}}" rel="stylesheet">
    <link href="{{url('bracketThemes/lib/datatables/jquery.dataTables.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/sellercenter/css/dataTables.checkboxes.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
    <link href="{{url('bracketThemes/lib/select2/css/select2.min.css')}}" rel="stylesheet">
    <link href="{{url('css/switchery.css')}}" rel="stylesheet">
    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{url('bracketThemes/css/bracket.css')}}">
    <style type="text/css">
    .switch {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 34px;
    }

.switch input {display:none;}
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}
.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}
input:checked + .slider {
  background-color: #2196F3;
}
input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}
input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
.loader {
    position:   fixed;
    z-index:    1000;
    top:        0;
    left:       0;
    height:     100%;
    width:      100%;
    background: rgba( 255, 255, 255, .8 ) 
                url('https://3.bp.blogspot.com/-eHfZtLqtpJQ/V5DCLDBBqCI/AAAAAAAABeg/kAHygWy6Ydcs4BcTajh4Pf6mkfJ60rH2gCLcB/s320/01-progress.gif') 
                50% 50% 
                no-repeat;
        }
    </style>
    <script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/switchery.js')}}"></script>
    

    <script type="text/javascript">
      @stack('script-js')
    </script>
  </head>
