<html>

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
window.advocate_things_data = {
   _at: {
     email: 'wahab.qureshi+iamunique@digitalanimal.com'
   },
   page: {
     id: '23',
     category: 'sports'
  },
  user: {
    image: 'http://www.thepolitesse.com/wp-content/uploads/2014/01/All-intents-and-purposes.jpg'
  }
};
</script>
<script id="advocate-things-script"
        src="https://d22stxronnwc65.cloudfront.net/sdk.js?key=174b2560ec313bab19d9c9f82b7a849b"
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
      console.log(JSON.stringify(meta));
      jQuery('#link').attr('href', jQuery('#link').attr('href')+ "?DA=" + token);
    });
  </script>

</body>

</html>
