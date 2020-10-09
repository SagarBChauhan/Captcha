<form id="contact" action="javascript:void(0)" method="post" onsubmit="submit_form()">

    <h3>Contact Form</h3>

    <fieldset>

        <img src="captcha.php?rand=<?php echo rand(); ?>" id="captchaimg" height="50" width="350">

    </fieldset>

    <fieldset>

        <input placeholder="Captcha" type="text" tabindex="2" id="captcha_code">

        <span class="err captcha-err"></span>

    </fieldset>

    <fieldset>

        Can't read the above code? <a class="ccc" href="javascript:void(0);" onClick="refresh_captcha();">Refresh</a>

    </fieldset>

    <fieldset>

        <button name="submit" type="submit" id="contact-submit">Submit</button>

    </fieldset>

</form>