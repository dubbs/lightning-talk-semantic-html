<!DOCTYPE html>
<html>
<head>
	<title>Lightning Talk - Semantic HTML</title>
	<link rel="stylesheet" href="main.css">
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
			<h1>Semantic Markup</h1>
<pre><code class="language-html"><?= htmlspecialchars('
<article role="article">
	<main role="main">
		Main Article Content
	</main>
	<aside role="complementary">
		Related Articles
	</aside>
</article>
	'); ?></code></pre>
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
	')); ?></code><code class="language-less">article {
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
	')); ?></code><code class="language-less">article {
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
	')); ?></code><code class="language-sass">article
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
	')); ?></code><code class="language-sass">article
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
<script type="text/javascript" src="main.js"></script>

</body>
</html>
