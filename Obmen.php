```php
<?php
ob_start();
error_reporting(0);
date_Default_timezone_set('Asia/Tashkent');
$soat = date("H:i",strtotime("0 hour"));
$sana = date("d.m.Y");

/* DAsturchi: @VisualCoderUz
Manba: @SupperCoderUz */

## Mualliflik huquqi hurmat qilinsin !

define("VisualCoderUz", '8017480371:AAELsrLtoA3ONP-8XTQxNJe5mmpvYZ-mxNU');
$admin = "5912710631";
$bot = bot('getme', ['bot'])->result->username;
$user = file_get_contents("tizim/user.txt");
$api = file_get_contents("tizim/api.txt");
$api_url = file_get_contents("tizim/api_url.txt");
$soat = date('H:i');
$sana = date("d.m.Y");

function joinchat($id)
{
global $mid;
$array = array("inline_keyboard");
$get = file_get_contents("tizim/kanal.txt");
$ex = explode("\n", $get);
if ($get == null) {
return true;
} else {
for ($i = 0; $i <= count($ex) - 1; $i++) {
$first_line = $ex[$i];
$first_ex = explode("-", $first_line);
$name = $first_ex[0];
$url = $first_ex[1];
$ret = bot("getChatMember", [
"chat_id" => "@$url",
"user_id" => $id,
]);
$stat = $ret->result->status;
if ((($stat == "creator" or $stat == "administrator" or $stat == "member"))) {
$array['inline_keyboard']["$i"][0]['text'] = "✅ " . $name;
$array['inline_keyboard']["$i"][0]['url'] = "https://t.me/$url";
} else {
$array['inline_keyboard']["$i"][0]['text'] = "❌ " . $name;
$array['inline_keyboard']["$i"][0]['url'] = "https://t.me/$url";
$uns = true;
}
}
$array['inline_keyboard']["$i"][0]['text'] = "🔄 Tekshirish";
$array['inline_keyboard']["$i"][0]['callback_data'] = "result";
if ($uns == true) {
bot('sendMessage', [
'chat_id' => $id,
'text' => "⚠️ <b>Botdan foydalanish uchun, quyidagi kanallarga obuna bo'ling:</b>",
'parse_mode' => 'html',
'disable_web_page_preview' => true,
'reply_markup' => json_encode($array),
]);
exit();
} else {
return true;
}
}
}

function getAdmin($chat)
{
$url = "https://api.telegram.org/bot" . VisualCoderUz . "/getChatAdministrators?chat_id=@" . $chat;
$result = file_get_contents($url);
$result = json_decode($result);
return $result->ok;
}

function deleteFolder($path)
{
if (is_dir($path) === true) {
$files = array_diff(scandir($path), array('.', '..'));
foreach ($files as $file)
deleteFolder(realpath($path) . '/' . $file);
return rmdir($path);
} else if (is_file($path) === true)
return unlink($path);
return false;
}

function bot($method, $datas = [])
{
$url = "https://api.telegram.org/bot" . VisualCoderUz . "/" . $method;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
$res = curl_exec($ch);
if (curl_error($ch)) {
var_dump(curl_error($ch));
} else {
return json_decode($res);
}
}

$visalcoderuz = json_decode(file_get_contents('php://input'));
$message = $visalcoderuz->message;
$cid = $message->chat->id;
$name = $message->chat->first_name;
$tx = $message->text;
$step = file_get_contents("step/$cid.step");
$mid = $message->message_id;
$type = $message->chat->type;
$text = $message->text;
$uid = $message->from->id;
$name = $message->from->first_name;
$familya = $message->from->last_name;
$bio = $message->from->about;
$username = $message->from->username;
$chat_id = $message->chat->id;
$message_id = $message->message_id;
$reply = $message->reply_to_message->text;
$fid = $message->from->id;
$nameru = "<a href='tg://user?id=$uid'>$name $familya</a>";

$callback = $visalcoderuz->callback_query;
$data = $visalcoderuz->callback_query->data;
$qid = $visalcoderuz->callback_query->id;
$id = $visalcoderuz->inline_query->id;
$query = $visalcoderuz->inline_query->query;
$query_id = $visalcoderuz->inline_query->from->id;
$cid2 = $visalcoderuz->callback_query->message->chat->id;
$mid2 = $visalcoderuz->callback_query->message->message_id;
$callfrid = $visalcoderuz->callback_query->from->id;
$callname = $visalcoderuz->callback_query->from->first_name;
$calluser = $visalcoderuz->callback_query->from->username;
$surname = $visalcoderuz->callback_query->from->last_name;
$about = $visalcoderuz->callback_query->from->about;
$nameuz = "<a href='tg://user?id=$callfrid'>$callname $surname</a>";

if (file_get_contents("tugma/key1.txt")) {
} else {
if (file_put_contents("tugma/key1.txt", '🔄 Valyuta ayirboshlash'));
}
if (file_get_contents("tugma/key2.txt")) {
} else {
if (file_put_contents("tugma/key2.txt", "🔰 Hamyonlar"));
}
if (file_get_contents("tugma/key3.txt")) {
} else {
if (file_put_contents("tugma/key3.txt", "📊 Valyuta kursi"));
}
if (file_get_contents("tugma/key4.txt")) {
} else {
if (file_put_contents("tugma/key4.txt", '📞 Aloqa'));
}
if (file_get_contents("tugma/key5.txt")) {
} else {
if (file_put_contents("tugma/key5.txt", "🔁 Almashuvlar"));
}

if (file_get_contents("tizim/user.txt")) {
} else {
if (file_put_contents("tizim/user.txt", 'Kiritilmagan'));
}
if (file_get_contents("tizim/promo.txt")) {
} else {
if (file_put_contents("tizim/promo.txt", 'Kiritilmagan'));
}
if (file_get_contents("tizim/uslug.txt")) {
} else {
if (file_put_contents("tizim/uslug.txt", '20'));
}
if (file_get_contents("tizim/valyuta.txt")) {
} else {
if (file_put_contents("tizim/valyuta.txt", "so'm"));
}

if (file_get_contents("tizim/reklama.txt")) {
} else {
if (file_put_contents("tizim/reklama.txt", "Yoqilgan"));
}

if (file_get_contents("tizim/holat.txt")) {
} else {
if (file_put_contents("tizim/holat.txt", "✔️"));
}
if (file_get_contents("tizim/support.txt")) {
} else {
if (file_put_contents("tizim/support.txt", "Bot 08:00 dan 00:00 gacha kun davomida ruchnoy rejimda ishlaydi, operator tomonidan 5 daqiqadan 10 daqiqagacha bajariladi."));
}

$key1 = file_get_contents("tugma/key1.txt");
$key2 = file_get_contents("tugma/key2.txt");
$key3 = file_get_contents("tugma/key3.txt");
$key4 = file_get_contents("tugma/key4.txt");
$key5 = file_get_contents("tugma/key5.txt");

$test = file_get_contents("step/test.txt");
$test1 = file_get_contents("step/test1.txt");
$test2 = file_get_contents("step/test2.txt");

$turi = file_get_contents("tizim/turi.txt");
$addition = file_get_contents("tizim/$test/addition.txt");
$wallet = file_get_contents("tizim/$test/wallet.txt");

$pul = file_get_contents("pul/$cid.txt");
$pul = file_get_contents("pul/$cid2.txt");
$odam = file_get_contents("odam/$cid.dat");
$odam = file_get_contents("odam/$cid2.dat");
$ban = file_get_contents("ban/$cid.txt");
$baza = file_get_contents("azo.dat");

$kod = file_get_contents("step/kod.txt");
$money = file_get_contents("step/money.txt");
$post = file_get_contents("step/mid.txt");

$valyuta = file_get_contents("tizim/valyuta.txt");
$referal = file_get_contents("tizim/uslug.txt");
$saved = file_get_contents("step/visualcoder.txt");
$promo = file_get_contents("tizim/promo.txt");
$kanal = file_get_contents("tizim/kanal.txt");
$status = file_get_contents("tizim/holat.txt");
$support = file_get_contents("tizim/support.txt");

$ref1 = file_get_contents("step/$cid2.id");
$ref2 = file_get_contents("step/$cid2.txt");

if (!file_exists("obmen/obmen.txt")) {
file_put_contents("obmen/obmen.txt", "0");
}

if (!file_exists("tizim/hamyon/$cid/uzcard.txt")) {
file_put_contents("tizim/hamyon/$cid/uzcard.txt", "kiritilmagan");
}
if (!file_exists("tizim/hamyon/$cid/humo.txt")) {
file_put_contents("tizim/hamyon/$cid/humo.txt", "kiritilmagan");
}
if (!file_exists("tizim/hamyon/$cid/qiwi_rub.txt")) {
file_put_contents("tizim/hamyon/$cid/qiwi_rub.txt", "kiritilmagan");
}
if (!file_exists("tizim/hamyon/$cid/qiwi_usd.txt")) {
file_put_contents("tizim/hamyon/$cid/qiwi_usd.txt", "kiritilmagan");
}
if (!file_exists("tizim/hamyon/$cid/payeer_rub.txt")) {
file_put_contents("tizim/hamyon/$cid/payeer_rub.txt", "kiritilmagan");
}
if (!file_exists("tizim/hamyon/$cid/payeer_usd.txt")) {
file_put_contents("tizim/hamyon/$cid/payeer_usd.txt", "kiritilmagan");
}
if (!file_exists("tizim/hamyon/$cid/wmz_rub.txt")) {
file_put_contents("tizim/hamyon/$cid/wmz_rub.txt", "kiritilmagan");
}
if (!file_exists("tizim/hamyon/$cid/sberbank_rub.txt")) {
file_put_contents("tizim/hamyon/$cid/sberbank_rub.txt", "kiritilmagan");
}
if (!file_exists("tizim/hamyon/$cid/tinkoff_rub.txt")) {
file_put_contents("tizim/hamyon/$cid/tinkoff_rub.txt", "kiritilmagan");
}

$uzcard_set = file_get_contents("tizim/hamyon/$cid/uzcard.txt");
$humo_set = file_get_contents("tizim/hamyon/$cid/humo.txt");
$qiwi_set = file_get_contents("tizim/hamyon/$cid/qiwi_rub.txt");
$qiwiusd_set = file_get_contents("tizim/hamyon/$cid/qiwi_usd.txt");
$payeer_set = file_get_contents("tizim/hamyon/$cid/payeer_rub.txt");
$payeerusd_set = file_get_contents("tizim/hamyon/$cid/payeer_usd.txt");
$wmzrub_set = file_get_contents("tizim/hamyon/$cid/wmz_rub.txt");
$sberbankrub_set = file_get_contents("tizim/hamyon/$cid/sberbank_rub.txt");
$tinkoffrub_set = file_get_contents("tizim/hamyon/$cid/tinkoff_rub.txt");

if (!file_exists("tizim/hamyon/raqam/$admin/uzcard.txt")) {
file_put_contents("tizim/hamyon/raqam/$admin/uzcard.txt", "kiritilmagan");
}
if (!file_exists("tizim/hamyon/raqam/$admin/humo.txt")) {
file_put_contents("tizim/hamyon/raqam/$admin/humo.txt", "kiritilmagan");
}
if (!file_exists("tizim/hamyon/raqam/$admin/qiwi_rub.txt")) {
file_put_contents("tizim/hamyon/raqam/$admin/qiwi_rub.txt", "kiritilmagan");
}
if (!file_exists("tizim/hamyon/raqam/$admin/qiwi_usd.txt")) {
file_put_contents("tizim/hamyon/raqam/$admin/qiwi_usd.txt", "kiritilmagan");
}
if (!file_exists("tizim/hamyon/raqam/$admin/payeer_usd.txt")) {
file_put_contents("tizim/hamyon/raqam/$admin/payeer_usd.txt", "kiritilmagan");
}
if (!file_exists("tizim/hamyon/raqam/$admin/payeer_rub.txt")) {
file_put_contents("tizim/hamyon/raqam/$admin/payeer_rub.txt", "kiritilmagan");
}
if (!file_exists("tizim/hamyon/raqam/$admin/wmz_rub.txt")) {
file_put_contents("tizim/hamyon/raqam/$admin/wmz_rub.txt", "kiritilmagan");
}
if (!file_exists("tizim/hamyon/raqam/$admin/sberbank_rub.txt")) {
file_put_contents("tizim/hamyon/raqam/$admin/sberbank_rub.txt", "kiritilmagan");
}
if (!file_exists("tizim/hamyon/raqam/$admin/tinkoff_rub.txt")) {
file_put_contents("tizim/hamyon/raqam/$admin/tinkoff_rub.txt", "kiritilmagan");
}

$uzcard_adset = file_get_contents("tizim/hamyon/raqam/$admin/uzcard.txt");
$humo_adset = file_get_contents("tizim/hamyon/raqam/$admin/humo.txt");
$qiwiusd_adset = file_get_contents("tizim/hamyon/raqam/$admin/qiwi_usd.txt");
$qiwirub_adset = file_get_contents("tizim/hamyon/raqam/$admin/qiwi_rub.txt");
$payerrub_adset = file_get_contents("tizim/hamyon/raqam/$admin/payeer_rub.txt");
$payyerusd_adset = file_get_contents("tizim/hamyon/raqam/$admin/payeer_usd.txt");
$wmzrub_adset = file_get_contents("tizim/hamyon/raqam/$admin/wmz_rub.txt");
$sberbankrub_adset = file_get_contents("tizim/hamyon/raqam/$admin/sberbank_rub.txt");
$tinkoffrub_adset = file_get_contents("tizim/hamyon/raqam/$admin/tinkoff_rub.txt");

if (!file_exists("tizim/kurs/sotish_rub.txt")) {
file_put_contents("tizim/kurs/sotish_rub.txt", "140.00");
}
if (!file_exists("tizim/kurs/sotish_usd.txt")) {
file_put_contents("tizim/kurs/sotish_usd.txt", "11575.00");
}
if (!file_exists("tizim/kurs/sotib_rub.txt")) {
file_put_contents("tizim/kurs/sotib_rub.txt", "80");
}
if (!file_exists("tizim/kurs/sotib_usd.txt")) {
file_put_contents("tizim/kurs/sotib_usd.txt", "11520.00");
}

$sotish_rub = file_get_contents("tizim/kurs/sotish_rub.txt");
$sotish_usd = file_get_contents("tizim/kurs/sotish_usd.txt");
$sotib_rub = file_get_contents("tizim/kurs/sotib_rub.txt");
$sotib_usd = file_get_contents("tizim/kurs/sotib_usd.txt");

mkdir("ban");
mkdir("step");
mkdir("tizim");
mkdir("tizim/hamyon");
mkdir("tizim/hamyon/raqam");
mkdir("tizim/hamyon/raqam/$admin");
mkdir("tizim/hamyon/$cid");
mkdir("tizim/kurs");
mkdir("odam");
mkdir("tugma");
mkdir("obmen");
mkdir("obmen/$cid");

$obmenm = file_get_contents("obmen/$cid/miqdor.txt");
$obmenf = file_get_contents("obmen/$cid/fozimiqdor.txt");
$obmenid = file_get_contents("obmen/$cid/obid.txt");


$panel = json_encode([
'resize_keyboard' => true,
'keyboard' => [
[['text' => "⚙ Asosiy sozlamalar"]],
[['text' => "📊 Statistika"], ['text' => "✉ Xabar yuborish"]],
[['text' => "🔎 Foydalanuvchini boshqarish"]],
[['text' => "🎛 Tugmalar"],['text' => "🔄 Almashuv holati"]],
[['text' => "◀️ Orqaga"]],
]
]);

$asosiy = json_encode([
'resize_keyboard' => true,
'keyboard' => [
[['text' => "*️⃣ Birlamchi sozlamalar"]],
[['text' => "📢 Kanallar"], ['text' => "🗄 Boshqarish"]],
]
]);

$menu = json_encode([
'resize_keyboard' => true,
'keyboard' => [
[['text' => "$key1"]],
[['text' => "$key2"], ['text' => "$key3"]],
[['text' => "$key4"], ['text' => "$key5"]],
]
]);

$menus = json_encode([
'resize_keyboard' => true,
'keyboard' => [
[['text' => "$key1"]],
[['text' => "$key2"], ['text' => "$key3"]],
[['text' => "$key4"], ['text' => "$key5"]],
[['text' => "🗄 Boshqarish"]],
]
]);

$back = json_encode([
'resize_keyboard' => true,
'keyboard' => [
[['text' => "◀️ Orqaga"]],
]
]);

$boshqarish = json_encode([
'resize_keyboard' => true,
'keyboard' => [
[['text' => "🗄 Boshqarish"]],
]
]);

if ($text) {
if ($ban == "ban") {
exit();
} else {
}
}

if ($data) {
$ban = file_get_contents("ban/$cid2.txt");
if ($ban == "ban") {
exit();
} else {
}
}

if (isset($message)) {
$baza = file_get_contents("azo.dat");
if (mb_stripos($baza, $chat_id) !== false) {
} else {
$txt = "\n$chat_id";
$file = fopen("azo.dat", "a");
fwrite($file, $txt);
fclose($file);
}
}

if (isset($message)) {
$pul = file_get_contents("pul/$cid.txt");
$mm = $pul + 0;
file_put_contents("pul/$cid.txt", "$mm");
$odam = file_get_contents("odam/$cid.dat");
$kkd = $odam + 0;
file_put_contents("odam/$cid.dat", "$kkd");
}

if ($text == "$key2" and joinchat($cid) == "true") {
bot('sendMessage', [
'chat_id' => $cid,
'text' => "<b>💳 Sizning hamyonlaringiz:</b>

<b>📌UZCARD $valyuta: </b>
<code>$uzcard_set</code>

<b>📌HUMO $valyuta: </b>
<code>$humo_set</code>

<b>📌PAYEER RUB:</b>
<code>$payeer_set</code>

<b>📌PAYEER USD: </b>
<code>$payeerusd_set</code>

<b>📌QIWI RUB: </b>
<code>$qiwi_set</code>

<b>📌QIWI USD: </b>
<code>$qiwiusd_set</code>

<b>📌WMZ RUB: </b>
<code>$wmzrub_set</code>

<b>📌Сбербанк Rub: </b>
<code>$sberbankrub_set</code>

<b>📌Тинькофф Rub: </b>
<code>$tinkoffrub_set</code>",
'parse_mode' => "html",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "➕ UZCARD", 'callback_data' => "set_uzcard"], ['text' => "➕ HUMO", 'callback_data' => "set_humo"]],
[['text' => "➕ PAYEER RUB", 'callback_data' => "set_payy"], ['text' => "➕ PAYEER USD", 'callback_data' => "set_payyusd"]],
[['text' => "➕ QIWI RUB", 'callback_data' => "set_qiwi"], ['text' => "➕ QIWI USD", 'callback_data' => "set_qiwiusd"]],
[['text' => "➕ WMZ RUB", 'callback_data' => "set_wmzrub"], ['text' => "➕ Сбербанк RUB", 'callback_data' => "set_sberbankrub"]],
[['text' => "➕ Тинькофф RUB", 'callback_data' => "set_tinkoffrub"]],
]
])
]);
}

if ($data == "set_tinkoffrub") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b>Yangi qiymatni yuboring:</b>",
'parse_mode' => 'html',
'reply_markup' => $back
]);
file_put_contents("step/$cid2.step", 'set_tinkoffrub');
exit();
}

if ($step == "set_tinkoffrub") {
if (is_numeric($text)) {
file_put_contents("tizim/hamyon/$cid/tinkoff_rub.txt", $text);
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Qabul qilindi!</b>",
'parse_mode' => 'html',
'reply_markup' => $menu,
]);
unlink("step/$cid.step");
exit();
} else {
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>⚠️ Faqat raqamlardan foydalaning!</b>",
'parse_mode' => 'html',
]);
}
}

if ($data == "set_sberbankrub") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b>Yangi qiymatni yuboring:</b>",
'parse_mode' => 'html',
'reply_markup' => $back
]);
file_put_contents("step/$cid2.step", 'set_sberbankrub');
exit();
}

if ($step == "set_sberbankrub") {
if (is_numeric($text)) {
file_put_contents("tizim/hamyon/$cid/sberbank_rub.txt", $text);
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Qabul qilindi!</b>",
'parse_mode' => 'html',
'reply_markup' => $menu,
]);
unlink("step/$cid.step");
exit();
} else {
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>⚠️ Faqat raqamlardan foydalaning!</b>",
'parse_mode' => 'html',
]);
}
}

if ($data == "set_wmzrub") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b>Yangi qiymatni yuboring:</b>",
'parse_mode' => 'html',
'reply_markup' => $back
]);
file_put_contents("step/$cid2.step", 'set_wmzrub');
exit();
}

if ($step == "set_wmzrub") {
if (is_numeric($text)) {
file_put_contents("tizim/hamyon/$cid/wmz_rub.txt", $text);
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Qabul qilindi!</b>",
'parse_mode' => 'html',
'reply_markup' => $menu,
]);
unlink("step/$cid.step");
exit();
} else {
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>⚠️ Faqat raqamlardan foydalaning!</b>",
'parse_mode' => 'html',
]);
}
}

if ($data == "set_qiwiusd") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b>Yangi qiymatni yuboring:</b>",
'parse_mode' => 'html',
'reply_markup' => $back
]);
file_put_contents("step/$cid2.step", 'set_qiwiusd');
exit();
}

if ($step == "set_qiwiusd") {
if (is_numeric($text)) {
file_put_contents("tizim/hamyon/$cid/qiwi_usd.txt", $text);
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Qabul qilindi!</b>",
'parse_mode' => 'html',
'reply_markup' => $menu,
]);
unlink("step/$cid.step");
exit();
} else {
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>⚠️ Faqat raqamlardan foydalaning!</b>",
'parse_mode' => 'html',
]);
}
}

if ($data == "set_qiwi") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b>Yangi qiymatni yuboring:</b>",
'parse_mode' => 'html',
'reply_markup' => $back
]);
file_put_contents("step/$cid2.step", 'set_qiwi');
exit();
}

if ($step == "set_qiwi") {
if (is_numeric($text)) {
file_put_contents("tizim/hamyon/$cid/qiwi_rub.txt", $text);
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Qabul qilindi!</b>",
'parse_mode' => 'html',
'reply_markup' => $menu,
]);
unlink("step/$cid.step");
exit();
} else {
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>⚠️ Faqat raqamlardan foydalaning!</b>",
'parse_mode' => 'html',
]);
}
}

if ($data == "set_payyusd") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b>Yangi qiymatni yuboring:</b>",
'parse_mode' => 'html',
'reply_markup' => $back
]);
file_put_contents("step/$cid2.step", 'set_payyusd');
exit();
}

if ($step == "set_payyusd") {
if (is_numeric($text)) {
file_put_contents("tizim/hamyon/$cid/payeer_usd.txt", $text);
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Qabul qilindi!</b>",
'parse_mode' => 'html',
'reply_markup' => $menu,
]);
unlink("step/$cid.step");
exit();
} else {
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>⚠️ Faqat raqamlardan foydalaning!</b>",
'parse_mode' => 'html',
]);
}
}

if ($data == "set_payy") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b>Yangi qiymatni yuboring:</b>",
'parse_mode' => 'html',
'reply_markup' => $back
]);
file_put_contents("step/$cid2.step", 'set_payy');
exit();
}

if ($step == "set_payy") {
if (is_numeric($text)) {
file_put_contents("tizim/hamyon/$cid/payeer_rub.txt", $text);
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Qabul qilindi!</b>",
'parse_mode' => 'html',
'reply_markup' => $menu,
]);
unlink("step/$cid.step");
exit();
} else {
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>⚠️ Faqat raqamlardan foydalaning!</b>",
'parse_mode' => 'html',
]);
}
}

if ($data == "set_uzcard") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b>Yangi qiymatni yuboring:</b>",
'parse_mode' => 'html',
'reply_markup' => $back
]);
file_put_contents("step/$cid2.step", 'set_uzcard');
exit();
}

if ($step == "set_uzcard") {
if (is_numeric($text)) {
file_put_contents("tizim/hamyon/$cid/uzcard.txt", $text);
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Qabul qilindi!</b>",
'parse_mode' => 'html',
'reply_markup' => $menu,
]);
unlink("step/$cid.step");
exit();
} else {
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>⚠️ Faqat raqamlardan foydalaning!</b>",
'parse_mode' => 'html',
]);
}
}

if ($data == "set_humo") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b>Yangi qiymatni yuboring:</b>",
'parse_mode' => 'html',
'reply_markup' => $back
]);
file_put_contents("step/$cid2.step", 'set_humo');
exit();
}

if ($step == "set_humo") {
if (is_numeric($text)) {
file_put_contents("tizim/hamyon/$cid/humo.txt", $text);
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Qabul qilindi!</b>",
'parse_mode' => 'html',
'reply_markup' => $menu,
]);
unlink("step/$cid.step");
exit();
} else {
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>⚠️ Faqat raqamlardan foydalaning!</b>",
'parse_mode' => 'html',
]);
}
}


if ($text == "/start" and joinchat($cid) == true) {
if ($cid == $admin) {
bot('SendMessage', [
'chat_id' => $admin,
'text' => "💎 <b>Salom $nameru!

@$bot ga xush kelibsiz!</b>",
'parse_mode' => 'html',
'reply_markup' => $menus
]);
exit();
} else {
bot('SendMessage', [
'chat_id' => $cid,
'text' => "💎 <b>Salom $nameru!

@$bot ga xush kelibsiz!</b>",
'parse_mode' => 'html',
'reply_markup' => $menu
]);
exit();
}
}

if ($data == "result") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "✅ <b>Obunangiz tasdiqlandi. Bosh menyudasiz.</b>",
'parse_mode' => 'html',
'reply_markup' => $menu,
]);
}


if ($text == "◀️ Orqaga") {
if ($cid == $admin) {
bot('SendMessage', [
'chat_id' => $admin,
'text' => "<b>🖥 Asosiy menyuga qaytdingiz.</b>",
'parse_mode' => 'html',
'reply_markup' => $menus,
]);
unlink("step/$cid.step");
unlink("step/visualcoder.txt");
exit();
} else {
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>🖥 Asosiy menyuga qaytdingiz.</b>",
'parse_mode' => 'html',
'reply_markup' => $menu
]);
unlink("step/$cid.step");
unlink("step/visualcoder.txt");
exit();
}
}

if ($text == "$key3" and joinchat($cid) == true) {
$json = json_decode(file_get_contents("https://cbu.uz/oz/arkhiv-kursov-valyut/json/"), true);
$usd = $json[0]['Rate'];
$rub = $json[2]['Rate'];
bot('SendMessage', [
'chat_id' => $cid,
'text' => "📉 Sotish kursi | Курс Продажи: 
1 RUB = <code>$sotish_rub</code> $valyuta 
1 USD = <code>$sotish_usd</code> $valyuta 

📉 Sotib olish kursi | Курс Покупки: 
1 RUB = <code>$sotib_rub</code> $valyuta 
1 USD = <code>$sotib_usd</code> $valyuta ",
'parse_mode' => 'html',
'reply_markup' => json_encode([
'inline_keyboard' => []
])
]);
exit();
}

if ($text == "$key1" and joinchat($cid) == true) {
$holat = file_get_contents("tizim/holat.txt");
if ($holat=="❌") {
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>⚠️ Almashinuv jarayonlari vaqtinchalik bloklangan.</b>",
'parse_mode' => 'html',
]);
exit();
} else {
bot('SendMessage', [
'chat_id' => $chat_id,
'text' => "<b>🔼 Berish va 🔽 Olish valyutalarini tanlang:</b>",
'parse_mode' => 'html',
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "🔼 UZCARD", 'callback_data' => "uzcard"], ['text' => "🔽 UZCARD", 'callback_data' => "error"],],
[['text' => "🔼 HUMO", 'callback_data' => "humor_card"], ['text' => "🔽 HUMO", 'callback_data' => "error"],],
[['text' => "🔼 QIWI USD", 'callback_data' => "qiwi_usd"], ['text' => "🔽 QIWI USD", 'callback_data' => "error"],],
[['text' => "🔼 QIWI RUB", 'callback_data' => "qiwi_rub"], ['text' => "🔽 QIWI RUB", 'callback_data' => "error"],],
[['text' => "🔼 PAYEER USD", 'callback_data' => "payeer_usd"], ['text' => "🔽 PAYEER USD", 'callback_data' => "error"],],
[['text' => "🔼 PAYEER RUB", 'callback_data' => "payer_rub"], ['text' => "🔽 PAYEER RUB", 'callback_data' => "error"],],
[['text' => "🔼 WMZ RUB", 'callback_data' => "wmz_rub"], ['text' => "🔽 WMZ RUB", 'callback_data' => "error"],],
[['text' => "🔼 Сбербанк RUB", 'callback_data' => "sberbank_rub"], ['text' => "🔽 Сбербанк RUB", 'callback_data' => "error"],],
[['text' => "🔼 Тинькофф RUB", 'callback_data' => "tinkoff_rub"], ['text' => "🔽 Тинькофф RUB", 'callback_data' => "error"],],
]
])
]);
exit();
}
}

if ($data == "servis") {
$holat = file_get_contents("tizim/holat.txt");
if ($holat=="❌") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b>⚠️ Almashinuv jarayonlari vaqtinchalik bloklangan.</b>",
'parse_mode' => 'html',
]);
exit();
} else {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b>🔼 Berish va 🔽 Olish valyutalarini tanlang:</b>",
'parse_mode' => 'html',
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "🔼 UZCARD", 'callback_data' => "uzcard"], ['text' => "🔽 UZCARD", 'callback_data' => "error"],],
[['text' => "🔼 HUMO", 'callback_data' => "humor_card"], ['text' => "🔽 HUMO", 'callback_data' => "error"],],
[['text' => "🔼 QIWI USD", 'callback_data' => "qiwi_usd"], ['text' => "🔽 QIWI USD", 'callback_data' => "error"],],
[['text' => "🔼 QIWI RUB", 'callback_data' => "qiwi_rub"], ['text' => "🔽 QIWI RUB", 'callback_data' => "error"],],
[['text' => "🔼 PAYEER USD", 'callback_data' => "payeer_usd"], ['text' => "🔽 PAYEER USD", 'callback_data' => "error"],],
[['text' => "🔼 PAYEER RUB", 'callback_data' => "payer_rub"], ['text' => "🔽 PAYEER RUB", 'callback_data' => "error"],],
[['text' => "🔼 WMZ RUB", 'callback_data' => "wmz_rub"], ['text' => "🔽 WMZ RUB", 'callback_data' => "error"],],
[['text' => "🔼 Сбербанк RUB", 'callback_data' => "sberbank_rub"], ['text' => "🔽 Сбербанк RUB", 'callback_data' => "error"],],
[['text' => "🔼 Тинькофф RUB", 'callback_data' => "tinkoff_rub"], ['text' => "🔽 Тинькофф RUB", 'callback_data' => "error"],],
]
])
]);
exit();
}
}

if ($data == "error") {
bot('answerCallbackQuery', [
'callback_query_id' => $qid,
'text' => "⚠️ Oldin berishni tanlang.",
'show_alert' => true,
]);
}

if ($data == "error1") {
bot('answerCallbackQuery', [
'callback_query_id' => $qid,
'text' => "⚠️ Bir xil hamyonga ayirboshlash mumkin emas..",
'show_alert' => true,
]);
}


if ($data == "uzcard") {
$holat = file_get_contents("tizim/hamyon/$cid2/uzcard.txt");
if ($holat=="kiritilmagan") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b><i>⚠️ Siz tanlagan yo'nalishdan boshqa yo'nalishga almashuvni amalga oshirish uchun oldin o'z hamyon raqamlaringizni '$key2' bo'limiga kiriting.</i></b>",
'parse_mode' => 'html',
]);
exit();
} else {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b>🔼 Berish va 🔽 Olish valyutalarini tanlang:</b>",
'parse_mode' => 'html',
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "✅ UZCARD", 'callback_data' => "uzcard"], ['text' => "🔽 UZCARD", 'callback_data' => "error1"],],
[['text' => "🔼 HUMO", 'callback_data' => "humor_card"], ['text' => "🔽 HUMO", 'callback_data' => "obcard-uzcard-humo"],],
[['text' => "🔼 QIWI USD", 'callback_data' => "qiwi_usd"], ['text' => "🔽 QIWI USD", 'callback_data' => "obcard-uzcard-qiwi_usd"],],
[['text' => "🔼 QIWI RUB", 'callback_data' => "qiwi_rub"], ['text' => "🔽 QIWI RUB", 'callback_data' => "obcard-uzcard-qiwi_rub"],],
[['text' => "🔼 PAYEER USD", 'callback_data' => "payeer_usd"], ['text' => "🔽 PAYEER USD", 'callback_data' => "obcard-uzcard-payeer_usd"],],
[['text' => "🔼 PAYEER RUB", 'callback_data' => "payer_rub"], ['text' => "🔽 PAYEER RUB", 'callback_data' => "obcard-uzcard-payeer_rub"],],
[['text' => "🔼 WMZ RUB", 'callback_data' => "wmz_rub"], ['text' => "🔽 WMZ RUB", 'callback_data' => "obcard-uzcard-wmz_rub"],],
[['text' => "🔼 Сбербанк RUB", 'callback_data' => "sberbank_rub"], ['text' => "🔽 Сбербанк RUB", 'callback_data' => "obcard-uzcard-sberbank_rub"],],
[['text' => "🔼 Тинькофф RUB", 'callback_data' => "tinkoff_rub"], ['text' => "🔽 Тинькофф RUB", 'callback_data' => "obcard-uzcard-tinkoff_rub"],],
]
])
]);
exit();
}
}
if ($data == "humor_card") {
$holat = file_get_contents("tizim/hamyon/$cid2/humo.txt");
if ($holat=="kiritilmagan") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b><i>⚠️ Siz tanlagan yo'nalishdan boshqa yo'nalishga almashuvni amalga oshirish uchun oldin o'z hamyon raqamlaringizni '$key2' bo'limiga kiriting.</i></b>",
'parse_mode' => 'html',
]);
exit();
} else {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b>🔼 Berish va 🔽 Olish valyutalarini tanlang:</b>",
'parse_mode' => 'html',
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "🔼 UZCARD", 'callback_data' => "uzcard"], ['text' => "🔽 UZCARD", 'callback_data' => "obcard-humo-uzcard"],],
[['text' => "✅ HUMO", 'callback_data' => "humor_card"], ['text' => "🔽 HUMO", 'callback_data' => "error1"],],
[['text' => "🔼 QIWI USD", 'callback_data' => "qiwi_usd"], ['text' => "🔽 QIWI USD", 'callback_data' => "obcard-humo-qiwi_usd"],],
[['text' => "🔼 QIWI RUB", 'callback_data' => "qiwi_rub"], ['text' => "🔽 QIWI RUB", 'callback_data' => "obcard-humo-qiwi_rub"],],
[['text' => "🔼 PAYEER USD", 'callback_data' => "payeer_usd"], ['text' => "🔽 PAYEER USD", 'callback_data' => "obcard-humo-payeer_usd"],],
[['text' => "🔼 PAYEER RUB", 'callback_data' => "payer_rub"], ['text' => "🔽 PAYEER RUB", 'callback_data' => "obcard-humo-payeer_rub"],],
[['text' => "🔼 WMZ RUB", 'callback_data' => "wmz_rub"], ['text' => "🔽 WMZ RUB", 'callback_data' => "obcard-humo-wmz_rub"],],
[['text' => "🔼 Сбербанк RUB", 'callback_data' => "sberbank_rub"], ['text' => "🔽 Сбербанк RUB", 'callback_data' => "obcard-humo-sberbank_rub"],],
[['text' => "🔼 Тинькофф RUB", 'callback_data' => "tinkoff_rub"], ['text' => "🔽 Тинькофф RUB", 'callback_data' => "obcard-humo-tinkoff_rub"],],
]
])
]);
exit();
}
}

if ($data == "qiwi_usd") {
$holat = file_get_contents("tizim/hamyon/$cid2/qiwi_usd.txt");
if ($holat=="kiritilmagan") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b><i>⚠️ Siz tanlagan yo'nalishdan boshqa yo'nalishga almashuvni amalga oshirish uchun oldin o'z hamyon raqamlaringizni '$key2' bo'limiga kiriting.</i></b>",
'parse_mode' => 'html',
]);
exit();
} else {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b>🔼 Berish va 🔽 Olish valyutalarini tanlang:</b>",
'parse_mode' => 'html',
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "🔼 UZCARD", 'callback_data' => "uzcard"], ['text' => "🔽 UZCARD", 'callback_data' => "obcard-qiwi_usd-uzcard"],],
[['text' => "🔼 HUMO", 'callback_data' => "humor_card"], ['text' => "🔽 HUMO", 'callback_data' => "obcard-qiwi_usd-humo"],],
[['text' => "✅ QIWI USD", 'callback_data' => "qiwi_usd"], ['text' => "🔽 QIWI USD", 'callback_data' => "error1"],],
[['text' => "🔼 QIWI RUB", 'callback_data' => "qiwi_rub"], ['text' => "🔽 QIWI RUB", 'callback_data' => "obcard-qiwi_usd-qiwi_rub"],],
[['text' => "🔼 PAYEER USD", 'callback_data' => "payeer_usd"], ['text' => "🔽 PAYEER USD", 'callback_data' => "obcard-qiwi_usd-payeer_usd"],],
[['text' => "🔼 PAYEER RUB", 'callback_data' => "payer_rub"], ['text' => "🔽 PAYEER RUB", 'callback_data' => "obcard-qiwi_usd-payeer_rub"],],
[['text' => "🔼 WMZ RUB", 'callback_data' => "wmz_rub"], ['text' => "🔽 WMZ RUB", 'callback_data' => "obcard-qiwi_usd-wmz_rub"],],
[['text' => "🔼 Сбербанк RUB", 'callback_data' => "sberbank_rub"], ['text' => "🔽 Сбербанк RUB", 'callback_data' => "obcard-qiwi_usd-sberbank_rub"],],
[['text' => "🔼 Тинькофф RUB", 'callback_data' => "tinkoff_rub"], ['text' => "🔽 Тинькофф RUB", 'callback_data' => "obcard-qiwi_usd-tinkoff_rub"],],
]
])
]);
exit();
}
}
if ($data == "qiwi_rub") {
$holat = file_get_contents("tizim/hamyon/$cid2/qiwi_rub.txt");
if ($holat=="kiritilmagan") {
    bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b><i>⚠️ Siz tanlagan yo'nalishdan boshqa yo'nalishga almashuvni amalga oshirish uchun oldin o'z hamyon raqamlaringizni '$key2' bo'limiga kiriting.</i></b>",
'parse_mode' => 'html',
]);
exit();
} else {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b>🔼 Berish va 🔽 Olish valyutalarini tanlang:</b>",
'parse_mode' => 'html',
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "🔼 UZCARD", 'callback_data' => "uzcard"], ['text' => "🔽 UZCARD", 'callback_data' => "obcard-qiwi_rub-uzcard"],],
[['text' => "🔼 HUMO", 'callback_data' => "humor_card"], ['text' => "🔽 HUMO", 'callback_data' => "obcard-qiwi_rub-humo"],],
[['text' => "🔼 QIWI USD", 'callback_data' => "qiwi_usd"], ['text' => "🔽 QIWI USD", 'callback_data' => "obcard-qiwi_rub-qiwi_usd"],],
[['text' => "✅ QIWI RUB", 'callback_data' => "qiwi_rub"], ['text' => "🔽 QIWI RUB", 'callback_data' => "error1"],],
[['text' => "🔼 PAYEER USD", 'callback_data' => "payeer_usd"], ['text' => "🔽 PAYEER USD", 'callback_data' => "obcard-qiwi_rub-payeer_usd"],],
[['text' => "🔼 PAYEER RUB", 'callback_data' => "payer_rub"], ['text' => "🔽 PAYEER RUB", 'callback_data' => "obcard-qiwi_rub-payeer_rub"],],
[['text' => "🔼 WMZ RUB", 'callback_data' => "wmz_rub"], ['text' => "🔽 WMZ RUB", 'callback_data' => "obcard-qiwi_rub-wmz_rub"],],
[['text' => "🔼 Сбербанк RUB", 'callback_data' => "sberbank_rub"], ['text' => "🔽 Сбербанк RUB", 'callback_data' => "obcard-qiwi_rub-sberbank_rub"],],
[['text' => "🔼 Тинькофф RUB", 'callback_data' => "tinkoff_rub"], ['text' => "🔽 Тинькофф RUB", 'callback_data' => "obcard-qiwi_rub-tinkoff_rub"],],
]
])
]);
exit();
}
}
if ($data == "payeer_usd") {
$holat = file_get_contents("tizim/hamyon/$cid2/payeer_usd.txt");
if ($holat=="kiritilmagan") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b><i>⚠️ Siz tanlagan yo'nalishdan boshqa yo'nalishga almashuvni amalga oshirish uchun oldin o'z hamyon raqamlaringizni '$key2' bo'limiga kiriting.</i></b>",
'parse_mode' => 'html',
]);
exit();
} else {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b>🔼 Berish va 🔽 Olish valyutalarini tanlang:</b>",
'parse_mode' => 'html',
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "🔼 UZCARD", 'callback_data' => "uzcard"], ['text' => "🔽 UZCARD", 'callback_data' => "obcard-payeer_usd-uzcard"],],
[['text' => "🔼 HUMO", 'callback_data' => "humor_card"], ['text' => "🔽 HUMO", 'callback_data' => "obcard-payeer_usd-humo"],],
[['text' => "🔼 QIWI USD", 'callback_data' => "qiwi_usd"], ['text' => "🔽 QIWI USD", 'callback_data' => "obcard-payeer_usd-qiwi_usd"],],
[['text' => "🔼 QIWI RUB", 'callback_data' => "qiwi_rub"], ['text' => "🔽 QIWI RUB", 'callback_data' => "obcard-payeer_usd-qiwi_rub"],],
[['text' => "✅ PAYEER USD", 'callback_data' => "payeer_usd"], ['text' => "🔽 PAYEER USD", 'callback_data' => "error1"],],
[['text' => "🔼 PAYEER RUB", 'callback_data' => "payer_rub"], ['text' => "🔽 PAYEER RUB", 'callback_data' => "obcard-payeer_usd-payeer_rub"],],
[['text' => "🔼 WMZ RUB", 'callback_data' => "wmz_rub"], ['text' => "🔽 WMZ RUB", 'callback_data' => "obcard-payeer_usd-wmz_rub"],],
[['text' => "🔼 Сбербанк RUB", 'callback_data' => "sberbank_rub"], ['text' => "🔽 Сбербанк RUB", 'callback_data' => "obcard-payeer_usd-sberbank_rub"],],
[['text' => "🔼 Тинькофф RUB", 'callback_data' => "tinkoff_rub"], ['text' => "🔽 Тинькофф RUB", 'callback_data' => "obcard-payeer_usd-tinkoff_rub"],],
]
])
]);
exit();
}
}
if ($data == "payer_rub") {
$holat = file_get_contents("tizim/hamyon/$cid2/payeer_rub.txt");
if ($holat=="kiritilmagan") {
    bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b><i>⚠️ Siz tanlagan yo'nalishdan boshqa yo'nalishga almashuvni amalga oshirish uchun oldin o'z hamyon raqamlaringizni '$key2' bo'limiga kiriting.</i></b>",
'parse_mode' => 'html',
]);
exit();
} else {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b>🔼 Berish va 🔽 Olish valyutalarini tanlang:</b>",
'parse_mode' => 'html',
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "🔼 UZCARD", 'callback_data' => "uzcard"], ['text' => "🔽 UZCARD", 'callback_data' => "obcard-payeer_rub-uzcard"],],
[['text' => "🔼 HUMO", 'callback_data' => "humor_card"], ['text' => "🔽 HUMO", 'callback_data' => "obcard-payeer_rub-humo"],],
[['text' => "🔼 QIWI USD", 'callback_data' => "qiwi_usd"], ['text' => "🔽 QIWI USD", 'callback_data' => "obcard-payeer_rub-qiwi_usd"],],
[['text' => "🔼 QIWI RUB", 'callback_data' => "qiwi_rub"], ['text' => "🔽 QIWI RUB", 'callback_data' => "obcard-payeer_rub-qiwi_rub"],],
[['text' => "🔼 PAYEER USD", 'callback_data' => "payeer_usd"], ['text' => "🔽 PAYEER USD", 'callback_data' => "obcard-payeer_rub-payeer_usd"],],
[['text' => "✅ PAYEER RUB", 'callback_data' => "payer_rub"], ['text' => "🔽 PAYEER RUB", 'callback_data' => "error1"],],
[['text' => "🔼 WMZ RUB", 'callback_data' => "wmz_rub"], ['text' => "🔽 WMZ RUB", 'callback_data' => "obcard-payeer_rub-wmz_rub"],],
[['text' => "🔼 Сбербанк RUB", 'callback_data' => "sberbank_rub"], ['text' => "🔽 Сбербанк RUB", 'callback_data' => "obcard-payeer_rub-sberbank_rub"],],
[['text' => "🔼 Тинькофф RUB", 'callback_data' => "tinkoff_rub"], ['text' => "🔽 Тинькофф RUB", 'callback_data' => "obcard-payeer_rub-tinkoff_rub"],],
]
])
]);
exit();
}
}
if ($data == "wmz_rub") {
$holat = file_get_contents("tizim/hamyon/$cid2/wmz_rub.txt");
if ($holat=="kiritilmagan") {
    bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b><i>⚠️ Siz tanlagan yo'nalishdan boshqa yo'nalishga almashuvni amalga oshirish uchun oldin o'z hamyon raqamlaringizni '$key2' bo'limiga kiriting.</i></b>",
'parse_mode' => 'html',
]);
exit();
} else {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b>🔼 Berish va 🔽 Olish valyutalarini tanlang:</b>",
'parse_mode' => 'html',
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "🔼 UZCARD", 'callback_data' => "uzcard"], ['text' => "🔽 UZCARD", 'callback_data' => "obcard-wmz_rub-uzcard"],],
[['text' => "🔼 HUMO", 'callback_data' => "humor_card"], ['text' => "🔽 HUMO", 'callback_data' => "obcard-wmz_rub-humo"],],
[['text' => "🔼 QIWI USD", 'callback_data' => "qiwi_usd"], ['text' => "🔽 QIWI USD", 'callback_data' => "obcard-wmz_rub-qiwi_usd"],],
[['text' => "🔼 QIWI RUB", 'callback_data' => "qiwi_rub"], ['text' => "🔽 QIWI RUB", 'callback_data' => "obcard-wmz_rub-qiwi_rub"],],
[['text' => "🔼 PAYEER USD", 'callback_data' => "payeer_usd"], ['text' => "🔽 PAYEER USD", 'callback_data' => "obcard-wmz_rub-payeer_usd"],],
[['text' => "🔼 PAYEER RUB", 'callback_data' => "payer_rub"], ['text' => "🔽 PAYEER RUB", 'callback_data' => "obcard-wmz_rub-payeer_rub"],],
[['text' => "✅ WMZ RUB", 'callback_data' => "wmz_rub"], ['text' => "🔽 WMZ RUB", 'callback_data' => "error1"],],
[['text' => "🔼 Сбербанк RUB", 'callback_data' => "sberbank_rub"], ['text' => "🔽 Сбербанк RUB", 'callback_data' => "obcard-wmz_rub-sberbank_rub"],],
[['text' => "🔼 Тинькофф RUB", 'callback_data' => "tinkoff_rub"], ['text' => "🔽 Тинькофф RUB", 'callback_data' => "obcard-wmz_rub-tinkoff_rub"],],
]
])
]);
exit();
}
}
if ($data == "sberbank_rub") {
$holat = file_get_contents("tizim/hamyon/$cid2/sberbank_rub.txt");
if ($holat=="kiritilmagan") {
    bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b><i>⚠️ Siz tanlagan yo'nalishdan boshqa yo'nalishga almashuvni amalga oshirish uchun oldin o'z hamyon raqamlaringizni '$key2' bo'limiga kiriting.</i></b>",
'parse_mode' => 'html',
]);
exit();
} else {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b>🔼 Berish va 🔽 Olish valyutalarini tanlang:</b>",
'parse_mode' => 'html',
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "🔼 UZCARD", 'callback_data' => "uzcard"], ['text' => "🔽 UZCARD", 'callback_data' => "obcard-sberbank_rub-uzcard"],],
[['text' => "🔼 HUMO", 'callback_data' => "humor_card"], ['text' => "🔽 HUMO", 'callback_data' => "obcard-sberbank_rub-humo"],],
[['text' => "🔼 QIWI USD", 'callback_data' => "qiwi_usd"], ['text' => "🔽 QIWI USD", 'callback_data' => "obcard-sberbank_rub-qiwi_usd"],],
[['text' => "🔼 QIWI RUB", 'callback_data' => "qiwi_rub"], ['text' => "🔽 QIWI RUB", 'callback_data' => "obcard-sberbank_rub-qiwi_rub"],],
[['text' => "🔼 PAYEER USD", 'callback_data' => "payeer_usd"], ['text' => "🔽 PAYEER USD", 'callback_data' => "obcard-sberbank_rub-payeer_usd"],],
[['text' => "🔼 PAYEER RUB", 'callback_data' => "payer_rub"], ['text' => "🔽 PAYEER RUB", 'callback_data' => "obcard-sberbank_rub-payeer_rub"],],
[['text' => "🔼 WMZ RUB", 'callback_data' => "wmz_rub"], ['text' => "🔽 WMZ RUB", 'callback_data' => "obcard-sberbank_rub-wmz_rub"],],
[['text' => "✅ Сбербанк RUB", 'callback_data' => "sberbank_rub"], ['text' => "🔽 Сбербанк RUB", 'callback_data' => "error1"],],
[['text' => "🔼 Тинькофф RUB", 'callback_data' => "tinkoff_rub"], ['text' => "🔽 Тинькофф RUB", 'callback_data' => "obcard-sberbank_rub-tinkoff_rub"],],
]
])
]);
exit();
}
}
if ($data == "tinkoff_rub") {
$holat = file_get_contents("tizim/hamyon/$cid2/tinkoff_rub.txt");
if ($holat=="kiritilmagan") {
    bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b><i>⚠️ Siz tanlagan yo'nalishdan boshqa yo'nalishga almashuvni amalga oshirish uchun oldin o'z hamyon raqamlaringizni '$key2' bo'limiga kiriting.</i></b>",
'parse_mode' => 'html',
]);
exit();
} else {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b>🔼 Berish va 🔽 Olish valyutalarini tanlang:</b>",
'parse_mode' => 'html',
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "🔼 UZCARD", 'callback_data' => "uzcard"], ['text' => "🔽 UZCARD", 'callback_data' => "obcard-tinkoff_rub-uzcard"],],
[['text' => "🔼 HUMO", 'callback_data' => "humor_card"], ['text' => "🔽 HUMO", 'callback_data' => "obcard-tinkoff_rub-humo"],],
[['text' => "🔼 QIWI USD", 'callback_data' => "qiwi_usd"], ['text' => "🔽 QIWI USD", 'callback_data' => "obcard-tinkoff_rub-qiwi_usd"],],
[['text' => "🔼 QIWI RUB", 'callback_data' => "qiwi_rub"], ['text' => "🔽 QIWI RUB", 'callback_data' => "obcard-tinkoff_rub-qiwi_rub"],],
[['text' => "🔼 PAYEER USD", 'callback_data' => "payeer_usd"], ['text' => "🔽 PAYEER USD", 'callback_data' => "obcard-tinkoff_rub-payeer_usd"],],
[['text' => "🔼 PAYEER RUB", 'callback_data' => "payer_rub"], ['text' => "🔽 PAYEER RUB", 'callback_data' => "obcard-tinkoff_rub-payeer_rub"],],
[['text' => "🔼 WMZ RUB", 'callback_data' => "wmz_rub"], ['text' => "🔽 WMZ RUB", 'callback_data' => "obcard-tinkoff_rub-wmz_rub"],],
[['text' => "🔼 Сбербанк RUB", 'callback_data' => "sberbank_rub"], ['text' => "🔽 Сбербанк RUB", 'callback_data' => "obcard-tinkoff_rub-sberbank_rub"],],
[['text' => "✅ Тинькофф RUB", 'callback_data' => "tinkoff_rub"], ['text' => "🔽 Тинькофф RUB", 'callback_data' => "error1"],],
]
])
]);
exit();
}
}

if (mb_stripos($data, "obcard-") !== false) {
$xiz = explode("-", $data)[1];
$cards = explode("-", $data)[2];
$hamyon = file_get_contents("tizim/hamyon/$cid2/$xiz.txt");
$hamyons = file_get_contents("tizim/hamyon/$cid2/$cards.txt");
if ($hamyons=="kiritilmagan") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b><i>⚠️ Siz $xiz'dan $cards'ga almashuvni amalga oshirish uchun oldin $cards hamyon raqamlaringizni '$key2' bo'limiga kiriting.</i></b>",
'parse_mode' => 'html',
]);
exit();
} else {
bot('editMessageText', [
'chat_id' => $cid2,
'message_id' => $mid2,
'text' => "🔄 Ayirboshlash: <b>$xiz > $cards</b>

🔽 $xiz hamyon raqami: <b>$hamyon</b>
🔼 $cards hamyon raqami: <b>$hamyons</b>",
'parse_mode' => 'html',
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "✅ Tanlash", 'callback_data' => "tanla-$xiz-$cards"]],
[['text' => "◀️ Orqaga", 'callback_data' => "servis"]],
]
])
]);
}
}

if (mb_stripos($data, "tanla-") !== false) {
$ex = explode("-", $data);
$xiz = $ex[1];
$cards = $ex[2];
$hamyon = file_get_contents("tizim/hamyon/$cid2/$xiz.txt");
$hamyons = file_get_contents("tizim/hamyon/$cid2/$cards.txt");
$adset = file_get_contents("tizim/hamyon/raqam/$admin/$xiz.txt");
if ($adset=="kiritilmagan") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b><i>⚠️ Adminga to'lov qilish uchun hamyon kiritilmagan.</i></b>",
'parse_mode' => 'html',
]);
exit();
} else {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b><u>Almashish summasini kiriting:</u></b>",
'parse_mode' => 'html',
'reply_markup' => $back,
]);
file_put_contents("step/$cid2.step", "next-$xiz-$cards");
exit();
}
}

if (mb_stripos($step, "next-") !== false) {
if (is_numeric($text) == "true") {
$ex = explode("-", $step);
$xiz = $ex[1];
$cards = $ex[2];
$hamyon = file_get_contents("tizim/hamyon/$cid/$xiz.txt");
$hamyons = file_get_contents("tizim/hamyon/$cid/$cards.txt");
$opshi = $text / 1;
$yaxlitlanganson = ceil($opshi);
$yaxlitlanganson = floor($opshi);
$foiz = $yaxlitlanganson * $referal;
$ayir = $foiz / 100;
$jami = $yaxlitlanganson - $ayir;
$idlar = file_get_contents("obmen/obmen.txt");
$pls = $idlar + 1;
mkdir("obmen/$pls");
file_put_contents("obmen/obmen.txt", "$pls");
file_put_contents("obmen/$pls/id.txt", "$pls");
file_put_contents("obmen/$pls/$pls.txt", "$pls");
file_put_contents("obmen/$pls/egasi.txt", "$cid");
file_put_contents("obmen/$pls/holat.txt", "♻️ Bajarilmoqda");
file_put_contents("obmen/$cid/miqdor.txt", "$text");
file_put_contents("obmen/$cid/fozimiqdor.txt", "$jami");
file_put_contents("obmen/$cid/obid.txt", "$pls");
file_put_contents("obmen/$pls/miqdor.txt", "$jami");
file_put_contents("obmen/$pls/sana.txt", "$sana");
file_put_contents("obmen/$pls/vaqt.txt", "$soat");
file_put_contents("obmen/$pls/valyuta.txt", "$xiz > $cards");
$oplcard = file_get_contents("obmen/$pls/valyuta.txt");
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>✅ Qabul qilindi!

🆔 Almashuv ID'si: <code>$pls</code>

⚠️ Ma'lumotlarni qayta ko'rib chiqing:

Almashuv turi:</b> <code>$xiz</code> dan <code>$cards</code> ga.
⬆️ <b>Berish:</b> <code>$text $valyuta</code>
⬇️ <b>Olish:</b> <code>$jami $valyuta</code>
💳 <b>$xiz hamyon raqami:</b> <code>$hamyon</code>
💳 <b>$cards hamyon raqami:</b> <code>$hamyons</code>",
'disable_web_page_preview' => true,
'parse_mode' => 'html',
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "✅ Tasdiqlash", 'callback_data' => "tasdiq-$oplcard-$xiz-$hamyons"]],
[['text' => "🚫 Bekor qilish", 'callback_data' => "bekor"]],
]
])
]);
unlink("step/$cid.step");
exit();
} else {
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Faqat raqamlardan foydalaning.

Qayta kiriting:</b>",
'parse_mode' => 'html',
]);
exit();
}
}

if (mb_stripos($data, "tasdiq-") !== false) {
$ex = explode("-", $data);
$oplcard = $ex[1];
$xiz = $ex[2];
$hamyons = $ex[3];
$obmenm = file_get_contents("obmen/$cid2/miqdor.txt");
$obmenf = file_get_contents("obmen/$cid/fozmiqdor.txt");
$obmenid = file_get_contents("obmen/$cid/obid.txt");
$oplc = file_get_contents("tizim/hamyon/raqam/$admin/$xiz.txt");
bot('editMessageText', [
'chat_id' => $cid2,
'message_id' => $mid2,
'text' => "ℹ️ Almashuvingiz muvaffaqiyatli bajarilishi uchun quyidagi harakatlarni amalga oshiring: 
1) $obmenm $valyuta pul miqdorini

<code>$oplc</code>

💳 karta raqamiga o'tkazing; 
2) <b>«To'lov qildim ✅»</b> tugmasini bosing;
3) To'lov haqidagi chek/skreen ni botga yuboring  
4) Operator tomonidan almashuv tasdiqlanishini kuting.",
'parse_mode' => 'html',
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "✅ To'lov qildim", 'callback_data' => "success-$oplcard-$hamyons"]],
[['text' => "❌ Bekor qilish", 'callback_data' => "bekor"]],
]
])
]);
}

if ($data == "bekor") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "❌ <b>Almashuv bekor qilindi:</b>",
'parse_mode' => 'html',
]);}

if (mb_stripos($data, "success-") !== false) {
$ex = explode("-", $data);
$turi1 = $ex[1];
$hamyons = $ex[2];
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "🧾 <b>To'lovingizni chek yoki skreenshotini shu yerga yuboring:</b>",
'parse_mode' => 'html',
]);
file_put_contents("step/$cid2.step", "rasm-$turi1-$hamyons");
}

if (mb_stripos($step, "rasm-") !== false) {
$ex = explode("-", $step);
$turi7 = $ex[1];
$turi8 = $ex[2];
$obmenm = file_get_contents("obmen/$cid/miqdor.txt");
$obmenf = file_get_contents("obmen/$cid/fozimiqdor.txt");
$obmenid = file_get_contents("obmen/$cid/obid.txt");
bot('SendMessage', [
'chat_id' => $admin,
'text' => "<b>Foydalanuvchi valyuta ayirboshladi
📊 ID: <code>$obmenid</code>

Ayirboshlash tizimi:</b> <code>$turi7</code>
<b>Foydalanuvchi:</b> <a href='tg://user?id=$cid'>$cid</a>
<b>💳 Karta:</b> <code>$turi8</code>

<b>Hisobiga:</b> <code>$obmenf $valyuta</code>",
'disable_web_page_preview' => true,
'parse_mode' => 'html',
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "✅", 'callback_data' => "on-$turi7-$turi8-$cid"], ['text' => "❌", 'callback_data' => "off-$cid"]],
]
])
]);
bot('forwardMessage', [
'chat_id' => $admin,
'from_chat_id' => $cid,
'message_id' => $mid,
]);
bot('sendMessage', [
'chat_id' => $cid,
'text' => "<b>💱 Valyuta ayirboshlash bo'yicha so'rovingiz adminga yuborildi.!

👉🏻 Almashuv ID'si:</b> <code>$obmenid</code>",
'parse_mode' => 'html',
'reply_markup' => $menyu
]);
unlink("step/$cid.step");
}

if (mb_stripos($data, "on-") !== false) {
$ex = explode("-", $data);
$turi = $ex[1];
$turi1 = $ex[2];
$odams = $ex[3];
$obmenm = file_get_contents("obmen/$odams/miqdor.txt");
$obmenf = file_get_contents("obmen/$odams/fozimiqdor.txt");
$obmenid = file_get_contents("obmen/$odams/obid.txt");
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $odams,
'text' => "<b>✅ So'rovingiz qabul qilindi!

💱 Almashuvlar kanali: $promo
♻️ Almashuv ID'si: <code>$obmenid</code></b>",
'parse_mode' => 'html',
]);
bot('sendMessage', [
'chat_id' => $admin,
'text' => "✅ <b>Almashuv tastiqlandi</b>",
'parse_mode' => "html",
]);
bot('SendMessage', [
'chat_id' => $promo,
'text' => "<b>🤖 Yangi almashinuv(obmen):

🆔 Almashuv ID'si: $obmenid 
👤 Almashuvchi: <a href='tg://user?id=$odams'>$odams</a>
🔀 Almashuv tizimi: $turi
📆 Almashuv vaqti: $sana $soat
🔎 Status: ✅ 
💰 Almashuv miqdori: $obmenf $valyuta</b>",
'parse_mode' => 'html',
]);
$holat = file_get_contents("obmen/$obmenid/holat.txt");
$successd = "Bajarilgan ✅";
file_put_contents("obmen/$obmenid/holat.txt", "$successd");
}

if(mb_stripos($data, "off-")!==false){
$ex = explode("-",$data);
$obmenid = file_get_contents("obmen/$turi/obid.txt");
$turi = $ex[1];
bot('deleteMessage',[
'chat_id'=>$cid2,
'message_id'=>$mid2,
]);
bot('SendMessage',[
'chat_id'=>$turi,
'text'=>"<b>❌ Sizning almashuv so'rovingiz rad etildi!</b>",
'parse_mode'=>'html',
]);
bot('SendMessage',[
'chat_id'=>$admin,
'text'=>"❌<b>Bekor qilindi.</b>",
'parse_mode'=>'html',
]);
$idlar=file_get_contents("almashuvlar/almashuvlar.txt");
$pls = $idlar - 1; 
file_put_contents("almashuvlar/almashuvlar.txt","$pls");
deleteFolder("almashuvlar/$obmenid/");
}

if ($text == "$key4" and joinchat($cid) == true) {
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b><i>$support</i></b>",
'parse_mode' => 'html',
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "📞 Bot orqali xabar", 'callback_data' => "supp"]],
]
])
]);
exit();
}

if ($data == "supp" and joinchat($cid) == true) {
    bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b>Murojaat matnini kiriting:</b>",
'parse_mode' => 'html',
'reply_markup' => $back,
]);
file_put_contents("step/$cid2.step", 'murojaat');
exit();
}

if ($step == "murojaat") {
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Murojaat qabul qilindi. Javobni kuting!</b>",
'parse_mode' => 'html',
'reply_markup' => $menu,
]);
bot('SendMessage', [
'chat_id' => $admin,
'text' => "<a href='https://t.me/$username'>$cid</a> <b>dan yangi xabar:</b> $text",
'parse_mode' => 'html',
'disable_web_page_preview' => true,
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "📝 Javob yozish", 'callback_data' => "send-$cid"]],
]
])
]);
unlink("step/$cid.step");
exit();
}

if (mb_stripos($data, "send-") !== false) {
$ex = explode("-", $data);
$id = $ex[1];
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('sendMessage', [
'chat_id' => $admin,
'text' => "<b>Xabaringizni kiriting:</b>",
'parse_mode' => 'html',
'reply_markup' => $back,
]);
file_put_contents("step/$cid2.step", "send-$id");
exit();
}

if (mb_stripos($step, "send-") !== false) {
$ex = explode("-", $step);
$id = $ex[1];
bot('sendMessage', [
'chat_id' => $id,
'text' => $text,
'parse_mode' => 'html',
]);
bot('sendMessage', [
'chat_id' => $admin,
'text' => "✅ <b>Xabaringiz yuborildi!</b>",
'parse_mode' => 'html',
'reply_markup' => $menus,
]);
unlink("step/$cid.step");
exit();
}

if($text=="$key5" and joinchat($cid)==true){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"<b>🆔 Almashuv ID'sini yuboring:</b>",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"◀️ Orqaga"]]
]])
]);
file_put_contents("step/$cid.step","bytop");
unlink("step/$cid.bol");
unlink("step/$cid.ich");
unlink("step/$cid.xiz");
}

if($step=="bytop"){
$byyoq=file_get_contents("obmen/$text/$text.txt");
$alega = file_get_contents("obmen/$text/egasi.txt");
$alholat = file_get_contents("obmen/$text/holat.txt");
$alid = file_get_contents("obmen/$text/$text.txt");
$alturi = file_get_contents("obmen/$text/valyuta.txt");
$alsana = file_get_contents("obmen/$text/sana.txt");
$alvaqti = file_get_contents("obmen/$text/vaqt.txt");
$aljami = file_get_contents("obmen/$text/miqdor.txt");
if($byyoq){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"<b>✅ Almashuv topildi:</b> 

🔁 <b>Almashuv egasi:</b> <i><a href='tg://user?id=$alega'>$alega</a></i>
🔁 <b>Almashuv ID:</b> <i>$alid</i>
🔁 <b>Almashuv turi:</b> <i>$alturi</i>
🔁 <b>Almashuv holati:</b> <i>$alholat</i>
🔁 <b>Almashuv vaqti:</b> <i>$alsana $alvaqti</i>
🔁 <b>Almashuv summasi:</b> <i>$aljami $valyuta</i>",
'parse_mode'=>"html",
]);
unlink("step/$cid.step");
}else{
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"<b>⚠️ Almashuv topilmadi!</b>

Qayta urinib ko'ring:",
'parse_mode'=>"html",
]);
}}

if ($text == "🗄 Boshqarish") {
if ($cid == $admin) {
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Admin paneliga xush kelibsiz!</b>",
'parse_mode' => 'html',
'reply_markup' => $panel,
]);
unlink("step/$cid.step");
unlink("step/visualcoder.txt");
unlink("step/test.txt");
exit();
}
}

if ($data == "boshqarish") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
}

if ($text == "🔄 Almashuv holati") {
if ($cid == $admin) {
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>🔄 Almashuv holati: $status</b>",
'parse_mode' => 'html',
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "☑️", 'callback_data' => "ob-☑️"],['text' => "❌", 'callback_data' => "ob-❌"]],
]
])
]);
exit();
}
}

if ($data == "obholat") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b>🔄 Almashuv holati: $status</b>",
'parse_mode' => 'html',
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "☑️", 'callback_data' => "ob-☑️"],['text' => "❌", 'callback_data' => "ob-❌"]],
]
])
]);
}

if (mb_stripos($data, "ob-") !== false) {
$ex = explode("-", $data);
$statuss = $ex[1];
$holat = file_get_contents("tizim/holat.txt");
if ($holat=="$statuss") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b>⚠️ Bir xil sozlamani qayta bajara olmaysiz.</b>",
'parse_mode' => 'html',
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "🔄 Almashuv holati", 'callback_data' => "obholat"]],
]
])
]);
exit();
} else {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b>🔄 Almashuv holati o'zgartirildi: $statuss</b>",
'parse_mode' => "html",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "☑️", 'callback_data' => "ob-☑️"],['text' => "❌", 'callback_data' => "ob-❌"]],
]
])
]);
file_put_contents("tizim/holat.txt", "$statuss");
exit();
}
}

if ($data == "foydalanuvchi") {
$odam = file_get_contents("odam/$saved.dat");
$ban = file_get_contents("ban/$saved.txt");
if ($ban == null) {
$bans = "🔔 Banlash";
}
if ($ban == "ban") {
$bans = "🔕 Bandan olish";
}
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b>Foydalanuvchi topildi!

ID:</b> <a href='tg://user?id=$saved'>$saved</a></b>",
'parse_mode' => 'html',
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "$bans", 'callback_data' => "ban"]],
]
])
]);
exit();
}

if ($text == "🔎 Foydalanuvchini boshqarish") {
if ($cid == $admin) {
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Kerakli foydalanuvchining ID raqamini kiriting:</b>",
'parse_mode' => 'html',
'reply_markup' => $boshqarish
]);
file_put_contents("step/$cid.step", 'iD');
exit();
}
}

if ($step == "iD") {
if ($cid == $admin) {
if (file_exists("odam/$text.dat")) {
file_put_contents("step/visualcoder.txt", $text);
$ban = file_get_contents("ban/$text.txt");
if ($ban == null) {
$bans = "🔔 Banlash";
}
if ($ban == "ban") {
$bans = "🔕 Bandan olish";
}
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Qidirilmoqda...</b>",
'parse_mode' => 'html',
]);
bot('editMessageText', [
'chat_id' => $cid,
'message_id' => $mid + 1,
'text' => "<b>Qidirilmoqda...</b>",
'parse_mode' => 'html',
]);
bot('editMessageText', [
'chat_id' => $cid,
'message_id' => $mid + 1,
'text' => "<b>Foydalanuvchi topildi!

ID:</b> <a href='tg://user?id=$text'>$text</a>",
'parse_mode' => 'html',
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "$bans", 'callback_data' => "ban"]],
]
])
]);
unlink("step/$cid.step");
exit();
} else {
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Foydalanuvchi topilmadi.</b>

Qayta urinib ko'ring:",
'parse_mode' => 'html',
]);
exit();
}
}
}

if ($data == "ban") {
$ban = file_get_contents("ban/$saved.txt");
if ($admin != $saved) {
if ($ban == "ban") {
unlink("ban/$saved.txt");
bot('editMessageText', [
'chat_id' => $cid2,
'message_id' => $mid2,
'text' => "<b>Foydalanuvchi ($saved) bandan olindi!</b>",
'parse_mode' => "html",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "◀️ Orqaga", 'callback_data' => "foydalanuvchi"]],
]
])
]);
} else {
file_put_contents("ban/$saved.txt", 'ban');
bot('editMessageText', [
'chat_id' => $cid2,
'message_id' => $mid2,
'text' => "<b>Foydalanuvchi ($saved) banlandi!</b>",
'parse_mode' => "html",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "◀️ Orqaga", 'callback_data' => "foydalanuvchi"]],
]
])
]);
}
} else {
bot('answerCallbackQuery', [
'callback_query_id' => $qid,
'text' => "Asosiy adminlarni bloklash mumkin emas!",
'show_alert' => true,
]);
}
}

if ($text == "✉ Xabar yuborish" and $cid == $admin) {
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Yuboriladigan xabar turini tanlang;</b>",
'parse_mode' => 'html',
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "Oddiy", 'callback_data' => "send"]],
[['text' => "Yopish", 'callback_data' => "boshqarish"]],
]
])
]);
exit();
}

if ($data == "send") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "*Xabaringizni kiriting:*",
'parse_mode' => "markdown",
'reply_markup' => $boshqarish
]);
file_put_contents("step/$cid2.step", "send");
exit();
}

if ($step == "send") {
if ($cid == $admin) {
$lich = file_get_contents("azo.dat");
$lichka = explode("\n", $lich);
foreach ($lichka as $lichkalar) {
$okuser = bot("SendMessage", [
'chat_id' => $lichkalar,
'text' => $text,
'parse_mode' => 'html',
'disable_web_page_preview' => true,
]);
}
}
}
if ($okuser) {
bot("sendmessage", [
'chat_id' => $admin,
'text' => "<b>Xabaringiz yuborildi!</b>",
'parse_mode' => 'html',
'reply_markup' => $panel
]);
unlink("step/$cid.step");
exit();
}

if ($text == "📊 Statistika") {
if ($cid == $admin) {
$baza = file_get_contents("azo.dat");
$obsh = substr_count($baza, "\n");
$start_time = round(microtime(true) * 1000);
bot('SendMessage', [
'chat_id' => $cid,
'text' => "",
'parse_mode' => 'html',
]);
$end_time = round(microtime(true) * 1000);
$ping = $end_time - $start_time;
bot('SendMessage', [
'chat_id' => $cid,
'text' => "💡 <b>Yuklanish:</b> <code>$ping</code>
👥 <b>Foydalanuvchilar:</b> $obsh ta",
'parse_mode' => 'html',
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "Yopish", 'callback_data' => "boshqarish"]]
]
])
]);
exit();
}
}

if ($text == "🎛 Tugmalar") {
if ($cid == $admin) {
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Quyidagilardan birini tanlang:</b>",
'parse_mode' => 'html',
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "$key1", 'callback_data' => "key1"]],
[['text' => "$key2", 'callback_data' => "key2"], ['text' => "$key3", 'callback_data' => "key3"]],
[['text' => "$key4", 'callback_data' => "key4"], ['text' => "$key5", 'callback_data' => "key5"]],
[['text' => "Yopish", 'callback_data' => "boshqarish"]]
]
])
]);
exit();
}
}

if ($data == "key1") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b>Tugma uchun yangi nom yuboring:</b>",
'parse_mode' => 'html',
'reply_markup' => $boshqarish
]);
file_put_contents("step/$cid2.step", 'key1');
exit();
}

if ($step == "key1") {
if ($cid == $admin) {
if (isset($text)) {
file_put_contents("tugma/key1.txt", $text);
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Qabul qilindi!</b>

<i>Tugma nomi</i> <b>$text</b> <i>ga o'zgartirildi.</i>",
'parse_mode' => 'html',
'reply_markup' => $panel,
]);
unlink("step/$cid.step");
exit();
}
}
}

if ($data == "key2") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b>Tugma uchun yangi nom yuboring:</b>",
'parse_mode' => 'html',
'reply_markup' => $boshqarish
]);
file_put_contents("step/$cid2.step", 'key2');
exit();
}

if ($step == "key2") {
if ($cid == $admin) {
if (isset($text)) {
file_put_contents("tugma/key2.txt", $text);
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Qabul qilindi!</b>

<i>Tugma nomi</i> <b>$text</b> <i>ga o'zgartirildi.</i>",
'parse_mode' => 'html',
'reply_markup' => $panel,
]);
unlink("step/$cid.step");
exit();
}
}
}

if ($data == "key3") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b>Tugma uchun yangi nom yuboring:</b>",
'parse_mode' => 'html',
'reply_markup' => $boshqarish
]);
file_put_contents("step/$cid2.step", 'key3');
exit();
}

if ($step == "key3") {
if ($cid == $admin) {
if (isset($text)) {
file_put_contents("tugma/key3.txt", $text);
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Qabul qilindi!</b>

<i>Tugma nomi</i> <b>$text</b> <i>ga o'zgartirildi.</i>",
'parse_mode' => 'html',
'reply_markup' => $panel,
]);
unlink("step/$cid.step");
exit();
}
}
}

if ($data == "key4") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b>Tugma uchun yangi nom yuboring:</b>",
'parse_mode' => 'html',
'reply_markup' => $boshqarish
]);
file_put_contents("step/$cid2.step", 'key4');
exit();
}

if ($step == "key4") {
if ($cid == $admin) {
if (isset($text)) {
file_put_contents("tugma/key4.txt", $text);
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Qabul qilindi!</b>

<i>Tugma nomi</i> <b>$text</b> <i>ga o'zgartirildi.</i>",
'parse_mode' => 'html',
'reply_markup' => $panel,
]);
unlink("step/$cid.step");
exit();
}
}
}

if ($data == "key5") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b>Tugma uchun yangi nom yuboring:</b>",
'parse_mode' => 'html',
'reply_markup' => $boshqarish
]);
file_put_contents("step/$cid2.step", 'key5');
exit();
}

if ($step == "key5") {
if ($cid == $admin) {
if (isset($text)) {
file_put_contents("tugma/key5.txt", $text);
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Qabul qilindi!</b>

<i>Tugma nomi</i> <b>$text</b> <i>ga o'zgartirildi.</i>",
'parse_mode' => 'html',
'reply_markup' => $panel,
]);
unlink("step/$cid.step");
exit();
}
}
}

if ($text == "⚙ Asosiy sozlamalar") {
if ($cid == $admin) {
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>⚙️ Asosiy sozlamalar bo'limiga xush kelibsiz!</b>

<i>Nimani o'zgartiramiz?</i>",
'parse_mode' => 'html',
'reply_markup' => $asosiy,
]);
exit();
}
}

if ($text == "*️⃣ Birlamchi sozlamalar") {
if ($cid == $admin) {
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>*️⃣  Birlamchi sozlamalar bo'limidasiz.</b>",
'parse_mode' => 'html',
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "📋 Hozirgi holatni ko'rish", 'callback_data' => "holat"]],
[['text' => "💶 Valyuta", 'callback_data' => "valyuta"], ['text' => "💸 Usluga", 'callback_data' => "narx"]],
[['text' => "📎 Admin useri", 'callback_data' => "admin"], ['text' => "💳 To'lov hamyonlari", 'callback_data' => "oplcard"]],
[['text' => "💸 Valyuta kursi", 'callback_data' => "valkurs"],['text' => "$key4 matni", 'callback_data' => "support"]],
[['text' => "Yopish", 'callback_data' => "boshqarish"]]
]
])
]);
exit();
}
}

if ($data == "birlamchi") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b>*️⃣  Birlamchi sozlamalar bo'limidasiz.</b>",
'parse_mode' => 'html',
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "📋 Hozirgi holatni ko'rish", 'callback_data' => "holat"]],
[['text' => "💶 Valyuta", 'callback_data' => "valyuta"], ['text' => "💸 Usluga", 'callback_data' => "narx"]],
[['text' => "📎 Admin useri", 'callback_data' => "admin"], ['text' => "💳 To'lov hamyonlari", 'callback_data' => "oplcard"]],
[['text' => "💸 Valyuta kursi", 'callback_data' => "valkurs"],['text' => "$key4 matni", 'callback_data' => "support"]],
[['text' => "Yopish", 'callback_data' => "boshqarish"]]
]
])
]);
exit();
}

if ($data == "support") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "📝 <b>Yangi qiymatni yuboring:</b>",
'parse_mode' => 'html',
'reply_markup' => $boshqarish,
]);
file_put_contents("step/$cid2.step", 'support');
exit();
}

if ($step == "support") {
if ($cid == $admin) {
if (isset($text)) {
file_put_contents("tizim/support.txt", "$text");
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Muvaffaqiyatli o'zgartirildi!</b>",
'parse_mode' => 'html',
'reply_markup' => $asosiy,
]);
unlink("step/$cid.step");
exit();
}
}
}

if ($data == "valkurs") {
bot('editMessageText', [
'chat_id' => $cid2,
'message_id' => $mid2,
'text' => "<b>Kuting.</b>",
'parse_mode' => 'html',
]);
bot('editMessageText', [
'chat_id' => $cid2,
'message_id' => $mid2 + 1,
'text' => "<b>Kuting..</b>",
'parse_mode' => 'html',
]);
bot('editMessageText', [
'chat_id' => $cid2,
'message_id' => $mid2,
'text' => "<b>Valyuta Kursi:</b>

📈 <b>Sotish:</b>
<i>1. RUB - $sotish_rub $valyuta
2. USD - $sotish_usd $valyuta.</i>

📈 <b>Sotib olish:</b>
<i>3. RUB: $sotib_rub $valyuta
4. USD: $sotib_usd $valyuta.</i>

<b>Bu valyuta kurslarini siz o'zgartirishingiz mumkin</b>",
'parse_mode' => 'html',
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "1", 'callback_data' => "kurs1"], ['text' => "2", 'callback_data' => "kurs2"],['text' => "3", 'callback_data' => "kurs3"], ['text' => "4", 'callback_data' => "kurs4"]],
]
])
]);
}

if ($data == "kurs1") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "📝 <b>Yangi qiymatni yuboring:</b>",
'parse_mode' => 'html',
'reply_markup' => $boshqarish,
]);
file_put_contents("step/$cid2.step", 'kurs1');
exit();
}

if ($step == "kurs1") {
if ($cid == $admin) {
if (isset($text)) {
file_put_contents("tizim/kurs/sotish_rub.txt", $text);
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Muvaffaqiyatli o'zgartirildi!</b>",
'parse_mode' => 'html',
'reply_markup' => $asosiy,
]);
unlink("step/$cid.step");
exit();
}
}
}

if ($data == "kurs2") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "📝 <b>Yangi qiymatni yuboring:</b>",
'parse_mode' => 'html',
'reply_markup' => $boshqarish,
]);
file_put_contents("step/$cid2.step", 'kurs2');
exit();
}

if ($step == "kurs2") {
if ($cid == $admin) {
if (isset($text)) {
file_put_contents("tizim/kurs/sotish_usd.txt", $text);
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Muvaffaqiyatli o'zgartirildi!</b>",
'parse_mode' => 'html',
'reply_markup' => $asosiy,
]);
unlink("step/$cid.step");
exit();
}
}
}

if ($data == "kurs3") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "📝 <b>Yangi qiymatni yuboring:</b>",
'parse_mode' => 'html',
'reply_markup' => $boshqarish,
]);
file_put_contents("step/$cid2.step", 'kurs3');
exit();
}

if ($step == "kurs3") {
if ($cid == $admin) {
if (isset($text)) {
file_put_contents("tizim/kurs/sotib_rub.txt", $text);
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Muvaffaqiyatli o'zgartirildi!</b>",
'parse_mode' => 'html',
'reply_markup' => $asosiy,
]);
unlink("step/$cid.step");
exit();
}
}
}

if ($data == "kurs4") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "📝 <b>Yangi qiymatni yuboring:</b>",
'parse_mode' => 'html',
'reply_markup' => $boshqarish,
]);
file_put_contents("step/$cid2.step", 'kurs4');
exit();
}

if ($step == "kurs4") {
if ($cid == $admin) {
if (isset($text)) {
file_put_contents("tizim/kurs/sotib_usd.txt", $text);
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Muvaffaqiyatli o'zgartirildi!</b>",
'parse_mode' => 'html',
'reply_markup' => $asosiy,
]);
unlink("step/$cid.step");
exit();
}
}
}

if ($data == "oplcard") {
bot('editMessageText', [
'chat_id' => $cid2,
'message_id' => $mid2,
'text' => "<b>Kuting.</b>",
'parse_mode' => 'html',
]);
bot('editMessageText', [
'chat_id' => $cid2,
'message_id' => $mid2 + 1,
'text' => "<b>Kuting..</b>",
'parse_mode' => 'html',
]);
bot('editMessageText', [
'chat_id' => $cid2,
'message_id' => $mid2,
'text' => "<b>Hozirgi to'lov hamyonlari:</b>

<i>1. UZCARD - $uzcard_adset
2. HUMO - $humo_adset
3. PAYEER RUB: $payerrub_adset
4. PAYEER USD: $payyerusd_adset
5. QIWI RUB: $qiwirub_adset
6. QIWI USD: $qiwiusd_adset
7. WMZ RUB: $wmzrub_adset
8. Сбербанк RUB: $sberbankrub_adset
9. Тинькофф RUB: $tinkoffrub_adset</i>

<b>Bu hamyonlar almashuv paytida adminga to'lov qilish uchun foydalaniladi.</b>",
'parse_mode' => 'html',
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "1", 'callback_data' => "ad1"], ['text' => "2", 'callback_data' => "ad2"], ['text' => "3", 'callback_data' => "ad3"]],
[['text' => "4", 'callback_data' => "ad4"], ['text' => "5", 'callback_data' => "ad5"], ['text' => "6", 'callback_data' => "ad6"]],
[['text' => "7", 'callback_data' => "ad7"], ['text' => "8", 'callback_data' => "ad8"], ['text' => "9", 'callback_data' => "ad9"]],
]
])
]);
}

if ($data == "ad1") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "📝 <b>Yangi qiymatni yuboring:</b>",
'parse_mode' => 'html',
'reply_markup' => $boshqarish,
]);
file_put_contents("step/$cid2.step", 'ad1');
exit();
}

if ($step == "ad1") {
if ($cid == $admin) {
if (isset($text)) {
file_put_contents("tizim/hamyon/raqam/$admin/uzcard.txt", $text);
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Muvaffaqiyatli o'zgartirildi!</b>",
'parse_mode' => 'html',
'reply_markup' => $asosiy,
]);
unlink("step/$cid.step");
exit();
}
}
}

if ($data == "ad2") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "📝 <b>Yangi qiymatni yuboring:</b>",
'parse_mode' => 'html',
'reply_markup' => $boshqarish,
]);
file_put_contents("step/$cid2.step", 'ad2');
exit();
}

if ($step == "ad2") {
if ($cid == $admin) {
if (isset($text)) {
file_put_contents("tizim/hamyon/raqam/$admin/humo.txt", $text);
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Muvaffaqiyatli o'zgartirildi!</b>",
'parse_mode' => 'html',
'reply_markup' => $asosiy,
]);
unlink("step/$cid.step");
exit();
}
}
}

if ($data == "ad3") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "📝 <b>Yangi qiymatni yuboring:</b>",
'parse_mode' => 'html',
'reply_markup' => $boshqarish,
]);
file_put_contents("step/$cid2.step", 'ad3');
exit();
}

if ($step == "ad3") {
if ($cid == $admin) {
if (isset($text)) {
file_put_contents("tizim/hamyon/raqam/$admin/payeer_rub.txt", $text);
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Muvaffaqiyatli o'zgartirildi!</b>",
'parse_mode' => 'html',
'reply_markup' => $asosiy,
]);
unlink("step/$cid.step");
exit();
}
}
}

if ($data == "ad4") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "📝 <b>Yangi qiymatni yuboring:</b>",
'parse_mode' => 'html',
'reply_markup' => $boshqarish,
]);
file_put_contents("step/$cid2.step", 'ad4');
exit();
}

if ($step == "ad4") {
if ($cid == $admin) {
if (isset($text)) {
file_put_contents("tizim/hamyon/raqam/$admin/payeer_usd.txt", $text);
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Muvaffaqiyatli o'zgartirildi!</b>",
'parse_mode' => 'html',
'reply_markup' => $asosiy,
]);
unlink("step/$cid.step");
exit();
}
}
}

if ($data == "ad5") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "📝 <b>Yangi qiymatni yuboring:</b>",
'parse_mode' => 'html',
'reply_markup' => $boshqarish,
]);
file_put_contents("step/$cid2.step", 'ad5');
exit();
}

if ($step == "ad5") {
if ($cid == $admin) {
if (isset($text)) {
file_put_contents("tizim/hamyon/raqam/$admin/qiwi_rub.txt", $text);
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Muvaffaqiyatli o'zgartirildi!</b>",
'parse_mode' => 'html',
'reply_markup' => $asosiy,
]);
unlink("step/$cid.step");
exit();
}
}
}

if ($data == "ad6") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "📝 <b>Yangi qiymatni yuboring:</b>",
'parse_mode' => 'html',
'reply_markup' => $boshqarish,
]);
file_put_contents("step/$cid2.step", 'ad6');
exit();
}

if ($step == "ad6") {
if ($cid == $admin) {
if (isset($text)) {
file_put_contents("tizim/hamyon/raqam/$admin/qiwi_usd.txt", $text);
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Muvaffaqiyatli o'zgartirildi!</b>",
'parse_mode' => 'html',
'reply_markup' => $asosiy,
]);
unlink("step/$cid.step");
exit();
}
}
}

if ($data == "ad7") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "📝 <b>Yangi qiymatni yuboring:</b>",
'parse_mode' => 'html',
'reply_markup' => $boshqarish,
]);
file_put_contents("step/$cid2.step", 'ad7');
exit();
}

if ($step == "ad7") {
if ($cid == $admin) {
if (isset($text)) {
file_put_contents("tizim/hamyon/raqam/$admin/wmz_rub.txt", $text);
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Muvaffaqiyatli o'zgartirildi!</b>",
'parse_mode' => 'html',
'reply_markup' => $asosiy,
]);
unlink("step/$cid.step");
exit();
}
}
}
if ($data == "ad8") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "📝 <b>Yangi qiymatni yuboring:</b>",
'parse_mode' => 'html',
'reply_markup' => $boshqarish,
]);
file_put_contents("step/$cid2.step", 'ad8');
exit();
}

if ($step == "ad8") {
if ($cid == $admin) {
if (isset($text)) {
file_put_contents("tizim/hamyon/raqam/$admin/sberbank_rub.txt", $text);
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Muvaffaqiyatli o'zgartirildi!</b>",
'parse_mode' => 'html',
'reply_markup' => $asosiy,
]);
unlink("step/$cid.step");
exit();
}
}
}
if ($data == "ad9") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "📝 <b>Yangi qiymatni yuboring:</b>",
'parse_mode' => 'html',
'reply_markup' => $boshqarish,
]);
file_put_contents("step/$cid2.step", 'ad9');
exit();
}

if ($step == "ad9") {
if ($cid == $admin) {
if (isset($text)) {
file_put_contents("tizim/hamyon/raqam/$admin/tinkoff_rub.txt", $text);
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Muvaffaqiyatli o'zgartirildi!</b>",
'parse_mode' => 'html',
'reply_markup' => $asosiy,
]);
unlink("step/$cid.step");
exit();
}
}
}

if ($data == "holat") {
bot('editMessageText', [
'chat_id' => $cid2,
'message_id' => $mid2,
'text' => "<b>Kuting...</b>",
'parse_mode' => 'html',
]);
bot('editMessageText', [
'chat_id' => $cid2,
'message_id' => $mid2 + 1,
'text' => "<b>Kuting...</b>",
'parse_mode' => 'html',
]);
bot('editMessageText', [
'chat_id' => $cid2,
'message_id' => $mid2,
'text' => "<b>Hozirgi birlamchi sozlamalar:</b>

<i>1. Valyuta - $valyuta
2. Taklif narxi - $referal %
3. Admin useri: $user</i>",
'parse_mode' => 'html',
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "◀️ Orqaga", 'callback_data' => "birlamchi"]],
]
])
]);
}

if ($data == "valyuta") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "📝 <b>Yangi qiymatni yuboring:</b>",
'parse_mode' => 'html',
'reply_markup' => $boshqarish,
]);
file_put_contents("step/$cid2.step", 'valyuta');
exit();
}

if ($step == "valyuta") {
if ($cid == $admin) {
if (isset($text)) {
file_put_contents("tizim/valyuta.txt", $text);
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Muvaffaqiyatli o'zgartirildi!</b>",
'parse_mode' => 'html',
'reply_markup' => $asosiy,
]);
unlink("step/$cid.step");
exit();
}
}
}

if ($data == "narx") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "📝 <b>Yangi qiymatni yuboring:</b>",
'parse_mode' => 'html',
'reply_markup' => $boshqarish,
]);
file_put_contents("step/$cid2.step", 'uslug');
exit();
}

if ($step == "uslug") {
if ($cid == $admin) {
if (isset($text)) {
file_put_contents("tizim/uslug.txt", $text);
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Muvaffaqiyatli o'zgartirildi!</b>",
'parse_mode' => 'html',
'reply_markup' => $asosiy,
]);
unlink("step/$cid.step");
exit();
}
}
}

if ($data == "admin") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "📝 <b>Yangi qiymatni yuboring:</b>",
'parse_mode' => 'html',
'reply_markup' => $boshqarish,
]);
file_put_contents("step/$cid2.step", 'admin');
exit();
}

if ($step == "admin") {
if ($cid == $admin) {
if (isset($text)) {
file_put_contents("tizim/user.txt", $text);
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Muvaffaqiyatli o'zgartirildi!</b>",
'parse_mode' => 'html',
'reply_markup' => $asosiy,
]);
unlink("step/$cid.step");
exit();
}
}
}


if ($text == "📢 Kanallar") {
if ($cid == $admin) {
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Quyidagilardan birini tanlang:</b>",
'parse_mode' => 'html',
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "🔐 Majburiy obunalar", 'callback_data' => "majburiy"]],
[['text' => "*⃣ Qo'shimcha kanallar", 'callback_data' => "qoshimcha"]],
[['text' => "Yopish", 'callback_data' => "boshqarish"]]
]
])
]);
exit();
}
}

if ($data == "kanallar") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b>Quyidagilardan birini tanlang:</b>",
'parse_mode' => 'html',
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "🔐 Majburiy obunalar", 'callback_data' => "majburiy"]],
[['text' => "*⃣ Qo'shimcha kanallar", 'callback_data' => "qoshimcha"]],
[['text' => "Yopish", 'callback_data' => "boshqarish"]]
]
])
]);
exit();
}

if ($data == "majburiy") {
bot('editMessageText', [
'chat_id' => $cid2,
'message_id' => $mid2,
'text' => "<b>Kuting...</b>",
'parse_mode' => 'html',
]);
bot('editMessageText', [
'chat_id' => $cid2,
'message_id' => $mid2 + 1,
'text' => "<b>Kuting...</b>",
'parse_mode' => 'html',
]);
bot('editMessageText', [
'chat_id' => $cid2,
'message_id' => $mid2,
'text' => "<b>Majburiy obunalarni sozlash bo'limidasiz:</b>",
'parse_mode' => 'html',
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "➕ Qo'shish", 'callback_data' => "qoshish"]],
[['text' => "📑 Ro'yxat", 'callback_data' => "royxat"], ['text' => "🗑 O'chirish", 'callback_data' => "ochirish"]],
[['text' => "◀️ Orqaga", 'callback_data' => "kanallar"]]
]
])
]);
}

if ($data == "qoshish") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b>Kanalingiz userini kiriting:

Namuna:</b> By Alik-By_Alik
( Kanal nomi-Kanal_useri )",
'parse_mode' => 'html',
'reply_markup' => $boshqarish,
]);
file_put_contents("step/$cid2.step", "qo'shish");
exit();
}

if ($step == "qo'shish") {
if ($cid == $admin) {
if (isset($text)) {
if (mb_stripos($text, "-") !== false) {
if ($kanal == null) {
$a = $KanalMin + 1;
file_put_contents("tizim/KanalMin.txt", $a);
file_put_contents("tizim/kanal.txt", $text);
bot('SendMessage', [
'chat_id' => $admin,
'text' => "<b>Muvaffaqiyatli o'zgartirildi!</b>",
'parse_mode' => 'html',
'reply_markup' => $asosiy
]);
unlink("step/$cid.step");
exit();
} else {
file_put_contents("tizim/kanal.txt", "$kanal\n$text");
bot('SendMessage', [
'chat_id' => $admin,
'text' => "<b>Muvaffaqiyatli o'zgartirildi!</b>",
'parse_mode' => 'html',
'reply_markup' => $asosiy
]);
unlink("step/$cid.step");
exit();
}
} else {
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Kanalingiz userini kiriting:

Namuna:</b> By Alik-By_Alik
( Kanal nomi-Kanal_useri )",
'parse_mode' => 'html',
]);
exit();
}
}
}
}

if ($data == "ochirish") {
bot('editMessageText', [
'chat_id' => $cid2,
'message_id' => $mid2,
'text' => "⏱ <b>Yuklanmoqda...</b>",
'parse_mode' => 'html',
]);
bot('editMessageText', [
'chat_id' => $cid2,
'message_id' => $mid2 + 1,
'text' => "⏱ <b>Yuklanmoqda...</b>",
'parse_mode' => 'html',
]);
bot('editMessageText', [
'chat_id' => $cid2,
'message_id' => $mid2,
'text' => "✅ <b>Kanallar muvaffaqiyatli o'chirildi!</b>",
'parse_mode' => 'html',
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "◀️ Orqaga", 'callback_data' => "majburiy"]],
]
])
]);
unlink("tizim/kanal.txt");
}

if ($data == "royxat") {
$soni = substr_count($kanal, "-");
if ($kanal == null) {
bot('editMessageText', [
'chat_id' => $cid2,
'message_id' => $mid2,
'text' => "⏱ <b>Yuklanmoqda...</b>",
'parse_mode' => 'html',
]);
bot('editMessageText', [
'chat_id' => $cid2,
'message_id' => $mid2 + 1,
'text' => "⏱ <b>Yuklanmoqda...</b>",
'parse_mode' => 'html',
]);
bot('editMessageText', [
'chat_id' => $cid2,
'message_id' => $mid2,
'text' => "📂 <b>Kanallar ro'yxati bo'sh!</b>",
'parse_mode' => 'html',
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "◀️ Orqaga", 'callback_data' => "majburiy"]],
]
])
]);
} else {
bot('editMessageText', [
'chat_id' => $cid2,
'message_id' => $mid2,
'text' => "⏱ <b>Yuklanmoqda...</b>",
'parse_mode' => 'html',
]);
bot('editMessageText', [
'chat_id' => $cid2,
'message_id' => $mid2 + 1,
'text' => "⏱ <b>Yuklanmoqda...</b>",
'parse_mode' => 'html',
]);
bot('editMessageText', [
'chat_id' => $cid2,
'message_id' => $mid2,
'text' => "<b>📢 Kanallar ro'yxati:</b>

$kanal

<b>Ulangan kanallar soni:</b> $soni ta",
'parse_mode' => 'html',
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "◀️ Orqaga", 'callback_data' => "majburiy"]],
]
])
]);
}
}

if ($data == "qoshimcha") {
bot('editMessageText', [
'chat_id' => $cid2,
'message_id' => $mid2,
'text' => "<b>Kuting...</b>",
'parse_mode' => 'html',
]);
bot('editMessageText', [
'chat_id' => $cid2,
'message_id' => $mid2 + 1,
'text' => "<b>Kuting...</b>",
'parse_mode' => 'html',
]);
bot('editMessageText', [
'chat_id' => $cid2,
'message_id' => $mid2,
'text' => "<b>Quyidagilardan birini tanlang:

Hozirgi holat:
To'lovlar uchun kanal:</b> $promo",
'parse_mode' => 'html',
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "🆕️ To'lovlar uchun", 'callback_data' => "promo"]],
[['text' => "◀️ Orqaga", 'callback_data' => "kanallar"]]
]
])
]);
}

if ($data == "promo") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b>Kanalingiz userini yuboring:</b>",
'parse_mode' => 'html',
'reply_markup' => $boshqarish,
]);
file_put_contents("step/$cid2.step", 'kanal');
exit();
}

if ($step == "kanal" and $cid == $admin) {
if (stripos($text, "@") !== false) {
$get = bot('getChat', [
'chat_id' => $text
]);
$types = $get->result->type;
$ch_name = $get->result->title;
$ch_user = $get->result->username;
if (getAdmin($ch_user) == true) {
file_put_contents("tizim/promo.txt", "@$ch_user");
bot('SendMessage', [
'chat_id' => $admin,
'text' => "<b>Muvaffaqiyatli o'zgartirildi!</b>",
'parse_mode' => 'html',
'reply_markup' => $asosiy,
]);
unlink("step/$cid.step");
exit();
} else {
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Bot ushbu kanalda admin emas yoki noto'g'ri kanal manzili yuborildi!</b>",
'parse_mode' => 'html',
]);
exit();
}
} else {
bot('SendMessage', [
'chat_id' => $cid,
'text' => "⚠️ <b>Kanal manzili kiritishda xatolik!</b>

Qayta urinib ko'ring:",
'parse_mode' => 'html',
]);
exit();
}
}

?>
```
