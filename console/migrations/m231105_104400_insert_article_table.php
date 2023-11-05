<?php

use yii\db\Migration;

/**
 * Class m231105_104400_insert_article_table
 */
class m231105_104400_insert_article_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('article', ['content', 'urlToImage', 'description', 'title', 'author'],
            [
                [
                    'Met een 71-65-zege tegen Kortenberg boekte eersteprovincialer BC Opwijk afgelopen weekend een tweede zege van het seizoen. De troepen van coach Ben Becqué staan zo mooi in de middenmoot. De top vijf … [+1771 chars]',
                    'https://static.nieuwsblad.be/Assets/Images_Upload/2023/10/24/f08487ac-30d8-4cd8-b889-4463af3101f0.jpg?maxheight=460&maxwidth=638',
                    'Met een 71-65-zege tegen Kortenberg boekte eersteprovincialer BC Opwijk afgelopen weekend een tweede zege van het seizoen. De troepen van coach Ben Becqué staan zo mooi in de middenmoot. “De top vijf is ons doel dit seizoen en ook de Beker van Vlaams-Brabant …',
                    'BC Opwijk klimt met tweede zege naar middenmoot: “We gaan voor de top vijf in de competitie en willen ook iets maken van de Beker van Vlaams-Brabant',
                    'Patrick Ceulemans'
                ],
                [
                    'In the days after Hamas attacked Israel earlier this month, Shlomo Karhi, the countrys communications minister, did something that was guaranteed to catchtheattentionoftheAmericanpress: he called out… [+15070 chars]',
                    'https://www.cjr.org/wp-content/uploads/2023/10/AP23191634215187-800x431.jpg?311942',
                    'In the days after Hamas attacked Israel earlier this month, Shlomo Karhi, the country’s communications minister, did something that was guaranteed to catch the attention of the American press: he called out Donald Trump, who had just criticized various Isr…',
                    'Israel wants to shutter Al Jazeera. Will it stop there?',
                    'Jon Allsop'
                ],
                [
                    '23() . AP" /&gt; 23() . AP. 23() BBC .7 13 . 100 . 60~70 , . , 1 300 AP . , . ( 220) 3 2 140 2 . , 34 , . 455 . . .(UNHCHR) . , , , 320 . 22 24 600 . () ',
                    'https://img.khan.co.kr/news/2023/10/24/l_2023102501000815800079341.jpg',
                    '이스라엘 ‘대피령’ 엄포에 남부로 피란한 북부 주민들 식수·식량 부족…위생 열악 ‘안전 약속’ 깬 공습에 유턴 누워서 기다리는 것밖엔… 이스라엘군의 공습으로 다친 가자지구 주민들이 23일(현지시간) ···',
                    '여기도 지옥’ 목숨 걸고 다시 집으로 돌아가는 가자 피란민들',
                    '노정연 기자 dana_fm@kyunghyang.com'
                ],
                [
                    'A ban on "no-fault" evictions will be indefinitely delayed, the government has announced, despite promising to abolish the practice four years ago. The Renters Reform Bill, proposed by the Conserva… [+4715 chars]',
                    'https://cdn.mos.cms.futurecdn.net/uc6Bots6qti7E9b5HAnoXL-1200-80.jpg',
                    'Ban on no-fault evictions delayed indefinitely amid opposition from landlords and Tory rebels',
                    'What uncertainty over Renters Reform Bill means for tenants',
                    'theweekonlineeditorsuk@futurenet.com (Harriet Marsden, The Week UK)'
                ],
                [
                    'IDF handout Article information Author, Role, BBC Reporting from -. .23 , . , , . , , , .  , . , . . , 43- , -, , . , , , , , .… [+613 chars]',
                    'https://ichef.bbci.co.uk/news/1024/branded_ukrainian/53e9/live/c584fd60-7263-11ee-8139-61b1db4c8e2f.jpg',
                    'Армія Ізраїлю показала журналістам невідредаговані відеокадри, зняті камерами бойовиків ХАМАС. Це зробили для того, щоб нагадати світові про жорстокість, якою супроводжувався напад на Ізраїль два тижні тому.',
                    'Дуже страшне відео. Ізраїль показав кадри нападу ХАМАС з жорсткими вбивствами',
                    'http://www.facebook.com/bbcnews'
                ],
                [
                    'Released Hamas hostage Yocheved Lifshitz, 85, described Tuesday at a widely attended press conference outside Tel Avivs Ichilov Hospital how her terrorist captors took her by motorcycle from Kibbutz … [+8055 chars]',
                    'https://static.timesofisrael.com/www/uploads/2023/10/F231024AVS009-1024x640.jpg',
                    'Yocheved Lifshitz, 85, released Monday, describes hell as terrorists rampaged in kibbutz; abductors beat her on way to Gaza; was taken into spiderweb of tunnels, treated with care',
                    'Freed Hamas hostage recounts ordeal, slams Israeli failures, speaks well of captors',
                    'null'
                ],
                [
                    'Indiában akár 6 évre is leültethetik azt, aki veszélyeztetett állatok testrészeit viseli magán. Egy indiai valóságshow forgatásán az egyik szerepl egy tigriskaromból készült medált viselt, ezért kés… [+1562 chars]',
                    'https://api.hvg.hu/Img/7fcefbf8-ac48-4ee6-aef5-32203afa118c/20ec1a36-9b0c-4b4a-b0c5-7b9aa349cb97.jpg',
                    'Indiában akár 6 évre is leültethetik azt, aki veszélyeztetett állatok testrészeit viseli magán.',
                    'Aranyláncon fityegő tigriskarommal menőzött az indiai Big Brother szereplője, rendőrök vitték el a forgatásról',
                    'hvg@hvg.hu'
                ],
                [
                    '« » (Doctor Who) «» « » , « ». . , 15 , BBC 15 , 14 .- 15 , 14 2024 « » .',
                    'https://cdn.kanobu.ru/articles/pics/tmp/images/2023/10/24/0d5d78c1-5164-e3e7-4e1e-d8378bab30c4.jpg',
                    'Официальный аккаунт сериала «Доктор Кто» (Doctor Who) сообщил о пополнении в команде — режиссёр шоу «Локи» Кейт Херрон и актриса Бриони Рэдман из «Не забывай меня» присоединились для того, чтобы написать эпизод для «Доктора Кто». До этого Кейт Херрон и Бриони…',
                    'Режиссёр «Локи» и актриса из «Не забывай меня» напишут эпизод для «Доктора Кто»',
                    'SerjVas'
                ],
                [
                    'One of the two Israeli hostages released yesterday by Hamas is now speaking out about her time as a captive of the Palestinian terrorist group, describing a "spiderweb" of tunnels underneath the Ga… [+2260 chars]',
                    'https://static.foxnews.com/foxnews.com/content/uploads/2023/10/Yocheved-Lifshitz.jpg',
                    'Yocheved Lifshitz, an Israel hostage released by Hamas, is speaking out about the “spiderweb" of tunnels underneath Gaza where she was held captive.',
                    'Freed Israeli hostage speaks out about terrifying Hamas capture, describes spiderweb of tunnels',
                    'Greg Norman'
                ],
                [
                    'India fvárosában, Delhiben a leveg szennyezettségének mértéke kritikus szintre emelkedett, és a következ napokban várhatóan tovább romlik.Delhi városában egész évben rossz a helyzet. Télen azonban kü… [+2107 chars]',
                    'https://cdn.nwmgroups.hu/s/img/i/2310/20231024delhi-pollute.jpg?w=636',
                    'Gopal Rai környezetvédelmi miniszter akciótervet dolgozott ki.',
                    'Kritikus szintre emelkedett a levegő szennyezettsége Delhiben',
                    'null'
                ],
                [
                    '1. UAW expands strike to Stellantis Ram truck plant The United Auto Workers union on Monday expanded its strike against Stellantis, telling 6,800 workers at the automaker largest plant and bigges… [+4134 chars]',
                    'https://cdn.mos.cms.futurecdn.net/Ub7adDA3DqVHjY9nqCZwVF-1200-80.jpg',
                    'UAW expands its strike to Stellantis Ram pickup plant, Tesla says DOJ is looking into its business practices, and more',
                    'The daily business briefing: October 24, 2023',
                    'theweekonlineeditors@futurenet.com (Harold Maass, The Week US)'
                ],
                [
                    'Chaotisch war die Lage schon zuvor, mittlerweile nimmt das Gezänk in der größeren der beiden Parlamentskammern in den USA absurde Züge an. Seit mehr als drei Wochen ist der drittmächtigste Posten in… [+1644 chars]',
                    'https://image.stern.de/33939686/t/6m/v1/w1440/r1.7778/-/rednerpult-im-repraesentantenhaus.jpg',
                    'Die Suche nach einem neuen Vorsitzenden des US-Repräsentantenhauses will einfach nicht enden. Nachdem auch der ultrarechte Abgeordnete Jim Jordan seinen Hut aus dem Ring genommen hat, bewerben sich acht neue Republikaner um das Sprecheramt.',
                    'Chaos im Repräsentantenhaus: Wer hat noch nicht? Wer will nochmal? Diese acht Republikaner wollen McCarthy als Haussprecher beerben',
                    'Yannik Schüller'
                ],
            ]
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m231105_104400_insert_article_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231105_104400_insert_article_table cannot be reverted.\n";

        return false;
    }
    */
}
