<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>EB1 Filing Experts | Your Path to U.S. Permanent Residency</title>
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="{{ url()->current() }}" />
  <meta name="image" property="og:image" content="{{ asset('assets/images/inner-images/favicon.png') }}">
  <meta name="title" property="og:title" content="EB1 Filling Experts | Your Path to U.S. Permanent Residency">
  <meta name="author" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description"
    content="EB1 Filling Experts help tech professionals secure the EB1A Green Card with fast approvals, expert consultation & a streamlined U.S. immigration process." />
  <meta name="keywords"
    content="EB1 Filling Experts, EB1A green card, EB-1A visa, EB1A for professionals, extraordinary ability immigration, EB1A consultation, EB1A approval, O1A visa, U.S. permanent residency, immigration lawyer EB1A, EB1A premium processing, EB1A evaluation" />

  <link rel="icon" type="image/png" href="{{ asset('assets/images/inner-images/faviconnew.png') }}" />

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{ asset('assets/css/eb1a.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />



  {{-- <script type="application/ld+json">
  {
    "@context": "https://schema.org/",
    "@type": "WebSite",
    "name": "EB1 Filling Experts",
    "url": "{{ url('/') }}",
    "potentialAction": {
      "@type": "SearchAction",
      "target": "{{ url('/{search_term_string}') }}",
      "query-input": "required name=search_term_string"
    }
  }
  </script> --}}

  @include('layouts.styles')
</head>

<body class="home">


  @include('layouts.header-content')

  @yield('content')

   @include('layouts.footer-content')

</body>
</html>
