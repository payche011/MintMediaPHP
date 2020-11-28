<?php get_header(); ?>
	
   	<!-- vuce iz CSS novu header stranu/sliku -->
	
   	<header></header>

        <!-- uvod -->
        <section class="container uvod text-center text-white animate__animated animate__backInUp">
            <h2 class="display-4 pb-3">Najbolja solucija za rast Vaseg biznisa</h2>
            <p class="lead">Kada zelite promociju svog brenda i usluge onda je najsvrsishodnije resenje da imate sve na jednom mestu: facebook i google, reklame, kopirajt, SEO..</p>
        </section>

        <!-- usluge -->
        <section class="usluge container py-5">
            <h2 class="display-4 headings text-center">Usluge</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?php echo esc_url(get_template_directory_uri()) ;?>/img/mint-socijalne-mreze.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Drustvene Mreze</h5>
                            <p class="card-text">Some Quick Example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="" class="btn">Procitaj Vise</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?php echo esc_url(get_template_directory_uri()) ;?>/img/mint_seo.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">SEO Copywriting</h5>
                            <p class="card-text">Some Quick Example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn">Procitaj Vise</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?php echo esc_url(get_template_directory_uri()) ;?>/img/mint-google-oglasi.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Google Oglasavanje</h5>
                            <p class="card-text">Some Quick Example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn">Procitaj Vise</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

     <?php get_footer(); ?>