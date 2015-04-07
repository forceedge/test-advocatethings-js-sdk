<html>

<head>
<script id="advocate-things-script"
        src="https://advocate-things.divshot.com/at-sdk-0.0.1.js?key=YOUR_KEY"
        type="text/javascript"></script>

<script>
jQuery(function () {
    // DOM is loaded
         AT.sendTouchpoint('page_load', {
                 _at: { user_id: jQuery('#name').val() }
         });
});
</head>

<body>
Testing the sdk
</body>

</html>
