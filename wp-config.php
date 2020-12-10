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
define( 'DB_NAME', 'blogsenac' );

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
define( 'AUTH_KEY',         'kNEAexz^YtrNAXe6,xjVtE#v@X#Abn#|u0Z&xMX^CNP~^D~wNcSZS=kuv*ugs4l2' );
define( 'SECURE_AUTH_KEY',  '4-nSd2ISU%x<9lx_:$Q;.^PcG_JAR_=8bLcTq9i2rq~/_Bc-1o2&A5bdRsm@2Jys' );
define( 'LOGGED_IN_KEY',    '3 =DOIY-6F@rwI9q{=7FQ3vq9 -MDC|H1tHM;fh~~h7%a;OeK.g,?l5-_wlsW0Z<' );
define( 'NONCE_KEY',        'UMyh7Ki&pzG16$Wd([!CnauX9DF_u(*QR[gh-c_^4ZuFa_dD=piD8gfLil),2h!y' );
define( 'AUTH_SALT',        'tt*dr3vXt=zg4p7@>Hsj4tjL2+R=l1Y2=q3zq^)M:N;+?>kpJFzL/hytAN9OU$fb' );
define( 'SECURE_AUTH_SALT', 'pNK!kdmQBM%814-/7E0Ub_Uj`/RI@z`BDG[;]I,/;8focAy~$YbC 5q?l$ixD9(0' );
define( 'LOGGED_IN_SALT',   '6]7Q|3N)}fvZrisP7PwX[j{ycCOrT)2*#f_c(i3|e,,GA?.smI2[G?_.`K8_`Y{e' );
define( 'NONCE_SALT',       '^<I!_}J9|RqtMoVORUM,ejc6#)~+A9[%XiJ]TT?Yp<%`@:i5s=AlsY^ ?0v#S`U|' );

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
