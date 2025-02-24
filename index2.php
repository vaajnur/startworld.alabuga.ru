<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");


error_reporting(E_ERROR);

$testimonials = [
    [
        'image' => 'https://static.tildacdn.com/tild3666-3034-4831-b739-373265303332/Joan.png',
        'text' => "My time in the programme is filled with exciting experiences! The Russian language course offers participants a fantastic opportunity to learn the language while immersing themselves in the rich culture of Russia through an integration programme.<br>I particularly enjoy the excursions! For instance, we recently visited the Museum of the History of Tatarstan, and it was fantastic! I was captivated by everything I saw; each exhibit and historical event vividly illustrated the culture and traditions of the region. It was not only fascinating but also incredibly beneficial for our learning.<br>These experiences do more than just fill our days—they truly enhance our understanding and appreciation of Russian culture! It has been an incredibly thrilling time.",
        'name' => 'Joan',
        'country' => 'Zambia',
    ],
    [
        'image' => 'https://static.tildacdn.com/tild3531-3139-4034-b033-313935373666/Susan.png',
        'text' => "I love visiting conversation clubs! They always have such a friendly vibe. Since I started chatting with native speakers regularly, my vocabulary has really grown, and now I find it so much easier to communicate in everyday situations.<br>We talk about all sorts of topics at these clubs, and I've learned so much about Russian culture and traditions. It's been an amazing experience!",
        'name' => 'Thuku Susan Nyambura',
        'country' => 'Kenya',
    ],
    [
        'image' => 'https://static.tildacdn.com/tild3830-3864-4839-a661-393931356236/Tivobesta_Ababa.png',
        'text' => "I absolutely love speaking clubs! They’re such a fun way to learn new words and chat with other people in Russian. It really helps me understand others better and make new friends.<br>I’ve also been on a few excursions that introduced me to the amazing cultural heritage of Russia. The one I enjoyed the most was definitely the trip to Kazan! We explored so many beautiful monuments, walked along the embankment, and visited the stunning Dvorets Zemledelstsev. It was such an unforgettable experience!",
        'name' => 'Tiwobesta Abebe',
        'country' => 'Ethiopia',
    ],
    [
        'image' => 'https://static.tildacdn.com/tild3865-3961-4234-a234-313238616339/Atto_Eunice_Paul.png',
        'text' => "I've been on two tours since I arrived in Russia, and I absolutely loved them! Visiting the historical sites was such a highlight for me. The HR specialists and invited guests shared some really fascinating lectures, which I found super valuable. They covered essential information about accommodation, cultural nuances, and etiquette—things that are so important to know while exploring a new country!",
        'name' => 'Ongom Atto Eunice Paul',
        'country' => 'South Sudan',
    ],
    [
        'image' => 'https://static.tildacdn.com/tild3437-6235-4436-a263-633036656465/Nthabeleng_Sylvia.png',
        'text' => "The Alabuga Start programme has truly opened a vibrant world of opportunities for me! Through engaging in conversation clubs, I not only dive deep into the Russian language but also connect with amazing individuals in a friendly and relaxed setting. This experience is a treasure for anyone eager to learn the language in an enjoyable way!<br>Recently, I had the pleasure of attending a master class focused on Russian cuisine, and it was absolutely delightful! We savored incredible traditional dishes—my personal favorite being borsch!—and uncovered the secrets behind their preparation. I now have a collection of new recipes that I can't wait to try out for my friends soon.<br>Every lesson brings a fresh wave of inspiration and happiness! I am grateful to the Alabuga Start team for these great experiences and the invaluable knowledge they share.",
        'name' => 'Nthabeleng Sylvia',
        'country' => 'Lesoto',
    ],
    [
        'image' => 'https://static.tildacdn.com/tild6465-6131-4633-b766-353731633461/Monica.png',
        'text' => "I really enjoy participating in conversation clubs! The atmosphere here is so friendly that we practice Russian fluently and feel comfortable making mistakes, which is incredibly important. I notice my confidence growing with each session.<br>I particularly remember our excursions to Yelabuga and Naberezhnye Chelny. We explored fascinating cultural and historical sites, fully immersing ourselves in the essence of each city. This experience was not only captivating but also educational. There is so much beauty and history surrounding us!<br>These events are not merely entertaining; they allow us to spend our time productively and adapt to a new culture more quickly. I feel like I am discovering new things and becoming part of this wonderful world. A huge thank you to everyone who organizes these meetings! You make our learning experience vibrant and unforgettable.",
        'name' => 'Monica',
        'country' => 'Kenya',
    ]
];

