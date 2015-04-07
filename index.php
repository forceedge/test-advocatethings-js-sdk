<html>

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
window.advocate_things_data = {
   _at: {
     user_id: '56'
   },
   page: {
     id: '23',
     category: 'sports'
  }
};
</script>
<script id="advocate-things-script"
        src="https://d22stxronnwc65.cloudfront.net/sdk.js?key=e2a718d19b7d8fe34bf070e282dfdde9"
        type="text/javascript"></script>

<script>
jQuery(function () {
    // DOM is loaded
         AT.sendTouchpoint('page_load', {
                 _at: { user_id: jQuery('#name').val() }
         })
});
</script>
</head>

<body>
Testing the sdk
</body>

</html>
