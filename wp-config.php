<?php
/** 
 * A configuração de base do WordPress
 *
 * Este ficheiro define os seguintes parâmetros: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, e ABSPATH. Pode obter mais informação
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} no Codex. As definições de MySQL são-lhe fornecidas pelo seu serviço de alojamento.
 *
 * Este ficheiro é usado para criar o script  wp-config.php, durante
 * a instalação, mas não tem que usar essa funcionalidade se não quiser. 
 * Salve este ficheiro como "wp-config.php" e preencha os valores.
 *
 * @package WordPress
 */

// ** Definições de MySQL - obtenha estes dados do seu serviço de alojamento** //
/** O nome da base de dados do WordPress */
define('DB_NAME', 'j4rtm0b1_hotsite');

/** O nome do utilizador de MySQL */
define('DB_USER', 'j4rtm0b1');

/** A password do utilizador de MySQL  */
define('DB_PASSWORD', 's62dvvfLpEh8ErdZ');

/** O nome do serviddor de  MySQL  */
define('DB_HOST', 'localhost');

/** O "Database Charset" a usar na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O "Database Collate type". Se tem dúvidas não mude. */
define('DB_COLLATE', '');

/**#@+
 * Chaves Únicas de Autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '/}z>;nUx/lY}-[0B/h@?IC7S-SE^M2/m-}W]v%L7&dL/zq7^mUQc~ [ Y?C=#h4{');
define('SECURE_AUTH_KEY',  '|Q8ABz^<L*%IFH=q,4)eK5Frr{b3EA.-(Sg1:+hMU%ct9]!.jwF/]YOr7vGk@>2~');
define('LOGGED_IN_KEY',    'Of8QWqw7a8!V{}HIT1_pEvCmw2[)|N|5-iy1HGW`k7tze(T-DJ%B6b=Lg2SK_qGm');
define('NONCE_KEY',        '+).{~ZZs`Qg]LUR| qh;vNc7mP_9lorz|Q-)BuvPm%0 |4A~yK68}Y`GZc#)0]<_');
define('AUTH_SALT',        '(etV-0~{cl)*cgJIJIWzx][XX-Q6a<!Z2v&H4lJ4m,}?;4{AGy}xxy@?}Ka,Jflx');
define('SECURE_AUTH_SALT', '9uv-qTLofI$IiSNIroViN&nF+kUUl(]?Z#cIv.HXN,6E+W#%4%f+BnbRB>oJSp2o');
define('LOGGED_IN_SALT',   '|yk`0)b-kX1y-M;Sv?7Qu)JL*|caEuq7of ++A$_YL/fZ,YhWjRd;A nt$|GDi/J');
define('NONCE_SALT',       ']/?=u4Qn]$ShTr:&J,O@?(|TRruv+zPs~4Jp#_oGaAf>@?`%/l40.e@Zqi3|VMCd');

/**#@-*/

/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix  = 'wj4rtp_';

/**
 * Idioma de Localização do WordPress, Inglês por omissão.
 *
 * Mude isto para localizar o WordPress. Um ficheiro MO correspondendo ao idioma
 * escolhido deverá existir na directoria wp-content/languages. Instale por exemplo
 * pt_PT.mo em wp-content/languages e defina WPLANG como 'pt_PT' para activar o
 * suporte para a língua portuguesa.
 */
define('WPLANG', 'pt_PT');

/**
 * Para developers: WordPress em modo debugging.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 */
define('WP_DEBUG', false);

/* E é tudo. Pare de editar! */

/** Caminho absoluto para a pasta do WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once(ABSPATH . 'wp-settings.php');

