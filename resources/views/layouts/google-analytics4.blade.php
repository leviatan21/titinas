@isset($SEO->GOOGLE_ANALYTICS4)
    <script async src="https://www.googletagmanager.com/gtag/js?id={{$SEO->GOOGLE_ANALYTICS4}}"></script>

    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', "{{$SEO->GOOGLE_ANALYTICS4}}");
    </script>
@endisset