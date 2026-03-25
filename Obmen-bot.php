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

//inline uchun metodlar
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

// Papkalarni yaratish
$folders = ["ban", "step", "tizim", "tizim/hamyon", "tizim/hamyon/raqam", "tizim/hamyon/raqam/$admin", "tizim/kurs", "odam", "tugma", "obmen"];
foreach ($folders as $folder) {
    if (!file_exists($folder)) mkdir($folder, 0777, true);
}

// Default fayllar
$default_files = [
    "tugma/key1.txt" => '🔄 Valyuta ayirboshlash',
    "tugma/key2.txt" => "🔰 Hamyonlar",
    "tugma/key3.txt" => "📊 Valyuta kursi",
    "tugma/key4.txt" => '📞 Aloqa',
    "tugma/key5.txt" => "🔁 Almashuvlar",
    "tizim/user.txt" => 'Kiritilmagan',
    "tizim/promo.txt" => 'Kiritilmagan',
    "tizim/uslug.txt" => '20',
    "tizim/valyuta.txt" => "so'm",
    "tizim/reklama.txt" => "Yoqilgan",
    "tizim/holat.txt" => "✔️",
    "tizim/support.txt" => "Bot 08:00 dan 00:00 gacha kun davomida ruchnoy rejimda ishlaydi, operator tomonidan 5 daqiqadan 10 daqiqagacha bajariladi.",
    "obmen/obmen.txt" => "0",
    "tizim/kurs/sotish_rub.txt" => "140.00",
    "tizim/kurs/sotish_usd.txt" => "11575.00",
    "tizim/kurs/sotib_rub.txt" => "80",
    "tizim/kurs/sotib_usd.txt" => "11520.00"
];

foreach ($default_files as $file => $content) {
    if (!file_exists($file)) file_put_contents($file, $content);
}

$key1 = file_get_contents("tugma/key1.txt");
$key2 = file_get_contents("tugma/key2.txt");
$key3 = file_get_contents("tugma/key3.txt");
$key4 = file_get_contents("tugma/key4.txt");
$key5 = file_get_contents("tugma/key5.txt");

$sotish_rub = file_get_contents("tizim/kurs/sotish_rub.txt");
$sotish_usd = file_get_contents("tizim/kurs/sotish_usd.txt");
$sotib_rub = file_get_contents("tizim/kurs/sotib_rub.txt");
$sotib_usd = file_get_contents("tizim/kurs/sotib_usd.txt");
$valyuta = file_get_contents("tizim/valyuta.txt");
$referal = file_get_contents("tizim/uslug.txt");
$support = file_get_contents("tizim/support.txt");
$status = file_get_contents("tizim/holat.txt");
$promo = file_get_contents("tizim/promo.txt");

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

$boshqarish = json_encode([
'resize_keyboard' => true,
'keyboard' => [
[['text' => "🗄 Boshqarish"]],
]
]);

// Ban tekshirish
if ($text) {
    $ban = file_get_contents("ban/$cid.txt");
    if ($ban == "ban") exit();
}

if ($data) {
    $ban = file_get_contents("ban/$cid2.txt");
    if ($ban == "ban") exit();
}

// Foydalanuvchini qo'shish
if (isset($message)) {
    $baza = file_get_contents("azo.dat");
    if (mb_stripos($baza, $chat_id) === false) {
        file_put_contents("azo.dat", "\n$chat_id", FILE_APPEND);
    }
    $pul = file_get_contents("pul/$cid.txt") + 0;
    file_put_contents("pul/$cid.txt", $pul);
    $odam = file_get_contents("odam/$cid.dat") + 0;
    file_put_contents("odam/$cid.dat", $odam);
}

// ============ ASOSIY KOMANDALAR ============

if ($text == "/start" && joinchat($cid) == true) {
    if ($cid == $admin) {
        bot('SendMessage', [
            'chat_id' => $admin,
            'text' => "💎 <b>Salom $nameru!\n\n@$bot ga xush kelibsiz!</b>",
            'parse_mode' => 'html',
            'reply_markup' => $menus
        ]);
    } else {
        bot('SendMessage', [
            'chat_id' => $cid,
            'text' => "💎 <b>Salom $nameru!\n\n@$bot ga xush kelibsiz!</b>",
            'parse_mode' => 'html',
            'reply_markup' => $menu
        ]);
    }
    exit();
}

