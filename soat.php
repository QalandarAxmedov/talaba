
<?php
ob_start();
define('API_KEY', '640759927:AAGYOmPhGswE0Rd_FYO50BC4Tr2GHAL-oqQ');
//tokenni yozing
$admin = "543569514";
$admin2 = "543569514";  
$gid = "-1001230860782";
$gid2 = "-1001226037127";
$kanal = "-1001129118121";
$kanal2 = "-1001208753264";
//ozizni id raqamizni yozing
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
$update = json_decode(file_get_contents('php://input'));
$edname = $editm ->from->first_name;
$message = $update->message;
$mesid = $message->message_id;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$mtext = $message->text;
$forward = $update->message->forward_from;
$editm = $update->edited_message;
$fadmin = $message->from->id;
$step=file_get_contents("data/$fadmin/name.txt");
//bu yerni o'zgartirishingiz mumkin.

$update = json_decode(file_get_contents('php://input'));
$botim="";
$message = $update->message;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$text1 = $message->text;
$fadmin = $message->from->id;
$from = $message->from;
$id = $message->reply_to_message->from->id;
$message_id = $message->reply_to_message->message_id;
$from_user_first_name = $message->reply_to_message->from->first_name;
//Yangi odam id si
$new_chat_members = $message->new_chat_member->id;
$ism = $message->new_chat_member->first_name;
$username = $message->from->username;
$first_name = $message->from->first_name;
$is_bot = $message->new_chat_member->is_bot;
$inifo = description;
//yangi odam qo'shilishi
		if(stripos($mtext,"/start") !== false){
  $text = "😊 Assalomu alaykum , Men kanal infosiga soat qo'yaman.
  Faqat 1 ta kanalga!
Arzon narxda kanal infosiga soat qo'yib beraman. OZoDbeKkA yozing.";
  $a=json_encode(bot(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$text,
   'reply_markup'=>json_encode([
   'inline_keyboard'=>[
   
          [['text'=>'Bot developer','url'=>'https://telegram.me/BeK_2575252']],
          
          [['text'=>'Kanalimiz','url'=>'https://telegram.me/prikol_Uzb_vediyo']]
          
]
    ])
  ])));
}
       while(true){
   		$soat = date('H:i', strtotime('5 hour'));
   		$kun = date ('d.m.Y', strtotime('5 hour'));
   $inifo = "Hackerlikni oz bo'lsada o'rgatamiz\n➖➖➖➖➖➖➖➖➖➖\n🔴Kanal creatori: @Bek_2575252\n\n🔅Bizdan uzoqlashmang! \n 1�7 @prikol_Uzb_vediyo\n🔅Guruhimiz\n 1�7 @unversal_Uz_07\n\nSoat ⏄1�7: $soat\n➖➖➖➖➖➖➖➖➖➖\nSana 📆: $kun ";
   bot('setChatDescription',[
    'chat_id'=>$kanal,
    'description'=>$inifo,
  ]);
   		$time = date('H:i', strtotime('5 hour'));
   $ides = "Hackerlar bu kanalda hackerlikni oz bulsada orgatamz\n➖➖➖➖➖➖➖➖➖➖\n🔴Ishoning, biz bilan zerikmaysiz!\n\n🔅Creator: \n 1�7 @bEk_2575252\n🔅Guruhimiz\n 1�7 @unversal_Uz_07\n\n⏄1�7: $time\n➖➖➖➖➖➖➖➖➖➖\n📆:27.02.18";
   bot('setChatDescription',[
    'chat_id'=>$kanal2,
    'description'=>$ides,
  ]);
  }
          