$testimonialsRU = [
    [
        'text' => "Моё пребывание в программе просто наполнено увлекательными событиями и яркими мероприятиями! Участницам предоставляется замечательная возможность изучать русский язык и погружаться в богатую русскую культуру благодаря интеграционной программе. <br><br>Особенно мне нравятся экскурсии! Например, недавно мы побывали в Музее истории Татарстана, и это было просто великолепно! Я была в восторге от всего, что увидела: каждый экспонат, каждое историческое событие живо рассказывало о культуре и традициях региона. Это не только было интересно, но и невероятно полезно для нашего обучения.<br><br>Эти впечатления не просто заполняют наши дни — они действительно помогают лучше понять и почувствовать русскую культуру! Невероятно увлекательное время!",
        'name' => 'Джоан',
        'country' => 'Замбия',
    ],
    [
        'text' => "Мне нравятся посещать разговорные клубы, потому что на них всегда дружелюбная атмосфера. Благодаря постоянному общению с носителями языка, мой словарный запас значительно увеличился, и теперь мне легче общаться в повседневной жизни. На разговорных клубах мы обсуждаем различные темы, и я узнала много нового о российской культуре и традициях.",
        'name' => 'Сьюзан',
        'country' => 'Кения',
    ],
    [
        'text' => "Мне очень нравятся разговорные клубы, потому что мы учим новые слова и общаемся с другими участницами на русском языке. Это помогает лучше понимать других людей и заводить новых друзей. Также, я была на нескольких экскурсиях благодаря которым, познакомилась с богатым культурным наследием России. Больше всего мне понравилась экскурсия в Казань, мы посетили много памятников, набережную и Дворец Земледельцев.",
        'name' => 'Тивобеста Абебе',
        'country' => 'Эфиопия',
    ],
    [
        'text' => "Я была на двух на экскурсиях с тех пор, как приехала в Россию, и мне они очень понравились, потому что я смогла посетить исторические места. Также HR-специалисты и приглашенные гости проводили для нас интересные лекции, которые я считаю, очень важны, так как они предоставляют необходимую базовую информацию о проживании, культурных особенностях и этикета.",
        'name' => 'Атто Юнис Пол',
        'country' => 'Южный Судан',
    ],
    [
        'text' => "Программа «Алабуга Старт» открыла для меня целый мир возможностей! Участвуя в разговорных клубах, я не только погружаюсь в русский язык, но и общаюсь с замечательными людьми в непринужденной атмосфере. Это настоящая находка для тех, кто хочет учить язык с удовольствием!<br>Недавно я побывала на мастер-классе, посвящённом русской кухне. Это было просто потрясающе! Мы не только пробовали невероятные традиционные блюда (моё любимае — борщ!), но и узнали секреты их приготовления. Теперь у меня в запасе есть несколько новых рецептов, которые скоро попробую приготовить для друзей. <br>Каждое занятие — это новая порция вдохновения и радости! Огромное спасибо команде «Алабуга Старт» за такие яркие эмоции и ценные знания!",
        'name' => 'Нтхабеленг Сильвия',
        'country' => 'Лесото',
    ],
    [
        'text' => "Мне невероятно нравятся разговорные клубы!Здесь царит такая дружелюбная атмосфера, что мы свободно практикуем русский язык и не боимся делать ошибки. Это так важно! Каждый раз чувствую, как уверенность растёт.<br>Особенно запомнились экскурсии в Елабугу и Набережные Челны. Мы исследовали удивительные культурные и исторические места, погружаясь в атмосферу каждого города. Этот опыт был не только увлекательным, но и познавательным. Вокруг столько красоты и истории!<br>Эти мероприятия не просто развлекают — они помогают нам с пользой проводить время и быстрее адаптироваться к новой культуре. Я чувствую, как открываю для себя что-то новое и становлюсь частью этого удивительного мира.Спасибо всasем, кто организует эти встречи! Вы делаете наше обучение ярким и запоминающимся!",
        'name' => 'Моника',
        'country' => 'Кения',
    ]

];


