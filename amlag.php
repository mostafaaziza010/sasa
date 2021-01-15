<?php
$get_toke = file_get_contents('info.php');
$get_token = explode("\n", $get_toke);
file_get_contents("https://api.telegram.org/bot$get_token[0]/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']."");
$url_info = file_get_contents("https://api.telegram.org/bot$get_token[0]/getMe");
$json_info = json_decode($url_info,true);
$e = $json_info['result']['username'];
$bot_id = $json_info['result']['id'];
$sudo = 175286468; 
ob_start();
$API_KEY = $get_token[0];
define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
    $ZZ_BB = http_build_query($datas);
        $url = "https://api.telegram.org/bot".API_KEY."/".$method."?$ZZ_BB";
        $ZZ_BB = file_get_contents($url);
        return json_decode($ZZ_BB);
}
$update = json_decode(file_get_contents('php://input'));
$message    = $update->message;
$message_id = $update->message->message_id;
$re_msgid   = $update->message->reply_to_message->message_id;
$from_id    = $message->from->id;
$text       = $message->text;
$chat_id    = $message->chat->id;
$new        = $message->new_chat_member;
$left       = $update->message->left_chat_member;
$result2    = $json2->result;
$contact    = $update->message->contact;
$audio      = $update->message->audio;
$location   = $update->message->location;
$memb       = $update->message->message_id;
$game       = $update->message->game; 
$name       = $update->message->from->first_name;
$re         = $update->message->reply_to_message;
$re_msgid   = $update->message->reply_to_message->message_id;
$re_id      = $update->message->reply_to_message->from->id;
$gp_name    = $update->message->chat->title;
$user       = $update->message->from->username;
$for        = $update->message->from->id;
$sticker    = $update->message->sticker;
$number     = str_word_count($text);
$_spam = file_get_contents("data/$chat_id/spam.txt");
$spam_ = explode("\n",$_spam);
$numper     = strlen($text);
$video      = $update->message->video;
$photo_      = $update->message->photo;
$voice      = $update->message->voice;
$bsma     = $update->message->voice;
$doc        = $update->message->document;
$fwd        = $update->message->forward_from;
$re         = $update->message->reply_to_message;
$re_id      = $update->message->reply_to_message->from->id;
$re_user    = $update->message->reply_to_message->from->username;
$re_msgid   = $update->message->reply_to_message->message_id;
$type       = $update->message->chat->type;
$mid        = $message->message_id;
$buyy   =  file_get_contents("username.php");
$by       =  explode("@",$buyy);
$sudo   = file_get_contents("sudo.php");
$admin = file_get_contents("sudo.php");
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $message->text;
$chat_id = $message->chat->id;
$from_id = $message->from->id;
$first_name = $message->from->first_name;
if($message){
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+1);
file_put_contents('msgs.json', json_encode($msgs));}
$set = file_get_contents("set.txt");
$chs = file_get_contents("ch.txt");
$ch = "@$chs";
$ZZ_BBz       = $message->message_id;
$setnamebot = file_get_contents("setname.txt");
$namebot = file_get_contents("namebot.txt");
$botuser = file_get_contents("botuser.txt");
$botus= file_get_contents("bot.txt");
$bot_us = "[@$bot_us]";
if($from_id == $sudo){
if($text == "🕒¦ وضع قناتي  •"){
	file_put_contents("set.txt","ch");
	bot('sendmessage',[
   "chat_id"=>$chat_id,
   "text"=> " 
- حسنا الان ارسل لي معرف قناتك ❕
-  بدون @ مثلآ : 

•| ZZ_BB ء🖤 |•
   ",
   'reply_to_message_id' =>$message->message_id, 
   ]);
   }
 if( $text && $set == "ch"){
    file_put_contents("ch.txt",$text);
    file_put_contents("set.txt","");
    bot('sendMessage',[ 
   'chat_id'=>$chat_id, 
 'text'=>"
• احسنت ، تم حفظ قناتك ،! 
• يرجى رفعي مشرف في قناتك 🌈ء
",
 'reply_to_message_id' =>$message->message_id, 
    ]);
}
if ($text == "ضع اسم للبوت ،🤾🏾‍♂'" || $text == "ضع اسم للبوت" || $text =="وضع اسم للبوت" || $text =="وضع اسم البوت" || $text =="ضع اسم البوت" || $text =="🆔¦ تغير اسم البوت •" ){
 file_put_contents("setname.txt","nam");
 bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
 *📭¦ حسننا عزيزي  المطور،
🗯¦ الان ارسل الاسم  للبوت ⚜*
 ",
 'parse_mode'=>"MARKDOWN",
 "reply_to_message_id"=>$ZZ_BBz,
 ]);
 }
 if($text && $setnamebot =="nam"){
  file_put_contents("namebot.txt",$text);
  file_put_contents("setname.txt","");
  bot("sendmessage",[
  "chat_id"=>$chat_id,
  "text" => "
  *📭¦ تم تغير اسم البوت  ✋🏿*
  ",
  'parse_mode'=>"MARKDOWN",
  "reply_to_message_id"=>$ZZ_BBz,
  ]);
  }
if($text == "🕒¦ وضع معرف بوتي •"){
	file_put_contents("botuser.txt","bot");
	bot('sendmessage',[
   "chat_id"=>$chat_id,
   "text"=> " 
- حسنا الان ارسل لي معرف بوتك !
-  بدون @ مثلآ : 

•| ZZ_BB ء🖤 |•
   ",
   'reply_to_message_id' =>$message->message_id, 
   ]);
   }
 if( $text && $botuser == "bot"){
    file_put_contents("bot.txt",$text);
    file_put_contents("botuser.txt","");
    bot('sendMessage',[ 
   'chat_id'=>$chat_id, 
 'text'=>"
• احسنت ، تم حفظ معرف بوتك ،! 
• الان يمكن للٱشخاص اضافه بوتك للمجموعات من الخاص في ٱلبوت ،🌈💘ء
",
 'reply_to_message_id' =>$message->message_id, 
    ]);
}
}
elseif ($text == "ضع اسم للبوت" || $text =="وضع اسم للبوت" || $text =="وضع اسم البوت" || $text =="ضع اسم البوت" and $from_id != $sudo){
 bot("sendmessage",[
 'chat_id'=>$chat_id,
 'text'=>"
 *☑┇ انت لست مطور هذا البوت ،!*
 ",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
if($text == "بوت" || $text == "شسمك" and $namebot != null and $namebot != ""){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"$namebot",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "بوت" || $text == "شسمك" and $namebot == NULL || $namebot == ""){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"🥟¦ لم يتم وضع اسم البوت ، لوضع اسم ارسل ، وضع اسم للبوت ،🖤🖤'",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, 
]);
}
$set        = file_get_contents("data/$chat_id.txt");
$ex         = explode("\n", $set);
$photo1     = $ex[0];
$sticker1   = $ex[1];
$contact1   = $ex[2];
$doc1       = $ex[3];
$fwd1       = $ex[4];
$voice1     = $ex[5];
$link1      = $ex[6];
$audio1     = $ex[7];
$video1     = $ex[8];
$tag1       = $ex[9];
$mark1      = $ex[10];
$bots1      = $ex[11];
$number1      = $ex[12];
$onlyibadlz       = file_get_contents("data/restrictChatMember/$chat_id.txt");
$_ex         = explode("\n", $onlyibadlz);
$photo2     = $_ex[0];
$sticker2   = $_ex[1];
$contact2   = $_ex[2];
$doc2       = $_ex[3];
$fwd2       = $_ex[4];
$voice2     = $_ex[5];
$link2      = $_ex[6];
$audio2     = $_ex[7];
$video2     = $_ex[8];
$tag2       = $_ex[9];
$mark2      = $_ex[10];
$bots2      = $_ex[11];

mkdir("data");
mkdir("data/restrictChatMember");

$get             = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info            = json_decode($get, true);
$JJ117        = $info['result']['status'];

$command = array("id","/id","ايدي");

$get_myid = file_get_contents("data/ids/idset.txt");
$_get_ = file_get_contents("data/ids/id.txt");
$get_ALONE = file_get_contents("data/ids/id_.txt");
$GETGG1ZZ = file_get_contents("data/ids/ZZ_BB.txt");
$_GG1ZZ_ = explode("\n",$GETGG1ZZ);

if($message and $type == "supergroup"){
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+1);
file_put_contents('msgs.json', json_encode($msgs));}
$result=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id=$result["result"]["photos"][0][0]["file_id"];
$count=$result["result"]["total_count"];
$game = json_decode(file_get_contents('game.json'),true);
$from_user = $message->from->username;
$from_name = $message->from->first_name;
$get_game = file_get_contents("game.txt");
$game1 = explode("\n",$get_game);
$gg1zz = array('اســرع واحد يرتب » { ل ، س ، ا ، ق ، ت ، ب ،ا } «','اســرع واحد يرتب » { ه ، ا ، ع ، ر ، ا } «','اســرع واحد يرتب » { ر ، و ، ح ، س } «','اســرع واحد يرتب » { ن ، ف ، ه ، ق } «','اســرع واحد يرتب » { و ، ن ، ي ، ا ، ف } «','اســرع واحد يرتب » { ن ، و ، ه ، ب ، ز } «','اســرع واحد يرتب » { ر ، ك ، و ، س ، ت ، ن ، ا ، ي } «','اســرع واحد يرتب » { ا ، ن ، م ، ل ، ي } «','اســرع واحد يرتب » { و ، ه ، ق ، ه } «','اســرع واحد يرتب » { ف ، ي ، س ، ه ، ن } «','اســرع واحد يرتب » { ج ، ا ، د ، ج ، ه } «','اســرع واحد يرتب » { س ، م ، ر ، د ، ه } «','اســرع واحد يرتب » { ا ، ن ، ا ، و ، ل } «','اســرع واحد يرتب » { ه ، غ ، ف ، ر ، } «','اســرع واحد يرتب » { ج ، ه ، ث ، ل ، ا } «','اســرع واحد يرتب » { خ ، م ، ب ، ط } «');
$get_ZZ_BB = array_rand($gg1zz, 1);

