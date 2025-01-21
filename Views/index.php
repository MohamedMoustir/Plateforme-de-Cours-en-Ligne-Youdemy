<?php
require_once "../Class/Etudiant.php";
require_once "../Config/db.php";
require_once "../Class/Enseignant.php";


$categorys = new Etudiant(null, null, null, null, null, null, null, null);
$rows = $categorys->CountCours();

$AjouteCours = new Enseignant();

$allcours = $AjouteCours->afficheCours();

$allcours = array_slice($allcours, 0, 4);
?>





<!doctype html>
<html lang="en-US">

<!-- Mirrored from www.radiustheme.com/demo/wordpress/themes/quiklearn/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Jan 2025 20:53:34 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

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
	<title>Quiklearn &#8211; Quiklearn learning wordpress site</title>
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

		@font-face {
			font-family: 'Roboto';
			font-style: italic;
			font-weight: 100;
			font-display: swap;
			src: url(https://fonts.gstatic.com/s/roboto/v32/KFOiCnqEu92Fr1Mu51QrEzAdKg.ttf) format('truetype');
		}

		@font-face {
			font-family: 'Roboto';
			font-style: italic;
			font-weight: 300;
			font-display: swap;
			src: url(https://fonts.gstatic.com/s/roboto/v32/KFOjCnqEu92Fr1Mu51TjASc6CsE.ttf) format('truetype');
		}

		@font-face {
			font-family: 'Roboto';
			font-style: italic;
			font-weight: 400;
			font-display: swap;
			src: url(https://fonts.gstatic.com/s/roboto/v32/KFOkCnqEu92Fr1Mu51xIIzc.ttf) format('truetype');
		}

		@font-face {
			font-family: 'Roboto';
			font-style: italic;
			font-weight: 500;
			font-display: swap;
			src: url(https://fonts.gstatic.com/s/roboto/v32/KFOjCnqEu92Fr1Mu51S7ACc6CsE.ttf) format('truetype');
		}

		@font-face {
			font-family: 'Roboto';
			font-style: italic;
			font-weight: 700;
			font-display: swap;
			src: url(https://fonts.gstatic.com/s/roboto/v32/KFOjCnqEu92Fr1Mu51TzBic6CsE.ttf) format('truetype');
		}

		@font-face {
			font-family: 'Roboto';
			font-style: italic;
			font-weight: 900;
			font-display: swap;
			src: url(https://fonts.gstatic.com/s/roboto/v32/KFOjCnqEu92Fr1Mu51TLBCc6CsE.ttf) format('truetype');
		}

		@font-face {
			font-family: 'Roboto';
			font-style: normal;
			font-weight: 100;
			font-display: swap;
			src: url(https://fonts.gstatic.com/s/roboto/v32/KFOkCnqEu92Fr1MmgVxIIzc.ttf) format('truetype');
		}

		@font-face {
			font-family: 'Roboto';
			font-style: normal;
			font-weight: 300;
			font-display: swap;
			src: url(https://fonts.gstatic.com/s/roboto/v32/KFOlCnqEu92Fr1MmSU5fBBc9.ttf) format('truetype');
		}

		@font-face {
			font-family: 'Roboto';
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: url(https://fonts.gstatic.com/s/roboto/v32/KFOmCnqEu92Fr1Mu4mxP.ttf) format('truetype');
		}

		@font-face {
			font-family: 'Roboto';
			font-style: normal;
			font-weight: 500;
			font-display: swap;
			src: url(https://fonts.gstatic.com/s/roboto/v32/KFOlCnqEu92Fr1MmEU9fBBc9.ttf) format('truetype');
		}

		@font-face {
			font-family: 'Roboto';
			font-style: normal;
			font-weight: 700;
			font-display: swap;
			src: url(https://fonts.gstatic.com/s/roboto/v32/KFOlCnqEu92Fr1MmWUlfBBc9.ttf) format('truetype');
		}

		@font-face {
			font-family: 'Roboto';
			font-style: normal;
			font-weight: 900;
			font-display: swap;
			src: url(https://fonts.gstatic.com/s/roboto/v32/KFOlCnqEu92Fr1MmYUtfBBc9.ttf) format('truetype');
		}

		@font-face {
			font-family: 'Roboto Slab';
			font-style: normal;
			font-weight: 100;
			font-display: swap;
			src: url(https://fonts.gstatic.com/s/robotoslab/v34/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjojIWmb2Rm.ttf) format('truetype');
		}

		@font-face {
			font-family: 'Roboto Slab';
			font-style: normal;
			font-weight: 200;
			font-display: swap;
			src: url(https://fonts.gstatic.com/s/robotoslab/v34/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjoDISmb2Rm.ttf) format('truetype');
		}

		@font-face {
			font-family: 'Roboto Slab';
			font-style: normal;
			font-weight: 300;
			font-display: swap;
			src: url(https://fonts.gstatic.com/s/robotoslab/v34/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjo0oSmb2Rm.ttf) format('truetype');
		}

		@font-face {
			font-family: 'Roboto Slab';
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: url(https://fonts.gstatic.com/s/robotoslab/v34/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjojISmb2Rm.ttf) format('truetype');
		}

		@font-face {
			font-family: 'Roboto Slab';
			font-style: normal;
			font-weight: 500;
			font-display: swap;
			src: url(https://fonts.gstatic.com/s/robotoslab/v34/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjovoSmb2Rm.ttf) format('truetype');
		}

		@font-face {
			font-family: 'Roboto Slab';
			font-style: normal;
			font-weight: 600;
			font-display: swap;
			src: url(https://fonts.gstatic.com/s/robotoslab/v34/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjoUoOmb2Rm.ttf) format('truetype');
		}

		@font-face {
			font-family: 'Roboto Slab';
			font-style: normal;
			font-weight: 700;
			font-display: swap;
			src: url(https://fonts.gstatic.com/s/robotoslab/v34/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjoa4Omb2Rm.ttf) format('truetype');
		}

		@font-face {
			font-family: 'Roboto Slab';
			font-style: normal;
			font-weight: 800;
			font-display: swap;
			src: url(https://fonts.gstatic.com/s/robotoslab/v34/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjoDIOmb2Rm.ttf) format('truetype');
		}

		@font-face {
			font-family: 'Roboto Slab';
			font-style: normal;
			font-weight: 900;
			font-display: swap;
			src: url(https://fonts.gstatic.com/s/robotoslab/v34/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjoJYOmb2Rm.ttf) format('truetype');
		}
	</style>
	<link rel="stylesheet" id="siteground-optimizer-combined-css-358ff06802e165f9edadafd8e64b8ac5"
		href="wp-content/uploads/siteground-optimizer-assets/siteground-optimizer-combined-css-358ff06802e165f9edadafd8e64b8ac5.css"
		media="all" />
	<link rel="preload"
		href="wp-content/uploads/siteground-optimizer-assets/siteground-optimizer-combined-css-358ff06802e165f9edadafd8e64b8ac5.css"
		as="style">
	<meta name='robots' content='max-image-preview:large' />
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
	<link rel="alternate" type="application/rss+xml" title="Quiklearn &raquo; Feed" href="feed/index.html" />
	<link rel="alternate" type="application/rss+xml" title="Quiklearn &raquo; Comments Feed"
		href="comments/feed/index.html" />

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
		href='wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.min.css'
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
			padding-top: 0px;
			padding-bottom: 0px;
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


	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<script type="text/template" id="tmpl-variation-template">
	<div class="woocommerce-variation-description">{{{ data.variation.variation_description }}}</div>
	<div class="woocommerce-variation-price">{{{ data.variation.price_html }}}</div>
	<div class="woocommerce-variation-availability">{{{ data.variation.availability_html }}}</div>
</script>
	<script type="text/template" id="tmpl-unavailable-variation-template">
	<p role="alert">Sorry, this product is unavailable. Please choose a different combination.</p>
</script>
	<script type="text/javascript" src="wp-includes/js/jquery/jquery.min.js" id="jquery-core-js"></script>

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


	<link rel="https://api.w.org/" href="wp-json/index.html" />
	<link rel="alternate" title="JSON" type="application/json" href="wp-json/wp/v2/pages/3350.json" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
	<meta name="generator" content="WordPress 6.7.1" />
	<meta name="generator" content="WooCommerce 9.4.3" />
	<link rel="canonical" href="index.html" />
	<link rel='shortlink' href='index.html' />
	<link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
		href="wp-json/oembed/1.0/embeda19f.json?url=https%3A%2F%2Fwww.radiustheme.com%2Fdemo%2Fwordpress%2Fthemes%2Fquiklearn%2F" />
	<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
		href="wp-json/oembed/1.0/embed6b23?url=https%3A%2F%2Fwww.radiustheme.com%2Fdemo%2Fwordpress%2Fthemes%2Fquiklearn%2F&amp;format=xml" />
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
			src: url('wp-content/plugins/woocommerce/assets/fonts/Inter-VariableFont_slnt%2cwght.woff2') format('woff2');
			font-stretch: normal;
		}

		@font-face {
			font-family: Cardo;
			font-style: normal;
			font-weight: 400;
			font-display: fallback;
			src: url('wp-content/plugins/woocommerce/assets/fonts/cardo_normal_400.woff2') format('woff2');
		}
	</style>
	<link rel="icon" href="wp-content/uploads/2023/08/favicon.png" sizes="32x32" />
	<link rel="icon" href="wp-content/uploads/2023/08/favicon.png" sizes="192x192" />
	<link rel="apple-touch-icon" href="wp-content/uploads/2023/08/favicon.png" />
	<meta name="msapplication-TileImage"
		content="https://www.radiustheme.com/demo/wordpress/themes/quiklearn/wp-content/uploads/2023/08/favicon.png" />
</head>

<body
	class="home page-template page-template-elementor_header_footer page page-id-3350 wp-embed-responsive theme-quiklearn woocommerce-no-js rtsb-shopbuilder-plugin rtsb_theme_quiklearn woocommerce sticky-header header-style-2 footer-style-1 rt-course-grid-view no-sidebar right-sidebar product-grid-view elementor-default elementor-template-full-width elementor-kit-3324 elementor-page elementor-page-3350">
	<div id="preloader" style="background-image:url(wp-content/uploads/2023/08/quicklearn_preloader.gif);"></div>
	<div class="quiklearn-progress-container">
		<div class="quiklearn-progress-bar" id="quiklearnBar"></div>
	</div>


	<div id="page" class="site page">
		<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
		<header id="masthead" class="site-header">
			<div id="header-2" class="header-area">
				<div id="sticky-placeholder"></div>
				<div class="header-menu header-top" id="header-middlebar">
					<div class="container">
						<div class="menu-full-wrap">
							<div class="site-branding">
								<a class="dark-logo" aria-label="Dark Logo" href="index.html"><img width="191"
										height="52" src="wp-content/uploads/2023/08/logo-dark.svg"
										class="attachment-full size-full" alt="" /></a>
								<a class="light-logo" aria-label="Light Logo" href="index.html"><img width="172"
										height="46" src="wp-content/uploads/2023/08/logo-light.svg"
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
								<div class="header-login-wrap">
									<div class="header-login">
										<a target="_self" href="my-account/login.php">Login</a>
										<?php if (!isset($_SESSION['email'])) { ?>
											<a target="_self" href="../my-account/Register.php">Sign Up</a>
										<?php } else { ?>
											<a target="" href="my-account/login.php?logout">log out</a>
										<?php } ?>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="header-menu header-bottom" id="header-menu">
					<div class="container">
						<div class="menu-full-wrap header-dark">
							<div class="course-category">
								<button type="button" id="course-button" class="course-button"><i
										class="icon-quiklearn-share"></i>All Categories<i
										class="down-arrow icon-quiklearn-angle-up"></i></button>
								<div class="cat-course-close">
									<ul class="rt-course-item">
										<li>
											<a href="course-category/art-design/index.html">Art &amp; Design</a>
										</li>
										<li>
											<a href="course-category/development/index.html">Development</a>
										</li>
										<li>
											<a href="course-category/finance/index.html">Finance</a>
										</li>
										<li>
											<a href="course-category/health-fitness/index.html">Health &amp; Fitness</a>
										</li>
										<li>
											<a href="course-category/data-science/index.html">Data Science</a>
										</li>
										<li>
											<a href="course-category/business/index.html">Business</a>
										</li>
										<li>
											<a href="course-category/technology/index.html">Technology</a>
										</li>
									</ul>
								</div>
							</div>

							<div class="menu-wrap">
								<div id="site-navigation" class="main-navigation">
									<nav class="menu-main-menu-container">
										<ul id="menu-main-menu" class="menu">
											<li id="menu-item-3395"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-3350 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-3395">
												<a href="index.php" aria-current="page">Home</a>

											</li>
											<li id="menu-item-3402"
												class="mega-menu menu-two-column menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3402">
												<a href="pages/grid_cours.php">Courses</a>

											</li>
											<li id="menu-item-3397"
												class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3397">
												<a href="pages/etudaint.php">My courses</a>

											</li>
											<li id="menu-item-3396"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3396">
												<a href="index.php">Shop</a>

											</li>
											<li id="menu-item-3150"
												class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3150">
												<a href="index.php">Pages</a>

											</li>
											<li id="menu-item-3173"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3173">
												<a href="index.php">Blogs</a>

											</li>
											<li id="menu-item-3384"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3384">
												<a href="index.php">Contact</a>
											</li>
										</ul>
									</nav>
								</div>
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


								<div class="item-icon header-wishlist-icon wishlist-icon">
									<a href="my-account/wishlist/index.html">
										<i class="icon-quiklearn-heart"></i>
										<span class="wishlist-icon-num rtsb-wishlist-counter item-count">0</span>
									</a>
								</div>

								<div class="header-action-item cart-area mini-cart-items header-shop-cart">
									<div class="item-icon cart-list-trigger">
										<a class="cart-contents cart-trigger-icon" href="cart/index.html"
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
							<a target="_self" href="../my-account/login.php">Login</a>
							<?php if (isset($_SESSION['email'])) { ?>
								<a target="_self" href="../my-account/Register.php">Sign Up</a>
							<?php }

							?>
						</div>
					</div>

				</div>
			</div>
			<div class="mobile-mene-bar">
				<div class="mean-bar">
					<a class="mobile-logo dark-logo" aria-label="Mobile Logo" href="index.html"><img width="191"
							height="52" src="wp-content/uploads/2023/08/logo-dark.svg" class="attachment-full size-full"
							alt="" /></a>
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
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-3350 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-3395">
									<a href="index.html" aria-current="page">Home</a>

								</li>
								<li
									class="mega-menu menu-two-column menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3402">
									<a href="courses/index.html">Courses</a>

								</li>
								<li
									class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3397">
									<a href="pages/etudaint.php">Mes courses</a>


								</li>
								<li
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3396">
									<a href="shop/index.html">Shop</a>

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
															<a href="button/index.html">Button</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3863">
															<a href="contact-info/index.html">Contact Info</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3805">
															<a href="section-title/index.html">Section Title</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3804">
															<a href="title-with-text/index.html">Title With Text</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3803">
															<a href="hero-banner/index.html">Hero Banner</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3912">
															<a href="call-to-action/index.html">Call To Action</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3862">
															<a href="logo-style/index.html">Logo Style</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4092">
															<a href="course-search/index.html">Course Search</a>
														</li>
													</ul>
												</li>
												<li
													class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3911">
													<a href="#">Info Box</a>
													<ul class="sub-menu">
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3908">
															<a href="info-box-01/index.html">Info Box 01</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3909">
															<a href="info-box-02/index.html">Info Box 02</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3910">
															<a href="info-box-03/index.html">Info Box 03</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3907">
															<a href="info-box-04/index.html">Info Box 04</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3906">
															<a href="info-box-05/index.html">Info Box 05</a>
														</li>
													</ul>
												</li>
												<li
													class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4093">
													<a href="#">Testimonial</a>
													<ul class="sub-menu">
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4091">
															<a href="testimonial-grid/index.html">Testimonial Grid</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4090">
															<a href="testimonial-slider/index.html">Testimonial
																Slider</a>
														</li>
													</ul>
												</li>
												<li
													class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3950">
													<a href="#">Counter Layout</a>


												<li
													class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3988">
													<a href="#">Course Grid</a>
													<ul class="sub-menu">
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3994">
															<a href="course-grid-01/index.html">Course Grid 01</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3993">
															<a href="course-grid-02/index.html">Course Grid 02</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4663">
															<a href="course-grid-03/index.html">Course Grid 03</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4662">
															<a href="course-grid-04/index.html">Course Grid 04</a>
														</li>
													</ul>
												</li>
												<li
													class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4664">
													<a href="#">Course Slider</a>
													<ul class="sub-menu">
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3992">
															<a href="course-slider-01/index.html">Course Slider 01</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3991">
															<a href="course-slider-02/index.html">Course Slider 02</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4659">
															<a href="course-slider-03/index.html">Course Slider 03</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4658">
															<a href="course-slider-04/index.html">Course Slider 04</a>
														</li>
													</ul>
												</li>
												<li
													class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4665">
													<a href="#">Course Isotope</a>
													<ul class="sub-menu">
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3990">
															<a href="course-isotope-01/index.html">Course Isotope 01</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3989">
															<a href="course-isotope-02/index.html">Course Isotope 02</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4661">
															<a href="course-isotope-03/index.html">Course Isotope 03</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4660">
															<a href="course-isotope-04/index.html">Course Isotope 04</a>
														</li>
													</ul>
												</li>
												<li
													class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4010">
													<a href="#">Course Category</a>
													<ul class="sub-menu">
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4013">
															<a href="course-category-01/index.html">Course Category
																01</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4012">
															<a href="course-category-02/index.html">Course Category
																02</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4011">
															<a href="course-category-03/index.html">Course Category
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
															<a href="instructor-01/index.html">Instructor 01</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4026">
															<a href="instructor-02/index.html">Instructor 02</a>
														</li>
														<li
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4027">
															<a href="instructors/index.html">Instructor 03</a>
														</li>
													</ul>
												</li>
												</>
										</li>
										<li
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3387">
											<a href="about/index.html">About</a>
										</li>
										<li
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3403">
											<a href="instructors/index.html">Instructors</a>
										</li>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3405">
											<a href="lp-profile/index.html">Instructor Profile</a>
										</li>
										<li
											class="menu-item menu-item-type-post_type menu-item-object-zoom-meetings menu-item-4587">
											<a href="zoom-meetings/zoom-meeting/index.html">Zoom Meeting</a>
										</li>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4588">
											<a
												href="courses/the-complete-android-java-developer-course/lessons/zoom-live-lesson/index.html">Zoom
												Live Lesson</a>
										</li>
										<li
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3386">
											<a href="pricing-table/index.html">Pricing Table</a>
										</li>
										<li
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3385">
											<a href="faq-page/index.html">FAQ Page</a>
										</li>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3151">
											<a href="404.html">404 Page</a>
										</li>
									</ul>
								</li>
								<li
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3173">
									<a href="our-blogs/index.html">Blogs</a>
									<ul class="sub-menu">
										<li
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3174">
											<a href="blog-grid/index.html">Blog Grid</a>
										</li>
										<li
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3175">
											<a href="blog-list/index.html">Blog List</a>
										</li>
										<li
											class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3176">
											<a href="take-your-career-next-leveley-future-approch-10/index.html">Post
												Standard</a>
										</li>
										<li
											class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3177">
											<a href="take-your-career-next-leveley-future-approch-9/index.html">Post
												Gallery</a>
										</li>
										<li
											class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3723">
											<a href="take-your-career-next-leveley-future-approch-4/index.html">Post
												Video</a>
										</li>
									</ul>
								</li>
								<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3384"><a
										href="contact/index.html">Contact</a></li>
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
			<div data-elementor-type="wp-page" data-elementor-id="3350" class="elementor elementor-3350">
				<section
					class="elementor-section elementor-top-section elementor-element elementor-element-53190d24 elementor-section-boxed elementor-section-height-default elementor-section-height-default rt-parallax-bg-no"
					data-id="53190d24" data-element_type="section"
					data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-564cc1bf"
							data-id="564cc1bf" data-element_type="column">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-78485559 elementor-invisible elementor-widget elementor-widget-rt-hero-banner"
									data-id="78485559" data-element_type="widget"
									data-widget_type="rt-hero-banner.default">
									<div class="elementor-widget-container">
										<div class="rt-hero-banner">

											<span class="entry-subtitle hide fadeInUp" data-wow-delay="0.2s"
												data-wow-duration="1.2s">100% QUALITY COURSES</span>
											<h1 class="entry-title hide fadeInUp" data-wow-delay="0.6s"
												data-wow-duration="1.2s">Find Your Perfect Courses<br> And Improve Your
												<span>Skills</span>
												<span class="shape-line"><img decoding="async"
														src="wp-content/themes/quiklearn/assets/element/underline.svg"
														width="167" height="15" alt=""></span>
											</h1>
											<div class="entry-content hide fadeInUp" data-wow-delay="0.8s"
												data-wow-duration="1.2s">
												<p>We Have <span>40k+</span> Online Courses &amp; <span>500K+</span>
													Online Registered Student.</p>
											</div>
											<div class="rt-button hide fadeInUp" data-wow-delay="1s"
												data-wow-duration="1.2s">
												<a class="button-link button-style-2 btn-common"
													href="courses/index.html">Explore All Courses<i
														class="icon-quiklearn-right-arrow"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7c5073d5"
							data-id="7c5073d5" data-element_type="column">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-37c3a4f5 elementor-invisible elementor-widget elementor-widget-rt-image-animation"
									data-id="37c3a4f5" data-element_type="widget"
									data-widget_type="rt-image-animation.default">
									<div class="elementor-widget-container">

										<div class="rt-image-banner rt-banner-style-5 rt-image-parallax">
											<div class="rt-banner-item hide fadeInUp" data-wow-delay="0.2s"
												data-wow-duration="1.2s">
												<div class="rt-image">
													<img loading="lazy" decoding="async" width="608" height="601"
														src="wp-content/uploads/2023/08/hero-img-2.png"
														class="attachment-full size-full wp-image-3512" alt=""
														srcset="https://www.radiustheme.com/demo/wordpress/themes/quiklearn/wp-content/uploads/2023/08/hero-img-2.png 608w, https://www.radiustheme.com/demo/wordpress/themes/quiklearn/wp-content/uploads/2023/08/hero-img-2-100x100.png 100w, https://www.radiustheme.com/demo/wordpress/themes/quiklearn/wp-content/uploads/2023/08/hero-img-2-600x593.png 600w, https://www.radiustheme.com/demo/wordpress/themes/quiklearn/wp-content/uploads/2023/08/hero-img-2-300x297.png 300w"
														sizes="(max-width: 608px) 100vw, 608px" />
													<ul class="rt-shapes">
														<li class="shape shape1 rt-mouse-parallax"><img loading="lazy"
																decoding="async" width="138" height="120"
																src="wp-content/uploads/2023/08/hero-shape-8.svg"
																class="attachment-full size-full wp-image-3517"
																alt="" /></li>
														<li class="shape shape2 rt-mouse-parallax">
															<div data-depth="4.00"><img loading="lazy" decoding="async"
																	width="114" height="114"
																	src="wp-content/uploads/2023/08/about-shape-2.svg"
																	class="attachment-full size-full wp-image-3474"
																	alt="" /></div>
														</li>
														<li class="shape shape3 rt-mouse-parallax">
															<div data-depth="4.00"><img loading="lazy" decoding="async"
																	width="208" height="90"
																	src="wp-content/uploads/2023/08/hero-shape-10.png"
																	class="attachment-full size-full wp-image-3514"
																	alt="" /></div>
														</li>
														<li class="shape shape4 rt-mouse-parallax">
															<div data-depth="4.00"><img loading="lazy" decoding="async"
																	width="35" height="35"
																	src="wp-content/uploads/2023/08/hero-shape-14.svg"
																	class="attachment-full size-full wp-image-3520"
																	alt="" /></div>
														</li>
														<li class="shape shape5 rt-mouse-parallax">
															<div data-depth="4.00"><img loading="lazy" decoding="async"
																	width="62" height="57"
																	src="wp-content/uploads/2023/08/hero-shape-11.svg"
																	class="attachment-full size-full wp-image-3519"
																	alt="" /></div>
														</li>
														<li class="shape shape6 rt-mouse-parallax">
															<div data-depth="4.00"><img loading="lazy" decoding="async"
																	width="236" height="134"
																	src="wp-content/uploads/2023/08/hero-shape-12.png"
																	class="attachment-full size-full wp-image-3515"
																	alt="" /></div>
														</li>
														<li class="shape shape7 rt-mouse-parallax"><img loading="lazy"
																decoding="async" width="451" height="283"
																src="wp-content/uploads/2023/08/hero-shape-13.svg"
																class="attachment-full size-full wp-image-3521"
																alt="" /></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section
					class="elementor-section elementor-top-section elementor-element elementor-element-27f90319 elementor-section-boxed elementor-section-height-default elementor-section-height-default rt-parallax-bg-no"
					data-id="27f90319" data-element_type="section">
					<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4c4765f3"
							data-id="4c4765f3" data-element_type="column">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-3c6bd9fe elementor-invisible elementor-widget elementor-widget-rt-title"
									data-id="3c6bd9fe" data-element_type="widget" data-widget_type="rt-title.default">
									<div class="elementor-widget-container">
										<div class="rt-section-title style2">
											<div class="title-holder">
												<div class="entry-text hide fadeInUp" data-wow-delay="0.6s"
													data-wow-duration="1.2s">
													<p>Trusted By Over <span>13,400</span> Students &amp;
														Organisation<br />Recommended Around The World</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-element elementor-element-1364f722 elementor-invisible elementor-widget elementor-widget-rt-logo-slider"
									data-id="1364f722" data-element_type="widget"
									data-widget_type="rt-logo-slider.default">
									<div class="elementor-widget-container">
										<div class="rt-logo-default rt-logo-grid">
											<div class="row g-4">
												<div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-xs-6 hide fadeInUp"
													data-wow-delay="0.2s" data-wow-duration="1.2s">
													<div class="logo-box gray">
														<a href="#" aria-label="Logo Link" target="_blank"><img
																loading="lazy" decoding="async" width="89" height="78"
																src="wp-content/uploads/2023/08/brand-img14.svg"
																class="attachment-full size-full" alt="" /></a>
													</div>
												</div>
												<div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-xs-6 hide fadeInUp"
													data-wow-delay="0.4s" data-wow-duration="1.21s">
													<div class="logo-box gray">
														<a href="#" aria-label="Logo Link" target="_blank"><img
																loading="lazy" decoding="async" width="82" height="82"
																src="wp-content/uploads/2023/08/brand-img13.svg"
																class="attachment-full size-full" alt="" /></a>
													</div>
												</div>
												<div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-xs-6 hide fadeInUp"
													data-wow-delay="0.6s" data-wow-duration="1.22s">
													<div class="logo-box gray">
														<a href="#" aria-label="Logo Link" target="_blank"><img
																loading="lazy" decoding="async" width="90" height="77"
																src="wp-content/uploads/2023/08/brand-img15.svg"
																class="attachment-full size-full" alt="" /></a>
													</div>
												</div>
												<div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-xs-6 hide fadeInUp"
													data-wow-delay="0.8s" data-wow-duration="1.23s">
													<div class="logo-box gray">
														<a href="#" aria-label="Logo Link" target="_blank"><img
																loading="lazy" decoding="async" width="77" height="85"
																src="wp-content/uploads/2023/08/brand-img16.svg"
																class="attachment-full size-full" alt="" /></a>
													</div>
												</div>
												<div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-xs-6 hide fadeInUp"
													data-wow-delay="1s" data-wow-duration="1.24s">
													<div class="logo-box gray">
														<a href="#" aria-label="Logo Link" target="_blank"><img
																loading="lazy" decoding="async" width="104" height="85"
																src="wp-content/uploads/2023/08/brand-img17.svg"
																class="attachment-full size-full" alt="" /></a>
													</div>
												</div>
												<div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-xs-6 hide fadeInUp"
													data-wow-delay="1.2s" data-wow-duration="1.25s">
													<div class="logo-box gray">
														<a href="#" aria-label="Logo Link" target="_blank"><img
																loading="lazy" decoding="async" width="96" height="88"
																src="wp-content/uploads/2023/08/brand-img18.svg"
																class="attachment-full size-full" alt="" /></a>
													</div>
												</div>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section
					class="elementor-section elementor-top-section elementor-element elementor-element-7e2982d8 elementor-section-boxed elementor-section-height-default elementor-section-height-default rt-parallax-bg-no"
					data-id="7e2982d8" data-element_type="section">
					<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3f673f48"
							data-id="3f673f48" data-element_type="column">
							<div class="elementor-widget-wrap elementor-element-populated">
								<section
									class="elementor-section elementor-inner-section elementor-element elementor-element-6533ad07 elementor-section-boxed elementor-section-height-default elementor-section-height-default rt-parallax-bg-no"
									data-id="6533ad07" data-element_type="section">
									<div class="elementor-container elementor-column-gap-default">
										<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4e968985"
											data-id="4e968985" data-element_type="column">
											<div class="elementor-widget-wrap elementor-element-populated">
												<div class="elementor-element elementor-element-46d8b480 elementor-invisible elementor-widget elementor-widget-rt-info-box"
													data-id="46d8b480" data-element_type="widget"
													data-widget_type="rt-info-box.default">
													<div class="elementor-widget-container">
														<div class="rt-info-box rt-info-1 hide fadeInUp"
															data-wow-delay="0.2s" data-wow-duration="1.2s">
															<div class="rt-info-item media-icon">
																<div class="rt-content">
																	<h2 class="rt-title">12 Years Of</h2>
																	<div class="rt-text">Experiences</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="elementor-element elementor-element-61f77673 elementor-invisible elementor-widget elementor-widget-rt-image-animation"
													data-id="61f77673" data-element_type="widget"
													data-widget_type="rt-image-animation.default">
													<div class="elementor-widget-container">

														<div class="rt-image-banner rt-banner-style-1">
															<div class="rt-banner-item hide fadeInUp"
																data-wow-delay="0.2s" data-wow-duration="1.2s">
																<div class="rt-image bouncing-bubble-animation"><img
																		loading="lazy" decoding="async" width="300"
																		height="384"
																		src="wp-content/uploads/2023/08/goal-img-1.png"
																		class="attachment-full size-full wp-image-3525"
																		alt=""
																		srcset="https://www.radiustheme.com/demo/wordpress/themes/quiklearn/wp-content/uploads/2023/08/goal-img-1.png 300w, https://www.radiustheme.com/demo/wordpress/themes/quiklearn/wp-content/uploads/2023/08/goal-img-1-234x300.png 234w"
																		sizes="(max-width: 300px) 100vw, 300px" /></div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-46857994"
											data-id="46857994" data-element_type="column">
											<div class="elementor-widget-wrap elementor-element-populated">
												<div class="elementor-element elementor-element-9ca7ef7 elementor-invisible elementor-widget elementor-widget-rt-image-animation"
													data-id="9ca7ef7" data-element_type="widget"
													data-widget_type="rt-image-animation.default">
													<div class="elementor-widget-container">

														<div class="rt-image-banner rt-banner-style-1">
															<div class="rt-banner-item hide fadeInUp"
																data-wow-delay="0.2s" data-wow-duration="1.2s">
																<div class="rt-image bouncing-bubble-animation"><img
																		loading="lazy" decoding="async" width="320"
																		height="376"
																		src="wp-content/uploads/2023/08/goal-img-2.png"
																		class="attachment-full size-full wp-image-3526"
																		alt=""
																		srcset="https://www.radiustheme.com/demo/wordpress/themes/quiklearn/wp-content/uploads/2023/08/goal-img-2.png 320w, https://www.radiustheme.com/demo/wordpress/themes/quiklearn/wp-content/uploads/2023/08/goal-img-2-255x300.png 255w"
																		sizes="(max-width: 320px) 100vw, 320px" /></div>
															</div>
														</div>
													</div>
												</div>
												<div class="elementor-element elementor-element-714d096d elementor-invisible elementor-widget elementor-widget-rt-counter"
													data-id="714d096d" data-element_type="widget"
													data-widget_type="rt-counter.default">
													<div class="elementor-widget-container">
														<div class="rt-counter-box rt-counter-2">
															<div class="rt-item hide fadeInUp" data-wow-delay="0.2s"
																data-wow-duration="1.2s">
																<div class="rt-media">
																	<svg xmlns="http://www.w3.org/2000/svg"
																		xmlns:xlink="http://www.w3.org/1999/xlink"
																		width="75" height="73" viewBox="0 0 75 73"
																		fill="none">
																		<circle cx="21" cy="21" r="20.25"
																			fill="url(#pattern0)" stroke="white"
																			stroke-width="1.5"></circle>
																		<circle cx="28" cy="52" r="20.25"
																			fill="url(#pattern1)" stroke="white"
																			stroke-width="1.5"></circle>
																		<circle cx="54" cy="30" r="20.25"
																			fill="url(#pattern2)" stroke="white"
																			stroke-width="1.5"></circle>
																		<defs>
																			<pattern id="pattern0"
																				patternContentUnits="objectBoundingBox"
																				width="1" height="1">
																				<use xlink:href="#image0_203_23"
																					transform="scale(0.005)"></use>
																			</pattern>
																			<pattern id="pattern1"
																				patternContentUnits="objectBoundingBox"
																				width="1" height="1">
																				<use xlink:href="#image1_203_23"
																					transform="scale(0.005)"></use>
																			</pattern>
																			<pattern id="pattern2"
																				patternContentUnits="objectBoundingBox"
																				width="1" height="1">
																				<use xlink:href="#image2_203_23"
																					transform="scale(0.005)"></use>
																			</pattern>
																			<image id="image0_203_23" width="200"
																				height="200"
																				xlink:href="data:image/png;base64,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">
																			</image>
																			<image id="image1_203_23" width="200"
																				height="200"
																				xlink:href="data:image/png;base64,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">
																			</image>
																			<image id="image2_203_23" width="200"
																				height="200"
																				xlink:href="data:image/png;base64,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">
																			</image>
																		</defs>
																	</svg>
																</div>
																<div class="rt-content">
																	<div class="rt-counter">
																		<h3 class="counter-number"><span class="counter"
																				data-num="35" data-rtspeed="5000"
																				data-rtsteps="10">35</span><span
																				class="counter-unit">K+</span></h3>
																	</div>
																	<h4 class="rt-title">Positive Reviews</h4>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
						<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3832ae09"
							data-id="3832ae09" data-element_type="column">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-1e683952 elementor-invisible elementor-widget elementor-widget-rt-title"
									data-id="1e683952" data-element_type="widget" data-widget_type="rt-title.default">
									<div class="elementor-widget-container">
										<div class="rt-section-title style2">
											<div class="title-holder">
												<span class="sub-title hide fadeInUp" data-wow-delay="0.2s"
													data-wow-duration="1.2s">WHAT’S OUR MAIN GOAL</span>
												<h2 class="entry-title hide fadeInUp" data-wow-delay="0.4s"
													data-wow-duration="1.2s">Take The Next Step Toward Your<br> Personal
													And Professional Goals With Quiklearn<span class="shape-line"><img
															decoding="async"
															src="wp-content/themes/quiklearn/assets/element/underline.svg"
															width="167" height="15" alt=""></span></h2>
												<div class="entry-text hide fadeInUp" data-wow-delay="0.6s"
													data-wow-duration="1.2s">
													<p>When An Unknown Printer Took A Galley Offer Area Type And
														Scrambled To Make A Type Specimen Book Has Survived When An
														Unknown Printer Took A Galley Offer Area Type And Scrambled To
														Make.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-element elementor-element-20134379 elementor-invisible elementor-widget elementor-widget-rt-info-box"
									data-id="20134379" data-element_type="widget"
									data-widget_type="rt-info-box.default">
									<div class="elementor-widget-container">
										<div class="rt-info-box rt-info-1 hide fadeInUp" data-wow-delay="0.2s"
											data-wow-duration="1.2s">
											<div class="rt-info-item media-icon">
												<div class="rt-media">
													<span class="rt-icon"><i class="icon-quiklearn-learner"></i></span>
												</div>
												<div class="rt-content">
													<h3 class="rt-title">Learn From Experts</h3>
													<div class="rt-text">Motype Specimen Book Has Survived When <br>An
														Unknown Printer Took</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-element elementor-element-79fb43e0 elementor-invisible elementor-widget elementor-widget-rt-info-box"
									data-id="79fb43e0" data-element_type="widget"
									data-widget_type="rt-info-box.default">
									<div class="elementor-widget-container">
										<div class="rt-info-box rt-info-1 hide fadeInUp" data-wow-delay="0.2s"
											data-wow-duration="1.2s">
											<div class="rt-info-item media-icon">
												<div class="rt-media">
													<span class="rt-icon"><i
															class=" icon-quiklearn-top-course"></i></span>
												</div>
												<div class="rt-content">
													<h3 class="rt-title">Learn From Experts</h3>
													<div class="rt-text">Motype Specimen Book Has Survived When <br>An
														Unknown Printer Took</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section
					class="elementor-section elementor-top-section elementor-element elementor-element-52167f6c elementor-section-boxed elementor-section-height-default elementor-section-height-default rt-parallax-bg-no"
					data-id="52167f6c" data-element_type="section"
					data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7ade4854"
							data-id="7ade4854" data-element_type="column">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-4a1d8d48 elementor-invisible elementor-widget elementor-widget-rt-title"
									data-id="4a1d8d48" data-element_type="widget" data-widget_type="rt-title.default">
									<div class="elementor-widget-container">
										<div class="rt-section-title style2">
											<div class="title-holder">
												<span class="sub-title hide fadeInUp" data-wow-delay="0.2s"
													data-wow-duration="1.2s">TOP CLASS COURSES</span>
												<h2 class="entry-title hide fadeInUp" data-wow-delay="0.4s"
													data-wow-duration="1.2s">Explore 40000+ Free Online Courses<span
														class="shape-line"><img decoding="async"
															src="wp-content/themes/quiklearn/assets/element/underline.svg"
															width="167" height="15" alt=""></span></h2>
												<div class="entry-text hide fadeInUp" data-wow-delay="0.6s"
													data-wow-duration="1.2s">
													<p>When An Unknown Printer Took A Galley Of Type And Scrambled It To
														Make A Type Specimen<br />Book It Has Survived Not Only Five
														Centuries</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<section
									class="elementor-section elementor-inner-section elementor-element elementor-element-51ac5cff elementor-section-boxed elementor-section-height-default elementor-section-height-default rt-parallax-bg-no"
									data-id="51ac5cff" data-element_type="section">


									<div class="elementor-container elementor-column-gap-default">
										<?php foreach ($rows as $row):



											?>
											<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-5d97271b"
												data-id="5d97271b" data-element_type="column">

												<div class="elementor-widget-wrap elementor-element-populated">
													<div class="elementor-element elementor-element-4c6e7ac6 elementor-invisible elementor-widget elementor-widget-rt-course-cat"
														data-id="4c6e7ac6" data-element_type="widget"
														data-widget_type="rt-course-cat.default">

														<div class="elementor-widget-container">
															<div class="rt-course-category rt-course-cat-1">
																<div class="rt-cat-item hide fadeInUp" data-wow-delay="0.2s"
																	data-wow-duration="1.2s">
																	<div class="rt-media">
																		<span class="rt-icon"><i
																				class=" icon-quiklearn-graphic-design"></i></span>
																		<div class="course-icon-shape">
																			<span class="shape">
																				<img loading="lazy" decoding="async"
																					width="41" height="41" loading='lazy'
																					src="wp-content/themes/quiklearn/assets/element/course-cat-1.svg"
																					alt="cat shape">
																			</span>
																		</div>
																	</div>

																	<div class="rt-course-cat">
																		<h3 class="rt-cat-title"><a
																				href="pages/grid_cours.php?page-nr=1&category=<?= $row->getCategory() ?>">
																				<?= $row->getNom() ?></a></h3>
																		<span
																			class="rt-course-count"><?= $row->getCounts(); ?>Course</span>
																	</div>

																	<div class="course-content-shape">
																		<span class="shape">
																			<img loading="lazy" decoding="async" width="118"
																				height="59" loading='lazy'
																				src="wp-content/themes/quiklearn/assets/element/course-cat.svg"
																				alt="cat shape">
																		</span>
																	</div>
																</div>
															</div>
														</div>


													</div>

												</div>
											</div>
										<?php endforeach; ?>
									</div>

								</section>
							</div>
						</div>
					</div>
				</section>
				<section
					class="elementor-section elementor-top-section elementor-element elementor-element-2d3d6e77 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
					data-id="2d3d6e77" data-element_type="section"
					data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-1541d768"
							data-id="1541d768" data-element_type="column">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-c9ad736 elementor-invisible elementor-widget elementor-widget-rt-info-box"
									data-id="c9ad736" data-element_type="widget" data-widget_type="rt-info-box.default">
									<div class="elementor-widget-container">
										<div class="rt-info-box rt-info-3 hide fadeInUp" data-wow-delay="0.2s"
											data-wow-duration="1.2s">
											<div class="rt-info-item media-icon">
												<div class="rt-media">
													<span class="rt-icon"><i
															class=" icon-quiklearn-achievement"></i></span>
													<span class="rt-shape-icon"><svg xmlns="http://www.w3.org/2000/svg"
															width="68" height="20" viewBox="0 0 68 20" fill="none">
															<ellipse cx="34" cy="9.78577" rx="34" ry="9.5"
																fill="#392A56"></ellipse>
														</svg></span>

												</div>
												<div class="rt-content">
													<h3 class="rt-title">Get Achieve New Level</h3>
													<div class="rt-text">It is a longe established factey that reader
														will bee Follow readae con page.</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-5c5272bb"
							data-id="5c5272bb" data-element_type="column">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-d85d20c elementor-invisible elementor-widget elementor-widget-rt-info-box"
									data-id="d85d20c" data-element_type="widget" data-widget_type="rt-info-box.default">
									<div class="elementor-widget-container">
										<div class="rt-info-box rt-info-3 hide fadeInUp" data-wow-delay="0.2s"
											data-wow-duration="1.2s">
											<div class="rt-info-item media-icon">
												<div class="rt-media">
													<span class="rt-icon"><i class=" icon-quiklearn-bulb"></i></span>
													<span class="rt-shape-icon"><svg xmlns="http://www.w3.org/2000/svg"
															width="68" height="20" viewBox="0 0 68 20" fill="none">
															<ellipse cx="34" cy="9.78577" rx="34" ry="9.5"
																fill="#392A56"></ellipse>
														</svg></span>

												</div>
												<div class="rt-content">
													<h3 class="rt-title">Learn With Effectivey</h3>
													<div class="rt-text">It is a longe established factey that reader
														will bee Follow readae con page.</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-55060997"
							data-id="55060997" data-element_type="column">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-13f2c4bf elementor-invisible elementor-widget elementor-widget-rt-info-box"
									data-id="13f2c4bf" data-element_type="widget"
									data-widget_type="rt-info-box.default">
									<div class="elementor-widget-container">
										<div class="rt-info-box rt-info-3 hide fadeInUp" data-wow-delay="0.2s"
											data-wow-duration="1.2s">
											<div class="rt-info-item media-icon">
												<div class="rt-media">
													<span class="rt-icon"><i class=" icon-quiklearn-award"></i></span>
													<span class="rt-shape-icon"><svg xmlns="http://www.w3.org/2000/svg"
															width="68" height="20" viewBox="0 0 68 20" fill="none">
															<ellipse cx="34" cy="9.78577" rx="34" ry="9.5"
																fill="#392A56"></ellipse>
														</svg></span>

												</div>
												<div class="rt-content">
													<h3 class="rt-title">Award Winning Team</h3>
													<div class="rt-text">It is a longe established factey that reader
														will bee Follow readae con page.</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section
					class="elementor-section elementor-top-section elementor-element elementor-element-5399763a elementor-section-boxed elementor-section-height-default elementor-section-height-default rt-parallax-bg-no"
					data-id="5399763a" data-element_type="section">
					<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-50ae741f"
							data-id="50ae741f" data-element_type="column">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-73063e70 elementor-invisible elementor-widget elementor-widget-rt-title"
									data-id="73063e70" data-element_type="widget" data-widget_type="rt-title.default">
									<div class="elementor-widget-container">
										<div class="rt-section-title style2">
											<div class="title-holder">
												<span class="sub-title hide fadeInUp" data-wow-delay="0.2s"
													data-wow-duration="1.2s">10,000+ UNIQUE COURSES</span>
												<h2 class="entry-title hide fadeInUp" data-wow-delay="0.4s"
													data-wow-duration="1.2s">You May Also Like More Courses<span
														class="shape-line"><img decoding="async"
															src="wp-content/themes/quiklearn/assets/element/underline.svg"
															width="167" height="15" alt=""></span></h2>
												<div class="entry-text hide fadeInUp" data-wow-delay="0.6s"
													data-wow-duration="1.2s">
													<p>When An Unknown Printer Took A Galley Of Type And Scrambled It To
														Make A Type Specimen<br />Book It Has Survived Not Only Five
														Centuries</p>
												</div>
											</div>
										</div>
									</div>
								</div>

								<script src="https://cdn.tailwindcss.com"></script>
								</head>

								<body class="bg-gray-50 min-h-screen p-8 my-8">
									<div
										class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
										<!-- Course Card -->

										<?php foreach ($allcours as $allcour):

											$cours = $allcour[0];
											$category = $allcour[1];
											$utilisateur = $allcour[2];
											$tags = $allcour[3];
											$coursvideo = $allcour[4];

											$imagePath = $cours->getImageCours();
											?>
											<div
												class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 transform hover:scale-105">
												<!-- Course Image -->
												<div class="relative">
													<img src="<?= substr($imagePath, 3); ?>" alt="Course thumbnail"
														class="w-full max-h-[200px] object-cover">
													<span
														class="absolute top-4 left-4 bg-white px-3 py-1 text-sm rounded-md font-semibold text-gray-700 shadow-md">
														<?= $category->getCategoryName() ?>
													</span>
												</div>

												<!-- Course Details -->
												<div class="p-6">
													<!-- Student and Lesson Count -->
													<div class="flex gap-4 mb-4 text-gray-600 text-sm">
														<div class="flex items-center">
															<svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor"
																viewBox="0 0 24 24">
																<path stroke-linecap="round" stroke-linejoin="round"
																	stroke-width="2"
																	d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
																</path>
															</svg>
															27 Students
														</div>
														<div class="flex items-center">
															<svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor"
																viewBox="0 0 24 24">
																<path stroke-linecap="round" stroke-linejoin="round"
																	stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
															</svg>
															8 Lessons
														</div>
													</div>

													<!-- Course Title -->
													<h3 class="text-xl font-semibold text-gray-900 mb-2">
														<?= $cours->getDescription() ?>
													</h3>

													<!-- Instructor -->
													<div class="text-gray-600 mb-4">- <?= $utilisateur->getNom() ?> </div>

													<!-- Rating and Price -->
													<div class="flex justify-between items-center">
														<div class="flex text-yellow-400">
															<!-- Star Ratings -->
															<?php for ($j = 0; $j < 5; $j++): ?>
																<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
																	<path
																		d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
																	</path>
																</svg>
															<?php endfor; ?>
														</div>

														<div class="flex items-center gap-2">
															<span class="text-gray-400 line-through">$75.00</span>
															<span class="text-gray-900 text-xl font-bold">$55.00</span>
														</div>
													</div>
												</div>
											</div>
										<?php endforeach; ?>

									</div>

								</body>

</html>
</div>
</div>
</div>
</section>
<section
	class="elementor-section elementor-top-section elementor-element elementor-element-71943ae1 elementor-section-boxed elementor-section-height-default elementor-section-height-default rt-parallax-bg-no"
	data-id="71943ae1" data-element_type="section"
	data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
	<div class="elementor-container elementor-column-gap-default">
		<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-57144119"
			data-id="57144119" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
				<div class="elementor-element elementor-element-7a0e85b4 elementor-invisible elementor-widget elementor-widget-rt-title-with-text"
					data-id="7a0e85b4" data-element_type="widget" data-widget_type="rt-title-with-text.default">
					<div class="elementor-widget-container">
						<div class="rt-title-text">
							<div class="entry-subtitle hide fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">WHY
								CHOOSE US<span class="line"></span></div>
							<h2 class="entry-title hide fadeInUp" data-wow-delay="0.4s" data-wow-duration="1.2s">Don’t
								Know How To Start With<br> Quiklearn
								Courses<span class="shape-line"><img decoding="async"
										src="wp-content/themes/quiklearn/assets/element/underline.svg" width="167"
										height="15" alt=""></span></h2>

							<div class="entry-content hide fadeInUp" data-wow-delay="0.6s" data-wow-duration="1.2s">
								<p>When An Unknown Printer Took A Galley Offer Area Type And Scrambled
									To Make A Type Specimen Book .</p>
							</div>

							<ul class="feature-list list-two-col hide fadeInUp" data-wow-delay="0.8s"
								data-wow-duration="1.2s">
								<li>
									<i style="color: #ffffff" class="fas fa-check"></i>Special Lessons
									And Courses
								</li>
								<li>
									<i style="color: #ffffff" class="fas fa-check"></i>World Largest
									Language
								</li>
								<li>
									<i style="color: #ffffff" class="fas fa-check"></i>15 Language For
									Beginners
								</li>
								<li>
									<i style="color: #ffffff" class="fas fa-check"></i>Get Every General
									Answers
								</li>
								<li>
									<i style="color: #ffffff" class="fas fa-check"></i>A Residential
									Campus
								</li>
								<li>
									<i style="color: #ffffff" class="fas fa-check"></i>A Residential
									Campus
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-11bb5d1e elementor-invisible elementor-widget elementor-widget-rt-button"
					data-id="11bb5d1e" data-element_type="widget" data-widget_type="rt-button.default">
					<div class="elementor-widget-container">
						<div class="rt-button hide fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">
							<a class="button-link button-style-1" href="courses/index.html">
								<span class="button-text button-text-right">Explore All Courses</span>
								<span class="icon icon-right"><i class=" icon-quiklearn-right-arrow"></i></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-45b3bb6d"
			data-id="45b3bb6d" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
				<div class="elementor-element elementor-element-6767d11b elementor-widget__width-auto elementor-absolute elementor-invisible elementor-widget elementor-widget-rt-image-animation"
					data-id="6767d11b" data-element_type="widget"
					data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
					data-widget_type="rt-image-animation.default">
					<div class="elementor-widget-container">

						<div class="rt-image-banner rt-banner-style-1">
							<div class="rt-banner-item hide fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">
								<div class="rt-image bouncing-bubble-animation"><img loading="lazy" decoding="async"
										width="299" height="299"
										src="wp-content/uploads/2023/08/why-choose-us-img-2.png"
										class="attachment-full size-full wp-image-3557" alt=""
										srcset="https://www.radiustheme.com/demo/wordpress/themes/quiklearn/wp-content/uploads/2023/08/why-choose-us-img-2.png 299w, https://www.radiustheme.com/demo/wordpress/themes/quiklearn/wp-content/uploads/2023/08/why-choose-us-img-2-100x100.png 100w, https://www.radiustheme.com/demo/wordpress/themes/quiklearn/wp-content/uploads/2023/08/why-choose-us-img-2-150x150.png 150w"
										sizes="(max-width: 299px) 100vw, 299px" /></div>
							</div>
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-22a6490a elementor-widget__width-auto elementor-absolute elementor-invisible elementor-widget elementor-widget-rt-counter"
					data-id="22a6490a" data-element_type="widget"
					data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="rt-counter.default">
					<div class="elementor-widget-container">
						<div class="rt-counter-box rt-counter-3">
							<div class="rt-item hide fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">
								<div class="rt-content">
									<div class="rt-counter">
										<h3 class="counter-number"><span class="counter" data-num="15"
												data-rtspeed="5000" data-rtsteps="10">15</span><span
												class="counter-unit">%</span></h3>
									</div>
									<h4 class="rt-title">Discount</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-50130d10 elementor-invisible elementor-widget elementor-widget-rt-image-animation"
					data-id="50130d10" data-element_type="widget" data-widget_type="rt-image-animation.default">
					<div class="elementor-widget-container">

						<div class="rt-image-banner rt-banner-style-2 rt-image-parallax">
							<div class="rt-banner-item hide fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">
								<div class="rt-image">
									<img loading="lazy" decoding="async" width="439" height="439"
										src="wp-content/uploads/2023/08/why-choose-us-img-1.png"
										class="attachment-full size-full wp-image-3556" alt=""
										srcset="https://www.radiustheme.com/demo/wordpress/themes/quiklearn/wp-content/uploads/2023/08/why-choose-us-img-1.png 439w, https://www.radiustheme.com/demo/wordpress/themes/quiklearn/wp-content/uploads/2023/08/why-choose-us-img-1-300x300.png 300w, https://www.radiustheme.com/demo/wordpress/themes/quiklearn/wp-content/uploads/2023/08/why-choose-us-img-1-100x100.png 100w, https://www.radiustheme.com/demo/wordpress/themes/quiklearn/wp-content/uploads/2023/08/why-choose-us-img-1-150x150.png 150w"
										sizes="(max-width: 439px) 100vw, 439px" />
									<ul class="rt-shapes">
										<li class="shape shape1 rt-mouse-parallax">
											<div data-depth="4.00"><img loading="lazy" decoding="async" width="68"
													height="67" src="wp-content/uploads/2023/08/shape-1.svg"
													class="attachment-full size-full wp-image-3558" alt="" /></div>
										</li>
										<li class="shape shape2 rt-mouse-parallax">
											<div data-depth="4.00"><img loading="lazy" decoding="async" width="111"
													height="88" src="wp-content/uploads/2023/08/about-shape-9.svg"
													class="attachment-full size-full wp-image-3481" alt="" /></div>
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

	</div>
	</div><!--#content-->

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
								<div id="media_image-2" class="widget widget_media_image"><img width="172" height="46"
										src="wp-content/uploads/2023/08/logo-light.svg"
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
												<a href="about/index.html">About</a>
											</li>
											<li id="menu-item-3419"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3419">
												<a href="contact/index.html">Contact</a>
											</li>
											<li id="menu-item-3156"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3156">
												<a href="refund/index.html">Refund</a>
											</li>
											<li id="menu-item-3157"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3157">
												<a href="help-center/index.html">Help Center</a>
											</li>
											<li id="menu-item-3420"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3420">
												<a href="refund_returns/index.html">Returns Policy</a>
											</li>
											<li id="menu-item-3421"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3421">
												<a href="lp-term-conditions/index.html">Term Conditions</a>
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
												<a href="courses/the-complete-android-java-developer-course/index.html">Life
													Coach</a>
											</li>
											<li id="menu-item-3413"
												class="menu-item menu-item-type-post_type menu-item-object-lp_course menu-item-3413">
												<a href="courses/the-complete-android-development-course/index.html">Business
													Coach</a>
											</li>
											<li id="menu-item-3414"
												class="menu-item menu-item-type-post_type menu-item-object-lp_course menu-item-3414">
												<a
													href="courses/the-complete-wordpress-plugin-development-course/index.html">Health
													Coach</a>
											</li>
											<li id="menu-item-3415"
												class="menu-item menu-item-type-post_type menu-item-object-lp_course menu-item-3415">
												<a
													href="courses/the-complete-react-native-course/index.html">Development</a>
											</li>
											<li id="menu-item-3416"
												class="menu-item menu-item-type-post_type menu-item-object-lp_course menu-item-3416">
												<a href="courses/jquery-and-javascript-fundamental-course/index.html">Web
													Design</a>
											</li>
											<li id="menu-item-3417"
												class="menu-item menu-item-type-post_type menu-item-object-lp_course menu-item-3417">
												<a href="courses/the-complete-ios-development-course/index.html">SEO
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
													name='__fluent_form_embded_post_id' value='3350' /><input
													type="hidden" id="_fluentform_2_fluentformnonce"
													name="_fluentform_2_fluentformnonce" value="9f341108e0" /><input
													type="hidden" name="_wp_http_referer"
													value="/demo/wordpress/themes/quiklearn/" />
												<div data-name="ff_cn_id_1"
													class='ff-t-container ff-column-container ff_columns_total_2 newsletter-form '>
													<div class='ff-t-cell ff-t-column-1' style='flex-basis: 90%;'>
														<div class='ff-el-group'>
															<div class='ff-el-input--content'><input type="email"
																	name="email" id="ff_2_email"
																	class="ff-el-form-control"
																	placeholder="Your Email Address" data-name="email"
																	aria-invalid="false" aria-required=true></div>
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
												<div class='ff-el-group  ff-custom_html' data-name="custom_html-2_2">
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
								<div class="copyright">&copy; 2025 quiklearn. All Rights Reserved by <a target="_blank"
										rel="nofollow" href="http://radiustheme.com/">RadiusTheme</a></div>
							</div>
							<div class="copyright-menu">
								<div id="nav_menu-2" class="widget widget_nav_menu">
									<div class="menu-copyright-menu-container">
										<ul id="menu-copyright-menu" class="menu">
											<li id="menu-item-3410"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-3410">
												<a rel="privacy-policy" href="privacy-policy/index.html">Privacy
													Policy</a>
											</li>
											<li id="menu-item-3411"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3411">
												<a href="lp-term-conditions/index.html">Term Conditions</a>
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
						href="../../my-account/login.php">here</a></div>
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



	<script type="text/javascript" src="wp-includes/js/dist/hooks.min.js" id="wp-hooks-js"></script>
	<script type="text/javascript" src="wp-includes/js/dist/i18n.min.js" id="wp-i18n-js"></script>
	<script type="text/javascript" id="wp-i18n-js-after">
		/* <![CDATA[ */
		wp.i18n.setLocaleData({ 'text direction\u0004ltr': ['ltr'] });
		/* ]]> */
	</script>

	<script type="text/javascript" id="etn-public-js-extra">
		/* <![CDATA[ */
		var localized_data_obj = { "empty": "Please fill the field", "invalid": "Invalid input", "only_number": "Only number allowed", "text": "Please fill the field", "number": "Please input a number", "date": "Please fill the field", "radio": "Please check the field", "expired": "Expired", "scanner_common_msg": "Something went wrong! Please try again.", "ajax_url": "https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn\/wp-admin\/admin-ajax.php", "site_url": "https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn", "admin_url": "https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn\/wp-admin\/", "assets_url": "https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn\/wp-content\/plugins\/wp-event-solution\/assets", "evnetin_pro_active": "", "locale_name": "en-us", "start_of_week": "1", "author_id": "0", "ticket_scanner_link": "https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn\/wp-admin\/edit.php?post_type=etn-attendee", "post_id": "3350", "zoom_connection_check_nonce": "ebb9a6e9e8", "ticket_status_nonce": "8927768ed6", "zoom_module": "yes", "attendee_module": "yes", "currency_list": [{ "name": "AED", "symbol": "&#x62f;.&#x625;", "country": "United Arab Emirates dirham" }, { "name": "AFN", "symbol": "&#x60b;", "country": "Afghan afghani" }, { "name": "ALL", "symbol": "L", "country": "Albanian lek" }, { "name": "AMD", "symbol": "AMD", "country": "Armenian dram" }, { "name": "ANG", "symbol": "&fnof;", "country": "Netherlands Antillean guilder" }, { "name": "AOA", "symbol": "Kz", "country": "Angolan kwanza" }, { "name": "ARS", "symbol": "&#36;", "country": "Argentine peso" }, { "name": "AUD", "symbol": "&#36;", "country": "Australian dollar" }, { "name": "AWG", "symbol": "Afl.", "country": "Aruban florin" }, { "name": "AZN", "symbol": "AZN", "country": "Azerbaijani manat" }, { "name": "BAM", "symbol": "KM", "country": "Bosnia and Herzegovina convertible mark" }, { "name": "BBD", "symbol": "&#36;", "country": "Barbadian dollar" }, { "name": "BDT", "symbol": "&#2547;&nbsp;", "country": "Bangladeshi taka" }, { "name": "BGN", "symbol": "&#1083;&#1074;.", "country": "Bulgarian lev" }, { "name": "BHD", "symbol": ".&#x62f;.&#x628;", "country": "Bahraini dinar" }, { "name": "BIF", "symbol": "Fr", "country": "Burundian franc" }, { "name": "BMD", "symbol": "&#36;", "country": "Bermudian dollar" }, { "name": "BND", "symbol": "&#36;", "country": "Brunei dollar" }, { "name": "BOB", "symbol": "Bs.", "country": "Bolivian boliviano" }, { "name": "BRL", "symbol": "&#82;&#36;", "country": "Brazilian real" }, { "name": "BSD", "symbol": "&#36;", "country": "Bahamian dollar" }, { "name": "BTC", "symbol": "&#3647;", "country": "Bitcoin" }, { "name": "BTN", "symbol": "Nu.", "country": "Bhutanese ngultrum" }, { "name": "BWP", "symbol": "P", "country": "Botswana pula" }, { "name": "BYR", "symbol": "Br", "country": "Belarusian ruble (old)" }, { "name": "BYN", "symbol": "Br", "country": "Belarusian ruble" }, { "name": "BZD", "symbol": "&#36;", "country": "Belize dollar" }, { "name": "CAD", "symbol": "&#36;", "country": "Canadian dollar" }, { "name": "CDF", "symbol": "Fr", "country": "Congolese franc" }, { "name": "CHF", "symbol": "&#67;&#72;&#70;", "country": "Swiss franc" }, { "name": "CLP", "symbol": "&#36;", "country": "Chilean peso" }, { "name": "CNY", "symbol": "&yen;", "country": "Chinese yuan" }, { "name": "COP", "symbol": "&#36;", "country": "Colombian peso" }, { "name": "CRC", "symbol": "&#x20a1;", "country": "Costa Rican col&oacute;n" }, { "name": "CUC", "symbol": "&#36;", "country": "Cuban convertible peso" }, { "name": "CUP", "symbol": "&#36;", "country": "Cuban peso" }, { "name": "CVE", "symbol": "&#36;", "country": "Cape Verdean escudo" }, { "name": "CZK", "symbol": "&#75;&#269;", "country": "Czech koruna" }, { "name": "DJF", "symbol": "Fr", "country": "Djiboutian franc" }, { "name": "DKK", "symbol": "kr.", "country": "Danish krone" }, { "name": "DOP", "symbol": "RD&#36;", "country": "Dominican peso" }, { "name": "DZD", "symbol": "&#x62f;.&#x62c;", "country": "Algerian dinar" }, { "name": "EGP", "symbol": "EGP", "country": "Egyptian pound" }, { "name": "ERN", "symbol": "Nfk", "country": "Eritrean nakfa" }, { "name": "ETB", "symbol": "Br", "country": "Ethiopian birr" }, { "name": "EUR", "symbol": "&euro;", "country": "Euro" }, { "name": "FJD", "symbol": "&#36;", "country": "Fijian dollar" }, { "name": "FKP", "symbol": "&pound;", "country": "Falkland Islands pound" }, { "name": "GBP", "symbol": "&pound;", "country": "Pound sterling" }, { "name": "GEL", "symbol": "&#x20be;", "country": "Georgian lari" }, { "name": "GGP", "symbol": "&pound;", "country": "Guernsey pound" }, { "name": "GHS", "symbol": "&#x20b5;", "country": "Ghana cedi" }, { "name": "GIP", "symbol": "&pound;", "country": "Gibraltar pound" }, { "name": "GMD", "symbol": "D", "country": "Gambian dalasi" }, { "name": "GNF", "symbol": "Fr", "country": "Guinean franc" }, { "name": "GTQ", "symbol": "Q", "country": "Guatemalan quetzal" }, { "name": "GYD", "symbol": "&#36;", "country": "Guyanese dollar" }, { "name": "HKD", "symbol": "&#36;", "country": "Hong Kong dollar" }, { "name": "HNL", "symbol": "L", "country": "Honduran lempira" }, { "name": "HRK", "symbol": "kn", "country": "Croatian kuna" }, { "name": "HTG", "symbol": "G", "country": "Haitian gourde" }, { "name": "HUF", "symbol": "&#70;&#116;", "country": "Hungarian forint" }, { "name": "IDR", "symbol": "Rp", "country": "Indonesian rupiah" }, { "name": "ILS", "symbol": "&#8362;", "country": "Israeli new shekel" }, { "name": "IMP", "symbol": "&pound;", "country": "Manx pound" }, { "name": "INR", "symbol": "&#8377;", "country": "Indian rupee" }, { "name": "IQD", "symbol": "&#x62f;.&#x639;", "country": "Iraqi dinar" }, { "name": "IRR", "symbol": "&#xfdfc;", "country": "Iranian rial" }, { "name": "IRT", "symbol": "&#x062A;&#x0648;&#x0645;&#x0627;&#x0646;", "country": "Iranian toman" }, { "name": "ISK", "symbol": "kr.", "country": "Icelandic kr&oacute;na" }, { "name": "JEP", "symbol": "&pound;", "country": "Jersey pound" }, { "name": "JMD", "symbol": "&#36;", "country": "Jamaican dollar" }, { "name": "JOD", "symbol": "&#x62f;.&#x627;", "country": "Jordanian dinar" }, { "name": "JPY", "symbol": "&yen;", "country": "Japanese yen" }, { "name": "KES", "symbol": "KSh", "country": "Kenyan shilling" }, { "name": "KGS", "symbol": "&#x441;&#x43e;&#x43c;", "country": "Kyrgyzstani som" }, { "name": "KHR", "symbol": "&#x17db;", "country": "Cambodian riel" }, { "name": "KMF", "symbol": "Fr", "country": "Comorian franc" }, { "name": "KPW", "symbol": "&#x20a9;", "country": "North Korean won" }, { "name": "KRW", "symbol": "&#8361;", "country": "South Korean won" }, { "name": "KWD", "symbol": "&#x62f;.&#x643;", "country": "Kuwaiti dinar" }, { "name": "KYD", "symbol": "&#36;", "country": "Cayman Islands dollar" }, { "name": "KZT", "symbol": "&#8376;", "country": "Kazakhstani tenge" }, { "name": "LAK", "symbol": "&#8365;", "country": "Lao kip" }, { "name": "LBP", "symbol": "&#x644;.&#x644;", "country": "Lebanese pound" }, { "name": "LKR", "symbol": "&#xdbb;&#xdd4;", "country": "Sri Lankan rupee" }, { "name": "LRD", "symbol": "&#36;", "country": "Liberian dollar" }, { "name": "LSL", "symbol": "L", "country": "Lesotho loti" }, { "name": "LYD", "symbol": "&#x644;.&#x62f;", "country": "Libyan dinar" }, { "name": "MAD", "symbol": "&#x62f;.&#x645;.", "country": "Moroccan dirham" }, { "name": "MDL", "symbol": "MDL", "country": "Moldovan leu" }, { "name": "MGA", "symbol": "Ar", "country": "Malagasy ariary" }, { "name": "MKD", "symbol": "&#x434;&#x435;&#x43d;", "country": "Macedonian denar" }, { "name": "MMK", "symbol": "Ks", "country": "Burmese kyat" }, { "name": "MNT", "symbol": "&#x20ae;", "country": "Mongolian t&ouml;gr&ouml;g" }, { "name": "MOP", "symbol": "P", "country": "Macanese pataca" }, { "name": "MRU", "symbol": "UM", "country": "Mauritanian ouguiya" }, { "name": "MUR", "symbol": "&#x20a8;", "country": "Mauritian rupee" }, { "name": "MVR", "symbol": ".&#x783;", "country": "Maldivian rufiyaa" }, { "name": "MWK", "symbol": "MK", "country": "Malawian kwacha" }, { "name": "MXN", "symbol": "&#36;", "country": "Mexican peso" }, { "name": "MYR", "symbol": "&#82;&#77;", "country": "Malaysian ringgit" }, { "name": "MZN", "symbol": "MT", "country": "Mozambican metical" }, { "name": "NAD", "symbol": "N&#36;", "country": "Namibian dollar" }, { "name": "NGN", "symbol": "&#8358;", "country": "Nigerian naira" }, { "name": "NIO", "symbol": "C&#36;", "country": "Nicaraguan c&oacute;rdoba" }, { "name": "NOK", "symbol": "&#107;&#114;", "country": "Norwegian krone" }, { "name": "NPR", "symbol": "&#8360;", "country": "Nepalese rupee" }, { "name": "NZD", "symbol": "&#36;", "country": "New Zealand dollar" }, { "name": "OMR", "symbol": "&#x631;.&#x639;.", "country": "Omani rial" }, { "name": "PAB", "symbol": "B\/.", "country": "Panamanian balboa" }, { "name": "PEN", "symbol": "S\/", "country": "Sol" }, { "name": "PGK", "symbol": "K", "country": "Papua New Guinean kina" }, { "name": "PHP", "symbol": "&#8369;", "country": "Philippine peso" }, { "name": "PKR", "symbol": "&#8360;", "country": "Pakistani rupee" }, { "name": "PLN", "symbol": "&#122;&#322;", "country": "Polish z&#x142;oty" }, { "name": "PRB", "symbol": "&#x440;.", "country": "Transnistrian ruble" }, { "name": "PYG", "symbol": "&#8370;", "country": "Paraguayan guaran&iacute;" }, { "name": "QAR", "symbol": "&#x631;.&#x642;", "country": "Qatari riyal" }, { "name": "RMB", "symbol": "&yen;", "country": "Chinese renminbi" }, { "name": "RON", "symbol": "lei", "country": "Romanian leu" }, { "name": "RSD", "symbol": "&#1088;&#1089;&#1076;", "country": "Serbian dinar" }, { "name": "RUB", "symbol": "&#8381;", "country": "Russian ruble" }, { "name": "RWF", "symbol": "Fr", "country": "Rwandan franc" }, { "name": "SAR", "symbol": "&#x631;.&#x633;", "country": "Saudi riyal" }, { "name": "SBD", "symbol": "&#36;", "country": "Solomon Islands dollar" }, { "name": "SCR", "symbol": "&#x20a8;", "country": "Seychellois rupee" }, { "name": "SDG", "symbol": "&#x62c;.&#x633;.", "country": "Sudanese pound" }, { "name": "SEK", "symbol": "&#107;&#114;", "country": "Swedish krona" }, { "name": "SGD", "symbol": "&#36;", "country": "Singapore dollar" }, { "name": "SHP", "symbol": "&pound;", "country": "Saint Helena pound" }, { "name": "SLL", "symbol": "Le", "country": "Sierra Leonean leone" }, { "name": "SOS", "symbol": "Sh", "country": "Somali shilling" }, { "name": "SRD", "symbol": "&#36;", "country": "Surinamese dollar" }, { "name": "SSP", "symbol": "&pound;", "country": "South Sudanese pound" }, { "name": "STN", "symbol": "Db", "country": "S&atilde;o Tom&eacute; and Pr&iacute;ncipe dobra" }, { "name": "SYP", "symbol": "&#x644;.&#x633;", "country": "Syrian pound" }, { "name": "SZL", "symbol": "E", "country": "Swazi lilangeni" }, { "name": "THB", "symbol": "&#3647;", "country": "Thai baht" }, { "name": "TJS", "symbol": "&#x405;&#x41c;", "country": "Tajikistani somoni" }, { "name": "TMT", "symbol": "m", "country": "Turkmenistan manat" }, { "name": "TND", "symbol": "&#x62f;.&#x62a;", "country": "Tunisian dinar" }, { "name": "TOP", "symbol": "T&#36;", "country": "Tongan pa&#x2bb;anga" }, { "name": "TRY", "symbol": "&#8378;", "country": "Turkish lira" }, { "name": "TTD", "symbol": "&#36;", "country": "Trinidad and Tobago dollar" }, { "name": "TWD", "symbol": "&#78;&#84;&#36;", "country": "New Taiwan dollar" }, { "name": "TZS", "symbol": "Sh", "country": "Tanzanian shilling" }, { "name": "UAH", "symbol": "&#8372;", "country": "Ukrainian hryvnia" }, { "name": "UGX", "symbol": "UGX", "country": "Ugandan shilling" }, { "name": "USD", "symbol": "&#36;", "country": "United States (US) dollar" }, { "name": "UYU", "symbol": "&#36;", "country": "Uruguayan peso" }, { "name": "UZS", "symbol": "UZS", "country": "Uzbekistani som" }, { "name": "VEF", "symbol": "Bs F", "country": "Venezuelan bol&iacute;var" }, { "name": "VES", "symbol": "Bs.S", "country": "Bol&iacute;var soberano" }, { "name": "VND", "symbol": "&#8363;", "country": "Vietnamese &#x111;&#x1ed3;ng" }, { "name": "VUV", "symbol": "Vt", "country": "Vanuatu vatu" }, { "name": "WST", "symbol": "T", "country": "Samoan t&#x101;l&#x101;" }, { "name": "XAF", "symbol": "CFA", "country": "Central African CFA franc" }, { "name": "XCD", "symbol": "&#36;", "country": "East Caribbean dollar" }, { "name": "XOF", "symbol": "CFA", "country": "West African CFA franc" }, { "name": "XPF", "symbol": "Fr", "country": "CFP franc" }, { "name": "YER", "symbol": "&#xfdfc;", "country": "Yemeni rial" }, { "name": "ZAR", "symbol": "&#82;", "country": "South African rand" }, { "name": "ZMW", "symbol": "ZK", "country": "Zambian kwacha" }], "date_format": "F j, Y", "date_format_string": "January 10, 2025", "time_format": "g:i a", "time_format_string": "8:53 pm", "timezone_list": ["Africa\/Abidjan", "Africa\/Accra", "Africa\/Addis_Ababa", "Africa\/Algiers", "Africa\/Asmara", "Africa\/Bamako", "Africa\/Bangui", "Africa\/Banjul", "Africa\/Bissau", "Africa\/Blantyre", "Africa\/Brazzaville", "Africa\/Bujumbura", "Africa\/Cairo", "Africa\/Casablanca", "Africa\/Ceuta", "Africa\/Conakry", "Africa\/Dakar", "Africa\/Dar_es_Salaam", "Africa\/Djibouti", "Africa\/Douala", "Africa\/El_Aaiun", "Africa\/Freetown", "Africa\/Gaborone", "Africa\/Harare", "Africa\/Johannesburg", "Africa\/Juba", "Africa\/Kampala", "Africa\/Khartoum", "Africa\/Kigali", "Africa\/Kinshasa", "Africa\/Lagos", "Africa\/Libreville", "Africa\/Lome", "Africa\/Luanda", "Africa\/Lubumbashi", "Africa\/Lusaka", "Africa\/Malabo", "Africa\/Maputo", "Africa\/Maseru", "Africa\/Mbabane", "Africa\/Mogadishu", "Africa\/Monrovia", "Africa\/Nairobi", "Africa\/Ndjamena", "Africa\/Niamey", "Africa\/Nouakchott", "Africa\/Ouagadougou", "Africa\/Porto-Novo", "Africa\/Sao_Tome", "Africa\/Tripoli", "Africa\/Tunis", "Africa\/Windhoek", "America\/Adak", "America\/Anchorage", "America\/Anguilla", "America\/Antigua", "America\/Araguaina", "America\/Argentina\/Buenos_Aires", "America\/Argentina\/Catamarca", "America\/Argentina\/Cordoba", "America\/Argentina\/Jujuy", "America\/Argentina\/La_Rioja", "America\/Argentina\/Mendoza", "America\/Argentina\/Rio_Gallegos", "America\/Argentina\/Salta", "America\/Argentina\/San_Juan", "America\/Argentina\/San_Luis", "America\/Argentina\/Tucuman", "America\/Argentina\/Ushuaia", "America\/Aruba", "America\/Asuncion", "America\/Atikokan", "America\/Bahia", "America\/Bahia_Banderas", "America\/Barbados", "America\/Belem", "America\/Belize", "America\/Blanc-Sablon", "America\/Boa_Vista", "America\/Bogota", "America\/Boise", "America\/Cambridge_Bay", "America\/Campo_Grande", "America\/Cancun", "America\/Caracas", "America\/Cayenne", "America\/Cayman", "America\/Chicago", "America\/Chihuahua", "America\/Ciudad_Juarez", "America\/Costa_Rica", "America\/Creston", "America\/Cuiaba", "America\/Curacao", "America\/Danmarkshavn", "America\/Dawson", "America\/Dawson_Creek", "America\/Denver", "America\/Detroit", "America\/Dominica", "America\/Edmonton", "America\/Eirunepe", "America\/El_Salvador", "America\/Fort_Nelson", "America\/Fortaleza", "America\/Glace_Bay", "America\/Goose_Bay", "America\/Grand_Turk", "America\/Grenada", "America\/Guadeloupe", "America\/Guatemala", "America\/Guayaquil", "America\/Guyana", "America\/Halifax", "America\/Havana", "America\/Hermosillo", "America\/Indiana\/Indianapolis", "America\/Indiana\/Knox", "America\/Indiana\/Marengo", "America\/Indiana\/Petersburg", "America\/Indiana\/Tell_City", "America\/Indiana\/Vevay", "America\/Indiana\/Vincennes", "America\/Indiana\/Winamac", "America\/Inuvik", "America\/Iqaluit", "America\/Jamaica", "America\/Juneau", "America\/Kentucky\/Louisville", "America\/Kentucky\/Monticello", "America\/Kralendijk", "America\/La_Paz", "America\/Lima", "America\/Los_Angeles", "America\/Lower_Princes", "America\/Maceio", "America\/Managua", "America\/Manaus", "America\/Marigot", "America\/Martinique", "America\/Matamoros", "America\/Mazatlan", "America\/Menominee", "America\/Merida", "America\/Metlakatla", "America\/Mexico_City", "America\/Miquelon", "America\/Moncton", "America\/Monterrey", "America\/Montevideo", "America\/Montserrat", "America\/Nassau", "America\/New_York", "America\/Nome", "America\/Noronha", "America\/North_Dakota\/Beulah", "America\/North_Dakota\/Center", "America\/North_Dakota\/New_Salem", "America\/Nuuk", "America\/Ojinaga", "America\/Panama", "America\/Paramaribo", "America\/Phoenix", "America\/Port-au-Prince", "America\/Port_of_Spain", "America\/Porto_Velho", "America\/Puerto_Rico", "America\/Punta_Arenas", "America\/Rankin_Inlet", "America\/Recife", "America\/Regina", "America\/Resolute", "America\/Rio_Branco", "America\/Santarem", "America\/Santiago", "America\/Santo_Domingo", "America\/Sao_Paulo", "America\/Scoresbysund", "America\/Sitka", "America\/St_Barthelemy", "America\/St_Johns", "America\/St_Kitts", "America\/St_Lucia", "America\/St_Thomas", "America\/St_Vincent", "America\/Swift_Current", "America\/Tegucigalpa", "America\/Thule", "America\/Tijuana", "America\/Toronto", "America\/Tortola", "America\/Vancouver", "America\/Whitehorse", "America\/Winnipeg", "America\/Yakutat", "Antarctica\/Casey", "Antarctica\/Davis", "Antarctica\/DumontDUrville", "Antarctica\/Macquarie", "Antarctica\/Mawson", "Antarctica\/McMurdo", "Antarctica\/Palmer", "Antarctica\/Rothera", "Antarctica\/Syowa", "Antarctica\/Troll", "Antarctica\/Vostok", "Arctic\/Longyearbyen", "Asia\/Aden", "Asia\/Almaty", "Asia\/Amman", "Asia\/Anadyr", "Asia\/Aqtau", "Asia\/Aqtobe", "Asia\/Ashgabat", "Asia\/Atyrau", "Asia\/Baghdad", "Asia\/Bahrain", "Asia\/Baku", "Asia\/Bangkok", "Asia\/Barnaul", "Asia\/Beirut", "Asia\/Bishkek", "Asia\/Brunei", "Asia\/Chita", "Asia\/Colombo", "Asia\/Damascus", "Asia\/Dhaka", "Asia\/Dili", "Asia\/Dubai", "Asia\/Dushanbe", "Asia\/Famagusta", "Asia\/Gaza", "Asia\/Hebron", "Asia\/Ho_Chi_Minh", "Asia\/Hong_Kong", "Asia\/Hovd", "Asia\/Irkutsk", "Asia\/Jakarta", "Asia\/Jayapura", "Asia\/Jerusalem", "Asia\/Kabul", "Asia\/Kamchatka", "Asia\/Karachi", "Asia\/Kathmandu", "Asia\/Khandyga", "Asia\/Kolkata", "Asia\/Krasnoyarsk", "Asia\/Kuala_Lumpur", "Asia\/Kuching", "Asia\/Kuwait", "Asia\/Macau", "Asia\/Magadan", "Asia\/Makassar", "Asia\/Manila", "Asia\/Muscat", "Asia\/Nicosia", "Asia\/Novokuznetsk", "Asia\/Novosibirsk", "Asia\/Omsk", "Asia\/Oral", "Asia\/Phnom_Penh", "Asia\/Pontianak", "Asia\/Pyongyang", "Asia\/Qatar", "Asia\/Qostanay", "Asia\/Qyzylorda", "Asia\/Riyadh", "Asia\/Sakhalin", "Asia\/Samarkand", "Asia\/Seoul", "Asia\/Shanghai", "Asia\/Singapore", "Asia\/Srednekolymsk", "Asia\/Taipei", "Asia\/Tashkent", "Asia\/Tbilisi", "Asia\/Tehran", "Asia\/Thimphu", "Asia\/Tokyo", "Asia\/Tomsk", "Asia\/Ulaanbaatar", "Asia\/Urumqi", "Asia\/Ust-Nera", "Asia\/Vientiane", "Asia\/Vladivostok", "Asia\/Yakutsk", "Asia\/Yangon", "Asia\/Yekaterinburg", "Asia\/Yerevan", "Atlantic\/Azores", "Atlantic\/Bermuda", "Atlantic\/Canary", "Atlantic\/Cape_Verde", "Atlantic\/Faroe", "Atlantic\/Madeira", "Atlantic\/Reykjavik", "Atlantic\/South_Georgia", "Atlantic\/St_Helena", "Atlantic\/Stanley", "Australia\/Adelaide", "Australia\/Brisbane", "Australia\/Broken_Hill", "Australia\/Darwin", "Australia\/Eucla", "Australia\/Hobart", "Australia\/Lindeman", "Australia\/Lord_Howe", "Australia\/Melbourne", "Australia\/Perth", "Australia\/Sydney", "Europe\/Amsterdam", "Europe\/Andorra", "Europe\/Astrakhan", "Europe\/Athens", "Europe\/Belgrade", "Europe\/Berlin", "Europe\/Bratislava", "Europe\/Brussels", "Europe\/Bucharest", "Europe\/Budapest", "Europe\/Busingen", "Europe\/Chisinau", "Europe\/Copenhagen", "Europe\/Dublin", "Europe\/Gibraltar", "Europe\/Guernsey", "Europe\/Helsinki", "Europe\/Isle_of_Man", "Europe\/Istanbul", "Europe\/Jersey", "Europe\/Kaliningrad", "Europe\/Kirov", "Europe\/Kyiv", "Europe\/Lisbon", "Europe\/Ljubljana", "Europe\/London", "Europe\/Luxembourg", "Europe\/Madrid", "Europe\/Malta", "Europe\/Mariehamn", "Europe\/Minsk", "Europe\/Monaco", "Europe\/Moscow", "Europe\/Oslo", "Europe\/Paris", "Europe\/Podgorica", "Europe\/Prague", "Europe\/Riga", "Europe\/Rome", "Europe\/Samara", "Europe\/San_Marino", "Europe\/Sarajevo", "Europe\/Saratov", "Europe\/Simferopol", "Europe\/Skopje", "Europe\/Sofia", "Europe\/Stockholm", "Europe\/Tallinn", "Europe\/Tirane", "Europe\/Ulyanovsk", "Europe\/Vaduz", "Europe\/Vatican", "Europe\/Vienna", "Europe\/Vilnius", "Europe\/Volgograd", "Europe\/Warsaw", "Europe\/Zagreb", "Europe\/Zurich", "Indian\/Antananarivo", "Indian\/Chagos", "Indian\/Christmas", "Indian\/Cocos", "Indian\/Comoro", "Indian\/Kerguelen", "Indian\/Mahe", "Indian\/Maldives", "Indian\/Mauritius", "Indian\/Mayotte", "Indian\/Reunion", "Pacific\/Apia", "Pacific\/Auckland", "Pacific\/Bougainville", "Pacific\/Chatham", "Pacific\/Chuuk", "Pacific\/Easter", "Pacific\/Efate", "Pacific\/Fakaofo", "Pacific\/Fiji", "Pacific\/Funafuti", "Pacific\/Galapagos", "Pacific\/Gambier", "Pacific\/Guadalcanal", "Pacific\/Guam", "Pacific\/Honolulu", "Pacific\/Kanton", "Pacific\/Kiritimati", "Pacific\/Kosrae", "Pacific\/Kwajalein", "Pacific\/Majuro", "Pacific\/Marquesas", "Pacific\/Midway", "Pacific\/Nauru", "Pacific\/Niue", "Pacific\/Norfolk", "Pacific\/Noumea", "Pacific\/Pago_Pago", "Pacific\/Palau", "Pacific\/Pitcairn", "Pacific\/Pohnpei", "Pacific\/Port_Moresby", "Pacific\/Rarotonga", "Pacific\/Saipan", "Pacific\/Tahiti", "Pacific\/Tarawa", "Pacific\/Tongatapu", "Pacific\/Wake", "Pacific\/Wallis", "UTC"], "version": "4.0.19", "payment_option_woo": "woocommerce", "payment_option_stripe": "", "payment_option_paypal": "", "currency_symbol": "$", "nonce": "ea23c1427e", "timetics_pro_active": "", "etn_purchase_login_required": "", "etn_hide_seats_from_details": "", "etn_primary_color": "#543ee8", "etn_secondary_color": "#ffffff", "decimal_separator": "comma_dot", "thousand_separator": ",", "decimals": "2", "price_format": "%1$s%2$s", "currency_position": "left", "elementor_supported": "" };
		var localized_data_obj = { "ajax_url": "https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn\/wp-admin\/admin-ajax.php", "site_url": "https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn", "evnetin_pro_active": "", "locale_name": "en-us", "start_of_week": "1", "expired": "Expired", "author_id": "0", "nonce": "ea23c1427e", "scanner_common_msg": "Something went wrong! Please try again.", "ticket_scanner_link": "https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn\/wp-admin\/edit.php?post_type=etn-attendee", "attendee_form_validation_msg": { "email": { "invalid": "Email is not valid", "empty": "Please fill the field" }, "tel": { "empty": "Please fill the field", "invalid": "Invalid phone number", "only_number": "Only number allowed" }, "text": "Please fill the field", "number": "Please input a number", "date": "Please fill the field", "radio": "Please check the field" }, "post_id": "3350", "currency_symbol": "$" };
		/* ]]> */
	</script>


	<script type="text/javascript" id="wc-order-attribution-js-extra">
		/* <![CDATA[ */
		var wc_order_attribution = { "params": { "lifetime": 1.0000000000000000818030539140313095458623138256371021270751953125e-5, "session": 30, "base64": false, "ajaxurl": "https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn\/wp-admin\/admin-ajax.php", "prefix": "wc_order_attribution_", "allowTracking": true }, "fields": { "source_type": "current.typ", "referrer": "current_add.rf", "utm_campaign": "current.cmp", "utm_source": "current.src", "utm_medium": "current.mdm", "utm_content": "current.cnt", "utm_id": "current.id", "utm_term": "current.trm", "utm_source_platform": "current.plt", "utm_creative_format": "current.fmt", "utm_marketing_tactic": "current.tct", "session_entry": "current_add.ep", "session_start_time": "current_add.fd", "session_pages": "session.pgs", "session_count": "udata.vst", "user_agent": "udata.uag" } };
		/* ]]> */
	</script>



	<script type="text/javascript" id="rtsb-public-js-extra">
		/* <![CDATA[ */
		var rtsbPublicParams = { "ajaxUrl": "https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn\/wp-admin\/admin-ajax.php", "homeurl": "https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn", "wcCartUrl": "https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn\/cart\/", "addedToCartText": "Product Added", "singleCartToastrText": "Successfully Added", "singleCartBtnText": "Added to Cart", "browseCartText": "Browse Cart", "noProductsText": "No more products to load", "notice": { "position": "center-center" }, "__rtsb_wpnonce": "c15364b073" };
		var QvModalParams = { "modal_width": "950" };
		/* ]]> */
	</script>

	<script type="text/javascript" id="rtsb-quick-view-js-extra">
		/* <![CDATA[ */
		var rtsbQvParams = { "ajaxurl": "\/demo\/wordpress\/themes\/quiklearn\/wp-admin\/admin-ajax.php", "lang": "", "isLoggedIn": "" };
		/* ]]> */
	</script>

	<script type="text/javascript" id="rtsb-wishlist-js-extra">
		/* <![CDATA[ */
		var rtsbWishlistParams = { "product_id": "3350", "resturl": "https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn\/wp-json\/", "isLoggedIn": "", "pageUrl": "https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn\/wishlist\/", "rest_nonce": "ea23c1427e", "notice": { "add_to_wishlist": "Add to wishlist", "remove_wishlist": "Remove from list", "button_text": "Add to wishlist", "added": "Product added!", "removed": "Product removed!", "exist": "Product removed!", "browse": "Browse wishlist", "error": "Security error!", "position": "center-center" } };
		/* ]]> */
	</script>

	<script type="text/javascript" id="rtsb-compare-js-extra">
		/* <![CDATA[ */
		var rtsbCompareParams = { "product_id": "3350", "resturl": "https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn\/wp-json\/", "isLoggedIn": "", "pageUrl": "https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn\/compare\/", "rest_nonce": "ea23c1427e", "notice": { "added": "Product added!", "removed": "Product removed!", "browse": "Browse compare", "error": "Some thing went wrong!!", "ajax_remove_compare": "Remove from list", "ajax_button_text": "Compare" } };
		/* ]]> */
	</script>










	<script type="text/javascript" id="quiklearn-main-js-extra">
		/* <![CDATA[ */
		var quiklearnObj = { "stickyMenu": "1", "siteLogo": "<a href=\"https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn\/\" alt=\"Quiklearn\"><\/a>", "extraOffset": "70", "extraOffsetMobile": "52", "rtl": "ltr", "ajaxURL": "https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn\/wp-admin\/admin-ajax.php", "nonce": "7cb96d4e99" };
		/* ]]> */
	</script>




	<script type="text/javascript" id="fluent-form-submission-js-extra">
		/* <![CDATA[ */
		var fluentFormVars = { "ajaxUrl": "https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn\/wp-admin\/admin-ajax.php", "forms": [], "step_text": "Step %activeStep% of %totalStep% - %stepTitle%", "is_rtl": "", "date_i18n": { "previousMonth": "Previous Month", "nextMonth": "Next Month", "months": { "shorthand": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"], "longhand": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"] }, "weekdays": { "longhand": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"], "shorthand": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"] }, "daysInMonth": [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31], "rangeSeparator": " to ", "weekAbbreviation": "Wk", "scrollTitle": "Scroll to increment", "toggleTitle": "Click to toggle", "amPM": ["AM", "PM"], "yearAriaLabel": "Year", "firstDayOfWeek": 1 }, "pro_version": "", "fluentform_version": "5.2.8", "force_init": "", "stepAnimationDuration": "350", "upload_completed_txt": "100% Completed", "upload_start_txt": "0% Completed", "uploading_txt": "Uploading", "choice_js_vars": { "noResultsText": "No results found", "loadingText": "Loading...", "noChoicesText": "No choices to choose from", "itemSelectText": "Press to select", "maxItemText": "Only %%maxItemCount%% options can be added" }, "input_mask_vars": { "clearIfNotMatch": false }, "nonce": "e28f0ececb" };
		/* ]]> */
	</script>




	<script type="text/javascript" id="elementor-frontend-js-before">
		/* <![CDATA[ */
		var elementorFrontendConfig = { "environmentMode": { "edit": false, "wpPreview": false, "isScriptDebug": false }, "i18n": { "shareOnFacebook": "Share on Facebook", "shareOnTwitter": "Share on Twitter", "pinIt": "Pin it", "download": "Download", "downloadImage": "Download image", "fullscreen": "Fullscreen", "zoom": "Zoom", "share": "Share", "playVideo": "Play Video", "previous": "Previous", "next": "Next", "close": "Close", "a11yCarouselPrevSlideMessage": "Previous slide", "a11yCarouselNextSlideMessage": "Next slide", "a11yCarouselFirstSlideMessage": "This is the first slide", "a11yCarouselLastSlideMessage": "This is the last slide", "a11yCarouselPaginationBulletMessage": "Go to slide" }, "is_rtl": false, "breakpoints": { "xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600 }, "responsive": { "breakpoints": { "mobile": { "label": "Mobile Portrait", "value": 767, "default_value": 767, "direction": "max", "is_enabled": true }, "mobile_extra": { "label": "Mobile Landscape", "value": 880, "default_value": 880, "direction": "max", "is_enabled": false }, "tablet": { "label": "Tablet Portrait", "value": 1024, "default_value": 1024, "direction": "max", "is_enabled": true }, "tablet_extra": { "label": "Tablet Landscape", "value": 1200, "default_value": 1200, "direction": "max", "is_enabled": false }, "laptop": { "label": "Laptop", "value": 1366, "default_value": 1366, "direction": "max", "is_enabled": false }, "widescreen": { "label": "Widescreen", "value": 2400, "default_value": 2400, "direction": "min", "is_enabled": false } }, "hasCustomBreakpoints": false }, "version": "3.26.3", "is_static": false, "experimentalFeatures": { "additional_custom_breakpoints": true, "e_swiper_latest": true, "e_nested_atomic_repeaters": true, "e_onboarding": true, "e_css_smooth_scroll": true, "home_screen": true, "landing-pages": true, "nested-elements": true, "editor_v2": true, "link-in-bio": true, "floating-buttons": true }, "urls": { "assets": "https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn\/wp-content\/plugins\/elementor\/assets\/", "ajaxurl": "https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn\/wp-admin\/admin-ajax.php", "uploadUrl": "https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/quiklearn\/wp-content\/uploads" }, "nonces": { "floatingButtonsClickTracking": "3dfd9cfb06" }, "swiperClass": "swiper", "settings": { "page": [], "editorPreferences": [] }, "kit": { "active_breakpoints": ["viewport_mobile", "viewport_tablet"], "global_image_lightbox": "yes", "lightbox_enable_counter": "yes", "lightbox_enable_fullscreen": "yes", "lightbox_enable_zoom": "yes", "lightbox_enable_share": "yes", "lightbox_title_src": "title", "lightbox_description_src": "description" }, "post": { "id": 3350, "title": "Quiklearn%20%E2%80%93%20Quiklearn%20learning%20wordpress%20site", "excerpt": "", "featuredImage": false } };
		/* ]]> */
	</script>


	<script defer
		src="wp-content/uploads/siteground-optimizer-assets/siteground-optimizer-combined-js-717cb87a208952693c129f17250eee8e.js"></script>
	</body>

	<!-- Mirrored from www.radiustheme.com/demo/wordpress/themes/quiklearn/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Jan 2025 20:55:22 GMT -->

	</html>