if ($text == "$key2" && joinchat($cid) == "true") {
    $uzcard_set = file_exists("tizim/hamyon/$cid/uzcard.txt") ? file_get_contents("tizim/hamyon/$cid/uzcard.txt") : "kiritilmagan";
    $humo_set = file_exists("tizim/hamyon/$cid/humo.txt") ? file_get_contents("tizim/hamyon/$cid/humo.txt") : "kiritilmagan";
    $payeer_set = file_exists("tizim/hamyon/$cid/payeer_rub.txt") ? file_get_contents("tizim/hamyon/$cid/payeer_rub.txt") : "kiritilmagan";
    $payeerusd_set = file_exists("tizim/hamyon/$cid/payeer_usd.txt") ? file_get_contents("tizim/hamyon/$cid/payeer_usd.txt") : "kiritilmagan";
    $qiwi_set = file_exists("tizim/hamyon/$cid/qiwi_rub.txt") ? file_get_contents("tizim/hamyon/$cid/qiwi_rub.txt") : "kiritilmagan";
    $qiwiusd_set = file_exists("tizim/hamyon/$cid/qiwi_usd.txt") ? file_get_contents("tizim/hamyon/$cid/qiwi_usd.txt") : "kiritilmagan";
    $wmzrub_set = file_exists("tizim/hamyon/$cid/wmz_rub.txt") ? file_get_contents("tizim/hamyon/$cid/wmz_rub.txt") : "kiritilmagan";
    $sberbankrub_set = file_exists("tizim/hamyon/$cid/sberbank_rub.txt") ? file_get_contents("tizim/hamyon/$cid/sberbank_rub.txt") : "kiritilmagan";
    $tinkoffrub_set = file_exists("tizim/hamyon/$cid/tinkoff_rub.txt") ? file_get_contents("tizim/hamyon/$cid/tinkoff_rub.txt") : "kiritilmagan";
    
    bot('SendMessage', [
        'chat_id' => $cid,
        'text' => "<b>💳 Sizning hamyonlaringiz:</b>\n\n<b>📌UZCARD $valyuta: </b>\n<code>$uzcard_set</code>\n\n<b>📌HUMO $valyuta: </b>\n<code>$humo_set</code>\n\n<b>📌PAYEER RUB:</b>\n<code>$payeer_set</code>\n\n<b>📌PAYEER USD: </b>\n<code>$payeerusd_set</code>\n\n<b>📌QIWI RUB: </b>\n<code>$qiwi_set</code>\n\n<b>📌QIWI USD: </b>\n<code>$qiwiusd_set</code>\n\n<b>📌WMZ RUB: </b>\n<code>$wmzrub_set</code>\n\n<b>📌Сбербанк Rub: </b>\n<code>$sberbankrub_set</code>\n\n<b>📌Тинькофф Rub: </b>\n<code>$tinkoffrub_set</code>",
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
    exit();
}

if ($text == "$key3" && joinchat($cid) == true) {
    bot('SendMessage', [
        'chat_id' => $cid,
        'text' => "📉 Sotish kursi | Курс Продажи: \n1 RUB = <code>$sotish_rub</code> $valyuta \n1 USD = <code>$sotish_usd</code> $valyuta \n\n📉 Sotib olish kursi | Курс Покупки: \n1 RUB = <code>$sotib_rub</code> $valyuta \n1 USD = <code>$sotib_usd</code> $valyuta ",
        'parse_mode' => 'html',
    ]);
    exit();
}

if ($text == "$key4" && joinchat($cid) == true) {
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

if ($text == "$key5" && joinchat($cid) == true) {
    bot('sendMessage', [
        'chat_id' => $cid,
        'text' => "<b>🆔 Almashuv ID'sini yuboring:</b>",
        'parse_mode' => "html",
        'reply_markup' => $back
    ]);
    file_put_contents("step/$cid.step", "bytop");
    exit();
}

if ($step == "bytop" && isset($text) && $text != "◀️ Orqaga") {
    if (file_exists("obmen/$text/$text.txt")) {
        $alega = file_get_contents("obmen/$text/egasi.txt");
        $alholat = file_get_contents("obmen/$text/holat.txt");
        $alid = file_get_contents("obmen/$text/$text.txt");
        $alturi = file_get_contents("obmen/$text/valyuta.txt");
        $alsana = file_get_contents("obmen/$text/sana.txt");
        $alvaqti = file_get_contents("obmen/$text/vaqt.txt");
        $aljami = file_get_contents("obmen/$text/miqdor.txt");
        bot('sendMessage', [
            'chat_id' => $cid,
            'text' => "<b>✅ Almashuv topildi:</b> \n\n🔁 <b>Almashuv egasi:</b> <i><a href='tg://user?id=$alega'>$alega</a></i>\n🔁 <b>Almashuv ID:</b> <i>$alid</i>\n🔁 <b>Almashuv turi:</b> <i>$alturi</i>\n🔁 <b>Almashuv holati:</b> <i>$alholat</i>\n🔁 <b>Almashuv vaqti:</b> <i>$alsana $alvaqti</i>\n🔁 <b>Almashuv summasi:</b> <i>$aljami $valyuta</i>",
            'parse_mode' => "html",
        ]);
        unlink("step/$cid.step");
    } else {
        bot('sendMessage', [
            'chat_id' => $cid,
            'text' => "<b>⚠️ Almashuv topilmadi!\n\nQayta urinib ko'ring:</b>",
            'parse_mode' => "html",
        ]);
    }
    exit();
}

if ($text == "◀️ Orqaga") {
    if ($cid == $admin) {
        bot('SendMessage', [
            'chat_id' => $admin,
            'text' => "<b>🖥 Asosiy menyuga qaytdingiz.</b>",
            'parse_mode' => 'html',
            'reply_markup' => $menus,
        ]);
    } else {
        bot('SendMessage', [
            'chat_id' => $cid,
            'text' => "<b>🖥 Asosiy menyuga qaytdingiz.</b>",
            'parse_mode' => 'html',
            'reply_markup' => $menu
        ]);
    }
    if (file_exists("step/$cid.step")) unlink("step/$cid.step");
    exit();
}

// ============ CALLBACK QUERY LAR ============

if ($data == "result") {
    bot('deleteMessage', ['chat_id' => $cid2, 'message_id' => $mid2]);
    bot('SendMessage', [
        'chat_id' => $cid2,
        'text' => "✅ <b>Obunangiz tasdiqlandi. Bosh menyudasiz.</b>",
        'parse_mode' => 'html',
        'reply_markup' => $menu,
    ]);
    exit();
}

if ($data == "supp") {
    bot('deleteMessage', ['chat_id' => $cid2, 'message_id' => $mid2]);
    bot('SendMessage', [
        'chat_id' => $cid2,
        'text' => "<b>Murojaat matnini kiriting:</b>",
        'parse_mode' => 'html',
        'reply_markup' => $back,
    ]);
    file_put_contents("step/$cid2.step", 'murojaat');
    exit();
}

if ($step == "murojaat" && isset($text)) {
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
            'inline_keyboard' => [[['text' => "📝 Javob yozish", 'callback_data' => "send-$cid"]]]
        ])
    ]);
    if (file_exists("step/$cid.step")) unlink("step/$cid.step");
    exit();
}

