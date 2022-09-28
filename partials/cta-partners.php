<div class="container">
      <div class="row">
         <div class="col-sm-12 col-lg-6">
            <h3 class="h1 text_darkgray"><?php the_field( 'partner_titel', 'option' ); ?></h3>
         </div>
         <div class="col-sm-12 col-lg-5" data-aos="fade-down">
            <p class="f-28"><?php the_field( 'partner_content', 'option' ); ?></p>
            <div class="contact_info f-20 text_darkgray">
               <a class="d-block d-md-inline" href="mailto:<?php the_field( 'partner_mail', 'option' ); ?>"><i class="far fa-envelope"></i><?php the_field( 'partner_mail', 'option' ); ?></a><a href="tel:<?php the_field( 'phone', 'option' ); ?>"><i class="fas fa-phone-alt"></i><?php the_field( 'phone', 'option' ); ?></a>
            </div>
            <div class="offset-lg-1"></div>
         </div>
      </div>
   </div>