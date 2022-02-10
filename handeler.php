<?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'inzamulhaq086@gmail.com';
    $email_subject = 'New From Submission';
    $email_body = "User Name: $firstname.\n".
                      "User Name: $lastname.\n".
                        "User Email: $email.\n".
                            "User Email: $message.\n";

    $to = "inzamulhaq86@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Replay-To: $email\r\n";
    mail($to,$email_subject,$email_body,$headers);
    header(("Location : emailsendinphp.html"))
?> 


//laravel

function send_verify_email($blade,$data,$subject = null)
{

    $mail_subject = !empty($subject) ? $subject : "Verify";
    try {
        $mail = \Illuminate\Support\Facades\Mail::send($blade, $data, function ($message) use ($data,$mail_subject) {
            $data=$data['user_dit'];
            $message->to( $data->email,$data->name)->from(env('MAIL_FROM_ADDRESS'), env('APP_NAME'))->subject($mail_subject);

        });
    } catch (\Exception $e) {

    }
}
