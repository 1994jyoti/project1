<!-- custom-css -->
<style type="text/css">

/* Local Classes
------------------------------------*/
a {
	color: inherit;
}
a,
a:focus,
a:hover,
a:active {
  outline: 0 !important;
}
a:focus {
  text-decoration: none;
  color: inherit;
}
a:hover {
  color: inherit;
  text-decoration: none;
}

/* heading-v12 */
.heading-v12__block-name {
	font-size: 60px;
	color: #222;
	line-height: 1.2;
	display: block;
}
.heading-v12__block-name span {
	color: #d65779;
}
.heading-v12__block-list li {
	padding: 0 1px;
}
.heading-v12__block-list .fa {
	color: #d65779;
}

.heading-v12__block-list .fa.xs {font-size: 8px;}
.heading-v12__block-list .fa.sm {font-size: 11px;}
.heading-v12__block-list .fa.md {font-size: 14px;}

.heading-v12__block-text {
	margin: 0 auto;
	font-size: 16px;
	max-width: 90%;
	line-height: 1.4;
	font-weight: 100;
	color: #a7a7a7;
}

/* Container fluids with two different background colors */
.container-fluid.with-bg-1 {
	background: #d65779;
}

.container-fluid.with-bg-2 {
	background: url(../img-temp/testimonials-bg.jpg) no-repeat;
	background-size: cover;
}

.container-fluid.with-bg-3 {
	background: #f9f9f9;
}

/* Global Classes
------------------------------------*/
/* Typography */
.g-textarea-noresize {
	resize: none;
}

.g-text-height-md {
	line-height: 24px;
}
.g-text-height-lg {
	line-height: 54px;
}

/*Display*/
.g-display-inline-block {
  display: inline-block;
}
.g-display-table {
  display: table;
  width: 100%;
}
.g-dp-block {
	display: block;
}
.g-dp-table {
 display: table;
}
.g-dp-table-cell {
 display: table-cell;
}

/* Alignments */
.g-valign-top {
 vertical-align: top;
}
.g-valign-middle {
 vertical-align: middle;
}
.g-valign-bottom {
 vertical-align: bottom;
}


/* Positions */
.g-position-rel {
	position: relative;
}
.g-position-abs {
	position: absolute;
}

/* Display Mobile/Tablet Resolutions */
@media (max-width: 992px) {
	.hidden-sm {
		display: none;
	}
}

@media (min-width: 991px) {
	.visable-lg {
		display: none;
	}
}

@media (max-width: 992px){
	.text-sm-center {
		text-align: center;
	}
}

@media (max-width: 768px){
	.text-xs-center {
		text-align: center;
	}
}


@media (min-width: 600px) {
	.visible-2xs {
		display: none;
	}
}
@media (max-width: 600px) {
	.hidden-2xs {
		display: none;
	}
	.col-2xs-12 {
		width: 100%;
	}
}
@media (min-width: 500px) {
	.visible-3xs {
		display: none;
	}
}
@media (max-width: 500px) {
	.hidden-3xs {
		display: none;
	}
}

