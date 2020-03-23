<?php

include_once './inc/db.php';
include_once './inc/get-report.php';
include_once './inc/get-petition.php';

$casos = [
    'suspeitos'  => '23',
    'confirmados'=> '00',
    'descartados'=> '03',
    'analise'=> '23',
];

$date = [
    'update' => '20/03/2020 ás 22h29'
];

$materia = [
    'm1' => [
        'title'  => "Boletim Epidemiológico – 18 de março",
        'link'   => "http://www.angra.rj.gov.br/noticia.asp?vid_noticia=58100&indexsigla=imp",
        'fonte'  => "Prefeitura de Angra dos Reis",
        ],
    'm2' => [
        'title'  => "Turistas estrangeiros são impedidos de desembarcar em Angra dos Reis",
        'link'   => "https://diariodovale.com.br/tempo-real/turistas-estrangeiros-sao-impedidos-de-desembarcar-em-angra-dos-reis/",
        'fonte'  => "Diário do Vale",
        ],
    'm3' => [
        'title'  => "Últimas notícias do G1 em Angra dos Reis",
        'link'   => "https://g1.globo.com/rj/sul-do-rio-costa-verde/cidade/angra-dos-reis/",
        'fonte'  => "Globo",
        ],
];

$push = [
    'news' => 'Decreto do prefeito: O comércio de Angra fechará suas portas a partir de segunda-feira.'
];

?>