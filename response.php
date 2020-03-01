<?php
	header("Location: http://klex.co.at/dankeumfrage.html",true);
	$post_string = "Feedback";
	foreach($_POST as $key=>$value)
	{
			$post_items[] = $key . '=' . $value;
	}
	$post_string = implode ('<br/>', $post_items);

	$sender = "no-reply@klex.co.at";
	$empfaenger = "christian.laurin@inode.at";
	$subject = "Evaluation Zufriedenheit Essen KLEX";
	$headers = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

	mail($empfaenger, $subject, $post_string, $headers);
?>