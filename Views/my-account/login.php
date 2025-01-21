<?php
require_once "./../../Config/db.php";
require_once "../../Class/Utilsateur.php";




if ($_SERVER['REQUEST_METHOD'] == 'POST') {


	if (empty($_POST['email']) || empty($_POST['password'])) {
		echo "Tous les champs sont obligatoires !";
		exit;
	}

	$email = htmlspecialchars(trim($_POST['email']));
	$password = htmlspecialchars($_POST['password']);


	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "L'email est invalide !";
		exit;
	}


	$login = new Utilisateur(null, $email, $password);

	$message = $login->login($login);
	if ($message) {

	}
}


if (isset($_GET['logout'])) {
	$logout = new Utilisateur();
	$logout->logout();
}

?>




<!doctype html>
<html lang="en-US">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<script type="text/javascript" id="lpData">
		/* <![CDATA[ */
		var lpData = { "site_url": "https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn", "user_id": "0", "theme": "quiklearn", "lp_rest_url": "https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn\/wp-json\/", "nonce": "ea23c1427e", "is_course_archive": "", "courses_url": "https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn\/courses\/", "urlParams": [], "lp_version": "4.2.7.5", "lp_rest_load_ajax": "https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn\/wp-json\/lp\/v1\/load_content_via_ajax\/", "ajaxUrl": "https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn\/wp-admin\/admin-ajax.php", "coverImageRatio": "5.16", "toast": { "gravity": "bottom", "position": "center", "duration": 3000, "close": 1, "stopOnFocus": 1, "classPrefix": "lp-toast" }, "i18n": [] };
		/* ]]> */
	</script>
	<style id="learn-press-custom-css">
		:root {
			--lp-container-max-width: 1290px;
			--lp-cotainer-padding: 1rem;
			--lp-primary-color: #543ee8;
			--lp-secondary-color: #442e66;
		}
	</style>
	<title>My account &#8211; Quiklearn</title>
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
	<link rel="preconnect" href="https://fonts.googleapis.com/" />
	<style type="text/css">
		@font-face {
			font-family: 'Outfit';
			font-style: normal;
			font-weight: 300;
			font-display: swap;
			src: url(https://fonts.gstatic.com/s/outfit/v11/QGYyz_MVcBeNP4NjuGObqx1XmO1I4W61O4a0Fg.ttf) format('truetype');
		}

		@font-face {
			font-family: 'Outfit';
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: url(https://fonts.gstatic.com/s/outfit/v11/QGYyz_MVcBeNP4NjuGObqx1XmO1I4TC1O4a0Fg.ttf) format('truetype');
		}

		@font-face {
			font-family: 'Outfit';
			font-style: normal;
			font-weight: 500;
			font-display: swap;
			src: url(https://fonts.gstatic.com/s/outfit/v11/QGYyz_MVcBeNP4NjuGObqx1XmO1I4QK1O4a0Fg.ttf) format('truetype');
		}

		@font-face {
			font-family: 'Outfit';
			font-style: normal;
			font-weight: 600;
			font-display: swap;
			src: url(https://fonts.gstatic.com/s/outfit/v11/QGYyz_MVcBeNP4NjuGObqx1XmO1I4e6yO4a0Fg.ttf) format('truetype');
		}

		@font-face {
			font-family: 'Outfit';
			font-style: normal;
			font-weight: 700;
			font-display: swap;
			src: url(https://fonts.gstatic.com/s/outfit/v11/QGYyz_MVcBeNP4NjuGObqx1XmO1I4deyO4a0Fg.ttf) format('truetype');
		}

		@font-face {
			font-family: 'Outfit';
			font-style: normal;
			font-weight: 800;
			font-display: swap;
			src: url(https://fonts.gstatic.com/s/outfit/v11/QGYyz_MVcBeNP4NjuGObqx1XmO1I4bCyO4a0Fg.ttf) format('truetype');
		}
	</style>
	<link rel="stylesheet" id="siteground-optimizer-combined-css-017cad9ff3d25989bcde8de1487df773"
		href="../wp-content/uploads/siteground-optimizer-assets/siteground-optimizer-combined-css-017cad9ff3d25989bcde8de1487df773.css"
		media="all" />
	<link rel="preload"
		href="../wp-content/uploads/siteground-optimizer-assets/siteground-optimizer-combined-css-017cad9ff3d25989bcde8de1487df773.css"
		as="style">
	<meta name='robots' content='max-image-preview:large, noindex, follow' />
	<style>
		img:is([sizes="auto" i], [sizes^="auto," i]) {
			contain-intrinsic-size: 3000px 1500px
		}
	</style>
	<noscript>
		<style>
			#preloader {
				display: none;
			}
		</style>
	</noscript>
	<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
	<link rel="alternate" type="application/rss+xml" title="Quiklearn &raquo; Feed" href="../feed/index.html" />
	<link rel="alternate" type="application/rss+xml" title="Quiklearn &raquo; Comments Feed"
		href="../comments/feed/index.html" />


	<style id='wp-block-library-theme-inline-css'>
		.wp-block-audio :where(figcaption) {
			color: #555;
			font-size: 13px;
			text-align: center
		}

		.is-dark-theme .wp-block-audio :where(figcaption) {
			color: #ffffffa6
		}

		.wp-block-audio {
			margin: 0 0 1em
		}

		.wp-block-code {
			border: 1px solid #ccc;
			border-radius: 4px;
			font-family: Menlo, Consolas, monaco, monospace;
			padding: .8em 1em
		}

		.wp-block-embed :where(figcaption) {
			color: #555;
			font-size: 13px;
			text-align: center
		}

		.is-dark-theme .wp-block-embed :where(figcaption) {
			color: #ffffffa6
		}

		.wp-block-embed {
			margin: 0 0 1em
		}

		.blocks-gallery-caption {
			color: #555;
			font-size: 13px;
			text-align: center
		}

		.is-dark-theme .blocks-gallery-caption {
			color: #ffffffa6
		}

		:root :where(.wp-block-image figcaption) {
			color: #555;
			font-size: 13px;
			text-align: center
		}

		.is-dark-theme :root :where(.wp-block-image figcaption) {
			color: #ffffffa6
		}

		.wp-block-image {
			margin: 0 0 1em
		}

		.wp-block-pullquote {
			border-bottom: 4px solid;
			border-top: 4px solid;
			color: currentColor;
			margin-bottom: 1.75em
		}

		.wp-block-pullquote cite,
		.wp-block-pullquote footer,
		.wp-block-pullquote__citation {
			color: currentColor;
			font-size: .8125em;
			font-style: normal;
			text-transform: uppercase
		}

		.wp-block-quote {
			border-left: .25em solid;
			margin: 0 0 1.75em;
			padding-left: 1em
		}

		.wp-block-quote cite,
		.wp-block-quote footer {
			color: currentColor;
			font-size: .8125em;
			font-style: normal;
			position: relative
		}

		.wp-block-quote:where(.has-text-align-right) {
			border-left: none;
			border-right: .25em solid;
			padding-left: 0;
			padding-right: 1em
		}

		.wp-block-quote:where(.has-text-align-center) {
			border: none;
			padding-left: 0
		}

		.wp-block-quote.is-large,
		.wp-block-quote.is-style-large,
		.wp-block-quote:where(.is-style-plain) {
			border: none
		}

		.wp-block-search .wp-block-search__label {
			font-weight: 700
		}

		.wp-block-search__button {
			border: 1px solid #ccc;
			padding: .375em .625em
		}

		:where(.wp-block-group.has-background) {
			padding: 1.25em 2.375em
		}

		.wp-block-separator.has-css-opacity {
			opacity: .4
		}

		.wp-block-separator {
			border: none;
			border-bottom: 2px solid;
			margin-left: auto;
			margin-right: auto
		}

		.wp-block-separator.has-alpha-channel-opacity {
			opacity: 1
		}

		.wp-block-separator:not(.is-style-wide):not(.is-style-dots) {
			width: 100px
		}

		.wp-block-separator.has-background:not(.is-style-dots) {
			border-bottom: none;
			height: 1px
		}

		.wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots) {
			height: 2px
		}

		.wp-block-table {
			margin: 0 0 1em
		}

		.wp-block-table td,
		.wp-block-table th {
			word-break: normal
		}

		.wp-block-table :where(figcaption) {
			color: #555;
			font-size: 13px;
			text-align: center
		}

		.is-dark-theme .wp-block-table :where(figcaption) {
			color: #ffffffa6
		}

		.wp-block-video :where(figcaption) {
			color: #555;
			font-size: 13px;
			text-align: center
		}

		.is-dark-theme .wp-block-video :where(figcaption) {
			color: #ffffffa6
		}

		.wp-block-video {
			margin: 0 0 1em
		}

		:root :where(.wp-block-template-part.has-background) {
			margin-bottom: 0;
			margin-top: 0;
			padding: 1.25em 2.375em
		}
	</style>
	<style id='classic-theme-styles-inline-css'>
		/*! This file is auto-generated */
		.wp-block-button__link {
			color: #fff;
			background-color: #32373c;
			border-radius: 9999px;
			box-shadow: none;
			text-decoration: none;
			padding: calc(.667em + 2px) calc(1.333em + 2px);
			font-size: 1.125em
		}

		.wp-block-file__button {
			background: #32373c;
			color: #fff;
			text-decoration: none
		}
	</style>
	<style id='global-styles-inline-css'>
		:root {
			--wp--preset--aspect-ratio--square: 1;
			--wp--preset--aspect-ratio--4-3: 4/3;
			--wp--preset--aspect-ratio--3-4: 3/4;
			--wp--preset--aspect-ratio--3-2: 3/2;
			--wp--preset--aspect-ratio--2-3: 2/3;
			--wp--preset--aspect-ratio--16-9: 16/9;
			--wp--preset--aspect-ratio--9-16: 9/16;
			--wp--preset--color--black: #000000;
			--wp--preset--color--cyan-bluish-gray: #abb8c3;
			--wp--preset--color--white: #ffffff;
			--wp--preset--color--pale-pink: #f78da7;
			--wp--preset--color--vivid-red: #cf2e2e;
			--wp--preset--color--luminous-vivid-orange: #ff6900;
			--wp--preset--color--luminous-vivid-amber: #fcb900;
			--wp--preset--color--light-green-cyan: #7bdcb5;
			--wp--preset--color--vivid-green-cyan: #00d084;
			--wp--preset--color--pale-cyan-blue: #8ed1fc;
			--wp--preset--color--vivid-cyan-blue: #0693e3;
			--wp--preset--color--vivid-purple: #9b51e0;
			--wp--preset--color--quiklearn-primary: #543ee8;
			--wp--preset--color--quiklearn-secondary: #241442;
			--wp--preset--color--quiklearn-button-dark-gray: #9d9cae;
			--wp--preset--color--quiklearn-button-light-gray: #f8f8f8;
			--wp--preset--color--quiklearn-button-white: #ffffff;
			--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
			--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
			--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
			--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
			--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
			--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
			--wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
			--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
			--wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
			--wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
			--wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
			--wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
			--wp--preset--gradient--quiklearn-gradient-color: linear-gradient(135deg, rgba(255, 0, 0, 1) 0%, rgba(252, 75, 51, 1) 100%);
			--wp--preset--font-size--small: 12px;
			--wp--preset--font-size--medium: 20px;
			--wp--preset--font-size--large: 36px;
			--wp--preset--font-size--x-large: 42px;
			--wp--preset--font-size--normal: 16px;
			--wp--preset--font-size--huge: 44px;
			--wp--preset--font-family--inter: "Inter", sans-serif;
			--wp--preset--font-family--cardo: Cardo;
			--wp--preset--spacing--20: 0.44rem;
			--wp--preset--spacing--30: 0.67rem;
			--wp--preset--spacing--40: 1rem;
			--wp--preset--spacing--50: 1.5rem;
			--wp--preset--spacing--60: 2.25rem;
			--wp--preset--spacing--70: 3.38rem;
			--wp--preset--spacing--80: 5.06rem;
			--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
			--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
			--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
			--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
			--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
		}

		:where(.is-layout-flex) {
			gap: 0.5em;
		}

		:where(.is-layout-grid) {
			gap: 0.5em;
		}

		body .is-layout-flex {
			display: flex;
		}

		.is-layout-flex {
			flex-wrap: wrap;
			align-items: center;
		}

		.is-layout-flex> :is(*, div) {
			margin: 0;
		}

		body .is-layout-grid {
			display: grid;
		}

		.is-layout-grid> :is(*, div) {
			margin: 0;
		}

		:where(.wp-block-columns.is-layout-flex) {
			gap: 2em;
		}

		:where(.wp-block-columns.is-layout-grid) {
			gap: 2em;
		}

		:where(.wp-block-post-template.is-layout-flex) {
			gap: 1.25em;
		}

		:where(.wp-block-post-template.is-layout-grid) {
			gap: 1.25em;
		}

		.has-black-color {
			color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-color {
			color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-color {
			color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-color {
			color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-color {
			color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-color {
			color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-color {
			color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-color {
			color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-color {
			color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-color {
			color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-color {
			color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-color {
			color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-background-color {
			background-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-background-color {
			background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-background-color {
			background-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-background-color {
			background-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-background-color {
			background-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-background-color {
			background-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-background-color {
			background-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-background-color {
			background-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-background-color {
			background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-background-color {
			background-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-border-color {
			border-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-border-color {
			border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-border-color {
			border-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-border-color {
			border-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-border-color {
			border-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-border-color {
			border-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-border-color {
			border-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-border-color {
			border-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-border-color {
			border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-border-color {
			border-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-vivid-cyan-blue-to-vivid-purple-gradient-background {
			background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
		}

		.has-light-green-cyan-to-vivid-green-cyan-gradient-background {
			background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
		}

		.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-orange-to-vivid-red-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
		}

		.has-very-light-gray-to-cyan-bluish-gray-gradient-background {
			background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
		}

		.has-cool-to-warm-spectrum-gradient-background {
			background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
		}

		.has-blush-light-purple-gradient-background {
			background: var(--wp--preset--gradient--blush-light-purple) !important;
		}

		.has-blush-bordeaux-gradient-background {
			background: var(--wp--preset--gradient--blush-bordeaux) !important;
		}

		.has-luminous-dusk-gradient-background {
			background: var(--wp--preset--gradient--luminous-dusk) !important;
		}

		.has-pale-ocean-gradient-background {
			background: var(--wp--preset--gradient--pale-ocean) !important;
		}

		.has-electric-grass-gradient-background {
			background: var(--wp--preset--gradient--electric-grass) !important;
		}

		.has-midnight-gradient-background {
			background: var(--wp--preset--gradient--midnight) !important;
		}

		.has-small-font-size {
			font-size: var(--wp--preset--font-size--small) !important;
		}

		.has-medium-font-size {
			font-size: var(--wp--preset--font-size--medium) !important;
		}

		.has-large-font-size {
			font-size: var(--wp--preset--font-size--large) !important;
		}

		.has-x-large-font-size {
			font-size: var(--wp--preset--font-size--x-large) !important;
		}

		:where(.wp-block-post-template.is-layout-flex) {
			gap: 1.25em;
		}

		:where(.wp-block-post-template.is-layout-grid) {
			gap: 1.25em;
		}

		:where(.wp-block-columns.is-layout-flex) {
			gap: 2em;
		}

		:where(.wp-block-columns.is-layout-grid) {
			gap: 2em;
		}

		:root :where(.wp-block-pullquote) {
			font-size: 1.5em;
			line-height: 1.6;
		}
	</style>


	<link rel='stylesheet' id='woocommerce-smallscreen-css'
		href='../wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.min.css'
		media='only screen and (max-width: 768px)' />

	<style id='woocommerce-inline-inline-css'>
		.woocommerce form .form-row .required {
			visibility: visible;
		}
	</style>









	<style id='rtsb-frontend-inline-css'>
		.rtsb-shopbuilder-plugin #toast-container .toast-success {
			color: #004BFF
		}

		.rtsb-shopbuilder-plugin #toast-container .toast-success:before {
			background-color: #004BFF
		}

		.rtsb-shopbuilder-plugin #toast-container .toast-success {
			background-color: #F5F8FF
		}

		.rtsb-shopbuilder-plugin #toast-container .toast-success a {
			color: #0039C0
		}
	</style>










	<style id='quiklearn-style-inline-css'>
		.entry-banner {}

		.content-area {
			padding-top: 100px;
			padding-bottom: 100px;
		}

		#page .content-area {
			background-image: url();
		}
	</style>


	<style id='quiklearn-dynamic-inline-css'>
		:root {
			--quiklearn-primary-color-rgb: 0, 0, 0;
			--quiklearn-secondary-color-rgb: 0, 0, 0;
		}

		@media (min-width:1400px) {
			.container {
				max-width: 1414px !important;
			}
		}

		#preloader {
			background-color: #ffffff;
		}

		body {
			font-family: 'Outfit', sans-serif !important;
			font-size: 16px;
			line-height: 28px;
			font-weight: 400;
			font-style: normal;
		}

		h1,
		h2,
		h3,
		h4,
		h5,
		h6 {
			font-family: 'Outfit', sans-serif;
			font-weight: 600;
		}

		h1 {
			font-size: 44px;
			line-height: 54px;
			font-style: normal;
		}

		h2 {
			font-size: 36px;
			line-height: 42px;
			font-style: normal;
		}

		h3 {
			font-size: 28px;
			line-height: 36px;
			font-style: normal;
		}

		h4 {
			font-size: 22px;
			line-height: 28px;
			font-style: normal;
		}

		h5 {
			font-size: 18px;
			line-height: 24px;
			font-style: normal;
		}

		h6 {
			font-size: 14px;
			line-height: 18px;
			font-style: normal;
		}

		.site-header .main-navigation nav ul li a,
		.additional-menu-area .sidenav ul li a,
		.rt-slide-nav .offscreen-navigation ul li>a {
			font-family: 'Outfit', sans-serif;
			font-size: 16px;
			line-height: 22px;
			font-weight: 500;
			font-style: normal;
		}

		.site-header .main-navigation ul li ul li a,
		.additional-menu-area .sidenav ul li ul li a {
			font-family: 'Outfit', sans-serif;
			font-size: 15px;
			line-height: 22px;
			font-weight: 400;
			font-style: normal;
		}

		.rt-slide-nav .offscreen-navigation ul .sub-menu li>a {
			font-family: 'Outfit', sans-serif;
			font-size: 15px;
			line-height: 22px;
			font-weight: 400;
			font-style: normal;
		}

		.entry-banner.opacity-on:after {
			background-color: rgba(0, 0, 0, 0);
		}

		.entry-banner .entry-banner-content {
			padding-top: 100px;
			padding-bottom: 100px;
		}
	</style>
	<script type="text/template" id="tmpl-variation-template">
	<div class="woocommerce-variation-description">{{{ data.variation.variation_description }}}</div>
	<div class="woocommerce-variation-price">{{{ data.variation.price_html }}}</div>
	<div class="woocommerce-variation-availability">{{{ data.variation.availability_html }}}</div>
</script>
	<script type="text/template" id="tmpl-unavailable-variation-template">
	<p role="alert">Sorry, this product is unavailable. Please choose a different combination.</p>
</script>
	<script type="text/javascript" src="../wp-includes/js/jquery/jquery.min.js" id="jquery-core-js"></script>

	<script type="text/javascript" id="wc-add-to-cart-js-extra">
		/* <![CDATA[ */
		var wc_add_to_cart_params = { "ajax_url": "\/demo\/wordpress\/themes\/quiklearn\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/demo\/wordpress\/themes\/quiklearn\/?wc-ajax=%%endpoint%%", "i18n_view_cart": "View cart", "cart_url": "https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn\/cart\/", "is_cart": "", "cart_redirect_after_add": "no" };
		/* ]]> */
	</script>




	<script type="text/javascript" id="woocommerce-js-extra">
		/* <![CDATA[ */
		var woocommerce_params = { "ajax_url": "\/demo\/wordpress\/themes\/quiklearn\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/demo\/wordpress\/themes\/quiklearn\/?wc-ajax=%%endpoint%%" };
		/* ]]> */
	</script>



	<script type="text/javascript" id="wp-util-js-extra">
		/* <![CDATA[ */
		var _wpUtilSettings = { "ajax": { "url": "\/demo\/wordpress\/themes\/quiklearn\/wp-admin\/admin-ajax.php" } };
		/* ]]> */
	</script>

	<script type="text/javascript" id="wc-add-to-cart-variation-js-extra">
		/* <![CDATA[ */
		var wc_add_to_cart_variation_params = { "wc_ajax_url": "\/demo\/wordpress\/themes\/quiklearn\/?wc-ajax=%%endpoint%%", "i18n_no_matching_variations_text": "Sorry, no products matched your selection. Please choose a different combination.", "i18n_make_a_selection_text": "Please select some product options before adding this product to your cart.", "i18n_unavailable_text": "Sorry, this product is unavailable. Please choose a different combination." };
		/* ]]> */
	</script>




	<script type="text/javascript" id="wc-single-product-js-extra">
		/* <![CDATA[ */
		var wc_single_product_params = { "i18n_required_rating_text": "Please select a rating", "review_rating_required": "yes", "flexslider": { "rtl": false, "animation": "slide", "smoothHeight": true, "directionNav": false, "controlNav": "thumbnails", "slideshow": false, "animationSpeed": 500, "animationLoop": false, "allowOneSlide": false }, "zoom_enabled": "1", "zoom_options": [], "photoswipe_enabled": "1", "photoswipe_options": { "shareEl": false, "closeOnScroll": false, "history": false, "hideAnimationDuration": 0, "showAnimationDuration": 0 }, "flexslider_enabled": "1" };
		/* ]]> */
	</script>


	<link rel="https://api.w.org/" href="../wp-json/index.html" />
	<link rel="alternate" title="JSON" type="application/json" href="../wp-json/wp/v2/pages/3329.json" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.php?rsd" />
	<meta name="generator" content="WordPress 6.7.1" />
	<meta name="generator" content="WooCommerce 9.4.3" />
	<link rel="canonical" href="index.html" />
	<link rel='shortlink' href='../index7f87.html?p=3329' />
	<link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
		href="../wp-json/oembed/1.0/embed1ecc.json?url=https%3A%2F%2Fwww.radiustheme.com%2Fdemo%2Fwordpress%2Fthemes%2Fquiklearn%2Fmy-account%2F" />
	<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
		href="../wp-json/oembed/1.0/embed9d8a?url=https%3A%2F%2Fwww.radiustheme.com%2Fdemo%2Fwordpress%2Fthemes%2Fquiklearn%2Fmy-account%2F&amp;format=xml" />
	<noscript>
		<style>
			.woocommerce-product-gallery {
				opacity: 1 !important;
			}
		</style>
	</noscript>
	<meta name="generator"
		content="Elementor 3.26.3; features: additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
	<style>
		.e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
		.e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
			background-image: none !important;
		}

		@media screen and (max-height: 1024px) {

			.e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
			.e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
				background-image: none !important;
			}
		}

		@media screen and (max-height: 640px) {

			.e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
			.e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
				background-image: none !important;
			}
		}
	</style>
	<style class='wp-fonts-local'>
		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 300 900;
			font-display: fallback;
			src: url('../wp-content/plugins/woocommerce/assets/fonts/Inter-VariableFont_slnt%2cwght.woff2') format('woff2');
			font-stretch: normal;
		}

		@font-face {
			font-family: Cardo;
			font-style: normal;
			font-weight: 400;
			font-display: fallback;
			src: url('../wp-content/plugins/woocommerce/assets/fonts/cardo_normal_400.woff2') format('woff2');
		}
	</style>
	<link rel="icon" href="../wp-content/uploads/2023/08/favicon.png" sizes="32x32" />
	<link rel="icon" href="../wp-content/uploads/2023/08/favicon.png" sizes="192x192" />
	<link rel="apple-touch-icon" href="../wp-content/uploads/2023/08/favicon.png" />
	<meta name="msapplication-TileImage"
		content="https://www.radiustheme.com/demo/wordpress/themes/quiklearn/wp-content/uploads/2023/08/favicon.png" />
</head>

<body
	class="page-template-default page page-id-3329 wp-embed-responsive theme-quiklearn woocommerce-account woocommerce-page woocommerce-no-js rtsb-shopbuilder-plugin rtsb_theme_quiklearn woocommerce sticky-header header-style-3 footer-style-1 rt-course-grid-view no-sidebar right-sidebar product-grid-view elementor-default elementor-kit-3324">
	<div id="preloader" style="background-image:url(../wp-content/uploads/2023/08/quicklearn_preloader.gif);"></div>
	<div class="quiklearn-progress-container">
		<div class="quiklearn-progress-bar" id="quiklearnBar"></div>
	</div>


	<div id="page" class="site page">
		<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
		<header id="masthead" class="site-header">
			<div id="header-3" class="header-area">
				<div id="sticky-placeholder"></div>
				<div class="header-menu header-top" id="header-middlebar">
					<div class="container">
						<div class="menu-full-wrap">
							<div class="site-branding">
								<a class="dark-logo" aria-label="Dark Logo" href="../index.html"><img width="191"
										height="52" src="../wp-content/uploads/2023/08/logo-dark.svg"
										class="attachment-full size-full" alt="" /></a>
								<a class="light-logo" aria-label="Light Logo" href="../index.html"><img width="172"
										height="46" src="../wp-content/uploads/2023/08/logo-light.svg"
										class="attachment-full size-full" alt="" /></a>
							</div>

							<div class="rt-course-search flex-grow-1">
								<form class="form-inline" role="search" method="get"
									action="https://www.radiustheme.com/demo/wordpress/themes/quiklearn/courses/">
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-addon rt-dropdown">
												<button class="rt-btn cat-toggle" type="button"
													id="dropdownCourseButton1" data-bs-toggle="dropdown"
													aria-expanded="false">
													<span class="rt-cat">All Categories</span>
													<i class="down-arrow icon-quiklearn-angle-down"></i>
												</button>
												<ul class="dropdown-menu rt-drop-menu"
													aria-labelledby="dropdownCourseButton1">
													<li><a href="#" data-cat="0">All</a></li>
													<li><a href="#" data-cat="art-design">Art &amp; Design</a></li>
													<li><a href="#" data-cat="business">Business</a></li>
													<li><a href="#" data-cat="data-science">Data Science</a></li>
													<li><a href="#" data-cat="development">Development</a></li>
													<li><a href="#" data-cat="finance">Finance</a></li>
													<li><a href="#" data-cat="health-fitness">Health &amp; Fitness</a>
													</li>
													<li><a href="#" data-cat="technology">Technology</a></li>
												</ul>
											</div>
											<div class="input-group-addon rt-input-wrap flex-grow-1">
												<input type="hidden" name="course_category" value="">
												<input type="hidden" name="ref" value="course">
												<input type="text" value="" class="form-control rt-search-text"
													placeholder="Find Your Courses . . ." name="c_search">
											</div>
											<div class="input-group-addon input-group-append"><button type="submit"
													class="search-btn"><i
														class="icon-quiklearn-search"></i>Search</button></div>
										</div>
									</div>
								</form>
							</div>
							<div class="header-icon-area">
								<div class="header-info header-phone">
									<div class="info-icon phone-icon">
										<i class="icon-quiklearn-phone"></i>
									</div>
									<div class="info-text phone-no">
										<span>Emergency Help!</span><a href="tel:+1212-226-3126">+1212-226-3126</a>
									</div>
								</div>


								<div class="header-login-wrap">
									<div class="header-login">
										<a target="_self" href="login.php">Login</a>
										<a class="active" target="_self" href="Register.php">Sign Up</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="header-menu header-bottom" id="header-menu">
					<div class="container">
						<div class="menu-full-wrap header-dark">
							<div class="menu-wrap">
								<div id="site-navigation" class="main-navigation">
									<nav class="menu-main-menu-container">
										<ul id="menu-main-menu" class="menu">
											<li id="menu-item-3395"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-has-children menu-item-3395">
												<a href="../index.php">Home</a>

											</li>
											<li id="menu-item-3402"
												class="mega-menu menu-two-column menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3402">
												<a href="../pages/grid_cours.php">Courses</a>

											</li>
											<li id="menu-item-3397"
												class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3397">
												<a href="#">Events</a>
												<ul class="sub-menu">
													<li id="menu-item-3398"
														class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3398">
														<a href="../events/index.html">All Events</a>
													</li>
													<li id="menu-item-3753"
														class="menu-item menu-item-type-post_type menu-item-object-etn menu-item-3753">
														<a
															href="../events/event-your-career-next-leveley-future-approch/index.html">Events
															details</a>
													</li>
													<li id="menu-item-3400"
														class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3400">
														<a href="../etn-speaker/index.html">All Speaker</a>
													</li>
													<li id="menu-item-3401"
														class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3401">
														<a href="../etn-speaker/jerome-bell/index.html">Speaker
															Details</a>
													</li>
												</ul>
											</li>
											<li id="menu-item-3396"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3396">
												<a href="../shop/index.html">Shop</a>
												<ul class="sub-menu">
													<li id="menu-item-3394"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3394">
														<a href="../shop/index.html">Shop</a>
													</li>
													<li id="menu-item-3683"
														class="menu-item menu-item-type-post_type menu-item-object-product menu-item-3683">
														<a href="../product/wordpress-new-solution-2022/index.html">Shop
															Details</a>
													</li>
													<li id="menu-item-3393"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3393">
														<a href="../cart/index.html">Cart</a>
													</li>
													<li id="menu-item-3392"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3392">
														<a href="../checkout/index.html">Checkout</a>
													</li>
												</ul>
											</li>
											<li id="menu-item-3150"
												class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3150">
												<a href="#">Pages</a>
												<ul class="sub-menu">
													<li id="menu-item-3769"
														class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3769">
														<a href="#">Elements</a>
														<ul class="sub-menu">
															<li id="menu-item-3768"
																class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3768">
																<a href="#">Miscellaneous</a>
																<ul class="sub-menu">
																	<li id="menu-item-3802"
																		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3802">
																		<a href="../button/index.html">Button</a>
																	</li>
																	<li id="menu-item-3863"
																		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3863">
																		<a href="../contact-info/index.html">Contact
																			Info</a>
																	</li>
																	<li id="menu-item-3805"
																		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3805">
																		<a href="../section-title/index.html">Section
																			Title</a>
																	</li>
																	<li id="menu-item-3804"
																		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3804">
																		<a href="../title-with-text/index.html">Title
																			With Text</a>
																	</li>
																	<li id="menu-item-3803"
																		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3803">
																		<a href="../hero-banner/index.html">Hero
																			Banner</a>
																	</li>
																	<li id="menu-item-3912"
																		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3912">
																		<a href="../call-to-action/index.html">Call To
																			Action</a>
																	</li>
																	<li id="menu-item-3862"
																		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3862">
																		<a href="../logo-style/index.html">Logo
																			Style</a>
																	</li>
																	<li id="menu-item-4092"
																		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4092">
																		<a href="../course-search/index.html">Course
																			Search</a>
																	</li>
																</ul>
															</li>
															<li id="menu-item-3911"
																class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3911">
																<a href="#">Info Box</a>
																<ul class="sub-menu">
																	<li id="menu-item-3908"
																		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3908">
																		<a href="../info-box-01/index.html">Info Box
																			01</a>
																	</li>
																	<li id="menu-item-3909"
																		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3909">
																		<a href="../info-box-02/index.html">Info Box
																			02</a>
																	</li>
																	<li id="menu-item-3910"
																		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3910">
																		<a href="../info-box-03/index.html">Info Box
																			03</a>
																	</li>
																	<li id="menu-item-3907"
																		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3907">
																		<a href="../info-box-04/index.html">Info Box
																			04</a>
																	</li>
																	<li id="menu-item-3906"
																		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3906">
																		<a href="../info-box-05/index.html">Info Box
																			05</a>
																	</li>
																</ul>
															</li>
															<li id="menu-item-4093"
																class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4093">
																<a href="#">Testimonial</a>
																<ul class="sub-menu">
																	<li id="menu-item-4091"
																		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4091">
																		<a href="../testimonial-grid/index.html">Testimonial
																			Grid</a>
																	</li>
																	<li id="menu-item-4090"
																		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4090">
																		<a href="../testimonial-slider/index.html">Testimonial
																			Slider</a>
																	</li>
																</ul>
															</li>
															<li id="menu-item-3950"
																class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3950">
																<a href="#">Counter Layout</a>
																<ul class="sub-menu">
																	<li id="menu-item-3954"
																		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3954">
																		<a href="../counter-01/index.html">Counter
																			01</a>
																	</li>
																	<li id="menu-item-3952"
																		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3952">
																		<a href="../counter-02/index.html">Counter
																			02</a>
																	</li>
																	<li id="menu-item-3953"
																		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3953">
																		<a href="../counter-03/index.html">Counter
																			03</a>
																	</li>
																	<li id="menu-item-3951"
																		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3951">
																		<a href="../counter-04/index.html">Counter
																			04</a>
																	</li>
																</ul>
															</li>
															<li id="menu-item-3988"
																class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3988">
																<a href="#">Course Grid</a>
																<ul class="sub-menu">
																	<li id="menu-item-3994"
																		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3994">
																		<a href="../course-grid-01/index.html">Course
																			Grid 01</a>
																	</li>
																	<li id="menu-item-3993"
																		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3993">
																		<a href="../course-grid-02/index.html">Course
																			Grid 02</a>
																	</li>
																	<li id="menu-item-4663"
																		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4663">
																		<a href="../course-grid-03/index.html">Course
																			Grid 03</a>
																	</li>
																	<li id="menu-item-4662"
																		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4662">
																		<a href="../course-grid-04/index.html">Course
																			Grid 04</a>
																	</li>
																</ul>
															</li>
															<li id="menu-item-4664"
																class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4664">
																<a href="#">Course Slider</a>
																<ul class="sub-menu">
																	<li id="menu-item-3992"
																		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3992">
																		<a href="../course-slider-01/index.html">Course
																			Slider 01</a>
																	</li>
																	<li id="menu-item-3991"
																		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3991">
																		<a href="../course-slider-02/index.html">Course
																			Slider 02</a>
																	</li>
																	<li id="menu-item-4659"
																		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4659">
																		<a href="../course-slider-03/index.html">Course
																			Slider 03</a>
																	</li>
																	<li id="menu-item-4658"
																		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4658">
																		<a href="../course-slider-04/index.html">Course
																			Slider 04</a>
																	</li>
																</ul>
															</li>
															<li id="menu-item-4665"
																class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4665">
																<a href="#">Course Isotope</a>
																<ul class="sub-menu">
																	<li id="menu-item-3990"
																		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3990">
																		<a href="../course-isotope-01/index.html">Course
																			Isotope 01</a>
																	</li>
																	<li id="menu-item-3989"
																		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3989">
																		<a href="../course-isotope-02/index.html">Course
																			Isotope 02</a>
																	</li>
																	<li id="menu-item-4661"
																		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4661">
																		<a href="../course-isotope-03/index.html">Course
																			Isotope 03</a>
																	</li>
																	<li id="menu-item-4660"
																		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4660">
																		<a href="../course-isotope-04/index.html">Course
																			Isotope 04</a>
																	</li>
																</ul>
															</li>
															<li id="menu-item-4010"
																class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4010">
																<a href="#">Course Category</a>
																<ul class="sub-menu">
																	<li id="menu-item-4013"
																		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4013">
																		<a href="../course-category-01/index.html">Course
																			Category 01</a>
																	</li>
																	<li id="menu-item-4012"
																		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4012">
																		<a href="../course-category-02/index.html">Course
																			Category 02</a>
																	</li>
																	<li id="menu-item-4011"
																		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4011">
																		<a href="../course-category-03/index.html">Course
																			Category 03</a>
																	</li>
																</ul>
															</li>
															<li id="menu-item-4024"
																class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4024">
																<a href="#">Instructor Layout</a>
																<ul class="sub-menu">
																	<li id="menu-item-4025"
																		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4025">
																		<a href="../instructor-01/index.html">Instructor
																			01</a>
																	</li>
																	<li id="menu-item-4026"
																		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4026">
																		<a href="../instructor-02/index.html">Instructor
																			02</a>
																	</li>
																	<li id="menu-item-4027"
																		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4027">
																		<a href="../instructors/index.html">Instructor
																			03</a>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li id="menu-item-3387"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3387">
														<a href="../about/index.html">About</a>
													</li>
													<li id="menu-item-3403"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3403">
														<a href="../instructors/index.html">Instructors</a>
													</li>
													<li id="menu-item-3405"
														class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3405">
														<a href="../lp-profile/index.html">Instructor Profile</a>
													</li>
													<li id="menu-item-4587"
														class="menu-item menu-item-type-post_type menu-item-object-zoom-meetings menu-item-4587">
														<a href="../zoom-meetings/zoom-meeting/index.html">Zoom
															Meeting</a>
													</li>
													<li id="menu-item-4588"
														class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4588">
														<a
															href="../courses/the-complete-android-java-developer-course/lessons/zoom-live-lesson/index.html">Zoom
															Live Lesson</a>
													</li>
													<li id="menu-item-3386"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3386">
														<a href="../pricing-table/index.html">Pricing Table</a>
													</li>
													<li id="menu-item-3385"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3385">
														<a href="../faq-page/index.html">FAQ Page</a>
													</li>
													<li id="menu-item-3151"
														class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3151">
														<a href="404.html">404 Page</a>
													</li>
												</ul>
											</li>
											<li id="menu-item-3173"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3173">
												<a href="../our-blogs/index.html">Blogs</a>
												<ul class="sub-menu">
													<li id="menu-item-3174"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3174">
														<a href="../blog-grid/index.html">Blog Grid</a>
													</li>
													<li id="menu-item-3175"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3175">
														<a href="../blog-list/index.html">Blog List</a>
													</li>
													<li id="menu-item-3176"
														class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3176">
														<a
															href="../take-your-career-next-leveley-future-approch-10/index.html">Post
															Standard</a>
													</li>
													<li id="menu-item-3177"
														class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3177">
														<a
															href="../take-your-career-next-leveley-future-approch-9/index.html">Post
															Gallery</a>
													</li>
													<li id="menu-item-3723"
														class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3723">
														<a
															href="../take-your-career-next-leveley-future-approch-4/index.html">Post
															Video</a>
													</li>
												</ul>
											</li>
											<li id="menu-item-3384"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3384">
												<a href="../contact/index.html">Contact</a>
											</li>
										</ul>
									</nav>
								</div>
							</div>
							<div class="header-icon-area">


								<div class="item-icon header-wishlist-icon wishlist-icon">
									<a href="wishlist/index.html">
										<i class="icon-quiklearn-heart"></i>
										<span class="wishlist-icon-num rtsb-wishlist-counter item-count">0</span>
									</a>
								</div>

								<div class="header-action-item cart-area mini-cart-items header-shop-cart">
									<div class="item-icon cart-list-trigger">
										<a class="cart-contents cart-trigger-icon" href="../cart/index.html"
											title="View your shopping cart">
											<svg width="20" height="22" viewBox="0 0 20 22" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<path
													d="M5.41056 6V5.28571C5.41056 4.14907 5.89409 3.05898 6.75478 2.25526C7.61546 1.45153 8.7828 1 10 1C11.2172 1 12.3845 1.45153 13.2452 2.25526C14.1059 3.05898 14.5894 4.14907 14.5894 5.28571V6M6.17547 13.8571H13.8245M2.19948 9.41429L1.00928 19.4143C0.985622 19.6139 1.00731 19.816 1.07294 20.0073C1.13857 20.1986 1.24666 20.3748 1.39016 20.5244C1.53366 20.6741 1.70934 20.7938 1.90573 20.8757C2.10212 20.9577 2.31481 21 2.52992 21H17.4701C17.6852 21 17.8979 20.9577 18.0943 20.8757C18.2907 20.7938 18.4663 20.6741 18.6098 20.5244C18.7533 20.3748 18.8614 20.1986 18.9271 20.0073C18.9927 19.816 19.0144 19.6139 18.9907 19.4143L17.8005 9.41429C17.7591 9.06473 17.581 8.74173 17.3005 8.50713C17.0199 8.27254 16.6565 8.14283 16.2799 8.14286H3.72011C3.3435 8.14283 2.98011 8.27254 2.69954 8.50713C2.41896 8.74173 2.24091 9.06473 2.19948 9.41429Z"
													stroke="#4F536C" stroke-width="1.5" />
											</svg>
											<span class="cart-icon-num item-count">0</span>
											<span class="cart-amount"><span
													class="woocommerce-Price-amount amount"><bdi><span
															class="woocommerce-Price-currencySymbol">&#36;</span>0.00</bdi></span></span>
										</a>
										<div class="cart-wrapper">
											<ul class="minicart">
												<li class="cart-item d-flex align-items-center">
													<h5 class="text-center no-cart-items">Your cart is empty</h5>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div id="mobile-sticky-placeholder"></div>
		<div class="rt-header-menu mean-container" id="meanmenu">
			<div class="mobile-top-bar" id="mobile-top-fix">
				<div class="mobile-top">
					<ul class="mobile-address">
						<li><i class="icon-quiklearn-calendar"></i>January 10, 2025</li>
						<li><i class="icon-quiklearn-location"></i>457 Mott Street,NY 10013</li>
						<li><i class="icon-quiklearn-clock"></i><span class="opening-label">Opening:</span> Mon - Sat
							8.00 - 18.00</li>
					</ul>

					<div class="header-icon-area">
						<div class="header-login">
							<a target="_self" href="login.php">Login</a>
							<a target="_self" href="Register.php">Sign Up</a>
						</div>
					</div>

				</div>
			</div>
			<div class="mobile-mene-bar">
				<div class="mean-bar">
					<a class="mobile-logo dark-logo" aria-label="Mobile Logo" href="../index.html"><img width="191"
							height="52" src="../wp-content/uploads/2023/08/logo-dark.svg"
							class="attachment-full size-full" alt="" /></a>
					<div class="mean-bar-search">
						<span class="sidebarBtn ">
							<span class="bar"></span>
							<span class="bar"></span>
							<span class="bar"></span>
						</span>
						<div class="item-icon search-icon">
							<a href="#header-search" title="Search"><i class="icon-quiklearn-search"></i></a>
						</div>

					</div>
				</div>
				<div class="rt-slide-nav">
					<div class="offscreen-navigation">
						<nav class="menu-main-menu-container">
							<ul id="menu-main-menu-1" class="menu">
								<li
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-has-children menu-item-3395">
									<a href="../index.html">Home</a>
									<ul class="sub-menu">
										<li
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-3391">
											<a href="../index.html">Home 01</a>
										</li>
										<li
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3390">
											<a href="../home-02/index.html">Home 02</a>
										</li>
										<li
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3389">
											<a href="../home-03/index.html">Home 03</a>
										</li>
										<li
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3388">
											<a href="../home-04/index.html">Home 04</a>
										</li>
									</ul>
								</li>
								<li
									class="mega-menu menu-two-column menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3402">
									<a href="../courses/index.html">Courses</a>
									<ul class="sub-menu">
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4585">
											<a href="#">Course Layout</a>
											<ul class="sub-menu">
												<li
													class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3404">
													<a href="../courses/index.html">Course Default</a>
												</li>
												<li
													class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4589">
													<a href="../courses/index8738.html?course_style=2">Course Style
														02</a>
												</li>
												<li
													class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4590">
													<a
														href="../courses/indexe391.html?course_style=3&amp;lesson=0&amp;duration=1">Course
														Style 03</a>
												</li>
												<li
													class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4591">
													<a
														href="../courses/indexf67a.html?course_style=4&amp;lesson=0&amp;student=0&amp;duration=1&amp;level=1">Course
														Style 04</a>
												</li>
												<li
													class="menu-item menu-item-type-post_type menu-item-object-lp_course menu-item-3406">
													<a
														href="../courses/the-complete-android-java-developer-course/index.html">Course
														Details 01</a>
												</li>
												<li
													class="menu-item menu-item-type-post_type menu-item-object-lp_course menu-item-3407">
													<a
														href="../courses/the-complete-wordpress-plugin-development-course/index.html">Course
														Details 02</a>
												</li>
												<li
													class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4725">
													<a
														href="../courses/the-complete-android-java-developer-course/lessons/lesson-with-youtube-video/index.html">Lesson
														With Video</a>
												</li>
											</ul>
										</li>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4586">
											<a href="#">Course Category</a>
											<ul class="sub-menu">
												<li
													class="menu-item menu-item-type-taxonomy menu-item-object-course_category menu-item-4679">
													<a href="../course-category/business/index.html">Business</a>
												</li>
												<li
													class="menu-item menu-item-type-taxonomy menu-item-object-course_category menu-item-4680">
													<a href="../course-category/technology/index.html">Technology</a>
												</li>
												<li
													class="menu-item menu-item-type-taxonomy menu-item-object-course_category menu-item-4681">
													<a href="../course-category/development/index.html">Development</a>
												</li>
												<li
													class="menu-item menu-item-type-taxonomy menu-item-object-course_category menu-item-4682">
													<a href="../course-category/finance/index.html">Finance</a>
												</li>
												<li
													class="menu-item menu-item-type-taxonomy menu-item-object-course_category menu-item-4683">
													<a href="../course-category/health-fitness/index.html">Health &amp;
														Fitness</a>
												</li>
												<li
													class="menu-item menu-item-type-taxonomy menu-item-object-course_category menu-item-4684">
													<a href="../course-category/data-science/index.html">Data
														Science</a>
												</li>
												<li
													class="menu-item menu-item-type-taxonomy menu-item-object-course_category menu-item-4724">
													<a href="../course-category/art-design/index.html">Art &amp;
														Design</a>
												</li>
											</ul>
										</li>
									</ul>
								</li>
								<li
									class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3397">
									<a href="#">Events</a>
									<ul class="sub-menu">
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3398">
											<a href="../events/index.html">All Events</a>
										</li>
										<li
											class="menu-item menu-item-type-post_type menu-item-object-etn menu-item-3753">
											<a
												href="../events/event-your-career-next-leveley-future-approch/index.html">Events
												details</a>
										</li>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3400">
											<a href="../etn-speaker/index.html">All Speaker</a>
										</li>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3401">
											<a href="../etn-speaker/jerome-bell/index.html">Speaker Details</a>
										</li>
									</ul>
								</li>
								<li
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3396">
									<a href="../shop/index.html">Shop</a>
									<ul class="sub-menu">
										<li
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3394">
											<a href="../shop/index.html">Shop</a>
										</li>
										<li
											class="menu-item menu-item-type-post_type menu-item-object-product menu-item-3683">
											<a href="../product/wordpress-new-solution-2022/index.html">Shop Details</a>
										</li>
										<li
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3393">
											<a href="../cart/index.html">Cart</a>
										</li>
										<li
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3392">
											<a href="../checkout/index.html">Checkout</a>
										</li>
									</ul>
								</li>
								<li
									class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3150">
									<a href="#">Pages</a>
									<ul class="sub-menu">
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3769">
											<a href="#">Elements</a>
											<ul class="sub-menu">
												<li
													class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3768">
													<a href="#">Miscellaneous</a>
													<ul class="sub-menu">
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3802">
															<a href="../button/index.html">Button</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3863">
															<a href="../contact-info/index.html">Contact Info</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3805">
															<a href="../section-title/index.html">Section Title</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3804">
															<a href="../title-with-text/index.html">Title With Text</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3803">
															<a href="../hero-banner/index.html">Hero Banner</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3912">
															<a href="../call-to-action/index.html">Call To Action</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3862">
															<a href="../logo-style/index.html">Logo Style</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4092">
															<a href="../course-search/index.html">Course Search</a>
														</li>
													</ul>
												</li>
												<li
													class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3911">
													<a href="#">Info Box</a>
													<ul class="sub-menu">
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3908">
															<a href="../info-box-01/index.html">Info Box 01</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3909">
															<a href="../info-box-02/index.html">Info Box 02</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3910">
															<a href="../info-box-03/index.html">Info Box 03</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3907">
															<a href="../info-box-04/index.html">Info Box 04</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3906">
															<a href="../info-box-05/index.html">Info Box 05</a>
														</li>
													</ul>
												</li>
												<li
													class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4093">
													<a href="#">Testimonial</a>
													<ul class="sub-menu">
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4091">
															<a href="../testimonial-grid/index.html">Testimonial
																Grid</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4090">
															<a href="../testimonial-slider/index.html">Testimonial
																Slider</a>
														</li>
													</ul>
												</li>
												<li
													class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3950">
													<a href="#">Counter Layout</a>
													<ul class="sub-menu">
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3954">
															<a href="../counter-01/index.html">Counter 01</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3952">
															<a href="../counter-02/index.html">Counter 02</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3953">
															<a href="../counter-03/index.html">Counter 03</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3951">
															<a href="../counter-04/index.html">Counter 04</a>
														</li>
													</ul>
												</li>
												<li
													class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3988">
													<a href="#">Course Grid</a>
													<ul class="sub-menu">
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3994">
															<a href="../course-grid-01/index.html">Course Grid 01</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3993">
															<a href="../course-grid-02/index.html">Course Grid 02</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4663">
															<a href="../course-grid-03/index.html">Course Grid 03</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4662">
															<a href="../course-grid-04/index.html">Course Grid 04</a>
														</li>
													</ul>
												</li>
												<li
													class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4664">
													<a href="#">Course Slider</a>
													<ul class="sub-menu">
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3992">
															<a href="../course-slider-01/index.html">Course Slider
																01</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3991">
															<a href="../course-slider-02/index.html">Course Slider
																02</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4659">
															<a href="../course-slider-03/index.html">Course Slider
																03</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4658">
															<a href="../course-slider-04/index.html">Course Slider
																04</a>
														</li>
													</ul>
												</li>
												<li
													class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4665">
													<a href="#">Course Isotope</a>
													<ul class="sub-menu">
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3990">
															<a href="../course-isotope-01/index.html">Course Isotope
																01</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3989">
															<a href="../course-isotope-02/index.html">Course Isotope
																02</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4661">
															<a href="../course-isotope-03/index.html">Course Isotope
																03</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4660">
															<a href="../course-isotope-04/index.html">Course Isotope
																04</a>
														</li>
													</ul>
												</li>
												<li
													class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4010">
													<a href="#">Course Category</a>
													<ul class="sub-menu">
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4013">
															<a href="../course-category-01/index.html">Course Category
																01</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4012">
															<a href="../course-category-02/index.html">Course Category
																02</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4011">
															<a href="../course-category-03/index.html">Course Category
																03</a>
														</li>
													</ul>
												</li>
												<li
													class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4024">
													<a href="#">Instructor Layout</a>
													<ul class="sub-menu">
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4025">
															<a href="../instructor-01/index.html">Instructor 01</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4026">
															<a href="../instructor-02/index.html">Instructor 02</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4027">
															<a href="../instructors/index.html">Instructor 03</a>
														</li>
													</ul>
												</li>
											</ul>
										</li>
										<li
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3387">
											<a href="../about/index.html">About</a>
										</li>
										<li
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3403">
											<a href="../instructors/index.html">Instructors</a>
										</li>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3405">
											<a href="../lp-profile/index.html">Instructor Profile</a>
										</li>
										<li
											class="menu-item menu-item-type-post_type menu-item-object-zoom-meetings menu-item-4587">
											<a href="../zoom-meetings/zoom-meeting/index.html">Zoom Meeting</a>
										</li>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4588">
											<a
												href="../courses/the-complete-android-java-developer-course/lessons/zoom-live-lesson/index.html">Zoom
												Live Lesson</a>
										</li>
										<li
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3386">
											<a href="../pricing-table/index.html">Pricing Table</a>
										</li>
										<li
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3385">
											<a href="../faq-page/index.html">FAQ Page</a>
										</li>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3151">
											<a href="404.html">404 Page</a>
										</li>
									</ul>
								</li>
								<li
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3173">
									<a href="../our-blogs/index.html">Blogs</a>
									<ul class="sub-menu">
										<li
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3174">
											<a href="../blog-grid/index.html">Blog Grid</a>
										</li>
										<li
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3175">
											<a href="../blog-list/index.html">Blog List</a>
										</li>
										<li
											class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3176">
											<a href="../take-your-career-next-leveley-future-approch-10/index.html">Post
												Standard</a>
										</li>
										<li
											class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3177">
											<a href="../take-your-career-next-leveley-future-approch-9/index.html">Post
												Gallery</a>
										</li>
										<li
											class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3723">
											<a href="../take-your-career-next-leveley-future-approch-4/index.html">Post
												Video</a>
										</li>
									</ul>
								</li>
								<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3384"><a
										href="../contact/index.html">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<div id="header-search" class="header-search">
			<div class="header-search-wrap">
				<button type="button" aria-label="close button" class="close"><i class="fa-solid fa-xmark"></i></button>
				<form role="search" method="get" class="header-search-form"
					action="https://www.radiustheme.com/demo/wordpress/themes/quiklearn/">
					<input type="search" value="" name="s" placeholder="Type your search........">
					<button type="submit" aria-label="submit button" class="search-btn"><i
							class="icon-quiklearn-search"></i></button>
				</form>
			</div>
		</div>
		<div id="content" class="site-content normal">

			<div class="entry-banner opacity-off">

				<div class="container">
					<div class="banner-shape wow slideInRight" data-wow-delay="400ms" data-wow-duration="1400ms"
						style="background-image:url(../wp-content/themes/quiklearn/assets/img/banner-shape.png);"></div>
					<div class="entry-banner-content">
						<div class="breadcrumb-area">
							<div class="entry-breadcrumb"><!-- Breadcrumb NavXT 7.3.1 -->
								<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
										title="Go to Quiklearn."
										href="https://www.radiustheme.com/demo/wordpress/themes/quiklearn"
										class="home"><span property="name">Home</span></a>
									<meta property="position" content="1">
								</span><span class="dvdr"></span><span property="itemListElement"
									typeof="ListItem"><span property="name" class="post post-page current-item">My
										account</span>
									<meta property="url"
										content="https://www.radiustheme.com/demo/wordpress/themes/quiklearn/my-account/">
									<meta property="position" content="2">
								</span>
							</div>
						</div>
						<h1 class="entry-title">My account</h1>
					</div>
				</div>
			</div>
			<div id="primary" class="content-area">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-12">
							<main id="main" class="site-main">


								<article id="post-3329" class="post-3329 page type-page status-publish hentry">

									<div class="entry-content">
										<div class="woocommerce">
											<div class="rtsb-notice">
												<div class="woocommerce-notices-wrapper"></div>
											</div>

											<!-- component -->
											<link rel="stylesheet"
												href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
											<script src="https://cdn.tailwindcss.com"></script>
											<?php
											// $Actions = 1; 
// if ($user['role'] ='Enseignan') {
											
											// if ($user['Actions'] == 0) {
//     echo "<div style='padding: 10px; background-color: yellow; color: black; text-align: center; 
//            width: 500px; position: absolute; top: 30%; left: 50%; transform: translate(-50%, -50%); 
//            border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);'>
//            Votre compte en tant qu'enseignant est en attente d'approbation par l'administrateur.
//           </div>";
// } elseif ($user['Actions'] == 1) {
//     echo "<div style='padding: 10px; background-color: #d4edda; color: #155724; text-align: center; 
//            width: 500px; position: absolute; top: 30%; left: 50%; transform: translate(-50%, -50%); 
//            border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);'>
//            Félicitations ! Votre compte en tant qu'enseignant a été approuvé par l'administrateur.
//           </div>";
// }}
											?>


											<!-- ====== Forms Section Start -->
											<div class="font-[sans-serif] bg-white">
												<div class="grid lg:grid-cols-4 md:grid-cols-3 items-center">
													<form method="post"
														class="lg:col-span-3 md:col-span-2 max-w-lg w-full p-6 mx-auto">
														<div class="mb-12">
															<h3 class="text-gray-800 text-4xl font-bold">Sign In</h3>
															<p class="text-gray-600 text-sm mt-6 leading-relaxed">
																Welcome back! Please log in to access your account and
																explore a world of possibilities. Your journey begins
																here.</p>
														</div>

														<div class="relative flex items-center">
															<label
																class="text-gray-800 text-[13px] bg-white absolute px-2 top-[-9px] left-[18px] font-semibold">Email</label>
															<input name="email" type="email" placeholder="Enter email"
																class="px-4 py-3.5 bg-white w-full text-sm border-2 border-gray-200 focus:border-blue-600 rounded-md outline-none" />
															<svg xmlns="http://www.w3.org/2000/svg" fill="#bbb"
																stroke="#bbb" class="w-[18px] h-[18px] absolute right-4"
																viewBox="0 0 682.667 682.667">
																<defs>
																	<clipPath id="a" clipPathUnits="userSpaceOnUse">
																		<path d="M0 512h512V0H0Z"
																			data-original="#000000"></path>
																	</clipPath>
																</defs>
																<g clip-path="url(#a)"
																	transform="matrix(1.33 0 0 -1.33 0 682.667)">
																	<path fill="none" stroke-miterlimit="10"
																		stroke-width="40"
																		d="M452 444H60c-22.091 0-40-17.909-40-40v-39.446l212.127-157.782c14.17-10.54 33.576-10.54 47.746 0L492 364.554V404c0 22.091-17.909 40-40 40Z"
																		data-original="#000000"></path>
																	<path
																		d="M472 274.9V107.999c0-11.027-8.972-20-20-20H60c-11.028 0-20 8.973-20 20V274.9L0 304.652V107.999c0-33.084 26.916-60 60-60h392c33.084 0 60 26.916 60 60v196.653Z"
																		data-original="#000000"></path>
																</g>
															</svg>
														</div>

														<div class="relative flex items-center mt-8">
															<label
																class="text-gray-800 text-[13px] bg-white absolute px-2 top-[-9px] left-[18px] font-semibold">Password</label>
															<input name="password" type="Password"
																placeholder="Enter password"
																class="px-4 py-3.5 bg-white w-full text-sm border-2 border-gray-200 focus:border-blue-600 rounded-md outline-none" />
															<svg xmlns="http://www.w3.org/2000/svg" fill="#bbb"
																stroke="#bbb"
																class="w-[18px] h-[18px] absolute right-4 cursor-pointer"
																viewBox="0 0 128 128">
																<path
																	d="M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z"
																	data-original="#000000"></path>
															</svg>
														</div>

														<div
															class="flex flex-wrap items-center justify-between gap-4 mt-4">
															<div class="flex items-center">
																<input id="remember-me" name="remember-me"
																	type="checkbox"
																	class="h-4 w-4 shrink-0 text-blue-600 focus:ring-blue-500 border-gray-300 rounded-md" />
																<label for="remember-me"
																	class="ml-3 block text-sm text-gray-800">
																	Remember me
																</label>
															</div>
															<div>
																<a href="jajvascript:void(0);"
																	class="text-blue-600 font-semibold text-sm hover:underline">
																	Forgot Password?
																</a>
															</div>
														</div>

														<div class="mt-12">
															<button type="submit"
																class="w-full shadow-xl py-2.5 px-4 text-sm tracking-wider font-semibold rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none">
																Sign in
															</button>
														</div>

														<p class="text-sm text-gray-600 mt-8 text-center">Don't have an
															account <a href="Register.php"
																class="text-blue-600 font-semibold hover:underline ml-1 whitespace-nowrap">Register
																here</a></p>
													</form>

													<div
														class="flex flex-col justify-center space-y-16 md:h-screen max-md:mt-16 min-h-full bg-gradient-to-r from-blue-500 to-blue-700 lg:px-8 px-4 py-4">
														<div>
															<h4 class="text-white text-lg font-semibold">Secure
																Authentication</h4>
															<p class="text-[13px] text-white mt-2">Log in with your
																registered email and password securely.</p>
														</div>
														<div>
															<h4 class="text-white text-lg font-semibold">Remember Me
															</h4>
															<p class="text-[13px] text-white mt-2">Enable the "Remember
																Me" option for a seamless login experience in future
																sessions.</p>
														</div>
														<div>
															<h4 class="text-white text-lg font-semibold">Forgot
																Password?</h4>
															<p class="text-[13px] text-white mt-2">Easily recover your
																account by clicking on the "Forgot Password?" link.</p>
														</div>
													</div>
												</div>
											</div>
											<!-- ====== Forms Section End -->

										</div>
									</div>
								</article>
							</main>
						</div>
					</div>
				</div>
			</div>
		</div><!--#content-->
		<script>
			document.querySelector('.toggle-password').addEventListener('click', function () {
				const passwordField = document.querySelector('input[name="password"]');
				const type = passwordField.type === 'password' ? 'text' : 'password';
				passwordField.type = type;
			});
		</script>

		</script>
		<!-- progress-wrap -->
		<div class="scroll-wrap">
			<svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
				<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
			</svg>
		</div>

		<footer>
			<div id="footer-1" class="footer-area">
				<div class="footer-top-area " style="background:#110e19">
					<div class="footer-content-area">
						<div class="container">
							<div class="row">
								<div class="col-xl-3 col-md-6">
									<div id="media_image-2" class="widget widget_media_image"><img width="172"
											height="46" src="../wp-content/uploads/2023/08/logo-light.svg"
											class="image wp-image-3334  attachment-medium size-medium" alt=""
											style="max-width: 100%; height: auto;" decoding="async" /></div>
									<div id="quiklearn_address-2" class="widget widget_quiklearn_address">
										<p class="rtin-des">When An Unknown Printer Took Galley Of Type And Scrambled It
											To Make Pspecimen Bookt Has.</p>
										<ul class="corporate-address">
											<li><i class="icon-quiklearn-location"></i><span>463 7th Ave, NY 10018,
													USA</span></li>
											<li><i class="icon-quiklearn-phone"></i><span><a
														href="tel:+123-88-9900-456">+123-88-9900-456</a></span></li>
										</ul>

									</div>
								</div>
								<div class="col-xl-3 col-md-6">
									<div id="nav_menu-4" class="widget widget_nav_menu">
										<h3 class="widgettitle ">Resources<span class="titleline"></span></h3>
										<div class="menu-resources-container">
											<ul id="menu-resources" class="menu">
												<li id="menu-item-3418"
													class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3418">
													<a href="../about/index.html">About</a>
												</li>
												<li id="menu-item-3419"
													class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3419">
													<a href="../contact/index.html">Contact</a>
												</li>
												<li id="menu-item-3156"
													class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3156">
													<a href="../refund/index.html">Refund</a>
												</li>
												<li id="menu-item-3157"
													class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3157">
													<a href="../help-center/index.html">Help Center</a>
												</li>
												<li id="menu-item-3420"
													class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3420">
													<a href="../refund_returns/index.html">Returns Policy</a>
												</li>
												<li id="menu-item-3421"
													class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3421">
													<a href="../lp-term-conditions/index.html">Term Conditions</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-md-6">
									<div id="nav_menu-5" class="widget widget_nav_menu">
										<h3 class="widgettitle ">Courses<span class="titleline"></span></h3>
										<div class="menu-courses-container">
											<ul id="menu-courses" class="menu">
												<li id="menu-item-3412"
													class="menu-item menu-item-type-post_type menu-item-object-lp_course menu-item-3412">
													<a
														href="../courses/the-complete-android-java-developer-course/index.html">Life
														Coach</a>
												</li>
												<li id="menu-item-3413"
													class="menu-item menu-item-type-post_type menu-item-object-lp_course menu-item-3413">
													<a
														href="../courses/the-complete-android-development-course/index.html">Business
														Coach</a>
												</li>
												<li id="menu-item-3414"
													class="menu-item menu-item-type-post_type menu-item-object-lp_course menu-item-3414">
													<a
														href="../courses/the-complete-wordpress-plugin-development-course/index.html">Health
														Coach</a>
												</li>
												<li id="menu-item-3415"
													class="menu-item menu-item-type-post_type menu-item-object-lp_course menu-item-3415">
													<a
														href="../courses/the-complete-react-native-course/index.html">Development</a>
												</li>
												<li id="menu-item-3416"
													class="menu-item menu-item-type-post_type menu-item-object-lp_course menu-item-3416">
													<a
														href="../courses/jquery-and-javascript-fundamental-course/index.html">Web
														Design</a>
												</li>
												<li id="menu-item-3417"
													class="menu-item menu-item-type-post_type menu-item-object-lp_course menu-item-3417">
													<a href="../courses/the-complete-ios-development-course/index.html">SEO
														Optimize</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-md-6">
									<div id="custom_html-2" class="widget_text widget widget_custom_html">
										<h3 class="widgettitle ">Join Our Newsletter<span class="titleline"></span></h3>
										<div class="textwidget custom-html-widget">Nown Printer Took Galley Type And
											Scrambled It To Make Following With Us</div>
									</div>
									<div id="fluentform_widget-3" class="widget widget_fluentform_widget">
										<div class='fluentform ff-default fluentform_wrapper_2 ffs_default_wrap'>
											<form data-form_id="2" id="fluentform_2"
												class="frm-fluent-form fluent_form_2 ff-el-form-top ff_form_instance_2_1 ff-form-loading ffs_default"
												data-form_instance="ff_form_instance_2_1" method="POST">
												<fieldset
													style="border: none!important;margin: 0!important;padding: 0!important;background-color: transparent!important;box-shadow: none!important;outline: none!important; min-inline-size: 100%;">
													<legend class="ff_screen_reader_title"
														style="display: block; margin: 0!important;padding: 0!important;height: 0!important;text-indent: -999999px;width: 0!important;overflow:hidden;">
														Subscription Form</legend><input type='hidden'
														name='__fluent_form_embded_post_id' value='3329' /><input
														type="hidden" id="_fluentform_2_fluentformnonce"
														name="_fluentform_2_fluentformnonce" value="9f341108e0" /><input
														type="hidden" name="_wp_http_referer"
														value="/demo/wordpress/themes/quiklearn/my-account/" />
													<div data-name="ff_cn_id_1"
														class='ff-t-container ff-column-container ff_columns_total_2 newsletter-form '>
														<div class='ff-t-cell ff-t-column-1' style='flex-basis: 90%;'>
															<div class='ff-el-group'>
																<div class='ff-el-input--content'><input type="email"
																		name="email" id="ff_2_email"
																		class="ff-el-form-control"
																		placeholder="Your Email Address"
																		data-name="email" aria-invalid="false"
																		aria-required=true></div>
															</div>
														</div>
														<div class='ff-t-cell ff-t-column-2' style='flex-basis: 10%;'>
															<div
																class='ff-el-group ff-text-left ff_submit_btn_wrapper ff_submit_btn_wrapper_custom'>
																<button
																	class="ff-btn ff-btn-submit ff-btn-md ff_btn_no_style"
																	type="submit" name="custom_submit_button-2_1"
																	data-name="custom_submit_button-2_1">Sign
																	Up</button>
															</div>
														</div>
													</div>
													<div class='ff-el-group  ff-custom_html'
														data-name="custom_html-2_2">
														<p>We Only Send Interesting And Relevant Emails.</p>
													</div>
												</fieldset>
											</form>
											<div id='fluentform_2_errors'
												class='ff-errors-in-stack ff_form_instance_2_1 ff-form-loading_errors ff_form_instance_2_1_errors'>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="footer-copyright-area">
						<div class="container">
							<div class="copyright-area copyright-on menu-on">
								<div class="copyright-menu-wrap">
									<div class="copyright">&copy; 2025 quiklearn. All Rights Reserved by <a
											target="_blank" rel="nofollow"
											href="http://radiustheme.com/">RadiusTheme</a></div>
								</div>
								<div class="copyright-menu">
									<div id="nav_menu-2" class="widget widget_nav_menu">
										<div class="menu-copyright-menu-container">
											<ul id="menu-copyright-menu" class="menu">
												<li id="menu-item-3410"
													class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-3410">
													<a rel="privacy-policy" href="../privacy-policy/index.html">Privacy
														Policy</a>
												</li>
												<li id="menu-item-3411"
													class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3411">
													<a href="../lp-term-conditions/index.html">Term Conditions</a>
												</li>
											</ul>
										</div>
									</div>
								</div>

								<ul class="copyright-social">
									<li><a target="_blank" aria-label="Social Link" href="#"><i
												class="fab fa-facebook-f"></i></a></li>
									<li><a target="_blank" aria-label="Social Link" href="#"><i
												class="fab fa-twitter"></i></a></li>
									<li><a target="_blank" aria-label="Social Link" href="#"><i
												class="fab fa-linkedin-in"></i></a></li>
									<li><a target="_blank" aria-label="Social Link" href="#"><i
												class="fab fa-pinterest-p"></i></a></li>
									<li><a target="_blank" aria-label="Social Link" href="#"><i
												class="fab fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			</div>
		</footer>

	</div>
	<div class="modal fade" id="rt-wishlist-modal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<div class="close" data-bs-dismiss="modal" aria-label="Close"><span
							aria-hidden="true">&times;</span></div>
				</div>
				<div class="modal-body text-center">You must be logged in before using WishList. To login click <a
						href="../wp-login.html">here</a></div>
			</div>
		</div>
	</div>


	<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="pswp__bg"></div>
		<div class="pswp__scroll-wrap">
			<div class="pswp__container">
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
			</div>
			<div class="pswp__ui pswp__ui--hidden">
				<div class="pswp__top-bar">
					<div class="pswp__counter"></div>
					<button class="pswp__button pswp__button--close" aria-label="Close (Esc)"></button>
					<button class="pswp__button pswp__button--share" aria-label="Share"></button>
					<button class="pswp__button pswp__button--fs" aria-label="Toggle fullscreen"></button>
					<button class="pswp__button pswp__button--zoom" aria-label="Zoom in/out"></button>
					<div class="pswp__preloader">
						<div class="pswp__preloader__icn">
							<div class="pswp__preloader__cut">
								<div class="pswp__preloader__donut"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
					<div class="pswp__share-tooltip"></div>
				</div>
				<button class="pswp__button pswp__button--arrow--left" aria-label="Previous (arrow left)"></button>
				<button class="pswp__button pswp__button--arrow--right" aria-label="Next (arrow right)"></button>
				<div class="pswp__caption">
					<div class="pswp__caption__center"></div>
				</div>
			</div>
		</div>
	</div>

	<style id='etn-custom-css-inline-css'>
		.etn-event-single-content-wrap .etn-event-meta .etn-event-category span,
		.etn-event-item .etn-event-footer .etn-atend-btn .etn-btn-border,
		.etn-btn.etn-btn-border,
		.attr-btn-primary.etn-btn-border,
		.etn-attendee-form .etn-btn.etn-btn-border,
		.etn-ticket-widget .etn-btn.etn-btn-border,
		.etn-settings-dashboard .button-primary.etn-btn-border,
		.etn-single-speaker-item .etn-speaker-content a:hover,
		.etn-event-style2 .etn-event-date,
		.etn-event-style3 .etn-event-content .etn-title a:hover,
		.event-tab-wrapper ul li a.etn-tab-a,
		.etn-speaker-item.style-3:hover .etn-speaker-content .etn-title a,
		.etn-variable-ticket-widget .ticket-header,
		.events_calendar_list .calendar-event-details:hover .calendar-event-title,
		.etn-event-item:hover .etn-title a,
		.etn-recurring-widget .etn-date-text,

		.etn-event-header ul li i {
			color: #543ee8;
		}

		.etn-event-item .etn-event-category span,
		.etn-btn,
		.attr-btn-primary,
		.etn-attendee-form .etn-btn,
		.etn-ticket-widget .etn-btn,
		.schedule-list-1 .schedule-header,
		.speaker-style4 .etn-speaker-content .etn-title a,
		.etn-speaker-details3 .speaker-title-info,
		.etn-event-slider .swiper-pagination-bullet,
		.etn-speaker-slider .swiper-pagination-bullet,
		.etn-event-slider .swiper-button-next,
		.etn-event-slider .swiper-button-prev,
		.etn-speaker-slider .swiper-button-next,
		.etn-speaker-slider .swiper-button-prev,
		.etn-single-speaker-item .etn-speaker-thumb .etn-speakers-social a,
		.etn-event-header .etn-event-countdown-wrap .etn-count-item,
		.schedule-tab-1 .etn-nav li a.etn-active,
		.schedule-list-wrapper .schedule-listing.multi-schedule-list .schedule-slot-time,
		.etn-speaker-item.style-3 .etn-speaker-content .etn-speakers-social a,
		.event-tab-wrapper ul li a.etn-tab-a.etn-active,
		.etn-btn,
		button.etn-btn.etn-btn-primary,
		.etn-schedule-style-3 ul li:before,
		.etn-zoom-btn,
		.cat-radio-btn-list [type=radio]:checked+label:after,
		.cat-radio-btn-list [type=radio]:not(:checked)+label:after,
		.etn-default-calendar-style .fc-button:hover,
		.etn-default-calendar-style .fc-state-highlight,
		.etn-calender-list a:hover,
		.events_calendar_standard .cat-dropdown-list select,
		.etn-event-banner-wrap,
		.events_calendar_list .calendar-event-details .calendar-event-content .calendar-event-category-wrap .etn-event-category,
		.etn-variable-ticket-widget .etn-add-to-cart-block,
		.etn-recurring-event-wrapper #seeMore,
		.more-event-tag,
		.etn-order-purchase-create-form .ant-input-outlined:hover,
		.etn-order-purchase-create-form .ant-input-outlined:focus-within,
		.etn-settings-dashboard .button-primary {
			background-color: #543ee8;
		}

		.etn-event-item .etn-event-footer .etn-atend-btn .etn-btn-border,
		.etn-btn.etn-btn-border,
		.attr-btn-primary.etn-btn-border,
		.etn-attendee-form .etn-btn.etn-btn-border,
		.etn-ticket-widget .etn-btn.etn-btn-border,
		.event-tab-wrapper ul li a.etn-tab-a,
		.event-tab-wrapper ul li a.etn-tab-a.etn-active,
		.etn-schedule-style-3 ul li:after,
		.etn-default-calendar-style .fc-ltr .fc-basic-view .fc-day-top.fc-today .fc-day-number,
		.etn-default-calendar-style .fc-button:hover,
		.etn-variable-ticket-widget .etn-variable-total-price,
		.etn-order-purchase-create-form .ant-input-outlined:hover,
		.etn-order-purchase-create-form .ant-input-outlined:focus-within,
		.etn-order-purchase-create-form .ant-input-number-outlined:focus-within,
		.etn-order-purchase-create-form .ant-input-number-outlined:hover,
		.etn-settings-dashboard .button-primary.etn-btn-border {
			border-color: #543ee8;
		}

		.schedule-tab-wrapper .etn-nav li a.etn-active,
		.etn-speaker-item.style-3 .etn-speaker-content {
			border-bottom-color: #543ee8;
		}

		.schedule-tab-wrapper .etn-nav li a:after,
		.etn-event-list2 .etn-event-content,
		.schedule-tab-1 .etn-nav li a.etn-active:after {
			border-color: #543ee8 transparent transparent transparent;
		}

		.etn-default-calendar-style .fc .fc-daygrid-bg-harness:first-of-type:before {
			background-color: #543ee82A;
		}

		.sidebar .etn-default-calendar-style .fc .fc-daygrid-bg-harness:nth-of-type(1)::before,
		.left-sidebar .etn-default-calendar-style .fc .fc-daygrid-bg-harness:nth-of-type(1)::before,
		.right-sidebar .etn-default-calendar-style .fc .fc-daygrid-bg-harness:nth-of-type(1)::before,
		.widget .etn-default-calendar-style .fc .fc-daygrid-bg-harness:nth-of-type(1)::before,
		.widgets .etn-default-calendar-style .fc .fc-daygrid-bg-harness:nth-of-type(1)::before,
		.main-sidebar .etn-default-calendar-style .fc .fc-daygrid-bg-harness:nth-of-type(1)::before,
		#sidebar .etn-default-calendar-style .fc .fc-daygrid-bg-harness:nth-of-type(1)::before {
			background-color: #543ee8;
		}

		.etn-event-item .etn-event-location,
		.etn-event-tag-list a:hover,
		.etn-schedule-wrap .etn-schedule-info .etn-schedule-time {
			color: #ffffff;
		}

		.etn-event-tag-list a:hover {
			border-color: #ffffff;
		}

		.etn-btn:hover,
		.attr-btn-primary:hover,
		.etn-attendee-form .etn-btn:hover,
		.etn-ticket-widget .etn-btn:hover,
		.speaker-style4 .etn-speaker-content p,
		.etn-btn,
		button.etn-btn.etn-btn-primary:hover,
		.etn-zoom-btn,
		.events_calendar_list .calendar-event-details .event-calendar-action .etn-btn,
		.events_calendar_list .calendar-event-details .event-calendar-action .etn-price.event-calendar-details-btn,
		.etn-speaker-item.style-3 .etn-speaker-content .etn-speakers-social a:hover,
		.etn-single-speaker-item .etn-speaker-thumb .etn-speakers-social a:hover,
		.etn-recurring-event-wrapper #seeMore:hover,
		.etn-recurring-event-wrapper #seeMore:focus,
		.etn-settings-dashboard .button-primary:hover {
			background-color: #ffffff;
		}

		.events_calendar_list .calendar-event-details .event-calendar-action .etn-btn {
			max-width: 120px;
			display: block;
			text-align: center;
			margin-left: auto;
		}

		.etn-order-purchase-create-form .ant-select:not(.ant-select-disabled):hover .ant-select-selector,
		.etn-order-purchase-create-form .ant-select-focused:where(.css-dev-only-do-not-override-5gkvuh).ant-select-outlined:not(.ant-select-disabled):not(.ant-select-customize-input):not(.ant-pagination-size-changer) .ant-select-selector,
		.etn-order-purchase-create-form .ant-select-outlined:not(.ant-select-disabled):not(.ant-select-customize-input):not(.ant-pagination-size-changer):hover .ant-select-selector {
			border-color: #543ee8;
		}

		.etn-checkbox-group .ant-checkbox-wrapper:not(.ant-checkbox-wrapper-disabled):hover .ant-checkbox-checked:not(.ant-checkbox-disabled) .ant-checkbox-inner {
			background-color: #543ee8;
			border-color: #543ee8;
		}

		.etn-checkbox-group .ant-checkbox-checked .ant-checkbox-inner,
		.etn-checkbox-group .ant-checkbox:not(.ant-checkbox-disabled):hover .ant-checkbox-inner,
		.etn-checkbox-group .ant-checkbox-wrapper:hover .ant-checkbox .ant-checkbox-inner,
		.etn-checkbox-group .ant-checkbox-wrapper:hover .ant-checkbox-checked .ant-checkbox-inner {
			border-color: #543ee8;
			background-color: #543ee8;
		}

		.etn-extra-fields-container .ant-radio-checked .ant-radio-inner {
			background-color: #543ee8;
			border-color: #543ee8;
		}

		.etn-extra-fields-container .ant-radio-wrapper:hover .ant-radio-inner {
			border-color: #543ee8;
		}

		.etn-extra-field-text-area .ant-input-outlined:hover,
		.etn-extra-field-text-area .ant-input-outlined:focus-within {
			border-color: #543ee8;
			background-color: #fff;
		}

		.background-color-override {
			background-color: #fff !important;
		}
	</style>


	<script type="text/javascript" src="../wp-includes/js/dist/hooks.min.js" id="wp-hooks-js"></>
			<script type="text/javascript" src="../wp-includes/js/dist/i18n.min.js" id="wp-i18n-js"></script>
	<script type="text/javascript" id="wp-i18n-js-after">
/* <![CDATA[ */
																								   wp.i18n.setLocaleData( {'text direction\u0004ltr': [ 'ltr' ] } );
																								   /* ]]> */
	</script>

	<script type="text/javascript" id="etn-public-js-extra">
/* <![CDATA[ */
																								   var localized_data_obj = {"empty":"Please fill the field","invalid":"Invalid input","only_number":"Only number allowed","text":"Please fill the field","number":"Please input a number","date":"Please fill the field","radio":"Please check the field","expired":"Expired","scanner_common_msg":"Something went wrong! Please try again.","ajax_url":"https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn\/wp-admin\/admin-ajax.php","site_url":"https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn","admin_url":"https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn\/wp-admin\/","assets_url":"https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn\/wp-content\/plugins\/wp-event-solution\/assets","evnetin_pro_active":"","locale_name":"en-us","start_of_week":"1","author_id":"0","ticket_scanner_link":"https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn\/wp-admin\/edit.php?post_type=etn-attendee","post_id":"3329","zoom_connection_check_nonce":"ebb9a6e9e8","ticket_status_nonce":"8927768ed6","zoom_module":"yes","attendee_module":"yes","currency_list":[{"name":"AED","symbol":"&#x62f;.&#x625;","country":"United Arab Emirates dirham"},{"name":"AFN","symbol":"&#x60b;","country":"Afghan afghani"},{"name":"ALL","symbol":"L","country":"Albanian lek"},{"name":"AMD","symbol":"AMD","country":"Armenian dram"},{"name":"ANG","symbol":"&fnof;","country":"Netherlands Antillean guilder"},{"name":"AOA","symbol":"Kz","country":"Angolan kwanza"},{"name":"ARS","symbol":"&#36;","country":"Argentine peso"},{"name":"AUD","symbol":"&#36;","country":"Australian dollar"},{"name":"AWG","symbol":"Afl.","country":"Aruban florin"},{"name":"AZN","symbol":"AZN","country":"Azerbaijani manat"},{"name":"BAM","symbol":"KM","country":"Bosnia and Herzegovina convertible mark"},{"name":"BBD","symbol":"&#36;","country":"Barbadian dollar"},{"name":"BDT","symbol":"&#2547;&nbsp;","country":"Bangladeshi taka"},{"name":"BGN","symbol":"&#1083;&#1074;.","country":"Bulgarian lev"},{"name":"BHD","symbol":".&#x62f;.&#x628;","country":"Bahraini dinar"},{"name":"BIF","symbol":"Fr","country":"Burundian franc"},{"name":"BMD","symbol":"&#36;","country":"Bermudian dollar"},{"name":"BND","symbol":"&#36;","country":"Brunei dollar"},{"name":"BOB","symbol":"Bs.","country":"Bolivian boliviano"},{"name":"BRL","symbol":"&#82;&#36;","country":"Brazilian real"},{"name":"BSD","symbol":"&#36;","country":"Bahamian dollar"},{"name":"BTC","symbol":"&#3647;","country":"Bitcoin"},{"name":"BTN","symbol":"Nu.","country":"Bhutanese ngultrum"},{"name":"BWP","symbol":"P","country":"Botswana pula"},{"name":"BYR","symbol":"Br","country":"Belarusian ruble (old)"},{"name":"BYN","symbol":"Br","country":"Belarusian ruble"},{"name":"BZD","symbol":"&#36;","country":"Belize dollar"},{"name":"CAD","symbol":"&#36;","country":"Canadian dollar"},{"name":"CDF","symbol":"Fr","country":"Congolese franc"},{"name":"CHF","symbol":"&#67;&#72;&#70;","country":"Swiss franc"},{"name":"CLP","symbol":"&#36;","country":"Chilean peso"},{"name":"CNY","symbol":"&yen;","country":"Chinese yuan"},{"name":"COP","symbol":"&#36;","country":"Colombian peso"},{"name":"CRC","symbol":"&#x20a1;","country":"Costa Rican col&oacute;n"},{"name":"CUC","symbol":"&#36;","country":"Cuban convertible peso"},{"name":"CUP","symbol":"&#36;","country":"Cuban peso"},{"name":"CVE","symbol":"&#36;","country":"Cape Verdean escudo"},{"name":"CZK","symbol":"&#75;&#269;","country":"Czech koruna"},{"name":"DJF","symbol":"Fr","country":"Djiboutian franc"},{"name":"DKK","symbol":"kr.","country":"Danish krone"},{"name":"DOP","symbol":"RD&#36;","country":"Dominican peso"},{"name":"DZD","symbol":"&#x62f;.&#x62c;","country":"Algerian dinar"},{"name":"EGP","symbol":"EGP","country":"Egyptian pound"},{"name":"ERN","symbol":"Nfk","country":"Eritrean nakfa"},{"name":"ETB","symbol":"Br","country":"Ethiopian birr"},{"name":"EUR","symbol":"&euro;","country":"Euro"},{"name":"FJD","symbol":"&#36;","country":"Fijian dollar"},{"name":"FKP","symbol":"&pound;","country":"Falkland Islands pound"},{"name":"GBP","symbol":"&pound;","country":"Pound sterling"},{"name":"GEL","symbol":"&#x20be;","country":"Georgian lari"},{"name":"GGP","symbol":"&pound;","country":"Guernsey pound"},{"name":"GHS","symbol":"&#x20b5;","country":"Ghana cedi"},{"name":"GIP","symbol":"&pound;","country":"Gibraltar pound"},{"name":"GMD","symbol":"D","country":"Gambian dalasi"},{"name":"GNF","symbol":"Fr","country":"Guinean franc"},{"name":"GTQ","symbol":"Q","country":"Guatemalan quetzal"},{"name":"GYD","symbol":"&#36;","country":"Guyanese dollar"},{"name":"HKD","symbol":"&#36;","country":"Hong Kong dollar"},{"name":"HNL","symbol":"L","country":"Honduran lempira"},{"name":"HRK","symbol":"kn","country":"Croatian kuna"},{"name":"HTG","symbol":"G","country":"Haitian gourde"},{"name":"HUF","symbol":"&#70;&#116;","country":"Hungarian forint"},{"name":"IDR","symbol":"Rp","country":"Indonesian rupiah"},{"name":"ILS","symbol":"&#8362;","country":"Israeli new shekel"},{"name":"IMP","symbol":"&pound;","country":"Manx pound"},{"name":"INR","symbol":"&#8377;","country":"Indian rupee"},{"name":"IQD","symbol":"&#x62f;.&#x639;","country":"Iraqi dinar"},{"name":"IRR","symbol":"&#xfdfc;","country":"Iranian rial"},{"name":"IRT","symbol":"&#x062A;&#x0648;&#x0645;&#x0627;&#x0646;","country":"Iranian toman"},{"name":"ISK","symbol":"kr.","country":"Icelandic kr&oacute;na"},{"name":"JEP","symbol":"&pound;","country":"Jersey pound"},{"name":"JMD","symbol":"&#36;","country":"Jamaican dollar"},{"name":"JOD","symbol":"&#x62f;.&#x627;","country":"Jordanian dinar"},{"name":"JPY","symbol":"&yen;","country":"Japanese yen"},{"name":"KES","symbol":"KSh","country":"Kenyan shilling"},{"name":"KGS","symbol":"&#x441;&#x43e;&#x43c;","country":"Kyrgyzstani som"},{"name":"KHR","symbol":"&#x17db;","country":"Cambodian riel"},{"name":"KMF","symbol":"Fr","country":"Comorian franc"},{"name":"KPW","symbol":"&#x20a9;","country":"North Korean won"},{"name":"KRW","symbol":"&#8361;","country":"South Korean won"},{"name":"KWD","symbol":"&#x62f;.&#x643;","country":"Kuwaiti dinar"},{"name":"KYD","symbol":"&#36;","country":"Cayman Islands dollar"},{"name":"KZT","symbol":"&#8376;","country":"Kazakhstani tenge"},{"name":"LAK","symbol":"&#8365;","country":"Lao kip"},{"name":"LBP","symbol":"&#x644;.&#x644;","country":"Lebanese pound"},{"name":"LKR","symbol":"&#xdbb;&#xdd4;","country":"Sri Lankan rupee"},{"name":"LRD","symbol":"&#36;","country":"Liberian dollar"},{"name":"LSL","symbol":"L","country":"Lesotho loti"},{"name":"LYD","symbol":"&#x644;.&#x62f;","country":"Libyan dinar"},{"name":"MAD","symbol":"&#x62f;.&#x645;.","country":"Moroccan dirham"},{"name":"MDL","symbol":"MDL","country":"Moldovan leu"},{"name":"MGA","symbol":"Ar","country":"Malagasy ariary"},{"name":"MKD","symbol":"&#x434;&#x435;&#x43d;","country":"Macedonian denar"},{"name":"MMK","symbol":"Ks","country":"Burmese kyat"},{"name":"MNT","symbol":"&#x20ae;","country":"Mongolian t&ouml;gr&ouml;g"},{"name":"MOP","symbol":"P","country":"Macanese pataca"},{"name":"MRU","symbol":"UM","country":"Mauritanian ouguiya"},{"name":"MUR","symbol":"&#x20a8;","country":"Mauritian rupee"},{"name":"MVR","symbol":".&#x783;","country":"Maldivian rufiyaa"},{"name":"MWK","symbol":"MK","country":"Malawian kwacha"},{"name":"MXN","symbol":"&#36;","country":"Mexican peso"},{"name":"MYR","symbol":"&#82;&#77;","country":"Malaysian ringgit"},{"name":"MZN","symbol":"MT","country":"Mozambican metical"},{"name":"NAD","symbol":"N&#36;","country":"Namibian dollar"},{"name":"NGN","symbol":"&#8358;","country":"Nigerian naira"},{"name":"NIO","symbol":"C&#36;","country":"Nicaraguan c&oacute;rdoba"},{"name":"NOK","symbol":"&#107;&#114;","country":"Norwegian krone"},{"name":"NPR","symbol":"&#8360;","country":"Nepalese rupee"},{"name":"NZD","symbol":"&#36;","country":"New Zealand dollar"},{"name":"OMR","symbol":"&#x631;.&#x639;.","country":"Omani rial"},{"name":"PAB","symbol":"B\/.","country":"Panamanian balboa"},{"name":"PEN","symbol":"S\/","country":"Sol"},{"name":"PGK","symbol":"K","country":"Papua New Guinean kina"},{"name":"PHP","symbol":"&#8369;","country":"Philippine peso"},{"name":"PKR","symbol":"&#8360;","country":"Pakistani rupee"},{"name":"PLN","symbol":"&#122;&#322;","country":"Polish z&#x142;oty"},{"name":"PRB","symbol":"&#x440;.","country":"Transnistrian ruble"},{"name":"PYG","symbol":"&#8370;","country":"Paraguayan guaran&iacute;"},{"name":"QAR","symbol":"&#x631;.&#x642;","country":"Qatari riyal"},{"name":"RMB","symbol":"&yen;","country":"Chinese renminbi"},{"name":"RON","symbol":"lei","country":"Romanian leu"},{"name":"RSD","symbol":"&#1088;&#1089;&#1076;","country":"Serbian dinar"},{"name":"RUB","symbol":"&#8381;","country":"Russian ruble"},{"name":"RWF","symbol":"Fr","country":"Rwandan franc"},{"name":"SAR","symbol":"&#x631;.&#x633;","country":"Saudi riyal"},{"name":"SBD","symbol":"&#36;","country":"Solomon Islands dollar"},{"name":"SCR","symbol":"&#x20a8;","country":"Seychellois rupee"},{"name":"SDG","symbol":"&#x62c;.&#x633;.","country":"Sudanese pound"},{"name":"SEK","symbol":"&#107;&#114;","country":"Swedish krona"},{"name":"SGD","symbol":"&#36;","country":"Singapore dollar"},{"name":"SHP","symbol":"&pound;","country":"Saint Helena pound"},{"name":"SLL","symbol":"Le","country":"Sierra Leonean leone"},{"name":"SOS","symbol":"Sh","country":"Somali shilling"},{"name":"SRD","symbol":"&#36;","country":"Surinamese dollar"},{"name":"SSP","symbol":"&pound;","country":"South Sudanese pound"},{"name":"STN","symbol":"Db","country":"S&atilde;o Tom&eacute; and Pr&iacute;ncipe dobra"},{"name":"SYP","symbol":"&#x644;.&#x633;","country":"Syrian pound"},{"name":"SZL","symbol":"E","country":"Swazi lilangeni"},{"name":"THB","symbol":"&#3647;","country":"Thai baht"},{"name":"TJS","symbol":"&#x405;&#x41c;","country":"Tajikistani somoni"},{"name":"TMT","symbol":"m","country":"Turkmenistan manat"},{"name":"TND","symbol":"&#x62f;.&#x62a;","country":"Tunisian dinar"},{"name":"TOP","symbol":"T&#36;","country":"Tongan pa&#x2bb;anga"},{"name":"TRY","symbol":"&#8378;","country":"Turkish lira"},{"name":"TTD","symbol":"&#36;","country":"Trinidad and Tobago dollar"},{"name":"TWD","symbol":"&#78;&#84;&#36;","country":"New Taiwan dollar"},{"name":"TZS","symbol":"Sh","country":"Tanzanian shilling"},{"name":"UAH","symbol":"&#8372;","country":"Ukrainian hryvnia"},{"name":"UGX","symbol":"UGX","country":"Ugandan shilling"},{"name":"USD","symbol":"&#36;","country":"United States (US) dollar"},{"name":"UYU","symbol":"&#36;","country":"Uruguayan peso"},{"name":"UZS","symbol":"UZS","country":"Uzbekistani som"},{"name":"VEF","symbol":"Bs F","country":"Venezuelan bol&iacute;var"},{"name":"VES","symbol":"Bs.S","country":"Bol&iacute;var soberano"},{"name":"VND","symbol":"&#8363;","country":"Vietnamese &#x111;&#x1ed3;ng"},{"name":"VUV","symbol":"Vt","country":"Vanuatu vatu"},{"name":"WST","symbol":"T","country":"Samoan t&#x101;l&#x101;"},{"name":"XAF","symbol":"CFA","country":"Central African CFA franc"},{"name":"XCD","symbol":"&#36;","country":"East Caribbean dollar"},{"name":"XOF","symbol":"CFA","country":"West African CFA franc"},{"name":"XPF","symbol":"Fr","country":"CFP franc"},{"name":"YER","symbol":"&#xfdfc;","country":"Yemeni rial"},{"name":"ZAR","symbol":"&#82;","country":"South African rand"},{"name":"ZMW","symbol":"ZK","country":"Zambian kwacha"}],"date_format":"F j, Y","date_format_string":"January 10, 2025","time_format":"g:i a","time_format_string":"8:53 pm","timezone_list":["Africa\/Abidjan","Africa\/Accra","Africa\/Addis_Ababa","Africa\/Algiers","Africa\/Asmara","Africa\/Bamako","Africa\/Bangui","Africa\/Banjul","Africa\/Bissau","Africa\/Blantyre","Africa\/Brazzaville","Africa\/Bujumbura","Africa\/Cairo","Africa\/Casablanca","Africa\/Ceuta","Africa\/Conakry","Africa\/Dakar","Africa\/Dar_es_Salaam","Africa\/Djibouti","Africa\/Douala","Africa\/El_Aaiun","Africa\/Freetown","Africa\/Gaborone","Africa\/Harare","Africa\/Johannesburg","Africa\/Juba","Africa\/Kampala","Africa\/Khartoum","Africa\/Kigali","Africa\/Kinshasa","Africa\/Lagos","Africa\/Libreville","Africa\/Lome","Africa\/Luanda","Africa\/Lubumbashi","Africa\/Lusaka","Africa\/Malabo","Africa\/Maputo","Africa\/Maseru","Africa\/Mbabane","Africa\/Mogadishu","Africa\/Monrovia","Africa\/Nairobi","Africa\/Ndjamena","Africa\/Niamey","Africa\/Nouakchott","Africa\/Ouagadougou","Africa\/Porto-Novo","Africa\/Sao_Tome","Africa\/Tripoli","Africa\/Tunis","Africa\/Windhoek","America\/Adak","America\/Anchorage","America\/Anguilla","America\/Antigua","America\/Araguaina","America\/Argentina\/Buenos_Aires","America\/Argentina\/Catamarca","America\/Argentina\/Cordoba","America\/Argentina\/Jujuy","America\/Argentina\/La_Rioja","America\/Argentina\/Mendoza","America\/Argentina\/Rio_Gallegos","America\/Argentina\/Salta","America\/Argentina\/San_Juan","America\/Argentina\/San_Luis","America\/Argentina\/Tucuman","America\/Argentina\/Ushuaia","America\/Aruba","America\/Asuncion","America\/Atikokan","America\/Bahia","America\/Bahia_Banderas","America\/Barbados","America\/Belem","America\/Belize","America\/Blanc-Sablon","America\/Boa_Vista","America\/Bogota","America\/Boise","America\/Cambridge_Bay","America\/Campo_Grande","America\/Cancun","America\/Caracas","America\/Cayenne","America\/Cayman","America\/Chicago","America\/Chihuahua","America\/Ciudad_Juarez","America\/Costa_Rica","America\/Creston","America\/Cuiaba","America\/Curacao","America\/Danmarkshavn","America\/Dawson","America\/Dawson_Creek","America\/Denver","America\/Detroit","America\/Dominica","America\/Edmonton","America\/Eirunepe","America\/El_Salvador","America\/Fort_Nelson","America\/Fortaleza","America\/Glace_Bay","America\/Goose_Bay","America\/Grand_Turk","America\/Grenada","America\/Guadeloupe","America\/Guatemala","America\/Guayaquil","America\/Guyana","America\/Halifax","America\/Havana","America\/Hermosillo","America\/Indiana\/Indianapolis","America\/Indiana\/Knox","America\/Indiana\/Marengo","America\/Indiana\/Petersburg","America\/Indiana\/Tell_City","America\/Indiana\/Vevay","America\/Indiana\/Vincennes","America\/Indiana\/Winamac","America\/Inuvik","America\/Iqaluit","America\/Jamaica","America\/Juneau","America\/Kentucky\/Louisville","America\/Kentucky\/Monticello","America\/Kralendijk","America\/La_Paz","America\/Lima","America\/Los_Angeles","America\/Lower_Princes","America\/Maceio","America\/Managua","America\/Manaus","America\/Marigot","America\/Martinique","America\/Matamoros","America\/Mazatlan","America\/Menominee","America\/Merida","America\/Metlakatla","America\/Mexico_City","America\/Miquelon","America\/Moncton","America\/Monterrey","America\/Montevideo","America\/Montserrat","America\/Nassau","America\/New_York","America\/Nome","America\/Noronha","America\/North_Dakota\/Beulah","America\/North_Dakota\/Center","America\/North_Dakota\/New_Salem","America\/Nuuk","America\/Ojinaga","America\/Panama","America\/Paramaribo","America\/Phoenix","America\/Port-au-Prince","America\/Port_of_Spain","America\/Porto_Velho","America\/Puerto_Rico","America\/Punta_Arenas","America\/Rankin_Inlet","America\/Recife","America\/Regina","America\/Resolute","America\/Rio_Branco","America\/Santarem","America\/Santiago","America\/Santo_Domingo","America\/Sao_Paulo","America\/Scoresbysund","America\/Sitka","America\/St_Barthelemy","America\/St_Johns","America\/St_Kitts","America\/St_Lucia","America\/St_Thomas","America\/St_Vincent","America\/Swift_Current","America\/Tegucigalpa","America\/Thule","America\/Tijuana","America\/Toronto","America\/Tortola","America\/Vancouver","America\/Whitehorse","America\/Winnipeg","America\/Yakutat","Antarctica\/Casey","Antarctica\/Davis","Antarctica\/DumontDUrville","Antarctica\/Macquarie","Antarctica\/Mawson","Antarctica\/McMurdo","Antarctica\/Palmer","Antarctica\/Rothera","Antarctica\/Syowa","Antarctica\/Troll","Antarctica\/Vostok","Arctic\/Longyearbyen","Asia\/Aden","Asia\/Almaty","Asia\/Amman","Asia\/Anadyr","Asia\/Aqtau","Asia\/Aqtobe","Asia\/Ashgabat","Asia\/Atyrau","Asia\/Baghdad","Asia\/Bahrain","Asia\/Baku","Asia\/Bangkok","Asia\/Barnaul","Asia\/Beirut","Asia\/Bishkek","Asia\/Brunei","Asia\/Chita","Asia\/Colombo","Asia\/Damascus","Asia\/Dhaka","Asia\/Dili","Asia\/Dubai","Asia\/Dushanbe","Asia\/Famagusta","Asia\/Gaza","Asia\/Hebron","Asia\/Ho_Chi_Minh","Asia\/Hong_Kong","Asia\/Hovd","Asia\/Irkutsk","Asia\/Jakarta","Asia\/Jayapura","Asia\/Jerusalem","Asia\/Kabul","Asia\/Kamchatka","Asia\/Karachi","Asia\/Kathmandu","Asia\/Khandyga","Asia\/Kolkata","Asia\/Krasnoyarsk","Asia\/Kuala_Lumpur","Asia\/Kuching","Asia\/Kuwait","Asia\/Macau","Asia\/Magadan","Asia\/Makassar","Asia\/Manila","Asia\/Muscat","Asia\/Nicosia","Asia\/Novokuznetsk","Asia\/Novosibirsk","Asia\/Omsk","Asia\/Oral","Asia\/Phnom_Penh","Asia\/Pontianak","Asia\/Pyongyang","Asia\/Qatar","Asia\/Qostanay","Asia\/Qyzylorda","Asia\/Riyadh","Asia\/Sakhalin","Asia\/Samarkand","Asia\/Seoul","Asia\/Shanghai","Asia\/Singapore","Asia\/Srednekolymsk","Asia\/Taipei","Asia\/Tashkent","Asia\/Tbilisi","Asia\/Tehran","Asia\/Thimphu","Asia\/Tokyo","Asia\/Tomsk","Asia\/Ulaanbaatar","Asia\/Urumqi","Asia\/Ust-Nera","Asia\/Vientiane","Asia\/Vladivostok","Asia\/Yakutsk","Asia\/Yangon","Asia\/Yekaterinburg","Asia\/Yerevan","Atlantic\/Azores","Atlantic\/Bermuda","Atlantic\/Canary","Atlantic\/Cape_Verde","Atlantic\/Faroe","Atlantic\/Madeira","Atlantic\/Reykjavik","Atlantic\/South_Georgia","Atlantic\/St_Helena","Atlantic\/Stanley","Australia\/Adelaide","Australia\/Brisbane","Australia\/Broken_Hill","Australia\/Darwin","Australia\/Eucla","Australia\/Hobart","Australia\/Lindeman","Australia\/Lord_Howe","Australia\/Melbourne","Australia\/Perth","Australia\/Sydney","Europe\/Amsterdam","Europe\/Andorra","Europe\/Astrakhan","Europe\/Athens","Europe\/Belgrade","Europe\/Berlin","Europe\/Bratislava","Europe\/Brussels","Europe\/Bucharest","Europe\/Budapest","Europe\/Busingen","Europe\/Chisinau","Europe\/Copenhagen","Europe\/Dublin","Europe\/Gibraltar","Europe\/Guernsey","Europe\/Helsinki","Europe\/Isle_of_Man","Europe\/Istanbul","Europe\/Jersey","Europe\/Kaliningrad","Europe\/Kirov","Europe\/Kyiv","Europe\/Lisbon","Europe\/Ljubljana","Europe\/London","Europe\/Luxembourg","Europe\/Madrid","Europe\/Malta","Europe\/Mariehamn","Europe\/Minsk","Europe\/Monaco","Europe\/Moscow","Europe\/Oslo","Europe\/Paris","Europe\/Podgorica","Europe\/Prague","Europe\/Riga","Europe\/Rome","Europe\/Samara","Europe\/San_Marino","Europe\/Sarajevo","Europe\/Saratov","Europe\/Simferopol","Europe\/Skopje","Europe\/Sofia","Europe\/Stockholm","Europe\/Tallinn","Europe\/Tirane","Europe\/Ulyanovsk","Europe\/Vaduz","Europe\/Vatican","Europe\/Vienna","Europe\/Vilnius","Europe\/Volgograd","Europe\/Warsaw","Europe\/Zagreb","Europe\/Zurich","Indian\/Antananarivo","Indian\/Chagos","Indian\/Christmas","Indian\/Cocos","Indian\/Comoro","Indian\/Kerguelen","Indian\/Mahe","Indian\/Maldives","Indian\/Mauritius","Indian\/Mayotte","Indian\/Reunion","Pacific\/Apia","Pacific\/Auckland","Pacific\/Bougainville","Pacific\/Chatham","Pacific\/Chuuk","Pacific\/Easter","Pacific\/Efate","Pacific\/Fakaofo","Pacific\/Fiji","Pacific\/Funafuti","Pacific\/Galapagos","Pacific\/Gambier","Pacific\/Guadalcanal","Pacific\/Guam","Pacific\/Honolulu","Pacific\/Kanton","Pacific\/Kiritimati","Pacific\/Kosrae","Pacific\/Kwajalein","Pacific\/Majuro","Pacific\/Marquesas","Pacific\/Midway","Pacific\/Nauru","Pacific\/Niue","Pacific\/Norfolk","Pacific\/Noumea","Pacific\/Pago_Pago","Pacific\/Palau","Pacific\/Pitcairn","Pacific\/Pohnpei","Pacific\/Port_Moresby","Pacific\/Rarotonga","Pacific\/Saipan","Pacific\/Tahiti","Pacific\/Tarawa","Pacific\/Tongatapu","Pacific\/Wake","Pacific\/Wallis","UTC"],"version":"4.0.19","payment_option_woo":"woocommerce","payment_option_stripe":"","payment_option_paypal":"","currency_symbol":"$","nonce":"ea23c1427e","timetics_pro_active":"","etn_purchase_login_required":"","etn_hide_seats_from_details":"","etn_primary_color":"#543ee8","etn_secondary_color":"#ffffff","decimal_separator":"comma_dot","thousand_separator":",","decimals":"2","price_format":"%1$s%2$s","currency_position":"left","elementor_supported":""};
																								   var localized_data_obj = {"ajax_url":"https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn\/wp-admin\/admin-ajax.php","site_url":"https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn","evnetin_pro_active":"","locale_name":"en-us","start_of_week":"1","expired":"Expired","author_id":"0","nonce":"ea23c1427e","scanner_common_msg":"Something went wrong! Please try again.","ticket_scanner_link":"https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn\/wp-admin\/edit.php?post_type=etn-attendee","attendee_form_validation_msg":{"email":{"invalid":"Email is not valid","empty":"Please fill the field"},"tel":{"empty":"Please fill the field","invalid":"Invalid phone number","only_number":"Only number allowed"},"text":"Please fill the field","number":"Please input a number","date":"Please fill the field","radio":"Please check the field"},"post_id":"3329","currency_symbol":"$"};
																								   /* ]]> */
	</script>


	<script type="text/javascript" id="wc-order-attribution-js-extra">
/* <![CDATA[ */
																								   var wc_order_attribution = {"params":{"lifetime":1.0000000000000000818030539140313095458623138256371021270751953125e-5,"session":30,"base64":false,"ajaxurl":"https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn\/wp-admin\/admin-ajax.php","prefix":"wc_order_attribution_","allowTracking":true},"fields":{"source_type":"current.typ","referrer":"current_add.rf","utm_campaign":"current.cmp","utm_source":"current.src","utm_medium":"current.mdm","utm_content":"current.cnt","utm_id":"current.id","utm_term":"current.trm","utm_source_platform":"current.plt","utm_creative_format":"current.fmt","utm_marketing_tactic":"current.tct","session_entry":"current_add.ep","session_start_time":"current_add.fd","session_pages":"session.pgs","session_count":"udata.vst","user_agent":"udata.uag"}};
																								   /* ]]> */
	</script>



	<script type="text/javascript" id="rtsb-public-js-extra">
/* <![CDATA[ */
																								   var rtsbPublicParams = {"ajaxUrl":"https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn\/wp-admin\/admin-ajax.php","homeurl":"https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn","wcCartUrl":"https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn\/cart\/","addedToCartText":"Product Added","singleCartToastrText":"Successfully Added","singleCartBtnText":"Added to Cart","browseCartText":"Browse Cart","noProductsText":"No more products to load","notice":{"position":"center-center"},"__rtsb_wpnonce":"c15364b073"};
																								   var QvModalParams = {"modal_width":"950"};
																								   /* ]]> */
	</script>

	<script type="text/javascript" id="rtsb-quick-view-js-extra">
/* <![CDATA[ */
																								   var rtsbQvParams = {"ajaxurl":"\/demo\/wordpress\/themes\/quiklearn\/wp-admin\/admin-ajax.php","lang":"","isLoggedIn":""};
																								   /* ]]> */
	</script>

	<script type="text/javascript" id="rtsb-wishlist-js-extra">
/* <![CDATA[ */
																								   var rtsbWishlistParams = {"product_id":"3329","resturl":"https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn\/wp-json\/","isLoggedIn":"","pageUrl":"https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn\/wishlist\/","rest_nonce":"ea23c1427e","notice":{"add_to_wishlist":"Add to wishlist","remove_wishlist":"Remove from list","button_text":"Add to wishlist","added":"Product added!","removed":"Product removed!","exist":"Product removed!","browse":"Browse wishlist","error":"Security error!","position":"center-center"}};
																								   /* ]]> */
	</script>

	<script type="text/javascript" id="rtsb-compare-js-extra">
/* <![CDATA[ */
																								   var rtsbCompareParams = {"product_id":"3329","resturl":"https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn\/wp-json\/","isLoggedIn":"","pageUrl":"https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn\/compare\/","rest_nonce":"ea23c1427e","notice":{"added":"Product added!","removed":"Product removed!","browse":"Browse compare","error":"Some thing went wrong!!","ajax_remove_compare":"Remove from list","ajax_button_text":"Compare"}};
																								   /* ]]> */
	</script>










	<script type="text/javascript" id="quiklearn-main-js-extra">
/* <![CDATA[ */
																								   var quiklearnObj = {"stickyMenu":"1","siteLogo":"<a href=\"https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn\/\" alt=\"Quiklearn\"><\/a>","extraOffset":"70","extraOffsetMobile":"52","rtl":"ltr","ajaxURL":"https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn\/wp-admin\/admin-ajax.php","nonce":"7cb96d4e99"};
																								   /* ]]> */
	</script>

	<script type="text/javascript" id="fluent-form-submission-js-extra">
/* <![CDATA[ */
																								   var fluentFormVars = {"ajaxUrl":"https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn\/wp-admin\/admin-ajax.php","forms":[],"step_text":"Step %activeStep% of %totalStep% - %stepTitle%","is_rtl":"","date_i18n":{"previousMonth":"Previous Month","nextMonth":"Next Month","months":{"shorthand":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"longhand":["January","February","March","April","May","June","July","August","September","October","November","December"]},"weekdays":{"longhand":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"shorthand":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"]},"daysInMonth":[31,28,31,30,31,30,31,31,30,31,30,31],"rangeSeparator":" to ","weekAbbreviation":"Wk","scrollTitle":"Scroll to increment","toggleTitle":"Click to toggle","amPM":["AM","PM"],"yearAriaLabel":"Year","firstDayOfWeek":1},"pro_version":"","fluentform_version":"5.2.8","force_init":"","stepAnimationDuration":"350","upload_completed_txt":"100% Completed","upload_start_txt":"0% Completed","uploading_txt":"Uploading","choice_js_vars":{"noResultsText":"No results found","loadingText":"Loading...","noChoicesText":"No choices to choose from","itemSelectText":"Press to select","maxItemText":"Only %%maxItemCount%% options can be added"},"input_mask_vars":{"clearIfNotMatch":false},"nonce":"e28f0ececb"};
																								   /* ]]> */
	</script>

	<script defer
		src="../wp-content/uploads/siteground-optimizer-assets/siteground-optimizer-combined-js-4f42656baddbf74e067d81422e58e835.js"></script>
</body>

<!-- Mirrored from www.radiustheme.com/demo/wordpress/themes/quiklearn/my-account/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Jan 2025 20:55:44 GMT -->

</html>