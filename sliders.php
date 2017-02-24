<div style="z-index: 9999;" class="slideOutTab first">
<a href="https://www.facebook.com/pacificMUN/" target="_blank">Like Us on Facebook</a>
</div>
<script>
        $(function() {
    
    // This is a shortcut to bind both mouseOver and mouseOut
    $('div.slideOutTab').hover(function() {
        // Animate out when hovered, stopping all previous animations
        $(this)
            .stop(true, false)
            .animate({
                left: 0
            }, 400);
    }, function() {
        // Animate back in when not hovered, stopping all previous animations
        $(this)
            .stop(true, false)
            .animate({
                left: -107
            }, 400);
    });
    
    
});
    </script>