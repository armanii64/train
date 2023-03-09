<?php

return [
    'common' => [
        '#' => '#',
        'chooseValue' => 'Wybierz wartość',
        'noValue' => 'Brak',
        'actions' => 'Akcje',
        'save' => 'Zapisz',
        'add'=> 'Dodawanie',
        'edit'=> 'Edycja',
        'show' => 'Podgląd',
        'noData' => 'Brak danych'
    ],
    'rollingStock' => [
        'type' => [
            'model' => 'Typ',
            'choose' => 'Wybierz typ',
            'locomotive' => 'Lokomotywa',
            'passenger' => 'Wagon osobowy',
            'freight' => 'Wagon towarowy'
        ],
        'labels' => [
            'freight' => [
                'title' => 'Lista wagonów towarowych',
                'number' => 'Numer wagonu',
                'type' => 'Wagon towarowy -'
            ],
            'locomotive' => [
                'title' => 'Lista lokomotyw',
                'number' => 'Numer wagonu',
                'type' => 'Lokomotywa -'
            ],
            'passenger' => [
                'title' => 'Lista wagonów osobowych',
                'number' => 'Numer wagonu',
                'type' => 'Wagon osobowy -'
            ],
            'user' => 'Użytkownik',
            'graphic' => 'Grafika',
            'loadGraphic' => 'Wybierz i załaduj grafikę',
            'firstPage' => '1 strona',
            'number' => 'Numer wagonu',
            'locomotiveNumber' => 'Numer lokomotywy',
            'modelDescription' => 'Opis modelu',
            'modelBottomSign' => 'Oznaczenie na spodzie modelu',
            'modelOwner' => 'Właściciel modelu',
            'modelProducer' => 'Producent modelu',
            'couplings' => 'Sprzęgi',
            'nemSocket' => 'Gniazdo NEM',
            'kks' => 'KKS',
            'bumpersSpringLoaded' => 'Zderzaki sprężynowe',
            'bumpersSpringLoadedShort' => 'Zd.spręż.',
            'wheels' => 'Koła',
            'insideDimension' => 'Innenmass',
            'wheelFlange' => 'Spurkranzh',
            'rp25' => 'RP25',
            'modelLength' => 'Długość modelu (mm)',
            'modelLengthNoShort' => 'Długość modelu',
            'modelWeight' => 'Waga modelu (g)',
            'modelWeightNoShort' => 'Waga modelu',
            'lastRevision' => 'Ostatnia rewizja',
            'sound' => 'Dźwięk',
            'decoderType' => 'Decoder-Type',
            'secondPage' => '2 strona',
            'railwayManagement' => 'Zarząd kolei',
            'name' => 'Nazwa',
            'axleLoad' => 'Nacisk na oś',
            'totalLength' => 'Długość całk. (m)',
            'totalLengthNoShort' => 'Długość całk.',
            'wheelBase' => 'Rozstaw osi (m)',
            'wheelBaseNoShort' => 'Rozstaw osi',
            'serviceWeight' => 'Masa służbowa (t)',
            'extraInfo' => 'Dodatkowe informacje',
            'epoch' => 'Epoka',
            'carSign' => 'Oznaczenie wagonu',
            'uicType' => 'UIC-Typ',
            'internVer' => 'Intern. Verw',
            'placesFirstClass' => 'Miejsce 1 klasa',
            'placesSecondClass' => 'Miejsce 2 klasa',
            'heating' => 'Ogrzewanie',
            'maximumSpeed' => 'Vmax (km/h)',
            'maximumSpeedNoShort' => 'Vmax',
            'axleArrangement' => 'Układ osi',
            'power' => 'Moc',
            'addressDdc' => 'Address DDC',
            'speedSteps' => 'Fahrstufen',
            'mode' => 'Mode',
            'analog' => 'Analog',
            'typeOfHeating' => 'Rodzaj ogrzewania',
            'breakType' => 'Rodzaj hamulca',
            'grObc' => 'Gr.obc. C (t)',
            'grObcNoShort' => 'Gr.obc. C',
            'cargoLength' => 'Dł. ład. (m)',
            'cargoLengthNoShort' => 'Dł. ład.',
            'cargoArea' => 'Pow. ład. (m2)',
            'cargoAreaNoShort' => 'Pow. ład.',
            'cargoVolume' => 'Obj. ład. (m3)',
            'cargoVolumeNoShort' => 'Obj. ład.',
            'usageNotes' => 'Uwagi',
            'disinfected' => 'Zdezynfekowany',
            'efficient' => 'Sprawny',
            'expressDelivery' => 'Przesyłki ekspresowe',
            'faultDescription' => 'Opis usterki',
            'additionalNotes1' => 'Uwagi dodatkowe 1',
            'additionalNotes2' => 'Uwagi dodatkowe 2',
            'typeDdc' => 'Rodzaj DDC',
            'events' => 'Imprezy',
            'car' => 'wagonu',
            'rollingStocks' => 'Składy',
        ]
    ],
    'event' => [
        'add' => 'Dodaj imprezę',
        'edit' => 'Edytuj imprezę',
        'index' => 'Lista imprez',
        'name' => 'Nazwa',
        'description' => 'Opis'
    ],
    'composition' => [
        'forEvents' => 'Składy na imprezę',
        'add' => 'Dodaj skład',
        'edit' => 'Edytuj skład',
        'index' => 'Lista składów',
        'basicInfo' => 'Informacje podstawowe',
        'name' => 'Nazwa',
        'description' => 'Opis',
        'symbol' => 'Symbol',
        'traction_type' => 'Typ trakcji',
        'event' => 'Impreza',
        'rollingStocks' => 'Budowanie składu',
        'status' => 'Status',
        'type' => 'Typ',
        'original' => 'ID oryginału',
        'user' => 'Użytkownik',
        'rollingStockNumbers' => 'Numery lokomotyw / wagonów',
        'enum' => [
            'status' => [
                'in_progress' => 'W edycji',
                'sent' => 'Wysłano',
                'to_accept' => 'Do zaakceptowania',
                'accepted' => 'Zaakceptowany',
            ],
            'type' => [
                'original' => 'Oryginał',
                'copy' => 'Kopia'
            ]
        ]
    ]
];
