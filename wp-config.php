<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'mysql');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '#V+Kr=2Vf~qJW@N[Xv/Foe:DOW?1U6J:;J0V647#B/^(]77N]jqWq[9bOo~qUO~a');
define('SECURE_AUTH_KEY',  'o$~Bai/gu!DGwfQV 9JO<NxPp%wZ8!q/aat@Mp#p#42O^9&N~cFo8[s09u>8|E5Q');
define('LOGGED_IN_KEY',    'D X/7ylVtip*LX.Mz6k`c: 0Fs`vpQ;bQuys|W(C`wn#69Hmbd:yFwc+Q45yib&^');
define('NONCE_KEY',        ')9]6LC#_2_ibCAH1E)JyKDC(2OH6CLf=0z= OT<iENZNr2F,2d,,t4rv#(fKKoi3');
define('AUTH_SALT',        ';,RY7@:#N}6TKB%.D5,$bvsi![3aGvcos/J]2kjU*lk)v&3d5x}y;mj3w?~;=v{R');
define('SECURE_AUTH_SALT', '<i>=k:fE]+ln=P=lykU.,<t-])Zml%zR Khzcu4dfLtR%Or4Tq1S9(#/|.[8#kOA');
define('LOGGED_IN_SALT',   'Ce{U8} k@%@iR7cAQRQsVOG9{})zM*!O[tH`QyGyX#`ts=UhR=2$J!|DicY[vx[]');
define('NONCE_SALT',       'R(Vv7?+U4SeuMI#nr+Yv0~?8OWeSbo|5/HT3~vyx${J$UzH5t`nL3bH@-my!BnPD');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