if (strpos($data, "send-") === 0) {
    $id = explode("-", $data)[1];
    bot('deleteMessage', ['chat_id' => $cid2, 'message_id' => $mid2]);
    bot('sendMessage', [
        'chat_id' => $admin,
        'text' => "<b>Xabaringizni kiriting:</b>",
        'parse_mode' => 'html',
        'reply_markup' => $back,
    ]);
    file_put_contents("step/$cid2.step", "send-$id");
    exit();
}

if (strpos($step, "send-") === 0 && isset($text)) {
    $id = explode("-", $step)[1];
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
    if (file_exists("step/$cid.step")) unlink("step/$cid.step");
    exit();
}

// ============ ADMIN PANEL ============

if ($text == "🗄 Boshqarish" && $cid == $admin) {
    bot('SendMessage', [
        'chat_id' => $cid,
        'text' => "<b>Admin paneliga xush kelibsiz!</b>",
        'parse_mode' => 'html',
        'reply_markup' => $panel,
    ]);
    if (file_exists("step/$cid.step")) unlink("step/$cid.step");
    exit();
}

if ($text == "🔄 Almashuv holati" && $cid == $admin) {
    bot('SendMessage', [
        'chat_id' => $cid,
        'text' => "<b>🔄 Almashuv holati: $status</b>",
        'parse_mode' => 'html',
        'reply_markup' => json_encode([
            'inline_keyboard' => [[
                ['text' => "☑️", 'callback_data' => "ob-☑️"],
                ['text' => "❌", 'callback_data' => "ob-❌"]
            ]]
        ])
    ]);
    exit();
}

if (strpos($data, "ob-") === 0) {
    $statuss = explode("-", $data)[1];
    if ($status == $statuss) {
        bot('answerCallbackQuery', ['callback_query_id' => $qid, 'text' => "⚠️ Bir xil sozlamani qayta bajara olmaysiz.", 'show_alert' => true]);
    } else {
        file_put_contents("tizim/holat.txt", $statuss);
        bot('editMessageText', [
            'chat_id' => $cid2,
            'message_id' => $mid2,
            'text' => "<b>🔄 Almashuv holati o'zgartirildi: $statuss</b>",
            'parse_mode' => "html",
            'reply_markup' => json_encode([
                'inline_keyboard' => [[
                    ['text' => "☑️", 'callback_data' => "ob-☑️"],
                    ['text' => "❌", 'callback_data' => "ob-❌"]
                ]]
            ])
        ]);
    }
    exit();
}

if ($text == "🔎 Foydalanuvchini boshqarish" && $cid == $admin) {
    bot('SendMessage', [
        'chat_id' => $cid,
        'text' => "<b>Kerakli foydalanuvchining ID raqamini kiriting:</b>",
        'parse_mode' => 'html',
        'reply_markup' => $boshqarish
    ]);
    file_put_contents("step/$cid.step", 'iD');
    exit();
}

