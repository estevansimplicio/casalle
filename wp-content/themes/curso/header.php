<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d81cde4e2e.js" crossorigin="anonymous"></script>
    <title>Casalle</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <section class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="social-media col-xl-8 col-sm-4 col-5 text-start">
                        <i class="fab fa-2x fa-instagram"></i>
                        <i class="fab fa-2x fa-facebook"></i>
                    </div>
                    
                    <div class="orders col-xl-2 col-sm-3 col-3 text-center"><b class="fs-6">Meus pedidos</b></div>
                    <div class="account col-xl-2 col-sm-4 col-4 text-center"><b class="fs-6">Acesse sua conta</b></div>
                </div>
                
                <hr class="linha-topo">
            </div>
        </section>
        
        <section class="menu-area">
            <div class="container">
                <div class="row">
                    <section class="logo col-lg-6 text-lg-start text-center">
                        <?php
                            if ( function_exists( 'the_custom_logo' ) ) {
                                the_custom_logo();
                            }
                        ?>
                    </section>

                    <div class="search col-lg-4 text-lg-start text-center">
                        <form>
                            <div>
                                <input class="search-input" type="text" id="search" />
                            </div>
                        </form>    
                    </div>
                    <div class="bag col-lg-2 text-lg-start text-center">
                        <i class="fas fa-3x fa-shopping-basket"></i>
                    </div>


                    
                    
                </div>
            </div>

            
        </section>

        <section class="menu-area">
            <div class="container">
                <div class="row">
                    <nav class="menu col-md-12 text-center">
                        <?php 
                        wp_nav_menu(
                             array('theme_location' => 'my_main_menu') 
                        ); 
                        ?>
                    </nav>
                </div>
            </div>

            
        </section>
    </header>
    
