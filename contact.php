<?php
  
  $modal_message = null ;
  $modal_title = '';

  if(filter_has_var(INPUT_POST, 'submit'))  {
    $name = strip_tags(trim($_POST["fname"]));
    $email = strip_tags(trim($_POST["email"]));
    $message = strip_tags(trim($_POST["message"]));

    // $recipient = "tomkrieg108@gmail.com";
    $recipient = "baankhunyaphatphuket@gmail.com";
    $subject = "Message received from $name via website";
    $content = $message;
    $header = "From: $name";

    $email_valid = filter_var($email,FILTER_VALIDATE_EMAIL); 
    if(!$email_valid) {
      $modal_title = "Invalid email address";
      $modal_message = 'Please enter a valid email address and try again.';
    }
    else {
     if(mail($recipient, $subject, $content)) {
        $modal_title = "Message sent";
        $modal_message = 'Thankyou for you message.  We will be in touch to help with your query as soon as possible. ';
     }else {
      $modal_title = "Message not sent";
      $modal_message = 'Sorry, but there seemed to be a problem sending your message.  Please contact us directly by phone or email and we will be in touch with you soon';
     }
    }
  }
?>

<?php require_once './head.php' ?>
<?php require_once './nav.php' ?>

<main>
  <section id="contact" class="pt3">
    
    <div class="banner phuket-7">
      <h1 class="heading-1 pt3">Contact Us</h1>
    </div>

    <div class="container">
      <div class="container-narrow pt3">
        <p class='lead text-center'>Please feel free to visit our project any time.  We would be happy to show you around for an inspection and answer your questions. </p>
        <p class='lead text-center'>
          Or if you have any queries or would just like some more information, please get in touch with us via phone, email or the Line app.
        </p>
      </div>
      <div class="contact-top">
        <div class="contact-iconbox">
          <ion-icon class="feature-icon" name="location-outline"></ion-icon>
          <h4 class="subheading">Location</h4>
          <p class="lead">5/113 Moo. 2 Tambon Thepkrasattri Thalang, Phuket 83110</p>
        </div>
        <div class="contact-iconbox">
          <ion-icon class="feature-icon" name="mail-outline"></ion-icon>
          <h4 class="subheading">Email</h4>
          <p class="lead">baankhunyaphatphuket@gmail.com</p>
        </div>
        <div class="contact-iconbox">
          <ion-icon class="feature-icon" name="call-outline"></ion-icon>
          <h4 class="subheading">Telephone</h4>
          <p class="lead">(+66) 076313123</p>
        </div>
      </div>
    </div>
  </section>

  <section id="contact-bottom-section" class="py2">
    <div class="container">
      <div class="contact-bottom">
        <div class="contact-formbox">
          <h4 class="subheading">Please send us a message</h4>
          <p class='lead'>Feel free to ask us any questions about our project.  We will respond to your queries shortly!</p>
          <form class="contact-form" action="./contact.php" method="post">
            <div class="input-field">
              <label for="name" class="grey-text text-darken-2">Name</label>
              <input type="text" id="name" name="fname" />
            </div>
            <div class="input-field">
              <label for="email" class="grey-text text-darken-2"
                >Email</label
              >
              <input type="email" id="email" name="email" />
            </div>
            <div class="input-field">
              <label for="message" class="grey-text text-darken-2"
                >Message</label
              >
              <textarea
                id="message"
                name="message"
                class="materialize-textarea"
              ></textarea>
            </div>
            <input
              type="submit"
              value="Send &rarr;"
              class="btn btn-large"
              name="submit"
            />
          </form>
        </div>
        <div class="contact-mapbox">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3950.6671857005167!2d98.339068!3d8.0332082!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3050491d489002dd%3A0xb75ec07a7b0d5c9f!2z4Lia4LmJ4Liy4LiZ4LiE4Li44LiT4LiN4Lig4Lix4LiX4LijIOC5gOC4o-C4quC4i-C4tOC5gOC4lOC4meC4i-C5jOC5gOC4i-C4qg!5e0!3m2!1sth!2sth!4v1663394177024!5m2!1sth!2sth"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </div>
    </div>
  </section>
</main>

<div class="modal hidden">
  <button class="btn__close-modal">&times;</button>
  <h3 class="modal__title">Title</h3>
  <p class="modal__body">
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores
    necessitatibus distinctio rerum cupiditate quidem exercitationem quia
    mollitia, cumque doloribus tempora.
  </p>
</div>
<div class="overlay hidden"></div>

<?php require_once './footer.php' ?>

<script src="js/modal.js"></script>


<?php 
  if(isset($modal_message)) {
    echo <<<EOL
    <script>
      openModal('$modal_title', '$modal_message' );
    </script>
    EOL;  
  }
?>

</body>
</html>