if($text =="الترتيب" or $text =="ترتيب"){file_put_contents("game.txt",$chat_id);bot('sendMessage',['chat_id'=>$chat_id,'text'=>$gg1zz[$get_ZZ_BB],'reply_to_message_id'=>$message->message_id]);}
if(in_array($chat_id,$game1) and $text == 'سحور' or $text == 'سياره'  or $text == 'استقبال'  or $text == 'قنفه'  or $text == 'ايفون'  or $text == 'بزونه' or  $text == 'مطبخ' or $text == 'كرستيانو' or $text == 'دجاجه' or $text == 'مدرسه' or $text == 'الوان' or $text == 'غرفه' or $text == 'ثلاجه' or $text == 'قهوه' or $text == 'سفينه' or $text == 'اليمن'){$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);file_put_contents('game.json', json_encode($game));bot('sendMessage',['chat_id'=>$chat_id,'text'=>"*🎉¦ مبروك لقد ربحت نقطه🔖¦ اصبح لديك { ".$game['game'][$chat_id][$from_id]." } نقطه 🍃️*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);file_put_contents("game.txt","MMoHaMMeD");}
$marks = array('الرقم 📮¦ [ 12+13-8=؟؟ ]'  ,'الرقم 📮¦ [ 22-12+3=؟؟ ]'  ,'الرقم 📮¦ [ 1+1+2+9-0-1=؟؟ ]'  ,'الرقم 📮¦ [ 100-100+100-1=؟؟ ]'  ,'الرقم 📮¦ [  76-10+9=؟؟ ]'  ,'الرقم 📮¦ [ 13+2+1+7+0=؟؟ ]'  ,'الرقم 📮¦ [ 1+19-2=؟؟ ]'  ,'الرقم 📮¦ [ 91-81+10=؟؟ ]'  ,'الرقم 📮¦ [ 11+11+0=؟؟ ]'  ,'الرقم 📮¦ [ 0-0+0-1+1=؟؟ ]'  ,'الرقم 📮¦ [ 41+1+3-1=؟؟ ]'  ,'الرقم 📮¦ [ 50+50-2=؟؟ ]'  ,'الرقم 📮¦ [ 78-1+1=؟؟ ]'  ,'الرقم 📮¦ [ 33-13+1=?? ]'  ,'الرقم 📮¦ [ 10-9+10=?? ]'); $marks_php = array_rand($marks, 1);
if($text =="رياضيات" or $text =="حساب"){file_put_contents("game.txt",$chat_id);bot('sendMessage',['chat_id'=>$chat_id,'text'=>$marks[$marks_php],'reply_to_message_id'=>$message->message_id]);}
if(in_array($chat_id,$game1) and $text == '17' or $text == '13'  or $text == '12'  or $text == '99'  or $text == '75'  or $text == '23' or  $text == '18' or $text == '20' or $text == '1' or $text == '44' or $text == '98' or $text == '78' or $text == '21' or $text == '11' or $text == '10000' or $text == '1000'){$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);file_put_contents('game.json', json_encode($game));bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"*🎉¦ مبروك لقد ربحت نقطه
🔖¦ اصبح لديك { ".$game['game'][$chat_id][$from_id]." } نقطه 🍃️*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);file_put_contents("game.txt","MMoHaMMeD");}
$ZZ_BB_smile = array('🍏','🍎','843578','9755','25677','578866','14589','🍐','🍊','🍋','🍌','🍉','🍇','🍓','🍈','🍒','🍑','🍍','🥥','🥝','🍅','🍆','🥑','🥦','🥒','🌶','🌽','🥕','🥔','🍠','🥐','🍞','🥖','🥨','🧀','🥚','🍳','🥞','🥓','🥩','🍗','🍖','🌭','🍔','🍟','🍕','🥪','🥙','🍼','☕️','🍵','🥤','🍶','🍺','🍻','🏀','⚽️','🏈','⚾️','🎾','🏐','🏉','🎱','🏓','🏸','🥅','🎰','🎮','🎳','🎯','🎲','🎻','🎸','🎺','🥁','🎹','🎼','🎧','🎤','🎬','🎨','🎭','🎪','🎟','🎫','🎗','🏵','🎖','🏆','🥌','🛷','🚕','7643','93289','3457','95439','378865','24568','9976','289','2288','2854','🚗','🚙','🚌','🚎','🏎','🚓','🚑','🚚','🚛','🚜','🇮🇶','⚔','🛡','🔮','🌡','💣','📌','📍','📓','📗','📂','📅','📪','📫','📬','📭','⏰','📺','🎚','☎️','📡');$MOD = array_rand($ZZ_BB_smile,1);
if($text =="سمايلات" || $text =="سمايل"){file_put_contents("game.txt",$chat_id);bot('sendMessage',['chat_id'=>$chat_id,'text'=>"اسرع واحد يدز هذهہٓ ›› `$ZZ_BB_smile[$MOD]`",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);}
if(in_array($text,$ZZ_BB_smile) and in_array($chat_id,$game1)){$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);file_put_contents('game.json', json_encode($game));bot('sendMessage',['chat_id'=>$chat_id,'text'=>"*🎉¦ مبروك لقد ربحت نقطه🔖¦ اصبح لديك { ".$game['game'][$chat_id][$from_id]." } نقطه 🍃️*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);file_put_contents("game.txt","MMoHaMMeD");}
if($text == "نقودي" || $text == "عدد نقودي" || $text == "نقاطي" || $text == "عدد نقاطي" and $game['game'][$chat_id][$from_id]  > 0){bot('sendMessage',['chat_id'=>$chat_id,'text'=>"*📮¦ عدد النقود التي ربحتها هي » { ".$game['game'][$chat_id][$from_id]." }*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);}
if($text == "نقودي" || $text == "عدد نقودي" || $text == "نقاطي" || $text == "عدد نقاطي" and $game['game'][$chat_id][$from_id]  == NULL || $game['game'][$chat_id][$from_id]  == 0){bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"*💬¦ ليس لديك نقود ،
📬¦ للحصول ؏ النقود ،
📮¦ ارسل الالعاب وابدأ اللعب !*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);}
if($text == "بيع نقودي" || $text == "بيع نقاطي" || $text == "بيع النقود" || $text =="بيع النقاط" and $game['game'][$chat_id][$from_id]  > 20){$msgs = json_decode(file_get_contents('msgs.json'),true);$update = json_decode(file_get_contents('php://input'));$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+200);file_put_contents('msgs.json', json_encode($msgs));bot('sendMessage',['chat_id'=>$chat_id,'text'=>"*🎉¦ تم خصم { 20 } من نقودك ،📨¦ وتم اضافة » { 200 } رساله الى رسائلك !*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, ]);$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]-20);file_put_contents('game.json', json_encode($game));}
if($text == "msg" or $text == "رسائلي"){bot('sendmessage',['chat_id'=>$chat_id,'text'=>"* 💬¦ رسائلك • { ".$msgs['msgs'][$chat_id][$from_id]." } •*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id,]);}
elseif($text == "بيع نقودي" || $text == "بيع نقاطي" || $text == "بيع النقود" || $text =="بيع النقاط" and $game['game'][$chat_id][$from_id]  == NULL || $game['game'][$chat_id][$from_id]  < 20){bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"*⚜¦ لايمكنني بيع نقودك  ،
❗️¦ يجب ان تكون نقودك 20 فما فوق !*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, ]);}
/* HERE BECOME ID CODE ! */
$user          = $message->from->username;
$bot_id = $json_info['result']['id'];
$s = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$bot_id);
$ss = json_decode($s, true);
$bot = $ss['result']['status'];
mkdir("data");
mkdir("data/ids");
mkdir("data");
mkdir("data/devloper");
$devlopers = file_get_contents("data/devloper/devlop.txt");
$dev = explode ("\n",$devlopers);
$_devlopers = file_get_contents("data/devloper/devloper.txt");
$dev_ = explode("\n",$_devlopers);
$devlopers_ = file_get_contents("data/devloper/devlopers.txt");
$_dev = explode ("\n",$devlopers_);
$devlops = file_get_contents("data/devloper/devlops.txt");
$devs = explode("\n",$devlops);
$space ="";
$space =  $devlopers_ ."\n➖➖➖➖➖➖➖\n📨¦ الٱيـديـٱت :\n". $devlops ."\n";
if($re and $text == "رفع مطور" || $text =="/p" and $re_id !=$bot_id and $from_id == $sudo and $re_id != $sudo and !in_array($re_id,$dev)){
	file_put_contents("data/devloper/devlop.txt",$re_id ."\n" , FILE_APPEND);
	file_put_contents("data/devloper/devloper.txt" , "@". $re_user . "\n" , FILE_APPEND);
	file_put_contents("data/devloper/devlopers.txt" , "*➺* *❲* [" . "@". $re_user ."] *❳*" . "\n" , FILE_APPEND);
	file_put_contents("data/devloper/devlops.txt" , "*➺* *❲* `". $re_id ."` *❳*" . "\n" , FILE_APPEND);
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"*👤¦ العضو » *[@$re_user]
*🎫¦ الايدي » *`$re_id`
*🛠¦ تم ترقيته ليصبح مطور *",
    'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}
elseif($re and $text == "رفع مطور" || $text =="/p" and $re_id !=$bot_id and $from_id == $sudo and $re_id != $sudo and in_array($re_id,$dev)){
bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"*👤¦ العضو » *[@$re_user]
*🎫¦ الايدي » *`$re_id`
*🛠¦ انه مسبقٱ مطور في البوت *",
    'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}
if($text == "مسح المطورين" || $text == "/n" and $from_id == $sudo){
	file_put_contents("data/devloper/devlop.txt","");
	file_put_contents("data/devloper/devloper.txt","");
	file_put_contents("data/devloper/devlopers.txt","");
	file_put_contents("data/devloper/devlops.txt","");
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📛¦ تم مسح المطورين ☔️*",
    'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}
if($text == "المطورين" || $text == "/d" and $devlopers != NULL and $devlopers != " "){
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"*👨🏽‍💻¦ قائمه الـمـطـوريـن :*\n\n*➺* *❲* $buyy *❳* *»* *❲* `$sudo` *❳*\n➖➖➖➖➖➖➖\n📨¦ الـمعرفـٱت :\n$space\n",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id,
  ]);
}
if($text == "المطورين" || $text == "/d" and $devlopers == NULL || $devlopers == " "){
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"*👨🏽‍💻¦ قائمه الـمـطـوريـن :*\n\n*➺* *❲* $buyy *❳* *»* *❲* `$sudo` *❳*\n➖➖➖➖➖➖➖\n📨¦ لٱ يـوجد مطورين حٱليا",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id,
  ]);
}
if($text == "رتبتي" and in_array($from_id,$dev)){
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🎫¦ رتبتك » مطور البوت 👨🏻‍
➖",
    'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}
if($text == "رتبتي" and $from_id == $sudo){
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🎫¦ رتبتك » مطور اساسي 👨🏻‍✈️
➖",
    'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}
if($re and $text == "رفع مطور" || $text =="/p" and $from_id == $sudo and $re_id == $bot_id){
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"*👤¦ عذرا لا يمكنني رفع نفسي *",
    'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}
if($re and $text == "رفع مطور" || $text =="/p" and $from_id == $sudo and $re_id == $sudo){
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"*👤¦ هل انت احمق ،؟ انت الاساسي هنا ،! *",
    'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}
if($re and $text == "رفع مطور" || $text =="/p" and $from_id != $sudo){
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"*👤¦ ليس لديك صلاحيات رفع ، تنزيل مطور ،! *",
    'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}
if($text == "مسح المطورين" || $text == "/n" and $from_id != $sudo){
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"*👤¦ ليس لديك صلاحيات رفع ، تنزيل مطور ،! *",
    'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}

mkdir("data/manger");
mkdir("data/manger/$chat_id");
$_manger = file_get_contents("data/manger/$chat_id.txt");
$manger  = explode("\n",$_manger);
$_mang = file_get_contents("data/manger/$chat_id/mange.txt");
$mang = explode ("\n",$_mang);
$mangs = file_get_contents("data/manger/$chat_id/manges.txt");
$manges = explode("\n",$mangs);


if( $type == "supergroup" and $bot == "administrator"){
if($JJ117 == "creator" || $from_id == $sudo || in_array($from_id,$dev)) {

if($re and $text == "رفع مدير" || $text == "رفع المدير" || $text == "رفع منشئ" || $text == "رفع المنشئ" and !in_array($re_id,$manger)){
	file_put_contents("data/manger/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
	file_put_contents("data/manger/$chat_id/mange.txt" , " *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ". "\n" , FILE_APPEND);
	file_put_contents("data/manger/$chat_id/manges.txt" , "@". $re_user . "\n" , FILE_APPEND);
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"*👤¦ العضو » *[@$re_user]
*🎫¦ الايدي » *`$re_id`
*🛠¦ تم ترقيته ليصبح مدير او منشئ *",
    'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}
elseif($re and $text == "رفع مدير" || $text == "رفع المدير" || $text == "رفع منشئ" || $text == "رفع المنشئ" and in_array($re_id,$manger)){
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"*👤¦ العضو » *[@$re_user]
*🎫¦ الايدي » *`$re_id`
*🛠¦ انه مسبقٱ مدير او منشئ في البوت *",
    'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}

if($text == "مسح المدراء" || $text == "مسح المنشئين"){
	file_put_contents("data/manger/$chat_id.txt","");
	file_put_contents("data/manger/$chat_id.txt","");
	file_put_contents("data/manger/$chat_id/mange.txt" ,"");
	file_put_contents("data/manger/$chat_id/manges.txt" ,"");
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"*🙋🏼‍♂️¦ أهلا عزيزي ،⚜'
📛¦  تم مسح المدراء و المنشئين *",
    'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}

if($re and $text == "تنزيل المدير" || $text == "تنزيل مدير" || $text == "تنزيل منشئ" || $text == "تنزيل المنشئ" and in_array($re_id,$manger)){
	$re_id_ = file_get_contents("data/manger/$chat_id.txt");
	$noh = file_get_contents("data/manger/$chat_id/mange.txt");
	$noon = file_get_contents("data/manger/$chat_id/manges.txt");
	$noh1 = explode("             \n",$noh);
	$str = str_replace($re_id,"",$re_id_);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$noh1);
	$str3 = str_replace($re_user,"",$noon);
	$ex = explode("\n",$str3);
	file_put_contents("data/manger/$chat_id.txt",$str);
	file_put_contents("data/manger/$chat_id/mange.txt",$str2);
	file_put_contents("data/manger/$chat_id/manges.txt",$ex);
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"*👤¦ العضو » *[@$re_user]
*🎫¦ الايدي » *`$re_id`
*🛠¦ تم تنزيله من المدراء او المنشئين *",
    'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}

if($re and $text == "تنزيل المدير" || $text == "تنزيل مدير" || $text == "تنزيل منشئ" || $text == "تنزيل المنشئ" and !in_array($re_id,$manger)){
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"*👤¦ العضو » *[@$re_user]
*🎫¦ الايدي » *`$re_id`
*🛠¦ تم تنزيله بالفعل من المدراء او المنشئين ،!*",
    'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}
}
}
if($text == "المدراء" || $text == "المنشئين" || $text == "قائمه المدراء" and $_manger != NULL and $_manger != " "){
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📋¦ قائمه المدراء :*
    
$_mang\n",
    'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}
if($text == "المدراء" || $text == "المنشئين" || $text == "قائمه المدراء" and $_manger == NULL || $_manger == " " || $_manger == ""){
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📋¦ قائمه المدراء :

📛| Not Director ~⪼ لا يوجد مدراء !*",
    'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}
if($text == "رتبتي" and in_array($from_id,$manger) and !in_array($from_id,$getCCmember) and !in_array($from_id,$dev) and $from_id != $sudo){
 bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🎖¦ رتبتك » مدير البوت 👨🏿‍✈️
➖",
    'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}

if( $type == "supergroup" and $bot == "administrator"){
if($JJ117 != "creator" and $from_id != $sudo and !in_array($from_id,$dev)) {
	
if($re and $text == "تنزيل المدير" || $text == "تنزيل مدير" || $text == "تنزيل منشئ" || $text == "تنزيل المنشئ"){
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"*🌟¦ انت لاتمتلك ، صلاحيات رفع او تنزيل مدير ،🖤*",
    'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}
	
if($text == "مسح المدراء" || $text == "مسح المنشئين"){
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"*🌟¦ ليس لديك ، صلاحيات مسح المدراء او المنشئين ،🌈' *",
    'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}
	
	
if($re and $text == "رفع مدير" || $text == "رفع المدير" || $text == "رفع منشئ" || $text == "رفع المنشئ"){
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"*🌟¦ انت لاتمتلك ، صلاحيات رفع او تنزيل مدير ،🖤*",
    'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}
}
}
mkdir("data");
mkdir("data/member");
mkdir("data/member/$chat_id");

$Cmember = file_get_contents("data/member/$chat_id/Cmember.txt");
$CCmember = file_get_contents("data/member/$chat_id/member.txt");
$CCCmember = file_get_contents("data/member/$chat_id/CCmember.txt");
$getCCmember = explode("\n",$CCmember);
$getCmember    = explode("\n",$CCCmember);

if( $type == "supergroup" and $bot == "administrator"){
if($JJ117 == "creator" || $JJ117 == "administrator" || $from_id == $sudo || in_array($from_id,$dev) || in_array($from_id,$manger)) {

if($re and $text == "رفع مميز" || $text == "رفع عضو مميز" and !in_array($re_id,$getCCmember)){
file_put_contents("data/member/$chat_id/member.txt",$re_id ."\n",FILE_APPEND);
file_put_contents("data/member/$chat_id/Cmember.txt","- @" . $re_user . " ٭ " . $re_id . " ٭" . "\n" , FILE_APPEND);
file_put_contents("data/member/$chat_id/CCmember.txt" , "@". $re_user . "\n" , FILE_APPEND);
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🍬¦ العضو » [@$re_user]
🌤¦ الايدي » ( `$re_id` )
🍥¦ تم رفعه مميز :'(",
'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}

if($re and $text == "رفع مميز" || $text == "رفع عضو مميز" and in_array($re_id,$getCCmember)){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🍬¦ العضو » [@$re_user]
🌤¦ الايدي » ( `$re_id` )
🍥¦ انهّ عضو ممـيز بالفعل ،",
'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}


if($re and $text == "تنزيل مميز" || $text == "تنزيل عضو مميز" and in_array($re_id,$getCCmember)){
$str = str_replace($re_id,"",$CCmember);
$str2 = str_replace("- @" . $re_user . " ٭ " . $re_id . " ٭","",$Cmember);
$str3 = str_replace($re_user,"",$CCCmember);
$ex = explode("\n",$str);
$ex2 = explode("\n",$str2);
$ex3 = explode("\n",$str3);
file_put_contents("data/member/$chat_id/member.txt",$ex);
file_put_contents("data/member/$chat_id/Cmember.txt",$ex2);
file_put_contents("data/member/$chat_id/CCmember.txt",$ex3);
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🍬¦ العضو » [@$re_user]
🌤¦ الايدي » ( `$re_id` )
🍥¦ تمہ تنزيلهّ من المميزين '-'",
'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}
if($re and $text == "تنزيل مميز" || $text == "تنزيل عضو مميز" and !in_array($re_id,$getCCmember)){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🍬¦ العضو » [@$re_user]
🌤¦ الايدي » ( `$re_id` )
🍥¦ تمہ تنزيلهّ بالفعل من المميزين ؟",
'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}


if($text == "المميزين" || $text == "قائمه المميزين" and $Cmember != null || $Cmember != ""){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🍬¦ اليَك مميزين المجموعه : 

[ $Cmember ]",
'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}
if($text == "المميزين" || $text == "قائمه المميزين" and $Cmember == null || $Cmember == ""){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🍢¦ لٱيوجد ، اعضاء مميزين !",
'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}

if($text == "مسح المميزين" || $text == "مسح قائمه المميزين"){
file_put_contents("data/member/$chat_id/CCmember.txt","");
file_put_contents("data/member/$chat_id/member.txt","");
file_put_contents("data/member/$chat_id/Cmember.txt","");
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🥠¦ تم حذف الاعضٱء المميزين جميعٱ ،",
'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
         }
    }
}

if($text == "رتبتي" and in_array($from_id,$getCCmember) and !in_array($from_id,$manger) and !in_array($from_id,$dev) and $from_id != $sudo and $JJ117 != "administrator"){
 bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🎖¦ رتبتك » عضو مميز 🍧
➖",
    'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}

if($type == "supergroup" and $bot == "administrator"){
if($JJ117 != "creator" && $JJ117 != "administrator" && $from_id != $sudo && !in_array($from_id,$dev) and !in_array($from_id,$manger)){
if($re and $text == "رفع مميز" || $text == "رفع عضو مميز"){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🍧¦ ليس لديك صلاحيٱت ، رفع مميز .",
'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}
if($re and $text == "تنزيل مميز" || $text == "تنزيل عضو مميز"){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🍫¦ ليس لديك صلاحيٱت ، تنزيل مميز .",
'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}
if($text == "مسح المميزين" || $text == "مسح قائمه المميزين"){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🍦¦ ليس لديك صلاحيٱت ، مسح المميزين .",
'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}
if($text == "المميزين" || $text == "قائمه المميزين" and $Cmember != null || $Cmember != ""){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🍬¦ اليَك مميزين المجموعه : 

$Cmember ",
'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}
if($text == "المميزين" || $text == "قائمه المميزين" and $Cmember == null || $Cmember == ""){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🍢¦ لٱيوجد ، اعضاء مميزين !",
'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
          }
     }
 }
if($JJ117 == "member"){
$info = "فقط عضو";
$RTBGET = "فقط عضو";
}if(in_array($from_id,$getCCmember)){
$info = "عضو مميز";
$RTBGET = "عضو مميز";
}if($JJ117 == "administrator"){
$info = "مشرف المجموعة";
$RTBGET = "مشرف المجموعة";
}if(in_array($from_id,$manger)){
$info = "مدير الكروب";
$RTBGET = "مدير الكروب";
}if($JJ117 == "creator"){
$info = "منشئ المجموعه";
$RTBGET = "منشئ المجموعه";
}if(in_array($from_id,$dev)){
$info = "مطور البوت";
$RTBGET = "مطور البوت";
}if($from_id == $sudo){
$info = "مطور اساسي";
$RTBGET = "مطور اساسي";
}if(!$user){
$usr = "لا يوجد معرف";
}if($user){
$usr = "@$user";
}if($file_id == NULL){
$photo = "لاتمتلك صوره في الحساب";
}if($msgs['msgs'][$chat_id][$from_id] > 3000){
$active = array("خوش متفاعل 🌝","متفاعل ✨","اسطورة التفاعل 🌈ء","الله مال تفاعل ⚜","نايس التفاعل 💘ء",'قوي جدا ⚡️ ',  'قمه التفاعل ✨ ',  'اقوى تفاعل 🔥 ',);
$ZZ_BB = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 500){
$active = array('متوسط 🎋 ',  'متفاعل 💐',);
$ZZ_BB = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 1){
$active = array('غير متفاعل ✘', 'ضعيف 🥀 ',);
$ZZ_BB = array_rand($active,1);
}
$unid = explode("\n",file_get_contents("data/ids/unid.txt"));
if(!in_array("GG1ZZ",$_GG1ZZ_) and !in_array("MOHAMMED",$unid)){
if(!$re and in_array($text,$command)){
bot("sendphoto",[
  "chat_id"=>$chat_id,
  "caption"=>"
❕¦ معرفك ↫﹙[$usr] ﹚
🔰¦ ايديك ↫ ﹙ $from_id ﹚
👮‍♂¦ رتبتك ↫ ﹙ $info ﹚
🏳‍🌈¦ رسائلك ↫ ﹙ ".$msgs['msgs'][$chat_id][$from_id]." ﹚
🍜¦ تفاعلك ↫ ﹙ $active[$ZZ_BB] ﹚
🔢¦ عدد صورك ↫﹙ $count ﹚
",
"photo"=>"$file_id",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
  ]);
  }if(!$re and in_array($text,$command) and $file_id == null){
bot("sendmessage",[
  "chat_id"=>$chat_id,
  "text"=>"
🚸¦ $photo
❕¦ معرفك ↫﹙[$usr] ﹚
🔰¦ ايديك ↫ ﹙ $from_id ﹚
👮‍♂¦ رتبتك ↫ ﹙ $info ﹚
🏳‍🌈¦ رسائلك ↫ ﹙ ".$msgs['msgs'][$chat_id][$from_id]." ﹚
🍜¦ تفاعلك ↫ ﹙ $active[$ZZ_BB] ﹚
",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
        ]);
     }
  }
  
/*———————Here is done the id with out remake—————*/

$loran22 = "* اهلٱ بك عزيزي المطور ، اليَك قائمةه الدوال لتعينهٱ لكَود الأيدي ،💘💘'
————————————————
- لـَطبع الٱيدي :* `IDGET`
*- لـَطبع ٱلمعرف :* `[@USERGET]`
*- لـَطبع ٱلرتبه :* `RTBGET`
*- لـَطبع ٱلتفاعل :* `TFGET`
*- لـَطبع الرسٱئل :* `MSGGET`
*- لـَطبع النقود :* `NKOGET`
*- لـَطبع ٱلصور :* `PICGET`

• ملٱحظه : يمكن استعمٱل هذه الدوال لطبٱعه امر معين كمثٱل عند ارسال للبوت هكذا : 
ايديك : `IDGET` فٱنهَ سوف يقوم بطباعه ايدي الاشخاص عند كتٱبه *(ايدي)* 🖤🖤! 

- للٱستفسٱر : @M7FBOT ،🔰'";
if($from_id == $sudo){
if($text == "تعين الايدي" || $text == "تغير الايدي" || $text == "تعيين الايدي"){
	 mkdir("data");    /* Thanks ! for Using MY Code */   mkdir("data/ids");
    file_put_contents("data/ids/ZZ_BB.txt","GG1ZZ");
	file_put_contents("data/ids/id_.txt","MOHAMMED");
	bot("sendMessage",[
	'chat_id'=>$chat_id,
	'text'=>$loran22,
	'parse_mode'=>"MARKDOWN",
    'reply_to_message_id' =>$message->message_id, 
	]);
	}
	if($text and $get_ALONE == "MOHAMMED"){
	file_put_contents("data/ids/idset.txt",$text);
	file_put_contents("data/ids/id.txt",$text);
	file_put_contents("data/ids/id_.txt","");
	bot("sendMessage",[
	'chat_id'=>$chat_id,
	'text'=>"🚸¦ تم تغغَير كود الٱيدي .",
	'parse_mode'=>"MARKDOWN",
    'reply_to_message_id' =>$message->message_id, 
	]);
	}
	if($text == "مسح الايدي" || $text == "حذف الايدي" || $text == "ازاله الايدي"){
    file_put_contents("data/ids/ZZ_BB.txt","");
	bot("sendMessage",[
	'chat_id'=>$chat_id,
	'text'=>"🚸¦ تم مسح كود الٱيدي المَعدل .",
	'parse_mode'=>"MARKDOWN",
    'reply_to_message_id' =>$message->message_id, 
	    ]);
   }
}
if(in_array("GG1ZZ",$_GG1ZZ_) and !in_array("MOHAMMED",$unid)){
if(!$re and in_array($text,$command)){
$JJ115 = array("IDGET","USERGET","NKOGET","MSGGET","TFGET","RTBGET","PICGET");$JJ118 = array($from_id ,$user,$game['game'][$chat_id][$from_id],$msgs['msgs'][$chat_id][$from_id],$active[$ZZ_BB],$RTBGET,$count);$_ZZ_BB_ = str_replace($JJ115, $JJ118 , $get_myid);file_put_contents("data/ids/idset.txt",$_ZZ_BB_);
  bot("sendphoto",[
  "chat_id"=>$chat_id,
  "caption"=>"$_ZZ_BB_",
"photo"=>"$file_id",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
  ]);
  file_put_contents("data/ids/idset.txt",$_get_);
  }if(!$re and in_array($text,$command) and $file_id == null){
   $JJ115 = array("IDGET","USERGET","NKOGET","MSGGET","TFGET","RTBGET","PICGET");$JJ118 = array($from_id ,$user,$game['game'][$chat_id][$from_id],$msgs['msgs'][$chat_id][$from_id],$active[$ZZ_BB],$RTBGET,$count);$_ZZ_BB_ = str_replace($JJ115, $JJ118 , $get_myid);file_put_contents("data/ids/idset.txt",$_ZZ_BB_);
   bot("sendmessage",[
  "chat_id"=>$chat_id,
  "text"=>"$_ZZ_BB_
🚸¦ $photo",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
     ]);
     file_put_contents("data/ids/idset.txt",$_get_);
   }
}
if($text == "تعطيل الايدي" and $JJ117 == "creator" || $JJ117 == "administrator" || $from_id == $sudo || in_array($from_id,$dev) || in_array($from_id,$manger)){file_put_contents("data/ids/unid.txt","MOHAMMED");bot("SendMessage",["chat_id"=>$chat_id,"text"=>"- اهلٱ عزيزي ، تم تعطيل امر ايدي ،💘💘",'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id,]);}if($text == "تفعيل الايدي" and $JJ117 == "creator" || $JJ117 == "administrator" || $from_id == $sudo || in_array($from_id,$dev) || in_array($from_id,$manger)){file_put_contents("data/ids/unid.txt","");bot("SendMessage",["chat_id"=>$chat_id,"text"=>"- اهلٱ عزيزي ، تم تفعيل امر ايدي ،💘💘",'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id,]);}
if(!$re and in_array($text,$command) and in_array("MOHAMMED",$unid)){bot("sendmessage",["chat_id"=>$chat_id,"text"=>"- لقد تم تعطيل امر الٱيدي من قبل الادارةه ،🌈💘",'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id,]);}
if($text=="صورتي"){
$photo = "https://t.me/$user";
bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>$file_id,
'caption'=>"
صورتك : [@$from_user]
",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
}
$get = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info = json_decode($get, true);
$you = $info['result']['status'];
$gp_get = file_get_contents("data/groups.txt");
$groups = explode("\n", $gp_get);
 if($text=="/start" and $type == "private"){
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
💯¦ مـرحبآ آنآ بوت آسـمـي $namebot 🎖
💰¦ آختصـآصـي حمـآيهہ‏‏ آلمـجمـوعآت
📛¦ مـن آلسـبآم وآلتوجيهہ‏‏ وآلتگرآر وآلخ...
👨🏽‍🔧
",
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>"آلمـطـور 🌿",'url'=>"https://t.me/$by[1]"]]
    ]

  ])
  ]);
}
if ($new and $new->id == $bot_id) {
  bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"
💯¦ مـرحبآ آنآ بوت آسـمـي $namebot 🎖
💰¦ آختصـآصـي حمـآيهہ‏‏ آلمـجمـوعآت
📛¦ مـن آلسـبآم وآلتوجيهہ‏‏ وآلتگرآر وآلخ...
⚖️¦ مـعرف آلمـطـور  : $buyy 🌿
👨🏽‍🔧
",
    ]);
}
$time = time() + (979 * 11 + 1 + 30);
$JJ = "http://api.telegram.org/bot".API_KEY."/getChatMembersCount?chat_id=$chat_id";
$JJ1 = file_get_contents($JJ);
$JJ11 = json_decode($JJ1);
$JJ111 = $JJ11->result;
$title = $message->chat->title;
if($from_id == $sudo || in_array($from_id,$dev) and $you == "creator" || $JJ117 == "administrator" and $bot == "administrator") {
if($text=="تفعيل" || $text == "/add" || $text == "/add$botus" and !in_array($chat_id, $groups)) {
  file_put_contents("data/$chat_id.txt", "o\no\no\no\nl\no\nl\no\no\nl\no\no\no");
  file_put_contents("data/groups.txt", $chat_id . "\n",FILE_APPEND);
$t =  $message->chat->title;
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"📮¦ تـم تـفـعـيـل آلمـجمـوعهہ‏‏ 
✓️",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
    ]);}}
if($bot == "administrator") {
if($text=="تفعيل" || $text == "/add" || $text == "/add$botus" and in_array($chat_id, $groups)) {
	file_put_contents("data/$chat_id.txt", "o\no\no\no\nl\no\nl\no\no\nl\no\no\no");
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🎗¦ المجموعه بالتأكيد ✓️ تم تفعيلها",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
    ]);
 }}
 if($text == "تفعيل" || $text == "/add" || $text == "/add$botus" and $you == "creator" || $you == "administrator" || $you == "member" and $bot == "administrator") {
$export = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/exportChatInviteLink?chat_id=$chat_id"));
$l = $export->result;
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"
*💬┇ اهلا بك عزيزي المطور الاساسي 
☑┇ تم تفعيل مجموعه جديده 
  ٴ━━━━━━━━━━*
*💠┇ معلومات المجموعه
📬┇ الايدي »* $chat_id
*👤┇ الاسم »* $title
*📚┇ عدد الاعضاء »* $JJ111
*❗️┇رابط المجموعهہ »* $l
*•هذا رابط وهميّ شغال لمدةهہ•*
*  ٴ━━━━━━━━━*
*☑┇ معلومات الي فعل المجموعهہ
🇱🇦┇بواسطة »* $name
*🎟┇معرفه »* [@$user]
*⏰┇الساعة* :: ".date("g", $time).":".date("i", $time)."
*📆┇التاريخ* :: ".date("Y")."/".date("n")."/".date("d")."
",
'parse_mode'=>"MARKDOWN",
"message_id"=>$message_id,
]);}
if ($type == "supergroup" and $bot == "administrator"){
  
  if($you != "creator" && $you != "administrator" && $from_id != $sudo && !in_array($from_id,$dev) and !in_array($from_id,$manger) and !in_array($from_id,$getCCmember)){
 
if($photo_ && $photo2 == "l"){
        bot('deleteMessage',[
            'chat_id'=>$chat_id,
            'message_id'=>$message->message_id,
        ]);
bot('restrictChatMember',[
         'chat_id'=>$chat_id,
         'user_id'=>$from_id,
      ]);
    }

    if($voice and $voice2 == "l"){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id,
      ]);
bot('restrictChatMember',[
         'chat_id'=>$chat_id,
         'user_id'=>$from_id,
      ]);
    } 
  
    if($audio && $audio2 == "l"){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id,
      ]);
      bot('restrictChatMember',[
         'chat_id'=>$chat_id,
         'user_id'=>$from_id,
      ]);
    }
    if($video && $video2 == "l"){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id,
      ]);
      bot('restrictChatMember',[
         'chat_id'=>$chat_id,
         'user_id'=>$from_id,
      ]);
    }
    if($link2 == "l" and preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$text) ){
       bot('deleteMessage',[
         'chat_id'=>$chat_id,
         'message_id'=>$message->message_id,
      ]);
      bot('restrictChatMember',[
         'chat_id'=>$chat_id,
         'user_id'=>$from_id,
      ]);
    } 
    if($tag2 == "l" and  preg_match('/^(.*)@|@(.*)|(.*)@(.*)|(.*)#(.*)|#(.*)|(.*)#/',$text)){
       bot('deleteMessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$message->message_id,
       ]);
       bot('restrictChatMember',[
         'chat_id'=>$chat_id,
         'user_id'=>$from_id,
      ]);
    }
    if($doc and $doc2 == "l"){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id,
      ]);
      bot('restrictChatMember',[
         'chat_id'=>$chat_id,
         'user_id'=>$from_id,
      ]);
    }
    if($sticker and $sticker2 == "l"){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id,
      ]);
      bot('restrictChatMember',[
         'chat_id'=>$chat_id,
         'user_id'=>$from_id,
      ]);
    }
    if($update->message->forward_from || $message->forward_from_chat && $fwd2 == "l"){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id,
      ]);
      bot('restrictChatMember',[
         'chat_id'=>$chat_id,
         'user_id'=>$from_id,
      ]);
    }
 
    if($message->entities and $mark2 == "l"){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id
      ]);
      bot('restrictChatMember',[
         'chat_id'=>$chat_id,
         'user_id'=>$from_id,
      ]);
    }
    if($new and $bots2 =="l"){
$New_member = $message->new_chat_member;
$usser = $New_member->username;
$id = $New_member->id; 
if(preg_match('/^(.*)([Bb][Oo][Tt])/',$usser) and $New_member){
bot('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$id
]);
bot('restrictChatMember',[
         'chat_id'=>$chat_id,
         'user_id'=>$from_id,
      ]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👤¦ آلعضـو : [@$user]
👤¦ الايدي : $id 
🚫¦ مـمـنوع آضـآفهہ آلبوتآت 
📛¦ تم طـرد آلبوت وتقيدك ايضٱ ،
✘",
'reply_to_message_id'=>$message->message_id,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
      }
      }
   
if($photo_ && $photo1 == "l"){
        bot('deleteMessage',[
            'chat_id'=>$chat_id,
            'message_id'=>$message->message_id
        ]);
    }

    if($voice and $voice1 == "l"){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id
      ]);
    } 
    if($bsma and $bsma1 == "l"){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id
      ]);
    } 
    if($audio && $audio1 == "l"){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id
      ]);
    }
    if($video && $video1 == "l"){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id
      ]);
    }
    if($link1 == "l" and preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$text) ){
       bot('deleteMessage',[
         'chat_id'=>$chat_id,
         'message_id'=>$message->message_id
      ]);
    } 
    if($tag1 == "l" and  preg_match('/^(.*)@|@(.*)|(.*)@(.*)|(.*)#(.*)|#(.*)|(.*)#/',$text)){
       bot('deleteMessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$message->message_id
       ]);
    }
    if($doc and $doc1 == "l"){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id
      ]);
    }
    if($sticker and $sticker1 == "l"){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id
      ]);
    }
    if($update->message->forward_from || $message->forward_from_chat && $fwd1 == "l"){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id
      ]);
    }
    if($number > "300" and in_array($chat_id, $spam_)){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id
      ]);
     } 
    if($message->entities and $mark1 == "l"){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id
      ]);
    }
