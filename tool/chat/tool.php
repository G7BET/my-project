<?php 
if($_POST['tool']=="492130"){//聊天室全体禁言
copy("chatb.php","chat.php");
echo 'chat({"ok":"0"})';
}
elseif($_POST['tool']=="492131"){//聊天室解除禁言
copy("chata.php","chat.php");
echo 'chat({"ok":"1"})';
}
elseif($_POST['tool']=="492132"){//清空聊天记录
copy("messagesa.json","messages.json");
echo 'chat({"ok":"2"})';
}elseif($_POST['tool']=="492133"){//全体刷新
copy("messagesb.json","messages.json");
echo 'chat({"ok":"3"})';
}
?>