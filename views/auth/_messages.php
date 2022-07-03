<?php
$UserID = $_SESSION['UserID'];
$messages = ViewUnseenMessages($UserID);


?>

<div class="card users">
  <div class="card-header">
    Messages
  </div>
  <div class="card-body message">
    <?php
      ListMessages($messages);
    ?>
    <a href="/markdown">Markdown Tutorial</a>
    |
    <a href="/messages/seen">Look at Previous Messages (<?php if(GetNumberOfSeenMessages($_SESSION['UserID']) != 0) {
     echo GetNumberOfSeenMessages($_SESSION['UserID']); } else {
     echo '0';}?>)</a>
  </div>
</div>