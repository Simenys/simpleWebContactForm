<?php if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["issue"]) && isset($_POST["comment"])):
  echo "Name: " . $_POST["name"] . "\n";
  echo "Email: " . $_POST["email"] . "\n";
  echo "Your issue: " . $_POST["issue"] . "\n";
  echo "Your comment: " . $_POST["comment"] . "\n";
endif; ?>
