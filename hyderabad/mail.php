<?php 
if (isset($_POST['submit'])) {
    // Sanitize and validate input
    $name   = htmlspecialchars(trim($_POST['name']));
    $phone  = htmlspecialchars(trim($_POST['phone']));
    $msg    = htmlspecialchars(trim($_POST['message']));

    // Basic validation
    if (empty($name) || empty($phone) || empty($msg)) {
        echo ("<script LANGUAGE='JavaScript'>
                alert('Please fill in all the fields.');
        </script>");
    } else {
        $message = "<html>
        <table width='500' border='0' cellspacing='0' cellpadding='0'>
            <tr>
                <td style='border: 1px solid #ddd;'>
                    <table width='500' border='0' cellspacing='0' cellpadding='0'>
                        <tr>
                            <td style='background: #e58634; color: #FFFFFF; font-size: 24px; padding: 5px;'>
                                Enquiry From <a href='https://www.meghasystems.com/hyderabad/' style='color:white;'>meghasystems.com</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                    <tr style='background:#F2F2F2;'>
                                        <td style='color: #990000; font-size: 12px; font-family:Verdana, Geneva, sans-serif; font-weight: 700; padding: 9px 5px; border-top:1px solid #CCCCCC;'>Name :</td>
                                        <td style='border-left: 1px solid #CCCCCC; color:#333333; font-family:Verdana, Geneva, sans-serif; font-size: 12px; padding: 9px; border-top:1px solid #CCCCCC;'>$name</td>
                                    </tr>
                                    <tr style='background:#F2F2F2;'>
                                        <td style='color: #990000; font-size: 12px; font-family:Verdana, Geneva, sans-serif; font-weight: 700; padding: 9px 5px; border-top:1px solid #CCCCCC;'>Phone No :</td>
                                        <td style='border-left: 1px solid #CCCCCC; color:#333333; font-family:Verdana, Geneva, sans-serif; font-size: 12px; padding: 9px; border-top:1px solid #CCCCCC;'>$phone</td>
                                    </tr>
                                    <tr style='background:#F2F2F2;'>
                                        <td style='color: #990000; font-size: 12px; font-family:Verdana, Geneva, sans-serif; font-weight: 700; padding: 9px 5px; border-top:1px solid #CCCCCC;'>Message :</td>
                                        <td style='border-left: 1px solid #CCCCCC; color:#333333; font-family:Verdana, Geneva, sans-serif; font-size: 12px; padding: 9px; border-top:1px solid #CCCCCC;'>$msg</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        </html>";

        // Set recipient and subject
        $to = 'enquiries@meghasystems.com';
        $subject = "Enquiry From meghasystems.com";

        // Set headers
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
        $headers .= "From: enquiries@meghasystems.com\r\n";
        $headers .= "BCC: esearch.dev@gmail.com\r\n";

        // Send email
        if (mail($to, $subject, $message, $headers)) {
            echo ("<script LANGUAGE='JavaScript'>
                    alert('Your enquiry has been sent successfully.');
                    window.location.href='https://www.meghasystems.com/hyderabad/';
            </script>");
        } else {
            echo ("<script LANGUAGE='JavaScript'>
                    alert('Sorry, your enquiry could not be sent. Please try again later.');
                    window.location.href='https://www.meghasystems.com/hyderabad/';
            </script>");
        }
    }
}
?>
