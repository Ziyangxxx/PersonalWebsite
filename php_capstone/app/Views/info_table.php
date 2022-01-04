<?php 

/**
 * List view of Users' info
 * @author Carlos Xu <asdiop963@hotmail.com>
 * @Created_at 2020-08-25
 */

require __DIR__ . '/includes/header.inc.php' ;
require __DIR__ . '/includes/nav.inc.php'; 
?>
<h1>Users' Information</h1>
<fieldset><!-- start of user info -->
      <legend>Details</legend>
      <table>
            <!-- Start of row #1 -->
            <tr class="tr1"><!-- This row shows the title of each column -->
                <th>FIRST NAME</th>
                <th>LAST NAME</th>
                <th>COUNTRY</th>
                <th>PROVINCE</th>
                <th>CITY</th>
                <th>STREET</th>
                <th>POSTAL CODE</th>
                <th>PHONE</th>
                <th>E-MAIL</th>
            </tr><!-- The end of title -->

            <tr class="tr2">
                <th>Monday</th>
                <td>4:00 PM - 7:00 PM</td>
            </tr>
            
            <tr class="tr3">
                <th>Other Workdays</th>
                <td>7:00 PM - 10:00 PM</td>
            </tr>
            
            <tr class="tr4">
                <th>Weekends</th>
                <td>10:00 AM - 4:00 PM</td>
            </tr>
      </table>
</fieldset><!-- end of user info -->

<?php require __DIR__ . '/includes/footer.inc.php'; ?>