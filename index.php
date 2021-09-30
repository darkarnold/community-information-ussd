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

  $response = "END ". $missingItem . " belonging to " . $name . " are missing. Please contact this number if found - " . $phoneContact;

}else if($text == '2*2') {
  $missingPerson = "Jane Smith";
  $phoneContact = "0788904567";
  $contactPerson = " John Smith";

  $response = "END" . $missingPerson . " has gone missing from the area if found " . $contactPerson . " on the following number - ". $phoneContact;

}else if ($text == '2*3') {
  $deceasedPerson = "Oliver Twist";
  $placeOfBurial = "London";
  $dateOfDeath = "04 January 2020";
  $timeOfBurial = "06 January 2020";
  $contactPerson = "Tom Little";
  $phoneContact = " 0756893456";

  $response = "END The family of " . $contactPerson . " would like to announce the passing of " . $deceasedPerson . " who passed on " . $dateOfDeath . " and will be buried on " . $timeofBurial . " in " . $placeOfBurial . " For more details contact this number - " . $phoneContact;

} else if($text == '3') {
  $response = "CON Select which welfare service you would like to get in touch with \n";
  $response .= "1. Child Welfare \n";
  $response .= "2. Elder welfare";
}

else if($text == '3*1') {
  $contactPerson = "Mary Weathers";
  $phoneContact = "075678934";

  $response = "END For child care related services, contact " . $contactPerson . " on the following number - " . $phoneContact; 
 
}else if($text == '3*2') {
  $contactPerson = "David Wasswa";
  $phoneContact = "0788456789";

  $response = "END For services related to the elderly, contact " . $contactPerson . " on the following number - " . $phoneContact;
}

else if($text == '4') {
  $response = "CON Select the waste management provider to get in touch with \n";
  $response .= "1. Kasasiro Boys \n";
  $response .= "2. Village Waste Collection";
}

else if ($text == '4*1') {
  $monthlyrate = "UGX 15,000";
  $phoneContact = "0708454554";

  $response = "END The monthly rate for garbage collection is " . $monthlyrate . " Contact the following number for more  details " . $phoneContact;
}

else if($text == '4*2') {
  $monthlyrate = "UGX 10,000";
  $phoneContact = "0755653345";

  $response = "END The monthly rate for garbage collection is " . $monthlyrate . " Contact the following number for more  details " . $phoneContact;
}

// Echo the response to the API
header('Content-Type: text/plain');
echo $response;

?>
