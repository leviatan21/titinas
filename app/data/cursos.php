<?php

if (!function_exists('seo')) {
    function seo() {
        return [
            'title' => "Cursos y seminarios a distancia - Titinas",
            'description' => "Cursos y seminarios en videos - Efecto Gaudí - Pasta cerámica sin horno - Titinas",
            'keywords' => "Compras, Cursos, Seminarios, Gaudí, Pasta Cerámica, Espatul-art, Efecto oxido, Videos, Azulejos, Espejos, Grabado, Estampados",
        ];
    }
}

if (!function_exists('paragraph')) {
    function paragraph() {
        return "Stenciles de excelente calidad<br />
        200 micrones - Garantia de durabilidad<br />
        Aptos para todo tipo de manualidades, pintura en tela y repostería";
    }
}

function horizontal() {
    return [
        [
            'special' => true,
            'title' => 'Efecto Gaudí: nivel 1',
            'sub-title' => 'INICIAMOS LA TÉCNICA',
            'image-cover' => asset('/images/cursos/CAPGAUDI1.webp'),
            'alt-cover' => 'Efecto Gaudí nivel 1',
            'description' => [
                'En este nivel aprenderas',
                '* Recomendación de marcas de lacas vitrales y datos técnicos',
                '* Herramientas',
                '* Técnica en superficies planas',
                '* Técnica en figuras caladas',
                '* Técnica para superficies curvas',
                '* Tiempos de secado',
                '* Formas de uso y de pegado posterior en superficies curvas'
            ],
            //'mercadopago' => '65692463-933c5c4e-28e1-4df4-ba81-20f543f6d690',
            'price' => '20000',
            'prices' => [
                'Valor por depósito o transferencia bancaria $20.000.-',
                'PROMO NIVEL 1 Y 2 :',
                'Valor por depósito o transferencia bancaria $35.000'
            ]
        ],
        [
            'special' => true,
            'title' => 'Efecto Gaudí: nivel 2',
            'sub-title' => 'AVANZAMOS, SEGUIMOS CREANDO',
            'image-cover' => asset('/images/cursos/CAPGAUDI2.webp'),
            'alt-cover' => 'Efecto Gaudí nivel 2',
            'description' => [
                'En este nivel aprenderas',
                '* Aditivos : combinación con otras sustancias',
                '* Técnica de apliques / siluetas',
                '* Aplicación sobre superficies muy porosas',
                '* Refuerzo de técnica de flores'
            ],
            //'mercadopago' => '65692463-e28deba7-dfb9-4978-b7a1-14d590b7ce82',
            'price' => '20000',
            'prices' => [
                'Valor por depósito o transferencia bancaria $20.000.-'
            ]
        ],
        [
            'special' => true,
            'title' => 'Efecto Gaudí: nivel 3',
            'sub-title' => 'SOMOS MUY CREATIVOS, EL EFECTO GAUDÍ TIENE MUCHOS USOS',
            'image-cover' => asset('/images/cursos/CAPGAUDI3.webp'),
            'alt-cover' => 'Efecto Gaudí nivel 3',
            'description' => [
                'En este nivel aprenderas',
                '* Marmolados',
                '* Mosaicos en combinación con decoupage'
            ],
            //'mercadopago' => '65692463-600fd4d7-6e47-4d30-92f9-9fd9f0f99c86',
            'price' => '20000',
            'prices' => [
                'Valor por depósito o transferencia bancaria $20.000.-'
            ]
        ],
        [
            'special' => true,
            'title' => 'Efecto Gaudí: nivel 4',
            'sub-title' => 'YA SOMOS GRANDES<br />AHORA PINTAMOS CON EFCETO GAUDÍ',
            'image-cover' => asset('/images/cursos/CAPGAUDI4.webp'),
            'alt-cover' => 'Efecto Gaudí nivel 4',
            'description' => [
                'En este nivel aprenderas',
                '* Composición',
                '* Ritmos',
                '* Lectura visual',
                '* Perspectiva',
                '* Manejo del color',
                '* Inclusiones',
                '* Matices'
            ],
            //'mercadopago' => '65692463-d00e9e72-a89d-4e0d-8e76-70333b0abf26',
            'price' => '20000',
            'prices' => [
                'Valor por depósito o transferencia bancaria $20.000.-'
            ]
        ],
        [
            'special' => true,
            'title' => 'Efecto Gaudí: nivel 5',
            'sub-title' => 'MEZCLAMOS EL EFECTO GAUDÍ<br />CON OTROS MATERIALES',
            'image-cover' => asset('/images/cursos/CAPGAUDI5.webp'),
            'alt-cover' => 'Efecto Gaudí nivel 5',
            'description' => [
                'En este nivel aprenderas',
                '* Técnica de símil esmaltado',
                '* Pigmentación de juntas',
                '* Fondos esfumados',
                '* Matices con Tintas',
                '<br />',
                '*** PLUS ***',
                '* Técnica de stencil, superficie afelpada'
            ],
            //'mercadopago' => '65692463-76cb28fc-425e-4cda-86ff-7c9c6ab45034',
            'price' => '20000',
            'prices' => [
                'Valor por depósito o transferencia bancaria $20.000.-'
            ]
        ],
        [
            'special' => true,
            'title' => 'Efecto Gaudí: nivel 6',
            'sub-title' => 'NUEVA TÉCNICA',
            'image-cover' => asset('/images/cursos/CAPGAUDI6.webp'),
            'alt-cover' => 'Efecto Gaudí nivel 6',
            'description' => [
                'Te invito a transitar conmigo esta experiencia.',
                'Una técnica que podrás utilizar en muchas superficies,',
                '¡¡¡INCLUSO MUEBLES!!!',
                'Aprende y aplicala con los colores que a vos te gusten.',
                'Te va a encantar ;)'
            ],
            //'mercadopago' => '65692463-063bedba-72be-46f8-8027-207b92509ef1',
            'price' => '20000',
            'prices' => [
                'Valor por depósito o transferencia bancaria $20.000.-'
            ]
        ]
    ];
}

