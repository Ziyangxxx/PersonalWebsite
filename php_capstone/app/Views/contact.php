<?php
/**
 * Page to add user info
 * @author Carlos Xu <asdiop963@hotmail.com>
 * @date_interval_create_form_date_string() 2020-8-25
 */

require __DIR__ . '/includes/header.inc.php';
require __DIR__ . '/includes/nav.inc.php';

?><section class="section1"><!-- start of form page -->
    <h1>Registration</h1>
    <form id="myform"
          class="styled_form"
          method="post"
          action="/vali_contact"
          autocomplete="on"
          novalidate>
      
      <fieldset id="fs1"><!-- start of basic info -->

        <legend>Basic Info</legend>
        <p><!-- start of first name input -->
          <label class="required" for="first">First Name: </label>
          <input type="text"
                  name="first"
                  id="first"
                  maxlength="50"  
                  size="20"
                  required
                  value="<?=$post['first'] ?? ''?>"
                  placeholder="Enter your first name"
          />
          <?=$errors['first'][0] ?? '' ?>
        </p><!-- end of first name input -->

        <p><!-- start of last name input -->
          <label class="required" for="last">Last Name: </label>
          <input type="text"
                  name="last"
                  id="last"
                  maxlength="50"  
                  size="20"
                  required
                  value="<?=$post['last'] ?? ''?>"
                  placeholder="Enter your last name"
          />
          <?=$errors['last'][0] ?? ''?>
        </p><!-- end of last name input -->

        <p><!-- start of country input -->
          <label class="required" for="country">Country: </label>
          <input type="text"
                  id="country"
                  required
                  name="country"
                  value="<?=$post['country'] ?? ''?>"
          />
          <?=$errors['country'][0] ?? ''?>
        </p><!-- end of country input -->

        <p><!-- start of province input -->
          <label class="required" for="province">Province: </label>
          <input type="text"
                  id="province"
                  required
                  name="province"
                  value="<?=$post['province'] ?? ''?>"
          />
          <?=$errors['province'][0] ?? ''?>
        </p><!-- end of province input -->

        <p><!-- start of city input -->
          <label class="required" for="city">City: </label>
          <input type="text"
                  id="city"
                  required
                  name="city"
                  value="<?=$post['city'] ?? ''?>"
          />
          <?=$errors['city'][0] ?? ''?>
        </p><!-- end of city input -->

        <p><!-- start of street input -->
          <label class="required" for="street">Street: </label>
          <input type="text"
                  id="street"
                  required
                  name="street"
                  value="<?=$post['street'] ?? ''?>"
          />
          <?=$errors['street'][0] ?? ''?>
        </p><!-- end of street input -->

        <p><!-- start of postalcode input -->
          <label class="required" for="postalcode">Postal Code: </label>
          <input type="text"
                  id="postalcode"
                  required
                  name="postalcode"
                  value="<?=$post['postalcode'] ?? ''?>"
                  placeholder="a1a-1a1 / A1A1A1"
          />
          <?=$errors['postalcode'][0] ?? ''?>
        </p><!-- end of postalcode input -->

        <p><!-- start of phone number input -->
          <label class="required" for="phone">Phone:</label>
          <input type="tel"
                  name="phone"
                  id="phone"
                  required
                  placeholder="333-444-5555"
                  value="<?=$post['phone'] ?? ''?>"
          />
          <?=$errors['phone'][0] ?? ''?>
        </p><!-- end of phone number input -->

        <p><!-- start of email input -->
          <label class="required" for="email">E-mail: </label>
          <input type="email"
                  name="email"
                  id="email"
                  required
                  placeholder="12345@domain.ca"
                  value="<?=$post['email'] ?? ''?>"
          />
          <?=$errors['email'][0] ?? ''?>
        </p><!-- end of email input -->

        <p><!-- start of password input -->
          <label class="required" for="password">Password: </label>
          <input type="password"
                  id="password"
                  required
                  name="password"
                  value="<?=$post['password'] ?? ''?>"
                  placeholder="Uppercase, Lowercase, Num"
          />
          <?=$errors['password'][0] ?? ''?>
        </p><!-- end of password input -->

        <p><!-- start of password confirm input -->
          <label class="required" for="password_confirm">Confirm Password: </label>
          <input type="password"
                  id="password_confirm"
                  required
                  name="password_confirm"
                  value="<?=$post['password_confirm'] ?? ''?>"
          />
          <?=$errors['password_confirm'][0] ?? ''?>
        </p><!-- end of password input -->

      </fieldset><!-- end of basic info -->

      <p id="button"><!-- start of submit & clear form button -->
          <input type="submit" 
                  value="Done"  /> &nbsp; 
          <input type="reset"
                  value="Clear Form"/> &nbsp; 
      </p><!-- end of submit & clear form button -->
      
      
    </form>
</section>
<div class="line2"></div>

<div class="section4">
    <a href="#" class="email">
      <img src="../images/email.png" alt="email" />
    </a>

    <a href="#" class="ins">
      <img src="../images/ins.png" alt="instagram" />
    </a>

    <a href="#" class="wechat">
      <img src="../images/wechat.png" alt="wechat" />
    </a>
  </div>

  <?php require __DIR__ . '/includes/footer.inc.php'; ?>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  