/* Text Colors */
.g-color-white { color: #fff;}
.g-color-gray-dark { color: #777;}
.g-color-gray-darker { color: #999;}
.g-color-default { color: #4fd2c2;}

/* Text Sizes */
.g-text-size-12 {
	font-size: 12px;
}
.g-text-size-17 {
	font-size: 17px;
}

/* Background Colors */
/*.g-bg-default { background: #4fd2c2;}*/
.g-bg-gray { background: #f7f7f7;}

/* Rounded Styles
------------------------------------*/
.g-no-rounded {border-radius: 0;}
.g-rounded-1 {border-radius: 1px;}
.g-rounded-2 {border-radius: 2px;}
.g-rounded-3 {border-radius: 3px;}
.g-rounded-4 {border-radius: 4px;}
.g-rounded-5 {border-radius: 5px;}
.g-rounded-10 {border-radius: 10px;}
.g-rounded-20 {border-radius: 20px;}
.g-rounded-50x {border-radius: 50%;}
.g-rounded-t4 {border-radius: 4px 4px 0 0;}
.g-rounded-l4 {border-radius: 4px 0 0 4px;}
.g-rounded-r4 {border-radius: 0 4px 4px 0;}
.g-rounded-b4 {border-radius: 0 0 4px 4px;}

/* Spaces
------------------------------------*/
.g-no-mb {
	margin-bottom: 0;
}

.g-no-padding {
	padding: 0;
}

.g-no-left-padding {
	padding-left: 0;
}

.g-no-side-padding {
	padding-left: 0;
	padding-right: 0;
}


/*Padding Spaces*/
.padding-5  { padding: 5px;}
.padding-10 { padding: 10px;}
.padding-15 { padding: 15px;}
.padding-20 { padding: 20px;}
.padding-25 { padding: 25px;}
.padding-30 { padding: 30px;}
.padding-35 { padding: 35px;}
.padding-40 { padding: 40px;}
.padding-45 { padding: 45px;}
.padding-50 { padding: 50px;}

.padding-top-10 { padding-top: 10px;}
.padding-top-20 { padding-top: 20px;}
.padding-top-25 {padding-top: 25px;}
.padding-top-30 { padding-top: 30px;}
.padding-top-40 { padding-top: 40px;}
.padding-top-50 { padding-top: 50px;}
.padding-top-60 { padding-top: 60px;}
.padding-top-70 { padding-top: 70px;}
.padding-top-75 { padding-top: 75px;}
.padding-top-80 { padding-top: 80px;}
.padding-top-85 { padding-top: 80px;}
.padding-top-90 { padding-top: 90px;}
.padding-top-100 { padding-top: 100px;}
.padding-top-110 { padding-top: 110px;}
.padding-top-120 { padding-top: 120px;}
.padding-top-130 { padding-top: 130px;}
.padding-top-140 { padding-top: 140px;}
.padding-top-150 { padding-top: 150px;}
.padding-top-160 { padding-top: 160px;}
.padding-top-170 { padding-top: 170px;}

.padding-bottom-10 { padding-bottom: 10px;}
.padding-bottom-20 { padding-bottom: 20px;}
.padding-bottom-30 { padding-bottom: 30px;}
.padding-bottom-40 { padding-bottom: 40px;}
.padding-bottom-50 { padding-bottom: 50px;}
.padding-bottom-60 { padding-bottom: 60px;}
.padding-bottom-70 { padding-bottom: 70px;}
.padding-bottom-75 { padding-bottom: 75px;}
.padding-bottom-80 { padding-bottom: 80px;}
.padding-bottom-90 { padding-bottom: 90px;}
.padding-bottom-100 { padding-bottom: 100px;}

.padding-left-10 { padding-left: 10px;}
.padding-left-15 { padding-left: 15px;}
.padding-left-20 { padding-left: 20px;}
.padding-left-30 { padding-left: 30px;}
.padding-left-40 { padding-left: 40px;}
.padding-left-50 { padding-left: 50px;}
.padding-left-60 { padding-left: 60px;}
.padding-left-70 { padding-left: 70px;}
.padding-left-80 { padding-left: 80px;}
.padding-left-90 { padding-left: 90px;}
.padding-left-100 { padding-left: 100px;}

.padding-right-10 { padding-right: 10px;}
.padding-right-15 { padding-right: 15px;}
.padding-right-20 { padding-right: 20px;}
.padding-right-30 { padding-right: 30px;}
.padding-right-40 { padding-right: 40px;}
.padding-right-50 { padding-right: 50px;}
.padding-right-60 { padding-right: 60px;}
.padding-right-70 { padding-right: 70px;}
.padding-right-80 { padding-right: 80px;}
.padding-right-90 { padding-right: 90px;}
.padding-right-100 { padding-right: 100px;}

/*Margin Spaces*/
.margin-top-10 { margin-top: 10px;}
.margin-top-20 { margin-top: 20px;}
.margin-top-30 { margin-top: 30px;}
.margin-top-40 { margin-top: 40px;}
.margin-top-50 { margin-top: 50px;}
.margin-top-60 { margin-top: 60px;}
.margin-top-70 { margin-top: 70px;}
.margin-top-80 { margin-top: 80px;}
.margin-top-90 { margin-top: 90px;}
.margin-top-100 { margin-top: 100px;}

.margin-bottom-5 { margin-bottom: 5px;}
.margin-bottom-10 { margin-bottom: 10px;}
.margin-bottom-15 { margin-bottom: 15px;}
.margin-bottom-20 { margin-bottom: 20px;}
.margin-bottom-25 { margin-bottom: 25px;}
.margin-bottom-30 { margin-bottom: 30px;}
.margin-bottom-35 { margin-bottom: 35px;}
.margin-bottom-40 { margin-bottom: 40px;}
.margin-bottom-45 { margin-bottom: 45px;}
.margin-bottom-50 { margin-bottom: 50px;}
.margin-bottom-55 { margin-bottom: 55px;}
.margin-bottom-60 { margin-bottom: 60px;}
.margin-bottom-65 { margin-bottom: 65px;}
.margin-bottom-70 { margin-bottom: 70px;}
.margin-bottom-75 { margin-bottom: 75px;}
.margin-bottom-80 { margin-bottom: 80px;}
.margin-bottom-85 { margin-bottom: 85px;}
.margin-bottom-90 { margin-bottom: 90px;}
.margin-bottom-95 { margin-bottom: 95px;}
.margin-bottom-100 { margin-bottom: 100px;}

.margin-left-10 { margin-left: 10px;}
.margin-left-15 { margin-left: 15px;}
.margin-left-20 { margin-left: 20px;}
.margin-left-30 { margin-left: 30px;}
.margin-left-40 { margin-left: 40px;}
.margin-left-50 { margin-left: 50px;}
.margin-left-60 { margin-left: 60px;}
.margin-left-70 { margin-left: 70px;}
.margin-left-80 { margin-left: 80px;}
.margin-left-90 { margin-left: 90px;}
.margin-left-100 { margin-left: 100px;}

.margin-right-10 { margin-right: 10px;}
.margin-right-20 { margin-right: 20px;}
.margin-right-30 { margin-right: 30px;}
.margin-right-40 { margin-right: 40px;}
.margin-right-50 { margin-right: 50px;}
.margin-right-60 { margin-right: 60px;}
.margin-right-70 { margin-right: 70px;}
.margin-right-80 { margin-right: 80px;}
.margin-right-90 { margin-right: 90px;}
.margin-right-100 { margin-right: 100px;}

@media(max-width: 992px) {
  .g-sm-mb-20 {
    margin-bottom: 20px;
  }
  .g-sm-mb-30 {
    margin-bottom: 30px;
  }
  .g-sm-mb-50 {
    margin-bottom: 50px;
  }

 	.g-sm-ml-0 {
  	margin-left: 0;
  }
}





/* nav bar */
  .navbar-brand
  {
  	max-height: 145px!important;
  }
.color{
	color: #d65779!important;
}

/* heading-center-style */



.margin-bottom-20{
 margin-bottom: 20px;
}
.margin-bottom-40{
 margin-bottom: 40px;
}
table, th, td {
    border: 1px solid black;
}





.heading-style-list .fa {
    color: #d65779;
}
.register-css span{
color: #d65779;	
}
.form {
  box-shadow: none;
  border: 1px solid #eee;
}
.form {
	margin: 0;
	outline: none;
	box-shadow: 0 0 20px rgba(0,0,0,.3);
	font: 13px/1.55 'Open Sans', Helvetica, Arial, sans-serif;
	color: #666;
}
  .page-scroll{
  	font-size: 20px!important;
  }
  .font-size{
  	font-size: 30px!important;
  }

/**/
/* font */
/**/

/**/
/* defaults */
/**/
.form {
	margin: 0;
	outline: none;
	box-shadow: 0 0 20px rgba(0,0,0,.3);
	font: 13px/1.55 'Open Sans', Helvetica, Arial, sans-serif;
	color: #666;
}
.form header {
	display: block;
	padding: 20px 30px;	
	border-bottom: 1px solid rgba(0,0,0,.1);
	background: rgba(248,248,248,.9);
	font-size: 25px;
	font-weight: 300;
	color: #232323;
}
.form fieldset {
	display: block;	
	padding: 25px 30px 5px;
	border: none;
	background: rgba(255,255,255,.9);
}
.form fieldset + fieldset {
	border-top: 1px solid rgba(0,0,0,.1);
}
.form section {
	margin-bottom: 20px;
}
.form footer {
	display: block;
	padding: 15px 30px 25px;
	border-top: 1px solid rgba(0,0,0,.1);
	background: rgba(248,248,248,.9);
}
.form footer:after {
	content: '';
	display: table;
	clear: both;
}
.form a {
	color: #2da5da;
}
.form .label {
	display: block;
	margin-bottom: 6px;
	line-height: 19px;
	font-weight: 400;
}
.form .label.col {
	margin: 0;
	padding-top: 10px;
}
.form .note {
	margin-top: 6px;
	padding: 0 1px;
	font-size: 11px;
	line-height: 15px;
	color: #999;
}
.form .input,
.form .select,
.form .textarea,
.form .radio,
.form .checkbox,
.form .toggle,
.form .button {
	position: relative;
	display: block;
}
.form .input input,
.form .select select,
.form .textarea textarea {
	display: block;
	box-sizing: border-box;
	-moz-box-sizing: border-box;
	width: 100%;
	height: 39px;
	padding: 6px 10px;
	outline: none;
	border-width: 2px;
	border-style: solid;
	border-radius: 0;
	background: #fff;
	font: 15px/23px 'Open Sans', Helvetica, Arial, sans-serif;
	color: #404040;
	appearance: normal;
	-moz-appearance: none;
	-webkit-appearance: none;
}
.form .progress {
	float: right;
	margin-top: 10px;
	line-height: 39px;
	color: #232323;
}
.form button::-moz-focus-inner {
	padding: 0;
	border: 0;
}


/**/
/* captcha inputs */
/**/
.form .input-captcha img {
	position: absolute;
	top: 2px;
	right: 2px;
	border-left: 1px solid #e5e5e5;
}


/**/
/* file inputs */
/**/
.form .input-file .button {
	position: absolute;
	top: 4px;
	right: 4px;
	float: none;
	height: 31px;
	margin: 0;
	padding: 0 20px;
	font-size: 13px;
	line-height: 31px;
}
.form .input-file .button:hover {
	box-shadow: none;
}
.form .input-file .button input {
	position: absolute;
	top: 0;
	right: 0;
	padding: 0;
	font-size: 30px;
	cursor: pointer;
	opacity: 0;
}


/**/
/* selects */
/**/
.form .select i {
	position: absolute;
	top: 2px;
	right: 2px;
	width: 28px;
	height: 35px;
	background: #fff;
	pointer-events: none;
}
.form .select i:after,
.form .select i:before {
	content: '';
	position: absolute;
	right: 10px;
	border-right: 4px solid transparent;
	border-left: 4px solid transparent;
}
.form .select i:after {
	bottom: 12px;
	border-top: 4px solid #404040;
}
.form .select i:before {
	top: 12px;
	border-bottom: 4px solid #404040;
}
.form .select select {
	padding-right: 28px;
}
.form .select-multiple select {
	height: auto;
}


/**/
/* textareas */
/**/
.form .textarea textarea {
	height: auto;
	resize: none;
}
.form .textarea-resizable textarea {
	resize: vertical;	
}
.form .textarea-expandable textarea {
	height: 39px;
}
.form .textarea-expandable textarea:focus {
	height: auto;
}


/**/
/* radios and checkboxes */
/**/
.form .radio,
.form .checkbox {
	margin-bottom: 4px;
	padding-left: 27px;
	font-size: 15px;
	line-height: 27px;
	color: #404040;
	cursor: pointer;
}
.form .radio:last-child,
.form .checkbox:last-child {
	margin-bottom: 0;
}
.form .radio input,
.form .checkbox input {
	position: absolute;
	left: -9999px;
}
.form .radio i,
.form .checkbox i {
	position: absolute;
	top: 5px;
	left: 0;
	display: block;
	width: 13px;
	height: 13px;
	outline: none;
	border-width: 2px;
	border-style: solid;
	background: #fff;
}
.form .radio i {
	border-radius: 50%;
}
.form .radio input + i:after,
.form .checkbox input + i:after {
	position: absolute;
	opacity: 0;
	-ms-transition: opacity 0.1s;
	-moz-transition: opacity 0.1s;
	-webkit-transition: opacity 0.1s;
}
.form .radio input + i:after {
	content: '';
	top: 4px;
	left: 4px;
	width: 5px;
	height: 5px;
	border-radius: 50%;
}
.form .checkbox input + i:after {
	content: '\f00c';
	top: -1px;
	left: -1px;
	width: 15px;
	height: 15px;
	font: normal 12px/16px FontAwesome;
	text-align: center;
}
.form .radio input:checked + i:after,
.form .checkbox input:checked + i:after {
	opacity: 1;
}
.form .inline-group {
	margin: 0 -30px -4px 0;
}
.form .inline-group:after {
	content: '';
	display: table;
	clear: both;
}
.form .inline-group .radio,
.form .inline-group .checkbox {
	float: left;
	margin-right: 30px;
}
.form .inline-group .radio:last-child,
.form .inline-group .checkbox:last-child {
	margin-bottom: 4px;
}


/**/
/* toggles */
/**/
.form .toggle {
	margin-bottom: 4px;
	padding-right: 61px;
	font-size: 15px;
	line-height: 27px;
	color: #404040;
	cursor: pointer;
}
.form .toggle:last-child {
	margin-bottom: 0;
}
.form .toggle input {
	position: absolute;
	left: -9999px;
}
.form .toggle i {
	content: '';
	position: absolute;
	top: 4px;
	right: 0;
	display: block;
	width: 49px;
	height: 17px;
	border-width: 2px;
	border-style: solid;
	border-radius: 12px;
	background: #fff;
}
.form .toggle i:after {
	content: 'OFF';
	position: absolute;
	top: 2px;
	right: 8px;
	left: 8px;
	font-style: normal;
	font-size: 9px;
	line-height: 13px;
	font-weight: 700;
	text-align: left;
	color: #5f5f5f;
}
.form .toggle i:before {
	content: '';
	position: absolute;
	z-index: 1;
	top: 4px;
	right: 4px;
	display: block;
	width: 9px;
	height: 9px;
	border-radius: 50%;
	opacity: 1;
	-ms-transition: right 0.2s;
	-moz-transition: right 0.2s;
	-webkit-transition: right 0.2s;
}
.form .toggle input:checked + i:after {
	content: 'ON';
	text-align: right;
}
.form .toggle input:checked + i:before {
	right: 36px;
}


/**/
/* ratings */
/**/
.form .rating {
	margin-bottom: 4px;
	font-size: 15px;
	line-height: 27px;
	color: #404040;
}
.form .rating:last-child {
	margin-bottom: 0;
}
.form .rating input {
	position: absolute;
	left: -9999px;
}
.form .rating label {
	display: block;
	float: right;
	height: 17px;
	margin-top: 5px;
	padding: 0 2px;
	font-size: 17px;
	line-height: 17px;
	cursor: pointer;
}


/**/
/* buttons */
/**/
.form .button {
	float: right;
	height: 39px;
	overflow: hidden;
	margin: 10px 0 0 20px;
	padding: 0 25px;
	outline: none;
	border: 0;
	font: 300 15px/39px 'Open Sans', Helvetica, Arial, sans-serif;
	text-decoration: none;
	color: #fff;
	cursor: pointer;
}
.form .button-uploading {
	position: relative;
	color: transparent;
	cursor: default;
}
.form .button-uploading:after {
	content: 'Uploading...';
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	color: #fff;
	-o-animation: blink 1s linear infinite;
	-ms-animation: blink 1s linear infinite;
	-moz-animation: blink 1s linear infinite; 
	-webkit-animation: blink 1s linear infinite;
}
@-o-keyframes blink
{
  0% {opacity: 1}
  50% {opacity: 0.3}
  100% {opacity: 1}
}
@-ms-keyframes blink
{
  0% {opacity: 1}
  50% {opacity: 0.3}
  100% {opacity: 1}
}
@-moz-keyframes blink
{
  0% {opacity: 1}
  50% {opacity: 0.3}
  100% {opacity: 1}
}
@-webkit-keyframes blink
{
  0% {opacity: 1}
  50% {opacity: 0.3}
  100% {opacity: 1}
}


/**/
/* icons */
/**/
.form .icon-append,
.form .icon-prepend {
	position: absolute;
	top: 5px;
	width: 29px;
	height: 29px;
	font-size: 15px;
	line-height: 29px;
	text-align: center;
}
.form .icon-append {
	right: 5px;
	padding-left: 3px;
	border-left-width: 1px;
	border-left-style: solid;
}
.form .icon-prepend {
	left: 5px;
	padding-right: 3px;
	border-right-width: 1px;
	border-right-style: solid;
}
.form .input .icon-prepend + input,
.form .textarea .icon-prepend + textarea {
	padding-left: 46px;
}
.form .input .icon-append + input,
.form .textarea .icon-append + textarea {
	padding-right: 46px;
}
.form .input .icon-prepend + .icon-append + input,
.form .textarea .icon-prepend + .icon-append + textarea {
	padding-left: 46px;
}


/**/
/* grid */
/**/
.form .row {
	margin: 0 -15px;
}
.form .row:after {
	content: '';
	display: table;
	clear: both;
}
.form .col {
	float: left;
	min-height: 1px;
	padding-right: 15px;
	padding-left: 15px;
	box-sizing: border-box;
	-moz-box-sizing: border-box;
}
.form .col-1 {
	width: 8.33%;
}
.form .col-2 {
	width: 16.66%;
}
.form .col-3 {
	width: 25%;
}
.form .col-4 {
	width: 33.33%;
}
.form .col-5 {
	width: 41.66%;
}
.form .col-6 {
	width: 50%;
}
.form .col-7 {
	width: 58.33%;
}
.form .col-8 {
	width: 66.67%;
}
.form .col-9 {
	width: 75%;
}
.form .col-10 {
	width: 83.33%;
}
.form .col-11 {
	width: 91.66%;
}
@media screen and (max-width: 600px) {
	.form .col {
		float: none;
		width: 100%;
	}
}


/**/
/* tooltips */
/**/
.form .tooltip {
	position: absolute;
	z-index: 1;
	left: -9999px;
	padding: 2px 8px 3px;
	font-size: 11px;
	line-height: 16px;
	font-weight: 400;
	background: rgba(0,0,0,0.9);
	color: #fff;
	opacity: 0;
	-ms-transition: margin 0.3s, opacity 0.3s;
	-moz-transition: margin 0.3s, opacity 0.3s;
	-webkit-transition: margin 0.3s, opacity 0.3s;
}
.form .tooltip:after {
	content: '';
	position: absolute;
}
.form .input input:focus + .tooltip,
.form .textarea textarea:focus + .tooltip {
	opacity: 1;	
}

.form .tooltip-top-right {
	bottom: 100%;
	margin-bottom: 15px;
}
.form .tooltip-top-right:after {
	top: 100%;
	right: 16px;	
	border-top: 4px solid rgba(0,0,0,0.9);
	border-right: 4px solid transparent;
	border-left: 4px solid transparent;
}
.form .input input:focus + .tooltip-top-right,
.form .textarea textarea:focus + .tooltip-top-right {
	right: 0;
	left: auto;
	margin-bottom: 5px;
}

.form .tooltip-top-left {
	bottom: 100%;
	margin-bottom: 15px;
}
.form .tooltip-top-left:after {
	top: 100%;
	left: 16px;
	border-top: 4px solid rgba(0,0,0,0.9);
	border-right: 4px solid transparent;
	border-left: 4px solid transparent;
}
.form .input input:focus + .tooltip-top-left,
.form .textarea textarea:focus + .tooltip-top-left {
	right: auto;
	left: 0;
	margin-bottom: 5px;
}

.form .tooltip-right {
	top: 9px;
	white-space: nowrap;
	margin-left: 15px;
}
.form .tooltip-right:after {
	top: 6px;
	right: 100%;
	border-top: 4px solid transparent;
	border-right: 4px solid rgba(0,0,0,0.9);
	border-bottom: 4px solid transparent;
}
.form .input input:focus + .tooltip-right,
.form .textarea textarea:focus + .tooltip-right {
	left: 100%;
	margin-left: 5px;
}

.form .tooltip-left {
	top: 9px;
	white-space: nowrap;
	margin-right: 15px;
}
.form .tooltip-left:after {
	top: 6px;
	left: 100%;
	border-top: 4px solid transparent;
	border-bottom: 4px solid transparent;
	border-left: 4px solid rgba(0,0,0,0.9);
}
.form .input input:focus + .tooltip-left,
.form .textarea textarea:focus + .tooltip-left {
	right: 100%;
	left: auto;
	margin-right: 5px;
}

.form .tooltip-bottom-right {
	top: 100%;
	margin-top: 15px;
}
.form .tooltip-bottom-right:after {
	bottom: 100%;
	right: 16px;	
	border-right: 4px solid transparent;
	border-bottom: 4px solid rgba(0,0,0,0.9);
	border-left: 4px solid transparent;
}
.form .input input:focus + .tooltip-bottom-right,
.form .textarea textarea:focus + .tooltip-bottom-right {
	right: 0;
	left: auto;
	margin-top: 5px;
}

.form .tooltip-bottom-left {
	top: 100%;
	margin-top: 15px;
}
.form .tooltip-bottom-left:after {
	bottom: 100%;
	left: 16px;
	border-right: 4px solid transparent;
	border-bottom: 4px solid rgba(0,0,0,0.9);
	border-left: 4px solid transparent;
}
.form .input input:focus + .tooltip-bottom-left,
.form .textarea textarea:focus + .tooltip-bottom-left {
	right: auto;
	left: 0;
	margin-top: 5px;
}


/**/
/* normal state */
/**/
.form .input input,
.form .select select,
.form .textarea textarea,
.form .radio i,
.form .checkbox i,
.form .toggle i,
.form .icon-append,
.form .icon-prepend {
	border-color: #e5e5e5;
	-ms-transition: border-color 0.3s;
	-moz-transition: border-color 0.3s;
	-webkit-transition: border-color 0.3s;
}
.form .toggle i:before {
	background-color: #2da5da;	
}
.form .rating label {
	color: #ccc;
	-ms-transition: color 0.3s;
	-moz-transition: color 0.3s;
	-webkit-transition: color 0.3s;
}
.form .button {
	background-color: #2da5da;
	opacity: 0.8;
	-ms-transition: opacity 0.2s;
	-moz-transition: opacity 0.2s;
	-webkit-transition: opacity 0.2s;
}
.form .button.button-secondary {
	background-color: #b3b3b3;
}
.form .icon-append,
.form .icon-prepend {
	color: #ccc;
}


/**/
/* hover state */
/**/
.form .input:hover input,
.form .select:hover select,
.form .textarea:hover textarea,
.form .radio:hover i,
.form .checkbox:hover i,
.form .toggle:hover i,
.form .ui-slider-handle:hover {
	border-color: #8dc9e5;
}
.form .rating input + label:hover,
.form .rating input + label:hover ~ label {
	color: #2da5da;
}
.form .button:hover {
	opacity: 1;
}


/**/
/* focus state */
/**/
.form .input input:focus,
.form .select select:focus,
.form .textarea textarea:focus,
.form .radio input:focus + i,
.form .checkbox input:focus + i,
.form .toggle input:focus + i {
	border-color: #2da5da;
}


/**/
/* checked state */
/**/
.form .radio input + i:after {
	background-color: #2da5da;	
}
.form .checkbox input + i:after {
	color: #2da5da;
}
.form .radio input:checked + i,
.form .checkbox input:checked + i,
.form .toggle input:checked + i {
	border-color: #2da5da;	
}
.form .rating input:checked ~ label {
	color: #2da5da;	
}


/**/
/* error state */
/**/
.form .state-error input,
.form .state-error select,
.form .state-error select + i,
.form .state-error textarea,
.form .radio.state-error i,
.form .checkbox.state-error i,
.form .toggle.state-error i,
.form .toggle.state-error input:checked + i {
	background: #fff0f0;
}
.form .state-error + em {
	display: block;
	margin-top: 6px;
	padding: 0 1px;
	font-style: normal;
	font-size: 11px;
	line-height: 15px;
	color: #ee9393;
}
.form .rating.state-error + em {
	margin-top: -4px;
	margin-bottom: 4px;
}


/**/
/* success state */
/**/
.form .state-success input,
.form .state-success select,
.form .state-success select + i,
.form .state-success textarea,
.form .radio.state-success i,
.form .checkbox.state-success i,
.form .toggle.state-success i,
.form .toggle.state-success input:checked + i {
	background: #f0fff0;
}
.form .state-success + em {
	display: block;
	margin-top: 6px;
	padding: 0 1px;
	font-style: normal;
	font-size: 11px;
	line-height: 15px;
	color: #ee9393;
}
.form .note-success {
	color: #6fb679;
}


/**/
/* disabled state */
/**/
.form .input.state-disabled input,
.form .select.state-disabled,
.form .textarea.state-disabled,
.form .radio.state-disabled,
.form .checkbox.state-disabled,
.form .toggle.state-disabled,
.form .button.state-disabled {
	cursor: default;
	opacity: 0.5;
}
.form .input.state-disabled:hover input,
.form .select.state-disabled:hover select,
.form .textarea.state-disabled:hover textarea,
.form .radio.state-disabled:hover i,
.form .checkbox.state-disabled:hover i,
.form .toggle.state-disabled:hover i {
	border-color: #e5e5e5;
}


/**/
/* submited state */
/**/
.form .message {
	display: none;
	color: #6fb679;
}
.form .message i {
	display: block;
	margin: 0 auto 20px;
	width: 81px;
	height: 81px;
	border: 1px solid #6fb679;
	border-radius: 50%;
	font-size: 30px;
	line-height: 81px;
}
.form.submited fieldset,
.form.submited footer {
	display: none;
}
.form.submited .message {
	display: block;
	padding: 25px 30px;
	background: rgba(255,255,255,.9);
	font: 300 18px/27px 'Open Sans', Helvetica, Arial, sans-serif;
	text-align: center;
}


/**/
/* datepicker */
/**/
.ui-datepicker {
	display: none;
	padding: 10px 12px;
	background: rgba(255,255,255,0.9);
	box-shadow: 0 0 10px rgba(0,0,0,.3);
	font: 13px/1.55 'Open Sans', Helvetica, Arial, sans-serif;
	text-align: center;
	color: #666;
}
.ui-datepicker a {
	color: #404040;
}
.ui-datepicker-header {
	position: relative;
	margin: -10px -12px 10px;
	padding: 10px;
	border-bottom: 1px solid rgba(0,0,0,.1);
	font-size: 15px;
	line-height: 27px;
}
.ui-datepicker-prev, 
.ui-datepicker-next {
	position: absolute;
	top: 0;
	display: block;
	width: 47px;
	height: 47px;
	font-size: 15px;
	line-height: 47px;
	text-decoration: none;
	cursor: pointer;
}
.ui-datepicker-prev {
	left: 0;
}
.ui-datepicker-next {
	right: 0;
}
.ui-datepicker-calendar {
	border-collapse: collapse;
	font-size: 13px;
	line-height: 27px;
}
.ui-datepicker-calendar th {
	color: #999;
}
.ui-datepicker-calendar a,
.ui-datepicker-calendar span {
	display: block;
	width: 31px;
	margin: auto;
	text-decoration: none;
	color: #404040;
}
.ui-datepicker-calendar a:hover {
	background: rgba(0,0,0,.05);	
}
.ui-datepicker-calendar span {
	color: #bfbfbf;
}
.ui-datepicker-today a {
	font-weight: 700;
}
.ui-datepicker-calendar .ui-state-active {
	background: rgba(0,0,0,.05);
	cursor: default;	
}
.ui-datepicker-inline {
	border: 2px solid #e5e5e5;
	background: #fff;
	box-shadow: none;
}
.ui-datepicker-inline .ui-datepicker-header {
	line-height: 47px;
}
.ui-datepicker-inline .ui-datepicker-calendar {
	width: 100%;
}


/**/
/* slider */
/**/
.form .ui-slider {
	position: relative;
	height: 3px;
	border: 2px solid #e5e5e5;
	background: #fff;
	margin: 12px 6px 26px;
}
.form .ui-slider-handle {
	position: absolute;
	width: 15px;
	height: 15px;
	margin: -8px 0 0 -8px;
	border: 2px solid #e5e5e5;
	outline: none;
	background: #fff;
	-ms-transition: border-color 0.3s;
	-moz-transition: border-color 0.3s;
	-webkit-transition: border-color 0.3s;
}


/**/
/* modal */
/**/
.form-modal {
	position: fixed;
	z-index: 1;
	display: none;
	width: 400px;
}
.form-modal-overlay {
	position: fixed;
	top: 0;
	left: 0;
	display: none;
	width: 100%;
	height: 100%;
	background: rgba(0,0,0,0.7);
}


/**/
/* bootstrap compatibility */
/**/
/*
.form *,
.form *:after,
.form *:before {
	margin: 0;
	padding: 0;
	box-sizing: content-box;
	-moz-box-sizing: content-box;
}
*/
.form .label {
	border-radius: 0;
	font-size: 100%;
	text-align: left;
	white-space: normal;
	color: inherit;
}
.form .radio,
.form .checkbox {
	font-weight: 400;
}
.form .radio + .radio,
.form .checkbox + .checkbox {
  margin-top: 0;
}
/* Default highlight color */
::-moz-selection {
  color: #fff;
  background: #d65679;
}
::selection {
  color: #fff;
  background: #d65679;
}
.register-css{
	font-size: 60px;
	color: #222;
	line-height: 1.2;
	display: block;
}
.register-css span{
	color: #d65779;
}
/* heading */
.heading-style {
	font-size: 30px;
	color: #222;
	line-height: 1.2;
	display: block;
}
.heading-style span {
	color: #d65779;
}
.font-secondary {
	font-family: 'Niconne', cursive !important;
}
h1, h2, h3, h4, h5, h6 {
	color: #555;
	margin-top: 5px;
	text-shadow: none;
	font-weight: normal;
	font-family: "Open Sans", Arial, sans-serif;
}
/* Designing presentation section */
.our-presentation {
	background: url(assets/img-temp/presentation.jpg)!important;
	background-size: cover;
	background-position: center center;
	position: relative;
	z-index: 1;
}

.our-presentation:before {
	position: absolute;
	top: 0;
	left: 0;
	content: "";
	width: 100%;
	height: 100%;
	background: rgba(0,0,0,0.4);
	z-index: -1;
}

.our-presentation .heading-style,
.our-presentation .heading-style-block-text {
	color: #fff;
}

.our-presentation .heading-style-block-text {
	max-width: 60%;
}
.contact__map {
	min-height: 600px;
}
.contact__right {
	background: url(assets/img-temp/contact.jpg) no-repeat;
	background-size: cover;
}

.contact__right--list {
	background: #d65679;
	opacity: 0.8;
	max-height: 600px;
}

.contact__right--list .heading-style,
.contact__right--list .heading-style-list .fa {
	color: #fff;
}

.contact__right--list .first-item {
	font-size: 11px;
	text-transform: uppercase;
	color: #f8aabf;
	padding: 5px 0;
}

.contact__right--list .second-item {
	color: #fff;
	font-weight: bold;
}
@media (min-width: 992px) {
	.insta {
		max-height: 200px;
	}
}

.insta__info {
	background: #d65779;
	position: relative;
	z-index: -1;
}

.insta__info--middle {
	position: absolute;
	z-index: 1;
	top: 0;
	background: rgba(214,87,121,0.9);
	left: 0;
	width: 100%;
	height: 100%;
  display: table;
}
.insta__info--middle-inner {
  display: table-cell;
  vertical-align: middle;
}

.insta__info__top {
	color: #f8aabf;
	font-size: 16px;
}

.insta__info__bott {
	color: #fff;
	font-size: 24px;
}

@media (max-width: 540px) {
	.insta__info__top {
		font-size: 14px;
	}
	.insta__info__bott {
		color: #fff;
		font-size: 18px;
	}
}
@media (max-width: 430px) {
	.insta__info__top {
		font-size: 11px;
	}
	.insta__info__bott {
		color: #fff;
		font-size: 16px;
	}
}

.insta__img {
	width: 100%;
	height: 100%;
}

.subfooter__logo {
	text-transform: uppercase;
	font-size:20px;
	color: #222;
	font-weight: bold;
}

.subfooter__logo__img {
	margin: 0 auto;
}
.subfooter__logo:hover {
	text-decoration: none;
}

.subfooter__link .icon-custom {
	background: #f1f1f1;
	color: #cecece;
	border: none;
}
.subfooter__link:hover .icon-custom {
	background: #d65779;
	color: #fff;
}

.subfooter__copyright {
	font-size: 12px;
}

.subfooter__copyright--pink {
	color: #d65679;
}

