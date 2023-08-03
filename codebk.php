//PHP Code for Mail
<?php

  if (isset($_POST['sub_form'])) {

      $name = $_POST['f_name'] . ' ' . $_POST['l_name'];
      $email = $_POST['email_'];
      $mobile = $_POST['mobile_'];
      $pin = $_POST['pin_'];
      $dooor = $_POST['door_'];
      $street = $_POST['street_'];
      $Boiler = $_POST['Boiler'];
      $what_Boiler = $_POST['what_Boiler'];
      $property_type = $_POST['property_type'];
      $fuel_type = $_POST['fuel_type'];
      $num_bedrooms = $_POST['num_bedrooms'];
      $bath_tubs = $_POST['bath_tubs'];
      $showers_ = $_POST['showers_'];
      $people_live = $_POST['people_live'];
      $current_boiler = $_POST['current_boiler'];
      $place_ = $_POST['place_'];
      $come_out = $_POST['come_out'];
      $high_ = $_POST['high_'];
      $another_property = $_POST['another_property'];
      $carpark_ = $_POST['carpark_'];
      $window_ = $_POST['window_'];
      $country_ = $_POST['country_'];
      $meter_dist = $_POST['meter_dist'];
      $radiators_ = $_POST['radiators_'];
      $msg1 = "<table width='80%' align='center' cellpadding='0' cellspacing='0' style='font-family:Verdana, Geneva, sans-serif; font-size:13px; border:dotted 1px #186ea9; border-bottom:solid 3px #0037ff;'>
      <tr>
        <td style='background:#0037ff; padding:10px 0; font-weight:bold; color:#fff; font-size:16px;' colspan='4' align='center' valign='middle'>Boiler offer  Enquiry</td>
      </tr>
      <tr>
        <td  width='25%' style='background:#f2f2f2; padding:10px; border-right:solid 1px #ddd; font-weight:bold; color:#555;'><strong>Name</strong></td>
        <td width='25%' style='background:#f2f2f2; padding:10px; border-right:solid 1px #ddd; color:#333;'>$name</td>

        <td width='25%' style='background:#f2f2f2; padding:10px; border-right:solid 1px #ddd; font-weight:bold; color:#555;'><strong>Email</strong></td>
        <td width='25%' style='background:#f2f2f2; padding:10px; border-right:solid 1px #ddd; color:#333;'>$email</td>
      </tr>

       <tr>
        <td width='25%' style='background:#ffffff; padding:10px; border-right:solid 1px #ddd; font-weight:bold; color:#555;'><strong>Mobile</strong></td>
        <td width='25%' style='background:#ffffff; padding:10px; border-right:solid 1px #ddd; color:#333;'>$mobile</td>

        <td width='25%' style='background:#ffffff; padding:10px; border-right:solid 1px #ddd; font-weight:bold; color:#555;'><strong>Pin Numbar</strong></td>
        <td width='25%' style='background:#ffffff; padding:10px; border-right:solid 1px #ddd; color:#333;'>$pin</td>
      </tr>

      <tr>
        <td width='25%' style='background:#f2f2f2; padding:10px; border-right:solid 1px #ddd; font-weight:bold; color:#555;'><strong>Door Number</strong></td>
        <td width='25%' style='background:#f2f2f2; padding:10px; border-right:solid 1px #ddd; color:#333;'>$dooor</td>

        <td width='25%' style='background:#f2f2f2; padding:10px; border-right:solid 1px #ddd; font-weight:bold; color:#555;'><strong>Street Name</strong></td>
        <td width='25%' style='background:#f2f2f2; padding:10px; border-right:solid 1px #ddd; color:#333;'>$street</td>
      </tr>

      <tr>
        <td width='25%' style='background:#ffffff; padding:10px; border-right:solid 1px #ddd; font-weight:bold; color:#555;'><strong>Select Your Existing Boiler</strong></td>
        <td width='25%' style='background:#ffffff; padding:10px; border-right:solid 1px #ddd; color:#333;'>$Boiler</td>

        <td width='25%' style='background:#ffffff; padding:10px; border-right:solid 1px #ddd; font-weight:bold; color:#555;'><strong>What Type of Boiler Do You Want to Install?</strong></td>
        <td width='25%' style='background:#ffffff; padding:10px; border-right:solid 1px #ddd; color:#333;'>$what_Boiler</td>
      </tr>
      <tr>
        <td width='25%' style='background:#f2f2f2; padding:10px; border-right:solid 1px #ddd; font-weight:bold; color:#555;'><strong>What type of property do you have?</strong></td>
        <td width='25%' style='background:#f2f2f2; padding:10px; border-right:solid 1px #ddd; color:#333;'>$property_type</td>

        <td width='25%' style='background:#f2f2f2; padding:10px; border-right:solid 1px #ddd; font-weight:bold; color:#555;'><strong>What kind of fuel does your boiler use?</strong></td>
        <td width='25%' style='background:#f2f2f2; padding:10px; border-right:solid 1px #ddd; color:#333;'>$fuel_type</td>
      </tr>
      <tr>
        <td width='25%' style='background:#ffffff; padding:10px; border-right:solid 1px #ddd; font-weight:bold; color:#555;'><strong>How many bedrooms does your property have?</strong></td>
        <td width='25%' style='background:#ffffff; padding:10px; border-right:solid 1px #ddd; color:#333;'>$num_bedrooms</td>

        <td width='25%' style='background:#ffffff; padding:10px; border-right:solid 1px #ddd; font-weight:bold; color:#555;'><strong>How many bath tubs do you have?</strong></td>
        <td width='25%' style='background:#ffffff; padding:10px; border-right:solid 1px #ddd; color:#333;'>$bath_tubs</td>
      </tr>
      <tr>
        <td width='25%' style='background:#f2f2f2; padding:10px; border-right:solid 1px #ddd; font-weight:bold; color:#555;'><strong>How many showers do you have?</strong></td>
        <td width='25%' style='background:#f2f2f2; padding:10px; border-right:solid 1px #ddd; color:#333;'>$showers_</td>

        <td width='25%' style='background:#f2f2f2; padding:10px; border-right:solid 1px #ddd; font-weight:bold; color:#555;'><strong>How many people live in your property?</strong></td>
        <td width='25%' style='background:#f2f2f2; padding:10px; border-right:solid 1px #ddd; color:#333;'>$people_live</td>
      </tr>
      <tr>
        <td width='25%' style='background:#ffffff; padding:10px; border-right:solid 1px #ddd; font-weight:bold; color:#555;'><strong>Where is your current boiler located?</strong></td>
        <td width='25%' style='background:#ffffff; padding:10px; border-right:solid 1px #ddd; color:#333;'>$current_boiler</td>

        <td width='25%' style='background:#ffffff; padding:10px; border-right:solid 1px #ddd; font-weight:bold; color:#555;'><strong>Do you want your new boiler in a different place?</strong></td>
        <td width='25%' style='background:#ffffff; padding:10px; border-right:solid 1px #ddd; color:#333;'>$place_</td>
      </tr>
      <tr>
        <td width='25%' style='background:#f2f2f2; padding:10px; border-right:solid 1px #ddd; font-weight:bold; color:#555;'><strong>Where does your flue come out?</strong></td>
        <td width='25%' style='background:#f2f2f2; padding:10px; border-right:solid 1px #ddd; color:#333;'>$come_out</td>

        <td width='25%' style='background:#f2f2f2; padding:10px; border-right:solid 1px #ddd; font-weight:bold; color:#555;'><strong>How high is your flue from the ground?</strong></td>
        <td width='25%' style='background:#f2f2f2; padding:10px; border-right:solid 1px #ddd; color:#333;'>$high_</td>
      </tr>
      <tr>
        <td width='25%' style='background:#ffffff; padding:10px; border-right:solid 1px #ddd; font-weight:bold; color:#555;'><strong>How close to another property is your flue?</strong></td>
        <td width='25%' style='background:#ffffff; padding:10px; border-right:solid 1px #ddd; color:#333;'>$another_property</td>

        <td width='25%' style='background:#ffffff; padding:10px; border-right:solid 1px #ddd; font-weight:bold; color:#555;'><strong>Is your flue under a carpark, balcony or other structure?</strong></td>
        <td width='25%' style='background:#ffffff; padding:10px; border-right:solid 1px #ddd; color:#333;'>$carpark_</td>
      </tr>
      <tr>
        <td width='25%' style='background:#f2f2f2; padding:10px; border-right:solid 1px #ddd; font-weight:bold; color:#555;'><strong>Is your flue 30cm or more from a door or window?</strong></td>
        <td width='25%' style='background:#f2f2f2; padding:10px; border-right:solid 1px #ddd; color:#333;'>$window_</td>

        <td width='25%' style='background:#f2f2f2; padding:10px; border-right:solid 1px #ddd; font-weight:bold; color:#555;'><strong>How Did you hear about Us?</strong></td>
        <td width='25%' style='background:#f2f2f2; padding:10px; border-right:solid 1px #ddd; color:#333;'>$country_</td>
      </tr>
      <tr>
        <td width='25%' style='background:#ffffff; padding:10px; border-right:solid 1px #ddd; font-weight:bold; color:#555;'><strong>Gas Metre Distance Form Boiler?</strong></td>
        <td width='25%' style='background:#ffffff; padding:10px; border-right:solid 1px #ddd; color:#333;'>$meter_dist</td>

        <td width='25%' style='background:#ffffff; padding:10px; border-right:solid 1px #ddd; font-weight:bold; color:#555;'><strong>How many radiators do you have including towel rails in the bathroom and toilet ?</strong></td>
        <td width='25%' style='background:#ffffff; padding:10px; border-right:solid 1px #ddd; color:#333;'>$radiators_</td>
      </tr>

    </table>";
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
$headers .= 'From: ' . $email . "\r\n";

// Send email to sender
$to = $email;
$subject = "Boiler offer enquiry from gasboiler";
$body = $msg1;

$mail = mail($to, $subject, $body, $headers);

// Initialize the $owners array
$owners = array("meraboiler@gmail.com");

// Send email to owner
foreach ($owners as $owner) {
  $to = $owner;
  $subject = "Boiler offer enquiry from " . $pin . " for your property";
  $body = $msg1;
  $mail = mail($to, $subject, $body, $headers);
}

if ($mail) {
  echo "<script language='javascript'>";
  echo "alert('Thank you, our team will contact you soon.');";
  echo "</script>";
} else if (!$mail) {
  echo "<script language='javascript'>";
  echo "alert('Somthing is wrong. Please try again!!!');";
  echo "</script>";
}
  }

  ?>