if($new and $bots1 == "l"){
$New_member = $message->new_chat_member;
$usser = $New_member->username;
$id = $New_member->id; 
if(preg_match('/^(.*)([Bb][Oo][Tt])/',$usser) and $New_member){
bot('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$id
]);
} 
}
}
}
if( $type == "supergroup" and $bot == "administrator"){
if($you == "creator" || $you == "administrator" || $from_id == $sudo || in_array($from_id,$dev) || in_array($from_id,$manger)) {
$re_user    = $update->message->reply_to_message->from->username;
  if($re  &&  $text == "/del" || $text == "مسح"){
    bot('deleteMessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$re_msgid
    ]);
  }
  $ename = str_replace("/setname ", "$ename", $text);
  $aname = str_replace("ضع اسم ", "$aname", $text);
  if($text == "/setname $ename"){
    bot('setChatTitle',[
      'chat_id'=>$chat_id,
      'title'=>$ename 
      ]);
  }
   if($text == "ضع اسم $aname"){
     bot('setChatTitle',[
      'chat_id'=>$chat_id,
      'title'=>$aname 
      ]);
   }
   if($re and $text == "pin" or $text == "تثبيت"){
    bot('pinChatMessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$re_msgid
      ]);
   }
   if($text == "/lock photo" or $text == "قفل الصور"){
    file_put_contents("data/$chat_id.txt", "l\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الصور 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
 
   if($text == "/open photo" or $text == "فتح الصور"){
    file_put_contents("data/$chat_id.txt", "o\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الصور 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
 
    if($text == "/lock sticker" or $text == "قفل الملصقات"){
    file_put_contents("data/$chat_id.txt", "$photo1\nl\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الملصقات 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
       if($text == "/open sticker" or $text == "فتح الملصقات"){
    file_put_contents("data/$chat_id.txt", "$photo1\no\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الملصقات 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
       if($text == "/lock contact" or $text == "قفل الجهات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\nl\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل جهات الاتصال 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
 if($text == "/open contact" or $text == "فتح الجهات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\no\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح جهات الاتصال 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/lock doc" or $text == "قفل الملفات" || $text == "قفل المتحركه" || $text == "قفل المتحركة"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\nl\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الملفات 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
  if($text == "/open doc" or $text == "فتح الملفات" || $text == "فتح المتحركه" || $text == "فتح المتحركة"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\no\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الملفات 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
if($text == "/lock fwd" or $text == "قفل التوجيه"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\nl\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل التوجيه 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open fwd" or $text == "فتح التوجيه"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\no\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح التوجيه 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/lock voice" or $text == "قفل البصمات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\nl\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل البصمات 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
     if($text == "/open voice" or $text == "فتح البصمات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\no\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح البصمات 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
     if($text == "/lock link" or $text == "قفل الروابط"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\nl\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الروابط 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open link" or $text == "فتح الروابط"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\no\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الروابط 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/lock audio" or $text == "قفل الصوت"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\nl\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الصوت 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open audio" or $text == "فتح الصوت"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\no\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الصوت 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/lock video" or $text == "قفل الفيديو"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\nl\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الفيديو 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open video" or $text == "فتح الفيديو"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\no\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الفيديو 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/lock user" or $text == "قفل المعرفات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\nl\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل المعرفات 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open user" or $text == "فتح المعرفات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\no\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح المعرفات 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
    if($text == "/lock mark" or $text == "قفل الماركدون"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\nl\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الماركدون 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open mark" or $text == "فتح الماركدون"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\no\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الماركدون 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
  if($text == "/lock bots" or $text == "قفل البوتات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\nl");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل البوتات 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open bots" or $text == "فتح البوتات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\no");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح البوتات 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   mkdir("data/$chat_id");
 if($text == "قفل الكلايش" and !in_array($chat_id, $spam_)){
 file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1\nl");
file_put_contents("data/$chat_id/spam.txt",$chat_id);
bot('sendMessage',
['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الكلايش
✓",]);}
if($text == "قفل الكلايش" and in_array($chat_id, $spam_)){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الكلايش مسبقاً
✓",]);}
if($text == "فتح الكلايش" and in_array($chat_id, $spam_)){
 file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1\no");
 file_put_contents("data/$chat_id/spam.txt","");
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الكلايش
✓",]);}
if($text == "فتح الكلايش" and !in_array($chat_id, $spam_)){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الكلايش مسبقاً
✓",]);}

if($text=="/setting" or $text=="/setting$e" or $text=="الاعدادات"){

  bot('sendMessage',['chat_id'=>$chat_id, 'text'=>"➖➖➖
👮🏾¦ اعدادات المجموعه : 


✔️¦ مقفول » l
✖️¦ مفتوح » o

➖➖➖

📸¦ الصور : $photo1
🀄️¦ الملصقات : $sticker1

📹¦ الفيديو : $video1
📡¦ الروابط :  $link1

☎️¦ الجهات : $contact1
🗂¦ الملفات :  $doc1

↩️¦ التوجيه : $fwd1
🎙¦ البصمات : $voice1

🔊¦ الصوت : $audio1
Ⓜ️¦ المعرف : $tag1

🔖¦ الماركدون : $mark1
📟¦ البوتات : $bots1

📒¦ الكلايش : $number1
⏱¦ المتحركات :  $doc1

➖➖➖
",
]);
}
if($text == "/lock photo restrict" or $text == "قفل الصور بالتقيد"){
    file_put_contents("data/restrictChatMember/$chat_id.txt", "l\n$sticker2\n$contact2\n$doc2\n$fwd2\n$voice2\n$link2\n$audio2\n$video2\n$tag2\n$mark2\n$bots2");
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الصور بالتقيد  
✓",
  'reply_to_message_id'=>$message->message_id,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
 
   if($text == "/open photo restrict" or $text == "فتح الصور بالتقيد"){
    file_put_contents("data/restrictChatMember/$chat_id.txt", "o\n$sticker2\n$contact2\n$doc2\n$fwd2\n$voice2\n$link2\n$audio2\n$video2\n$tag2\n$mark2\n$bots2");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الصور بالتقيد  
✓",
  'reply_to_message_id'=>$message->message_id,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
 
    if($text == "/lock sticker restrict" or $text == "قفل الملصقات بالتقيد"){
    file_put_contents("data/restrictChatMember/$chat_id.txt", "$photo2\nl\n$contact2\n$doc2\n$fwd2\n$voice2\n$link2\n$audio2\n$video2\n$tag2\n$mark2\n$bots2");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الملصقات بالتقيد 
✓",
  'reply_to_message_id'=>$message->message_id,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
       if($text == "/open sticker restrict" or $text == "فتح الملصقات بالتقيد"){
    file_put_contents("data/restrictChatMember/$chat_id.txt", "$photo2\no\n$contact2\n$doc2\n$fwd2\n$voice2\n$link2\n$audio2\n$video2\n$tag2\n$mark2\n$bots2");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الملصقات بالتقيد 
✓",
  'reply_to_message_id'=>$message->message_id,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
       if($text == "/lock contact restrict" or $text == "قفل الجهات بالتقيد"){
    file_put_contents("data/restrictChatMember/$chat_id.txt", "$photo2\n$sticker2\nl\n$doc2\n$fwd2\n$voice2\n$link2\n$audio2\n$video2\n$tag2\n$mark2\n$bots2");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل جهات الاتصال 
✓",
  'reply_to_message_id'=>$message->message_id,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
 if($text == "/open contact restrict" or $text == "فتح الجهات بالتقيد"){
    file_put_contents("data/restrictChatMember/$chat_id.txt", "$photo2\n$sticker2\no\n$doc2\n$fwd2\n$voice2\n$link2\n$audio2\n$video2\n$tag2\n$mark2\n$bots2");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح جهات الاتصال 
✓",
  'reply_to_message_id'=>$message->message_id,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/lock doc restrict" or $text == "قفل الملفات بالتقيد" || $text == "قفل المتحركه بالتقيد" || $text == "قفل المتحركة بالتقيد"){
    file_put_contents("data/restrictChatMember/$chat_id.txt", "$photo2\n$sticker2\n$contact2\nl\n$fwd2\n$voice2\n$link2\n$audio2\n$video2\n$tag2\n$mark2\n$bots2");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الملفات بالتقيد 
✓",
  'reply_to_message_id'=>$message->message_id,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
  if($text == "/open doc restrict" or $text == "فتح الملفات بالتقيد" || $text == "فتح المتحركه بالتقيد" || $text == "فتح المتحركة بالتقيد"){
    file_put_contents("data/restrictChatMember/$chat_id.txt", "$photo2\n$sticker2\n$contact2\no\n$fwd2\n$voice2\n$link2\n$audio2\n$video2\n$tag2\n$mark2\n$bots2");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الملفات بالتقيد 
✓",
  'reply_to_message_id'=>$message->message_id,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
if($text == "/lock fwd restrict" or $text == "قفل التوجيه بالتقيد"){
    file_put_contents("data/restrictChatMember/$chat_id.txt", "$photo2\n$sticker2\n$contact2\n$doc2\nl\n$voice2\n$link2\n$audio2\n$video2\n$tag2\n$mark2\n$bots2");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋??‍♂️¦ أهلا عزيزي 
📡¦ تم قفل التوجيه بالتقيد 
✓",
  'reply_to_message_id'=>$message->message_id,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open fwd restrict" or $text == "فتح التوجيه بالتقيد"){
    file_put_contents("data/restrictChatMember/$chat_id.txt", "$photo2\n$sticker2\n$contact2\n$doc2\no\n$voice2\n$link2\n$audio2\n$video2\n$tag2\n$mark2\n$bots2");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح التوجيه بالتقيد 
✓",
  'reply_to_message_id'=>$message->message_id,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/lock voice restrict" or $text == "قفل البصمات بالتقيد"){
    file_put_contents("data/restrictChatMember/$chat_id.txt", "$photo2\n$sticker2\n$contact2\n$doc2\n$fwd2\nl\n$link2\n$audio2\n$video2\n$tag2\n$mark2\n$bots2");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل البصمات بالتقيد 
✓",
  'reply_to_message_id'=>$message->message_id,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
     if($text == "/open voice restrict" or $text == "فتح البصمات بالتقيد"){
    file_put_contents("data/restrictChatMember/$chat_id.txt", "$photo2\n$sticker2\n$contact2\n$doc2\n$fwd2\no\n$link2\n$audio2\n$video2\n$tag2\n$mark2\n$bots2");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح البصمات بالتقيد 
✓",
  'reply_to_message_id'=>$message->message_id,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   } 
if($text == "/lock link restrict" or $text == "قفل الروابط بالتقيد"){
    file_put_contents("data/restrictChatMember/$chat_id.txt", "$photo2\n$sticker2\n$contact2\n$doc2\n$fwd2\n$voice2\nl\n$audio2\n$video2\n$tag2\n$mark2\n$bots2");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الروابط بالتقيد 
✓",
  'reply_to_message_id'=>$message->message_id,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
if($text == "/open link restrict" or $text == "فتح الروابط بالتقيد"){
    file_put_contents("data/restrictChatMember/$chat_id.txt", "$photo2\n$sticker2\n$contact2\n$doc2\n$fwd2\n$voice2\no\n$audio2\n$video2\n$tag2\n$mark2\n$bots2");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الروابط بالتقيد 
✓",
  'reply_to_message_id'=>$message->message_id,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/lock audio restrict" or $text == "قفل الصوت بالتقيد"){
    file_put_contents("data/restrictChatMember/$chat_id.txt", "$photo2\n$sticker2\n$contact2\n$doc2\n$fwd2\n$voice2\n$link2\nl\n$video2\n$tag2\n$mark2\n$bots2");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الصوت بالتقيد 
✓",
  'reply_to_message_id'=>$message->message_id,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open audio restrict" or $text == "فتح الصوت بالتقيد"){
    file_put_contents("data/restrictChatMember/$chat_id.txt", "$photo2\n$sticker2\n$contact2\n$doc2\n$fwd2\n$voice2\n$link2\no\n$video2\n$tag2\n$mark2\n$bots2");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الصوت بالتقيد 
✓",
  'reply_to_message_id'=>$message->message_id,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/lock video restrict" or $text == "قفل الفيديو بالتقيد"){
    file_put_contents("data/restrictChatMember/$chat_id.txt", "$photo2\n$sticker2\n$contact2\n$doc2\n$fwd2\n$voice2\n$link2\n$audio2\nl\n$tag2\n$mark2\n$bots2");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الفيديو بالتقيد  
✓",
  'reply_to_message_id'=>$message->message_id,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open video restrict" or $text == "فتح الفيديو بالتقيد"){
    file_put_contents("data/restrictChatMember/$chat_id.txt", "$photo2\n$sticker2\n$contact2\n$doc2\n$fwd2\n$voice2\n$link2\n$audio2\no\n$tag2\n$mark2\n$bots2");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الفيديو بالتقيد  
✓",
  'reply_to_message_id'=>$message->message_id,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/lock user restrict" or $text == "قفل المعرفات بالتقيد"){
    file_put_contents("data/restrictChatMember/$chat_id.txt", "$photo2\n$sticker2\n$contact2\n$doc2\n$fwd2\n$voice2\n$link2\n$audio2\n$video2\nl\n$mark2\n$bots2");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل المعرفات بالتقيد 
✓",
  'reply_to_message_id'=>$message->message_id,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open user restrict" or $text == "فتح المعرفات بالتقيد"){
    file_put_contents("data/restrictChatMember/$chat_id.txt", "$photo2\n$sticker2\n$contact2\n$doc2\n$fwd2\n$voice2\n$link2\n$audio2\n$video2\no\n$mark2\n$bots2");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح المعرفات بالتقيد 
✓",
  'reply_to_message_id'=>$message->message_id,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
    if($text == "/lock mark restrict" or $text == "قفل الماركدون بالتقيد"){
    file_put_contents("data/restrictChatMember/$chat_id.txt", "$photo2\n$sticker2\n$contact2\n$doc2\n$fwd2\n$voice2\n$link2\n$audio2\n$video2\n$tag2\nl\n$bots2");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الماركدون بالتقيد  
✓",
  'reply_to_message_id'=>$message->message_id,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open mark restrict" or $text == "فتح الماركدون بالتقيد"){
    file_put_contents("data/restrictChatMember/$chat_id.txt", "$photo2\n$sticker2\n$contact2\n$doc2\n$fwd2\n$voice2\n$link2\n$audio2\n$video2\n$tag2\no\n$bots2");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الماركدون بالتقيد  
✓",
  'reply_to_message_id'=>$message->message_id,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
  if($text == "/lock bots restrict" or $text == "قفل البوتات بالتقيد"){
    file_put_contents("data/restrictChatMember/$chat_id.txt", "$photo2\n$sticker2\n$contact2\n$doc2\n$fwd2\n$voice2\n$link2\n$audio2\n$video2\n$tag2\n$mark2\nl");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل البوتات بالتقيد 
✓",
  'reply_to_message_id'=>$message->message_id,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open bots restrict" or $text == "فتح البوتات بالتقيد"){
    file_put_contents("data/restrictChatMember/$chat_id.txt", "$photo2\n$sticker2\n$contact2\n$doc2\n$fwd2\n$voice2\n$link2\n$audio2\n$video2\n$tag2\n$mark2\no");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح البوتات بالتقيد 
✓",
  'reply_to_message_id'=>$message->message_id,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
if($text == "قفل الكل بالتقيد" || $text == "/lock all"){
   file_put_contents("data/restrictChatMember/$chat_id.txt", "l\nl\nl\nl\nl\nl\nl\nl\nl\nl\nl\nl");
   bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"*??¦ تم قفل اوامر المجموعه بالتقيد بواسطةه »$first_name *
*📎¦ معرفه » *[@$user]
*🕎¦ » سيتم الان السماح بالمحادثه فقط !*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
if($text == "فتح الكل بالتقيد" || $text == "/open all"){
   file_put_contents("data/restrictChatMember/$chat_id.txt", "o\no\no\no\no\no\no\no\no\no\no\no");
   bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"*📆¦ تم فتح اوامر المجموعه بالتقيد بواسطةه »$first_name *
*📎¦ معرفه » *[@$user]
*🕎¦ » سيتم الان السماح بـجميع الميديا !*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
   if($text=="/setting restrict" or $text=="الاعدادات بالتقيد" || $text == "اعدادات التقيد"){

  bot('sendMessage',['chat_id'=>$chat_id, 'text'=>"➖➖➖
👮🏾¦ اعدادات المجموعه : 


✔️¦ مقفول » l
✖️¦ مفتوح » o

➖➖➖


📸¦ الصور : $photo2
🀄️¦ الملصقات : $sticker2

📹¦ الفيديو : $video2
📡¦ الروابط :  $link2

☎️¦ الجهات : $contact2
🗂¦ الملفات :  $doc2

↩️¦ التوجيه : $fwd2
🎙¦ البصمات : $voice2

🔊¦ الصوت : $audio2
Ⓜ️¦ المعرف : $tag2

🔖¦ الماركدون : $mark2
📟¦ البوتات : $bots2

⏱¦ المتحركات :  $doc2

➖➖➖
",
]);
}
}
}
$id   = $message->from->id; 
$_user = $message->from->username; 
$user = "[$_user]";
$name = $message->from->first_name; 
if($from_id == $sudo and !in_array($from_id,$dev) and !in_array($from_id,$manger)){
if($text == "موقعي" || $text =="معلوماتي"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"*👨🏽‍🔧¦ اهـلا بـك عزيزي في معلوماتك 🥀 
ـ.——————————
🗯¦ الاســم •⊱{ $name }⊰•
💠¦ المعرف •⊱* @$user *⊰•
⚜️¦ الايـدي •⊱ {* `$from_id` *} ⊰•
🚸¦ رتبتــك •⊱ مطور اساسي 👨🏻‍✈️  ⊰•
🔰¦ ــ •⊱ {* `$chat_id` *} ⊰•
ـ.——————————
 •⊱ { الاحـصـائـيـات الـرسـائـل } ⊰•
💬¦ رسائلك ~ {* ".$msgs['msgs'][$chat_id][$from_id]." *}

ـ.——————————
👨🏻‍💻¦ مـطـور البوت •⊱* $buyy *⊰•*",
"parse_mode"=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($from_id != $sudo and in_array($from_id,$dev)){
if($text == "موقعي" || $text =="معلوماتي"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"*👨🏽‍🔧¦ اهـلا بـك عزيزي في معلوماتك 🥀 
ـ.——————————
🗯¦ الاســم •⊱{ $name }⊰•
💠¦ المعرف •⊱* @$user *⊰•
⚜️¦ الايـدي •⊱ {* `$from_id` *} ⊰•
🚸¦ رتبتــك •⊱ مطور البوت 👨🏻‍  ⊰•
🔰¦ ــ •⊱ {* `$chat_id` *} ⊰•
ـ.——————————
 •⊱ { الاحـصـائـيـات الـرسـائـل } ⊰•
💬¦ رسائلك ~ {* ".$msgs['msgs'][$chat_id][$from_id]." *}

ـ.——————————
👨🏻‍💻¦ مـطـور البوت •⊱* $buyy *⊰•*",
"parse_mode"=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($from_id != $sudo and !in_array($from_id,$dev) and in_array($from_id,$manger)){
if($text == "موقعي" || $text =="معلوماتي"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"*👨🏽‍🔧¦ اهـلا بـك عزيزي في معلوماتك 🥀 
ـ.——————————
🗯¦ الاســم •⊱{ $name }⊰•
💠¦ المعرف •⊱* @$user *⊰•
⚜️¦ الايـدي •⊱ {* `$from_id` *} ⊰•
🚸¦ رتبتــك •⊱ مدير البوت 👨🏿‍✈️ ⊰•
🔰¦ ــ •⊱ {* `$chat_id` *} ⊰•
ـ.——————————
 •⊱ { الاحـصـائـيـات الـرسـائـل } ⊰•
💬¦ رسائلك ~ {* ".$msgs['msgs'][$chat_id][$from_id]." *}

ـ.——————————
👨🏻‍💻¦ مـطـور البوت •⊱* $buyy *⊰•*",
"parse_mode"=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($from_id != $sudo and !in_array($from_id,$dev) and !in_array($from_id,$manger) and $JJ117 != "administrator" and in_array($from_id,$getCCmember)){
if($text == "موقعي" || $text =="معلوماتي"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"*👨🏽‍🔧¦ اهـلا بـك عزيزي في معلوماتك 🥀 
ـ.——————————
🗯¦ الاســم •⊱{ $name }⊰•
💠¦ المعرف •⊱* @$user *⊰•
⚜️¦ الايـدي •⊱ {* `$from_id` *} ⊰•
🚸¦ رتبتــك •⊱ عضـو مميز 🍨 ⊰•
🔰¦ ــ •⊱ {* `$chat_id` *} ⊰•
ـ.——————————
 •⊱ { الاحـصـائـيـات الـرسـائـل } ⊰•
💬¦ رسائلك ~ {* ".$msgs['msgs'][$chat_id][$from_id]." *}

ـ.——————————
👨🏻‍💻¦ مـطـور البوت •⊱* $buyy *⊰•*",
"parse_mode"=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($from_id != $sudo and !in_array($from_id,$dev) and !in_array($from_id,$manger) and !in_array($from_id,$getCCmember)){
if($text=="موقعي" || $text =="معلوماتي" and $JJ117 == "creator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"*👨🏽‍🔧¦ اهـلا بـك عزيزي في معلوماتك 🥀 
ـ.——————————
🗯¦ الاســم •⊱{ $name }⊰•
💠¦ المعرف •⊱* @$user *⊰•
⚜️¦ الايـدي •⊱ {* `$from_id` *} ⊰•
🚸¦ رتبتــك •⊱ المنشئ 🏌🏾‍♂ ⊰•
🔰¦ ــ •⊱ {* `$chat_id` *} ⊰•
ـ.——————————
 •⊱ { الاحـصـائـيـات الـرسـائـل } ⊰•
💬¦ رسائلك ~ {* ".$msgs['msgs'][$chat_id][$from_id]." *}

ـ.——————————
👨🏻‍💻¦ مـطـور البوت •⊱* $buyy *⊰•*",
"parse_mode"=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($from_id != $sudo and !in_array($from_id,$dev) and !in_array($from_id,$manger)){
if($text == "موقعي" || $text =="معلوماتي" and  $JJ117 == "administrator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"*👨🏽‍🔧¦ اهـلا بـك عزيزي في معلوماتك 🥀 
ـ.——————————
🗯¦ الاســم •⊱{ $name }⊰•
💠¦ المعرف •⊱* @$user *⊰•
⚜️¦ الايـدي •⊱ {* `$from_id` *} ⊰•
🚸¦ رتبتــك •⊱ ادمن البوت 🤺 ⊰•
🔰¦ ــ •⊱ {* `$chat_id` *} ⊰•
ـ.——————————
 •⊱ { الاحـصـائـيـات الـرسـائـل } ⊰•
💬¦ رسائلك ~ {* ".$msgs['msgs'][$chat_id][$from_id]." *}

ـ.——————————
👨🏻‍💻¦ مـطـور البوت •⊱* $buyy *⊰•*",
"parse_mode"=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($from_id != $sudo and !in_array($from_id,$dev) and !in_array($from_id,$manger) and !in_array($from_id,$getCCmember)){
if($text == "موقعي" || $text =="معلوماتي" and  $JJ117 == "member"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"*👨🏽‍🔧¦ اهـلا بـك عزيزي في معلوماتك 🥀 
ـ.——————————
🗯¦ الاســم •⊱{ $name }⊰•
💠¦ المعرف •⊱* @$user *⊰•
⚜️¦ الايـدي •⊱ {* `$from_id` *} ⊰•
🚸¦ رتبتــك •⊱ عضو فقط 👶🏻 ⊰•
🔰¦ ــ •⊱ {* `$chat_id` *} ⊰•
ـ.——————————
 •⊱ { الاحـصـائـيـات الـرسـائـل } ⊰•
💬¦ رسائلك ~ {* ".$msgs['msgs'][$chat_id][$from_id]." *}

ـ.——————————
👨🏻‍💻¦ مـطـور البوت •⊱* $buyy *⊰•*",
"parse_mode"=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
$get             = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info            = json_decode($get, true);
$JJ117        = $info['result']['status'];
$_replay = file_get_contents("data/replay.json"); $replay_ = explode("\n", $_replay);
if($bot =="administrator"){
if($from_id == $sudo or $JJ117 == "creator" or  $JJ117 == "administrator" || in_array($from_id,$dev) || in_array($from_id,$manger)){
if($text == "تفعيل الردود" and !in_array($chat_id, $replay_)){file_put_contents("data/replay.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم تفعيل الردود
✓",]);}
if($text == "تفعيل الردود" and in_array($chat_id, $replay_)){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم تفعيل الردود مسبقاً 
✓",]);}
if($text == "تعطيل الردود" and in_array($chat_id, $replay_)){
$send = file_get_contents("data/replay.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send); file_put_contents('data/replay.json', $send);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم تعطيل الردود
✓",]);}
if($text == "تعطيل الردود" and !in_array($chat_id, $replay_)){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم تعطيل الردود مسبقاً 
✓",]);}
}
if($text == "تفعيل الردود" || $text == "تعطيل الردود" and $JJ117 == "member" and $from_id != $sudo and $JJ117 != "creator" and  $JJ117 != "administrator" and !in_array($from_id,$dev) and !in_array($from_id,$manger)){
bot('sendMessage',[
'chat_id'=>$chat_id,'reply_to_message_id'=>$message->message_id,
'text'=>"*🇱🇦¦ انت ، لست من المنشئـين ، المشرفيـن ، المطوريـن*",
"parse_mode"=>"MARKDOWN"]);}
}
$textreply = array('parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'انعل ابوك' => 'وابوك عل واهس🌚✋🏻',
'تتزوجني' => 'اي تعال والمهر عليه ولايهمك🙊😂',
'تعال خاص' => 'ماشي خاص ع اختك مثلا🌚☝️🏽️',
'بوسني' =>'ٲٳٲمــﮨ﴿💋﴾ﮨﮨﮨﮨ﴿😚﴾ﮨــوٱآاﮨـٍٰۣۗح✵❤ لحلك/ق',
'مرحبا'=>'[مـراحـݕ ياۿـلا┋ 💖😻](https://t.me/ZZ_BB)',
'هلو'=>'[هــلؤﯙؤات ﺣﻳـاﺗـﻲ 🌸??](https://t.me/ZZ_BB)',
'السلام عليكم' => 'وعـﻟﻳـكم الــﺳـلام 😻🌸',
'الحمد لله' => "عســاها دو{مـو يـوم}وم┋ 💜'ء",
'كيفكم' => "انـا الحمـد ﻟﻟـﮧ'ه شـوف البقيـﮧ'ه┋💝'ء",
'هاي' => "هـايـات يـروحـي┋🌸😻'ء",
'جاو' => "اﻟﻟـﮧ'ه ويـاك حيـاتي┋💛💭ء",
'سلام' => "سـلامات حـﺒﯥ┋💝✨",
'اعشقك' => "اؤوؤف شۿـال جفـاف ¦ 😹😻'ء",
'اخباركم' =>"انـا الحمـد ﻟﻟـﮧ'ه شـوف البقيـﮧ'ه┋💝'ء",
'شكرا' => "{ •• الـّ~ـعـفو •• }",
'تمام' => "عســاها دو{مـو يـوم}وم┋💜'ء",
'بوس القروب' => "😁🌹امووووح فديتكم عضو عضو بس بنات انا استحرم غمضن خ عنْتر ورطني المطور┋💜'ء",
'حكومه' => "تاج راسي وراس صاحبتي قول يا بعد قلبي وحاجاته┋💜'ء",
'تكرهني' => "طـبعاً مـا اكـرهك ¦ 😹✨'ء",
'😒' => 'ماﮧ❃لكہ/.  قالب خـلـ🌚ـقتك🚶🏻',
'🌚' => 'منور صخام الجدر😹☝',
'بوسه' => 'امــہـ😘😚😘😚😘ــہــواااااح',
'انته وين' => 'بالــبــ🏠ــيــت',
'وينك' =>'بالــســ🚗ــيــارﮭﮧ',
'مح' => 'محات حياتي🙈❤',
'منور' => 'نِْـِْـــِْ([💡])ِْــــًِـًًْـــِْـِْـِْـورِْكِْ',
'دي' => '🚬 😌 يقولوها بس ليك/ي',
'تخليني' => 'تعالي ورة الكروب واخليك 😻🚶',
'غنيلي' =>'💖احبك انا  🙊 انا احبك 🙉 واتحدى واحد بلبشر زيي يحبك 🙊',
'المدرسة' => '😒🍃 الله لا يـوريـنا',
'اقفل التلاجة' => 'طفيتهه 😒🍃',
'شغل الاسبلت' => 'شغلته 🌚🍃 بس هتموتو من البرد ما عندي شغل ها',
'مايا خليفة' => '😂 عيب صايمين',
'فطور' =>'واخيراً 😍😍 عايز افطر ياخ جعان مدير القروب دا جابني هنا وقتلني بالجوع ',
'ههه' => '❀دِْوم حبيْ❀',
'هههه' => '❀دِْوم حبيْ❀',
'ههههه' => '❀دِْوم حبيْ❀',
'هههههه' => '❀دِْوم حبيْ❀',
'ههههههه' => '❀دِْوم حبيْ❀',
'هههههههه' => '❀دِْوم حبيْ❀',
'ههههههههه' => '❀دِْوم حبيْ❀',
'تركيا' => '😐🍃 فديتهه',
'عراسي' => 'يـسـلـمراسـك',
'تبادل' => 'ماا مليت من التبادل😓😐?•',
'اقطع' =>'سِـلُـطِـُه مٌـنَ بّْعـدِ 😅الُبّـ🤖ـوَتْ🎄',
'صايم' => 'اعمل ليك شنة مثلا 😐🍃',
'عطشان' => 'امشي ٲشـﮩـرب مــوية',
'جعان' => 'تـ؏ـال اكـلـني☺ 😐😂',
'😐' => 'مالك عامل زي الصنم كدا😒👋🏻',
'😭' => '😢 لا👈تـبـكـي 😿',
'وينها' => 'عايز يدخل خاص 😹',
'😍' => 'آإمـ﴿😚﴾ـح',
'ممكن' => 'ﺗْـ•ـﮩ؏ْﮩـ•ــ🚶ـاْل طبعااا ممكن 😋',
'حلو' => 'ٱنـﮩـت الاحـلآ 🌚❤️️',
'غبي' => 'انـت ٱڵٱغبۍ',
'😔' => 'مالك زعلان 😿🍃',
'☹️' => 'ماتزعل פـٍـٍبيبي  😢❤️🍃',
'شاكر' => 'هوي دا الملك وسيدها مالك وماله اناديهو ليك 😂😂',
'السلمندر' => 'اها☻ بدينا دخول للخاص بالله ماتزعجوا لينا تاج راسنا دا  🤤😜',
'شنو تتمنه' => 'أمنية حياتي أن أغوص في أعماقك🍷🌝',
'دايخ' => 'مڪ͜͡ﮩـ❦ـبـ﴿☺️﴾ـہسैـل┇?🌿',
'زهجان' => 'نِتـ؏ـاآركك ! 🙂🌸',
'👞' => 'ع راسك وراس الخلفك 🌚😹',
'😑' => 'مالك عصبي 🙁💔',
'🚶' => 'وين رايح وين جاي 🌚😹😹',
'وين المدير' => 'مالك عايز منو شنو🙄💔🍃',
'ماتدخل خاص' => 'مالك داخل خاص ع خالتك خلي يستفاد😕😹🙊',
'تنح' => 'من ما يكون معاك ببتدي يتنح كدا الشافع دا😸🤘🏿',
'🙄' => 'نزل عيونك لتنحول 😐😹😹' ,
);foreach($textreply as $txt => $send){if($text == $txt and in_array($chat_id, $replay_)){bot('sendMessage',['chat_id'=>$chat_id,'text'=>$send,'reply_to_message_id'=>$message->message_id,'parse_mode'=>'MARKDOWN','disable_web_page_preview'=>'true',]);}}

$firstname = $message->from->first_name;
$lastname = $message->from->last_name;
$username = $message->from->username;
$_wlc = file_get_contents("data/wlc.json"); $wlc_ = explode("\n", $_wlc);
$newid = $update->message->new_chat_member->id;
if($from_id == $sudo or $JJ117 == "creator" or  $JJ117 == "administrator" || in_array($from_id,$dev) || in_array($from_id,$manger)){
if($text == "تفعيل الترحيب" and !in_array($chat_id, $wlc_)){
file_put_contents("data/wlc.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',[
'chat_id'=>$chat_id,'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم تفعيل الترحيب
✓",]);}
if($text == "تفعيل الترحيب" and in_array($chat_id, $wlc_)){
bot('sendMessage',[
'chat_id'=>$chat_id,'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم تفعيل الترحيب مسبقاً
✓",]);}
if($text == "تعطيل الترحيب" and in_array($chat_id, $wlc_)){
$send = file_get_contents("data/wlc.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send); file_put_contents('data/wlc.json', $send);
bot('sendMessage',[
'chat_id'=>$chat_id,'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم تعطيل الترحيب
✓",]);}
if($text == "تعطيل الترحيب" and !in_array($chat_id, $wlc_)){
bot('sendMessage',[
'chat_id'=>$chat_id,'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم تعطيل الترحيب مسبقاً
✓",]);}
}
if($text == "تفعيل الترحيب" || $text == "تعطيل الترحيب" and $JJ117 == "member" and $from_id != $sudo and $JJ117 != "creator" and  $JJ117 != "administrator" and !in_array($from_id,$dev) and !in_array($from_id,$manger)){
bot('sendMessage',[
'chat_id'=>$chat_id,'reply_to_message_id'=>$message->message_id,
'text'=>"*🇱🇦¦ انت ، لست من المنشئـين ، المشرفيـن ، المطوريـن*",
"parse_mode"=>"MARKDOWN"]);}
if($update->message->new_chat_members and $newid != $bot_id){if(in_array($chat_id,$wlc_)){
bot('sendMessage',[
'chat_id'=>$chat_id,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'text'=>"*👋🏻 ¦ مرحبا بك يا -* [$name](tg://user?id=$from_id)  *نورت مجموعةه : $title*","parse_mode"=>"MARKDOWN",'reply_to_message_id'=>$message->message_id,]);}}

if($text == "رابط حذف" or $text == "رابط الحذف" or $text == "اريد احذف الحساب" or $text == "ححذف"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" ⸨ رابط حذف التلكرام ⸩ 🗑
➧  https://telegram.org/deactivate
⸺⸺⸺⸺⸺⸺⸺
",
'reply_to_message_id'=>$message->message_id, 
]);
}
$New_member = $message->new_chat_member;
$usser = $New_member->username;
$id = $New_member->id; 
if(preg_match('/^(.*)([Bb][Oo][Tt])/',$usser) and $New_member and $id != $id_bot and  $you == "member"){
bot('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$id
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👤¦ آلعضـو : @$user
👤¦ الايدي : $id 
🚫¦ مـمـنوع آضـآفهہ آلبوتآت 
📛¦ تم طـرد آلبوت 
✘",
]);
}
if($rep && $text == "ايدي" or $text == "ايديه"){
bot('sendmessage', [
'chat_id' => $chat_id,
'text' => " $re_id ",
]);
}
if($you == "administrator" || $you == "creator" || $from_id == $sudo || in_array($from_id,$dev) || in_array($from_id,$manger)){
if($text=="الاوامر" || $text =="/help"){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"*❂

 ‏‎‏❋¦ مـسـآرت آلآوآمـر آلعآمـهہ‏‏ ⇊

👨‍⚖️¦ م1 » آوآمـر آلآدآرهہ‏‏
📟¦ م2 » آوآمـر آعدآدآت آلمـجمـوعهہ‏‏
🛡¦ م3 » آوآمـر آلحمـآيهہ‏‏
⚙¦ م4 » آلآوآمـر آلعآمـهہ‏‏
🕹¦ م المطور »  آوآمـر آلمـطـور

*
* ‏‎‏❋¦ رآسـلني للآسـتفسـآر ☜* { $buyy } *✓*
",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
      ]);
  }
if($text == "م1" ){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"*┇ ⦅ آوآمـر آلرفع وآلتنزيل ⦆
      
┇ { رفع ادمن ‿ تنزيل ادمن } 
┇ { رفع مدير ‿ تنزيل مدير } 

• لابد ان يكـون ،🌈ء
• لـلبوت صلاحيه رفع مشرف ،!

⦅ ꯭آو꯭آم꯭ـر آ꯭لم꯭ـس꯭ـح꯭ للم꯭ـنش꯭ـى꯭ ⦆

🗑¦ مسح المدراء •⊱ لمسح المدراء 
🗑¦ مسح المكتومين •⊱ لمسح المكتومين

┇ـ➖➖➖➖➖
      
┇ـ
┇ ⦅ آوآمـر آلحظـر وآلطــرد وآلتقييـد ⦆
┇ـ
   
┇{ تقيد بالرد } : لتقيد العضو 
┇{ كتم بالرد } : لكتم العضو 
┇{ طرد بالرد } : لطرد العضو 
┇{ حظر بالرد } : لحظر وطرد العضو 

┇{ الغاء الحظر بالرد } : لالغاء الحظر عن عضو 
┇{ الغاء الكتم  بالرد } : لالغاء الكتم
┇{ الغاء التقيد بالرد } : لالغاء تقيد العضو
┇ـ➖➖➖➖➖

👨🏻‍💻¦ للاستفسار 💡↭ *$buyy",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MARKDOWN", 
]);
}
if($text == "م2"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
"text"=>"*👨🏽‍✈️¦  اوامر الوضع للمجموعه ::

📮¦ـ➖➖➖➖➖  
💭¦ ضع اسم + الاسم :↜ لوضع اسم
💭¦ اضف رد :↜ لاضافه رد   
 
💭¦ ضع قوانين :↜ لوضع قوانين
💭¦ الـقوانين : ↜ لعرض القوانين

💭¦ ضع رابط :↜ لوضع رابط
💭¦ الـرابـط :↜  لعرض الرابط  
📮¦ـ➖➖➖➖➖

👨🏽‍💻¦  اوامر رؤية الاعدادات ::

🗯¦ المطور : لعرض معلومات المطور 
🗯¦ موقعي :↜لعرض معلوماتك  
🗯¦ الاعدادات : لعرض اعدادات المجموعه 
🗯¦ المجموعه : لعرض معلومات المجموعه 

➖➖➖➖➖➖➖
👨🏻‍💻¦ للاستفسار 💡↭ *$buyy",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "م3"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"*⚡️ اوامر حماية المجموعه ⚡️
🗯¦ـ➖➖➖➖
🗯¦️ قفل «» فتح •⊱ البصمه ⊰•
🗯¦ قفل «» فتح •⊱ الفيديو ⊰•
🗯¦ قفل «» فتح •⊱ الـصــور ⊰•
🗯¦ قفل «» فتح •⊱ الملصقات ⊰•

🗯¦ قفل «» فتح •⊱ المتحركه ⊰•
🗯¦ قفل «» فتح •⊱ الدردشه ⊰•

🗯¦ قفل «» فتح •⊱ الروابط ⊰•
🗯¦ ️قفل «» فتح •⊱ المعرفات ⊰•
🗯¦ قفل «» فتح •⊱ البوتات ⊰•
🗯¦ قفل «» فتح •⊱ الكلايش ⊰•
🗯¦ قفل «» فتح •⊱ التوجيه ⊰•
🗯¦ قفل «» فتح •⊱ الماركدون ⊰•

🗯¦ قفل «» فتح •⊱ الجهات ⊰•
🗯¦ قفل «» فتح •⊱ الــكـــل ⊰•
🔅¦ـ➖➖➖➖➖
📲¦ قفل «» فتح •⊱ التوجيه بالتقيد ⊰•
🔗¦ قفل «» فتح •⊱ الروابط بالتقيد ⊰•
📀¦ قفل «» فتح •⊱ المتحركه بالتقيد ⊰•
📸¦ قفل «» فتح •⊱ الصور بالتقيد ⊰•

📽¦ قفل «» فتح •⊱ الفيديو بالتقيد ⊰•
🖱¦ قفل «» فتح •⊱ الماركدون بالتقيد ⊰•

📟¦ قفل «» فتح •⊱ البوتات بالتقيد ⊰•
🕒¦ قفل «» فتح •⊱ الجهات بالتقيد ⊰•
📢¦ قفل «» فتح •⊱ الصوت بالتقيد ⊰•
✔️¦ قفل «» فتح •⊱ الملصقات بالتقيد ⊰•

💬¦ قفل «» فتح •⊱ البصمه بالتقيد ⊰•
🏴‍☠¦ قفل «» فتح •⊱ الكل بالتقيد ⊰•
🔅¦ـ➖➖➖➖➖
📌¦ تفعيل «» تعطيل •⊱  الترحيب ⊰•
🗯¦ تفعيل «» تعطيل •⊱  الردود ⊰•
🗨¦ تفعيل «» تعطيل •⊱  اطردني ⊰•
🔅¦ـ➖➖➖➖➖

👨🏻‍💻¦ للاستفسار 💡↭* $buyy ",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "م4"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"*• اوامــہَر الاعضـــاء ،♥️ َ•

🔅¦ـ➖➖➖➖➖ 
🔸¦ اسمي : لعرض اسمك ،♐️ء
💱¦ معرفي : لعرض معرفك،🇧🇱ء
🌀¦ ايديي : لعرض ايديك،📌ء
🔅¦ـ➖➖➖➖➖
◽¦ اوامر التحشيش 🌝،
🗞¦ كول + (اسم الشخص) 
📯¦ كله + الرد + (الكلام) 
🔅¦ـ➖➖➖➖➖

👨🏻‍💻¦ للاستفسار 💡↭ *$buyy",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($from_id == $sudo || in_array($from_id,$dev)){
if($text == "م المطور"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"*📌¦ اوامر المطــہور 

🔅¦ عزيزي المطور ، ارسل الاوامر او /start ،
🔅¦ في خاص البوت لعرض اوامرك ،!

🔅¦ تحديث: لتحديث ملفات البوت
🔅¦ رفع او تنزيل : مطور { بالرد }
🔅¦ المطورين او /d : لعرض المطورين ، 
🔅¦ الادمنيه : لعرض مشرفين الكروب ،!
🔅¦ تعين الايدي - مسح الايدي ،💘'


🔅¦ الاحصائيات : لعرض احصائيات البوت ،
🔅¦ مسح المطورين او /n : لمسح المطورين ،! 
🔅¦ـ➖➖➖➖➖

👨🏻‍💻¦ للاستفسار 💡↭ *@GG1ZZ",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
    if($JJ117 == "member" and $from_id !=$sudo and !in_array($from_id,$dev) and !in_array($from_id,$manger)){
	if($text=="الاوامر" || $text =="/help"){
  	bot("sendmessage",[
	'chat_id'=>$chat_id,
	'text'=>"*🗯┇ المعذرهہ هذا الامر خاص بالادمنيهہ .
♦️┇ارسل م4 لعرض اوامر الاعضاء ،🖤. *",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id, 
	]);
	}
	if($text == "م1"){
	bot("sendmessage",[
	'chat_id'=>$chat_id,
	'text'=>"*🗯┇ المعذرهہ هذا الامر خاص بالادمنيهہ 🖤.*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id, 
	]);
	}
	if($text == "م2"){
	bot("sendmessage",[
	'chat_id'=>$chat_id,
	'text'=>"*🗯┇ المعذرهہ هذا الامر خاص بالادمنيهہ 🖤.*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id, 
	]);
	}
	if($text == "م3"){
	bot("sendmessage",[
	'chat_id'=>$chat_id,
	'text'=>"*🗯┇ المعذرهہ هذا الامر خاص بالادمنيهہ 🖤.*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id, 
	]);
	}
	}
	if($from_id != $sudo and !in_array($from_id,$dev)){
	if($text == "م المطور"){
	bot("sendmessage",[
	'chat_id'=>$chat_id,
	'text'=>"*🗯┇ المعذرهہ هذا الامر خاص بالمطورين 🖤.*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id, 
	]);
	}
	}
if($text == '/start' and $from_id == $sudo){ 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>"
'🎖¦ آهہ‏‏لآ عزيزي آلمـطـور 🍃
💰¦ آنتهہ‏‏ آلمـطـور آلآسـآسـي هہ‏‏نآ 🛠
...

🚸¦ تسـتطـيع‏‏ آلتحگم بگل آلآوآمـر آلمـمـوجودهہ‏‏ بآلگيبورد
⚖️¦ فقط آضـغط ع آلآمـر آلذي تريد تنفيذهہ‏‏
",
'reply_markup'=>json_encode([ 
'keyboard'=>[ 
[ 
['text'=>'📬¦ المشتركين •'] ,['text'=>'🔘⎮ضع كليشه المطور'] ,['text'=>'📎⎮تحديث السورس'] 
], 
[
['text'=>'📆⎮ اذاعه •'] ,['text'=>'⌛️¦ اذاعه خاص']
], 
[ 
['text'=>'☑️¦ عدد الكروبات •'] ,['text'=>'🆔¦ تغير اسم البوت •'] 
], 
[ 
], 
[ 
['text'=>'📤¦ اذاعه عام'] ,['text'=>'🖇¦ اذاعه عام توجيه'] ,['text'=>'⚫️¦ اذاعه خاص توجيه'] 
], 
[ 
], 
[ 
['text'=>'👁‍🗨¦ الاحصائيات'] ,['text'=>'📛¦ المحظورين عام •'] ,['text'=>'🚫¦ مسح قائمه العام •'] 
], 
[ 
['text'=>'📬¦  المساعدة •'] ,  ['text'=>'🌀¦ روابط الكروبات •'] 
], 
[ 
["text"=>"🔰¦ Coming Soon •"] ,['text'=>'🆔¦ ايديك •'] ,["text"=>"🕒¦ وضع قناتي  •"]
], 
[ 
["text"=>"🦄¦ شرٱء الٱصـدار المدفوع  •"]
], 
[ 
],  
] 
]) 
]); 
}
mkdir("MEM");
$from_sudo = file_get_contents("MEM/sudo.txt");
if($from_id == $sudo){
if($text=="ضع كليشه المطور" || $text == "وضع كليشه المطور" || $text == "تغير امر المطور" ||$text =="🔘⎮ضع كليشه المطور" and $from_id == $sudo){
        file_put_contents("MEM//ZZ_BB.txt", "set");
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"*🕎¦ حسننا عزيزي ،قم بأرسال كليشه المطور ، 
💬¦ ملاحظةه : يدعم الماركداون بجميع انواعه ،!*",
'reply_to_message_id'=>$message->message_id,
            'parse_mode'=>"MARKDOWN"
        ]);
    }
    if($text !="ضع كليشه المطور" and $text != "وضع كليشه المطور" and $text != "تغير امر المطور" and $text !== "🔘⎮ضع كليشه المطور" and $text == "$text" and file_exists("MEM/ZZ_BB.txt")){
    file_put_contents("MEM/sudo.txt","$text");
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"تمہ تغير امر المطور الى ؛
-  • [$text] •",
            'parse_mode'=>"MARKDOWN",
            'disable_web_page_preview'=>true,
        ]);
        unlink("MEM/ZZ_BB.txt");
    }
    }

   if($text == "المطور" or $text == 'مطور'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>"[$from_sudo]",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id
]);
}
mkdir("Fri3nd_s");

$message_id = $message->message_id;
$gp_get = file_get_contents("Fri3nd_s/groups.txt");
$groups = explode("\n", $gp_get);
$GG1ZZ = file_get_contents("Fri3nd_s/ZZ_BB.txt");
$pirvate = explode("\n",file_get_contents("Fri3nd_s/pirvate.txt"));
$forward = $update->message->forward_from;
$MOhaMMed = count($pirvate)-1;
$MoHaMMedd = count($groups)-1;

if($text == "اذاعه بالتوجيه" || $text == "اذاعه عام بالتوجيه" || $text == "اذاعه للكل بالتوجيه" || $text =="🖇¦ اذاعه عام توجيه" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/ZZ_BB.txt","ZZ_BB");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بتوجيه رسالةه*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "ZZ_BB" and $from_id == $sudo ){
  for($i=0;$i<count($groups);$i++){
bot('ForwardMessage',[
 'chat_id'=>$groups[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message_id,
 ]);
} 
for($i=0;$i<count($pirvate);$i++){
bot('forwardMessage',[
 'chat_id'=>$pirvate[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
 unlink("Fri3nd_s/ZZ_BB.txt");
} 
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
 ⚜• تم ارسال رسالتك الى $MOhaMMed عضو و $MoHaMMedd من مجموعات البوت ،💗ء*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id
   ]);
} 

if($text and $type == "private" and !in_array($from_id, $pirvate)){
file_put_contents("Fri3nd_s/pirvate.txt", "$from_id\n",FILE_APPEND);
}
if($text and $type == "supergroup" and !in_array($chat_id, $groups)) {
file_put_contents("Fri3nd_s/groups.txt", "$chat_id\n",FILE_APPEND);
}

if($text == "اذاعه خاص" || $text =="⌛️¦ اذاعه خاص" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/ZZ_BB.txt","ZZ_BB");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بأرسال رسالتك
📥• ملاحظةهہ : يمكنك استعمال الماركداون ،! *",
'parse_mode'=>"MarkDown",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "ZZ_BB" and $from_id == $sudo ){
    for ($i=0; $i<count($pirvate); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$pirvate[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
 file_put_contents("Fri3nd_s/ZZ_BB.txt","MMoHaMMeD");
} 
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
 ⚜• تم ارسال رسالتك الى $MOhaMMed عضو ،💗ء*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
          ]);
}
if ($text == "اذاعه للكل" || $text == "اذاعه عام" || $text == "اذاعه"  ||$text == "📆⎮ اذاعه •" || $text =="📤¦ اذاعه عام" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/ZZ_BB.txt","LE_C4_KR");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بأرسال رسالتك
📥• ملاحظةهہ : يمكنك استعمال الماركداون ،! *",
'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "LE_C4_KR" and $from_id == $sudo ){
    for ($i=0; $i<count($groups); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$groups[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,

]);
} 
for ($i=0; $i<count($pirvate); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$pirvate[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
 unlink("Fri3nd_s/ZZ_BB.txt");
} 
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
 ⚜• تم ارسال رسالتك الى $MOhaMMed عضو و $MoHaMMedd من مجموعات البوت ،💗ء*",
 'parse_mode'=>"MarkDown",
          'reply_to_message_id'=>$message->message_id
          ]);
}

if($text == "اذاعه خاص بالتوجيه" || $text == "⚫️¦ اذاعه خاص توجيه" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/ZZ_BB.txt","od_1j");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بتوجيه رسالةه*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "od_1j" and $from_id == $sudo ){
for($i=0;$i<count($pirvate);$i++){
bot('forwardMessage',[
 'chat_id'=>$pirvate[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
 unlink("Fri3nd_s/ZZ_BB.txt");
} 
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
⚜• تم توجيه رسالتك الى $MOhaMMed عضو ،💗ء*",
'parse_mode'=>"MARKDOWN",
          'reply_to_message_id'=>$message->message_id
   ]);
}





if($from_id !=$sudo and !in_array($from_id,$dev) and !in_array($from_id,$manger) and !in_array($from_id,$getCCmember)){
if($text=="رتبتي" and $you == "creator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🎫¦ رتبتك » المنشىء 🏌🏻
🌿
",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($from_id !=$sudo and !in_array($from_id,$dev) and !in_array($from_id,$manger)){
if($text=="رتبتي" and  $you == "administrator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🎫¦ رتبتك » ادمن في البوت 🎖
🌿",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($from_id !=$sudo and !in_array($from_id,$dev) and !in_array($from_id,$manger) and !in_array($from_id,$getCCmember)){
if($text=="رتبتي" and  $you == "member"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🎫¦ رتبتك » فقط عضو 🙍🏼‍♂️
🌿",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($from_id == $sudo || in_array($from_id,$dev)){
if($text == "☑️¦ المجموعات •" or $text == "المجموعات" || $text == "☑️¦ عدد الكروبات •"){
  $c = count($groups);
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"📮¦ عدد المجموعات المفعلة » $c  ➼"
    ]);
 }
$id = $message->from->id;
if($text == "🆔¦ ايديك •"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" $id ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "🛠¦ المطور •"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" 🏌🏻¦ مـطـور البوت : @$user 👨🏽‍🔧 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "💯¦ المشتركين •" or $text == "المشتركين" || $text == "📬¦ المشتركين •"){
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> "*💯¦ عدد مشتركين البوت :- { $MOhaMMed }*" ,
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
if($text == "👁‍🗨¦ الاحصائيات" or $text == "الاحصائيات"){
$c = count($groups);
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"الاحصائيات : 🔰 

▪️¦ عدد المجموعات المفعله : $MoHaMMedd 
📮¦ عدد المشتركين في البوت : $MOhaMMed",
'parse_mode'=>"MARKDOWN",
          'reply_to_message_id'=>$message->message_id
]);
}
if($text == "📡¦ قناة المطور •"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"🛠¦   قناة مـطـور الملف : $ch ☑️ ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "🌀¦ روابط الكروبات •"){
	$MoHaMMed = file_get_contents("ZZ_BB/link.txt");
	bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"*• اليـكَ ، جميع من وضعوٱ الروابط في مجموعٱتهم ايٱ كانت ،💘💘 ؛*
$MoHaMMed",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
if($text == "🔰¦ Coming Soon •"){
	bot("SendMessage",[
	"chat_id"=>$chat_id,
	'text' =>"*• تٱبع قناةه السورس ، لرؤيةه كل ما يوضع للپوت قريبٱ ، انتبه مطور السورس لايجيب على الاسئلةه المشروحه في القنٱة ، لذلك تٱبع قناةه السورس حتى يكـَون بأمكانك استخدٱم جميع ميزٱت السورس : *
- @ZZ_BB ،💘💘'
*توٱصل مطَور السورس : *
- @M7FBOT ،🔰'",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
	]);
	}
	if($text == "🦄¦ شرٱء الٱصـدار المدفوع  •"){
	bot("SendMessage",[
	    "chat_id"=>$chat_id,
	    "text" =>"- اهلٱ بك ، في الاصدٱر المدفوع لبوت الحمايةه،🖤'

*• من المميزٱت الخاصةه لهذا الاصدار : *

*1 -* تعديل جميع الكلٱيش في البوت حسب رغبتك الخاصةه ، ولكن يجب الانتباه قليلٱ ، لديك الحق في تعديلان فقط لكل شراء للأصدار ،💘' 

*2 - * عند شرٱء الاصدار المدفوع فأن كل مايتم اضافه امر جديد للبوتات يمكنك تغير الكليشةه مجانٱ وسيكون هذأ للأبد مهما كان عدد المرات التي اشتريت بها الاصدار ،🌤''

*3 - * يبلغ سعر شراء الاصدار المدفوع *10$* يمكنك الدفع من خلٱل بطاقٱت كوكل بلي او عن طريق رصيد *( اسيٱ فقط )* ، سيكون لك الامكانيه لسحب بطاقتين من التعديل اي يمكنك جمع عده كلايش وتعديلها ، وان كنت نسيت احدهم فيمكنك تعديله للمره الثانيه ، لكن بعدها ستنفذ بطاقاتك لذلك يتحتم عليك شراء الاصدار من جديد ،🌻'' 

*4 - * يمكنك مراسلةه صاحب السورس للأستفسار ، او لشراء الاصدار ، بالتأكيد سيكون شراء الاصدار مره *واحدة* وأي ميزات تضاف للاصدار المدفوع مستقبلا ستكون مجانيةه لك ،🌈''

*5 - * للأسفسار : @M7FBOT ،🔰'",
		'parse_mode'=>"MARKDOWN",
         'reply_to_message_id'=>$message->message_id,
	       ]);
         }
if($text == "📬¦  المساعدة •"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
💯¦ للمساعدة او اي أراء او افكار تواصل مع مطور الملف @GG1ZZ🌈💘ء
",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "ايديي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" $id ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "معرفي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" @$user ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "اسمي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" $name ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "قفل الخيانه"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"عذرآ عزيزي الامر غير صالح في بلدك 💔ء",
'reply_to_message_id'=>$message->message_id, 
]);
}

$time = time() + (979 * 11 + 1 + 30);
if($text == "الوقت" || $text == "التاريخ" || $text == "الساعه" || $text == "الزمن"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*-الشهر 🔗:- " . date("n") . "\n" . "- اليوم💢 :- " . date("j") . "\n" . " -الساعه ⏰:- " . date( g , $time) . "\n" . "-الدقيقه📮 :- " . date( i , $time) . "\n" . "*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, 
'reply_markup'=>json_encode([
      'inline_keyboard'=>[
[
['text'=>"•قناة البوت🕊•" ,'url'=>"t.me/$chs"]
],
]
])
]);
}
$from_id = $message->from->id;
$get = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info = json_decode($get, true);
$you = $info['result']['status'];
$id = $message->from->id;
mkdir("ZZ_BB");
mkdir("ZZ_BB/$chat_id");
$put = file_get_contents("ZZ_BB/$chat_id/link.txt");
$link = file_get_contents("ZZ_BB/$chat_id/put.txt");
$ex = explode("\n",$put);
$title = $message->chat->title;
if($text == "الرابط" || $text == "رابط" and $put == NULL || $put == " "){bot("sendmessage",['chat_id'=>$chat_id,'text'=>" *📭¦ لم يتم وضع رابط لوضع الرابط ، اكتب وضع رابط *",'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id,]);}

if($text == "الرابط" || $text == "رابط" and $put == true){bot("sendmessage",['chat_id'=>$chat_id,'text'=>"📎¦ $title \n\n📆¦ $put",'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id,]);}

if($from_id == $sudo || $you == "creator" || $you == "administrator" || in_array($from_id,$dev) || in_array($from_id,$manger)){
if( $text == "ضع رابط" || $text == "وضع رابط"){
file_put_contents("ZZ_BB/$chat_id/put.txt","link");
bot("sendmessage",['chat_id'=>$chat_id,'text'=>"
📚¦ حسنا ، ارسل لي رابط المجموعهہ ،!",'reply_to_message_id'=>$message->message_id]);}

if( $text == "وضع رابط" || $text == "ضع رابط" and $you == "member"){bot("sendmessage",['chat_id'=>$chat_id,'text'=>" عذرآ صديقي ،! ليس لديك صلاحيات وضع الرابط 🙂💔ء",'reply_to_message_id'=>$message->message_id]);}

if($text and $link == "link"){
file_put_contents("ZZ_BB/$chat_id/link.txt",$text);
file_put_contents("ZZ_BB/$chat_id/put.txt"," ");
file_put_contents("ZZ_BB/link.txt",$text . "\n" , FILE_APPEND);
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"
📬¦ تم حفظ الرابط الخاص بالمجموعهہ ،!
",
'reply_to_message_id'=>$message->message_id
]);
}
if( $text == "مسح الرابط" || $text == "حذف الرابط"){
file_put_contents("ZZ_BB/$chat_id/link.txt","");
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"
تم حذف الرابط الخاص بك
",
'reply_to_message_id'=>$message->message_id
]);
}
}
if($from_id != $sudo and $you != "creator" and $you != "administrator" and !in_array($from_id,$dev) and !in_array($from_id,$manger)){
if( $text == "مسح الرابط" || $text == "حذف الرابط"){
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=> "
 المعذره صديقي ليس لديك صلاحيات مسح الرابط
 ",
 'reply_to_message_id'=>$message->message_id
 ]);
 }
 }
 if($text == "المجموعه" or $text == "معلومات المجموعه"){
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
*♥️┇ اهلا بك في معلومات المجموعهہ،!
ٴ━━━━━━━━━━ *
*👤┇ عدد الاعضاء ↫ ❪ $JJ111 ❫
📨┇ عدد الرسائل ↫ ❪ $message->message_id ❫*
*❗️┇رابط المجموعهہ »* $put

*• اذا لم يتم عرض الرابط ،
فربما لم يتم وضع الرابط ،! •*

*🔘┇ ايدي المجموعه »* `$chat_id` 
*🌐┇ اسم الكروب : [ $title ] ➺*
",
'parse_mode'=>MARKDOWN,
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "سورس" || $text == "ياسورس" || $text == "السورس"){
		bot("sendmessage",[
	'chat_id'=>$chat_id,
	'text'=>"*• ممرحبٱ ععزيزي $name !🔰

• اليَك مطور ٱلبوت ، *$buyy *
• اليَك قناةه مطور البوت ، *$ch*

• اليَك مطور السورس ، *@M7FBOT*
• اليَك قناةه السورس ، *@ZZ_BB*

• شرَح تنصيب السَورس،🏳‍🌈💘 : 
- *https://youtu.be/SndLbPmzs1Y",
    'disable_web_page_preview'=>true,
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id, 
	 ]);
	 }
if($text == "تحديث البوت"  || $text == "📎⎮تحديث السورس" || $text == "تحديث السورس" || $text == "تحديث" and $from_id == $sudo || in_array($from_id,$dev)){
$source = file_get_contents("https://tgibadlz.cf/Source/source.txt");
file_put_contents("source.php",$source);
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>'⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️0%',
'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
 'text'=>'⬛️⬜️⬜️⬜️⬜️⬜️⬜️⬜️10%',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬜️⬜️⬜️⬜️⬜️⬜️20%',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬜️⬜️⬜️⬜️⬜️30%',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️🔳⬜️⬜️⬜️⬜️40%',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬜️⬜️⬜️⬜️50%',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬜️⬜️⬜️60%',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️▪️⬜️⬜️70%',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬜️⬜️80%',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️90%',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️100%',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>"*🔘¦  تم تحديث البوت بنجاح
🗂¦ تم تحديث ملفات البوت
☑️¦ تم التسريع والتخلص من الشحطات*",
  'parse_mode'=>"MARKDOWN",
  'reply_to_message_id'=>$message->message_id, 

 ]);
 } 
 $get             = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info            = json_decode($get, true);
$JJ117        = $info['result']['status'];
 $id = $message->from->id;
$ZZ_BB = $update->message->reply_to_message->from->id;
$TlllllT = $update->message->reply_to_message->from->username;
if($bot == "administrator" and $id == $sudo || $JJ117 == 'creator' || in_array($from_id,$dev) || in_array($from_id,$manger)){
if( $re and $text =="رفع ادمن"){
bot('promoteChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$ZZ_BB,
'can_delete_messages'=>true,
'can_invite_users'=>true,
'can_restrict_members'=>true,
'can_pin_messages'=>true,
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚜¦ العضو » @$TlllllT
▪️¦ الايدي » ( $ZZ_BB )
🕎¦ تم رفعه ادمن بالمجموعه ،!
",
'reply_to_message_id'=>$message->message_id,
]);
}
if($re and $text =="تنزيل ادمن"){
bot('promoteChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$ZZ_BB,
'can_delete_messages'=>false,
'can_invite_users'=>false,
'can_restrict_members'=>false,
'can_pin_messages'=>false,
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚜¦ العضو » @$TlllllT
▪️¦ الايدي » ( $ZZ_BB )
🕎¦ تم تنزيله من ادمنيه المجموعه ،!
",
'reply_to_message_id'=>$message->message_id,
]);
}
if($re and $text =="الغاء تقيد" || $text =="الغاء التقيد" || $text =="الغاء التقييد" || $text =="الغاء تقييد"){
bot('promoteChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$ZZ_BB,
'can_send_messages'=>true,
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚜¦ العضو » @$TlllllT
▪️¦ الايدي » ( $ZZ_BB )
🕎¦ تم الغاء تقيده من المجموعه ،!
",
'reply_to_message_id'=>$message->message_id,
]);
}
if($re and $text=="تقيد" || $text == "تقييد"){
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"
⚜¦ العضو » @$TlllllT
▪️¦ الايدي » ( $ZZ_BB )
🕎¦ تم تقيده من المجموعه ،!
",
'reply_to_message_id'=>$message->message_id,
      ]);
    bot('restrictChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$ZZ_BB
      ]);
  }
 }
if($id != $sudo and $JJ117 != 'creator' and !in_array($from_id,$dev) and !in_array($from_id,$manger)){
if($re and $text=="تقيد" || $text == "تقييد"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⚜¦ المعذره، ولكن 
🕎¦ هذا الامر يخص المطور ، المنشئ ٱو الادمن فقط ،!*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
if($re and $text =="الغاء تقيد" || $text =="الغاء التقيد" || $text =="الغاء التقييد" || $text =="الغاء تقييد"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⚜¦ المعذره، ولكن 
🕎¦ هذا الامر يخص المطور ، المنشئ ٱو الادمن فقط ،!*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
if($re and $text =="رفع ادمن"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⚜¦ المعذره، ولكن 
🕎¦ هذا الامر يخص المطور او المنشئ فقط ،!*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
if( $re and $text =="تنزيل ادمن"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⚜¦ المعذره، ولكن 
🕎¦ هذا الامر يخص المطور او المنشئ فقط ،!*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
}
if($bot == "administrator" ){
mkdir("LONELY");
$link1      = $ex[6];
$update = json_decode(file_get_contents('php://input'));
var_dump($update);
$message    = $update->message;
$message_id = $update->message->message_id;
$re_msgid   = $update->message->reply_to_message->message_id;
$name= $update->message->from->first_name;
$user= $update->message->from->username;
$get             = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info            = json_decode($get, true);
$LONELY        = $info['result']['status'];
$get_kick     = file_get_contents("LONELY/kick.txt");
$kick            = explode("\n",$get_kick);
if($text == "تفعيل اطردني" and $LONELY == "creator" || $LONELY == "administrator" || $from_id == $sudo || in_array($from_id,$dev) || in_array($from_id,$manger)){
 file_put_contents("LONELY/kick.txt",$chat_id);
 bot("Sendmessage",[
 'chat_id'=>$chat_id,
 'text'=>"*✡⁞ تم تفعيل امَر اطردني . *",
 'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($text == "تعطيل اطردني" and $LONELY == "creator" || $LONELY == "administrator" || $from_id == $sudo || in_array($from_id,$dev) || in_array($from_id,$manger)){
 file_put_contents("LONELY/kick.txt", " ");
 bot("Sendmessage",[
 'chat_id'=>$chat_id,
 'text'=>"*✡⁞ تم تعطيل امَر اطردني . *",
 'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id,
 ]);
 }

if($text =="اطردني" and  $LONELY == "member" and $from_id != $sudo and in_array($chat_id,$kick) and !in_array($from_id,$dev) and !in_array($from_id,$manger) and !in_array($from_id,$getCCmember)){
 $export = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/exportChatInviteLink?chat_id=$chat_id"));
    $l = $export->result;
    bot('KickChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$from_id,
        ]);
        bot('UnbanChatmember',[
            'chat_id'=>$chat_id,
            'user_id'=>$from_id,
            ]);
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"*لقد تم طردك بنجاح بأمر منك , ارسلت لك رابط المجموعه في الخاص اذا وصلت لك تستطيع الرجوع متى شئت ،🖤🖤*",
        'parse_mode'=>"MARKDOWN",
        'reply_to_message_id'=>$message->message_id,
]);
bot('sendmessage',[
    'chat_id'=>$from_id,
    'text'=>"
*🌟| اهلا عزيزي , لقد تم طردك من المجموعه بامر منك ،
🔖| اذا كان هذا بالخطأ او اردت الرجوع للمجموعه : *
*-*$l *.🖤*",
'parse_mode'=>"MARKDOWN",
]);
}

if($LONELY == "creator" or $LONELY == "administrator" or $from_id == $sudo || in_array($from_id,$dev) || in_array($from_id,$manger))
if($text == "اطردني"){
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"*✡⁞ لا استطيع طرد المشرفين ، المنشئين ، المطورين . *",
        'parse_mode'=>"MARKDOWN",
        'reply_to_message_id'=>$message->message_id,
]);
}
if($text =="اطردني" and !in_array($chat_id,$kick) and $from_id != $sudo and !in_array($from_id,$dev) and !in_array($from_id,$manger) and $JJ117 != "creator" and $JJ117 != "administrator"){
 bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"*✡⁞ امر اطردني معطَل . *",
        'parse_mode'=>"MARKDOWN",
        'reply_to_message_id'=>$message->message_id,
        ]);
        }
        mkdir("human");
        mkdir("human/$chat_id");
$get_human = file_get_contents("human/$chat_id/set.txt");
$human = file_get_contents("human/$chat_id/ch.txt");

if($text == "قوانين" || $text == "القوانين" and $human == NULL || $human == " "){
bot("sendmessage",['chat_id'=>$chat_id,
'text'=>"*🌟¦ لايوجد قوانين للمجموعةه ، لوضع قوانين اكتب وضع قوانين ،!*",
'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id,]);}

if($text == "ضع قوانين" || $text == "وضع قوانين" || $text == "وضع القوانين" || $text == "ضع القوانين" and $JJ117 != "member"){
	file_put_contents("human/$chat_id/set.txt","ch");
	bot('sendmessage',[
   "chat_id"=>$chat_id,
   "text"=> "📭¦ حسننا عزيزي  ✋🏿
🗯¦ الان ارسل القوانين  للمجموعه 🍃",
'reply_to_message_id'=>$message->message_id,
            'parse_mode'=>"MARKDOWN"
        ]);
    }
    if($text == "ضع قوانين" || $text == "وضع قوانين" and $JJ117 == "member" and $from_id != $sudo and !in_array($from_id,$dev)){
bot("sendmessage",['chat_id'=>$chat_id,
'text'=>"📭¦ ليس لديك صلاحيات وضع قوانين ،!",'reply_to_message_id'=>$message->message_id,]);}
 if($text && $get_human == "ch"){
    file_put_contents("human/$chat_id/ch.txt",$text);
    file_put_contents("human/$chat_id/set.txt","");
    bot('sendMessage',[ 
   'chat_id'=>$chat_id, 
 'text'=>"*⚜¦ مرحبآ عزيزي ،
📦¦ تم حفظ القوانين الخاصةه بك ؛🖤
🔖¦ ارسل القوانين لعرضها *",
            'parse_mode'=>"MARKDOWN",
            'disable_web_page_preview'=>true,
 'reply_to_message_id' =>$message->message_id, 
    ]);
}
if($text == "القوانين" || $text == "قوانين" and $JJ117 =="member" || $from_id == $sudo || $JJ117 == "creator" ||  $JJ117 == "administrator" and $human != NULL || $human != " "){
bot("sendmessage",['chat_id'=>$chat_id,
'text'=>$human,
'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id,]);}
if($text == "مسح قوانين" || $text == "حذف القوانين"  || $text == "حذف قوانين" || $text == "مسح القوانين" and $from_id == $sudo || $JJ117 == "creator" ||  $JJ117 == "administrator" ){
file_put_contents("human/$chat_id/ch.txt"," ");
bot("sendmessage",['chat_id'=>$chat_id,
'text'=>"*🌟¦ مرحبآ عزيزي ؛
📻¦ تم حذف القوانين بنجاح ، هسه صار كروبك اشرد 🤤😂*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id,]);}
if($text == "مسح قوانين" || $text == "حذف القوانين"  || $text == "حذف قوانين" || $text == "مسح القوانين" and $JJ117 == "member" and $from_id != $sudo and !in_array($from_id,$dev)){
bot("sendmessage",['chat_id'=>$chat_id,
'text'=>"📭¦ ليس لديك صلاحيات مسح قوانين ،!",'reply_to_message_id'=>$message->message_id,]);}

$reply = $update->message->reply_to_message;
$re_id      = $update->message->reply_to_message->from->id;
$API_KEY = API_KEY;
$get = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$re_id);
$info = json_decode($get, true);
$re_rou = $info['result']['status'];
$namesaeedh = $update->message->reply_to_message->from->first_name;
$usersaeedh = $update->message->reply_to_message->from->username;
$idsaeedh = $update->message->reply_to_message->from->id;

if($reply and $text == "كشف" || $text == "ايدي"){
if($re_id == $sudo)
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🤵🏼¦ الاسم » { $namesaeedh }
🎫¦ الايدي » { $idsaeedh  }
🎟¦ المعرف »{ @$usersaeedh }
📮¦ الرتبه » مطور اساسي 👨🏻‍⚕
🕵🏻️‍♀️¦ نوع الكشف » بالرد
➖",'reply_to_message_id'=>$message->message_id,]);}
if($reply and $text == "كشف" || $text == "ايدي"){
if(in_array($re_id,$dev))
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🤵🏼¦ الاسم » { $namesaeedh }
🎫¦ الايدي » { $idsaeedh  }
🎟¦ المعرف »{ @$usersaeedh }
📮¦ الرتبه » مطور البوت 👨🏻‍⚕
🕵🏻️‍♀️¦ نوع الكشف » بالرد
➖",'reply_to_message_id'=>$message->message_id,]);}
if($reply and $text == "كشف" || $text == "ايدي"){
if(in_array($re_id,$manger) and !in_array($re_id,$dev))
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🤵🏼¦ الاسم » { $namesaeedh }
🎫¦ الايدي » { $idsaeedh  }
🎟¦ المعرف »{ @$usersaeedh }
📮¦ الرتبه » مدير البوت 👨🏿‍✈️
🕵🏻️‍♀️¦ نوع الكشف » بالرد
➖",'reply_to_message_id'=>$message->message_id,]);}
if($reply and $text ==  "كشف" || $text == "ايدي"){
if($re_rou == "creator" and $re_id != $sudo and !in_array($re_id,$dev) and !in_array($re_id,$manger) and !in_array($re_id,$getCCmember))
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🤵🏼¦ الاسم » { $namesaeedh }
🎫¦ الايدي » { $idsaeedh } 
🎟¦ المعرف »{ @$usersaeedh }
📮¦ الرتبه » المنشىء 👷
🕵🏻️‍♀️¦ نوع الكشف » بالرد
➖",'reply_to_message_id'=>$message->message_id,]);}
if($reply and $text ==  "كشف" || $text == "ايدي"){
if($re_rou == "administrator" and $re_id != $sudo and !in_array($re_id,$dev) and !in_array($re_id,$manger))
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🤵🏼¦ الاسم » { $namesaeedh }
🎫¦ الايدي » { $idsaeedh } 
🎟¦ المعرف »{ @$usersaeedh }
📮¦ الرتبه » ادمن في البوت 👨🏼‍🎓
🕵🏻️‍♀️¦ نوع الكشف » بالرد
➖",'reply_to_message_id'=>$message->message_id,]);}
if($reply and $text ==  "كشف" || $text == "ايدي"){
if(in_array($re_id,$getCCmember) and !in_array($re_id,$manger) and !in_array($re_id,$dev) and $re_rou != "administrator")
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🤵🏼¦ الاسم » { $namesaeedh }
🎫¦ الايدي » { $idsaeedh  }
🎟¦ المعرف »{ @$usersaeedh }
📮¦ الرتبه » عضو مميز 🍨
🕵🏻️‍♀️¦ نوع الكشف » بالرد
➖",'reply_to_message_id'=>$message->message_id,]);}
if($reply and $text ==  "كشف" || $text == "ايدي"){
if($re_rou == "member" and $re_id != $sudo and !in_array($re_id,$dev) and !in_array($re_id,$manger) and !in_array($re_id,$getCCmember))
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🤵🏼¦ الاسم » { $namesaeedh }
🎫¦ الايدي » { $idsaeedh  }
🎟¦ المعرف »{ @$usersaeedh }
📮¦ الرتبه » فقط عضو 🙍🏼‍♂️
🕵🏻‍♂¦ نوع الكشف » بالرد
➖",'reply_to_message_id'=>$message->message_id,]);}
$from_id     = $message->from->id;
$from_user = $message->from->username;
$get             = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info            = json_decode($get, true);
$JJ117        = $info['result']['status'];
$mid             = $message->message_id;
mkdir("devil");
mkdir("devil/$chat_id");
mkdir("od_1J");
mkdir("od_1J/$chat_id");
$get_devil     = file_get_contents("devil/$chat_id/devil.txt");
$get_od_1J  = file_get_contents("od_1J/$chat_id/od_1J.txt");
$devil            = explode("\n",$get_devil);
$od_1J         = explode("\n",$get_od_1J);

if($from_id == $sudo || $JJ117 == "creator" || $JJ117 == "administrator" || in_array($from_id,$dev) || in_array($from_id,$manger)){
if($text == "فتح الدردشه" and in_array($chat_id,$devil) and $JJ117 == "administrator" || $JJ117 == "creator" || $from_id == $sudo || in_array($from_id,$dev)){
file_put_contents("devil/$chat_id/devil.txt"," ");
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"*📆¦ »  تم فتح الدردشةه بواسطةه ‹ $first_name * ›
*📎¦ معرفه » *[@$user]
*🕎¦ » سيتم الان السماح لـ الجميع ، بالتحدث !*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$mid,
]);
}
if($text == "فتح الدردشه" and !in_array($chat_id,$devil) and $JJ117 == "administrator" || $JJ117 == "creator" || $from_id == $sudo || in_array($from_id,$dev)){
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"*📆¦ » مالذي تحاول فعله ،  
🕎¦  » تم فتح الدردشه قبل قليل !*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$mid,
]);
}
if($text == "قفل الدردشه" and !in_array($chat_id,$devil) and  $JJ117 == "administrator" || $JJ117 == "creator" || $from_id == $sudo || in_array($from_id,$dev)){
file_put_contents("devil/$chat_id/devil.txt",$chat_id);
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"*📆¦ تم قفل الدردشةه بواسطةه »$first_name *
*📎¦ معرفه » *[@$user]
*🕎¦ » سيتم الان السماح لـ المطور  و لـلمنشئ و المشرفين ، بالتحدث فقط !*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$mid,
]);
}
if($text == "قفل الدردشه" and in_array($chat_id,$devil) and  $JJ117 == "administrator" || $JJ117 == "creator" || $from_id == $sudo || in_array($from_id,$dev)){
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"*📆¦ » مالذي تحاول فعله ،  
🕎¦  » تم قفل الدردشه قبل قليل !*",
'reply_to_message_id'=>$mid,
'parse_mode'=>"MARKDOWN",
]);
}
if($text == "فتح الكل" and in_array($chat_id,$od_1J) and  $JJ117 == "administrator" || $JJ117 == "creator" || $from_id == $sudo || in_array($from_id,$dev)){
file_put_contents("od_1J/$chat_id/od_1J.txt"," ");
file_put_contents("data/$chat_id.txt", "o\no\no\no\no\no\no\no\no\no\no\no\no");
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"*📆¦ تم فتح اوامر المجموعه بواسطةه »$first_name *
*📎¦ معرفه » *[@$user]
*🕎¦ » سيتم الان السماح بـجميع الميديا !*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$mid,
]);
}
if($text == "فتح الكل" and !in_array($chat_id,$od_1J) and  $JJ117 == "administrator" || $JJ117 == "creator" || $from_id == $sudo || in_array($from_id,$dev)){
file_put_contents("data/$chat_id.txt", "o\no\no\no\no\no\no\no\no\no\no\no\no");
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"*📆¦ » مالذي تحاول فعله ،  
🕎¦  » تم فتح الاوامر بالفعل !*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$mid,
]);
}
if($text == "قفل الكل" and !in_array($chat_id,$od_1J) and  $JJ117 == "administrator" || $JJ117 == "creator" || $from_id == $sudo || in_array($from_id,$dev)){
file_put_contents("od_1J/$chat_id/od_1J.txt",$chat_id);
file_put_contents("data/$chat_id.txt", "l\nl\nl\nl\nl\nl\nl\nl\nl\nl\nl\nl\nl");
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"*📆¦ تم قفل اوامر المجموعه بواسطةه »$first_name *
*📎¦ معرفه » *[@$user]
*🕎¦ » سيتم الان السماح بالمحادثه فقط !*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$mid,
]);
}
if($text == "قفل الكل" and in_array($chat_id,$od_1J) and  $JJ117 == "administrator" || $JJ117 == "creator" || $from_id == $sudo || in_array($from_id,$dev)){
file_put_contents("data/$chat_id.txt", "l\nl\nl\nl\nl\nl\nl\nl\nl\nl\nl\nl\nl");
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"*📆¦ » مالذي تحاول فعله ،  
🕎¦  » تم قفل الاوامر بالفعل !*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$mid,
]);
}
}

if($from_id != $sudo and $JJ117 != "creator" and $JJ117 != "administrator" and !in_array($from_id,$dev) and !in_array($from_id,$manger)){
if($text == "قفل الدردشه"){
bot("sendmessage",[
'chat_id'=>$chat_id,
'text' =>"*🇱🇦¦ انت ، ليس لديك صلاحيات قفل او فتح الدردشةه ،💗ء*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$mid,
]);
}
if($text == "فتح الدردشه"){
bot("sendmessage",[
'chat_id'=>$chat_id,
'text' =>"*🇱🇦¦ انت ، ليس لديك صلاحيات قفل او فتح الدردشةه ،💗ء*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$mid,
]);
}
if($text == "فتح الكل"){
bot("sendmessage",[
'chat_id'=>$chat_id,
'text' =>"*🇱🇦¦ انت ، ليس لديك صلاحيات قفل او فتح الاوامر ،💗ء*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$mid,
]);
}
if($text == "قفل الكل" ){
bot("sendmessage",[
'chat_id'=>$chat_id,
'text' =>"*🇱🇦¦ انت ، ليس لديك صلاحيات قفل او فتح الاوامر ،💗ء*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$mid,
]);
}
if($message->sticker || $message->video_note || $message->game || $message->location || $message->video || $message->photo || $message->voice || $message->document || $message->forward and in_array($chat_id,$od_1J)){
bot("deletemessage",[
'chat_id'=>$chat_id,
'message_id'=>$mid,
]);
}
if($text || $message->sticker || $message->video_note || $message->game || $message->location || $message->video || $message->photo || $message->voice || $message->document || $message->forward and in_array($chat_id,$devil)){
bot("deletemessage",[
'chat_id'=>$chat_id,
'message_id'=>$mid,
]);
}
}
$up = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result']; 
$admins = "";
  foreach($result as $key=>$value){
    $found = array_search("administrator",$result[$key]);
    $found2 = array_search("creator",$result[$key]);
    if($found !== false or $found2 !== false){
      $admins = $admins."*➺ ❲* @[".$result[$key]['user']['username']."] *❳* *»* *❲* `".$result[$key]['user']['id']."` *❳*\n";
    }
  }
  if($text == "الادمنيه" || $text == "/admins" || $text == "/الادمنيه"  and $from_id == $sudo || $JJ117 == "creator" || $JJ117 == "administrator" || in_array($from_id,$dev) || in_array($from_id,$manger)){
    bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📋¦ قائمه الادمنيه :*\n\n$admins",
   'parse_mode'=>'MARKDOWN',
   'reply_to_message_id'=>$message->message_id,
   'disable_web_page_preview'=>'true'
  ]);
}
if($text == "الادمنيه"  || $text == "/admins" || $text == "/الادمنيه" and $from_id != $sudo and $JJ117 == "member" and !in_array($from_id,$dev) and !in_array($from_id,$manger)){
    bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"*☪¦ انت ، لست من المشرفين ، المنشئين ، المطورين .🖤 *",
   'parse_mode'=>'MARKDOWN',
   'reply_to_message_id'=>$message->message_id,
  ]);
}
}
if($bot == "member" and $type == "supergroup"){
  bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"🖇┇البوت ليس ادمن في المجموعة ، 🖤🖤*",
      'reply_to_message_id'=>$message->message_id,
    ]);
}
if($text == "الالعاب" || $text == "قائمه الالعاب"){
	bot("SendMessage",[
	'chat_id'=>$chat_id,
	'text'=>"*👤¦ اهلا بك عزيزي 
🚸¦ اليك قائمه الالعاب
📬¦ سمايلات » لعبه تطابق السمايلات
📛¦ رياضيات » لعبه الضرب والجمع
🎭¦ ترتيب » لعبه ترتيب الكلمات*",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MARKDOWN",
	]);
	}

$GG_1_ZZ = $message->message_id;
$del = explode(" " ,$text);
if( $type == "supergroup" and $bot == "administrator"){
if($JJ117 == "creator" || $JJ117 == "administrator" || $from_id == $sudo || in_array($from_id,$dev) || in_array($from_id,$manger)) {
if($del[0] == "امسح" and isset($del[1]) and $del[1] < 101){
for($i = $GG_1_ZZ - $del[1] ; $i < $GG_1_ZZ ;$i++){
bot("deletemessage",[
'chat_id'=>$chat_id,
'message_id' =>$i,
]);
}
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"📬¦ تم حذف $del[1] رسالةه من المجموعه،🖤'",
'reply_to_message_id'=>$message->message_id,
]);
}
if($del[0] == "امسح" and isset($del[1]) and $del[1] > 101){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🔰¦ المعذرهہ ، لا استطيع حذف اكثر من 100 رسالةه !",
'reply_to_message_id'=>$message->message_id,
]);
}
}
}
if( $type == "supergroup" and $bot == "administrator"){
if($JJ117 != "creator" and $JJ117 != "administrator" and $from_id != $sudo and !in_array($from_id,$dev) and !in_array($from_id,$manger)) {
if($del[0] == "امسح" and isset($del[1])){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🌤¦ المعذرهہ ، انت لاتمتلك صلاحيات مسح الرسائل !",
'reply_to_message_id'=>$message->message_id,
]);
}
}
}
if($type == "supergroup" and $bot == "administrator"){
if($JJ117 == "creator" || $JJ117 == "administrator" || $from_id == $sudo || in_array($from_id,$dev) || in_array($from_id,$manger)) {
if($reply and $text=="/ban" or $text == "حظر" or $text == "/kick" or $text=="طرد"){
if($re_id == $sudo and !in_array($re_id,$dev) and !in_array($re_id,$manger)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🌤¦ انٱ لايمكنني حظر او الغاء حظر المطور الاساسي ،🖤.
➖",'reply_to_message_id'=>$message->message_id,]);}
if($re and in_array($re_id,$dev)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🌤¦ انٱ لايمكنني حظر او الغاء حظر المطورين ،🖤.
➖",'reply_to_message_id'=>$message->message_id,]);}
if(in_array($re_id,$manger) and !in_array($re_id,$dev)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🌤¦ انٱ لايمكنني حظر او الغاء حظر المدراء ،🖤.
➖",'reply_to_message_id'=>$message->message_id,]);}
if($re_rou == "creator" and $re_id != $sudo and !in_array($re_id,$dev) and !in_array($re_id,$manger) and !in_array($re_id,$getCCmember)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🌤¦ انٱ لايمكنني حظر او الغاء حظر المنشئ ،🖤.
➖",'reply_to_message_id'=>$message->message_id,]);}
if($re_rou == "administrator" and $re_id != $sudo and !in_array($re_id,$dev) and !in_array($re_id,$manger)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🌤¦ انٱ لايمكنني حظر او الغاء حظر الادمن ،🖤.
➖",'reply_to_message_id'=>$message->message_id,]);}
if(in_array($re_id,$getCCmember) and !in_array($re_id,$manger) and !in_array($re_id,$dev) and $JJ117 != "administrator"){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🌤¦ انٱ لايمكنني حظر او الغاء حظر المميزين ،🖤.
➖",'reply_to_message_id'=>$message->message_id,]);}
if($re_rou == "member" and $re_id != $sudo and !in_array($re_id,$dev) and !in_array($re_id,$manger) and !in_array($re_id,$getCCmember)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"👤¦ العضو » @$re_user
🎫¦ الايدي » ( $re_id )
🛠¦ تم حظره 
✓️",'reply_to_message_id'=>$message->message_id,]);
    bot('kickChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$re_id
      ]);
  }
  }
if($re and $text=="/unban" or $text == "الغاء الحظر" || $text == "الغاء حظر"){
if($re_id == $sudo and !in_array($re_id,$dev) and !in_array($re_id,$manger)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🌤¦ انٱ لايمكنني حظر او الغاء حظر المطور الاساسي ،🖤.
➖",'reply_to_message_id'=>$message->message_id,]);}
if($re and in_array($re_id,$dev)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🌤¦ انٱ لايمكنني حظر او الغاء حظر المطورين ،🖤.
➖",'reply_to_message_id'=>$message->message_id,]);}
if(in_array($re_id,$manger) and !in_array($re_id,$dev)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🌤¦ انٱ لايمكنني حظر او الغاء حظر المدراء ،🖤.
➖",'reply_to_message_id'=>$message->message_id,]);}
if($re_rou == "creator" and $re_id != $sudo and !in_array($re_id,$dev) and !in_array($re_id,$manger) and !in_array($re_id,$getCCmember)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🌤¦ انٱ لايمكنني حظر او الغاء حظر المنشئ ،🖤.
➖",'reply_to_message_id'=>$message->message_id,]);}
if($re_rou == "administrator" and $re_id != $sudo and !in_array($re_id,$dev) and !in_array($re_id,$manger)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🌤¦ انٱ لايمكنني حظر او الغاء حظر الادمن ،🖤.
➖",'reply_to_message_id'=>$message->message_id,]);}
if(in_array($re_id,$getCCmember) and !in_array($re_id,$manger) and !in_array($re_id,$dev) and $JJ117 != "administrator"){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🌤¦ انٱ لايمكنني حظر او الغاء حظر المميزين ،🖤.
➖",'reply_to_message_id'=>$message->message_id,]);}
if($re_rou != "administrator" and $re_rou != "creator" and $re_id != $sudo and !in_array($re_id,$dev) and !in_array($re_id,$manger) and !in_array($re_id,$getCCmember)){
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"👤¦ العضو » @$re_user 
🎫¦ الايدي » ( $re_id )
🛠¦ تم الغاء حظره 
✓️",
  'reply_to_message_id'=>$mid
      ]);
    bot('promoteChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$re_id,
        'can_send_messages'=>true,
      ]);
    }
    }
    }
    }
  $fwdbadlz = $message->forward_from->id;
$fwdibadlz = $message->forward_from->username;
mkdir("data");
mkdir("data/bans");

$getbansibadlz = file_get_contents("data/bans/bans.txt");
$getmohamed = file_get_contents("data/bans/ban.txt");
$bansZZ_BB = explode("\n",$getbansibadlz);
$MoHaMMedBaNd = file_get_contents("data/bans/band.txt");

if($bot == "administrator" || $bot == "member"){
if($from_id == $sudo || in_array($from_id,$dev)) {

if($re and $text == "حظر عام" and !in_array($re_id,$bansZZ_BB)){
	file_put_contents("data/bans/bans.txt","\n".$re_id , FILE_APPEND);
	file_put_contents("data/bans/band.txt" , " *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ". "\n" , FILE_APPEND);
	bot("SendMessage",[
	'chat_id'=>$chat_id,
    'text'=>"💘¦ العضو » [@$re_user]
📚¦ الايدي » { $re_id }
🔰¦ تمہ حظره عٱم'",
'reply_to_message_id'=>$message->message_id,
    ]);
    }
    if($re and $text == "حظر عام" and in_array($re_id,$bansZZ_BB)){
	bot("SendMessage",[
	'chat_id'=>$chat_id,
    'text'=>"💘¦ العضو » [@$re_user]
📚¦ الايدي » { $re_id }
🔰¦ تمہ حظره عٱم مسبقٱ'",
'reply_to_message_id'=>$message->message_id,
    ]);
    }
    
    if($re and $text == "الغاء العام"){
	$ZZ_BB = file_get_contents("data/bans/bans.txt");
	$iZZ_BB = file_get_contents("data/bans/band.txt");
	$strZZ_BB = str_replace($re_id,"",$ZZ_BB);
	$no = explode("             \n",$iZZ_BB);
	$striZZ_BB = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$no);
	file_put_contents("data/bans/bans.txt",$strZZ_BB);
	file_put_contents("data/bans/band.txt",$striZZ_BB);
	bot("SendMessage",[
	'chat_id'=>$chat_id,
    'text'=>"تم الغاء حظر العضو واخيرا صار مؤدب",
    'reply_to_message_id'=>$message->message_id,
    ]);
    }
    
if(!$re and $text == "الغاء العام"){
    file_put_contents("data/bans/ban.txt","MoHaMMedSAMI");	
	bot("SendMessage",[
	'chat_id'=>$chat_id,
    'text'=>"قم بعمل توجيه من رسٱئل العضو",
    'reply_to_message_id'=>$message->message_id,
    ]);
    }
    
if($text and $getmohamed == "MoHaMMedSAMI"){
    $ZZ_BBz = file_get_contents("data/bans/bans.txt");
    $iZZ_BB = file_get_contents("data/bans/band.txt");
    $no = explode("             \n",$iZZ_BB);
	$strZZ_BBz = str_replace($fwdbadlz,"",$ZZ_BBz);
	$striZZ_BB = str_replace(" *𓆩* [" . "@". $fwdibadlz ."] *𓆪* " . "»" . " *𓆩* `". $fwdbadlz ."` *𓆪* ","",$no);
	file_put_contents("data/bans/bans.txt",$strZZ_BBz);
	file_put_contents("data/bans/band.txt",$striZZ_BB);
	file_put_contents("data/bans/ban.txt","");
	bot("SendMessage",[
	'chat_id'=>$chat_id,
    'text'=>"تم الغاء حظر العضو واخيرا صار مؤدب",
    'reply_to_message_id'=>$message->message_id,
    ]);
    }
	
  if( !$re and $text == "حظر عام"){
	file_put_contents("data/bans/ban.txt","MoHaMMed");
	bot("SendMessage",[
	'chat_id'=>$chat_id,
    'text'=>"- فقط قم بٱرسال ايدي هذا الشخص ،💘'",
    'reply_to_message_id'=>$message->message_id,
    ]);
    }
    
if($text and $getmohamed == "MoHaMMed" and !in_array($text,$bansZZ_BB)){
	file_put_contents("data/bans/bans.txt" , "\n" . $text , FILE_APPEND);
	file_put_contents("data/bans/band.txt" , " *𓆩* [" . "@"." بدون معرف "."] *𓆪* " . "»" . " *𓆩* `". $text ."` *𓆪* ". "\n" , FILE_APPEND);
	file_put_contents("data/bans/ban.txt","");
	bot('sendmessage',['chat_id'=>$chat_id,'text'=>"📚¦ الايدي تم حظره عام من الكروبات ،🖤'",'reply_to_message_id'=>$message->message_id,]);
  }
  if($text and $getmohamed == "MoHaMMed" and in_array($text,$bansZZ_BB)){
	file_put_contents("data/bans/ban.txt","");
	bot('sendmessage',['chat_id'=>$chat_id,'text'=>"📚¦ الايدي تم حظره عام من الكروبات مسبقٱ،🖤'",'reply_to_message_id'=>$message->message_id,]);
  }
    
  if($text == "مسح العام" || $text == "مسح قائمه العام" || $text == "مسح المحظورين عام" || $text == "🚫¦ مسح قائمه العام •"){
  	file_put_contents("data/bans/bans.txt","");
  file_put_contents("data/bans/band.txt","");
  	bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🌈¦ تم مسح قٱئمةه المحظورين عام ،🌤'",'reply_to_message_id'=>$message->message_id,]);
  }
  
  if($text == "المحظورين عام" || $text == "قائمه العام" || $text == "📛¦ المحظورين عام •" and $getbansibadlz != null and $getbansibadlz != "" and $getbansibadlz != " "){
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📋¦ قائمه العام :*

$MoHaMMedBaNd\n",
    'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}
if($text == "المحظورين عام" || $text == "قائمه العام" || $text == "📛¦ المحظورين عام •" and $getbansibadlz == null || $getbansibadlz == "" || $getbansibadlz == " "){
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📋¦ قائمه العام :*

*📛| Not pands ~⪼ لا يوجد محظورين !*",
    'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}
}
}
if ($type == "supergroup" and $bot == "administrator"){
if($JJ117 != "creator" && $JJ117 != "administrator" && $from_id != $sudo && !in_array($from_id,$dev) and !in_array($from_id,$manger)){
if(in_array($from_id,$bansZZ_BB)){
    	bot('kickChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$from_id,
      ]);
      bot('sendmessage',['chat_id'=>$chat_id,'text'=>"💘¦ العضو » [@$user_ibadlz]
📚¦ الايدي » { $from_id }
🔰¦ متبند عٱم ، تمہ حظره ،📻'
",'reply_to_message_id'=>$message->message_id,]);
  }
  }
  }
  $i_Badlz = $update->message->reply_to_message->from->id;
$TlllllT = $update->message->reply_to_message->from->username;
mkdir("miss");
mkdir("miss/$chat_id");

$reply = $update->message->reply_to_message;
$get_miss = file_get_contents("miss/$chat_id/miss.txt");
$miss = explode("\n",$get_miss);

if($type == "supergroup" and $bot == "administrator"){
if($JJ117 == "creator" || $JJ117 == "administrator" || $from_id == $sudo || in_array($from_id,$dev) || in_array($from_id,$manger)) {
if($text == "مسح قائمه المكتومين" || $text == "مسح المكتومين"){
$str = str_replace(" ", $get_miss);
file_put_contents("miss/$chat_id/miss.txt",$str);
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"*📆¦ تم مسح المكتومين بواسطةه »$first_name *
*📎¦ معرفه » *[@$user] ",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$mid,
]);
}
if($reply and $text=="كتم"){
if($re_id == $sudo and !in_array($re_id,$dev) and !in_array($re_id,$manger)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🌤¦ انٱ لايمكنني كتم المطور الاساسي ،🖤.
➖",'reply_to_message_id'=>$message->message_id,]);}
if(in_array($re_id,$dev)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🌤¦ انٱ لايمكنني كتم المطورين ،🖤.
➖",'reply_to_message_id'=>$message->message_id,]);}
if(in_array($re_id,$manger) and !in_array($re_id,$dev)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🌤¦ انٱ لايمكنني كتم المدراء ،🖤.
➖",'reply_to_message_id'=>$message->message_id,]);}
if($re_rou == "creator" and $re_id != $sudo and !in_array($re_id,$dev) and !in_array($re_id,$manger) and !in_array($re_id,$getCCmember)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🌤¦ انٱ لايمكنني كتم المنشئ ،🖤.
➖",'reply_to_message_id'=>$message->message_id,]);}
if($re_rou == "administrator" and $re_id != $sudo and !in_array($re_id,$dev) and !in_array($re_id,$manger) and !in_array($re_id,$getCCmember)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🌤¦ انٱ لايمكنني كتم الادمن ،🖤.
➖",'reply_to_message_id'=>$message->message_id,]);}
if(in_array($from_id,$getCCmember) and !in_array($re_id,$manger) and !in_array($re_id,$dev)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🌤¦ انٱ لايمكنني كتم المميزين ،🖤.
➖",'reply_to_message_id'=>$message->message_id,]);}
if($re_rou == "member" and $re_id != $sudo and !in_array($re_id,$dev) and !in_array($re_id,$manger) and !in_array($i_Badlz,$miss) and !in_array($re_id,$getCCmember)){
file_put_contents("miss/$chat_id/miss.txt",$i_Badlz ."\n",FILE_APPEND);
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"⚜¦ العضو » @$TlllllT
▪️¦ الايدي » ( $i_Badlz )
🕎¦ تم كتمه من المجموعه ، مشاهدةهہ ممتعه٬
",'reply_to_message_id'=>$message->message_id,]);
 }
if($re_rou == "member" and $re_id != $sudo and !in_array($re_id,$dev) and !in_array($re_id,$manger) and in_array($i_Badlz,$miss) and !in_array($re_id,$getCCmember)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"*⚜¦ العضو الذي تحاول كتمه ،
❗️¦ تم كتمه بالفعل ،!*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,]);
}
}

if($reply and $text=="الغاء الكتم" || $text == "الغاء كتم"){
if($re_id == $sudo and !in_array($re_id,$dev) and !in_array($re_id,$manger)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🌤¦ انٱ لايمكنني الغاء كتم المطور الاساسي ،🖤.
➖",'reply_to_message_id'=>$message->message_id,]);}
if(in_array($re_id,$dev)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🌤¦ انٱ لايمكنني الغاء كتم المطورين ،🖤.
➖",'reply_to_message_id'=>$message->message_id,]);}
if(in_array($re_id,$manger) and !in_array($re_id,$dev)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🌤¦ انٱ لايمكنني الغاء كتم المدراء ،🖤.
➖",'reply_to_message_id'=>$message->message_id,]);}
if($re_rou == "creator" and $re_id != $sudo and !in_array($re_id,$dev) and !in_array($re_id,$manger) and !in_array($re_id,$getCCmember)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🌤¦ انٱ لايمكنني الغاء كتم المنشئ ،🖤.
➖",'reply_to_message_id'=>$message->message_id,]);}
if($re_rou == "administrator" and $re_id != $sudo and !in_array($re_id,$dev) and !in_array($re_id,$manger) and !in_array($re_id,$getCCmember)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🌤¦ انٱ لايمكنني الغاء كتم الادمنيه ،🖤.
➖",'reply_to_message_id'=>$message->message_id,]);}
if(in_array($from_id,$getCCmember) and !in_array($re_id,$manger) and !in_array($re_id,$dev)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🌤¦ انٱ لايمكنني الغاء كتم المميزين ،🖤.
➖",'reply_to_message_id'=>$message->message_id,]);}
if($re_rou == "member" and $re_id != $sudo and !in_array($re_id,$dev) and !in_array($re_id,$manger) and in_array($i_Badlz,$miss) and !in_array($re_id,$getCCmember)){
$str = str_replace($i_Badlz,"",$get_miss);
file_put_contents("miss/$chat_id/miss.txt",$str);
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"⚜¦ العضو » @$TlllllT
▪️¦ الايدي » ( $i_Badlz )
🕎¦ تم الغاء كتمه من المجموعه ،!",'reply_to_message_id'=>$message->message_id,]);
}
if($re_rou == "member" and $re_id != $sudo and !in_array($re_id,$dev) and !in_array($re_id,$manger) and !in_array($i_Badlz,$miss) and !in_array($re_id,$getCCmember)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"*⚜¦ العضو الذي تحاول الغاء كتمه ،
❗️¦ تم الغاء كتمه بالفعل ،!*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,]);
}
}
}
} 
  
  
if ($type == "supergroup" and $bot == "administrator"){ 
if($JJ117 != "creator" && $JJ117 != "administrator" && $from_id != $sudo && !in_array($from_id,$dev) and !in_array($from_id,$manger)){
if($reply and $text == "الغاء كتم" || $text == "الغاء االكتم"){
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"*⚜¦ المعذرهہ ، ليس لديك صلاحيات الغاء الكتم ،!*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$mid,
]);
}
if($reply and $text == "كتم"){
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"*⚜¦ المعذرهہ ، ليس لديك صلاحيات الكتم ،!*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$mid,
]);
}
if($text and in_array($from_id, $miss)){
bot("deletemessage",[
'chat_id'=>$chat_id,
'message_id'=>$mid,
]);
}
if($text == "مسح قائمه المكتومين" || $text == "مسح المكتومين"){
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"*⚜¦ المعذرهہ ، ليس لديك صلاحيات مسح المكتومين ∅*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$mid,
]);
}
}
}

mkdir("data");
mkdir("data/addrd");

$opption = file_get_contents("data/addrd/$chat_id/opption.txt");
$get_from_id = file_get_contents("data/addrd/$chat_id/from_id.txt");
$get_rd = file_get_contents("data/addrd/$chat_id/getrd.txt");
$opption_ = file_get_contents("data/addrd/opption.txt");
$get_from_id1_ = file_get_contents("data/addrd/from_id.txt");
$I_get_rd = file_get_contents("data/addrd/getrd.txt");
$get_from_id_1 = explode("\n",$get_from_id1_);
$get_from_id_ = explode("\n",$get_from_id);


if ($type == "supergroup" and $bot == "administrator"){
if($JJ117 == "creator" || $JJ117 == "administrator" || $from_id == $sudo || in_array($from_id,$dev) || in_array($from_id,$manger)) {
if($text == "اضف رد"){
	
mkdir("data/addrd/$chat_id");
mkdir("data/addrd/$chat_id/media");
mkdir("data/addrd/$chat_id/media/sticker");
mkdir("data/addrd/$chat_id/media/video");
mkdir("data/addrd/$chat_id/media/videonote");
mkdir("data/addrd/$chat_id/media/document");
mkdir("data/addrd/$chat_id/media/photo");
mkdir("data/addrd/$chat_id/media/audio");
mkdir("data/addrd/$chat_id/media/contact");

 file_put_contents("data/addrd/$chat_id/from_id.txt",$from_id);
 file_put_contents("data/addrd/$chat_id/opption.txt","GG1ZZ");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"📭¦ حسننا , الان ارسل كلمه الرد 
-",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 if($text and in_array($from_id,$get_from_id_) and $opption == "GG1ZZ"){
 	file_put_contents("data/addrd/$chat_id/opption.txt","IBADLZ");
     file_put_contents("data/addrd/$chat_id/mod.txt",$text);
     file_put_contents("data/addrd/$chat_id/media/media.txt",$text);
     file_put_contents("data/addrd/$chat_id/getrd.txt", "- ". $text . "\n" , FILE_APPEND);
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"📭¦ حسننا , الان ارسل جواب الرد ، يمكنك ارسال التٱلي : 
- متحركةه ، ملف ، صوره ، ملصق ، فيديو ، فيديو نوت ، صوتيات ، اغاني ،🔰' ",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 if($message and in_array($from_id,$get_from_id_) and $opption == "IBADLZ"){
  file_put_contents("data/addrd/$chat_id/opption.txt","");
  $IB_3ADLZ = file_get_contents("data/addrd/$chat_id/mod.txt");
  $IB_4ADLZ = file_get_contents("data/addrd/$chat_id/media/media.txt");

  $IB_2ADLZ = fopen("data/addrd/$chat_id/mod.txt", "a") or die("Unable to open file!"); 
   fwrite($IB_2ADLZ, "$IB_3ADLZ\n");
   fclose($IB_2ADLZ);
   
   $IB_5ADLZ = fopen("data/addrd/$chat_id/media/media.txt", "a") or die("Unable to open file!"); 
   fwrite($IB_5ADLZ, "$IB_4ADLZ\n");
   fclose($IB_5ADLZ);
   
   file_put_contents("data/addrd/$chat_id/$IB_3ADLZ.txt",$text);
   file_put_contents("data/addrd/$chat_id/mod.txt","");
   file_put_contents("data/addrd/$chat_id/media/media.txt","");
   file_put_contents("data/addrd/$chat_id/media/$IB_4ADLZ.txt",$message->voice->file_id);
   file_put_contents("data/addrd/$chat_id/media/sticker/$IB_4ADLZ.txt",$message->sticker->file_id );
   file_put_contents("data/addrd/$chat_id/media/document/$IB_4ADLZ.txt",$message->document->file_id);
   file_put_contents("data/addrd/$chat_id/media/videonote/$IB_4ADLZ.txt",$message->video_note->file_id);
   file_put_contents("data/addrd/$chat_id/media/contact/$IB_4ADLZ.txt",$message->contact->phone_number);
   file_put_contents("data/addrd/$chat_id/media/video/$IB_4ADLZ.txt",$message->video->file_id);
   file_put_contents("data/addrd/$chat_id/media/photo/$IB_4ADLZ.txt",$message->photo[0]->file_id);
   file_put_contents("data/addrd/$chat_id/media/audio/$IB_4ADLZ.txt",$message->audio->file_id );
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"*- تم ٱضافةهہ الرد بنجٱح ،💘'*",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
 if($text == "مسح رد"){
 file_put_contents("data/addrd/$chat_id/from_id.txt",$from_id);
 file_put_contents("data/addrd/$chat_id/opption.txt","delete");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"*💘¦ حسننا عزيزي ، الان ارسل كلمه الرد لمسحهٱ من  المجموعه ،🔰'*",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
 if(file_exists("data/addrd/$chat_id/$text.txt") and in_array($from_id,$get_from_id_) and $opption == "delete"){
 	$str = str_replace("- $text","",$get_rd);
     file_put_contents("data/addrd/$chat_id/getrd.txt",$str);
      file_put_contents("data/addrd/$chat_id/from_id.txt","");
      file_put_contents("data/addrd/$chat_id/opption.txt","");
 	unlink("data/addrd/$chat_id/$text.txt");
     unlink("data/addrd/$chat_id/media/$text.txt");
     unlink("data/addrd/$chat_id/media/sticker/$text.txt");
     unlink("data/addrd/$chat_id/media/video/$text.txt");
     unlink("data/addrd/$chat_id/media/videonote/$text.txt");
     unlink("data/addrd/$chat_id/media/document/$text.txt");
     unlink("data/addrd/$chat_id/media/photo/$text.txt");
     unlink("data/addrd/$chat_id/media/audio/$text.txt");
     unlink("data/addrd/$chat_id/media/contact/$text.txt");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"*الكلمةه ، $text ، تم حذفهٱ من الردود ،💘'* ",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
elseif(!file_exists("data/addrd/$chat_id/$text.txt") and in_array($from_id,$get_from_id_) and $opption == "delete"){
	file_put_contents("data/addrd/$chat_id/from_id.txt","");
    file_put_contents("data/addrd/$chat_id/opption.txt","");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"*🌤¦ المعذره ، ولكن هذه الكلمه غير مضافه ، في قٱئمه الردود ،🌻' *",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }

if($text == "مسح الردود"){
$links = __DIR__ . "/data/addrd/$chat_id";
$media = __DIR__ . "/data/addrd/$chat_id/media";
$media_contact = __DIR__ . "/data/addrd/$chat_id/media/contact";
$media_document = __DIR__ . "/data/addrd/$chat_id/media/document";
$media_video = __DIR__ . "/data/addrd/$chat_id/media/video";
$media_videonote = __DIR__ . "/data/addrd/$chat_id/media/videonote";
$media_photo = __DIR__ . "/data/addrd/$chat_id/media/photo";
$media_sticker = __DIR__ . "/data/addrd/$chat_id/media/sticker";
$media_audio = __DIR__ . "/data/addrd/$chat_id/media/audio";


$files = scandir($links);
$files_media = scandir($media);
$files_media_contact = scandir($media_contact);
$files_media_document = scandir($media_document);
$files_media_video = scandir($media_video);
$files_media_videonote = scandir($media_videonote);
$files_media_photo = scandir($media_photo);
$files_media_sticker = scandir($media_sticker);
$files_media_audio = scandir($media_audio);

foreach ($files as $file) {
if(is_file($links . "/" . $file)){
	unlink ($links . "/" .$file);
}
}
foreach ($files_media as $filemedia) {
if(is_file($media . "/" . $filemedia)){
	unlink ($media . "/" .$filemedia);
}
}
foreach ($files_media_contact as $file_media_contact) {
if(is_file($media_contact . "/" . $file_media_contact)){
	unlink ($media_contact . "/" .$file_media_contact);
}
}
foreach ($files_media_document as $file_media_document) {
if(is_file($media_document . "/" . $file_media_document)){
	unlink ($media_document . "/" .$file_media_document);
}
}
foreach ($files_media_video as $file_media_video) {
if(is_file($media_video . "/" . $file_media_video)){
	unlink ($media_video . "/" .$file_media_video);
}
}
foreach ($files_media_videonote as $file_media_videonote) {
if(is_file($media_videonote . "/" . $file_media_videonote)){
	unlink ($media_videonote . "/" .$file_media_videonote);
}
}
foreach ($files_media_photo as $file_media_photo) {
if(is_file($media_photo . "/" . $file_media_photo)){
	unlink ($media_photo . "/" .$file_media_photo);
}
}
foreach ($files_media_sticker as $file_media_sticker) {
if(is_file($media_sticker . "/" . $file_media_sticker)){
	unlink ($media_sticker . "/" . $file_media_sticker);
}
}
foreach ($files_media_audio as $file_media_audio) {
if(is_file($media_audio . "/" . $file_media_audio)){
	unlink ($media_audio . "/" . $file_media_audio);
}
}
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"*🌻¦ تم مسح قائمةه ٱلردود المضافةه ،🔰'*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
file_put_contents("data/addrd/$chat_id/getrd.txt", "");
}


if($text == "الردود" and $get_rd != NULL and $get_rd != "" and $get_rd != " " and $get_rd != "\n\n" and $get_rd != "\n" and $get_rd != "\n\n\n" and $get_rd != "\n\n\n\n" and $get_rd != "\n\n\n\n\n" and $get_rd != "\n\n\n\n\n\n"){
	bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"*💬¦ ردود البوت في المجموعه  :

$get_rd

➖➖➖*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
if($text == "الردود" and $get_rd == NULL || $get_rd == "" || $get_rd == " " || $get_rd == "\n\n" || $get_rd == "\n" || $get_rd == "\n\n\n" || $get_rd == "\n\n\n\n" || $get_rd == "\n\n\n\n\n" || $get_rd == "\n\n\n\n\n\n"){
	bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🌟¦ *لا يوجد ردود مضافه حاليا ،🌈'*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
}
}
if($from_id == $sudo){
if($text == "اضف رد عام"){
mkdir("data/addrd/media");
mkdir("data/addrd/$chat_id/media");
mkdir("data/addrd/media/sticker");
mkdir("data/addrd/media/video");
mkdir("data/addrd/media/videonote");
mkdir("data/addrd/media/document");
mkdir("data/addrd/media/photo");
mkdir("data/addrd/media/audio");
mkdir("data/addrd/media/contact");

 file_put_contents("data/addrd/from_id.txt",$from_id);
 file_put_contents("data/addrd/opption.txt","I_GG1ZZ");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"📭¦ حسننا , الان ارسل كلمه الرد 
-",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 if($text and in_array($from_id,$get_from_id_1) and $opption_ == "I_GG1ZZ"){
 	file_put_contents("data/addrd/opption.txt","I_BADLZ");
     file_put_contents("data/addrd/mod.txt",$text);
     file_put_contents("data/addrd/media/media.txt",$text);
     file_put_contents("data/addrd/getrd.txt", "- ". $text . "\n" , FILE_APPEND);
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"📭¦ حسننا , الان ارسل جواب الرد ، يمكنك ارسال التٱلي : 
- متحركةه ، ملف ، صوره ، ملصق ، فيديو ، فيديو نوت ، صوتيات ، اغاني ،🔰' ",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
 
 if($message and in_array($from_id,$get_from_id_1) and $opption_ == "I_BADLZ"){
  file_put_contents("data/addrd/opption.txt","");
  $IB_3ADLZ = file_get_contents("data/addrd/mod.txt");
  $IB_4ADLZ = file_get_contents("data/addrd/media/media.txt");

  $IB_2ADLZ = fopen("data/addrd/mod.txt", "a") or die("Unable to open file!"); 
   fwrite($IB_2ADLZ, "$IB_3ADLZ\n");
   fclose($IB_2ADLZ);
   
   $IB_5ADLZ = fopen("data/addrd/media/media.txt", "a") or die("Unable to open file!"); 
   fwrite($IB_5ADLZ, "$IB_4ADLZ\n");
   fclose($IB_5ADLZ);
   
   file_put_contents("data/addrd/$IB_3ADLZ.txt",$text);
   file_put_contents("data/addrd/mod.txt","");
   file_put_contents("data/addrd/media/media.txt","");
   file_put_contents("data/addrd/media/$IB_4ADLZ.txt",$message->voice->file_id);
   file_put_contents("data/addrd/media/sticker/$IB_4ADLZ.txt",$message->sticker->file_id );
   file_put_contents("data/addrd/media/document/$IB_4ADLZ.txt",$message->document->file_id);
   file_put_contents("data/addrd/media/videonote/$IB_4ADLZ.txt",$message->video_note->file_id);
   file_put_contents("data/addrd/media/contact/$IB_4ADLZ.txt",$message->contact->phone_number);
   file_put_contents("data/addrd/media/video/$IB_4ADLZ.txt",$message->video->file_id);
   file_put_contents("data/addrd/media/photo/$IB_4ADLZ.txt",$message->photo[0]->file_id);
   file_put_contents("data/addrd/media/audio/$IB_4ADLZ.txt",$message->audio->file_id );
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"*- تم ٱضافةهہ الرد بنجٱح ،💘'*",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
 if($text == "مسح رد عام"){
 file_put_contents("data/addrd/from_id.txt",$from_id);
 file_put_contents("data/addrd/opption.txt","I_delete");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"*💘¦ حسننا عزيزي ، الان ارسل كلمه الرد لمسحهٱ من  البوت ،🔰'*",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
 if(file_exists("data/addrd/$text.txt") and in_array($from_id,$get_from_id_1) and $opption_ == "I_delete"){
 	$str = str_replace("- $text","",$I_get_rd);
     file_put_contents("data/addrd/getrd.txt",$str);
      file_put_contents("data/addrd/from_id.txt","");
      file_put_contents("data/addrd/opption.txt","");
 	unlink("data/addrd/$text.txt");
     unlink("data/addrd/media/$text.txt");
     unlink("data/addrd/media/sticker/$text.txt");
     unlink("data/addrd/media/video/$text.txt");
     unlink("data/addrd/media/videonote/$text.txt");
     unlink("data/addrd/media/document/$text.txt");
     unlink("data/addrd/media/photo/$text.txt");
     unlink("data/addrd/media/audio/$text.txt");
     unlink("data/addrd/media/contact/$text.txt");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"*الكلمةه ، $text ، تم حذفهٱ من الردود ،💘'* ",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
 elseif(!file_exists("data/addrd/$text.txt") and in_array($from_id,$get_from_id_1) and $opption_ == "I_delete"){
	file_put_contents("data/addrd/from_id.txt","");
    file_put_contents("data/addrd/opption.txt","");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"*🌤¦ المعذره ، ولكن هذه الكلمه غير مضافه ، في قٱئمه الردود ،🌻' *",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
 
 if($text == "مسح الردود العامه"){
$links = __DIR__ . "/data/addrd";
$media = __DIR__ . "/data/addrd/media";
$media_contact = __DIR__ . "/data/addrd/media/contact";
$media_document = __DIR__ . "/data/addrd/media/document";
$media_video = __DIR__ . "/data/addrd/media/video";
$media_videonote = __DIR__ . "/data/addrd/media/videonote";
$media_photo = __DIR__ . "/data/addrd/media/photo";
$media_sticker = __DIR__ . "/data/addrd/media/sticker";
$media_audio = __DIR__ . "/data/addrd/media/audio";


$files = scandir($links);
$files_media = scandir($media);
$files_media_contact = scandir($media_contact);
$files_media_document = scandir($media_document);
$files_media_video = scandir($media_video);
$files_media_videonote = scandir($media_videonote);
$files_media_photo = scandir($media_photo);
$files_media_sticker = scandir($media_sticker);
$files_media_audio = scandir($media_audio);

foreach ($files as $file) {
if(is_file($links . "/" . $file)){
	unlink ($links . "/" .$file);
}
}
foreach ($files_media as $filemedia) {
if(is_file($media . "/" . $filemedia)){
	unlink ($media . "/" .$filemedia);
}
}
foreach ($files_media_contact as $file_media_contact) {
if(is_file($media_contact . "/" . $file_media_contact)){
	unlink ($media_contact . "/" .$file_media_contact);
}
}
foreach ($files_media_document as $file_media_document) {
if(is_file($media_document . "/" . $file_media_document)){
	unlink ($media_document . "/" .$file_media_document);
}
}
foreach ($files_media_video as $file_media_video) {
if(is_file($media_video . "/" . $file_media_video)){
	unlink ($media_video . "/" .$file_media_video);
}
}
foreach ($files_media_videonote as $file_media_videonote) {
if(is_file($media_videonote . "/" . $file_media_videonote)){
	unlink ($media_videonote . "/" .$file_media_videonote);
}
}
foreach ($files_media_photo as $file_media_photo) {
if(is_file($media_photo . "/" . $file_media_photo)){
	unlink ($media_photo . "/" .$file_media_photo);
}
}
foreach ($files_media_sticker as $file_media_sticker) {
if(is_file($media_sticker . "/" . $file_media_sticker)){
	unlink ($media_sticker . "/" . $file_media_sticker);
}
}
foreach ($files_media_audio as $file_media_audio) {
if(is_file($media_audio . "/" . $file_media_audio)){
	unlink ($media_audio . "/" . $file_media_audio);
}
}
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"*🌻¦ تم مسح قائمةه ٱلردود المضافةه ،🔰'*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
file_put_contents("data/addrd/getrd.txt", "");
}


if($text == "الردود العامه" and $I_get_rd != NULL and $I_get_rd != "" and $I_get_rd != " " and $I_get_rd != "\n\n" and $I_get_rd != "\n" and $I_get_rd != "\n\n\n" and $I_get_rd != "\n\n\n\n" and $I_get_rd != "\n\n\n\n\n" and $I_get_rd != "\n\n\n\n\n\n"){
	bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"*💬¦ الردود العامه في البوت :

$I_get_rd

➖➖➖*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
if($text == "الردود العامه" and $I_get_rd == NULL || $I_get_rd == "" || $I_get_rd == " " || $I_get_rd == "\n\n" || $I_get_rd == "\n" || $I_get_rd == "\n\n\n" || $I_get_rd == "\n\n\n\n" || $I_get_rd == "\n\n\n\n\n" || $I_get_rd == "\n\n\n\n\n\n"){
	bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🌟¦ *لا يوجد ردود مضافه حاليا ،🌈'*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
}

if ($type == "supergroup" and $bot == "administrator"){ 
if($JJ117 != "creator" && $JJ117 != "administrator" && $from_id != $sudo && !in_array($from_id,$dev) and !in_array($from_id,$manger)){
if($text == "اضف رد" || $text == "مسح رد" || $text == "مسح الردود"){
	bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🌤¦ *لاتمتلّك صلٱحيات ، اضافةه ٱو مسح رد ،🌈'*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
}
}
if($from_id != $sudo){
if($text == "اضف رد عام" || $text == "مسح رد عام" || $text == "مسح الردود العامه"){
	bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"📻¦ *للمطور الاسٱسي فقط ،🚸'*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
}

if($message->text and file_exists("data/addrd/$text.txt")) {
    $MoHaMMed = file_get_contents("data/addrd/$text.txt");
   bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>$MoHaMMed,
    'parse_mode'=>"MARKDOWN",
    'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/media/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/$text.txt");
   bot('Sendvoice',[
    'chat_id'=>$chat_id,
    'voice'=>$MoHaMMed,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/media/audio/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/audio/$text.txt");
 bot('SendAudio',[
    'chat_id'=>$chat_id,
    'audio'=>$MoHaMMed,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/media/sticker/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/sticker/$text.txt");
 bot('sendsticker',[
'chat_id'=>$chat_id,
'sticker'=>$MoHaMMed,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/media/video/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/video/$text.txt");
bot('Sendvideo',[
'chat_id'=>$chat_id,
'video'=>$MoHaMMed,
'caption'=>$message->caption,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/media/photo/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/photo/$text.txt");
bot('Sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$MoHaMMed,
'caption'=>$message->caption,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/media/videonote/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/videonote/$text.txt");
 bot('Sendvideonote',[
'chat_id'=>$chat_id,
'video_note'=>$MoHaMMed,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/media/document/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/document/$text.txt");
 bot('SendDocument',[
'chat_id'=>$chat_id,
'document'=>$MoHaMMed,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/media/contact/$text.txt")) {
 $MoHaMMed = file_get_contents("data/addrd/media/contact/$text.txt");
bot('SendContact',[
'chat_id'=>$chat_id,
'phone_number'=>$MoHaMMed,
'first_name'=>$message->from->first_name,
'last_name'=>$message->from->last_name,
'reply_to_message_id'=>$message->message_id,
]);
 }
 if($message->text and file_exists("data/addrd/$chat_id/$text.txt")) {
    $MoHaMMed = file_get_contents("data/addrd/$chat_id/$text.txt");
   bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>$MoHaMMed,
    'parse_mode'=>"MARKDOWN",
    'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/$chat_id/media/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/$text.txt");
   bot('Sendvoice',[
    'chat_id'=>$chat_id,
    'voice'=>$MoHaMMed,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/$chat_id/media/audio/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/audio/$text.txt");
 bot('SendAudio',[
    'chat_id'=>$chat_id,
    'audio'=>$MoHaMMed,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/$chat_id/media/sticker/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/sticker/$text.txt");
 bot('sendsticker',[
'chat_id'=>$chat_id,
'sticker'=>$MoHaMMed,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/$chat_id/media/video/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/video/$text.txt");
bot('Sendvideo',[
'chat_id'=>$chat_id,
'video'=>$MoHaMMed,
'caption'=>$message->caption,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/$chat_id/media/photo/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/photo/$text.txt");
bot('Sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$MoHaMMed,
'caption'=>$message->caption,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/$chat_id/media/videonote/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/videonote/$text.txt");
 bot('Sendvideonote',[
'chat_id'=>$chat_id,
'video_note'=>$MoHaMMed,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/$chat_id/media/document/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/document/$text.txt");
 bot('SendDocument',[
'chat_id'=>$chat_id,
'document'=>$MoHaMMed,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/$chat_id/media/contact/$text.txt")) {
 $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/contact/$text.txt");
bot('SendContact',[
'chat_id'=>$chat_id,
'phone_number'=>$MoHaMMed,
'first_name'=>$message->from->first_name,
'last_name'=>$message->from->last_name,
'reply_to_message_id'=>$message->message_id,
]);
 }
 mkdir("banduser");
$get_Busers = file_get_contents("banduser/$chat_id.txt");
$get_Buser = explode("\n",$get_Busers);

$kick = explode(" " ,$text);
if( $type == "supergroup" and $bot == "administrator"){
if($JJ117 == "creator" || $JJ117 == "administrator" || $from_id == $sudo || in_array($from_id,$dev) || in_array($from_id,$manger)) {
if($kick[0] == "طرد" || $kick[0] == "حظر" and isset($kick[1])){
$text = str_replace(['حظر ','طرد '],'',$text);
$stat = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$text&user_id=".$text);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];

if($text != $sudo && $text != $buyy && !in_array($text,$dev) and !in_array($text,$manger) and !in_array($text,$getCCmember) and !in_array($text,$dev_) and !in_array($text,$manges) and !in_array($text,$getCmember)){
if(strpos($text ,"@") !== false and !in_array($text,$get_Buser)){
file_put_contents("banduser/$chat_id.txt","\n" . $text ."\n" , FILE_APPEND);}
if($stat !== false and !in_array("@$username",$get_Buser)){
file_put_contents("banduser/$chat_id.txt","\n" . "@$username" ."\n" , FILE_APPEND);}

bot('KickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$id
  ]);
bot('sendmessage', [
 'chat_id' => $chat_id,
 'text'=>"
💬┇العضو ~⪼ *$text*
☑┇تم حظره بنجاح
",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>true,
   ]);
}
}
}
}

if(in_array("@$user",$get_Buser)){
bot('KickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$from_id,
]);
}

if( $type == "supergroup" and $bot == "administrator"){
if($JJ117 == "creator" || $JJ117 == "administrator" || $from_id == $sudo || in_array($from_id,$dev) || in_array($from_id,$manger)) {
if($kick[0] == "الغاء" and $kick[1] == "حظر" and isset($kick[2])){
$text = str_replace('الغاء حظر ','',$text);

$stat = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$text&user_id=".$text);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];

if($stat != false and in_array("@$username",$get_Buser)){
$str2 = str_replace("@$username",'',$get_Busers);
$ex2 = explode("\n",$str2);
file_put_contents("banduser/$chat_id.txt",$ex2);}

if(strpos($text ,"@") !== false and in_array($text,$get_Buser)){
$str = str_replace("$text",'',$get_Busers);
$ex = explode("\n",$str);
file_put_contents("banduser/$chat_id.txt",$ex);}

bot('promoteChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$id,
        'can_send_messages'=>true,
  ]);
bot('sendmessage', [
 'chat_id' => $chat_id,
 'text'=>"
💬┇العضو ~⪼ *$text*
☑┇تم الغاء حظره بنجاح
",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>true,
   ]);
}
if($text == "مسح المحظورين"){
file_put_contents("banduser/$chat_id.txt","");
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🌤¦ تم مسحّ قائمه المحظورين ،🦄'",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>true,
]);
}
}
}

if($text == "المحظورين" and $get_Busers != NULL || $get_Busers != ""){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"☑️¦ قائمه الاعضاء المحظورين :
[$get_Busers]",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>true,
]);
}
if($text == "المحظورين" and $get_Busers == NULL || $get_Busers == ""){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🔰¦ لٱيوجد محظورين ،💘💘''",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>true,
]);
}


if($type == "supergroup" and $bot == "administrator"){
if($JJ117 != "creator" && $JJ117 != "administrator" && $from_id != $sudo && !in_array($from_id,$dev) and !in_array($from_id,$manger)){
if($kick[0] == "طرد" || $kick[0] == "حظر" and isset($kick[1])){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🍟¦ ليس لديك صلاحيٱت ، حظر او الغاء حظر .",
'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}
if($kick[0] == "الغاء" and $kick[1] == "حظر" and isset($kick[2])){
	bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🍟¦ ليس لديك صلاحيٱت ، حظر او الغاء حظر .",
'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}
}
}
