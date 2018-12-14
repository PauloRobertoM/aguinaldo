<?php include 'components/header.php'; ?>

	<section class="titulo-interno">
		<div class="container">
			<a href="index.php"><i class="fa fa-angle-left" aria-hidden="true"></i> Notícias</a>
		</div><!-- container -->
	</section><!-- titulo-interno -->

	<section class="interna noticia-interna">
		<div class="container">
			<img src="assets/images/noticia.jpg" alt="" />
			<h2>Lorem ipsum dolor sit amet, consectetu adipiscing elit. Donec sed</h2>
			<div class="borda"></div>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed tincidunt massa. Etiam tincidunt libero eros, eget blandit nibh tincidunt ut. Maecenas eu odio diam. Donec fringilla laoreet porttitor. In dignissim urna pharetra imperdiet venenatis. Aliquam quis quam non nisi dictum eleifend vitae sed dolor. Vestibulum iaculis aliquam elementum. Ut scelerisque erat ac purus dictum, sit amet ultrices arcu ultricies. Etiam imperdiet libero quis urna tempor malesuada. Quisque eu volutpat velit. Ut in est at nisi feugiat venenatis. Aenean a tincidunt purus, sed lobortis risus. Nam at lectus sit amet libero rutrum venenatis. Fusce iaculis mollis elit eget interdum.</p>
			<p>Vivamus iaculis nec urna vitae elementum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam scelerisque dolor non diam luctus pharetra. Praesent in nunc non enim sodales elementum. Nulla faucibus lacinia arcu, quis pellentesque magna sollicitudin vitae. Praesent a lorem vitae orci vulputate fermentum eu bibendum lectus. Integer faucibus eu dolor vel finibus. In tincidunt libero et ex lobortis, sit amet blandit velit venenatis. Nulla a accumsan orci, id tincidunt mauris. Cras laoreet vitae nulla nec sodales.</p>
			<div class="borda"></div>
			<div class="shares">
				<ul>
					<li><a href="" class="hvr-float"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="" class="hvr-float"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
					<li><a href="" class="hvr-float"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
				</ul>
				<!-- COMMENTS -->
				<div id="fb-root"></div>
				<script>(function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id)) return;
					js = d.createElement(s); js.id = id;
					js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.7&appId=300193366983202";
					fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>

				<div class="fb-comments" data-href="" data-width="100%" data-numposts="5"></div>
			</div><!-- .shares -->
		</div><!-- container -->
	</section><!-- interna -->

<?php include 'components/footer.php'; ?>