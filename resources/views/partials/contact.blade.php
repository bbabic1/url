<section id="contact" class="section">
  <div class="container">
   <h1 class="is-size-2">Feel free to contact us!</h1>
        <form class="contact-form" method="POST" action="/contact">
        {{ csrf_field() }} 

           <div class="field">
              <p class="control has-icons-left has-icons-right">
                <input class="input" type="name" id="name" name="name" placeholder="Name">
                <span class="icon is-small is-left">
                  <i class="fa fa-user"></i>
                </span>
                <span class="icon is-small is-right">
                  <i class="fa fa-check"></i>
                </span>
              </p>
            </div><!-- name-->

            <div class="field">
              <p class="control has-icons-left has-icons-right">
                <input class="input" type="email" id="email" name="email" placeholder="Email">
                <span class="icon is-small is-left">
                  <i class="fa fa-envelope"></i>
                </span>
                <span class="icon is-small is-right">
                  <i class="fa fa-check"></i>
                </span>
              </p>
            </div><!-- email -->

            <div class="field">
              <p class="control has-icons-left has-icons-right">
                <input class="input" type="subject" id="subject" name="subject" placeholder="Subject">
                <span class="icon is-small is-left">
                  <i class="fa fa-pencil"></i>
                </span>
                <span class="icon is-small is-right">
                  <i class="fa fa-check"></i>
                </span>
              </p>
            </div><!-- subject -->

            <div class="field">
              <textarea class="textarea" id="message" name="message" placeholder="Type your message here!"></textarea>
            </div><!-- textarea -->

            <div class="field">
              <input type="submit" class="button is-primary is-outlined" value="Submit"/>
            </div><!-- submit -->
        </form>
</div>
</section>
