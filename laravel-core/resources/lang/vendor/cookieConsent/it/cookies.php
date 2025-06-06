<?php
return [ 
    'title' => 'Cookie e privacy',
    //'intro' => 'This website uses cookies in order to enhance the overall user experience.',
    'intro' => 'Accetto l\'uso di cookie e meccanismi di tracciamento utilizzati per analizzare la mia attività su questo sito web al fine di migliorare la mia esperienza di utente. ',
    'link' => 'Per ulteriori informazioni, fare <a href=":url">clic qui</a>.',

    'essentials' => 'ACCETTO',
    'all' => 'ACCETTO',
    'customize' => 'Gestisci le mie preferenze',
    'manage' => 'Gestisci i cookie',
    'details' => [
        'more' => 'Maggiori dettagli',
        'less' => 'Meno dettagli',
    ],    
    'save' => 'Salva impostazioni',
    'cookie' => 'Cookie',
    'purpose' => 'Purpose',
    'duration' => 'Duration',
    'year' => 'Year|Years',
    'day' => 'Day|Days',
    'hour' => 'Hour|Hours',
    'minute' => 'Minute|Minutes',

    'categories' => [
        'essentials' => [
            'title' => 'Essential cookies',
            'description' => ' These cookies are necessary for the basic functioning of the website, if you don’t agree to the essential cookies, you will not be able to access the website.',
        ],
        'analytics' => [
            'title' => 'Analytics Cookies',
            'description' => 'Analytics cookies help us understand how visitors use the site by collecting anonymous data.These cookies help improve the site’s performance by showing us which pages are most frequently visited or where users are encountering issues. We use Google Analytics for this purpose i.e. Google Analytics cookies that anonymize user IP addresses and provide anonymized data about site usage.',
        ],
        'optional' => [
            'title' => 'Optional cookies',
            'description' => 'These cookies enable features that could improve your user experience, but their absence will not impact your ability to browse our website.',
        ],
    ],

    'defaults' => [
        'consent' => 'Used to store the user\'s cookie consent preferences.',
        'session' => 'Used to identify the user\'s browsing session.',
        'csrf' => 'Used to secure both the user and our website against cross-site request forgery attacks.',
        '_ga' => 'Main cookie used by Google Analytics, enables a service to distinguish one visitor from another.',
        '_ga_ID' => 'Used by Google Analytics to persist session state.',
        '_gid' => 'Used by Google Analytics to identify the user.',
        '_gat' => 'Used by Google Analytics to throttle the request rate.',
    ],
];
