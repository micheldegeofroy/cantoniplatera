<form id="contactForm" action="form-to-email.php" method="post">
    <fieldset>                      
        <p>
            <label for="name" >Name</label>
            <input name="name"  id="name" type="text" class="form-poshytip" title="Enter your full name" />
        </p>
        <p>
            <label for="email" >Email</label>
            <input name="email"  id="email" type="text" class="form-poshytip" title="Enter your email address" />
        </p>
        <p>
            <label for="web">Website</label>
            <input name="web"  id="web" type="text" class="form-poshytip" title="Enter your website" />
        </p>
        <p>
            <label for="comments">Message</label>
            <textarea  name="comments"  id="comments" rows="5" cols="20" class="form-poshytip" title="Enter your comments"></textarea>
        </p>
        <!-- send mail configuration -->
        <input type="hidden" value=EMAIL" name="to" id="to" />
        <input type="hidden" value="Email received from Website" name="subject" id="subject" />
        <input type="hidden" value="form-to-email.php" name="sendMailUrl" id="sendMailUrl" />
        <!-- ENDS send mail configuration -->
        <p><input type="button" value="Send" name="submit" id="submit" /> <span id="error" class="warning">Message</span></p>
    </fieldset>
</form>

<?php
if($mail) echo "mail sent"; else echo "mail not sent";
?>
