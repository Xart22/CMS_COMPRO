@extends('cms.layout') @section('title','Dashboard') @section('content')

<div class="container d-flex">
    <div class="mobile border">
        <h4 style="text-align: center">Mobile View</h4>
        <iframe
            src="/semaju/public"
            frameborder="0"
            width="375"
            height="875"
        ></iframe>
    </div>
    <div class="web ml-3 border" id="web">
        <h4 style="text-align: center">Desktop View</h4>
        <iframe
            src="/semaju/public"
            frameborder="0"
            width="1250rem"
            height="875"
        ></iframe>
    </div>
</div>

@endsection @section('script')
<script>
    function responClass(s) {
        if (s.matches) {
            $("#web").hide();
        } else {
            $("#web").show();
        }
    }

    var s = window.matchMedia("(max-width: 375px)");
    responClass(s);
    s.addListener(responClass);
</script>
@endsection
