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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'db_owillianlira' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'X@or==?r9u%6-Dw(l>0<j9]1d_fLT;v>SK2UWVX2?bN<fJlIu]tqd)+4ek]|@hjt' );
define( 'SECURE_AUTH_KEY',  'eqZQSi+kr<Egn7p2M{?IxZG}G[h7A;SfmakZQFPDnZJkFvi5/~WxkS:gJq^o.%e[' );
define( 'LOGGED_IN_KEY',    'pm~Y~UGe{5RhC/cjzb^l[w6`j<%e;1PF)B$>]))?-Y?A>*?3eAVLk;r7hp.5EMAa' );
define( 'NONCE_KEY',        '-j(QHZc29x}u*5M*ur+zAQuU:IWxV):W:zlt<Tr;AZrA~OUb,jvE6IdRDXJ3_H<p' );
define( 'AUTH_SALT',        '6ZTj#JFRIDr5/`A{{tt;{(S?!Y|ssWxl0S/5;#i<96{lg+?N-mtUbI!}^i)$H#6U' );
define( 'SECURE_AUTH_SALT', '0x9*?}GPZOU-Cs@lgI8*s>Sc.Lug+mQ|AWGYyzfi|NM2aZwdp@dxUjXZ468~5Y|C' );
define( 'LOGGED_IN_SALT',   'W#mJTiGNs(Llxj>;wsq|U|k.KS_=*(@}KmxfO@:xtDvQs:&x]V&,/0o!r!TVWP*x' );
define( 'NONCE_SALT',       'D9ov(7k-/f)I&DT2cAP]|1[=yH_m^=$GTPL.f)#cq)io$X:|Wkw~B3`nJq!4y(7F' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
