<head>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script src="magicwand.js"></script>
<script src="widgets.js"></script>

<style>

html, body, div, span, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
abbr, address, cite, code,
del, dfn, em, img, ins, kbd, q, samp,
small, strong, sub, sup, var,
b, i,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section, summary,
time, mark, audio, video {
    margin:0;
    padding:0;
    border:0;
    outline:0;
    font-size:100%;
    font-weight: normal;
    vertical-align:baseline;
    background:transparent;
}

body { line-height:2; font-size: 24px; font-family: Georgia, Verdana; color: #000; }

article,aside,details,figcaption,figure,
footer,header,hgroup,menu,nav,section { display:block }
nav ul { list-style:none; }
blockquote, q { quotes:none; }
blockquote:before, blockquote:after,
q:before, q:after { content:''; content:none; }
a { margin:0; padding:0; font-size:100%; vertical-align:baseline; background:transparent; }

/* change colours to suit your needs */
ins { background-color:#fff; color:#363636; text-decoration:none; }

/* change colours to suit your needs */
mark { background-color:#fff; color:#363636; font-style:italic; font-weight:bold; }

del { text-decoration: line-through; }

abbr[title], dfn[title] { border-bottom:1px dotted; cursor:help; }

table { border-collapse:collapse;  border-spacing:0; }

/* change border colour to suit your needs */
hr { display:block; height:1px; border:0; border-top:1px solid #cccccc;  margin:1em 0; padding:0; }
input, select { vertical-align:middle; }


i { font-style: normal !important; }
textarea { resize: none; }

/*********************** /RESET ************************/

body { background-color: #363636; }

p { margin: 15px 25px; text-indent: 45px; }
.magic { cursor: default; line-height: 22px; letter-spacing: 0px; }


</style>
	
<script>
           $(document).ready(function(){
  $('.magic').magicWand({
    'animation': 'color',
    'color': '#00FF00'
  });
});

           $(document).ready(function(){
  $('.magic').magicWand();
});
	</script>

</head>

