{{--Put @home after <title></title>--}}
@if(config('app.cms'))
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        [data-cms] {
            visibility: hidden;
        }

        @auth
        [data-cms]:hover {
            border: 1px dotted #3498db;
        }
        @endauth
    </style>
    <script src="/js/home/cms.min.js"></script>
@endif
