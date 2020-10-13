<?php
  session_start();
  $captcha = $_POST['captcha'];
  $check = false;
  if (isset($_SESSION['captcha'])) {
      // Case sensitive Matching
      if ($captcha == $_SESSION['captcha']) {
          $check = true;
      }
      unset($_SESSION['captcha']);
  }
  if($check){
    include "phpmailer/classes/class.phpmailer.php";
    $mail = new PHPMailer;
    $mail->IsSMTP();
    $mail->SMTPSecure = 'tls';
    $mail->Host = "smtp.gmail.com"; //hostname masing-masing provider email
    $mail->SMTPDebug = 2;
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = "dontreplymabesbola303@gmail.com"; //user email
    $mail->Password = "m4b3sb0l4"; //password email
    $mail->SetFrom("dontreply@gmail.com","dontreply@messages.com"); //set email pengirim
    $mail->Subject = "Messages"; //subyek email
    $mail->AddAddress("rusmantoki23@gmail.com"); //tujuan email
    $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
    // $mail->addAttachment('1.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);
    $msg = "
            <!DOCTYPE html>
            <html lang='en-US'>
            <head>
                <meta charset='utf-8'>
            </head>
            <body>
            <div marginheight='0' marginwidth='0'>
              <div style='background-color:#f5f5f5;margin:0;padding:70px 0 70px 0;width:100%' dir='ltr'>
                <table width='100%' height='100%' cellspacing='0' cellpadding='0' border='0'>
                  <tbody>
                    <tr>
                      <td valign='top' align='center'>
                                    <div></div>
                          <table width='600' cellspacing='0' cellpadding='0' border='0' style='background-color:#fdfdfd;border:1px solid #dcdcdc;border-radius:3px!important'>
                            <tbody style='background-image: https://saadahnews.net/mabes303/img/image/poker-online.jpg'>
                              <tr>
                                <td valign='top' align='center'>
                                  <table width='600' cellspacing='0' cellpadding='0' border='0' style='background-color:#000000;border-radius:3px 3px 0 0!important;color:#ffffff;border-bottom:0;font-weight:bold;line-height:100%;vertical-align:middle;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;padding: 1rem;'>
                                    <tbody>
                                      <tr>
                                        <td style='padding:9px 48px;display:block;text-align: center;'>
                                            <img src='https://saadahnews.net/mabes303/img/logo.png' width='50%' height='auto' />
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>
                              <tr>
                                <td valign='top' align='center'>
                                  <table width='600' cellspacing='0' cellpadding='0' border='0'>
                                    <tbody>
                                      <tr>
                                        <td valign='top' style='background-color:#fdfdfd'>                                              
                                          <table width='100%' cellspacing='0' cellpadding='20' border='0'>
                                            <tbody>
                                              <tr>
                                                <td valign='top' style='padding:48px'>
                                                  <div style='color:#000;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:14px;line-height:150%;text-align:left'>
                                                      <p>Deposit message details</p>
                                                    <table cellspacing='0' cellpadding='10' border='0' style='width:100%;font-family:'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif;color:#737373;border:1px solid #e4e4e4'>
                                                      <tbody style='border-color: beige;'>
                                                        <tr>
                                                        <th style='width: 255px;'>Website Games</th>
                                                        <td>:</td>
                                                        <td style='width: 389.8px;'>".$_POST['websitegames']."</td>
                                                        </tr>
                                                        <tr>
                                                        <th style='width: 255px;'>ID Games</th>
                                                        <td>:</td>
                                                        <td style='width: 389.8px;'>".$_POST['idgames']."</td>
                                                        </tr>
                                                        <tr>
                                                        <th style='width: 255px;'>Jumlah Rupiah</th>
                                                        <td>:</td>
                                                        <td style='width: 389.8px;'>".$_POST["jml_rupiah"]."</td>
                                                        </tr>
                                                        <tr>
                                                        <th style='width: 255px;'>Nama Bank</th>
                                                        <td>:</td>
                                                        <td style='width: 389.8px;'>".$_POST['nama_bank']."</th>
                                                        </tr>
                                                        <tr>
                                                        <th style='width: 255px;'>Nama Rekening</th>
                                                        <td>:</td>
                                                        <td style='width: 389.8px;'>".$_POST['nama_rekening']."</td>
                                                        </tr>
                                                        <tr>
                                                        <th style='width: 255px;'>Nomor Rekening</th>
                                                        <td>:</td>
                                                        <td style='width: 389.8px;'>".$_POST['no_rekening']."</td>
                                                        </tr>
                                                        <tr>
                                                        <th style='width: 255px;'>Nomor Handphone</th>
                                                        <td>:</td>
                                                        <td style='width: 389.8px;'>".$_POST['no_hp']."</td>
                                                        </tr>
                                                        <tr>
                                                        <th style='width: 255px;'>PIN BBM</th>
                                                        <td>:</td>
                                                        <td style='width: 389.8px;'>".$_POST['pin_bb']."</td>
                                                        </tr>
                                                        <tr>
                                                        <th style='width: 255px;'>Email</th>
                                                        <td>:</td>
                                                        <td style='width: 389.8px;'>".$_POST['email']."</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                  </div>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>
                              <tr>
                                <td valign='top' align='center'>
                                  <table width='600' cellspacing='0' cellpadding='10' border='0'>
                                    <tbody>
                                      <tr>
                                        <td valign='top' style='padding:0'>
                                          <table width='100%' cellspacing='0' cellpadding='10' border='0'>
                                            <tbody>
                                              <tr>
                                                <td valign='middle' style='padding:0 48px 48px 48px;border:0;color:#99b1c7;font-family:Arial;font-size:12px;line-height:125%;text-align:center' colspan='2'>
                                                  <p>Powered by MABÉS 303</p>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            </body>
            </html>
            ";  
    $mail->MsgHTML($msg);
    if($mail->Send())
    	{
    		header('Location: index.php');
        $_SESSION["msg"] = 'Deposit terkirim';
     	}

  }else{
    header('Location: index.php');
  }
?>