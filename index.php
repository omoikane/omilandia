<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Daniele De Nobili</title>
        <meta name="description" content="Pagina personale di Daniele De Nobili">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<style><?php echo file_get_contents('css/style.css'); ?></style>

		<script>
			(function (w, d, t, s, e) {
				w.WebFontConfig={google:{families:['Lato:300:latin']}};

				w.GoogleAnalyticsObject='ga';
				w.ga=w.ga||function(){(w.ga.q=w.ga.q||[]).push(arguments)};
				w.ga.l=+new Date();

				function load(src) {
					s=d.createElement(t);e=d.getElementsByTagName(t)[0];
					s.src=src;e.parentNode.insertBefore(s,e);
				}

				load('https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js');
				load('https://www.google-analytics.com/analytics.js');

				ga('create', 'UA-413168-1', 'auto');
				ga('set', 'anonymizeIp', true);
				ga('send', 'pageview');
			}(window, document, 'script'));
		</script>
    </head>
    <body>
        <!--[if lt IE 9]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <h1><span class="name">Daniele</span> <span class="surname">De Nobili</span></h1>
		<p>Ciao! Sono uno sviluppatore di siti web e lavoro in una web agency in provincia di Venezia. Sono un amante della tecnologia, del cinema e della buona tavola! Seguimi su questi social network:</p>
		<ul id="social">
			<li><a href="https://github.com/omoikane" title="GitHub" class="github"><span>GitHub</span></a></li>
			<li><a href="https://plus.google.com/+DanieleDeNobili" title="Google+" class="googleplus"><span>Google+</span></a></li>
			<li><a href="https://twitter.com/danieledenobili" title="Twitter" class="twitter"><span>Twitter</span></a></li>
			<li><a href="http://pinterest.com/danieledenobili/" title="Pinterest" class="pinterest"><span>Pinterest</span></a></li>
			<li><a href="https://www.facebook.com/danieledenobili" title="Facebook" class="facebook"><span>Facebook</span></a></li>
		</ul>

		<footer>
			<p>© 2013-<?= date('Y'); ?>, Daniele De Nobili – <a href="http://www.amazon.it/registry/wishlist/1NBGWEUY9KS1E" target="_blank" rel="noopener noreferrer">WishList</a></p>
		</footer>
    </body>
</html>
