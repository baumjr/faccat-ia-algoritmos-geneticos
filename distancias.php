<?php
/* Para diminuir código, aqui ficam setadas as distâncias rodoviárias entre todos os pontos */

//Array utilizado para mapear as capitais, possibilitando o uso do nome em vez dos índices numéricos
$map = array('ARACAJU', 
			 'BELEM', 
			 'BELO_HORIZONTE', 
			 'BOA_VISTA', 
			 'BRASILIA', 
			 'CAMPINA_GRANDE', 
			 'CUIBA', 'CURITIBA', 
			 'FLORIANOPOLIS', 
			 'FORTALEZA', 
			 'GOIANIA', 
			 'JOAO_PESSOA', 
			 'MACEIO', 
			 'MANAUS', 
			 'NATAL', 
			 'PALMAS', 
			 'PORTO_ALEGRE', 
			 'PORTO_VELHO', 
			 'RECIFE', 
			 'RIO_BRANCO', 
			 'RIO_DE_JANEIRO', 
			 'SALVADOR', 
			 'SAO_LUIZ', 
			 'SAO_PAULO', 
			 'TERESINA', 
			 'VITORIA');

//Definição do Array Distancias
$distancias['ARACAJU']['BELEM'] = 2079;
$distancias['ARACAJU']['BELO_HORIZONTE'] = 1578;
$distancias['ARACAJU']['BOA_VISTA'] = 6000;
$distancias['ARACAJU']['BRASILIA'] = 1652;
$distancias['ARACAJU']['CAMPINA_GRANDE'] = 2765;
$distancias['ARACAJU']['CUIBA'] = 2775;
$distancias['ARACAJU']['CURITIBA'] = 2595;
$distancias['ARACAJU']['FLORIANOPOLIS'] = 2892;
$distancias['ARACAJU']['FORTALEZA'] = 1183;
$distancias['ARACAJU']['GOIANIA'] = 1848;
$distancias['ARACAJU']['JOAO_PESSOA'] = 611;
$distancias['ARACAJU']['MACEIO'] = 294;
$distancias['ARACAJU']['MANAUS'] = 5215;
$distancias['ARACAJU']['NATAL'] = 788;
$distancias['ARACAJU']['PALMAS'] = 1662;
$distancias['ARACAJU']['PORTO_ALEGRE'] = 3296;
$distancias['ARACAJU']['PORTO_VELHO'] = 4230;
$distancias['ARACAJU']['RECIFE'] = 501;
$distancias['ARACAJU']['RIO_BRANCO'] = 4763;
$distancias['ARACAJU']['RIO_DE_JANEIRO'] = 1855;
$distancias['ARACAJU']['SALVADOR'] = 356;
$distancias['ARACAJU']['SAO_LUIZ'] = 1578;
$distancias['ARACAJU']['SAO_PAULO'] = 2187;
$distancias['ARACAJU']['TERESINA'] = 1142;
$distancias['ARACAJU']['VITORIA'] = 1408;
//
$distancias['BELEM']['BELO_HORIZONTE'] = 2824;
$distancias['BELEM']['BOA_VISTA'] = 6083;
$distancias['BELEM']['BRASILIA'] = 2120;
$distancias['BELEM']['CAMPINA_GRANDE'] = 2942;
$distancias['BELEM']['CUIBA'] = 2941;
$distancias['BELEM']['CURITIBA'] = 3193;
$distancias['BELEM']['FLORIANOPOLIS'] = 3500;
$distancias['BELEM']['FORTALEZA'] = 1610;
$distancias['BELEM']['GOIANIA'] = 2017;
$distancias['BELEM']['JOAO_PESSOA'] = 2161;
$distancias['BELEM']['MACEIO'] = 2173;
$distancias['BELEM']['MANAUS'] = 5298;
$distancias['BELEM']['NATAL'] = 2108;
$distancias['BELEM']['PALMAS'] = 1283;
$distancias['BELEM']['PORTO_ALEGRE'] = 3852;
$distancias['BELEM']['PORTO_VELHO'] = 4397;
$distancias['BELEM']['RECIFE'] = 2074;
$distancias['BELEM']['RIO_BRANCO'] = 4931;
$distancias['BELEM']['RIO_DE_JANEIRO'] = 3250;
$distancias['BELEM']['SALVADOR'] = 2100;
$distancias['BELEM']['SAO_LUIZ'] = 806;
$distancias['BELEM']['SAO_PAULO'] = 2933;
$distancias['BELEM']['TERESINA'] = 947;
$distancias['BELEM']['VITORIA'] = 3108;
//
$distancias['BELO_HORIZONTE']['BOA_VISTA'] = 4736;
$distancias['BELO_HORIZONTE']['BRASILIA'] = 716;
$distancias['BELO_HORIZONTE']['CAMPINA_GRANDE'] = 1453;
$distancias['BELO_HORIZONTE']['CUIBA'] = 1594;
$distancias['BELO_HORIZONTE']['CURITIBA'] = 1004;
$distancias['BELO_HORIZONTE']['FLORIANOPOLIS'] = 1301;
$distancias['BELO_HORIZONTE']['FORTALEZA'] = 2528;
$distancias['BELO_HORIZONTE']['GOIANIA'] = 906;
$distancias['BELO_HORIZONTE']['JOAO_PESSOA'] = 2171;
$distancias['BELO_HORIZONTE']['MACEIO'] = 1854;
$distancias['BELO_HORIZONTE']['MANAUS'] = 3951;
$distancias['BELO_HORIZONTE']['NATAL'] = 2348;
$distancias['BELO_HORIZONTE']['PALMAS'] = 1690;
$distancias['BELO_HORIZONTE']['PORTO_ALEGRE'] = 1712;
$distancias['BELO_HORIZONTE']['PORTO_VELHO'] = 3050;
$distancias['BELO_HORIZONTE']['RECIFE'] = 2061;
$distancias['BELO_HORIZONTE']['RIO_BRANCO'] = 3584;
$distancias['BELO_HORIZONTE']['RIO_DE_JANEIRO'] = 434;
$distancias['BELO_HORIZONTE']['SALVADOR'] = 1372;
$distancias['BELO_HORIZONTE']['SAO_LUIZ'] = 2738;
$distancias['BELO_HORIZONTE']['SAO_PAULO'] = 586;
$distancias['BELO_HORIZONTE']['TERESINA'] = 2302;
$distancias['BELO_HORIZONTE']['VITORIA'] = 524;
//
$distancias['BOA_VISTA']['BRASILIA'] = 4275;
$distancias['BOA_VISTA']['CAMPINA_GRANDE'] = 3836;
$distancias['BOA_VISTA']['CUIBA'] = 3142;
$distancias['BOA_VISTA']['CURITIBA'] = 4821;
$distancias['BOA_VISTA']['FLORIANOPOLIS'] = 5128;
$distancias['BOA_VISTA']['FORTALEZA'] = 6548;
$distancias['BOA_VISTA']['GOIANIA'] = 4076;
$distancias['BOA_VISTA']['JOAO_PESSOA'] = 6593;
$distancias['BOA_VISTA']['MACEIO'] = 6279;
$distancias['BOA_VISTA']['MANAUS'] = 785;
$distancias['BOA_VISTA']['NATAL'] = 6770;
$distancias['BOA_VISTA']['PALMAS'] = 4926;
$distancias['BOA_VISTA']['PORTO_ALEGRE'] = 5348;
$distancias['BOA_VISTA']['PORTO_VELHO'] = 1686;
$distancias['BOA_VISTA']['RECIFE'] = 6483;
$distancias['BOA_VISTA']['RIO_BRANCO'] = 2230;
$distancias['BOA_VISTA']['RIO_DE_JANEIRO'] = 5159;
$distancias['BOA_VISTA']['SALVADOR'] = 5794;
$distancias['BOA_VISTA']['SAO_LUIZ'] = 6120;
$distancias['BOA_VISTA']['SAO_PAULO'] = 4756;
$distancias['BOA_VISTA']['TERESINA'] = 6052;
$distancias['BOA_VISTA']['VITORIA'] = 5261;
//
$distancias['BRASILIA']['CAMPINA_GRANDE'] = 1134;
$distancias['BRASILIA']['CUIBA'] = 1133;
$distancias['BRASILIA']['CURITIBA'] = 1366;
$distancias['BRASILIA']['FLORIANOPOLIS'] = 1676;
$distancias['BRASILIA']['FORTALEZA'] = 2200;
$distancias['BRASILIA']['GOIANIA'] = 209;
$distancias['BRASILIA']['JOAO_PESSOA'] = 2245;
$distancias['BRASILIA']['MACEIO'] = 1930;
$distancias['BRASILIA']['MANAUS'] = 3490;
$distancias['BRASILIA']['NATAL'] = 2422;
$distancias['BRASILIA']['PALMAS'] = 973;
$distancias['BRASILIA']['PORTO_ALEGRE'] = 2027;
$distancias['BRASILIA']['PORTO_VELHO'] = 2589;
$distancias['BRASILIA']['RECIFE'] = 2135;
$distancias['BRASILIA']['RIO_BRANCO'] = 3123;
$distancias['BRASILIA']['RIO_DE_JANEIRO'] = 1148;
$distancias['BRASILIA']['SALVADOR'] = 1446;
$distancias['BRASILIA']['SAO_LUIZ'] = 2157;
$distancias['BRASILIA']['SAO_PAULO'] = 1015;
$distancias['BRASILIA']['TERESINA'] = 1789;
$distancias['BRASILIA']['VITORIA'] = 1239;
//
$distancias['CAMPINA_GRANDE']['CUIBA'] = 694;
$distancias['CAMPINA_GRANDE']['CURITIBA'] = 991;
$distancias['CAMPINA_GRANDE']['FLORIANOPOLIS'] = 1298;
$distancias['CAMPINA_GRANDE']['FORTALEZA'] = 3407;
$distancias['CAMPINA_GRANDE']['GOIANIA'] = 935;
$distancias['CAMPINA_GRANDE']['JOAO_PESSOA'] = 3357;
$distancias['CAMPINA_GRANDE']['MACEIO'] = 3040;
$distancias['CAMPINA_GRANDE']['MANAUS'] = 3051;
$distancias['CAMPINA_GRANDE']['NATAL'] = 3534;
$distancias['CAMPINA_GRANDE']['PALMAS'] = 1785;
$distancias['CAMPINA_GRANDE']['PORTO_ALEGRE'] = 1518;
$distancias['CAMPINA_GRANDE']['PORTO_VELHO'] = 2150;
$distancias['CAMPINA_GRANDE']['RECIFE'] = 3247;
$distancias['CAMPINA_GRANDE']['RIO_BRANCO'] = 2684;
$distancias['CAMPINA_GRANDE']['RIO_DE_JANEIRO'] = 1444;
$distancias['CAMPINA_GRANDE']['SALVADOR'] = 2568;
$distancias['CAMPINA_GRANDE']['SAO_LUIZ'] = 2979;
$distancias['CAMPINA_GRANDE']['SAO_PAULO'] = 1014;
$distancias['CAMPINA_GRANDE']['TERESINA'] = 2911;
$distancias['CAMPINA_GRANDE']['VITORIA'] = 1892;
//
$distancias['CUIBA']['CURITIBA'] = 1679;
$distancias['CUIBA']['FLORIANOPOLIS'] = 1986;
$distancias['CUIBA']['FORTALEZA'] = 3406;
$distancias['CUIBA']['GOIANIA'] = 934;
$distancias['CUIBA']['JOAO_PESSOA'] = 3366;
$distancias['CUIBA']['MACEIO'] = 3049;
$distancias['CUIBA']['MANAUS'] = 2357;
$distancias['CUIBA']['NATAL'] = 3543;
$distancias['CUIBA']['PALMAS'] = 1784;
$distancias['CUIBA']['PORTO_ALEGRE'] = 2206;
$distancias['CUIBA']['PORTO_VELHO'] = 1456;
$distancias['CUIBA']['RECIFE'] = 3255;
$distancias['CUIBA']['RIO_BRANCO'] = 1990;
$distancias['CUIBA']['RIO_DE_JANEIRO'] = 2017;
$distancias['CUIBA']['SALVADOR'] = 2566;
$distancias['CUIBA']['SAO_LUIZ'] = 2978;
$distancias['CUIBA']['SAO_PAULO'] = 1614;
$distancias['CUIBA']['TERESINA'] = 2910;
$distancias['CUIBA']['VITORIA'] = 2119;
//
$distancias['CURITIBA']['FLORIANOPOLIS'] = 300;
$distancias['CURITIBA']['FORTALEZA'] = 3541;
$distancias['CURITIBA']['GOIANIA'] = 1186;
$distancias['CURITIBA']['JOAO_PESSOA'] = 3188;
$distancias['CURITIBA']['MACEIO'] = 2871;
$distancias['CURITIBA']['MANAUS'] = 4036;
$distancias['CURITIBA']['NATAL'] = 3365;
$distancias['CURITIBA']['PALMAS'] = 2036;
$distancias['CURITIBA']['PORTO_ALEGRE'] = 711;
$distancias['CURITIBA']['PORTO_VELHO'] = 3135;
$distancias['CURITIBA']['RECIFE'] = 3078;
$distancias['CURITIBA']['RIO_BRANCO'] = 3669;
$distancias['CURITIBA']['RIO_DE_JANEIRO'] = 852;
$distancias['CURITIBA']['SALVADOR'] = 2385;
$distancias['CURITIBA']['SAO_LUIZ'] = 3230;
$distancias['CURITIBA']['SAO_PAULO'] = 408;
$distancias['CURITIBA']['TERESINA'] = 3143;
$distancias['CURITIBA']['VITORIA'] = 1300;
//
$distancias['FLORIANOPOLIS']['FORTALEZA'] = 3838;
$distancias['FLORIANOPOLIS']['GOIANIA'] = 1493;
$distancias['FLORIANOPOLIS']['JOAO_PESSOA'] = 1493;
$distancias['FLORIANOPOLIS']['MACEIO'] = 3168;
$distancias['FLORIANOPOLIS']['MANAUS'] = 4443;
$distancias['FLORIANOPOLIS']['NATAL'] = 3662;
$distancias['FLORIANOPOLIS']['PALMAS'] = 2336;
$distancias['FLORIANOPOLIS']['PORTO_ALEGRE'] = 476;
$distancias['FLORIANOPOLIS']['PORTO_VELHO'] = 3442;
$distancias['FLORIANOPOLIS']['RECIFE'] = 3375;
$distancias['FLORIANOPOLIS']['RIO_BRANCO'] = 3976;
$distancias['FLORIANOPOLIS']['RIO_DE_JANEIRO'] = 1144;
$distancias['FLORIANOPOLIS']['SALVADOR'] = 2682;
$distancias['FLORIANOPOLIS']['SAO_LUIZ'] = 3537;
$distancias['FLORIANOPOLIS']['SAO_PAULO'] = 705;
$distancias['FLORIANOPOLIS']['TERESINA'] = 3450;
$distancias['FLORIANOPOLIS']['VITORIA'] = 1597;
//
$distancias['FORTALEZA']['GOIANIA'] = 2482;
$distancias['FORTALEZA']['JOAO_PESSOA'] = 688;
$distancias['FORTALEZA']['MACEIO'] = 1075;
$distancias['FORTALEZA']['MANAUS'] = 5763;
$distancias['FORTALEZA']['NATAL'] = 537;
$distancias['FORTALEZA']['PALMAS'] = 2035;
$distancias['FORTALEZA']['PORTO_ALEGRE'] = 4242;
$distancias['FORTALEZA']['PORTO_VELHO'] = 4862;
$distancias['FORTALEZA']['RECIFE'] = 800;
$distancias['FORTALEZA']['RIO_BRANCO'] = 5396;
$distancias['FORTALEZA']['RIO_DE_JANEIRO'] = 2805;
$distancias['FORTALEZA']['SALVADOR'] = 1389;
$distancias['FORTALEZA']['SAO_LUIZ'] = 1070;
$distancias['FORTALEZA']['SAO_PAULO'] = 3127;
$distancias['FORTALEZA']['TERESINA'] = 634;
$distancias['FORTALEZA']['VITORIA'] = 2397;
//
$distancias['GOIANIA']['JOAO_PESSOA'] = 2442;
$distancias['GOIANIA']['MACEIO'] = 2125;
$distancias['GOIANIA']['MANAUS'] = 3291;
$distancias['GOIANIA']['NATAL'] = 2618;
$distancias['GOIANIA']['PALMAS'] = 874;
$distancias['GOIANIA']['PORTO_ALEGRE'] = 1847;
$distancias['GOIANIA']['PORTO_VELHO'] = 2390;
$distancias['GOIANIA']['RECIFE'] = 2332;
$distancias['GOIANIA']['RIO_BRANCO'] = 2924;
$distancias['GOIANIA']['RIO_DE_JANEIRO'] = 1338;
$distancias['GOIANIA']['SALVADOR'] = 1643;
$distancias['GOIANIA']['SAO_LUIZ'] = 2054;
$distancias['GOIANIA']['SAO_PAULO'] = 926;
$distancias['GOIANIA']['TERESINA'] = 1986;
$distancias['GOIANIA']['VITORIA'] = 1428;
//
$distancias['JOAO_PESSOA']['MACEIO'] = 395;
$distancias['JOAO_PESSOA']['MANAUS'] = 5808;
$distancias['JOAO_PESSOA']['NATAL'] = 185;
$distancias['JOAO_PESSOA']['PALMAS'] = 5808;
$distancias['JOAO_PESSOA']['PORTO_ALEGRE'] = 3889;
$distancias['JOAO_PESSOA']['PORTO_VELHO'] = 4822;
$distancias['JOAO_PESSOA']['RECIFE'] = 120;
$distancias['JOAO_PESSOA']['RIO_BRANCO'] = 5356;
$distancias['JOAO_PESSOA']['RIO_DE_JANEIRO'] = 2448;
$distancias['JOAO_PESSOA']['SALVADOR'] = 949;
$distancias['JOAO_PESSOA']['SAO_LUIZ'] = 1660;
$distancias['JOAO_PESSOA']['SAO_PAULO'] = 2770;
$distancias['JOAO_PESSOA']['TERESINA'] = 1224;
$distancias['JOAO_PESSOA']['VITORIA'] = 2001;
//
$distancias['MACEIO']['MANAUS'] = 5491;
$distancias['MACEIO']['NATAL'] = 572;
$distancias['MACEIO']['PALMAS'] = 1851;
$distancias['MACEIO']['PORTO_ALEGRE'] = 3572;
$distancias['MACEIO']['PORTO_VELHO'] = 4505;
$distancias['MACEIO']['RECIFE'] = 285;
$distancias['MACEIO']['RIO_BRANCO'] = 5039;
$distancias['MACEIO']['RIO_DE_JANEIRO'] = 2131;
$distancias['MACEIO']['SALVADOR'] = 632;
$distancias['MACEIO']['SAO_LUIZ'] = 1672;
$distancias['MACEIO']['SAO_PAULO'] = 2453;
$distancias['MACEIO']['TERESINA'] = 1236;
$distancias['MACEIO']['VITORIA'] = 1684;
//
$distancias['MANAUS']['NATAL'] = 5985;
$distancias['MANAUS']['PALMAS'] = 4141;
$distancias['MANAUS']['PORTO_ALEGRE'] = 4563;
$distancias['MANAUS']['PORTO_VELHO'] = 901;
$distancias['MANAUS']['RECIFE'] = 5698;
$distancias['MANAUS']['RIO_BRANCO'] = 1445;
$distancias['MANAUS']['RIO_DE_JANEIRO'] = 4374;
$distancias['MANAUS']['SALVADOR'] = 5009;
$distancias['MANAUS']['SAO_LUIZ'] = 5335;
$distancias['MANAUS']['SAO_PAULO'] = 3971;
$distancias['MANAUS']['TERESINA'] = 5267;
$distancias['MANAUS']['VITORIA'] = 4476;
//
$distancias['NATAL']['PALMAS'] = 2345;
$distancias['NATAL']['PORTO_ALEGRE'] = 4066;
$distancias['NATAL']['PORTO_VELHO'] = 4998;
$distancias['NATAL']['RECIFE'] = 297;
$distancias['NATAL']['RIO_BRANCO'] = 5533;
$distancias['NATAL']['RIO_DE_JANEIRO'] = 2625;
$distancias['NATAL']['SALVADOR'] = 2625;
$distancias['NATAL']['SAO_LUIZ'] = 1607;
$distancias['NATAL']['SAO_PAULO'] = 2947;
$distancias['NATAL']['TERESINA'] = 1171;
$distancias['NATAL']['VITORIA'] = 2178;
//
$distancias['PALMAS']['PORTO_ALEGRE'] = 2747;
$distancias['PALMAS']['PORTO_VELHO'] = 2536;
$distancias['PALMAS']['RECIFE'] = 2058;
$distancias['PALMAS']['RIO_BRANCO'] = 3764;
$distancias['PALMAS']['RIO_DE_JANEIRO'] = 2124;
$distancias['PALMAS']['SALVADOR'] = 1454;
$distancias['PALMAS']['SAO_LUIZ'] = 1386;
$distancias['PALMAS']['SAO_PAULO'] = 1776;
$distancias['PALMAS']['TERESINA'] = 1401;
$distancias['PALMAS']['VITORIA'] = 1401;
//
$distancias['PORTO_ALEGRE']['PORTO_VELHO'] = 3662;
$distancias['PORTO_ALEGRE']['RECIFE'] = 3779;
$distancias['PORTO_ALEGRE']['RIO_BRANCO'] = 4196;
$distancias['PORTO_ALEGRE']['RIO_DE_JANEIRO'] = 1553;
$distancias['PORTO_ALEGRE']['SALVADOR'] = 3090;
$distancias['PORTO_ALEGRE']['SAO_LUIZ'] = 3891;
$distancias['PORTO_ALEGRE']['SAO_PAULO'] = 1109;
$distancias['PORTO_ALEGRE']['TERESINA'] = 3804;
$distancias['PORTO_ALEGRE']['VITORIA'] = 2001;
//
$distancias['PORTO_VELHO']['RECIFE'] = 4712;
$distancias['PORTO_VELHO']['RIO_BRANCO'] = 544;
$distancias['PORTO_VELHO']['RIO_DE_JANEIRO'] = 3473;
$distancias['PORTO_VELHO']['SALVADOR'] = 4023;
$distancias['PORTO_VELHO']['SAO_LUIZ'] = 4434;
$distancias['PORTO_VELHO']['SAO_PAULO'] = 3070;
$distancias['PORTO_VELHO']['TERESINA'] = 4366;
$distancias['PORTO_VELHO']['VITORIA'] = 3575;
//
$distancias['RECIFE']['RIO_BRANCO'] = 5243;
$distancias['RECIFE']['RIO_DE_JANEIRO'] = 2338;
$distancias['RECIFE']['SALVADOR'] = 839;
$distancias['RECIFE']['SAO_LUIZ'] = 1573;
$distancias['RECIFE']['SAO_PAULO'] = 2660;
$distancias['RECIFE']['TERESINA'] = 1137;
$distancias['RECIFE']['VITORIA'] = 1831;
//
$distancias['RIO_BRANCO']['RIO_DE_JANEIRO'] = 4007;
$distancias['RIO_BRANCO']['SALVADOR'] = 4457;
$distancias['RIO_BRANCO']['SAO_LUIZ'] = 4968;
$distancias['RIO_BRANCO']['SAO_PAULO'] = 3604;
$distancias['RIO_BRANCO']['TERESINA'] = 4900;
$distancias['RIO_BRANCO']['VITORIA'] = 4109;
//
$distancias['RIO_DE_JANEIRO']['SALVADOR'] = 1649;
$distancias['RIO_DE_JANEIRO']['SAO_LUIZ'] = 3015;
$distancias['RIO_DE_JANEIRO']['SAO_PAULO'] = 429;
$distancias['RIO_DE_JANEIRO']['TERESINA'] = 2579;
$distancias['RIO_DE_JANEIRO']['VITORIA'] = 521;
//
$distancias['SALVADOR']['SAO_LUIZ'] = 1599;
$distancias['SALVADOR']['SAO_PAULO'] = 1962;
$distancias['SALVADOR']['TERESINA'] = 1163;
$distancias['SALVADOR']['VITORIA'] = 1202;
//
$distancias['SAO_LUIZ']['SAO_PAULO'] = 2970;
$distancias['SAO_LUIZ']['TERESINA'] = 446;
$distancias['SAO_LUIZ']['VITORIA'] = 2607;
//
$distancias['SAO_PAULO']['TERESINA'] = 2792;
$distancias['SAO_PAULO']['VITORIA'] = 882;
//
$distancias['TERESINA']['VITORIA'] = 2171;
?>