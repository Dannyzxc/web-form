<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Maxpo | thank you for registring</title>
    <style>
      * {
        margin: 0;
        padding: 0;
      }

      body {
        background: url("images/img_7.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
        font-family: sans-serif;
        
      }

      .main{
        background-color: #000000b8;
        position: absolute;
        top: 0;
        height: 100vh;
        width: 100%;
        text-align: center;
        color: #fffffff2
}
       



      h1{
        font-size: 60px;
        /* font-weight: 800; */
        margin-top: 10%;
        margin-bottom: 20px;

      }
      h3{
        font-size: 32px;
        margin-bottom: 40px;

      }

      a{
        font-size: 32px;
    margin-bottom: 20px;
    letter-spacing: 2px;
  
    border: 2px solid white;
    padding: 5px 10px;
    border-radius: 10px;
    text-decoration: none;
    color: #fffffff2
}
      a:hover{
        font-size: 32px;
  
        margin-bottom: 20px;
        letter-spacing: 2px;
        background-color: white;
        color: black;
        border: 4px solid;
        padding: 5px 10px;
        border-radius: 10px;
        text-decoration: none;
}
       

      span{
      
      }

    a:nth-child(2){
        margin-left: 80px;
      }


      .bottom-text{
        margin-top: 50px;
        margin-bottom: 50px;
        font-size: 26px;
      }

  
    </style>
  </head>

  <body>

    
   <div class="main">
      <h1>Thank You For Registering</h1>
      <h3>Download</h3>
<span>
        <a href="https://maxpo.ae/images/gprs/gprs%20brochure.pdf" target="_blank" >Brochure</a>
        <a href="https://maxpo.ae/images/gprs/GPRS_Floor%20Plan.jpg" target="_blank">Floor Plan</a>
</span>
 
    <p class="bottom-text">
        <h3>You are one step away to showcase your properties</h3> 
    </p>
        <a href="https://maxpo.ae/images/gprs/Form.pdf" class="down-link" target="_blank">Registration Form</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="https://maxpo.ae" class="down-link" target="_blank">Visit Website</a>

    </div>

    <?php 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = test_input($_POST['name']);
            $cname = test_input($_POST['cname']);
    
            $email = test_input($_POST['email']);
            $phone = test_input($_POST['phone']);
            $subject1 = test_input($_POST['subject1']);
            $subject2 = test_input($_POST['subject2']);
            
            
            $client_ip = $_SERVER['REMOTE_ADDR'];
            
       
            $message1 = " <table  width='60%' style='border:1px solid black;'>
            <thead style='font-size:22px;color:#0051A4;text-align: center '>
            Gprs registration -  Builders
            </thead>
              <th style='background-color:#0051A4;color:#FFFFFF;text-align: center;'>Lead </th>
              <th style='background-color:#0051A4;color:#FFFFFF;text-align: center;'>Details</th>
              
              <tr style='background-color:#AAD4FF;'>
                <td width='65%'>Name</td>
                <td>" . $name . "</td>
              </tr>
    
              <tr style='background-color:#AAD4FF;'>
                <td width='65%'>Campany Name</td>
                <td>" . $cname . "</td>
              </tr>
              
              <tr style='background-color:#AAD4FF;'>
                <td width='65%'>Phone</td>
                <td>" . $phone . "</td> 
              </tr>
              
              <tr style='background-color:#AAD4FF;'>
                <td width='65%'>Email</td>
                <td>" . $email . "</td> 
              </tr>
              
              <tr style='background-color:#AAD4FF;'>
                <td width='65%'>City</td>
                <td>" . $subject1 . "</td> 
              </tr>
    
              <tr style='background-color:#AAD4FF;'>
                <td width='65%'>State</td>
                <td>" . $subject2 . "</td> 
              </tr>
              
              
             
              
              </table>";

            $message2 = " <center><h3>Thank you for registering </h3>.
            <h4> The concern person will revert back to you </h4>
            <h4> In any emergency you can reach our hotline numbers</h4>
            <h4> 9902526654</h4>
            <h4> 8197309544</h4>
            </center>";
    
        
    $to1="gprs@maxpo.ae";
    $to2="danny.maxpo@gmail.com";
    
                $subject = 'Enquiry From maxpo.ae';
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                $headers .= 'From:no-reply@maxpo.ae';
    
                if (mail($to1, $subject, $message1, $headers)) {
                    echo "";
                   
                } else {
                    echo "";
                   
                }
                $subject = 'Enquiry From maxpo.ae';
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                $headers .= 'From:no-reply@maxpo.ae';
    
                if (mail($email, $subject, $message2, $headers)) {
                    echo "";
                   
                } else {
                    echo "";
                   
                }
            
            
            
        }
    
        
           
      function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    } 
        
        ?>
      </div>
  </body>
</html>
