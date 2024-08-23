<!DOCTYPE html>
<html lang="es">
    <head>
        @include('includes.head')
    </head>
<body>
    @include('includes.header')

    @yield('content')

    @include('includes.footer')
    <script src="//unpkg.com/alpinejs" defer></script>
</body>

    <script>
      (function(d,t) {
        var BASE_URL="https://chat.hacelogeek.com";
        var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=BASE_URL+"/packs/js/sdk.js";
        g.defer = true;
        g.async = true;
        s.parentNode.insertBefore(g,s);
        g.onload=function(){
          window.chatwootSDK.run({
            websiteToken: 'YLEntfiGDotgeimtXqLaV5xR',
            baseUrl: BASE_URL
          })
        }
      })(document,"script");
    </script>
    
</html>
