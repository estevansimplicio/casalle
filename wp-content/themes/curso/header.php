<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <section class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="social-media-icons col-xl-8 col-sm-6 col-5 text-start">Mídias Sociais</div>
                    <div class="orders col-xl-2 col-sm-2 col-3 text-end">Meus pedidos</div>
                    <div class="account col-xl-2 col-sm-2 col-3 text-end">Acesse sua conta</div>
                </div>
            </div>
        </section>
        <section class="menu-area">
            <div class="container">
                <div class="row">
                    <section class="logo col-md-2 col-12 text-center">Logo</section>
                    <nav class="menu col-md-10 text-end">
                        <?php 
                        wp_nav_menu(
                             array('theme_location' => 'my_main_menu') 
                        ); 
                        ?>
                    </nav>
                </div>
            </div>

            
        </section>

        <section class="menu-area">
            <div class="container">
                <div class="row">
                    <section class="logo col-md-2 col-12 text-center">Logo</section>
                    <nav class="menu col-md-10 text-end">
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
    
