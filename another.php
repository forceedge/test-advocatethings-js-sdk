<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
window.advocate_things_data = {
   _at: {
     touchpointName: 'tp_garage',
     email: 'nathan@digitalanimal.com'
   },
   transaction: {
   	 amount: 80
   }
};
</script>
<script id="advocate-things-script"
        src="https://d22stxronnwc65.cloudfront.net/sdk.js?key=174b2560ec313bab19d9c9f82b7a849b"
        type="text/javascript"></script>
</head>

<body>
The second page

<img src="" id="populate" />
<div id="response"></div>

	<script type="text/javascript">
	AT.addEventListener(AT.Events.TouchpointSaved, function (meta) {
		console.log(meta);
		jQuery('#populate').attr('src', meta.user.image);
	});
	</script>
</body>

</html>