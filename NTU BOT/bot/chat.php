<?php
include "Bot.php";
$bot = new Bot;
$questions=[
    //que es covid
    "Where is the ntu?" => "10617台北市大安區羅斯福路四段1號",
    "What about NTU University?" => "National Taiwan University (NTU) is one of the top public universities in Taipei City, Taiwan. It is ranked #77 in QS World University Rankings 2023.",
    "What is the required level of English?" => "TOEFL iBT: 71,IELTS: 5.5,TOEIC: 750,GEPT: High-Intermediate",
   
    
       
    //name
    "como te llamas?" =>"Soy Uni.Bot y estoy para servirte",
    "cual es tu nombre?" =>"I'm the university bot and I'm here to help you",
    "What's your name?" =>"i'm NTU.bot ",



    //saludo
    "hola" =>"Hola que tal!",
    "un saludo" =>"como te va",
    "hello" =>"un gusto de verte",
 
    //despedida
    "adios" =>"cuidate",
    "hasta la proxima" =>"nos vemos pronto",
    "nos vemos" =>"te estare esperando",
    "bye" =>"Good bye ♥",
    "see you" =>"see you later ♥",
    //
    "what is your name?" =>" my name is NTU.Bot",
   


    "tu nombre es?" => "Mi nombre es " . $bot->getName(),
    "tu eres?" => "Yo soy una " . $bot->getGender()
];

if (isset($_GET['msg'])) {
   
    $msg = strtolower($_GET['msg']);
    $bot->hears($msg, function (Bot $botty) {
        global $msg;
        global $questions;
        if ($msg == 'where is the ntu?' || $msg == "where is the ntu?") {
            $botty->reply('10617台北市大安區羅斯福路四段1號'); }
            if ($msg == '' || $msg == "what about ntu?") {
                $botty->reply('National Taiwan University (NTU) is one of the top public universities in Taipei City, Taiwan. It is ranked #77 in QS World University Rankings 2023.'); }
              
                    
            elseif ($botty->ask($msg, $questions) == "NADA") {
            $botty->reply("Sorry, Questions must be bot related.");
        } else {
            $botty->reply($botty->ask($msg,$questions));
        }
    });
}
