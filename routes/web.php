<?php

use Illuminate\Support\Facades\Route;

// Array di ricette statiche
$recipes = [
    [
        'id' => 1,
        'name' => 'Spaghetti alla Carbonara',
        'description' => 'La classica pasta romana con uova, guanciale e pecorino',
        'image' => 'images/recipes/carbonara.jpg', // Percorso locale
        'ingredients' => [
            '400g spaghetti',
            '200g guanciale',
            '4 tuorli',
            '100g pecorino romano',
            'Pepe nero q.b.'
        ],
        'steps' => [
            'Tagliare il guanciale a listarelle',
            'Far rosolare il guanciale in padella',
            'Mescolare tuorli e pecorino in una ciotola',
            'Cuocere la pasta e unire tutti gli ingredienti',
            'Aggiungere il pepe a piacere'
        ]
    ],
    [
        'id' => 2,
        'name' => 'Tiramisù',
        'description' => 'Il dolce italiano più amato nel mondo',
        'image' => 'images/recipes/tiramisu.jpg', // Percorso locale
        'ingredients' => [
            '500g mascarpone',
            '4 uova',
            'Savoiardi q.b.',
            'Caffè q.b.',
            'Cacao in polvere q.b.'
        ],
        'steps' => [
            'Separare tuorli e albumi',
            'Montare i tuorli con lo zucchero',
            'Aggiungere il mascarpone',
            'Montare gli albumi a neve e incorporare',
            'Assemblare il dolce alternando savoiardi inzuppati nel caffè e crema'
        ]
    ],
    [
        'id' => 3,
        'name' => 'Lasagne alla Bolognese',
        'description' => 'Il classico primo piatto della tradizione emiliana',
        'image' => 'images/recipes/lasagna-alla-bolognese.jpg', // Percorso locale
        'ingredients' => [
            'Pasta all\'uovo',
            'Ragù alla bolognese',
            'Besciamella',
            'Parmigiano reggiano',
            'Sale e pepe q.b.'
        ],
        'steps' => [
            'Preparare il ragù alla bolognese',
            'Preparare la besciamella',
            'Assemblare gli strati alternando pasta, ragù e besciamella',
            'Terminare con parmigiano grattugiato',
            'Cuocere in forno a 180° per 30 minuti'
        ]
    ],
    [
        'id' => 4,
        'name' => 'Parmigiana di Melanzane',
        'description' => 'Gustoso piatto della tradizione mediterranea',
        'image' => 'images/recipes/parmigiana.jpg', // Percorso locale
        'ingredients' => [
            'Melanzane',
            'Salsa di pomodoro',
            'Mozzarella',
            'Parmigiano reggiano',
            'Basilico fresco'
        ],
        'steps' => [
            'Affettare e friggere le melanzane',
            'Preparare la salsa di pomodoro',
            'Creare strati alternando melanzane, salsa e formaggi',
            'Completare con parmigiano e basilico',
            'Infornare a 180° per 25 minuti'
        ]
    ],
    [
        'id' => 5,
        'name' => 'Risotto ai Funghi Porcini',
        'description' => 'Cremoso risotto con funghi porcini freschi',
        'image' => 'images/recipes/risotto-funghi.jpg', // Già corretto
        'ingredients' => [
            'Riso Carnaroli',
            'Funghi porcini',
            'Brodo vegetale',
            'Cipolla',
            'Vino bianco',
            'Parmigiano reggiano'
        ],
        'steps' => [
            'Soffriggere la cipolla',
            'Tostare il riso',
            'Sfumare con vino bianco',
            'Aggiungere funghi e brodo gradualmente',
            'Mantecare con parmigiano'
        ]
    ],
    [
        'id' => 6,
        'name' => 'Vitello Tonnato',
        'description' => 'Antipasto piemontese freddo e raffinato',
        'image' => 'images/recipes/vitello-tonnato.jpg', // Percorso locale
        'ingredients' => [
            'Girello di vitello',
            'Tonno sott\'olio',
            'Capperi',
            'Acciughe',
            'Maionese'
        ],
        'steps' => [
            'Cuocere il vitello in brodo aromatico',
            'Preparare la salsa tonnata',
            'Affettare finemente il vitello',
            'Coprire con la salsa',
            'Decorare con capperi'
        ]
    ],
    [
        'id' => 7,
        'name' => 'Pizza Margherita',
        'description' => 'La regina delle pizze napoletane',
        'image' => 'images/recipes/pizza-margherita.jpg', // Percorso locale
        'ingredients' => [
            'Farina 00',
            'Pomodori San Marzano',
            'Mozzarella di bufala',
            'Basilico fresco',
            'Olio d\'oliva',
            'Lievito di birra'
        ],
        'steps' => [
            'Preparare l\'impasto e farlo lievitare',
            'Stendere la pizza a mano',
            'Aggiungere pomodoro e infornare',
            'Aggiungere mozzarella a metà cottura',
            'Completare con basilico fresco'
        ]
    ],
    [
        'id' => 8,
        'name' => 'Osso Buco alla Milanese',
        'description' => 'Piatto tradizionale lombardo con risotto allo zafferano',
        'image' => 'images/recipes/osso-buco.jpg', // Percorso locale
        'ingredients' => [
            'Osso buco di vitello',
            'Brodo di carne',
            'Carote, sedano, cipolla',
            'Vino bianco',
            'Gremolada'
        ],
        'steps' => [
            'Infarinare e rosolare la carne',
            'Preparare il soffritto',
            'Sfumare con vino bianco',
            'Cuocere lentamente con brodo',
            'Completare con gremolada'
        ]
    ],
    [
        'id' => 9,
        'name' => 'Cannoli Siciliani',
        'description' => 'Dolce tipico siciliano con ricotta',
        'image' => 'images/recipes/cannoli.jpg', // Percorso locale
        'ingredients' => [
            'Farina per le cialde',
            'Ricotta di pecora',
            'Zucchero a velo',
            'Gocce di cioccolato',
            'Canditi'
        ],
        'steps' => [
            'Preparare l\'impasto per le cialde',
            'Friggere le cialde sulla forma',
            'Setacciare la ricotta',
            'Preparare il ripieno',
            'Farcire al momento di servire'
        ]
    ]
];

// Homepage con elenco ricette
Route::get('/', function () use ($recipes) {
    return view('pages.home', ['recipes' => $recipes]);
});

// Pagina dettaglio ricetta
Route::get('/recipes/{id}', function ($id) use ($recipes) {
    $recipe = collect($recipes)->firstWhere('id', (int)$id);
    if (!$recipe) {
        abort(404);
    }
    return view('pages.recipe', ['recipe' => $recipe]);
});