$testimonialsFR = [
    [
        'text' => "Mon séjour dans le programme est plein d'événements passionnants et d'activités enrichissantes ! Les participantes ont la merveilleuse opportunité d'apprendre le russe et de plonger dans la riche culture russe grâce à ce programme d'intégration.<br>J'adore particulièrement les visites guidées ! <br><br>Par exemple, nous avons récemment visité le Musée de l'Histoire du Tatarstan, et c'était tout simplement magnifique ! J'étais émerveillée par tout ce que j'ai vu : chaque exposition, chaque événement historique racontait la culture et les traditions de la région avec vivacité. C'était non seulement intéressant, mais aussi incroyablement utile pour notre apprentissage.<br><br>Ces expériences ne remplissent pas seulement nos journées — elles nous aident vraiment à mieux comprendre et à ressentir la culture russe ! Un moment incroyablement captivant !",
        'name' => 'Joan',
        'country' => 'Ouganda',
    ],
    [
        'text' => "J'aime fréquenter les clubs de conversation, car il y règne toujours une ambiance conviviale. Grâce à mes échanges réguliers avec des locuteurs natifs, mon vocabulaire a considérablement augmenté, et il m'est désormais plus facile de communiquer dans la vie quotidienne. Nous discutons de divers sujets à ces clubs de conversation, et j'ai appris beaucoup de choses intéressantes sur la culture et les traditions russes.",
        'name' => 'Susan',
        'country' => 'Kenya',
    ],
    [
        'text' => "J'aime beaucoup les clubs de conversation, car nous apprenons de nouveaux mots et nous communiquons avec d'autres participantes en russe. Cela m'aide à mieux comprendre les autres et à me faire de nouveaux amis. De plus, j'ai participé à plusieurs excursions qui m'ont permis de découvrir le riche patrimoine culturel de la Russie. J'ai particulièrement aimé l'excursion à Kazan, où nous avons visité de nombreux monuments, le quai et le Palais des Agriculteurs.",
        'name' => 'Tivobesta Abebe',
        'country' => 'Éthiopie',
    ],
    [
        'text' => "J'ai fait deux visites guidées depuis mon arrivée en Russie, et je les ai beaucoup appréciées, car j'ai pu visiter des sites historiques. De plus, des spécialistes RH et des conférenciers invités ont fait des conférences intéressantes pour nous, que je considère très importantes, car elles fournissent des informations essentielles de base sur la vie ici, les particularités culturelles et l'étiquette.",
        'name' => 'Atto Younis Pol',
        'country' => 'Soudan du Sud',
    ],
    [
        'text' => "Le programme Alabuga Start m'a ouvert le monde de possibilités ! En participant à des clubs de conversation, je ne fais pas seulement des progrès en russe, mais je rencontre aussi des personnes formidables dans une ambiance détendue. C'est une véritable découverte pour ceux qui souhaitent apprendre la langue avec plaisir !<br><br>Récemment, j'ai assisté à un atelier consacré à la cuisine russe. C'était tout simplement incroyable ! Nous avons non seulement goûté d'incroyables plats traditionnels (mon préféré est le bortsch !), mais nous avons également appris les secrets de leur préparation. Maintenant, j'ai quelques nouvelles recettes que je vais bientôt essayer de préparer pour mes amis.<br><br>Chaque cours est une nouvelle dose d'inspiration et de joie ! Un grand merci à l'équipe d'Alabuga Start pour ces émotions vives et ces connaissances précieuses !",
        'name' => 'Nthabeleng Sylvia',
        'country' => 'Lesotho',
    ],
    [
        'text' => "J'adore vraiment les clubs de conversation ! L'ambiance y est si conviviale que nous pratiquons le russe librement sans avoir peur de faire des fautes. C'est tellement important ! Je me sens devenir plus confiante à chaque fois.<br><br>Je me souviens particulièrement des visites guidées à Élabuga et à Naberezhnye Chelny. Nous avons découvert des lieux culturels et historiques incroyables, en nous immergeant dans l'ambiance de chaque ville. Cette expérience a été à la fois fascinante et instructive. Il y a tant de beauté et d'histoire autour de nous !<br><br>Ces activités ne servent pas seulement à nous divertir — elles nous aident à passer du temps de manière utile et à nous adapter plus rapidement à la nouvelle culture. Je sens que je découvre quelque chose de nouveau pour moi et que je deviens une partie intégrante de ce monde merveilleux. Merci à tous ceux qui organisent ces rencontres ! Vous rendez notre apprentissage vivant et mémorable !",
        'name' => 'Monica',
        'country' => 'Kenya',
    ],
];

// exit;

Bitrix\Main\Loader::includeModule('iblock');

$bs = new CIBlockElement;

foreach ($testimonials as $key => $testimonial) {
  $arLoadProductArray =     [
        'IBLOCK_ID' => 3, 
        'ACTIVE' => 'Y',   
        'NAME' => $testimonial['name'], 
        'CODE' =>strtolower($testimonial['name']), 
        // 'PREVIEW_TEXT_TYPE' => 'html', 
        // 'DETAIL_TEXT_TYPE' => 'html',
        'PREVIEW_PICTURE' => CFile::MakeFileArray($testimonial['image']), 
        // 'DETAIL_TEXT' => $testimonial['text'],
        'PROPERTY_VALUES' => [ 
            'NAME_en' => $testimonial['name'], 
            'COUNTRY_en' => $testimonial['country'],  
            'REVIEW_en' => $testimonial['text'],  
            'NAME_ru' => $testimonialsRU[$key]['name'], 
            'COUNTRY_ru' => $testimonialsRU[$key]['country'],  
            'REVIEW_ru' => $testimonialsRU[$key]['text'],  
            'NAME_fr' => $testimonialsFR[$key]['name'], 
            'COUNTRY_fr' => $testimonialsFR[$key]['country'],  
            'REVIEW_fr' => $testimonialsFR[$key]['text'],  
            'YEAR' => 2024,  
        ],
    ];

  	/*if($PRODUCT_ID = $bs->Add($arLoadProductArray)) {
	    echo "
			New element was added. ID: ".$PRODUCT_ID."
		";
	  }
	  else {
	    echo "Error: ".$bs->LAST_ERROR."
		";
	 }*/
}


?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>