/* To avoid CSS expressions while still supporting IE 7 and IE 6, use this script */
/* The script tag referencing this file must be placed before the ending body tag. */

/* Use conditional comments in order to target IE 7 and older:
	<!--[if lt IE 8]><!-->
	<script src="ie7/ie7.js"></script>
	<!--<![endif]-->
*/

(function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'Buyshop\'">' + entity + '</span>' + html;
	}
	var icons = {
		'icon-stack': '&#xe901;',
		'icon-stack-2': '&#xe902;',
		'icon-star': '&#xe903;',
		'icon-stop': '&#xe904;',
		'icon-sun': '&#xe905;',
		'icon-tag': '&#xe906;',
		'icon-target': '&#xe907;',
		'icon-thermometer': '&#xe908;',
		'icon-toggle': '&#xe909;',
		'icon-trash': '&#xe90a;',
		'icon-unlock': '&#xe90b;',
		'icon-upload': '&#xe90c;',
		'icon-video': '&#xe90d;',
		'icon-volume': '&#xe90e;',
		'icon-zoom-in': '&#xe90f;',
		'icon-zoom-out': '&#xe910;',
		'icon-air-play': '&#xe911;',
		'icon-archive': '&#xe912;',
		'icon-arrow-down': '&#xe913;',
		'icon-arrow-left': '&#xe914;',
		'icon-arrow-right': '&#xe915;',
		'icon-arrow-up': '&#xe916;',
		'icon-bag': '&#xe917;',
		'icon-ban': '&#xe918;',
		'icon-bar-graph': '&#xe919;',
		'icon-bar-graph-2': '&#xe91a;',
		'icon-battery': '&#xe91b;',
		'icon-bell': '&#xe91c;',
		'icon-book': '&#xe91d;',
		'icon-box': '&#xe91e;',
		'icon-briefcase': '&#xe91f;',
		'icon-camera': '&#xe920;',
		'icon-check': '&#xe921;',
		'icon-circle-add': '&#xe922;',
		'icon-circle-check': '&#xe923;',
		'icon-circle-cross': '&#xe924;',
		'icon-circle-minus': '&#xe925;',
		'icon-clipboard': '&#xe926;',
		'icon-clock2': '&#xe927;',
		'icon-cloud': '&#xe928;',
		'icon-cloud-download': '&#xe929;',
		'icon-cloud-upload': '&#xe92a;',
		'icon-cog': '&#xe92b;',
		'icon-columns': '&#xe92c;',
		'icon-command': '&#xe92d;',
		'icon-content-left': '&#xe92e;',
		'icon-content-right': '&#xe92f;',
		'icon-contract': '&#xe930;',
		'icon-cross': '&#xe931;',
		'icon-delete': '&#xe932;',
		'icon-disc': '&#xe933;',
		'icon-download': '&#xe934;',
		'icon-drop': '&#xe935;',
		'icon-ellipsis': '&#xe936;',
		'icon-esc': '&#xe937;',
		'icon-expand': '&#xe938;',
		'icon-eye': '&#xe939;',
		'icon-fast-forward': '&#xe93a;',
		'icon-file': '&#xe93b;',
		'icon-flag': '&#xe93c;',
		'icon-folder': '&#xe93d;',
		'icon-globe': '&#xe93e;',
		'icon-grid': '&#xe93f;',
		'icon-grid-2': '&#xe940;',
		'icon-head': '&#xe941;',
		'icon-heart': '&#xe942;',
		'icon-help': '&#xe943;',
		'icon-image': '&#xe944;',
		'icon-inbox': '&#xe945;',
		'icon-layers': '&#xe946;',
		'icon-layout': '&#xe947;',
		'icon-link': '&#xe948;',
		'icon-loader': '&#xe949;',
		'icon-location': '&#xe94a;',
		'icon-location-2': '&#xe94b;',
		'icon-lock': '&#xe94c;',
		'icon-mail': '&#xe94d;',
		'icon-map': '&#xe94e;',
		'icon-maximize': '&#xe94f;',
		'icon-menu': '&#xe950;',
		'icon-microphone': '&#xe951;',
		'icon-minimize': '&#xe952;',
		'icon-minus': '&#xe953;',
		'icon-monitor': '&#xe954;',
		'icon-moon': '&#xe955;',
		'icon-move': '&#xe956;',
		'icon-open': '&#xe957;',
		'icon-outbox': '&#xe958;',
		'icon-paper': '&#xe959;',
		'icon-paper-clip': '&#xe95a;',
		'icon-paper-stack': '&#xe95b;',
		'icon-paragraph': '&#xe95c;',
		'icon-pause': '&#xe95d;',
		'icon-pie-graph': '&#xe95e;',
		'icon-play': '&#xe95f;',
		'icon-plus': '&#xe960;',
		'icon-power': '&#xe961;',
		'icon-printer': '&#xe962;',
		'icon-record': '&#xe963;',
		'icon-reload': '&#xe964;',
		'icon-repeat': '&#xe965;',
		'icon-reply': '&#xe966;',
		'icon-rewind': '&#xe967;',
		'icon-ribbon': '&#xe968;',
		'icon-search': '&#xe969;',
		'icon-server': '&#xe96a;',
		'icon-share': '&#xe96b;',
		'icon-shuffle': '&#xe96c;',
		'icon-signal': '&#xe96d;',
		'icon-skip-back': '&#xe96e;',
		'icon-skip-forward': '&#xe96f;',
		'icon-speech-bubble': '&#xe970;',
		'icon-square-add': '&#xe971;',
		'icon-youtube': '&#xe683;',
		'icon-youtube-play': '&#xe682;',
		'icon-wrench': '&#xe681;',
		'icon-volume2': '&#xe680;',
		'icon-volume-level-two': '&#xe67f;',
		'icon-volume-level-three': '&#xe67e;',
		'icon-volume-level-one': '&#xe67d;',
		'icon-users': '&#xe67c;',
		'icon-user': '&#xe67b;',
		'icon-upload2': '&#xe679;',
		'icon-unlock2': '&#xe678;',
		'icon-unlink': '&#xe677;',
		'icon-undo': '&#xe676;',
		'icon-twitter': '&#xe675;',
		'icon-tumblr': '&#xe674;',
		'icon-trash2': '&#xe673;',
		'icon-thumbs-up': '&#xe672;',
		'icon-th': '&#xe670;',
		'icon-th-list': '&#xe66f;',
		'icon-th-large': '&#xe66e;',
		'icon-tag2': '&#xe66d;',
		'icon-stats': '&#xe66b;',
		'icon-star2': '&#xe66a;',
		'icon-star-half-empty': '&#xe669;',
		'icon-star-empty': '&#xe668;',
		'icon-smile': '&#xe667;',
		'icon-shopping-cart': '&#xe666;',
		'icon-share2': '&#xe665;',
		'icon-share-square': '&#xe664;',
		'icon-search2': '&#xe663;',
		'icon-search-plus': '&#xe662;',
		'icon-search-minus': '&#xe661;',
		'icon-retweet': '&#xe65e;',
		'icon-resize-v': '&#xe65d;',
		'icon-resize-small': '&#xe65c;',
		'icon-resize-h': '&#xe65b;',
		'icon-resize-full': '&#xe65a;',
		'icon-refresh': '&#xe659;',
		'icon-redo': '&#xe658;',
		'icon-random': '&#xe657;',
		'icon-question-circle': '&#xe656;',
		'icon-pushpin': '&#xe655;',
		'icon-power-switch': '&#xe654;',
		'icon-plus-circle': '&#xe653;',
		'icon-pencil': '&#xe652;',
		'icon-pencil-square': '&#xe651;',
		'icon-paperclip': '&#xe650;',
		'icon-ok-circle': '&#xe64f;',
		'icon-move2': '&#xe64b;',
		'icon-minus-circle': '&#xe649;',
		'icon-microphone2': '&#xe648;',
		'icon-map2': '&#xe646;',
		'icon-map-marker': '&#xe645;',
		'icon-lock2': '&#xe644;',
		'icon-location2': '&#xe643;',
		'icon-list': '&#xe642;',
		'icon-link2': '&#xe641;',
		'icon-leaf': '&#xe640;',
		'icon-laptop': '&#xe63f;',
		'icon-instagram': '&#xe63e;',
		'icon-info-circle': '&#xe63d;',
		'icon-home': '&#xe63c;',
		'icon-history': '&#xe63b;',
		'icon-hearth': '&#xe63a;',
		'icon-hamburger': '&#xe639;',
		'icon-hamburger-circle': '&#xe638;',
		'icon-google': '&#xe637;',
		'icon-google-plus': '&#xe636;',
		'icon-glasses-classic': '&#xe634;',
		'icon-flag2': '&#xe633;',
		'icon-film-play': '&#xe632;',
		'icon-facebook': '&#xe631;',
		'icon-eye2': '&#xe630;',
		'icon-expand2': '&#xe62e;',
		'icon-exclamation-triangle': '&#xe62d;',
		'icon-exclamation-circle': '&#xe62c;',
		'icon-equal-circle': '&#xe62b;',
		'icon-envelope': '&#xe62a;',
		'icon-earth': '&#xe629;',
		'icon-drop2': '&#xe628;',
		'icon-dribbble': '&#xe627;',
		'icon-download2': '&#xe626;',
		'icon-document': '&#xe625;',
		'icon-document-remove': '&#xe624;',
		'icon-document-add': '&#xe623;',
		'icon-cross2': '&#xe620;',
		'icon-cross-circle': '&#xe61f;',
		'icon-computer': '&#xe61c;',
		'icon-comments-bubble': '&#xe61b;',
		'icon-comment-txt-square': '&#xe61a;',
		'icon-comment-square': '&#xe619;',
		'icon-comment-bubble': '&#xe618;',
		'icon-cloud2': '&#xe617;',
		'icon-cloud-upload2': '&#xe616;',
		'icon-cloud-download2': '&#xe615;',
		'icon-clock3': '&#xe614;',
		'icon-chevron-up': '&#xe613;',
		'icon-chevron-top-circle': '&#xe612;',
		'icon-chevron-right': '&#xe611;',
		'icon-chevron-right-circle': '&#xe610;',
		'icon-chevron-left': '&#xe60f;',
		'icon-chevron-left-circle': '&#xe60e;',
		'icon-chevron-down': '&#xe60d;',
		'icon-chevron-down-circle': '&#xe60c;',
		'icon-check2': '&#xe60b;',
		'icon-check-square': '&#xe60a;',
		'icon-calendar': '&#xe609;',
		'icon-bullhorn': '&#xe608;',
		'icon-bucket': '&#xe607;',
		'icon-bookmark': '&#xe606;',
		'icon-ban-circle': '&#xe605;',
		'icon-arrow-up2': '&#xe604;',
		'icon-arrow-right2': '&#xe603;',
		'icon-arrow-left2': '&#xe602;',
		'icon-arrow-down2': '&#xe601;',
		'icon-bag2': '&#xe972;',
		'icon-clock': '&#xe900;',
		'icon-transport': '&#xe973;',
		'icon-transport-1': '&#xe974;',
		'icon-clock-1': '&#xe975;',
		'icon-coins': '&#xe976;',
		'icon-money-3': '&#xe977;',
		'icon-money-1': '&#xe978;',
		'icon-business': '&#xe979;',
		'icon-tool': '&#xe97a;',
		'icon-16909': '&#xe97b;',
		'icon-menu2': '&#xe97c;',
		'icon-add': '&#xe97d;',
		'icon-social-media': '&#xe97e;',
		'icon-technology': '&#xe97f;',
		'icon-telephone': '&#xe980;',
		'0': 0
		},
		els = document.getElementsByTagName('*'),
		i, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
}());