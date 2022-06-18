<?php /* Template Name: HomePage2 */ ?>

<div class="wrapper">
	<?php
	$_ver = bin2hex(random_bytes(10));
	?>


	<div class="headerSection-V2">
		
		<div class="headerSectionInner">
			<?php get_header(); ?>

			<!-------------------Header2-------------------------------->
			<div class="heroSection container">
				<div class="heroSectionInner">
					<div class="row">
						<div class="col-md-6 leftSection">
							<div style="width:96%;">
								<span class="heroTitle"> Scegli uno stile di vita sano.
									Costruisci il tuo Healthy lifestyle. </span>

							</div>
							<div class="logos" style="    margin-top: 36px;">
								<div class="heroSubTitle">In collaborazione con</div>
								<div class="logosItem">
									<img class="img-fluid" src="<?= get_stylesheet_directory_uri() ?>/img/cdiLogo.svg" alt="cdiLogo" />
								</div>
								<div class="logosItem">
									<img class="img-fluid" src="<?= get_stylesheet_directory_uri() ?>/img/icfLogo.svg" alt="icfLogo" />
								</div>
							</div>
							<div class="readMoreBtn">
								<a href=""><img src="<?= get_stylesheet_directory_uri() ?>/img/readMore.svg" alt="readMore"></a>
							</div>
						</div>
						<div class="col-md-6 rightSection">
							<!--<div class="imgSection fluid">
								<img class="img" src="<?= get_stylesheet_directory_uri() ?>/img/benessere-1.png" alt="benessere1" />
							</div>---->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- ================================== row 1 =====================================================================================-->
	<div class="container">

		<!---------------------------Row1------------------------->
		<!--<div class="container" style="margin-top: 100px;">---->
		<div class="row" style="margin-top: 100px">

			<div class="col-md-3">
				<img class="icona" src="<?= get_stylesheet_directory_uri() ?>/img/Icona.svg" alt="Icona" style="width: 150px;">
			</div>
			<div class="col-md-9 row1Description">

				<div class="row1-title">Proteggi te e ciò che ami.</div>
				<div class="row1-description">Banca Mediolanum, attraverso Costruire Salute, ti aiuta a impostare uno stile di vita sano e consapevole, con un percorso di analisi e consulenza validato da uno staff di medici qualificati.</div>
				<div class="row1-button">
					<a href=""><img src="<?= get_stylesheet_directory_uri() ?>/img/Pulsante.svg" alt="Pulsante"></a>
					<!--  <ul>
                        <li>
						    <span class="text">Fai l’Health Test</span>
					    </li>--->
				</div>
			</div>

		</div>


		<!---------------------------Row2------------------------->
		<div class="row" style="margin-top:100px;width:1139px;height:742px">
			<div class="vectorRow"></div>
				<div class="row">
					<div class="col-md-6">
						<div class="section1">
							<div class="vectorRowTitle">Check up assicurativo a 360°</div>
							<div class="vectorRowDescription">
								Il percorso Costruire Salute è pensato per aiutarti a tutelare la tua salute e il tuo patrimonio. I nostri Specialisti Protezione sono a tua disposizione per illustrarti in modo chiaro l’ampia gamma di Soluzioni Assicurative.
							</div>
							<div class="pulsante"><a href=""><img src="<?= get_stylesheet_directory_uri() ?>/img/Pulsante-4.svg" alt="Pulsante4"></a></div>
						</div>
					</div>


					<div class="col-md-6 ">
						<div class="section2">

							<div class="vectorRowTitle">Come funzione l’Health Test?</div>
							<div class="vectorRowDescription">
								Costruire Salute ti permette di accedere a un test, compilabile online, che ti fornirà uno score indicativo del tuo potenziale livello di benessere. Il test è stato progettato e validato in collaborazione con uno staff di medici specialisti del CDI — Centro Diagnostico Italiano.
							</div>
						</div>
					</div>

				</div>

			
				<div class="row section3">
					
						<div class="vectorRowTitle">Il coaching</div>
						<div class="vectorRowDescription">
							Alla fine del percorso, potrai fissare un appuntamento gratuito con un coach specializzato, per analizzare con lui il risultato del test e scoprire come migliorare il tuo stile di vita.
						</div>
						<div class="sub-description">Diventa protagonista della tua Health Experience.</div>
						<div class="pulsante"><a href=""><img src="<?= get_stylesheet_directory_uri() ?>/img/Pulsante-4.svg" alt="Pulsante4"></a></div>
						
					
				</div>
			
			
		</div>
		<!------------Row3---------------------------------->

		<div class="groupRow3">
			<div class="row">
				<div class="col-md-5 row3t">
					<span class="textRow3"> Fai subito la video survey per ricevere il tuo score salute.</span>
				</div>
				<div class="col-md-7">
					<img class="imgRow3" src="<?= get_stylesheet_directory_uri() ?>/img/Group-54.svg" alt="">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6"><img class="group52" src="<?= get_stylesheet_directory_uri() ?>/img/Group-52.svg" alt=""></div>

				<div class="col-md-6 row3t2">
					<span class="aktest"> In base alle tue risposte riceverai uno score
						che ti aiuterà a capire come migliorare il tuo life style.
					</span>

					<div class="button2"> <span class="commonBtn"> FAI L’HEALTH TEST</span></div>

				</div>

			</div>
		</div>
		<!------------Row4---------------------------------->
		<div class="row4">
			<div class="title-news">Leggi le ultime news</div>
			<div class="row newsLinks">
				<div class="col-md-3">
					<a href="">
						<img class="imgRow4" src="<?= get_stylesheet_directory_uri() ?>/img/Group-9.svg" alt="Group-9">
						<div class="subtitle">Lorem ipsum dolor sit amet, adipiscing.
							<img class="arrow" src="<?= get_stylesheet_directory_uri() ?>/img/heroicons-solid_arrow-narrow-right.svg" alt="arrow">
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="">
						<img class="imgRow4" src="<?= get_stylesheet_directory_uri() ?>/img/Group-10.svg" alt="Group-10">
						<div class="subtitle">Lorem ipsum dolor sit amet, adipiscing.
							<img class="arrow" src="<?= get_stylesheet_directory_uri() ?>/img/heroicons-solid_arrow-narrow-right.svg" alt="arrow">
						</div>
					</a>
				</div>

				<div class="col-md-3">
					<a href="">
						<img class="imgRow4" src="<?= get_stylesheet_directory_uri() ?>/img/Group-11.svg" alt="Group-11">
						<div class="subtitle">Lorem ipsum dolor sit amet, adipiscing.
							<img class="arrow" src="./wp-content/uploads/2021/03/heroicons-solid_arrow-narrow-right.svg" alt="arrow">
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="">
						<img class="imgRow4" src="<?= get_stylesheet_directory_uri() ?>/img/Group-12.svg" alt="Group-11">
						<div class="subtitle">Lorem ipsum dolor sit amet, adipiscing.
							<img class="arrow" src="<?= get_stylesheet_directory_uri() ?>/img/heroicons-solid_arrow-narrow-right.svg" alt="arrow">
						</div>
					</a>
				</div>
			</div>
			<div class="row5">
				<div class="col-md-9"> <span class="testReminder-text"> subito la video survey per ricevere il tuo score salute.</span></div>


				<div class=" col-md-3"> <a href=""><span class="commonBtn"> FAI L’HEALTH TEST</span></a></div>

			</div>
		</div>



	</div>
	<!-----------------------------Row5----------------------------------------------->






	<!-----------------------footer------------------------------->


	<?php get_footer() ?>
</div>