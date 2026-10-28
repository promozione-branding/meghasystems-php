<?php 
if(isset($_POST['submit']))
{
$name=$_REQUEST['name'];
$address=$_REQUEST['address'];
$phone=$_REQUEST['phone'];
$email=$_REQUEST['email'];
$products=$_REQUEST['products'];
$msg=$_REQUEST['message'];


			
		 $message ="<html>
<table width='500' border='0' cellspacing='0' cellpadding='0'>
  <tr>
    <td style='border: 1px solid #ddd;'>
    
    <table width='500' border='0' cellspacing='0' cellpadding='0'>
  <tr>
    <td style='background: #e58634; color: #FFFFFF; font-size: 24px; padding: 5px;'>Enquiry From <a href='http://meghasystems.com/' style='color:white;'>meghasystems.com
</a>

 
 </td>
  </tr>

  <tr>
    <td>
    <table width='100%' border='0' cellspacing='0' cellpadding='0'>
    
		 <tr style='background: none repeat scroll 0 0 #F2F2F2;'>
        <td style='color: #990000; font-size: 12px; font-family:Verdana, Geneva, sans-serif; font-weight: 700; padding: 9px 5px; border-top:solid 1px #CCCCCC;'>Name :</td>
        
        <td style='border-left: 1px solid #CCCCCC; color: #333333; font-family:Verdana, Geneva, sans-serif; font-size: 12px; padding: 9px 0 9px 9px;  border-top:solid 1px #CCCCCC;'>$name</td>
      </tr>

       <tr style='background: none repeat scroll 0 0 #F2F2F2;'>
        <td style='color: #990000; font-size: 12px; font-family:Verdana, Geneva, sans-serif; font-weight: 700; padding: 9px 5px; border-top:solid 1px #CCCCCC;'>Address :</td>
        
        <td style='border-left: 1px solid #CCCCCC; color: #333333; font-family:Verdana, Geneva, sans-serif; font-size: 12px; padding: 9px 0 9px 9px;  border-top:solid 1px #CCCCCC;'>$address</td>
      </tr>

      <tr style='background: none repeat scroll 0 0 #F2F2F2;'>
        <td style='color: #990000; font-size: 12px; font-family:Verdana, Geneva, sans-serif; font-weight: 700; padding: 9px 5px; border-top:solid 1px #CCCCCC;'>Phone No :</td>
        
        <td style='border-left: 1px solid #CCCCCC; color: #333333; font-family:Verdana, Geneva, sans-serif; font-size: 12px; padding: 9px 0 9px 9px;  border-top:solid 1px #CCCCCC;'>$phone</td>
      </tr>
      
      
      	<tr style='background: none repeat scroll 0 0 #F2F2F2;'>
        <td style='color: #990000; font-size: 12px; font-family:Verdana, Geneva, sans-serif; font-weight: 700; padding: 9px 5px; border-top:solid 1px #CCCCCC;'>Email-Id :</td>
        
        <td style='border-left: 1px solid #CCCCCC; color:s #333333; font-family:Verdana, Geneva, sans-serif; font-size: 12px; padding: 9px 0 9px 9px;  border-top:solid 1px #CCCCCC;'>$email</td>
      </tr>
      
      
      	
      

      <tr style='background: none repeat scroll 0 0 #F2F2F2;'>
        <td style='color: #990000; font-size: 12px; font-family:Verdana, Geneva, sans-serif; font-weight: 700; padding: 9px 5px; border-top:solid 1px #CCCCCC;'>Products :</td>
        
        <td style='border-left: 1px solid #CCCCCC; color: #333333; font-family:Verdana, Geneva, sans-serif; font-size: 12px; padding: 9px 0 9px 9px;  border-top:solid 1px #CCCCCC;'>$products</td>
      </tr>
      
      
      
      
      
      	<tr style='background: none repeat scroll 0 0 #F2F2F2;'>
        <td style='color: #990000; font-size: 12px; font-family:Verdana, Geneva, sans-serif; font-weight: 700; padding: 9px 5px; border-top:solid 1px #CCCCCC;'>Message :</td>
        
        <td style='border-left: 1px solid #CCCCCC; color: #333333; font-family:Verdana, Geneva, sans-serif; font-size: 12px; padding: 9px 0 9px 9px;  border-top:solid 1px #CCCCCC;'>$msg</td>
      </tr>
      
</table></td>
  </tr>
  </table>
    </td>
  </tr>
</table>
";				

$to="contact@meghasystems.com,meghainteriorsfbd@gmail.com";
$from = "contact@meghasystems.com"; 
$subject ="Enquiry From contact@meghasystems.com";

		$headers  = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$headers .= "From:$from\r\n";
		
        $headers .= "BCC: esearchsolutions1@gmail.com\r\n";

	  if(mail($to,$subject,$message,$headers))
	  
		{
		
	    echo ("<script LANGUAGE='JavaScript'>
                window.location.href='thanku.html';
    </script>");
		}
		else
		{
	 	
		echo "Sorry Your query can't be send.Try later";
		
		}
	}

		


?>