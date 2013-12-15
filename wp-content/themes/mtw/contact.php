<?php
/**
 Template Name: Contact
 * @package WordPress
 * @subpackage Default_Theme
 */
//{debug} 
//echo "<pre>"; print_r(); die();
get_header(); ?>
<?php
  if(isset($_POST['submit'])) {
    if(trim($_POST['contactname']) == '') {
      $hasError = true;
    } else {
      $name = trim($_POST['contactname']);
    }
    if(trim($_POST['subject']) == '') {
      $hasError = true;
    } else {
      $subject = trim($_POST['subject']);
    }
    if(trim($_POST['email']) == '')  {
      $hasError = true;
    } else if (!filter_var( trim($_POST['email'], FILTER_VALIDATE_EMAIL ))) {
      $hasError = true;
    } else {
      $email = trim($_POST['email']);
    }
    if(trim($_POST['message']) == '') {
      $hasError = true;
    } else {
      if(function_exists('stripslashes')) {
              $comments = stripslashes(trim($_POST['message']));
      } else {
              $comments = trim($_POST['message']);
      }
    }
    if(!isset($hasError)) {
      $emailTo = 'maynardandthewalnut@gmail.com';
      $body = "Name: $name \n\nEmail: $email \n\nSubject: $subject \n\nMessage:\n $comments";
      $headers = 'From: Maynard & The Walnut <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

      mail($emailTo, $subject, $body, $headers);
      $emailSent = true;
    }
  }
?>
<div class="bg-paper">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <h2>Management</h2>
        <h6>Lulu Clair | <a href="mailto:lulu.soulsinaction@gmail.com?Subject=Hi%20Lulu">lulu.soulsinaction@gmail.com</a></h6>
        <h2>Booking</h2>
        <h6><a href="mailto:booking@maynardthewalnut.com">booking@maynardthewalnut.com</a></h6>
        <h2>Merch</h2>
        <h6>###</h6>
      </div>
      <div class="margin-top-20 col-md-6 col-lg-6">
        <form role="form" method="post" action="http://maynardandthewalnut.com/contact" id="contactform">
          <fieldset>
            <legend>Contact Us</legend>
            <?php if(isset($hasError)) { ?>
              <p class="alert alert-danger">Oops! Please make sure you've dotted your 'i's and crossed you 't's then try again. Thank you!</p>
            <?php } ?>
            <?php if(isset($emailSent) && $emailSent == true) { ?>
              <div class="alert alert-success">
                <p><strong>Success!</strong></p>
                <p>Thanks, <strong><?php echo $name;?></strong>! Your email was successfully sent and we&rsquo;ll be in touch with you soon.</p>
              </div>
            <?php } ?>
            <div class="form-group">
              <label for="name">Your Name<span class="help-required">*</span></label>
              <input type="text" name="contactname" id="contactname" value="" class="form-control required" role="input" aria-required="true" />
            </div>
            <div class="form-group">
              <label for="email">Your Email<span class="help-required">*</span></label>
              <input type="text" name="email" id="email" value="" class="form-control required email" role="input" aria-required="true" />
            </div>
            <div class="form-group">
              <label for="subject">Subject<span class="help-required">*</span></label>
              <select name="subject" id="subject" class="form-control required" role="select" aria-required="true">
                <option></option>
                <option>Booking</option>
                <option>Other</option>
              </select>
            </div>
            <div class="form-group">
              <label for="message">Message<span class="help-required">*</span></label>
              <textarea rows="8" name="message" id="message" class="form-control required" role="textbox" aria-required="true"></textarea>
            </div>
            <div class="actions">
              <input type="submit" value="Send" name="submit" id="submitButton" class="btn btn-primary" title="Click here to submit your message!" />
              <input type="reset" value="Clear" class="btn btn-danger" title="Remove all the data from the form." />
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div> 
</div>
<?php get_footer();?>