if ($step == "iD" && isset($text) && $cid == $admin) {
    if (file_exists("odam/$text.dat")) {
        file_put_contents("step/visualcoder.txt", $text);
        $ban = file_exists("ban/$text.txt") ? file_get_contents("ban/$text.txt") : null;
        $bans = ($ban == "ban") ? "🔕 Bandan olish" : "🔔 Banlash";
        bot('SendMessage', [
            'chat_id' => $cid,
            'text' => "<b>Foydalanuvchi topildi!\n\nID:</b> <a href='tg://user?id=$text'>$text</a>",
            'parse_mode' => 'html',
            'reply_markup' => json_encode([
                'inline_keyboard' => [[['text' => "$bans", 'callback_data' => "ban"]]]
            ])
        ]);
        if (file_exists("step/$cid.step")) unlink("step/$cid.step");
    } else {
        bot('SendMessage', [
            'chat_id' => $cid,
            'text' => "<b>Foydalanuvchi topilmadi.\n\nQayta urinib ko'ring:</b>",
            'parse_mode' => 'html',
        ]);
    }
    exit();
}

if ($data == "ban") {
    $saved = file_get_contents("step/visualcoder.txt");
    if ($admin != $saved) {
        if (file_exists("ban/$saved.txt")) {
            unlink("ban/$saved.txt");
            bot('editMessageText', [
                'chat_id' => $cid2,
                'message_id' => $mid2,
                'text' => "<b>Foydalanuvchi ($saved) bandan olindi!</b>",
                'parse_mode' => "html",
                'reply_markup' => json_encode([
                    'inline_keyboard' => [[['text' => "◀️ Orqaga", 'callback_data' => "foydalanuvchi"]]]
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
                    'inline_keyboard' => [[['text' => "◀️ Orqaga", 'callback_data' => "foydalanuvchi"]]]
                ])
            ]);
        }
    } else {
        bot('answerCallbackQuery', ['callback_query_id' => $qid, 'text' => "Asosiy adminlarni bloklash mumkin emas!", 'show_alert' => true]);
    }
    exit();
}

if ($text == "✉ Xabar yuborish" && $cid == $admin) {
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
    bot('deleteMessage', ['chat_id' => $cid2, 'message_id' => $mid2]);
    bot('SendMessage', [
        'chat_id' => $cid2,
        'text' => "*Xabaringizni kiriting:*",
        'parse_mode' => "markdown",
        'reply_markup' => $boshqarish
    ]);
    file_put_contents("step/$cid2.step", "send");
    exit();
}

if ($step == "send" && isset($text) && $cid == $admin) {
    $lich = file_get_contents("azo.dat");
    $lichka = explode("\n", $lich);
    foreach ($lichka as $lichkalar) {
        if (!empty($lichkalar)) {
            bot("SendMessage", [
                'chat_id' => $lichkalar,
                'text' => $text,
                'parse_mode' => 'html',
                'disable_web_page_preview' => true,
            ]);
        }
    }
    bot("sendmessage", [
        'chat_id' => $admin,
        'text' => "<b>Xabaringiz yuborildi!</b>",
        'parse_mode' => 'html',
        'reply_markup' => $panel
    ]);
    if (file_exists("step/$cid.step")) unlink("step/$cid.step");
    exit();
}

if ($text == "📊 Statistika" && $cid == $admin) {
    $baza = file_get_contents("azo.dat");
    $obsh = substr_count($baza, "\n");
    bot('SendMessage', [
        'chat_id' => $cid,
        'text' => "👥 <b>Foydalanuvchilar:</b> $obsh ta",
        'parse_mode' => 'html',
        'reply_markup' => json_encode([
            'inline_keyboard' => [[['text' => "Yopish", 'callback_data' => "boshqarish"]]]
        ])
    ]);
    exit();
}

if ($text == "⚙ Asosiy sozlamalar" && $cid == $admin) {
    bot('SendMessage', [
        'chat_id' => $cid,
        'text' => "<b>⚙️ Asosiy sozlamalar bo'limiga xush kelibsiz!</b>\n\n<i>Nimani o'zgartiramiz?</i>",
        'parse_mode' => 'html',
        'reply_markup' => $asosiy,
    ]);
    exit();
}

if ($text == "📢 Kanallar" && $cid == $admin) {
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

if ($text == "*️⃣ Birlamchi sozlamalar" && $cid == $admin) {
    bot('SendMessage', [
        'chat_id' => $cid,
        'text' => "<b>*️⃣  Birlamchi sozlamalar bo'limidasiz.</b>",
        'parse_mode' => 'html',
        'reply_markup' => json_encode([
            '
