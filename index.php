<!DOCTYPE html>
<html>
<head>
	<title></title>

<style>
*, *:before, *:after {
-moz-box-sizing: border-box;
-webkit-box-sizing: border-box;
box-sizing: border-box;
}
pre, ul {
	margin: 0;
	padding: 0;
}
ul:before, ul:after, article:before, article:after {
	content: "\0020";
	display: block;
	height: 0;
	overflow: hidden;
}
	
article:after, ul:after {
	clear: both;
}
.layout-center {
	position: absolute;
	left: 50%;
	top: 50%;
	-webkit-transform: translate(-50%, -50%);
	-o-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
}
#html-target {
	position: relative;
	height: 190px;
}
h1 {
	text-align: center;
}
#html-alternatives li {
	width: 25%;
	float: left;
}
article {
	width: 300px;
	margin: 0 auto;
}
main {
	width: 200px;
	float: left;
	background: grey;
	height: 100px;
	padding: 1em;
}
aside {
	width: 100px;
	float: right;
	background: #ccc;
	height: 100px;
	padding: 1em;
}

</style>
</head>
<body>

	<h1>Layout - Main Content + Sidebar</h1>

	<article role="article">
		<main role="main">
			Main Article Content
		</main>
		<aside role="complementary">
			Related Articles
		</aside>
	</article>

	<section id="html-target">
		
		<div class="layout-center">
			<h1>Framework Agnostic</h1>
<pre><code class="language-html"><?= trim(htmlspecialchars('
<article role="article">
	<main role="main">
		Main Article Content
	</main>
	<aside role="complementary">
		Related Articles
	</aside>
</article>
	', ENT_HTML5)); ?></code></pre>
		</div>
	</section>

	<section id="html-alternatives">
		<ul>
			<li>
				<h1>Bootstrap 3</h1>
<pre><code class="language-html"><?= trim(htmlspecialchars('
<div class="row">
	<div class="col-md-8">
		Main Article Content
	</div>
	<div class="col-md-4 hidden-sm">
		Related Articles
	</div>
</div>
	', ENT_HTML5)); ?></code><code class="language-less">article {
	.make-row();
}
main[role="main"] {
	.make-md-column(8);
}
aside[role="complementary"] {
	.make-md-column(4);
	.hidden-sm;
}
</code></pre>
			</li>
			<li>
				<h1>Bootstrap 2.3.2</h1>
<pre><code class="language-html"><?= trim(htmlspecialchars('
<div class="row">
	<div class="span8">
		Main Article Content
	</div>
	<div class="span4 hidden-phone">
		Related Articles
	</div>
</div>
	', ENT_HTML5)); ?></code><code class="language-less">article {
	.makeRow();
}
main[role="main"] {
	.makeColumn(8);
}
aside[role="complementary"] {
	.makeColumn(4);
	.hidden-phone;
}
</code></pre>
			</li>
			<li>
				<h1>Foundation 5</h1>
<pre><code class="language-html"><?= trim(htmlspecialchars('
<div class="row">
	<div class="medium-8 columns">
		Main Article Content
	</div>
	<div class="medium-4 columns 
	hide-for-small-only">
		Related Articles
	</div>
</div>
	', ENT_HTML5)); ?></code><code class="language-sass">article
	+grid-row

main[role="main"]
	+grid-column(8)

aside[role="complementary"]
	+grid-column(4)
	@extend .hide-for-small-only
</code></pre>
			</li>
			<li>
				<h1>Foundation 4</h1>
<pre><code class="language-html"><?= trim(htmlspecialchars('
<div class="row">
	<div class="medium-8 columns">
		Main Article Content
	</div>
	<div class="medium-4 columns
	hide-for-small">
		Related Articles
	</div>
</div>
	', ENT_HTML5)); ?></code><code class="language-sass">article
	+grid-row

main[role="main"]
	+grid-column(8)

aside[role="complementary"]
	+grid-column(4)
	@extend .hide-for-small
</code></pre>
			</li>
		</ul>
	</section>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
	$('#html-target,section li,.language-less,.language-sass').hide();
	var clickCount = 0;
	$('body').click(function() {
		clickCount++;
		if (clickCount == 1) {
			$('section li:eq(0)').fadeIn();
		}
		if (clickCount == 2) {
			$('section li:eq(1)').fadeIn();
		}
		if (clickCount == 3) {
			$('section li:eq(2)').fadeIn();
		}
		if (clickCount == 4) {
			$('section li:eq(3)').fadeIn();
		}
		if (clickCount == 5) {
			$('#html-target').fadeIn();
		}
		if (clickCount == 6) {
			$('section li:eq(0) .language-html').hide();
			$('section li:eq(0) .language-less').fadeIn();
		}
		if (clickCount == 7) {
			$('section li:eq(1) .language-html').hide();
			$('section li:eq(1) .language-less').fadeIn();
		}
		if (clickCount == 8) {
			$('section li:eq(2) .language-html').hide();
			$('section li:eq(2) .language-sass').fadeIn();
		}
		if (clickCount == 9) {
			$('section li:eq(3) .language-html').hide();
			$('section li:eq(3) .language-sass').fadeIn();
		}
	});
</script>

</body>
</html>
