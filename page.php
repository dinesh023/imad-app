
<!DOCTYPE html>
<html><head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<title>Page not found</title>

		<style type="text/css">
			body { background-color: #fff; margin: 0; font-family: "Helvetica Neue", "Helvetica", "Lucida Grande", sans-serif; }

			.container { text-align: center; }
			.center-container { position: absolute; top: 50%; left: 50%; width: 240px; margin-left: -120px; margin-top: -80px; }
			.fade { opacity: 0; -webkit-transition-property: opacity; -webkit-transition-duration: .5s; -webkit-transition-timing-function: cubic-bezier(.33,0,.2,1); -moz-transition-property: opacity; -moz-transition-duration: .5s; -moz-transition-timing-function: cubic-bezier(.33,0,.2,1); -ms-transition-property: opacity; -ms-transition-duration: .5s; -ms-transition-timing-function: cubic-bezier(.33,0,.2,1); -o-transition-property: opacity; -o-transition-duration: .5s; -o-transition-timing-function: cubic-bezier(.33,0,.2,1); transition-property: opacity; transition-duration: .5s; transition-timing-function: cubic-bezier(.33,0,.2,1); }
			.fade.in { opacity: 1; }

			h1 { letter-spacing: -1px; line-height: 60px; font-size: 60px; font-weight: 100; margin: 0; text-shadow: 0 1px 0 #fff; }
			p { color: rgba(0, 0, 0, 0.5); margin: 15px 0; line-height: 1.6; }

			.branding { width: 150px; position: fixed; bottom: 40px; right: 40px; }
		</style>
	</head>
	<body onload="fadeIn()">

		<div class="container center-container fade">
			<h1>404</h1>
			<p>The page you requested does not exist</p>
		</div>

		<script type="text/javascript">
			function fadeIn() {
				document.getElementsByClassName('fade')[0].className += ' in';
			}
		</script>
	

</body></html>
