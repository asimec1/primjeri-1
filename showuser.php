<?php

echo '<h1>Contact form</h1>
<p>Firstname: '.$_POST['firstname'] . '</p>';
echo '<p>Lastname: '.$_POST['lastname'] . '</p>';
echo '<p>Email: '.$_POST['email'] . '</p>';
echo '<p>Category: '.$_POST['category'] . '</p>';
echo '<p>Message: '.$_POST['message'] . '</p>';

$body = '<h1>Contact form</h1>
<p>Firstname: '.$_POST['firstname'] . '</p>
<p>Lastname: '.$_POST['lastname'] . '</p>
<p>Email: '.$_POST['email'] . '</p>
<p>Category: '.$_POST['category'] . '</p>
<p>Message: '.$_POST['message'] . '</p>';

mail($_POST['email'], 'My Subject', $body);

?>