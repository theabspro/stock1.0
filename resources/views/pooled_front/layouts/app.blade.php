<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include($theme.'partials.common.head')
    @yield('header_css')
</head>

<body>
    @include($theme.'partials.common.header')
    @yield('content')
    @include($theme.'partials.common.footer')

    @yield('footer_scripts')
        <script type="text/javascript">
            $(document).ready(function(){
                @if(Session::has('success'))
                    new Noty({
                      type: 'success',
                      layout: 'topRight',
                      text: '<?php echo Session::get('success') ?>'
                    }).show();
                @endif
          
                @if(Session::has('info'))
                    new Noty({
                      type: 'info',
                      layout: 'topRight',
                      text: '<?php echo Session::get('info') ?>'
                    }).show();
                @endif
          
                @if(Session::has('error'))
                    new Noty({
                      type: 'error',
                      layout: 'topRight',
                      text: '<?php echo Session::get('error') ?>'
                    }).show();
                @endif    
          
                @if(Session::has('errors'))
                    new Noty({
                      type: 'error',
                      layout: 'topRight',
                      text: '<?php echo implode(', ',Session::get('errors')) ?>'
                    }).show();
                @endif    

            })
        </script>
</body>
</html>
