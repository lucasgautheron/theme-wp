<footer class="content-info">
  <div class="container container-signup-footer hidden-print">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 col-xs-12 card">
        <h3 class="text-center">J'appuie la candidature<br>de Jean-Luc Mélenchon</h3>
        <form id="carte_page_new_signup_form" class="ajaxForm signup_form" method="POST" action="/forms/signups" enctype="multipart/form-data"><input name="authenticity_token" type="hidden" value="WNKNeaum6n9osNZzKyPpPgHfZ9IucHKC0zFW8/rwkBs="/><input name="page_id" type="hidden" value="134"/><input name="return_to" type="hidden" value="http://www.jlm2017.fr/carte"/><div class="email_address_form" style="display:none;" aria-hidden="true"><p><label for="email_address">Optional email code</label><br/><input name="email_address" type="text" class="text" id="email_address" autocomplete="off"/></p></div>
          <input id="page_id" name="page_id" type="hidden" value="117" />
          <div class="form-group">
            <div class="col-sm-12">
              <input required="" class="form-control input-lg" id="signup_email" name="signup[email]" placeholder="Adresse email" type="email" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-xs-6">
              <input required="" class="form-control input-lg" id="signup_address_zip" name="signup[address_attributes][zip]" placeholder="Code postal" type="text" value="" />
            </div>
            <div class="col-xs-6">
              <button type="submit" class="btn btn-block btn-lg btn-primary">J'appuie</button>
            </div>
          </div>
          <p>Je recevrai des informations sur la campagne de Jean-Luc Mélenchon</p>
        </form>
      </div>
    </div>
  </div>
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>
</footer>
