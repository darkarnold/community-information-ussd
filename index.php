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

  //terminal request begins with END keyword
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

else if($text == '2') {
  // Business logic for second level
  $response = "CON Select which announcement to get information on \n";
  $response .= " 1. Lost Items \n";
  $response .= "2. Missing persons \n";
  $response .= "3. Death Announcements";
  
} else if($text == '2*1') {
  $missingItem = "three cows and two goats";
  $phoneContact = " 0705675634";
  $name = "Kato";

  $response = "END ". $missingItem . "belonging to" . $name . "are missing. Please contact this number if found -" . $phoneContact;

}else if($text == '2*2') {
  $missingPerson = "Jane Smith";
  $phoneContact = "0788904567";
  $contactPerson = " John Smith";

  $response = "END" . $missingPerson . "has gone missing from the area if found contact" . $contactPerson . "on the following number - ". $phoneContact;

}else if ($text == '2*3') {
  $deceasedPerson = "Oliver Twist";
  $placeOfBurial = "London";
  $dateOfDeath = "04 January 2020";
  $timeOfBurial = "06 January 2020";
  $contactPerson = "Tom Little";
  $phoneContact = " 0756893456";

  $response = "END The family of " . $contactPerson . "would like to announce the passing of" . $deceasedPerson . "who passed on" . $dateOfDeath . "and will be buried on" . $timeofBurial . "in" . $placeOfBurial . "For more details contact this number -" . $phoneContact;
}


// Echo the response to the API
header('Content-Type: text/plain');
echo $response;

?>
