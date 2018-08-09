<?php
  //Import CLASS PHPMailer
  use PHPMailer\PHPMailer\PHPMailer;
  require 'vendor/autoload.php';
  $mail = new PHPMailer;

  // Import Form view
  $file = DOMDocument::loadHTMLFile('./Partials/form-contact.html');
  $form = $file->getElementById('formContact');

  // Function <br>
  function breakText($name){
    global $file;
    $breaks = $name;
    $$breaks = $file->createElement('br');
    return ${$breaks};
  }

  //Check if Password exist
  //IF exist, use IT
  if(file_exists('./Partials/passwordGmail.php')) {
    include('./Partials/passwordGmail.php');
  }

  //Else IF dont exist, create Username and Password Input (GMAIL)
  else {
    $placement = $file->getElementById('firstformelement');

    //Create Email input
    $usernameForm = $file->createElement('label', 'Entrer votre adresse Gmail');
    $usernameForm->setAttribute('for', 'useremail');
    $usernameFormInput = $file->createElement('input');
    $UFIA = ['type' => 'email', 'id' => 'useremail', 'name' => 'useremail'];
    foreach ($UFIA as $key => $value) {
      $usernameFormInput->setAttribute($key, $value);
    }

    //Create Password input
    $passwordForm = $file->createElement('label', 'Entrer votre mot de passe Gmail');
    $passwordForm->setAttribute('for', 'gmailpassword');
    $passwordFormInput = $file->createElement('input');
    $PFIA = ['type' => 'password', 'id' => 'gmailpassword', 'name' => 'gmailpassword'];
    foreach ($PFIA as $key => $value) {
      $passwordFormInput->setAttribute($key, $value);
    }

    //Display Email and Password Input (GMAIL)
    $form->insertBefore($usernameForm, $placement);
    $form->insertBefore(breakText('br1'), $placement);
    $form->insertBefore($usernameFormInput, $placement);
    $form->insertBefore(breakText('br2'), $placement);
    $form->insertBefore($passwordForm, $placement);
    $form->insertBefore(breakText('br3'), $placement);
    $form->insertBefore($passwordFormInput, $placement);
    $form->insertBefore(breakText('br4'), $placement);
  }

  // Function ERROR Message
  function errorMsg($id, $message, $test){
    global $file, $form;
    $newnode = $test;
    $element = $file->getElementById($id);
    $$newnode = $file->createElement('p', $message);
    $form->insertBefore(${$newnode}, $element);
  }

  // Verif Submit
  if (isset($_POST['submit'])) {
    $handle = new upload($_FILES['image_field']);
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $log = []; // TAB Empty for LOG
    $today = getDate(); // Date moment Message

    // Verif If File Pass exist or not
    if(!file_exists('./Partials/passwordGmail.php')) {
      $sanuser = filter_var($_POST['useremail'], FILTER_SANITIZE_EMAIL);
      $sanpassword = filter_var($_POST['gmailpassword'], FILTER_SANITIZE_STRING);
      $valuser = filter_var($sanuser, FILTER_VALIDATE_EMAIL);
      // Verif if Mail GMAIL is Valid or Not
      if( $valuser !== false ) {
        $mail->Username = $valuser;
      } else {
        $id = 'useremail';
        $message = 'email non valide';
        errorMsg($id, $message, 'newnode2');
      }
      // Verif if Password GMAIL is Valid or Not
      if($sanpassword !== "") {
        $mail->Password = $sanpassword;
      } else {
        $id = 'gmailpassword';
        $message = 'password non valide';
        errorMsg($id, $message, 'newnode3');
      }
    }

    //Check if Email Exist and if not Empty Message
    if (isset($_POST['email']) && $_POST['message'] !== '') {
      //Create the Log
      $log['date'] = $today['weekday'].' '.$today['mday'].'/'.$today['mon'].'/'.$today['year'].' '.$today['hours'].':'.$today['minutes'].':'.$today['seconds'];
      //Sanitize, Validate Email and Sanitize Message
      $sanemail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
      $sanmessage = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
      $valemail = filter_var($sanemail, FILTER_VALIDATE_EMAIL);
      //Check Not Validity of entered email adress
      if($valemail == false){
        echo 'test';
        $id = 'errorEmail';
        $message = 'Veuillez entrez une adresse email valide';
        errorMsg($id, $message, 'newnode4');
      }
      //If Valid Email
      else {
        $nameToUse = '';
        // Check if Title is selected (Mme, Mlle, Mr)
        if (isset($_POST['title'])) {
          $nameToUse .= $_POST['title'] . ' ';
        }
        // Check if FirstName was entered and Sanitize it and Log it
        if ($_POST['firstName'] !== 'Votre prénom') {
          $nameToUse .= filter_var($_POST['firstName'], FILTER_SANITIZE_STRING) . " ";
          $log['firstName'] = filter_var($_POST['firstName'], FILTER_SANITIZE_STRING);
        }
        //Check if lastName was entered and Sanitize it and Log it
        if ($_POST['lastName'] !== 'Votre nom') {
          $nameToUse .= filter_var($_POST['lastName'], FILTER_SANITIZE_STRING) . " ";
          $log['lastName'] = filter_var($_POST['lastName'], FILTER_SANITIZE_STRING);
        }
        //Set the expeditor adress and name and log the email
        $mail->setFrom($valemail, $nameToUse);
        $log['email'] = $valemail;
        //Set the subject
        $mail->Subject = $_POST['subject'];
        //Set the recipient adress and the specific service
        $mail->addAddress('cedricfournier.pro@gmail.com', $_POST['reply_type']);
        //Set the message
        $mail->Body = $sanmessage;
        //Check if reply type is chosen
        if(isset($_POST['reply_type'])) {
          $log['format'] = $_POST['reply_type'];
        }
        // Upload IMG
        if ($handle->uploaded) {
          // Verif Type Extension IMG
          if ($handle->file_src_name_ext === 'png' || $handle->file_src_name_ext === 'jpg' || $handle->file_src_name_ext === 'jpeg' || $handle->file_src_name_ext === 'gif') {
            $handle->process('./uploads');
            // Verif if Extension is Valid
            if ($handle->processed) {
              $id = 'errorUpload';
              $message = 'Image attached';
              errorMsg($id, $message, 'newnode5');
              $imagePath = $handle->file_dst_pathname; // Attachment Img
              $mail->addAttachment($imagePath); // Attachment Img
              $handle->clean();
            } else {
              $id = 'errorUpload';
              $message = 'error : ' . $handle->error;
              errorMsg($id, $message, 'newnode6');
            }
            // Verif if Extension is NOT Valid
          } else {
            $id = 'errorUpload';
            $message = 'type de fichier invalide';
            errorMsg($id, $message, 'newnode7');
          }
        }
        // Verif if MSG is Send or Not
        if (!$mail->send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }

        echo '<pre>';
        $toput = json_encode($log, true) . ',';
        file_put_contents('./logs/logs.txt', $toput, FILE_APPEND);
        unset($_POST, $mail, $log, $toput);
        echo '</pre>';
      }
    //Check if Email NOT Exist and if Empty Message
    } else {
      if(isset($_POST['email'])) {
        $sanemail2 = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $valemail2 = filter_var($sanemail2, FILTER_VALIDATE_EMAIL);
        if ($valemail2 == false) {
          $id = 'errorEmail';
          $message = 'Veuillez entrez une adresse email valide';
          errorMsg($id, $message, 'newnode8');
        }
      }

      if (!isset($_POST['email'])) {
        $id = 'errorEmail';
        $message = 'Veuillez entrez une adresse email';
        errorMsg($id, $message, 'newnode8');
      }

      if ($_POST['message'] == '') {
        $id = 'errorMessage';
        $message = 'Veuillez entrez un message';
        errorMsg($id, $message, 'newnode9');
      }
    }
  }
 ?>
