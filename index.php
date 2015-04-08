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
</script>
</head>

<body>

  Testing the sdk <br />
  Banner image hover test <br />

  <img id="banner-img" src="http://www.vector-finder.com/site-images/too_big/fantasy_banner_vector.jpg" />

  <br />
  <a id="link" href="another.php">click me</a>

  <script type="text/javascript">
    AT.addEventListener('SharepointSaved', function (meta) {
      var token = meta[0].token;
      jQuery('#link').attr('href', jQuery('#link').attr('href')+token);
    });
  </script>

</body>

</html>
