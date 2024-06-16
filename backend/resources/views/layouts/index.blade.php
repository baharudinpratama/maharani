<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Maharani</title>
    <meta name="description" content="Maharani">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Style --}}
    @include('includes.style')
	@stack('style')
</head>

<body>
    {{-- Left Panel --}}
    @include('includes.sidebar')

    <div id="right-panel" class="right-panel">
        {{-- Header --}}
        @include('includes.header')

        <div class="content">
            {{-- Content --}}
			@yield('content')
        </div>

        <div class="clearfix"></div>
    </div>

    {{-- Scripts --}}
    @include('includes.script')
	@stack('script')
</body>

</html>
