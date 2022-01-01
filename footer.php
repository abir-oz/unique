<footer class="site-footer">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 d-flex justify-content-center align-items-center">
                <div class="col-md-10">
                    <h3 class="footer-heading mb-4">About Unique</h3>
                    <p><?php echo get_opt_value('opt-details','');?></p>
                    
                    
                </div>
            </div>

            <div class="col-lg-4">
                <div class="row ml-1 justify-content-center align-items-center">
                    <div class="col-md-10">
                        <h3 class="footer-heading mb-4">Navigations</h3>
                    </div>
					<?php
						if ( has_nav_menu( 'topmenu' ) ) {
							$unique_menu = wp_nav_menu( array(
								'container'       => 'div',
								'container_class' => 'col-md-10',
								'theme_location'  => "topmenu",
								'menu_class'      => "list-unstyled",
								"echo"            => false,
							) );

							$unique_menu = str_replace( "sub-menu", "d-none", $unique_menu );
							echo wp_kses_post( $unique_menu );

						}

					?>
                </div>
            </div>

            <div class="col-lg-4">
                <div>
                    <h3 class="footer-heading mb-2">Subscribe Newsletter</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit minima minus odio.</p>
                    <form action="#" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control border-secondary text-white bg-transparent"
                                   placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary text-white" type="button" id="button-addon2">Send
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>


        <div class="row text-center">
            <div class="col-md-12">
                <div>
                    <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                    <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                    <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                    <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>
            </div>

        </div>
    </div>
</footer>
</div>


<?php wp_footer(); ?>
</body>

</html>