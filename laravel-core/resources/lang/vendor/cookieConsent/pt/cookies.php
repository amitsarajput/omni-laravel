<?php
return [  
    'title' => 'Cookies e Privacidade',
    //'intro' => 'This website uses cookies in order to enhance the overall user experience.',
    'intro' => 'Concordo com a utilização de cookies e mecanismos de rastreamento que são utilizados para analisar a minha atividade neste website, a fim de melhorar a minha experiência de utilizador. ',
    'link' => '<a href=":url">Clique aqui</a>  para obter mais informações.',

    'essentials' => 'CONCORDO',
    'all' => 'CONCORDO',
    'customize' => 'Gérer mes préférences ',
    'manage' => 'Gérer les cookies ',
    'details' => [
        'more' => 'Plus de détails ',
        'less' => 'Moins de détails ',
    ],    
    'save' => 'Enregistrer les paramètres ',
    'cookie' => 'Cookie',
    'purpose' => 'Objectif',
    'duration' => 'Durée',
    'year' => 'An|Ans',
    'day' => 'Jour|Jours',
    'hour' => 'Heure|Heures',
    'minute' => 'Minute|Minutes',

    'categories' => [
        'essentials' => [
            'title' => 'Cookies essentiels',
            'description' => 'Ces cookies sont nécessaires au bon fonctionnement du site web, si vous n\'acceptez pas les cookies essentiels, vous ne pourrez pas accéder au site. ',
        ],
        'analytics' => [
            'title' => 'Cookies d\'analyse',
            'description' => 'Les cookies d\'analyse nous aident à comprendre comment les visiteurs utilisent le site en collectant des données anonymes. Ces cookies aident à améliorer la performance du site en nous montrant quelles pages sont les plus fréquemment visitées ou où les utilisateurs rencontrent des problèmes. Nous utilisons Google Analytics à cette fin, c\'est-à-dire les cookies Google Analytics qui anonymisent les adresses IP des utilisateurs et fournissent des données anonymisées sur l\'utilisation du site. ',
        ],
        'optional' => [
            'title' => 'Cookies optionnels',
            'description' => 'Ces cookies permettent des fonctionnalités qui pourraient améliorer votre expérience utilisateur, mais leur absence n\'affectera pas votre capacité à naviguer sur notre site web. ',
        ],
    ],

    'defaults' => [
        'consent' => 'Utilisé pour stocker les préférences de consentement aux cookies de l\'utilisateur.',
        'session' => 'Utilisé pour identifier la session de navigation de l\'utilisateur.',
        'csrf' => 'Utilisé pour sécuriser à la fois l\'utilisateur et notre site web contre les attaques de falsification de requêtes intersites.',
        '_ga' => 'Cookie principal utilisé par Google Analytics, permet à un service de distinguer un visiteur d\'un autre.',
        '_ga_ID' => 'Utilisé par Google Analytics pour maintenir l\'état de la session.',
        '_gid' => 'Utilisé par Google Analytics pour identifier l\'utilisateur.',
        '_gat' => 'Utilisé par Google Analytics pour limiter le taux de requêtes.',
    ],
];
