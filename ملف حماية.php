<?php
ob_start();
$API_KEY='TOKEN';
echo "api.telegram.org/bot$API_KEY/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME'];
define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
$url = 'https://api.telegram.org/bot'.API_KEY.'/'.$method;
$ch = curl_init();curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);if(curl_error($ch)){var_dump(curl_error($ch));}else{return json_decode($res);}
/* </>=============== ɱคṡ੮คԲค ძ૯ṽ ===============</> */
$update = json_decode(file_get_contents('php://input'));
$message = $update->message; $text = $update->message->text;
$inline= $update->inline_query; $voice = $update->message->voice;
$video = $update->message->video; $audio = $update->message->audio;
$photo = $update->message->photo; $game = $update->message->game;
$sticker = $update->message->sticker; $contact = $update->message->contact;
$chat_id = $update->message->chat->id; $replay = $message->reply_to_message; 
$from_id = $update->message->from->id; $fwd = $update->message->forward_from;
$edited = $update->edited_message->text; $document = $update->message->document;
$title_name = $update->message->chat->title; $user = $update->message->from->username;
$name = $update->message->from->first_name; $message_id = $update->message->message_id;
$edit_id = $update->edited_message->message_id; $edit_chat_id = $update->edited_message->chat->id;
$fwd0 = $update->message->forward_from_chat->id; $newid = $update->message->new_chat_member->id;
$edit_from_id = $update->edited_message->message->from->id; $newbots = $update->message->new_chat_member->username;
$newname = $update->message->new_chat_member->first_name; $reply_name = $update->message->reply_to_message->from->first_name;
$reply_user = $update->message->reply_to_message->from->username; $reply_id = $update->message->reply_to_message->from->id;
$id = $message->from->id; $MOSYRIA = $update->message->reply_to_message->from->id;
$MOSSYRIA = $update->message->reply_to_message->from->username;
$from_user = $message->from->username;
$get             = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info            = json_decode($get, true);
$MOSTYRIA        = $info['result']['status'];
if($message){$msgs = json_decode(file_get_contents('msgs.json'),true); $msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+1); file_put_contents('msgs.json', json_encode($msgs));}
$MOSYRIA = array("ملك متفاعل ✔️","متفاعل ✨"," متفاعل ✔️"," غير متفاعل ✘","ضعيف 🥀");
$MOSY = array_rand($MOSYRIA,1); $photo = "https://t.me/$user";
$setnamebot = file_get_contents("setname.txt");
$namebot = file_get_contents("namebot.txt");
$MOSTYRIA1 = $message->message_id;
$devhelp = file_get_contents("set1name.txt");
$devhelpp = file_get_contents("devhelpp.txt");
$devhelp1 = file_get_contents("set1name1.txt");
$devhelpp1 = file_get_contents("devhelpp1.txt");
/* </>=============== ɱคṡ੮คԲค ძ૯ṽ ===============</> */
$syriraq ="oo1ooo"; // معرف المطور
$sudo = "759459219"; // ايدي المطور 
$botid = "2222"; // ايدي البوت
$channels = "botssyria"; //قناتك
$info = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=".$from_id), true);
$group = $info['result']['status']; $admin = "administrator"; $mudir = "creator";
$info_ = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$edit_chat_id&user_id=".$edit_from_id), true); $group_ = $info_['result']['status'];
$bot = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=$botid");
/* </>=============== ɱคṡ੮คԲค ძ૯ṽ ===============</> */
function en($text) {if(stristr($text,"a") or stristr($text, 'b') or stristr($text, 'c') or stristr($text, 'd') or stristr($text, 'e') or stristr($text, 'f') or stristr($text, 'g') or stristr($text, 'h') or stristr($text, 'i') or stristr($text, 'j') or stristr($text, 'k') or stristr($text, 'l') or stristr($text, 'm') or stristr($text, 'n') or stristr($text, 'o') or stristr($text, 'p') or stristr($text, 'q') or stristr($text, 'r') or stristr($text, 's') or stristr($text, 't') or stristr($text, 'u') or stristr($text, 'v') or stristr($text, 'w') or stristr($text, 'x') or stristr($text, 'y') or stristr($text, 'z')){
return true;}else{return false;}} $en = en($text);
function ar($text) {if(stristr($text,"ض") or stristr($text, 'ص') or stristr($text, 'ث') or stristr($text, 'ق') or stristr($text, 'ف') or stristr($text, 'غ') or stristr($text, 'ع') or stristr($text, 'ه') or stristr($text, 'خ') or stristr($text, 'ح') or stristr($text, 'ج') or stristr($text, 'ش') or stristr($text, 'س') or stristr($text, 'ي') or stristr($text, 'ب') or stristr($text, 'ل') or stristr($text, 'ا') or stristr($text, 'ت') or stristr($text, 'ن') or stristr($text, 'م') or stristr($text, 'ك') or stristr($text, 'ط') or stristr($text, 'ذ') or stristr($text, 'ء') or stristr($text, 'ؤ') or stristr($text, 'ر') or stristr($text, 'ى') or stristr($text, 'ئ') or stristr($text, 'ة') or stristr($text, 'و') or stristr($text, 'ز') or stristr($text, 'ظ') or stristr($text, 'د') or stristr($text, 'أ') or stristr($text, 'إ') or stristr($text, 'آ')){
return true;}else{return false;}} $ar = ar($text);
/* </>=============== ɱคṡ੮คԲค ძ૯ṽ ===============</> */
$_gif = file_get_contents("data/gif.json"); $gif_ = explode("\n", $_gif);
$_link = file_get_contents("data/link.json"); $link_ = explode("\n", $_link);
$_fwd = file_get_contents("data/fwd.json"); $fwd_ = explode("\n", $_fwd);
$_voice = file_get_contents("data/voice.json"); $voice_ = explode("\n", $_voice);
$_audio = file_get_contents("data/audio.json"); $audio_ = explode("\n", $_audio);
$_video = file_get_contents("data/video.json"); $video_ = explode("\n", $_video);
$_sticker = file_get_contents("tg/sticker.json"); $sticker_ = explode("\n", $_sticker);
$_photo = file_get_contents("data/photo.json"); $photo_ = explode("\n", $_photo);
$_hash = file_get_contents("data/hash.json"); $hash_ = explode("\n", $_hash);
$_ar = file_get_contents("data/ar.json"); $ar_ = explode("\n", $_ar);
$_en = file_get_contents("data/en.json"); $en_ = explode("\n", $_en);
$_game = file_get_contents("data/game.json"); $game_ = explode("\n", $_game);
$_contact = file_get_contents("data/contact.json"); $contact_ = explode("\n", $_contact);
$_document = file_get_contents("data/document.json"); $document_ = explode("\n", $_document);
$_username = file_get_contents("data/username.json"); $username_ = explode("\n", $_username);
$_bots = file_get_contents("data/bots.json"); $bots_ = explode("\n", $_bots);
$_edited = file_get_contents("data/edited.json"); $edited_ = explode("\n", $_edited);
$_inline = file_get_contents("data/inline.json"); $inline_ = explode("\n", $_inline);
$_spam = file_get_contents("data/spam.json"); $spam_ = explode("\n", $_spam);
$_mute = file_get_contents("data/mute.json"); $mute_ = explode("\n", $_mute);
$_add = file_get_contents("data/add.json"); $add_ = explode("\n", $_add);
$_replay = file_get_contents("data/replay.json"); $replay_ = explode("\n", $_replay);
$_wlc = file_get_contents("data/wlc.json"); $wlc_ = explode("\n", $_wlc);
$selict = explode("\n", file_get_contents("data/selict/s$chat_id.json"));
/* </>=============== ɱคṡ੮คԲค ძ૯ṽ ===============</> */
if($text == "/start" and !strpos($inch , '"status":"left"') !== false and $message->chat->type == "private"){
mkdir("data");
mkdir("qunen");
mkdir("qunen/$chat_id");
mkdir("data/selict");
mkdir("data/filter");
bot('sendMessage',['chat_id'=>$chat_id, 'parse_mode'=>'MARKDOWN','message_id'=>$message_id,'reply_to_message_id'=>$message->message_id,
'text'=>"💯¦ مـرحبآ آنآ بوت آسـمـي $namebot 🎖
💰¦ آختصـآصـي حمـآيهہ‌‏ آلمـجمـوعآت
📛¦ مـن آلسـبآم وآلتوجيهہ‌‏ وآلتگرآر وآلخ...
⚖️¦ مـعرف آلمـطـور  : @$syriraq 🌿
👨",
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"آلـمـطـور ™",'url'=>"t.me/$syriraq"],['text'=>"👮‍♀ ارسل اقتراح ",'callback_data'=>"sendsudo"]],[['text'=>"⚙ إصنع بوت حماية ⚙",'url'=>"https://t.me/$channels"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,'parse_mode'=>'MARKDOWN','message_id'=>$message_id,'reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,'text'=>"
شخص قام بالدخول إلى البوت
ــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
ℓ☯️- المعرف الخاص بالعضو
ℓ🅿️- [@$user](t.me/$user)
➖➖
ℓ✳️- الاسم الخاص بالعضو
ℓ📳- [$name](t.me/$user)
➖➖
ℓ🚹- الايدي الخاص بالعضو
ℓ🆔- [$from_id](t.me/$user)
ـ➖➖➖➖📮",]);}
/* </>=============== ɱคṡ੮คԲค ძ૯ṽ ===============</> */
$_twsal = file_get_contents("data/twsal.json"); $twsal_ = explode("\n", $_twsal); if($data == "sendsudo" and !in_array($from_id, $twsal_)){file_put_contents("data/twsal.json", $from_id."\n", FILE_APPEND);
bot('editmessagetext',['chat_id' => $chat_id,
'text'=>"🔰¦ أرسل اقتراحك الآن عزيزي
〽️¦ قم بإرسال مشكلتك هنا الآن",'message_id'=>$message_id,]);}
if($text and !$data and in_array($from_id, $twsal_)){ $send = file_get_contents("data/twsal.json"); $send = str_replace($from_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send); file_put_contents('data/twsal.json', $send);
bot('forwardMessage',[
'chat_id'=>$sudo,'from_chat_id'=>$chat_id,'message_id'=>$message_id,]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'reply_to_message_id'=>$message_id,
'text'=>"✅¦ تـم ارسـال اقـتـراحك الى المطور 
🕧¦ انتظر الرد عزيزي من فضلك ❤️"]);}
if($text and $replay and $message->from->id == "289134446" and $message->chat->type == "private"){
bot('sendMessage',[
'chat_id'=>$message->reply_to_message->forward_from->id,
'text'=>$text,]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ارسـال رسـالـتـك ✔️",]);}
/* </>=============== ɱคṡ੮คԲค ძ૯ṽ ===============</> */
if($text == "تفعيل" and !in_array($chat_id, $add_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){file_put_contents("data/add.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',[
'chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم تفعيل المجموعة بنجاح
☑️¦ ايدي المجموعة`$chat_id`
✓",]);}}
if($text == "تفعيل" and in_array($chat_id, $add_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",
'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم تفعيل المجموعة مسبقاً بنجاح
☑️¦ ايدي المجموعة`$chat_id`
✓",]);}}
if($text == "تعطيل" and in_array($chat_id, $add_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/add.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send); file_put_contents('data/add.json', $send);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown", 'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم تعطيل المجموعة بنجاح
☑️¦ ايدي المجموعة`$chat_id`
✓",]);}}
if($text == "تعطيل" and !in_array($chat_id, $add_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',[
'chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم تعطيل المجموعة مسبقاً بنجاح
☑️¦ ايدي المجموعة`$chat_id`
✓",]);}}
/* </>=============== ɱคṡ੮คԲค ძ૯ṽ ===============</> */
if($text == "تفعيل الترحيب" and !in_array($chat_id, $wlc_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){file_put_contents("data/wlc.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',[
'chat_id'=>$chat_id,'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم تفعيل الترحيب
✓",]);}}
if($text == "تفعيل الترحيب" and in_array($chat_id, $wlc_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',[
'chat_id'=>$chat_id,'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم تفعيل الترحيب مسبقاً
✓",]);}}
if($text == "تعطيل الترحيب" and in_array($chat_id, $wlc_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/wlc.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send); file_put_contents('data/wlc.json', $send);
bot('sendMessage',[
'chat_id'=>$chat_id,'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم تعطيل الترحيب
✓",]);}}
if($text == "تعطيل الترحيب" and !in_array($chat_id, $wlc_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',[
'chat_id'=>$chat_id,'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم تعطيل الترحيب مسبقاً
✓",]);}}
if($update->message->new_chat_members and $newid != $botid){if(in_array($chat_id,$wlc_)){
bot('sendMessage',[
'chat_id'=>$chat_id,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'text'=>"👋🏻 ¦ مرحبا بك يا - [$name](tg://user?id=$from_id)  نورت المجموعة",'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"$name", 'url'=>"https://t.me/$channels"]],]])]);}else
bot('deleteMessage',[
'chat_id'=>$chat_id,'message_id'=>$message->message_id,]);}
/* </>=============== ɱคṡ੮คԲค ძ૯ṽ ===============</> */
if($update->message->new_chat_members and $newid == $botid and !in_array($chat_id, $wlc_)){
file_put_contents("data/wlc.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',[ 
'chat_id'=>$chat_id,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'text'=>"💯¦ مـرحبآ آنآ بوت آسـمـي $namebot 🎖
 💰¦ آختصـآصـي حمـآيهہ‌‏ آلمـجمـوعآت
 📛¦ مـن آلسـبآم وآلتوجيهہ‌‏ وآلتگرآر وآلخ...
 ⚖️¦ مـعرف آلمـطـور  : @syriraq 🌿
 👨🏽‍🔧",'parse_mode'=>markdown,'disable_web_page_preview'=>true,]);}
/* </>=============== ɱคṡ੮คԲค ძ૯ṽ ===============</> */
if($text == "$namebot غادر"){if($from_id == $sudo){
$send = file_get_contents("data/add.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send); file_put_contents('data/add.json', $send);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"💯¦ تم تعطيل البوت في المجموعة 
〽️¦ الى اللقاء اعزائي المطور @$syriraq",
]); bot('leaveChat',['chat_id'=>$chat_id,]);}}
/* </>=============== ɱคṡ੮คԲค ძ૯ṽ ===============</> */
$id = $message->from->id;
$iBadlz = $update->message->reply_to_message->from->id;
$TlllllT = $update->message->reply_to_message->from->username;
if($text =="رفع ادمن"){if($from_id == $sudo or $group == $mudir){
bot('promoteChatMember',['chat_id'=>$chat_id,'user_id'=>$iBadlz,
'can_delete_messages'=>true,'can_invite_users'=>true,'can_restrict_members'=>true,'can_pin_messages'=>true,]); 
bot('sendmessage',['chat_id'=>$chat_id,
'text'=>"👤¦ العضو »  @$TlllllT
🎫¦ الايدي » (  $iBadlz 🗳 )
🛠¦ تمت الترقية ليصبح ادمن
✓️️",'reply_to_message_id'=>$message->message_id,
]);}elseif($text =="رفع ادمن" and $id != $sudo){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=> "📛¦ هذا الامر يخص {المطور,المنشئ} فقط  
🚶",'reply_to_message_id'=>$message->message_id,]);}}
/* </>=============== ɱคṡ੮คԲค ძ૯ṽ ===============</> */
if($text =="تنزيل ادمن"){if($from_id == $sudo or $group == $mudir){
bot('promoteChatMember',['chat_id'=>$chat_id,'user_id'=>iBadlz,
'can_delete_messages'=>false,'can_invite_users'=>false,'can_restrict_members'=>false,'can_pin_messages'=>false,]);
bot('sendmessage',['chat_id'=>$chat_id,
'text'=>"👤¦ العضو »  @$TlllllT
🎫¦ الايدي » ( $iBadlz 🗳 )
🛠¦ تم تنزيله من الادمنيه
✓️️",'reply_to_message_id'=>$message->message_id,]);}elseif($text =="تنزيل ادمن" and $id != $sudo){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=> "📛¦ هذا الامر يخص {المطور,المنشئ} فقط  
🚶",'reply_to_message_id'=>$message->message_id,]);}}
/* </>=============== ɱคṡ੮คԲค ძ૯ṽ ===============</> */
if( $text=="تقيد" || $text == "تقييد"){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',[
'chat_id'=>$chat_id,'text'=>"👤¦ العضو »  @$TlllllT
🎫¦ الايدي » ( $iBadlz 🗳 )
🛠¦ تم تقييد العضو 
✓️️",'reply_to_message_id'=>$message->message_id,]);
bot('restrictChatMember',[
'chat_id'=>$chat_id,'user_id'=>$iBadlz]);
}elseif( $text=="تقيد" || $text == "تقييد" and $id != $sudo){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"📛¦ هذا الامر يخص {المطور,المنشئ,ادمن} فقط  
🚶",'reply_to_message_id'=>$message->message_id,]);}}
/* </>=============== ɱคṡ੮คԲค ძ૯ṽ ===============</> */
if($text =="الغاء تقيد" || $text =="الغاء التقيد" || $text =="الغاء التقييد" || $text =="الغاء تقييد"){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('promoteChatMember',[
'chat_id'=>$chat_id,'user_id'=>$iBadlz,'can_send_messages'=>true,]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"👤¦ العضو »  @$TlllllT
🎫¦ الايدي » ( $iBadlz 🗳 )
🛠¦ تم الغاء تقييد العضو 
✓️️",'reply_to_message_id'=>$message->message_id,]);
}elseif($text =="الغاء تقيد" || $text =="الغاء التقيد" || $text =="الغاء التقييد" || $text =="الغاء تقييد" and $id != $sudo){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"📛¦ هذا الامر يخص {المطور,المنشئ,ادمن} فقط  
🚶",'reply_to_message_id'=>$message->message_id,]);}}
/* </>=============== ɱคṡ੮คԲค ძ૯ṽ ===============</> */
if($text == "حظر" || $text == "طرد" and $replay){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('kickChatMember',[
'chat_id'=>$chat_id,'user_id'=>$reply_id,]);
bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"👤¦ العضو »  [@$reply_user]
🎫¦ الايدي » ( $reply_id 🗳 )
🛠¦ تم حظر العضو
✓️",'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>$reply_name,'url'=>"https://telegram.me/$reply_user"]],]])]);}elseif($text =="حظر" || $text =="طرد" || $text =="ban" || $text =="kick" and $id != $sudo){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"📛¦ هذا الامر يخص {المطور,المنشئ,ادمن} فقط  
🚶",'reply_to_message_id'=>$message->message_id,]);}}

if(preg_match('/^(حظر) (.*)/s', $text, $ban)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$info = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=$ban[2]"), true);
$_user = $info['result']['user']['username'];
$_name = $info['result']['user']['first_name'];
$_id = $info['result']['user']['id'];
bot('kickChatMember',[
'chat_id'=>$chat_id,'user_id'=>$_id,]);
bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"👤¦ العضو »  [@$reply_user]
🎫¦ الايدي » ( $reply_id 🗳 )
🛠¦ تم حظر العضو
✓️️",'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>$_name, 'url'=>"https://telegram.me/$_user"]],]])]);}}
/* </>=============== ɱคṡ੮คԲค ძ૯ṽ ===============</> */
if($replay and $text == "كتم" and in_array($reply_id, $selict) and $reply_id != $sudo){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"👤¦ العضو »  [@$reply_user]
🎫¦ الايدي » ( $reply_id 🗳 )
🛠¦ تم كتم العضو
✓️",]);}}
/* </>=============== ɱคṡ੮คԲค ძ૯ṽ ===============</> */
if($replay and $text == "كتم" || $text == "تصميت" and !in_array($reply_id, $selict) and $reply_id != $sudo){if($from_id == $sudo or $group == $mudir or  $group == $admin){file_put_contents("data/selict/s$chat_id.json", "$reply_id\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"👤¦ العضو »  [@$reply_user]
🎫¦ الايدي » ( $reply_id 🗳 )
🛠¦ تم كتم العضو مسبقاً
✓️",]);}}
/* </>=============== ɱคṡ੮คԲค ძ૯ṽ ===============</> */
if($replay and $text == "الغاء كتم" || $text == "الغاء الكتم" || $text == "الغاء تصميت" and !in_array($reply_id, $selict) and $reply_id != $sudo){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"👤¦ العضو »  [@$reply_user]
🎫¦ الايدي » ( $reply_id 🗳 )
🛠¦ تم الغاء كتم العضو مسبقاً
✓️",]);}}
/* </>=============== ɱคṡ੮คԲค ძ૯ṽ ===============</> */
if($replay and $text == "الغاء كتم" and in_array($reply_id, $selict) and $reply_id != $sudo){if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/selict/s$chat_id.json"); $send = str_replace($reply_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send); file_put_contents("data/selict/s$chat_id.json", $send);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"👤¦ العضو »  [@$reply_user]
🎫¦ الايدي » ( $reply_id 🗳 )
🛠¦ تم الغاء كتم العضو مسبقاً
✓️",]);}}
/* </>=============== ɱคṡ੮คԲค ძ૯ṽ ===============</> */
if($text == "قفل الروابط" and !in_array($chat_id, $link_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){file_put_contents("data/link.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الروابط
✓",]);}}
if($text == "قفل الروابط" and in_array($chat_id, $link_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الروابط مسبقاً
✓",]);}}
if($text == "فتح الروابط" and in_array($chat_id, $link_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/link.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send); file_put_contents('data/link.json', $send);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الروابط 
✓",]);}}
if($text == "فتح الروابط" and !in_array($chat_id, $link_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الروابط مسبقاً
✓ ",]);}}
if($text == "قفل المعرفات" and !in_array($chat_id, $username_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){file_put_contents("data/username.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل المعرفات
✓ ",]);}}
if($text == "قفل المعرفات" and in_array($chat_id, $username_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل المعرفات مسبقاً
✓ ",]);}}
if($text == "فتح المعرفات" and in_array($chat_id, $username_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/username.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send); file_put_contents('data/username.json', $send);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح المعرفات
✓ ",]);}}
if($text == "فتح المعرفات" and !in_array($chat_id, $username_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح المعرفات مسبقاً
✓ ",]);}}
if($text == "قفل تاك" and !in_array($chat_id, $hash_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){file_put_contents("data/hash.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل التاك #
✓",]);}}
if($text == "قفل تاك" and in_array($chat_id, $hash_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل التاك مسبقاً #
✓",]);}}
if($text == "فتح تاك" and in_array($chat_id, $hash_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/hash.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);file_put_contents('data/hash.json', $send);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",
'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح التاك #
✓",]);}}
if($text == "فتح تاك" and !in_array($chat_id, $hash_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح التاك مسبقاً #
✓",]);}}
if($text == "قفل التوجيه" and !in_array($chat_id, $fwd_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){file_put_contents("data/fwd.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,
'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل التوجيه
✓",]);}}
if($text == "قفل التوجيه" and in_array($chat_id, $fwd_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل التوجيه مسبقاً 
✓",]);}}
if($text == "فتح التوجيه" and in_array($chat_id, $fwd_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/fwd.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send); file_put_contents('data/fwd.json', $send);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح التوجيه 
✓",]);}}
if($text == "فتح التوجيه" and !in_array($chat_id, $fwd_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح التوجيه مسبقاً
✓",]);}}
if($text == "قفل الكلايش" and !in_array($chat_id, $spam_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){file_put_contents("data/spam.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الكلايش
✓",]);}}
if($text == "قفل الكلايش" and in_array($chat_id, $spam_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الكلايش مسبقاً
✓",]);}}
if($text == "فتح الكلايش" and in_array($chat_id, $spam_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){ $send = file_get_contents("data/spam.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);file_put_contents('data/spam.json', $send);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الكلايش
✓",]);}}
if($text == "فتح الكلايش" and !in_array($chat_id, $spam_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الكلايش مسبقاً
✓",]);}}
if($text == "قفل العربيه"  || $text == "قفل العربية" and !in_array($chat_id, $ar_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){file_put_contents("data/ar.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل العربية
✓",]);}}
if($text == "قفل العربيه"  || $text == "قفل العربية" and in_array($chat_id, $ar_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل العربية مسبقاً
✓",]);}}
if($text == "فتح العربيه" || $text == "فتح العربية" and !strpos($inch , '"status":"left"') !== false and in_array($chat_id, $add_) and in_array($chat_id, $ar_)){if($from_id == $admin | strpos($inch , '"status":"member"') == false){ $send = file_get_contents("data/ar.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);file_put_contents('data/ar.json', $send);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح العربية
✓",]);}}
if($text == "فتح العربيه"  || $text == "فتح العربية" and !in_array($chat_id, $ar_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح العربية مسبقاً
✓",]);}}
if($text == "قفل الانكليزيه" and !in_array($chat_id, $en_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){ file_put_contents("data/en.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الانكليزية
✓",]);}}
if($text == "قفل الانكليزيه" and in_array($chat_id, $en_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الانكليزية مسبقاً
✓",]);}}
if($text == "فتح الانكليزيه" and in_array($chat_id, $en_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){ $send = file_get_contents("data/en.json");$send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send); file_put_contents('data/en.json', $send);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الانكليزية
✓",]);}}
if($text == "فتح الانكليزيه" and !in_array($chat_id, $en_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الانكليزية مسبقاً
✓",]);}}
if($text == "قفل البصمة" and !in_array($chat_id, $voice_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){ file_put_contents("data/voice.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل البصمة
✓",]);}}
if($text == "قفل البصمة" and in_array($chat_id, $voice_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل البصمة مسبقاً
✓",]);}}
if($text == "فتح البصمه" and in_array($chat_id, $voice_)){ if($from_id == $sudo or $group == $mudir or  $group == $admin){ $send = file_get_contents("data/voice.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);file_put_contents('data/voice.json', $send);
bot('sendMessage',['chat_id'=>$chat_id,
'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح البصمة
✓",]);}}
if($text == "فتح البصمه" and !in_array($chat_id, $voice_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح البصمة مسبقاً
✓",]);}}
if($text == "قفل الصوت" and !in_array($chat_id, $audio_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){file_put_contents("data/audio.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الصوت
✓",]);}}
if($text == "قفل الصوت" and in_array($chat_id, $audio_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الصوت مسبقاً
✓",]);}}
if($text == "فتح الصوت" and in_array($chat_id, $audio_)){ if($from_id == $sudo or $group == $mudir or  $group == $admin){ $send = file_get_contents("data/audio.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);file_put_contents('data/audio.json', $send);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الصوت مسبقاً
✓",]);}}
if($text == "فتح الصوت" and !in_array($chat_id, $audio_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الصوت مسبقاً
✓",]);}}
if($text == "قفل الفيديو" and !in_array($chat_id, $video_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){file_put_contents("data/video.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الفيديو
✓",]);}}
if($text == "قفل الفيديو" and in_array($chat_id, $video_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الفيديو مسبقاً
✓",]);}}
if($text == "فتح الفيديو" and in_array($chat_id, $video_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){ $send = file_get_contents("data/video.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send); file_put_contents('data/video.json', $send);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الفيديو
✓",]);}}
if($text == "فتح الفيديو" and !in_array($chat_id, $video_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الفيديو مسبقاً
✓",]);}}
if($text == "قفل الملصقات" and !in_array($chat_id, $sticker_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){ file_put_contents("data/sticker.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الملصقات
✓",]);}}
if($text == "قفل الملصقات" and in_array($chat_id, $sticker_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الملصقات مسبقاً
✓",]);}}
if($text == "فتح الملصقات" and in_array($chat_id, $sticker_)){ if($from_id == $sudo or $group == $mudir or  $group == $admin){ $send = file_get_contents("data/sticker.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send); file_put_contents('data/sticker.json', $send);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الملصقات
✓",]);}}
if($text == "فتح الملصقات" and !in_array($chat_id, $sticker_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الملصقات مسبقاً
✓",]);}}
if($text == "قفل الصور" and !in_array($chat_id, $photo_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){ file_put_contents("data/photo.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الصور
✓",]);}}
if($text == "قفل الصور" and in_array($chat_id, $photo_)){ if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',[
'chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الصور مسبقاً
✓",]);}}
if($text == "فتح الصور" and in_array($chat_id, $photo_)){ if($from_id == $sudo or $group == $mudir or  $group == $admin){ $send = file_get_contents("data/photo.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send); file_put_contents('data/photo.json', $send);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الصور مسبقاً
✓",]);}}
if($text == "فتح الصور" and !in_array($chat_id, $photo_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الصور مسبقاً
✓",]);}}
if($text == "قفل البوتات" and !in_array($chat_id, $bots_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){ file_put_contents("data/bots.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل البوتات
✓",]);}}
if($text == "قفل البوتات" and in_array($chat_id, $bots_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل البوتات مسبقاً
✓",]);}}
if($text == "فتح البوتات" and in_array($chat_id, $bots_)){ if($from_id == $sudo or $group == $mudir or  $group == $admin){ $send = file_get_contents("data/bots.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send); file_put_contents('data/bots.json', $send);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح البوتات مسبقاً
✓",]);}}
if($text == "فتح البوتات" and !in_array($chat_id, $bots_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',[
'chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح البوتات مسبقاً
✓",]);}}
if($text == "قفل الالعاب" and !in_array($chat_id, $game_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){file_put_contents("data/game.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الالعاب
✓",]);}}
if($text == "قفل الالعاب" and in_array($chat_id, $game_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الالعاب مسبقاً
✓",]);}}
if($text == "فتح الالعاب" and in_array($chat_id, $game_)){ if($from_id == $sudo or $group == $mudir or  $group == $admin){ $send = file_get_contents("data/game.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send); file_put_contents('data/game.json', $send);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الالعاب
✓",
]);}}
if($text == "فتح الالعاب" and !in_array($chat_id, $game_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',[
'chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الالعاب مسبقاً
✓",]);}}
if($text == "قفل المتحركة" and !in_array($chat_id, $document_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){file_put_contents("data/document.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل المتحركة
✓",]);}}
if($text == "قفل المتحركة" and in_array($chat_id, $document_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل المتحركة مسبقاً
✓",]);}}
if($text == "فتح المتحركة" and in_array($chat_id, $document_)){ if($from_id == $sudo or $group == $mudir or  $group == $admin){ $send = file_get_contents("data/document.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send); file_put_contents('data/document.json', $send);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح المتحركة
✓",]);}}
if($text == "فتح المتحركة" and !in_array($chat_id, $document_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح المتحركة مسبقاً
✓",]);}}
if($text == "قفل الجهات" and !in_array($chat_id, $contact_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){file_put_contents("data/contact.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الجهات
✓",]);}}
if($text == "قفل الجهات" and in_array($chat_id, $contact_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الجهات مسبقاً
✓",]);}}
if($text == "فتح الجهات" and in_array($chat_id, $contact_)){ if($from_id == $sudo or $group == $mudir or  $group == $admin){ $send = file_get_contents("data/contact.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send); file_put_contents('data/contact.json', $send);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الجهات مسبقاً
✓",]);}}
if($text == "فتح الجهات" and !in_array($chat_id, $contact_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الجهات مسبقاً
✓",]);}}
if($text == "قفل الملفات" and !in_array($chat_id, $gif_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){file_put_contents("data/gif.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الملفات
✓",]);}}
if($text == "قفل الملفات" and in_array($chat_id, $gif_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الملفات مسبقاَ
✓",]);}}
if($text == "فتح الملفات" and in_array($chat_id, $gif_)){ if($from_id == $sudo or $group == $mudir or  $group == $admin){ $send = file_get_contents("data/gif.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send); file_put_contents('data/gif.json', $send);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الملفات
✓",]);}}
if($text == "فتح الملفات" and !in_array($chat_id, $gif_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الملفات مسبقاً
✓",]);}}
if($text == "قفل التعديل" and !in_array($chat_id, $edited_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){file_put_contents("data/edited.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل التعديل
✓",]);}}
if($text == "قفل التعديل" and in_array($chat_id, $edited_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل التعديل مسبقاً
✓",]);}}
if($text == "فتح التعديل" and in_array($chat_id, $edited_)){ if($from_id == $sudo or $group == $mudir or  $group == $admin){ $send = file_get_contents("data/edited.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send); file_put_contents('data/edited.json', $send);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح التعديل
✓",]);}}
if($text == "فتح التعديل" and !in_array($chat_id, $edited_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح التعديل مسبقاً
✓",]);}}
if($text == "قفل انلاين" and !in_array($chat_id, $inline_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){file_put_contents("data/inline.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل انلاين
✓",]);}}
if($text == "قفل انلاين" and in_array($chat_id, $inline_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل انلاين مسبقاً
✓",]);}}
if($text == "فتح انلاين" and in_array($chat_id, $inline_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){ $send = file_get_contents("data/inline.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send); file_put_contents('data/inline.json', $send);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح انلاين
✓",]);}}
if($text == "فتح انلاين" and !in_array($chat_id, $inline_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح انلاين مسبقاً
✓",]);}}
if($text == "قفل الدردشة" and !in_array($chat_id, $mute_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){file_put_contents("data/mute.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الدردشة
✓",]);}}
if($text == "قفل الدردشة" and in_array($chat_id, $mute_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الدردشة مسبقاً
✓",]);}}
if($text == "فتح الدردشة" and in_array($chat_id, $mute_)){ if($from_id == $sudo or $group == $mudir or  $group == $admin){ $send = file_get_contents("data/mute.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send); file_put_contents('data/mute.json', $send);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الدردشة مسبقاً
✓",]);}}
if($text == "فتح الدردشة" and !in_array($chat_id, $mute_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الدردشة مسبقاً
✓",]);}}
/*
if($text == "قفل الكل" and $message->chat->type == "supergroup"){if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/contact.json", "$chat_id\n", FILE_APPEND);
file_put_contents("data/document.json", "$chat_id\n", FILE_APPEND);
file_put_contents("data/photo.json", "$chat_id\n", FILE_APPEND);
file_put_contents("data/voice.json", "$chat_id\n", FILE_APPEND);
file_put_contents("data/spam.json", "$chat_id\n", FILE_APPEND);
file_put_contents("data/username.json", "$chat_id\n", FILE_APPEND);
file_put_contents("data/link.json", "$chat_id\n", FILE_APPEND);
file_put_contents("data/hash.json", "$chat_id\n", FILE_APPEND);
file_put_contents("data/fwd.json", "$chat_id\n", FILE_APPEND);
file_put_contents("data/audio.json", "$chat_id\n", FILE_APPEND);
file_put_contents("data/video.json", "$chat_id\n", FILE_APPEND);
file_put_contents("data/sticker.json", "$chat_id\n", FILE_APPEND);
file_put_contents("data/bots.json", "$chat_id\n", FILE_APPEND);
file_put_contents("data/game.json", "$chat_id\n", FILE_APPEND);
file_put_contents("data/gif.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الكل 
✓",]);}}
if($text == "فتح الكل" and $message->chat->type == "supergroup"){ if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/contact.json", "$chat_id\n", FILE_APPEND); $send = file_get_contents("data/contact.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/contact.json', $send);
file_put_contents("data/document.json", "$chat_id\n", FILE_APPEND); $send = file_get_contents("data/document.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/document.json', $send);
file_put_contents("data/photo.json", "$chat_id\n", FILE_APPEND); $send = file_get_contents("data/photo.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/photo.json', $send);
file_put_contents("data/voice.json", "$chat_id\n", FILE_APPEND); $send = file_get_contents("data/voice.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/voice.json', $send);
file_put_contents("data/spam.json", "$chat_id\n", FILE_APPEND); $send = file_get_contents("data/spam.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/spam.json', $send);
file_put_contents("data/username.json", "$chat_id\n", FILE_APPEND); $send = file_get_contents("data/username.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/username.json', $send);
file_put_contents("data/link.json", "$chat_id\n", FILE_APPEND); $send = file_get_contents("data/link.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/link.json', $send);
file_put_contents("data/hash.json", "$chat_id\n", FILE_APPEND); $send = file_get_contents("data/hash.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/hash.json', $send);
file_put_contents("data/fwd.json", "$chat_id\n", FILE_APPEND); $send = file_get_contents("data/fwd.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/fwd.json', $send);
file_put_contents("data/audio.json", "$chat_id\n", FILE_APPEND); $send = file_get_contents("data/audio.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/audio.json', $send);
file_put_contents("data/video.json", "$chat_id\n", FILE_APPEND); $send = file_get_contents("data/video.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/video.json', $send);
file_put_contents("data/sticker.json", "$chat_id\n", FILE_APPEND); $send = file_get_contents("data/sticker.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/sticker.json', $send);
file_put_contents("data/bots.json", "$chat_id\n", FILE_APPEND); $send = file_get_contents("data/bots.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/bots.json', $send);
file_put_contents("data/game.json", "$chat_id\n", FILE_APPEND); $send = file_get_contents("data/game.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/game.json', $send);
file_put_contents("data/gif.json", "$chat_id\n", FILE_APPEND); $send = file_get_contents("data/gif.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send); file_put_contents('data/gif.json', $send);
bot('sendMessage',['chat_id'=>$chat_id,'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الكل
✓",]);}} */
/* </>=============== ɱคṡ੮คԲค ძ૯ṽ ===============</> */
if(preg_match("/^(.*)([Tt].[Mm][Ee])|(.*)([Tt].[Mm][Ee])(.*)|([Tt].[Mm][Ee])(.*)|(.*)([Tt][Ee][Ll][Ee][Gg][Rr][Aa][Mm].[Mm][Ee])|(.*)([Tt][Ee][Ll][Ee][Gg][Rr][Aa][Mm].[Mm][Ee])(.*)|([Tt][Ee][Ll][Ee][Gg][Rr][Aa][Mm].[Mm][Ee])(.*)|(.*)([Ww][Ww][Ww])|(.*)([Ww][Ww][Ww])(.*)|(.*)([Cc][Oo][Mm])|(.*)([Cc][Oo][Mm])(.*)|([Cc][Oo][Mm])(.*)/", $text) and in_array($chat_id, $link_)){if($group == "member"){
bot('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id]);}}
if($message->text_entities->type == "text_link" and in_array($chat_id, $link_)){if($group == "member"){
bot('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id]);}}
if(preg_match('/^(.*)([Bb][Oo][Tt])/s',$newbots) and in_array($chat_id, $bots_)){if($group == "member"){
bot('sendMessage',['chat_id'=>$chat_id,'reply_to_message_id'=>$message->message_id,
'text'=>"👤¦ العضو »  [@$user]
🎫¦ الايدي » ( $from_id )
🛠¦ تم تم طرد البوت ومن قام بإضافته
✓️", ]);bot('kickChatMember',['chat_id'=>$chat_id,'user_id'=>$update->message->new_chat_member->id]);bot('kickChatMember',[
'chat_id'=>$chat_id,'user_id'=>$from_id]);}}
if(preg_match("/^(@)(.*)|(.*)(@)|(.*)(@)(.*)/s", $text) and in_array($chat_id, $username_)){if($group == "member"){
bot('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id]);}}
if(preg_match("/^(#)(.*)|(.*)(#)|(.*)(#)(.*)/s", $text) and in_array($chat_id, $hash_)){if($group == "member"){
bot('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id]);}}
if($edited and in_array($chat_id, $edited_)){if($group_ == "member"){
bot('deleteMessage',['chat_id'=>$edit_chat_id,'message_id'=>$edit_id]);}}
if($inline and in_array($chat_id, $inline_)){if($group == "member"){
bot('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id]);}}
if(str_word_count($text) > 100 and in_array($chat_id, $spam_)){if($group == "member"){
bot('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id]);}}
if($fwd and in_array($chat_id, $fwd_)){if($group == "member"){
bot('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id]);}}
if($fwd0 and in_array($chat_id, $fwd_)){if($group == "member"){
bot('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id]);}}
if($voice and in_array($chat_id, $voice_)){if($group == "member"){
bot('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id]);}}
if($audio and in_array($chat_id, $audio_)){if($group == "member"){
bot('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id]);}}
if($video and in_array($chat_id, $video_)){if($group == "member"){
bot('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id]);}}
if($sticker and in_array($chat_id, $sticker_)){if($group == "member"){
bot('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id]);}}
if($text == $en and in_array($chat_id, $en_)){if($group == "member"){
bot('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id]);}}
if($text == $ar and in_array($chat_id, $ar_)){if($group == "member"){
bot('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id]);}}
if($photo and in_array($chat_id, $photo_)){if($group == "member"){
bot('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id]);}}
if($game and in_array($chat_id, $game_)){if($group == "member"){
bot('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id]);}}
if($document and in_array($chat_id, $document_)){if($group == "member"){
bot('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id]);}}
if($contact and in_array($chat_id, $contact_)){if($group == "member"){
bot('deleteMessage',['chat_id'=>$chat_id,
'message_id'=>$message->message_id]);}}
if($document and in_array($chat_id, $gif_)){if($group == "member"){
bot('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id]);}}
if($text and in_array($from_id, explode("\n", file_get_contents("data/selict/s$chat_id.json")))){if($group == "member"){
bot('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id,]);}}
if($text and in_array($text, explode("\n", file_get_contents("data/filter/s$chat_id.json")))){if($group == "member"){
bot('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id,]);}}
if($message and in_array($chat_id, $mute_)){if($group == "member"){
bot('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id]);}}
/* </>=============== ɱคṡ੮คԲค ძ૯ṽ ===============</> */
if($text == "الاوامر" and $message->chat->type == "supergroup"){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'reply_to_message_id'=>$message->message_id,
'text'=>"❂

 ‌‌‏❋¦ مـسـآرت آلآوآمـر آلعآمـهہ‌‏ ⇊

👨‍⚖️¦ م1 » آوآمـر آلآدآرهہ‌‏
📟¦ م2 » آوآمـر آعدآدآت آلمـجمـوعهہ‌‏
🛡¦ م3 » آوآمـر آلحمـآيهہ‌‏
🕹¦ م المطور »  آوآمـر آلمـطـور
⚡️¦ اوامر الرد » لآضـآفهہ‌‏ رد مـعين


 ‌‌‏❋¦ رآسـلني للآسـتفسـآر ☜ { @$syriraq } ✓",]);}}
/* </>=============== ɱคṡ੮คԲค ძ૯ṽ ===============</> */
if($text == "م1" and $message->chat->type == "supergroup"){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['reply_to_message_id'=>$message->message_id,'chat_id'=>$chat_id,
'text'=>"•⊱ {  آوآمر الرفع والتنزيل  } ⊰•


📿¦ رفع ادمن ‿ تنزيل ادمن 
 

⦅آوآمـر آلحظـر وآلطــرد وآلتقييـد  ⦆
      
🔱¦ حظر (بالرد) •⊱ لحظر العضو
⚜¦ طرد ( بالرد) •⊱ لطرد العضو 
🔅¦ كتم (بالرد) •⊱ لكتم العضو 
🌀¦ تقييد (بالرد) •⊱ لتقييد العضو
🚫¦ منع + الكلمه •⊱ لمنع كلمه داخل المجموعه
🚸¦ الغاء الحظر (بالرد) •⊱ لالغاء الحظر 
🔆¦ الغاء الكتم (بالرد) •⊱ لالغاء الكتم 
〰¦ فك التقييد (بالرد) •⊱ لالغاء تقييد العضو 
⭕️¦ الغاء منع •⊱ لالغاء منع الكلمه بالمجموعه
🗯┇ راسلني للاستفسار 💡↭ @$syriraq",]);}}
/* </>=============== ɱคṡ੮คԲค ძ૯ṽ ===============</> */
if($text == "م2" and $message->chat->type == "supergroup"){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'reply_to_message_id'=>$message->message_id,
'text'=>"👨🏽‍✈️¦  اوامر الوضع للمجموعه ::

📮¦ـ➖➖➖➖➖
💭¦ ضع القوانين :↜ لوضع القوانين 
💭¦ ضع وصف :↜ لوضع وصف  
💭¦ ضـع رابط :↜ لوضع الرابط  
💭¦ الـرابـط :↜  لعرض الرابط  
📮¦ـ➖➖➖➖➖

👨🏽‍💻¦  اوامر رؤية الاعدادات ::

🗯¦ القوانين : لعرض  القوانين 
🗯¦ الادمنيه : لعرض  الادمنيه  
🗯¦ المكتومين :↜لعرض  المكتومين 
🗯¦ المطور : لعرض معلومات المطور 
🗯¦ معلوماتي :↜لعرض معلوماتك  
🗯¦ الحمايه : لعرض كل الاعدادات  
🗯¦ معلومات بوت : لعرض معلومات البوت

اسم البوت + غادر لمغادرة الكروب

➖➖➖➖➖➖➖
👨🏻‍💻¦ للاستفسار 💡↭ @$syriraq",]);}}
/* </>=============== ɱคṡ੮คԲค ძ૯ṽ ===============</> */
if($text == "م3" and $message->chat->type == "supergroup"){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'reply_to_message_id'=>$message->message_id,
'text'=>"⚡️ اوامر حماية المجموعه ⚡️
🗯¦ـ➖➖➖➖
🗯¦ قفل «» فتح •⊱ التعديل  ⊰•
🗯¦️ قفل «» فتح •⊱ البصمة ⊰•
🗯¦ قفل «» فتح •⊱ الــفيديو ⊰•
🗯¦ قفل «» فتح •⊱ الفيديو ⊰•
🗯¦ قفل «» فتح •⊱ الـصــور ⊰•
🗯¦ قفل «» فتح •⊱ الملصقات ⊰•

🗯¦ قفل «» فتح •⊱ المتحركة ⊰•
🗯¦ قفل «» فتح •⊱ الدردشة ⊰•

🗯¦ قفل «» فتح •⊱ الروابط ⊰•
🗯¦ قفل «» فتح •⊱ التاك ⊰•
🗯¦ قفل «» فتح •⊱ البوتات ⊰•
🗯¦ ️قفل «» فتح •⊱ المعرفات ⊰•
🗯¦ قفل «» فتح •⊱ البوتات  ⊰•
🗯¦ قفل «» فتح •⊱ الكلايش ⊰•
🗯¦ قفل «» فتح •⊱ التوجيه ⊰•
🗯¦ قفل «» فتح •⊱ الانلاين ⊰•

🗯¦ قفل «» فتح •⊱ الجهات ⊰•
🗯¦ قفل «» فتح •⊱ الــكـــل ⊰•
🔅¦ـ➖➖➖➖➖
📌¦ تفعيل «» تعطيل •⊱  الترحيب ⊰•
🗯¦ تفعيل «» تعطيل •⊱  الردود ⊰•
🔅¦ـ➖➖➖➖➖

👨🏻‍💻¦ للاستفسار 💡↭ @$syriraq",]);}}
/* </>=============== ɱคṡ੮คԲค ძ૯ṽ ===============</> */
if($text == "م المطور" and $message->chat->type == "supergroup"){if($from_id == $sudo ){bot('sendMessage',['reply_to_message_id'=>$message->message_id,'chat_id'=>$chat_id,
'text'=>"في الصيانة عزيزي",
]);}else{bot('sendMessage',['chat_id'=>$chat_id,'reply_to_message_id'=>$message->message_id,
'text'=>"🔅¦ للمطور الاساسي فقط  🎖",]);}}
/* </>=============== ɱคṡ੮คԲค ძ૯ṽ ===============</> */
if($text == "تفعيل الردود" and !in_array($chat_id, $replay_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){file_put_contents("data/replay.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم تفعيل الردود
✓",]);}}
if($text == "تفعيل الردود" and in_array($chat_id, $replay_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم تفعيل الردود مسبقاً 
✓",]);}}
if($text == "تعطيل الردود" and in_array($chat_id, $replay_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){ $send = file_get_contents("data/replay.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send); file_put_contents('data/replay.json', $send);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم تعطيل الردود
✓",]);}}
if($text == "تعطيل الردود" and !in_array($chat_id, $replay_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم تعطيل الردود مسبقاً 
✓",]);}}
$textreply = array('parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'انعل ابوك' => 'وابوك عل واهس🌚✋🏻',
'تتزوجني' => 'اي تعال والمهر عليه ولايهمك🙊😂',
'تعال خاص' => 'ماشي خاص ع اختك مثلا🌚☝️🏽️',
'بوسني' =>'ٲٳٲمــﮨ﴿💋﴾ﮨﮨﮨﮨ﴿😚﴾ﮨــوٱآاﮨـٍٰۣۗح✵❤ لحلك/ق',
'مرحبا'=>'[مـراحـݕ ياۿـلا┋ 💖😻](https://t.me/bots_syria)',
'هلو'=>'[هــلؤﯙؤات ﺣﻳـاﺗـﻲ 🌸💖](https://t.me/bots_syria)',
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
);foreach($textreply as $txt => $send){if($text == $txt and in_array($chat_id, $replay_) and !$game and !$photo and !$edited and !$audio and !$video and !$voice and !$inline and !$gif and !$fwd0 and !$document and !$fwd and !$contact and !$sticker and !$update->message->new_chat_members){bot('sendMessage',['chat_id'=>$chat_id,'text'=>$send,'reply_to_message_id'=>$message->message_id,'parse_mode'=>'MARKDOWN','disable_web_page_preview'=>'true',]);}}
/* </>=============== ɱคṡ੮คԲค ძ૯ṽ ===============</> */
if($text=="ايدي" and $from_id == $sudo){
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$photo,
'caption'=>"👤¦ أســمـك •⊱ {$name} ⊰•
🎟¦ ايديــك •⊱ {$from_id} ⊰•
🎫¦ مـعرفك •⊱ [@$user] ⊰•
📡¦ رتبتـــك •⊱ مطور البوت 👮‍♀ ⊰•
⭐️¦ تفاعـلك •⊱ $MOSYRIA[$MOSY] ⊰•
💬¦ رسائلك •⊱ {".$msgs['msgs'][$chat_id][$from_id]."} ⊰•
➖",
"parse_mode"=>"MARKDOWN",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
}elseif($text=="ايدي" and $from_id == $sudo){
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"👤¦ أســمـك •⊱ {$name} ⊰•
🎟¦ ايديــك •⊱ {$from_id} ⊰•
🎫¦ مـعرفك •⊱ [@$user] ⊰•
📡¦ رتبتـــك •⊱ مطور البوت 👮‍♀ ⊰•
⭐️¦ تفاعـلك •⊱ $MOSYRIA[$MOSY] ⊰•
💬¦ رسائلك •⊱ {".$msgs['msgs'][$chat_id][$from_id]."} ⊰•
➖
⁉️ لا تملك صورة عزيزي ",
"parse_mode"=>"MARKDOWN",
]);
}elseif($text=="ايدي" and $MOSTYRIA   == "creator" and $from_id != $sudo){
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$photo,
'caption'=>"👤¦ أســمـك •⊱ {$name} ⊰•
🎟¦ ايديــك •⊱ {$from_id} ⊰•
🎫¦ مـعرفك •⊱ [@$user] ⊰•
📡¦ رتبتـــك •⊱ المنشىء 👷🏽⊰•
⭐️¦ تفاعـلك •⊱ $MOSYRIA[$MOSY] ⊰• 
💬¦ رسائلك •⊱ {".$msgs['msgs'][$chat_id][$from_id]."} ⊰•
➖",
"parse_mode"=>"MARKDOWN",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
}
if($text=="ايدي"and $MOSTYRIA == "administrator"){
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$photo,
'caption'=>"👤¦ أســمـك •⊱ {$name} ⊰•
🎟¦ ايديــك •⊱ {$from_id} ⊰•
🎫¦ مـعرفك •⊱ [@$user] ⊰•
📡¦ رتبتـــك •⊱ ادمن في البوت 👨🏼‍🎓⊰•
⭐️¦ تفاعـلك •⊱ $MOSYRIA[$MOSY] ⊰• 
💬¦ رسائلك •⊱ {".$msgs['msgs'][$chat_id][$from_id]."} ⊰•
➖",
"parse_mode"=>"MARKDOWN",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
}elseif($text=="ايدي" and $MOSTYRIA   == "member"){

bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$photo,
'caption'=>"👤¦ أســمـك •⊱ {$name} ⊰•
🎟¦ ايديــك •⊱ {$from_id} ⊰•
🎫¦ مـعرفك •⊱ [@$user] ⊰•
📡¦ رتبتـــك •⊱ فقط عضو 🙍🏼‍♂️ ⊰•
⭐️¦ تفاعـلك •⊱ $MOSYRIA[$MOSY] ⊰• 
💬¦ رسائلك •⊱ {".$msgs['msgs'][$chat_id][$from_id]."} ⊰•
➖",
"parse_mode"=>"MARKDOWN",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
}

if($text=="صورتي"){
$photo = "https://t.me/$user";
bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>$photo,
'caption'=>"
صورتك : @$from_user
",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
}
if($text == "msg" or $text == "رسائلي"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
💬¦ رسائلك • { ".$msgs['msgs'][$chat_id][$from_id]." } •
",
'reply_to_message_id'=>$message->message_id, 
]);
}
/* </>=============== ɱคṡ੮คԲค ძ૯ṽ ===============</> */
if ($text == "• ضع كليشه المطور •" and $from_id == $sudo){
file_put_contents("set1name.txt","nam1");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"📭¦ حسننا عزيزي المطور،
🗯¦ الان ارسل كليشة المطور
√ ",'parse_mode'=>"MARKDOWN","reply_to_message_id"=>$MOSTYRIA1,]);} if($text && $devhelp =="nam1" and $from_id == $sudo){file_put_contents("devhelpp.txt",$text); file_put_contents("set1name.txt","");
bot("sendmessage",["chat_id"=>$chat_id,
"text" =>"✓ تم اضافت كليشة المطور 👮‍♀
 √",'parse_mode'=>"MARKDOWN","reply_to_message_id"=>$MOSTYRIA1,]);}
if($text == "المطور" || $text == "مطور"){
bot('sendMessage',['chat_id'=>$chat_id, 
'text'=>$devhelpp,'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id, 
]);}elseif ($text == "• ضع كليشه المطور •" and $from_id != $sudo){
bot("sendmessage",['chat_id'=>$chat_id,
'text'=>"
*☑┇ انت لست مطور هذا البوت ،!*
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, ]);}
/* </>=============== ɱคṡ੮คԲค ძ૯ṽ ===============</> */
$id = $message->from->id;
mkdir("MOSTYRIA2");
mkdir("MOSTYRIA2/$chat_id");
$put = file_get_contents("MOSTYRIA2/$chat_id/link.txt"); $link = file_get_contents("MOSTYRIA2/$chat_id/put.txt");
$ex = explode("\n",$put);
if( $text == "ضع رابط" || $text == "وضع رابط"){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("MOSTYRIA2/$chat_id/put.txt","link");
bot("sendmessage",['chat_id'=>$chat_id,
'text'=>"
📚¦ حسنا ، ارسل لي رابط المجموعهہ ،!
",'reply_to_message_id'=>$message->message_id,]);}}
if($text and $link == "link"){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("MOSTYRIA2/$chat_id/link.txt",$text); file_put_contents("MOSTYRIA2/$chat_id/put.txt"," ");
bot("sendmessage",['chat_id'=>$chat_id,
'text'=>"
📬¦ تم حفظ الرابط الخاص بالمجموعهہ ،!
",'reply_to_message_id'=>$message->message_id,]);}}
if($text == "الرابط" or $text == "رابط"){
bot("sendmessage",['chat_id'=>$chat_id,
'text'=>" رابط المجموعه هو : $put",
'reply_to_message_id'=>$message->message_id,]);}
if( $text == "مسح الرابط" || $text == "حذف الرابط" ){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("MOSTYRIA2/$chat_id/link.txt"," ");
bot("sendmessage",['chat_id'=>$chat_id,
'text'=>"
تم حذف الرابط الخاص بك
",'reply_to_message_id'=>$message->message_id,]);}}
if( $text == "مسح الرابط" || $text == "حذف الرابط" and $id != $sudo){
bot('sendmessage',['chat_id'=>$chat_id,
'text'=> "
المعذره صديقي ليس لديك صلاحيات مسح الرابط
",'reply_to_message_id'=>$message->message_id,]);}
/* </>=============== ɱคṡ੮คԲค ძ૯ṽ ===============</> */
if ($text == "• 🤖¦ ضع اسم البوت •" || $text =="وضع اسم للبوت" || $text =="وضع اسم البوت" || $text =="ضع اسم البوت" and $from_id == $sudo){
file_put_contents("setname.txt","nam");
bot("sendMessage",["chat_id"=>$chat_id,
"text"=>"📭¦ حسننا عزيزي المطور،
🗯¦ الان ارسل الاسم  للبوت 
√",'parse_mode'=>"MARKDOWN","reply_to_message_id"=>$MOSTYRIA1,]);}
if($text && $setnamebot =="nam" and $from_id == $sudo){
file_put_contents("namebot.txt",$text); file_put_contents("setname.txt","");
bot("sendmessage",["chat_id"=>$chat_id,
"text" => "✓ تم اضافت اسم للبوت 🚀 
 -",'parse_mode'=>"MARKDOWN","reply_to_message_id"=>$MOSTYRIA1,]);}
if($text == "بوت" || $text == "شسمك"){
bot('sendMessage',['chat_id'=>$chat_id, 
'text'=>"اسمي $namebot 🌚🌸",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, 
]);}elseif($text == "• 🤖¦ ضع اسم البوت •" || $text =="وضع اسم للبوت" || $text =="وضع اسم البوت" || $text =="ضع اسم البوت" and $from_id != $sudo){
bot("sendmessage",['chat_id'=>$chat_id,
'text'=>"
*☑┇ انت لست مطور هذا البوت ،!*
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, ]);}

$id = $message->from->id;
mkdir("qunen");
mkdir("qunen/$chat_id");
$put = file_get_contents("qunen/$chat_id/link.txt"); $link = file_get_contents("qunen/$chat_id/put.txt");
$ex = explode("\n",$put);
/* </>=============== ɱคṡ੮คԲค ძ૯ṽ ===============</> */
if( $text == "ضع قوانين" || $text == "وضع قوانين"){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("qunen/$chat_id/put.txt","link1");
bot("sendmessage",['chat_id'=>$chat_id,
'text'=>"📭¦ حسننا عزيزي  ✋🏿
🗯¦ الان ارسل القوانين  للمجموعه 🍃",'reply_to_message_id'=>$message->message_id,]);}}
if($text and $link == "link1"){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("qunen/$chat_id/link.txt",$text); file_put_contents("qunen/$chat_id/put.txt"," ");
bot("sendmessage",['chat_id'=>$chat_id,
'text'=>"📜¦ مرحبآ عزيزي
📦¦ تم حفظ القوانين بنجاح ✓
🔖¦ ارسل [ القوانين ] لعرضها 
💬✓",'reply_to_message_id'=>$message->message_id,]);}}
/* </>=============== ɱคṡ੮คԲค ძ૯ṽ ===============</> */
if($text == "القوانين" or $text == "قوانين"){
bot("sendmessage",['chat_id'=>$chat_id,
'text'=>$put,
'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id, 
'reply_to_message_id'=>$message->message_id,]);}
/* </>=============== ɱคṡ੮คԲค ძ૯ṽ ===============</> */
if( $text == "مسح القوانين" || $text == "حذف القوانين" ){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("qunen/$chat_id/link.txt"," ");
bot("sendmessage",['chat_id'=>$chat_id,
'text'=>"📜¦ مرحبآ عزيزي
📦¦ تم حذف القوانين بنجاح ✓
💬✓",'reply_to_message_id'=>$message->message_id,]);}}
/* </>=============== ɱคṡ੮คԲค ძ૯ṽ ===============</> */
$aname = str_replace("ضع اسم ", "$aname", $text);
if($text == "ضع اسم $aname"){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('setChatTitle',['chat_id'=>$chat_id,'title'=>$aname ]);}}
/* </>=============== ɱคṡ੮คԲค ძ૯ṽ ===============</> */
if($text == "مسح المكتومين" and !file_exists("data/selict/s$chat_id.json")){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"
🛠¦ لايوجد مكتومين عزيزي ⁉️
✓️️",]);}}
if($text == "مسح المكتومين" and file_exists("data/selict/s$chat_id.json")){if($from_id == $sudo or $group == $mudir or  $group == $admin){
unlink("data/selict/s$chat_id.json");
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم مسح المكتومين
✓",]);}}
if(preg_match('/^(منع) (.*)/s', $text, $filter)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
if(in_array($filter[2], explode("\n", file_get_contents("data/filter/s$chat_id.json")))){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",
'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم منع كلمة ($filter[2])
✓",]);}}}
if(preg_match('/^(منع) (.*)/s', $text, $filter)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
if(!in_array($filter[2], explode("\n", file_get_contents("data/filter/s$chat_id.json")))){
file_put_contents("data/filter/s$chat_id.json", "$filter[2]\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,
'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم منع كلمة ($filter[2])
✓",]);}}}
if(preg_match('/^(الغاء منع) (.*)/s', $text, $filter)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
if(!in_array($filter[2], explode("\n", file_get_contents("data/filter/s$chat_id.json")))){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم الغاء منع كلمة ($filter[2])
✓",]);}}}
if(preg_match('/^(الغاء منع) (.*)/s', $text, $filter)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
if(in_array($filter[2], explode("\n", file_get_contents("data/filter/s$chat_id.json")))){
$send = file_get_contents("data/filter/s$chat_id.json"); $send = str_replace($filter[2], " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents("data/filter/s$chat_id.json", $send);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم الغاء منع كلمة ($filter[2])
✓",]);}}}
if($text == "قائمة المنع"){if($from_id == $sudo or $group == $mudir or  $group == $admin){
$filter = file_get_contents("data/filter/s$chat_id.json");
bot('sendMessage',[
'chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ اليك قائمة الممنوعات
` $filter `
✓",'parse_mode'=>markdown,'disable_web_page_preview'=>true,]);}}
if($text == "مسح قائمة المنع" and !file_exists("data/filter/s$chat_id.json")){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم مسح قائمة المنع
✓",]);}}
if($text == "مسح قائمة المنع" and file_exists("data/filter/s$chat_id.json")){if($from_id == $sudo or $group == $mudir or  $group == $admin){
unlink("data/filter/s$chat_id.json");
bot('sendMessage',['chat_id'=>$chat_id,'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم مسح قائمة المنع
✓",]);}}
/* </>=============== ɱคṡ੮คԲค ძ૯ṽ ===============</> */
if($text == '/admin' and $from_id == $sudo){ 
bot('sendMessage',['chat_id'=>$chat_id, 
'text'=>"
'🎖¦ آهہ‌‏لآ عزيزي آلمـطـور 🍃
💰¦ آنتهہ‌‏ آلمـطـور آلآسـآسـي هہ‌‏نآ 🛠
...

🚸¦ تسـتطـيع‌‏ آلتحگم بگل آلآوآمـر آلمـمـوجودهہ‌‏ بآلگيبورد
⚖️¦ فقط آضـغط ع آلآمـر آلذي تريد تنفيذهہ‌‏
",'reply_markup'=>json_encode(['keyboard'=>[[['text'=>'• 🤖¦ ضع اسم البوت •'],['text'=>'• ضع كليشه المطور •']],]])]);}
/* </>=============== ɱคṡ੮คԲค ძ૯ṽ ===============</> */

/*

تغير الحقوق تثبت علامة فشلك

مبرمج الملف ɱคṡ੮คԲค ძ૯ṽ

قنوات المبرمج السوري

CH : @BOTS_SYRIA

DEV : @OO1OOO

BOT TEASL : @BOTS_SYRIA


*/