<?php
// Read variables sent via POST at Africa's Talking Gateway
$sessionId = $_POST['sessionId'];
$serviceCode = $_POST['serviceCode'];
$phoneNumber = $_POST['phoneNumber'];
$text = $_POST['text'];

if($text == '') {
  // first requests
  $response = "CON Welcome to the community information center Please select a service \n";
  $response .= "1. Area Security Info \n";
  $response .= "2. Announcements \n";
  $response .= "3. Welfare \n";
  $response .= "4. Waste Management ";

} else if($text == '1') {
  // Business logic for first level
  $response = "CON Choose which security officer to get in touch with \n";
  $response .= "1. District Police Commander \n";
  $response .= "2. Local Defense Unit Commander \n";
  $response .= "3. Community security leader ";
} else if($text == '1*1') {
  // Business logic for fisrt level first option
  $phoneNumberDPC = "- 0703004005";
  $nameDPC = "Okello Vincent";

  //terminal request begims with END keyword
  $response = "END Contact for ".$nameDPC . $phoneNumberDPC;
} else if ($text == '1*2') {
  
  $phoneNumberDPC = "- 0788004005";
  $nameDPC = "John Bosco";

  $response = "END Contact for" .$nameDPC . $phoneNumberDPC;

} else if($text == '1*3') {
  $phoneNumberDPC = "- 0753604005";
  $nameDPC = "Jack Mpuuta";

  $response = "END Contact for" .$nameDPC . $phoneNumberDPC;

}

// Echo the response to the API
header('Content-Type: text/plain');
echo $response;

?>
