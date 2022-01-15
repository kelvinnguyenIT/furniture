{{--Put @admin before </body>--}}
@if(config('app.cms') && auth()->check())
    <input id="cms-image" class="cms-hidden" type="file" accept="image/*" style="display: none;">
    <script src="/js/admin/cms.min.js"></script>
@endif