function vertical() {
    return [
        [
            'special' => 'Nueva Técnica',
            'title' => 'Un falso mármol muy especial',
            'image-cover' => asset('/images/cursos/CAPmarmoldorado.webp'),
            'alt-cover' => 'caping marmol dorado',
            'description' => [
                'Te invito a transitar conmigo esta experiencia.',
                'Una técnica que podrás utilizar en muchas superficies,',
                '<br />¡¡¡INCLUSO MUEBLES!!!',
                '¡QUEDA BUENÍSIMO!',
                '<br />No incluye materiales',
            ],
          //'mercadopago' => '65692463-76064bfa-3a8b-456e-96e1-3fddc7508146',
            'price' => '15000',
            'prices' => [
                'Valor por depósito o transferencia bancaria $15.000.-'
            ]
        ],
        [
            'title' => 'Bouquet de Rosas con Espatul-Art',
            'image-cover' => asset('/images/cursos/bouquet-de-rosas-espatul-art.webp'),
            'alt-cover' => 'Bouquet de rosas espatul-art',
            'description' => [
                'TECNICA RUSA - ESPATULADO',
                '<br />En este seminario comenzaremos a desarrollar la técnicacon estas rosas.',
                '<br />Son 2 videos:',
                'Parte 1: preparacion y practica de peétalos / Rosa grande',
                'Parte 2: Bouquet de Rosas y hojas'
            ],
          //'mercadopago' => '65692463-e4931778-d5c9-4548-afb3-9ceae53338fb',
            'price' =>  '20000',
            'prices' => [
                'Valor por depósito o transferencia bancaria $20.000.-'
            ]
        ],
        [
            'title' => 'Peponias',
            'image-cover' => asset('/images/cursos/CAPespatulartpeonias.webp'),
            'alt-cover' => 'Peponias con espatul-art',
            'description' => [
                'Aprenderemos',
                '* Cómo preparar el producto correctamente',
                '* Cómo pigmentar',
                '* Cómo generar el capullo',
                '* Cómo cargar la espátula para cada caso',
                '* Cómo descargarla para generar los distintos pétalos y hojas',
                '* Cómo montar los pétalos',
                '* Cómo unir, pegar, y asegurar las flores.',
                '* Estapas de secado',
                '* Integración'
            ],
          //'mercadopago' => '65692463-3faf7de4-e272-4fec-9b17-2de8e2c30521',
            'price' =>  '20000',
            'prices' => [
                'Valor por depósito o transferencia bancaria $20.000.-'
            ]
        ],
        [
            'title' => 'Espejado y vidrio mercurizado',
            'image-cover' => asset('/images/cursos/espejado-y-vidrio.webp'),
            'alt-cover' => 'Espejado y vidrio mercurizado',
            'description' => [
                'Son 2 videos con muchas propuestas<br />Duración: 1.20Hs en total',
                'Abordaremos variantes de este atractivo efecto.',
                '<br />',
                'Aprenderás:',
                '* Frasco con tecnica de Espejado, añejado con oro.',
                '* Frasco con tecnica de Vidrio Mercurizado.',
                '* Espejo de 40x50, tecnica de vidrio invertido, Espejado y Mercurizado.',
                '* Espejo de 15x20, tecnica de Espejado con rosas, añejado con oro.',
                '* Espejo de 15x20, tecnica de Espejado texturado, graneado.'
            ],
          //'mercadopago' => '65692463-e4a6a89a-ccb8-42b0-a383-743366a70c89',
            'price' => '20000',
            'prices' => [
                'Valor por depósito o transferencia bancaria $20.000.-'
            ]
        ],
        [
            'title' => 'Grabado y estampado',
            'image-cover' => asset('/images/cursos/grabado-estampado.webp'),
            'alt-cover' => 'Grabado y estampado',
            'description' => [
                'Trabajamos estampado x adición y sustracción, en madera y en acetato.',
                'Se puede aplicar a tela la técnica también.',
                '<br />',
                'Aprenderás',
                'Grabado, les enseño a hacer la plantilla de grabado casera y a estampara en papel, pero también puede estamparse en tela, madera, y otras superficies.',
                'Este seminario a distancia tiene un plus de pasta cerámica sin horno estampada con la plantilla generada.'
            ],
          //'mercadopago' => '65692463-f9408406-f718-4043-b712-c0c2cd961bb3',
            'price' => '20000',
            'prices' => [
                'Valor por depósito o transferencia bancaria $20.000.-'
            ]
        ],
        [
            'title' => 'FOTOMONTAJE e INTERVENCIÓN',
            'image-cover' => asset('/images/cursos/fotomontaje.webp'),
            'alt-cover' => 'fotomontaje intervención',
            'description' => [
                'Es a través de un video de 2hs.',
                'Muy completo, les muestro como hacer 2 cuadros y un especial de labios.',
                'APRENDES MUCHAS TÉCNICAS QUE PODRÁS APLICAR',
                'A GRAN VARIEDAD DE TRABAJOS.'
            ],
          //'mercadopago' => '65692463-5a90d2af-989e-4159-9805-0c57700487fe',
            'price' => '20000',
            'prices' => [
                'Valor por depósito o transferencia bancaria $20.000.-'
            ]
        ],
        [
            'title' => 'VIDRIO LÍQUIDO - UN CAMINO DE IDA',
            'image-cover' => asset('/images/cursos/geodas.webp'),
            'alt-cover' => 'geodas vidrio liguido',
            'description' => [
                'Consta de 3 videos detalladamente explicados, variedad de ejemplos, colores, terminaciones.',
                '<br />Aprenderás:',
                'Parte 1: Preparación de Vidrio Líquido, Pigmentación, Montaje, Realización de 2 Geodas.',
                'Parte 2: Realización de Geodas en negro, blanco, plata y oro. Posavasos.',
                'Parte 3: Desmolde. Detalles de terminación.',
            ],
          //'mercadopago' => '65692463-e207f3f8-8f00-4b51-92c6-a958fa7df6e2',
            'price' => '20000',
            'prices' => [
                'Valor por depósito o transferencia bancaria $20.000.-'
            ]
        ],
        [
            'title' => 'MANDALAS',
            'image-cover' => asset('/images/cursos/mandalas-etiq.webp'),
            'alt-cover' => 'mandalas',
            'description' => [
                '3 FORMAS DE HACER MANDALAS',
                '<br />',
                'Todas la ideas para que te luzcas en tus trabajos.',
                'Es un seminario muy completo, que uds pueden desdoblarlo en 3 en sus talleres.',
                'Siempre con todas las explicaciones y secretitos, saben que no me guardo nada!'
            ],
          //'mercadopago' => '65692463-51bdb6f9-9a5c-4d2c-a03d-5257b8b3912b',
            'price' => '25000',
            'prices' => [
                'Valor por depósito o transferencia bancaria $25.000.-'
            ]
        ],
        [
            'title' => 'Frida Estuco Tintas',
            'image-cover' => asset('/images/cursos/frida-estuco-tintas.webp'),
            'alt-cover' => 'Frida Estuco Tintas',
            'image-body' => asset('/images/cursos/tintas-colores.webp'),
            'alt-body' => 'tintas y colores titinas',
            'description' => [
                'Cuadro realizado sobre una lamina',
                'en blanco y negro.',
                'Intervenido con Pasta cerámica sin horno Titina\'s a modo de estucado, modelado, espatulado, y pintado con Tintas al alcohol.'
            ],
          //'mercadopago' => '65692463-4ff17865-d68e-4fdd-a9e3-f75ca8e9c95b',
            'price' => '20000',
            'prices' => [
                'Valor por depósito o transferencia bancaria $20.000.-'
            ]
        ],
        [
            'title' => 'Mayólicas sin horno',
            'image-cover' => asset('/images/cursos/mayolicas.webp'),
            'alt-cover' => 'Mayólicas sin horno',
            'image-body' => asset('/images/cursos/logo-pasta-ceramica-sin-horno-titinas.webp'),
            'alt-body' => 'pasta cerámica sin horno titinas',
            'description' => [
                "Mayólicas con Pasta cerámica sin horno Titina's"
            ],
          //'mercadopago' => '65692463-1231412e-1862-4e67-aa1c-361ef3dc1d0a',
            'price' => '15000',
            'prices' => [
                'Valor por depósito o transferencia bancaria $15.000.-'
            ]
        ],
        [
            'title' => 'Mosaicos Calcáreos, mayolicas y Mármoles',
            'image-cover' => asset('/images/cursos/mosaicos-teselas-marmoles.webp'),
            'alt-cover' => 'Mosaicos Calcáreos, mayolicas y Mármoles',
            'image-body' => asset('/images/cursos/logo-pasta-ceramica-sin-horno-titinas.webp'),
            'alt-body' => 'pasta cerámica sin horno titinas',
            'description' => [
                "Mosaicos Calcáreos, mayolicas y Mármoles con Pasta cerámica sin horno Titina's"
            ],
          //'mercadopago' => '65692463-9d6e2b73-4194-424f-a0e6-321f5670d09d',
            'price' => '20000',
            'prices' => [
                'Valor por depósito o transferencia bancaria $20.000.-'
            ]
        ],
        [
            'title' => 'Macetas colgantes',
            'image-cover' => asset('/images/cursos/macetas-colgantes.webp'),
            'alt-cover' => 'Macetas colgantes',
            'image-body' => asset('/images/cursos/logo-pasta-ceramica-sin-horno-titinas.webp'),
            'alt-body' => 'pasta cerámica sin horno titinas',
            'description' => [
                "Macetas con Pasta cerámica sin horno Titina's"
            ],
          //'mercadopago' => '65692463-8b05eab9-2540-4255-91a0-71a430c6d431',
            'price' => '15000',
            'prices' => [
                'Valor por depósito o transferencia bancaria $15.000.-'
            ]
        ],
        [
            'title' => 'Platos cerámicos con textura',
            'image-cover' => asset('/images/cursos/platos-ceramicos-con-textura.webp'),
            'alt-cover' => 'Platos cerámicos con textura',
            'image-body' => asset('/images/cursos/logo-pasta-ceramica-sin-horno-titinas.webp'),
            'alt-body' => 'pasta cerámica sin horno titinas',
            'description' => [
                "Platos cerámicos y textura con Pasta cerámica sin horno Titina's"
            ],
          //'mercadopago' => '65692463-dcd7217a-3fa6-4ccf-8eb8-4b9ea5577dd1',
            'price' => '150000',
            'prices' => [
                'Valor por depósito o transferencia bancaria $15.000.-'
            ]
        ],
        [
            'title' => 'Acolchado cerámico',
            'image-cover' => asset('/images/cursos/acolchado-en-pasta-ceramica.webp'),
            'alt-cover' => 'Acolchado cerámico',
            'image-body' => asset('/images/cursos/logo-pasta-ceramica-sin-horno-titinas.webp'),
            'alt-body' => 'pasta cerámica sin horno titinas',
            'description' => [
                "Acolchado cerámico con Pasta cerámica sin horno Titina's"
            ],
          //'mercadopago' => '65692463-d5caee31-e346-4d13-aae6-58f45547be75',
            'price' => '15000',
            'prices' => [
                'Valor por depósito o transferencia bancaria $15.000.-'
            ]
        ],
        [
            'title' => 'Cajón vintage',
            'image-cover' => asset('/images/cursos/cajon-vintage.webp'),
            'alt-cover' => 'Cajón vintage',
            'description' => [
                'Tecnicas de oxido y transferencia.',
                'IM-PER-DI-BLE',
                '¡Ideal para hacer en serie en vender!'
            ],
          //'mercadopago' => '65692463-cbcb6047-1e40-44ea-9282-ecaa6af59161',
            'price' => '20000',
            'prices' => [
                'Valor por depósito o transferencia bancaria $20.000.-'
            ]
        ],
        [
            'title' => 'EFECTO OXIDO SOBRE METAL',
            'image-cover' => asset('/images/cursos/chapitasx3.webp'),
            'alt-cover' => 'Chapitas oxidadas',
            'image-body' => asset('/images/cursos/chapita.webp'),
            'alt-body' => 'Chapita oxidada',
            'description' => [
                'Con productos a tu alcance'
            ],
          //'mercadopago' => '65692463-bc34b348-3515-4a44-ba18-5b747bed5e23',
            'price' => '20000',
            'prices' => [
                'Valor por depósito o transferencia bancaria $20.000.-'
            ]
        ],
        [
            'title' => 'Cajonera estilo Hindú',
            'image-cover' => asset('/images/cursos/cajonera estilo hindu.webp'),
            'alt-cover' => 'Cajonera estilo Hindu',
            'description' => [
                'Seminario orientado al reciclado de muebles.',
                'En esta propuesta, muy pedida por nuestro alumnado, les enseñamos a darle',
                'a cualquier muebles este toque hindú tan atractivo y tan de moda.',
                'Muy fácil, cero stress!'
            ],
          //'mercadopago' => '65692463-de079172-bf9b-4ac1-acce-f559621cf239',
            'price' => '20000',
            'prices' => [
                'Valor por depósito o transferencia bancaria $20.000.-'
            ]
        ],
        [
            'title' => 'Curso intensivo de Pasta cerámica sin horno',
            'image-cover' => asset('/images/cursos/logo-pasta-ceramica-sin-horno-titinas.webp'),
            'alt-cover' => 'Cajonera estilo Hindu',
            'description' => [
                'Es super completo, tiene muchos trabajos para realizar y mucha teoría +tecnica',
                'No incluye materiales',
                '<br />',
                'Resumen: Consta de 13 clases',
                '+11 proyectos de perfeccionamiento paso a paso, con imágenes',
                '+5 paso a paso en videos',
                '+ trabajos realizados en la expo ENIARTE 2006/07/09',
                'Bandeja oriental individual, Plato leñoso, imitación pintura sobre porcelana, porta retrato estilo Gaudí, cantimplora india, espejo afro, initación Raku, ta-te-ti rupestre, Cuadro africano, máscara étnica, espejo redondo, plato marino.',
            ],
          //'mercadopago' => '65692463-a4edd2f1-ca44-4829-afd0-df074ba9a856',
            'price' => '40000',
            'prices' => [
                'Valor por depósito o transferencia bancaria $40.000.-'
            ]
        ],
        [
            'image-cover' => asset('/images/cursos/CAP-1-2.webp'),
            'alt-cover' => 'Nivel 1 - 2',
            'title' => 'Gaudí Nivel 1 - 2',
            'description' => [
                'Efecto Gaudí',
                '¡Dos niveles juntos!'
            ],
          //'mercadopago' => '65692463-a80679b8-2503-4656-adcd-166d7b49db51',
            'price' => '36000',
            'prices' => [
                'Valor por depósito o transferencia bancaria $36.000.-'
            ]
        ],
        [
            'title' => 'Gaudí Nivel 1 - 2 - 3',
            'image-cover' => asset('/images/cursos/CAP-1-2-3.webp'),
            'alt-cover' => 'Nivel 1 - 2 - 3',
            'description' => [
                'Efecto Gaudí',
                '¡Tres niveles juntos!'
            ],
          //'mercadopago' => '65692463-2930e449-e02a-4f96-88a9-5cfa091545a3',
            'price' => '52000',
            'prices' => [
                'Valor por depósito o transferencia bancaria $52.000.-'
            ]
        ],
        [
            'title' => 'Gaudí Nivel 1 - 2 - 3 + potes',
            'image-cover' => asset('/images/cursos/CAP-1-2-3_4POTES.webp'),
            'alt-cover' => 'Nivel 1 - 2 - 3 + potes',
            'description' => [
                'Efecto Gaudí',
                '¡Tres niveles juntos!',
                '+ 4 potes',
            ],
          //'mercadopago' => '65692463-8bc93f1f-d2ee-4cf4-a41e-e51c7dc6cad7',
            'price' => '80000',
            'prices' => [
                'Valor por depósito o transferencia bancaria $80.000.-'
            ]
        ],
        [
            'title' => 'Gaudí Capacitación completa',
            'image-cover' => asset('/images/cursos/capacictacion-completa.webp'),
            'alt-cover' => 'Capacitación completa',
            'description' => [
                'Efecto Gaudí',
                'Niveles 1 al 5',
            ],
          //'mercadopago' => '65692463-726a7930-7610-4222-a2b1-d1c578a2fb6e',
            'price' => '80000',
            'prices' => [
                'Valor por depósito o transferencia bancaria $80.000.-'
            ]
        ],
    ];
}