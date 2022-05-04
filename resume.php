<?php

class ResumeDetails
{
    public $full_name;
    public $summary;
    public $email;
    public $phone;
    public $home;

    function education() {
      $array = array("Pamantasan ng Lungsod ng Pasig", "Rizal High School", "Bambang Elementary School");
      $count = count($array);

      for ($i=0; $i<$count; $i++) {
        echo "- ".$array[$i]."\n";
      }
    }

    function hard_skills() {
      $array = array("Drupal","WordPress", "HTML", "CSS", "PHP", "Javascript");
      $count = count($array);

      for ($i=0; $i<$count; $i++) {
        echo "- ".$array[$i]."\n";
      }
    }

    function soft_skills() {
      $array = array("Communication", "Collaboration", "Ability to Learn");
      $count = count($array);

      for ($i=0; $i<$count; $i++) {
        echo "- ".$array[$i]."\n";
      }
    }
}

$resume = new ResumeDetails();

$resume->full_name = "Brix Adrian B. Cruz";
$resume->email = "brixadriancruz@gmail.com";
$resume->phone = "(+63)912 345 6789";
$resume->home = "42 JB Miguel Street, Bambang, Pasig City, Metro Manila, 1600";
$resume->summary = "I am a front-end developer with more than 3 years of experience writing html, css, and js. I'm motivated, result-focused and seeking a successful team-oriented company with opportunity to grow.";

$resume->college = "Pamantasan ng Lungsod ng Pasig";
$resume->course = "Bachelor of Science in Information and Technology";
$resume->schoolyear = "2019 - 2022";

echo "\no========{[RESUME]}========o\n\n";
echo "Full Name: \t\t" . $resume->full_name . "\n";
echo "Email Address: \t" . $resume->email . "\n";
echo "Phone Number: \t" . $resume->phone . "\n";
echo "Home Address: \t" . $resume->home . "\n";

echo "\n*------->Education<-------*\n";
echo "College: \t" . $resume->college . "\n";
echo "Course: \t" . $resume->course . "\n";
echo "School Year: \t" . $resume->schoolyear . "\n";

echo "\n*------->Hard Skills<-------*\n";
echo $resume->hard_skills();

echo "\n*------->Soft Skills<-------*\n";
echo $resume->soft_skills();

echo "\n*------->Education:\n";
echo $resume->education();

?>