<?php 
    // get the Header from header.php
    get_header(); 
    // import head banner 
    get_template_part("template_parts/page" , "headContent" );
    // then add to head banner some code
    ?>
                <div class="head-content">
                    <H2 class="ltr-space">LOREM IPSUM</H2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, mollitia tempora placeat adipisci laudantium nisi minima! Explicabo incidunt, itaque eligendi hic expedita nisi ullam rem? Quas deserunt natus reprehenderit nihil.</p>
                </div>
            </div>
        </div>
        <main class="page section classes-index ">     
           <?php  gymfintess_classes_list() ?>         
        </main>
        <style>
            body{
                background-color:#141414;
            }
            .class-time{
                font-size:16px;
            }
        </style>
    <?php 
    // get the footer from footer.php
    get_footer();

    ?>
