@isset($SEO->FACEBOOK_PIXEL)
  <!-- Facebook Pixel Code -->
  <script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '{{$SEO->FACEBOOK_PIXEL}}');
    fbq('track', 'PageView');
  </script>
  <noscript>
    <img src="https://www.facebook.com/tr?id={{$SEO->FACEBOOK_PIXEL}}&ev=PageView&noscript=1" alt="Facebook Pixel Code" height="1" width="1" style="display:none" />
  </noscript>
  <!-- End Facebook Pixel Code -->
@endisset