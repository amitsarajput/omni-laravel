<?php
return [ 
    'title' => 'COOKIES Y PRIVACIDAD',
    //'intro' => 'This website uses cookies in order to enhance the overall user experience.',
    'intro' => 'Acepto el uso de cookies y mecanismos de seguimiento que se utilizan para analizar mi actividad en este sitio web con el fin de mejorar mi experiencia de usuario.',
    'link' => '<a href=":url">Haz clic</a>  aquí para más información.',

    'essentials' => 'ACEPTAR',
    'all' => 'ACEPTAR',
    'customize' => 'Gestionar mis preferencias',
    'manage' => 'Manage cookies',
    'details' => [
        'more' => 'More details',
        'less' => 'Less details',
    ],    
    'save' => 'Save settings',
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
