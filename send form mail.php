<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $to = "a76244873@gmail.com"; // ← अपनी ईमेल यहाँ डालें
    $subject = "New Admission Form Submission";

    // फॉर्म से डाटा लेना
    $name = $_POST['student_name'];
    $father = $_POST['father_name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $class = $_POST['class'];

    // ईमेल का कंटेंट
    $message = "
    नया एडमिशन फॉर्म प्राप्त हुआ है:\n\n
    नाम: $name\n
    पिता का नाम: $father\n
    जन्म तिथि: $dob\n
    लिंग: $gender\n
    पता: $address\n
    कक्षा: $class\n
    ";

    $headers = "From: a76244873@gmail.com";  // आप चाहें तो कोई भी from मेल डाल सकते हैं

    // ईमेल भेजना
    if (mail($to, $subject, $message, $headers)) {
        echo "फॉर्म सफलतापूर्वक मेल कर दिया गया!";
    } else {
        echo "मेल भेजने में समस्या आई।";
    }
}
?>