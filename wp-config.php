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
define( 'DB_NAME', 'wpbanco' );

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
define( 'AUTH_KEY',         '_#;/]lc$Ws9d KKOQk=QJlCYO.;Q(PJJ={c}i3*`KxU(_Uft:S-nm Sus_2H b;Z' );
define( 'SECURE_AUTH_KEY',  'SF;wAxP%r7._d%C/q_BUam$=2_Qi+WD%Eaai)(w6*<I/)NxhYUr(@^v</8;i.DN%' );
define( 'LOGGED_IN_KEY',    '52zfppSfiD%yjuSyHo(gkTjK!h0{ s;&nde_d<RNP(>^i4hr%](w7`(J{`p(chT=' );
define( 'NONCE_KEY',        '*X/,rCtmxH|9nzapUX,g@gCu^TeJ/]s#GVc>g310NRtMoe?ee:3Cx34*0%LLD&!8' );
define( 'AUTH_SALT',        '!0Jx@gv[+;`n*5:j+IBb`2}Z}oy8,S]jz0%~izP62> =[)?5Ha`9Wr4O6rtqa;vE' );
define( 'SECURE_AUTH_SALT', 'ez`cE?e?|R?uw2Jdurs+9|5M_;T_O dhniu@91maF|G7uLqSW2f1Q{y?v={P^BwJ' );
define( 'LOGGED_IN_SALT',   '|b},Qo(]j^rA8H/IeMi+3nv<)86#[MpO9l:/B+[71RuSWY@u)1_DdboQL|#`}~rW' );
define( 'NONCE_SALT',       ')BB)`@Sh4O)4K,QEE]7S9UhluK6i$?P`GOYE eyE?lg/sTPIA(D|u<-?p1Ve=?B8' );

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
