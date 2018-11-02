<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Refactoring & Unit Testing (PHPConf.Asia 2018)</title>
		<meta name="description" content="PHP Conference Asia 2018, Singapore. Workshops on 26th & 29th September, 2018. Conference on 27th & 28th September, 2018.">
		<meta name="author" content="Noto Gunawan">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link rel="stylesheet" href="rev/css/reveal.css">
		<link rel="stylesheet" href="rev/css/theme/black.css" id="theme">
		<link rel="stylesheet" href="rev/lib/css/zenburn.css">
		<script>
			var link = document.createElement( 'link' );
			link.rel = 'stylesheet';
			link.type = 'text/css';
			link.href = window.location.search.match( /print-pdf/gi ) ? 'rev/css/print/pdf.css' : 'rev/css/print/paper.css';
			document.getElementsByTagName( 'head' )[0].appendChild( link );
		</script>
		<!--[if lt IE 9]>
		<script src="lib/js/html5shiv.js"></script>
		<![endif]-->
		<link rel="stylesheet" href="assets/style.css">
	</head>
	<body>
		<div class="reveal">
			<div class="slide-title">
				<span style="display:none">PHP Conference Asia 2018, Singapore, 26 - 29 September</span>
			</div>
            <div class="slides">
                <section></section>
				<section data-transition="fade-in fade-out">
					<h3>Refactoring & Unit Testing</h3>
				</section>
				<section>
					<section>
						<blockquote>
							"Any fool can write code that a computer can understand.<br />Good programmers write code that humans can understand."
							<br /><br />
							- <a href="https://en.wikipedia.org/wiki/Martin_Fowler" target="_blank">Martin Fowler</a>
						</blockquote>
						<aside class="notes">
							<ul>
								<li>
									Martin Fowler (born 1963) is a British software developer, author and international public speaker on software development, specializing in object-oriented analysis and design, UML, patterns, and agile software development methodologies, including extreme programming.
								</li>
								<li>
									Refactoring: Improving the Design of Existing Code, With Kent Beck, John Brant, William Opdyke, and Don Roberts (June 1999).
								</li>
							</ul>
						</aside>
					</section>
					<section>
						<img src="assets/emak-emak-naik-motor-1.png" />
					</section>
					<section>
						<img src="assets/emak-emak-naik-motor-4.jpg" />
					</section>
					<section>
						<img src="assets/emak-emak-naik-motor-2.jpg" style="width:auto;height:250px;" />
						<div class="fragment">
							<img src="assets/emak-emak-naik-motor-3.jpg" />
						</div>
					</section>
				</section>
				<section>
					<section>
						<img src="assets/bad-code-1.png" style="width:auto;height:620px;" />
					</section>
					<section>
						<img src="assets/bad-code-sf.jpg" style="width:auto;height:425px;" />
					</section>
					<section>
						<img src="assets/bad-code-3.png" style="width:auto;height:620px;" />
					</section>
					<section>
						<img src="assets/bad-code-2.png" style="width:auto;height:620px;" />
					</section>
				</section>
				<section data-background-color="#fff">
					<img src="assets/bad-code-toon.png" style="width:450px;height:auto;margin-right:10px;" /> <img src="assets/bad-code-wtf.png" style="width:450px;height:auto;margin-left:10px;" />
				</section>
				<section data-background-color="#fff" data-background-transition="zoom">
					<img src="assets/refactoring.png" style="width:auto;height:620px;" />
				</section>
				<section class="left">
					<h3>Refactoring</h3>
					<ul style="list-style-type:none;font-style:italic;">
						<li style="padding-top:30px;">
							… is a disciplined technique for restructuring an existing body of code, altering its internal structure <u>without</u> changing its external behavior.
						</li>
						<li style="padding-top:30px;">
							… is a systematic process of improving code that can transform a mess into clean code and simple design <u>without</u> creating new functionality.
						</li>
					</ul>
					<aside class="notes">
						<ul>
							<li>
								teknik disiplin untuk merestrukturisasi kode yang ada, mengubah struktur internalnya tanpa mengubah perilaku eksternal.
							</li>
							<li>
								proses sistematis untuk memperbaiki kekacauan kode menjadi kode yang bersih dan desain sederhana tanpa menciptakan fungsionalitas baru.
							</li>
						</ul>
					</aside>
				</section>
				<section>
					<section>
						The main purpose of refactoring is<br />to fight technical debt.<br /><br />
						<blockquote><small>
							You can temporarily speed up without writing tests for new features, but this will gradually slow your progress every day until you eventually pay off the debt by writing tests.
						</small></blockquote>
						<aside class="notes">
							<ul>
								<li>
									Howard G. "Ward" Cunningham (born May 26, 1949) is an American computer programmer who developed the first wiki, a pioneer in both design patterns and extreme programming.
								</li>
								<li>
									Jika Anda mendapatkan pinjaman dari bank, ini memungkinkan Anda melakukan pembelian lebih cepat. Anda membayar ekstra untuk mempercepat proses - Anda tidak hanya membayar pokok, tetapi juga bunga tambahan atas pinjaman. Tak perlu dikatakan, Anda bahkan dapat menyimpan begitu banyak bunga sehingga jumlah bunga melebihi penghasilan total Anda, membuat pembayaran penuh tidak mungkin dilakukan.
								</li>
							</ul>
						</aside>
					</section>
					<section data-background-color="#fff" >
						<img src="assets/technical-debt.png" style="width:auto;height:620px;" />
					</section>
					<section class="left">
						Causes of technical debt
						<small>
							<ul style="list-style-type:square;margin-top:30px;">
								<li class="fragment">Business pressure</li>
								<li class="fragment">Lack of understanding of the consequences of technical debt</li>
								<li class="fragment">Failing to combat the strict coherence of components</li>
								<li class="fragment">Lack of tests</li>
								<li class="fragment">Lack of documentation</li>
								<li class="fragment">Lack of interaction between team members</li>
								<li class="fragment">Long-term simultaneous development in several branches</li>
								<li class="fragment">Delayed refactoring</li>
								<li class="fragment">Lack of compliance monitoring</li>
								<li class="fragment">Incompetence</li>
							</ul>
						</small>
						<aside class="notes">
							Tekanan bisnis, kurangnya pemahaman konsekuensi dari hutang teknis, gagal memerangi koherensi komponen yang ketat, kurangnya tes, kurangnya dokumentasi,
							kurangnya interaksi antara anggota tim, pembangunan simultan jangka panjang di beberapa cabang, refactoring tertunda, kurangnya pemantauan kepatuhan, ketidakmampuan
					</section>
					<section data-background-color="#fff">
						<img src="assets/technical-debt-effects.png" style="width:auto;height:400px;" />
						<aside class="notes">
							Tecnhical debt effects
						</aside>
					</section>
					<section data-background-color="#fff" >
						<img src="assets/technical-debt-quadrant.png" style="width:auto;height:384px;" />
						<aside class="notes">
							Tecnhical debt quadrant
						</aside>
					</section>
				</section>
				<section style="text-align:left">
					<h3>Clean Code</h3>
					<small><i>Code that is easy to read, understand and maintain makes software development predictable and increases the quality of a resulting product.</i></small>
					<ul style="margin-top:50px;list-style-type:square;">
						<li class="fragment">Obvious for other programmers</li>
						<li class="fragment">Doesn't contain duplication</li>
						<li class="fragment">Contains a minimal number of classes and other moving parts</li>
						<li class="fragment">Passes all tests</li>
						<li class="fragment">Easier and cheaper to maintain!</li>
					</ul>
					<aside class="notes">
						Jelas untuk programmer lain, tidak mengandung duplikasi, berisi jumlah minimal kelas dan bagian bergerak lainnya, melewati semua tes, lebih mudah dan lebih murah untuk dipelihara.
					</aside>
				</section>
				<section class="left">
					<div>When to refactor</div>
					<ul style="list-style-type:square;margin-top:40px;">
						<li class="fragment">
							Rule of Three
							<small>
								<ol>
									<li style="padding-top:10px;">When you are doing something for the first time, just get it done.</li>
									<li style="padding-top:10px;">When you are doing something similar for the second time, cringe at having to repeat but do the same thing anyway.</li>
									<li style="padding-top:10px;">When you are doing something for the third time, start refactoring.</li>
								</ol>
							</small>
						</li>
						<li class="fragment" style="padding-top:20px;">When adding a feature</li>
						<li class="fragment" style="padding-top:20px;">When fixing a bug</li>
						<li class="fragment" style="padding-top:20px;">During a code review</li>
					</ul>
				</section>
				<section class="left">
					<div>Checklist of refactoring done <i>right way</i></div>
					<ul style="margin-top:50px;list-style-type:square;">
						<li class="fragment" style="padding-top:20px;">The code should become cleaner (easy to read, understand and maintain).</li>
						<li class="fragment" style="padding-top:20px;">New functionality should not be created during refactoring.</li>
						<li class="fragment" style="padding-top:20px;">All existing tests must pass after refactoring.</li>
					</ul>
				</section>
				<section class="left">
					<h3>Dirty Code</h3>
					<i><small>… is often result of laziness and incompetence, it can also pile-up due to shortcuts taken during development process.</small></i>
					<div class="fragment" style="margin-top:100px;">
						<h3>Code Smells</h3>
						<i><small>… are indicators of problems that can be addressed during refactoring.</small></i>
						<br />
						<i><small>… are easy to spot and fix, but they may be just symptoms of a deeper problem with code.</small></i>
					</div>
				</section>
				<section>
					<section class="left">
						<h3 style="margin-top:30px;"><div style="text-transform:lowercase !important;padding-top:5px;font-weight:normal;float:left;margin-top:10px;margin-right:15px;"><small>Code Smell ></small></div> Bloaters</h3>
						<i><small>… are code, methods and classes that have increased to such gargantuan proportions that they are hard to work with.</small></i>
						<ul style="margin-top:70px;list-style-type:square;">
							<li>Long Method</li>
							<li>Large Class</li>
							<li>Primitive Obsession</li>
							<li>Long Parameter List</li>
							<li>Data Clumps</li>
						</ul>
					</section>
					<section class="left">
						<h3 style="margin-top:30px;"><div style="text-transform:lowercase !important;padding-top:5px;font-weight:normal;float:left;margin-top:10px;margin-right:15px;"><small>Code Smell ></small></div> Object-Orientation Abusers</h3>
						<i><small>… are incomplete or incorrect application of object-oriented programming principles.</small></i>
						<ul style="margin-top:70px;list-style-type:square;">
							<li>Complex 'switch' operator or sequence of 'if' statements</li>
							<li>Temporary Field</li>
							<li>Refused Bequest</li>
							<li>Alternative Classes with Different Interfaces</li>
						</ul>
					</section>
					<section class="left">
						<h3 style="margin-top:30px;"><div style="text-transform:lowercase !important;padding-top:5px;font-weight:normal;float:left;margin-top:10px;margin-right:15px;"><small>Code Smell ></small></div> Change Preventers</h3>
						<i><small>… mean that if you need to change something in one place in your code, you have to make many changes in other places too.</small></i>
						<ul style="margin-top:70px;list-style-type:square;">
							<li>Divergent Change</li>
							<li>Shotgun Surgery</li>
							<li>Parallel Inheritance Hierarchies</li>
						</ul>
					</section>
					<section class="left">
						<h3 style="margin-top:30px;"><div style="text-transform:lowercase !important;padding-top:5px;font-weight:normal;float:left;margin-top:10px;margin-right:15px;"><small>Code Smell ></small></div> Dispensables</h3>
						<i><small>… is something pointless and unneeded whose absence would make the code cleaner, more efficient and easier to understand.</small></i>
						<ul style="margin-top:70px;list-style-type:square;">
							<li>Comments</li>
							<li>Duplicate Code</li>
							<li>Lazy Class</li>
							<li>Data Class</li>
							<li>Dead Code</li>
							<li>Speculative Generality</li>
						</ul>
					</section>
					<section class="left">
						<h3 style="margin-top:30px;"><div style="text-transform:lowercase !important;padding-top:5px;font-weight:normal;float:left;margin-top:10px;margin-right:15px;"><small>Code Smell ></small></div> Couplers</h3>
						<i><small>… contribute to excessive coupling between classes or show what happens if coupling is replaced by excessive delegation.</small></i>
						<ul style="margin-top:70px;list-style-type:square;">
							<li>Feature Envy</li>
							<li>Inappropriate Intimacy</li>
							<li>Message Chains</li>
							<li>Middle Man</li>
						</ul>
					</section>
					<section class="left">
						<h3 style="margin-top:30px;"><div style="text-transform:lowercase !important;padding-top:5px;font-weight:normal;float:left;margin-top:10px;margin-right:15px;"><small>Code Smell ></small></div> Others</h3>
						<i><small>… are the smells which do not fall into any broad category.</small></i>
						<ul style="margin-top:70px;list-style-type:square;">
							<li>Incomplete Library Class</li>
						</ul>
					</section>
				</section>
				<section class="left">
					<div>Refactoring Techniques</div>
					<ul style="margin-top:70px;list-style-type:square;">
						<li>Composing Methods</li>
						<li>Moving Features between Objects</li>
						<li>Organizing Data</li>
						<li>Simplifying Conditional Expressions</li>
						<li>Simplifying Method Calls</li>
						<li>Dealing with Generalization</li>
					</ul>
				</section>
				<section>
					The S.O.L.I.D. Principles
					<ul style="margin-top:70px;list-style-type:square;">
						<li>Single-Responsibility Principle</li>
						<li>Open/Closed Principle</li>
						<li>Liskov Substitution Principle</li>
						<li>Interface-Segregation Principle</li>
						<li>Dependency-Inversion Principle</li>
					</ul>
				</section>
				<section data-background-color="#fff" data-background-transition="zoom">
					<img src="assets/keep-calm.png" style="width:auto;height:620px;" />
				</section>
            </div>
            <script src="rev/lib/js/head.min.js"></script>
    		<script src="rev/js/reveal.js"></script>
    		<script>
    			Reveal.initialize({
    				controls: true,
    				progress: true,
    				history: true,
    				center: true,
    				transition: 'slide', // none/fade/slide/convex/concave/zoom
    				dependencies: [
    					{ src: 'rev/lib/js/classList.js', condition: function() { return !document.body.classList; } },
    					{ src: 'rev/plugin/markdown/marked.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
    					{ src: 'rev/plugin/markdown/markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
    					{ src: 'rev/plugin/highlight/highlight.js', async: true, callback: function() { hljs.initHighlightingOnLoad(); } },
    					{ src: 'rev/plugin/search/search.js', async: true },
    					{ src: 'rev/plugin/zoom-js/zoom.js', async: true },
    					{ src: 'rev/plugin/notes/notes.js', async: true }
    				]
    			});
    		</script>
    	</body>
    </html>
