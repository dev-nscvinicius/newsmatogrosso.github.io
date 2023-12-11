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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'news' );

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
define( 'AUTH_KEY',         'e~0QJ+`5+3y/k%s_9SdzcY+[bE3KvWz:OI7nm1*+Gk 5i4qw%iWQI*u-o6`z _#8' );
define( 'SECURE_AUTH_KEY',  'rkA{cOA9]E}ge?e~i1rH3bAw98DU@|HxT^IzwBL5[_l4dY9ZdV@c>rQ7K >rCzHA' );
define( 'LOGGED_IN_KEY',    '@0!6E[}qg`nbff4{C{ug_CDz;g_A>qLuTG/Df%lbUkco!E3F`0Er+gT2SKlkeB}i' );
define( 'NONCE_KEY',        'XifhDp1.kN+z=wIzZ`K.t[bij}3VP2&K&-=Q=A[$5iEm~bI*6<i!s*:g=_00@zAf' );
define( 'AUTH_SALT',        'P)nN&9[cl(Gf5m:4!b&]BQ#m&[*~8&.ZaV5.;]vF{BZ`bfty*&i_B=2^#~1`E.>~' );
define( 'SECURE_AUTH_SALT', 'zvc$@.$?0rN=!_4a2hY~?uUo`CdG<O,[31aF6^X7C2W MYv:_&d.Y;bcgiLjmQ01' );
define( 'LOGGED_IN_SALT',   '4wZ+_0p]l4DT)7df]?,/b#hbj#<W}pb{7<^y|Avt=6W+EVIc6,Obg|s>*ZT xSI7' );
define( 'NONCE_SALT',       'Q=!an>{a((>@7C)w]I+AAsR?^O+nF>LaE}=Y-lpX@~3;zj/+oq2^YL]OVoMHC{{y' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
