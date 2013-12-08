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
//If the form is submitted
if(isset($_POST['submit'])) {
  //Check to make sure that the name field is not empty
  if(trim($_POST['contactname']) == '') {
    $hasError = true;
  } else {
    $name = trim($_POST['contactname']);
  }
  //Check to make sure that the subject field is not empty
  if(trim($_POST['subject']) == '') {
    $hasError = true;
  } else {
    $subject = trim($_POST['subject']);
  }

  //Check to make sure sure that a valid email address is submitted
  if(trim($_POST['email']) == '')  {
    $hasError = true;
  } else if (!filter_var( trim($_POST['email'], FILTER_VALIDATE_EMAIL ))) {
    $hasError = true;
  } else {
    $email = trim($_POST['email']);
  }
  //Check to make sure comments were entered
  if(trim($_POST['message']) == '') {
    $hasError = true;
  } else {
    if(function_exists('stripslashes')) {
            $comments = stripslashes(trim($_POST['message']));
    } else {
            $comments = trim($_POST['message']);
    }
  }
  //If there is no error, send the email
  if(!isset($hasError)) {
    $emailTo = 'alex@amantecoffee.com'; // Put your own email address here
    $body = "Name: $name \n\nEmail: $email \n\nPhone Number: $phone \n\nSubject: $subject \n\nComments:\n $comments";
    $headers = 'From: M&TW <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

    mail($emailTo, $subject, $body, $headers);
    $emailSent = true;
  }
}
?>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h2>Management</h2>
        <h6>Lulu Clair | soulsinaction.entertainment@gmail.com</h6>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <form role="form" method="post" action="http://maynardandthewalnut.com/contact" id="contactform">
          <fieldset>
            <legend>Send Us a Message</legend>
            <?php if(isset($hasError)) { //If errors are found ?>
              <p class="alert alert-danger">Oops! Please make sure you've dotted your 'i's and crossed you 't's then try again. Thank you!</p>
            <?php } ?>

            <?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
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
              <input type="submit" value="Send Your Message" name="submit" id="submitButton" class="btn btn-primary" title="Click here to submit your message!" />
              <input type="reset" value="Clear Form" class="btn btn-danger" title="Remove all the data from the form." />
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div> 
</div>
<?php get_footer();?>