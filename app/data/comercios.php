<?php

if (!function_exists('seo')) {
    function seo() {
        return [
            'title' => "Comercios y puntos de venta - Titinas",
            'description' => "Buscá el comercio que quede mas cerca de tu casa.",
            'keywords' => "venta, comercios, consultas, pedidos, contacto, caba, gba, provincias, argentina"
        ];
    }
}

if (!function_exists('paragraph')) {
    function paragraph() {
        return "";
    }
}

function comercios() {
    return [
        'caba' => [
            [
                'name' => 'El Tigre',
                'address' => [
                    'Av. Cabildo 3854 - Tel: 4703-3527 - Núñez',
                    'Lope de Vega 3385 - Tel: 4568-6813 - Villa Devoto'
                ],
                'href' => [
                    'Web' => 'http://www.fibrofacileltigre.com.ar'
                ]
            ],
            [
                'name' => 'Artística Feylo',
                'address' => [
                    'Corrientes 2076',
                    'Once (Balvanera)'
                ],
                'href' => [
                    'Web' => 'http://www.feylo.com'
                ]
            ],
            [
                'name' => 'Fibrobaires',
                'address' => [
                    'Av. San Martin 1480 - Caballito'
                ],
                'href' => [
                    'Web' => 'https://www.fibrobaires.com.ar/-artistica/linea-titinas',
                    'Facebook' => 'https://www.facebook.com/fibrobaires'
                ]
            ],
            [
                'name' => 'Librería Thesis',
                'address' => [
                    'Raúl Scalabrini Ortiz 1828 - Palermo',
                    'Tel: +54 11 48319323 / +54 11 48316090'
                ],
                'href' => [
                    'Web' => 'https://libreriathesis.com.ar'
                ],
                'email' => [
                    'ventas@artisticathesis.com.ar'
                ]
            ],
            [
                'name' => 'Nora Hadas de Amor',
                'address' => [
                    'Villa urquiza'
                ],
                'href' => [
                    'Instagram hadas.de.amor' => 'https://www.instagram.com/hadas.de.amor',
                    'Instagram norahadasdeamor' => 'https://www.instagram.com/norahadasdeamor'
                ],
                'email' => [
                    'hadasdeamortiendaeinsumos@gmail.com'
                ]
            ],
            [
                'name' => 'Arte Shop',
                'address' => [
                    'Tel: +54 911 6597 9206',
                    'Retiros Yerbal 5950',
                    'Caba'
                ],
                'href' => [
                    'Web' => 'http://www.arteshop.com.ar',
                    'Instagram' => 'https://instagram.com/artisticaarteshop',
                    'Facebook' => 'https://www.facebook.com/artistica.arteshop/',
                    'Twitter' => 'https://www.twitter.com/Aarteshop',
                    'Pinterest' => 'https://ar.pinterest.com/aarteshop/'
                ]
            ],
            [
                'name' => 'Love Todo',
                'address' => [
                    'CABA'
                ],
                'href' => [
                    'Instagram' => 'https://www.instagram.com/lovetodoclaudia'
                ]
            ],
            [
                'name' => 'Bellas Artes BA',
                'address' => [
                    'Tel: +54 911 323 45284',
                    'Campichuelo al 200 ( Solo Entregas )'
                ],
                'href' => [
                    'Web' => 'https://www.bellasartesba.com.ar',
                    'Instagram' => 'https://instagram.com/libreriabellasartesba',
                    'Facebook' => 'https://www.facebook.com/BellasArtesBA'
                ],
                'email' => [
                    'bellasartesba@hotmail.com'
                ]
            ],
        ],
        'GBA' => [
            [
                'name' => 'Rincón del Arte',
                'address' => [
                    'Av. San Martin 2537 - Caseros'
                ],
                'href' => [
                    'Instagram' => 'https://www.instagram.com/rincondelarte_oficial'
                ]
            ],
            [
                'name' => 'Cerámica Flandria',
                'address' => [
                    'Las tipas y granaderos 1808',
                    'Jauregui - Luján'
                ],
                'href' => [
                    'Instagram' => 'https://www.instagram.com/ceramica.flandria'
                ]
            ],
            [
                'name' => 'Taller Mi rincón de Luz',
                'address' => [
                    'Cerrito 2142 dpto 7 A',
                    '1650 - San Martin'
                ],
                'href' => [
                    'Facebook' => 'https://www.facebook.com/yolanda.aguirre.98',
                    'Instagram' => 'https://www.instagram.com/mirincondeluztaller'
                ]
            ],
            [
                'name' => 'El nuevo palacio',
                'address' => [
                    'Av. Maipú 408 - Florida'
                ],
                'href' => [
                    'Web' => 'http://www.elnuevopalacio.com.ar',
                    'Instagram' => 'https://www.instagram.com/libreriaelnuevopalacio'
                ]
            ],
            [
                'name' => 'Diagonal De Arte',
                'address' => [
                    'Luis M. Drago 477 - Villa Adelina',
                    'Dicta clases de Efecto Gaudí'
                ],
                'href' => [
                    'Facebook' => 'https://www.facebook.com/DiagonalDeArte',
                    'Instagram' => 'https://www.instagram.com/diagonaldearte'
                ]
            ],
            [
                'name' => 'Librería artística MyC',
                'address' => [
                    'Victor Mercante 70 - Barrio Libertad',
                    'CP 1716 Merlo',
                    'Tel: 0220 497-2262'
                ],
                'href' => [
                    'Instagram' => 'https://www.instagram.com/artisticamyc'
                ],
                'email' => [
                    'artisticamyc@gmail.com'
                ]
            ],
            [
                'name' => 'Artística Berlian',
                'address' => [
                    '25 de mayo 3825 - San Martín',
                    'Tel: (011) 6435-0726'
                ],
                'href' => [
                    'Facebook' => 'https://www.facebook.com/lalaberlian.arte',
                    'Instagram' => 'https://www.instagram.com/artistica_berlian'
                ],
                'email' => [
                    'lalaberlian@yahoo.com.ar'
                ]
            ],
            [
                'name' => 'Estación del arte',
                'address' => [
                    'Villa Tesei'
                ],
                'href' => [
                    'Web' => 'https://www.estaciondelarte.com',
                ],
                'email' => [
                    'artistica.estaciondelarte@gmail.com'
                ]
            ],
            [
                'name' => 'El taller de AMI',
                'address' => [
                    'Lanús Este',
                    'Tel: 1167086577'
                ],
                'href' => [
                    'Facebook' => 'https://www.facebook.com/latienda.deami'
                ],
                'email' => [
                    'domofernandez@gmail.com'
                ]
            ],
            [
                'name' => 'Crearte manualidade',
                'address' => [
                    'Calle 149 Numero 1440, entre 14 y 15 - Berazategui'
                ],
                'href' => [
                    'Facebook' => 'https://www.facebook.com/crearte.manualidades',
                    'Instagram' => 'https://www.instagram.com/crearte_manualidades'
                ]
            ],
            /*
            [
                'name' => 'Aartistica Crear',
                'address' => [
                    'Monte Grande'
                ],
                'href' => [
                    'Facebook' => 'https://www.facebook.com/materialescrear',
                    'Instagram' => 'https://www.instagram.com/artisticacrear'
                ]
            ],
            */
        ],
        'provincia de bs as' => [
            [
                'name' => 'La Bambola',
                'address' => [
                    'Calle 28 N° 140 - La Plata',
                    'Tel: 0221 4794775'
                ],
                'href' => [
                    'Facebook' => 'https://www.facebook.com/labambola.artistica'
                ]
            ],
            [
                'name' => 'Artesanias FK El Taller de Kary',
                'address' => [
                    ' Calle 490 Nº 3777. Entre 132bis y 133',
                    'Gonnet - La Plata',
                    'Tel: 2214003516'
                ],
                'href' => [
                    'Facebook' => 'https://www.facebook.com/artesanias.fk',
                    'Instagram' => 'https://www.instagram.com/artesaniasfk'
                ]
            ],
            [
                'name' => 'Pen Draw',
                'address' => [
                    'Plaza Irigoyen 165 - La Plata'
                ],
                'href' => [
                    'Facebook' => 'https://www.facebook.com/pendraww',
                    'Instagram' => 'https://www.instagram.com/pendraw_'
                ]
            ],
            [
                'name' => 'Romina Garcia, Taller',
                'address' => [
                    'Av Belgrano 228 depto B',
                    'Rauch Prov. de Bs As. - CP 7203',
                    'Tel: 0249 4694099'
                ],
                'email' => [
                    'romina_garcia01@hotmail.com'
                ]
            ],
            [
                'name' => 'El Rincón del Mayorista/Minorista',
                'address' => [
                    'Láinez 2277 - Bahia Blanca'
                ],
                'href' => [
                    'Facebook' => 'https://www.facebook.com/ArtisticaRinconMayorista/?ref=br_rs'
                ]
            ],
            [
                'name' => 'Artística ANIM-ARTE',
                'address' => [
                    'Rivadavia 50 - Castelli'
                ],
                'href' => [
                    'Facebook' => 'https://www.facebook.com/Artistica-Anim-arte-Castelli-307800313011396'
                ]
            ],
            [
                'name' => 'Artisticamente',
                'address' => [
                    'Dorrego 3160 - Olavarría'
                ],
                'href' => [
                    'Facebook' => 'https://www.facebook.com/profile.php?id=100089507271476',
                    'Instagram' => 'https://www.instagram.com/artisticamente.olav'
                ]
            ],
            [
                'name' => 'Pequeños detalles de Jorgelina Susseret',
                'address' => [
                    'Taller y almacén de insumos',
                    'Viegas 1046 - 9 de Julio'
                ],
                'href' => [
                    'Facebook' => 'https://www.facebook.com/pintura9dj',
                    'Instagram' => 'https://www.instagram.com/pequenosdetalles9dj'
                ]
            ],
            [
                'name' => 'Casa almacen Arte y deco',
                'address' => [
                    'Killari Arte Creativo',
                    'Taller y almacén de insumos',
                    'Calle de la Reducción 133 - San Bernardo'
                ],
                'href' => [
                    'Facebook' => 'https://www.facebook.com/mariaangeles.gonzales.9'
                ]
            ],
            [
                'name' => 'Locas por el arte',
                'address' => [
                    'Av. Libertad 5851, B7606 - Mar del Plata',
                    'Tel: +54 223 438-6693'
                ],
                'href' => [
                    'Facebook' => 'https://www.facebook.com/locasxelarte',
                    'Instagram' => 'https://www.instagram.com/locas.x.el.arte/?hl=en'
                ]
            ],
            [
                'name' => 'Artística Otoñal',
                'address' => [
                    'Alberti 5695 - Mar del Plata'
                ],
                'href' => [
                    'Facebook' => 'https://www.facebook.com/artisticaotonial',
                    'Instagram' => 'https://www.instagram.com/artisticaotonial'
                ]
            ],
            [
                'name' => 'Luz El 13',
                'address' => [
                    'Calle 3 n° 5496, esq. 55 - Mar del Tuyú',
                    'Tel: 2246461974'
                ],
                'href' => [
                    'Instagram' => 'https://www.instagram.com/luz_eltrece'
                ],
                'email' => [
                    'aluvi112@hotmail.com'
                ]
            ],
            [
                'name' => 'Librería Colores de Laura Roche',
                'address' => [
                    'Moreno 1057 - Pérez Millán - Ramallo'
                ],
                'href' => [
                    'Facebook' => 'https://www.facebook.com/libreria.colores.98'
                ]
            ],
            [
                'name' => 'Timora - Romina Amutio',
                'address' => [
                    '9 de Julio 380 - TRES LOMAS'
                ],
                'href' => [
                    'Facebook' => 'https://www.facebook.com/romina.amutio.1'
                ]
            ],
            [
                'name' => 'Taller ilusiones - Sandra Miró',
                'address' => [
                    'Barrio los Olmos Tucumán 277 - Salliquelo'
                ],
                'href' => [
                    'Web' => 'https://sandramiro.wixsite.com/website-1',
                    'Facebook' => 'https://www.facebook.com/sandra.miro.7',
                    'Instagram' => 'https://www.instagram.com/sandra_miro_71'
                ]
            ],
        ],
        'catamarca' => [
            [
                'name' => 'Libreria del patio',
                'address' => [
                    'Avda Pte Castillo 254 - Valle Viejo',
                    'Tel: 0383 4737405'
                ],
                'href' => [
                    'Facebook' => 'https://www.facebook.com/libreriadelpatio',
                    'Instagram' => 'https://www.instagram.com/libreriadelpatio'
                ]
            ]
        ],
        'chaco' => [
            [
                'name' => 'Proyecto librería',
                'address' => [
                    'Las Heras 502 - Resistencia',
                    'Tel: 0362 443-2664'
                ],
                'href' => [
                    'Web' => 'https://www.proyectolalibreria.com',
                    'Instagram' => 'https://www.instagram.com/proyectolalibreria'
                ],
                'email' => [
                    'libreriaproyecto@hotmail.com'
                ]
            ],
            [
                'name' => 'DC ART&DECO by Autoservicio del Campo',
                'address' => [
                    'Monteagudo 45 - Villa Angela',
                    'Tel: +54 9 3735 62 9958'
                ],
                'href' => [
                    'Instagram' => 'https://www.instagram.com/silvinadelcampo.sdc'
                ]
            ],
            [
                'name' => 'Pinta conmigo by Yanina Viera',
                'address' => [
                    'Calle 12 esquina 41 - Barrio San Martín',
                    'Roque Saenz Peña - Chaco'
                ],
                'href' => [
                    'Instagram' => 'https://www.instagram.com/yanina.viera.16'
                ]
            ]
        ],
        'chubut' => [],
        'cordoba' => [
            [
                'name' => 'Artística glass',
                'address' => [
                    'Tucumán 474 - Córdoba Cap.',
                    'Tel: 351 2132060'
                ],
                'href' => [
                    'Instagram' => 'https://www.instagram.com/artisticaglass'
                ]
            ],
            [
                'name' => 'Mercería SOL',
                'address' => [
                    'Bv. Ascasubi 301 - Bell Ville',
                    'Tel: +54 3564 443937',
                    'Whatsapp: +54 3564 372020'
                ],
                'href' => [
                    'Web' => 'https://rincondecolores.com.ar',
                    'Facebook' => 'https://www.facebook.com/ArtisticaRinconDeColores',
                    'Instagram' => 'https://www.instagram.com/artisticarincondecolores'
                ],
                'email' => [
                    'info@rincondecolores.com.ar'
                ]
            ]
        ],
        'corrientes' => [],
        'entre rios' => [
            [
                'name' => 'Artística Su Arte',
                'address' => [
                    'Maipu 131 - Gualeguaychú'
                ],
                'href' => [
                    'Facebook' => 'http://www.facebook.com/SuArteGchu'
                ],
                'email' => [
                    'lasusanita2012@hotmail.com.ar'
                ]
            ],
            [
                'name' => 'El espacio de arte',
                'address' => [
                    'Avda San Martin 286 - Bovril',
                    'Tel: 549 3438 453416'
                ],
                'href' => [
                    'Facebook' => 'https://www.facebook.com/El-Espacio-DEL-ARTE-362653667656000'
                ]
            ]
        ],
        'formosa' => [
            [
                'name' => 'Taller de Titina',
                'address' => [
                    'Maipú 389 - 3600 - Formosa'
                ],
                'href' => [
                    'Facebook' => 'https://www.facebook.com/eltallerdetitina',
                    'Instagram' => 'https://www.instagram.com/eltallerdetitina'
                ],
                'email' => [
                    'tallerdetitina@hotmail.com'
                ]
            ]
        ],
        'jujuy' => [],
        'la pampa' => [
            [
                'name' => 'Magenta La Pampa',
                'address' => [
                    'Hugo del Carril 1850 - Plan 5000 - SANTA ROSA'
                ],
                'href' => [
                    'Facebook' => 'https://www.facebook.com/MagentaSantaRosa'
                ],
                'email' => [
                    'magentaescolar15@gmail.com'
                ]
            ]
        ],
        'La rioja' => [],
        'mendoza' => [],
        'misiones' => [
            [
                'name' => 'Taller Vivi Arte',
                'address' => [
                    'Mariano Moreno y Río de la Plata',
                    'CP(3364) - Aristóbulo del Valle',
                    'Tel: +54 9 3755 67-1170'
                ],
                'href' => [
                    'Facebook' => 'https://www.facebook.com/vivian.centeno'
                ],
                'email' => [
                    'centenovivian77@gmail.com'
                ]
            ],
            [
                'name' => 'Placas & maderas',
                'address' => [
                    'RUTA NACIONAL 14 KM 974',
                    'SAN VICENTE',
                    'Whatsapp: 3755 418883',
                    'Tel: 3755-460550'
                ],
                'href' => [
                    'Facebook' => 'https://www.facebook.com/placasymaderas',
                    'Instagram' => 'https://www.instagram.com/placasymaderas'
                ],
                'email' => [
                    'maderasyplacas@hotmail.com'
                ]
            ]
        ],
        'neuquen' => [
            [
                'name' => 'El Fuentón',
                'address' => [
                    'Belgrano 4400 - Neuquén Cap.',
                    'Tel: 0299-4465885'
                ],
                'href' => [
                    'Facebook' => 'https://www.facebook.com/profile.php?id=100006447011907',
                    'Instagram' => 'https://www.instagram.com/lasycosaslindas'
                ]
            ]
        ],
        'rio negro' => [
            [
                'name' => 'Papelera central de María Gabriela Fiadaron',
                'address' => [
                    'Buenos Aires 1525 - General Roca',
                    'Tel: 298 440-4879'
                ],
                'href' => [
                    'Facebook' => 'https://www.facebook.com/Papelera1525',
                    'Instagram' => 'https://www.instagram.com/papeleracentral'
                ]
            ],
            [
                'name' => 'Artística y Librería Rodriguez',
                'address' => [
                    'Don Bosco 1715 - Cipolletti'
                ],
                'href' => [
                    'Facebook' => 'https://www.facebook.com/artisticarodriguez',
                    'Instagram' => 'https://www.instagram.com/artisticarodriguez'
                ]
            ]
        ],
        'salta' => [
            [
                'name' => 'Libreria Lerma',
                'address' => [
                    'sucursal artística (Guemes esq Zuviria) - Salta Cap',
                    'Tel: 0387 484-1669'
                ],
                'href' => [
                    'Web' => 'https://www.librerialerma.com.ar',
                    'Facebook' => 'https://www.facebook.com/lermalibreria',
                    'Instagram' => 'https://www.instagram.com/librerialerma'
                ]
            ]
        ],
        'san juan' => [],
        'san luis' => [],
        'santa cruz' => [
            [
                'name' => 'Rincón de Ideas, de Julia Alonso',
                'address' => [
                    'Urdin 536 - Pico Truncado',
                    'Tel: 02974744498'
                ],
                'href' => [
                    'Facebook' => 'https://www.facebook.com/Rinc%C3%B3n-de-Ideas-442928479798342'
                ],
                'email' => [
                    'alonsojulia47@gmail.com'
                ]
            ]
        ],
        'santa fe' =>[
            [
                'name' => 'Ilusionarte Rosario',
                'address' => [
                    'Valparaiso 1161 - Rosario'
                ],
                'href' => [
                    'Instagram' => 'https://www.instagram.com/ilusionarte.artisticaydeco'
                ]
            ],
            [
                'name' => 'Artística en lo de Frida',
                'address' => [
                    'Av. San Martín 1140, local nº3 de la Ciudad de San Lorenzo'
                ],
                'href' => [
                    'Facebook' => 'https://www.facebook.com/enlodefridaok',
                    'Instagram' => 'https://www.instagram.com/enlodefridaok'
                ],
                'email' => [
                    'enlodefrida@outlook.com'
                ]
            ],
            [
                'name' => 'Librería TyP',
                'address' => [
                    'Mitre 840 - Tel: (03462) 421772',
                    'Belgrano 667 - Tel: (03462) 438947',
                    'Venado Tuerto'
                ],
                'href' => [
                    'Facebook' => 'https://www.facebook.com/typ.libreria',
                    'Instagram' => 'https://www.instagram.com/typ.libreria'
                ],
                'email' => [
                    'ventas@libreriatyp.com.ar'
                ]
            ]
        ],
        'santiago del estero' => [
            [
                'name' => 'Origen creativo',
                'address' => [
                    'Sarmiento 116 - Santiago capital',
                    'Whatsapp: 3854168997'
                ],
                'href' => [
                    'Facebook' => 'https://www.facebook.com/origen.creativo.545',
                    'Instagram' => 'https://www.instagram.com/origen.creativo.art'
                ]
            ],
        ],
        'tierra del fuego' => [
            [
                'name' => 'Ella ART',
                'address' => [
                    'Posadas 539 - Río Grande'
                ],
                'href' => [
                    'Facebook' => 'https://www.facebook.com/Ella-Art-322451388214464'
                ],
                'email' => [
                    'marceiri17887@gmail.com'
                ]
            ]
        ],
        'tucuman' => [
            [
                'name' => 'Mara Encuentros Creativos',
                'address' => [
                    'San Miguel de  Tucumán y Yerba Buena'
                ],
                'href' => [
                    'Facebook' => 'https://www.facebook.com/tallerencuentros.creativos',
                    'Instagram' => 'https://www.instagram.com/mara.j.b'
                ]
            ],
            [
                'name' => 'Taller de arte creativo de Edith Lairana',
                'address' => [
                    'La Rioja 1225 - San Miguel de Tucumán'
                ],
                'href' => [
                    'Facebook' => 'https://www.facebook.com/profile.php?id=100009876105291'
                ]
            ]
        ]
    ];
}