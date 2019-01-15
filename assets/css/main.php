<?php 

header("Content-type: text/css"); ?>

@charset "UTF-8";
@import url(font-awesome.min.css);
@import url("https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700");

	html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
		margin: 0;
		padding: 0;
		border: 0;
		font-size: 100%;
		font: inherit;
		vertical-align: baseline;

	}

	article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {
		display: block;
	}

	body {
		line-height: 1;
	}

	ol, ul {
		list-style: none;
	}

	blockquote, q {
		quotes: none;
	}

	blockquote:before, blockquote:after, q:before, q:after {
		content: '';
		content: none;
	}

	table {
		border-collapse: collapse;
		border-spacing: 0;
	}

	body {
		-webkit-text-size-adjust: none;
	}

/* Box Model */

	*, *:before, *:after {
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
	}

/* Containers */

	.container {
		margin-left: auto;
		margin-right: auto;
	}

	.container.\31 25\25 {
		width: 100%;
		max-width: 100rem;
		min-width: 80rem;
	}

	.container.\37 5\25 {
		width: 60rem;
	}

	.container.\35 0\25 {
		width: 40rem;
	}

	.container.\32 5\25 {
		width: 20rem;
	}

	.container {
		width: 80rem;
	}

	@media screen and (max-width: 1680px) {

		.container.\31 25\25 {
			width: 100%;
			max-width: 100rem;
			min-width: 80rem;
		}

		.container.\37 5\25 {
			width: 60rem;
		}

		.container.\35 0\25 {
			width: 40rem;
		}

		.container.\32 5\25 {
			width: 20rem;
		}

		.container {
			width: 80rem;
		}

	}

	@media screen and (max-width: 1280px) {

		.container.\31 25\25 {
			width: 100%;
			max-width: 81.25rem;
			min-width: 65rem;
		}

		.container.\37 5\25 {
			width: 48.75rem;
		}

		.container.\35 0\25 {
			width: 32.5rem;
		}

		.container.\32 5\25 {
			width: 16.25rem;
		}

		.container {
			width: 65rem;
		}

	}

	@media screen and (max-width: 980px) {

		.container.\31 25\25 {
			width: 100%;
			max-width: 112.5%;
			min-width: 90%;
		}

		.container.\37 5\25 {
			width: 67.5%;
		}

		.container.\35 0\25 {
			width: 45%;
		}

		.container.\32 5\25 {
			width: 22.5%;
		}

		.container {
			width: 90%;
		}

	}

	@media screen and (max-width: 736px) {

		.container.\31 25\25 {
			width: 100%;
			max-width: 112.5%;
			min-width: 90%;
		}

		.container.\37 5\25 {
			width: 67.5%;
		}

		.container.\35 0\25 {
			width: 45%;
		}

		.container.\32 5\25 {
			width: 22.5%;
		}

		.container {
			width: 90% !important;
		}

	}

	@media screen and (max-width: 480px) {

		.container.\31 25\25 {
			width: 100%;
			max-width: 112.5%;
			min-width: 90%;
		}

		.container.\37 5\25 {
			width: 67.5%;
		}

		.container.\35 0\25 {
			width: 45%;
		}

		.container.\32 5\25 {
			width: 22.5%;
		}

		.container {
			width: 90% !important;
		}

	}

/* Grid */

	.row {
		border-bottom: solid 1px transparent;
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
	}

	.row > * {
		float: left;
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
	}

	.row:after, .row:before {
		content: '';
		display: block;
		clear: both;
		height: 0;
	}

	.row.uniform > * > :first-child {
		margin-top: 0;
	}

	.row.uniform > * > :last-child {
		margin-bottom: 0;
	}

	.row.\30 \25 > * {
		padding: 0 0 0 0rem;
	}

	.row.\30 \25 {
		margin: 0 0 -1px 0rem;
	}

	.row.uniform.\30 \25 > * {
		padding: 0rem 0 0 0rem;
	}

	.row.uniform.\30 \25 {
		margin: 0rem 0 -1px 0rem;
	}

	.row > * {
		padding: 0 0 0 2rem;
	}

	.row {
		margin: 0 0 -1px -2rem;
	}

	.row.uniform > * {
		padding: 2rem 0 0 2rem;
	}

	.row.uniform {
		margin: -2rem 0 -1px -2rem;
	}

	.row.\32 00\25 > * {
		padding: 0 0 0 4rem;
	}

	.row.\32 00\25 {
		margin: 0 0 -1px -4rem;
	}

	.row.uniform.\32 00\25 > * {
		padding: 4rem 0 0 4rem;
	}

	.row.uniform.\32 00\25 {
		margin: -4rem 0 -1px -4rem;
	}

	.row.\31 50\25 > * {
		padding: 0 0 0 3rem;
	}

	.row.\31 50\25 {
		margin: 0 0 -1px -3rem;
	}

	.row.uniform.\31 50\25 > * {
		padding: 3rem 0 0 3rem;
	}

	.row.uniform.\31 50\25 {
		margin: -3rem 0 -1px -3rem;
	}

	.row.\35 0\25 > * {
		padding: 0 0 0 1rem;
	}

	.row.\35 0\25 {
		margin: 0 0 -1px -1rem;
	}

	.row.uniform.\35 0\25 > * {
		padding: 1rem 0 0 1rem;
	}

	.row.uniform.\35 0\25 {
		margin: -1rem 0 -1px -1rem;
	}

	.row.\32 5\25 > * {
		padding: 0 0 0 0.5rem;
	}

	.row.\32 5\25 {
		margin: 0 0 -1px -0.5rem;
	}

	.row.uniform.\32 5\25 > * {
		padding: 0.5rem 0 0 0.5rem;
	}

	.row.uniform.\32 5\25 {
		margin: -0.5rem 0 -1px -0.5rem;
	}

	.\31 2u, .\31 2u\24 {
		width: 100%;
		clear: none;
		margin-left: 0;
	}

	.\31 1u, .\31 1u\24 {
		width: 91.6666666667%;
		clear: none;
		margin-left: 0;
	}

	.\31 0u, .\31 0u\24 {
		width: 83.3333333333%;
		clear: none;
		margin-left: 0;
	}

	.\39 u, .\39 u\24 {
		width: 75%;
		clear: none;
		margin-left: 0;
	}

	.\38 u, .\38 u\24 {
		width: 66.6666666667%;
		clear: none;
		margin-left: 0;
	}

	.\37 u, .\37 u\24 {
		width: 58.3333333333%;
		clear: none;
		margin-left: 0;
	}

	.\36 u, .\36 u\24 {
		width: 50%;
		clear: none;
		margin-left: 0;
	}

	.\35 u, .\35 u\24 {
		width: 41.6666666667%;
		clear: none;
		margin-left: 0;
	}

	.\34 u, .\34 u\24 {
		width: 33.3333333333%;
		clear: none;
		margin-left: 0;
	}

	.\33 u, .\33 u\24 {
		width: 25%;
		clear: none;
		margin-left: 0;
	}

	.\32 u, .\32 u\24 {
		width: 16.6666666667%;
		clear: none;
		margin-left: 0;
	}

	.\31 u, .\31 u\24 {
		width: 8.3333333333%;
		clear: none;
		margin-left: 0;
	}

	.\31 2u\24 + *,
	.\31 1u\24 + *,
	.\31 0u\24 + *,
	.\39 u\24 + *,
	.\38 u\24 + *,
	.\37 u\24 + *,
	.\36 u\24 + *,
	.\35 u\24 + *,
	.\34 u\24 + *,
	.\33 u\24 + *,
	.\32 u\24 + *,
	.\31 u\24 + * {
		clear: left;
	}

	.\-11u {
		margin-left: 91.66667%;
	}

	.\-10u {
		margin-left: 83.33333%;
	}

	.\-9u {
		margin-left: 75%;
	}

	.\-8u {
		margin-left: 66.66667%;
	}

	.\-7u {
		margin-left: 58.33333%;
	}

	.\-6u {
		margin-left: 50%;
	}

	.\-5u {
		margin-left: 41.66667%;
	}

	.\-4u {
		margin-left: 33.33333%;
	}

	.\-3u {
		margin-left: 25%;
	}

	.\-2u {
		margin-left: 16.66667%;
	}

	.\-1u {
		margin-left: 8.33333%;
	}

	@media screen and (max-width: 1680px) {

		.row > * {
			padding: 0 0 0 2rem;
		}

		.row {
			margin: 0 0 -1px -2rem;
		}

		.row.uniform > * {
			padding: 2rem 0 0 2rem;
		}

		.row.uniform {
			margin: -2rem 0 -1px -2rem;
		}

		.row.\32 00\25 > * {
			padding: 0 0 0 4rem;
		}

		.row.\32 00\25 {
			margin: 0 0 -1px -4rem;
		}

		.row.uniform.\32 00\25 > * {
			padding: 4rem 0 0 4rem;
		}

		.row.uniform.\32 00\25 {
			margin: -4rem 0 -1px -4rem;
		}

		.row.\31 50\25 > * {
			padding: 0 0 0 3rem;
		}

		.row.\31 50\25 {
			margin: 0 0 -1px -3rem;
		}

		.row.uniform.\31 50\25 > * {
			padding: 3rem 0 0 3rem;
		}

		.row.uniform.\31 50\25 {
			margin: -3rem 0 -1px -3rem;
		}

		.row.\35 0\25 > * {
			padding: 0 0 0 1rem;
		}

		.row.\35 0\25 {
			margin: 0 0 -1px -1rem;
		}

		.row.uniform.\35 0\25 > * {
			padding: 1rem 0 0 1rem;
		}

		.row.uniform.\35 0\25 {
			margin: -1rem 0 -1px -1rem;
		}

		.row.\32 5\25 > * {
			padding: 0 0 0 0.5rem;
		}

		.row.\32 5\25 {
			margin: 0 0 -1px -0.5rem;
		}

		.row.uniform.\32 5\25 > * {
			padding: 0.5rem 0 0 0.5rem;
		}

		.row.uniform.\32 5\25 {
			margin: -0.5rem 0 -1px -0.5rem;
		}

		.\31 2u\28xlarge\29, .\31 2u\24\28xlarge\29 {
			width: 100%;
			clear: none;
			margin-left: 0;
		}

		.\31 1u\28xlarge\29, .\31 1u\24\28xlarge\29 {
			width: 91.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 0u\28xlarge\29, .\31 0u\24\28xlarge\29 {
			width: 83.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\39 u\28xlarge\29, .\39 u\24\28xlarge\29 {
			width: 75%;
			clear: none;
			margin-left: 0;
		}

		.\38 u\28xlarge\29, .\38 u\24\28xlarge\29 {
			width: 66.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\37 u\28xlarge\29, .\37 u\24\28xlarge\29 {
			width: 58.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\36 u\28xlarge\29, .\36 u\24\28xlarge\29 {
			width: 50%;
			clear: none;
			margin-left: 0;
		}

		.\35 u\28xlarge\29, .\35 u\24\28xlarge\29 {
			width: 41.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\34 u\28xlarge\29, .\34 u\24\28xlarge\29 {
			width: 33.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\33 u\28xlarge\29, .\33 u\24\28xlarge\29 {
			width: 25%;
			clear: none;
			margin-left: 0;
		}

		.\32 u\28xlarge\29, .\32 u\24\28xlarge\29 {
			width: 16.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 u\28xlarge\29, .\31 u\24\28xlarge\29 {
			width: 8.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\31 2u\24\28xlarge\29 + *,
		.\31 1u\24\28xlarge\29 + *,
		.\31 0u\24\28xlarge\29 + *,
		.\39 u\24\28xlarge\29 + *,
		.\38 u\24\28xlarge\29 + *,
		.\37 u\24\28xlarge\29 + *,
		.\36 u\24\28xlarge\29 + *,
		.\35 u\24\28xlarge\29 + *,
		.\34 u\24\28xlarge\29 + *,
		.\33 u\24\28xlarge\29 + *,
		.\32 u\24\28xlarge\29 + *,
		.\31 u\24\28xlarge\29 + * {
			clear: left;
		}

		.\-11u\28xlarge\29 {
			margin-left: 91.66667%;
		}

		.\-10u\28xlarge\29 {
			margin-left: 83.33333%;
		}

		.\-9u\28xlarge\29 {
			margin-left: 75%;
		}

		.\-8u\28xlarge\29 {
			margin-left: 66.66667%;
		}

		.\-7u\28xlarge\29 {
			margin-left: 58.33333%;
		}

		.\-6u\28xlarge\29 {
			margin-left: 50%;
		}

		.\-5u\28xlarge\29 {
			margin-left: 41.66667%;
		}

		.\-4u\28xlarge\29 {
			margin-left: 33.33333%;
		}

		.\-3u\28xlarge\29 {
			margin-left: 25%;
		}

		.\-2u\28xlarge\29 {
			margin-left: 16.66667%;
		}

		.\-1u\28xlarge\29 {
			margin-left: 8.33333%;
		}

	}

	@media screen and (max-width: 1280px) {

		.row > * {
			padding: 0 0 0 1.5rem;
		}

		.row {
			margin: 0 0 -1px -1.5rem;
		}

		.row.uniform > * {
			padding: 1.5rem 0 0 1.5rem;
		}

		.row.uniform {
			margin: -1.5rem 0 -1px -1.5rem;
		}

		.row.\32 00\25 > * {
			padding: 0 0 0 3rem;
		}

		.row.\32 00\25 {
			margin: 0 0 -1px -3rem;
		}

		.row.uniform.\32 00\25 > * {
			padding: 3rem 0 0 3rem;
		}

		.row.uniform.\32 00\25 {
			margin: -3rem 0 -1px -3rem;
		}

		.row.\31 50\25 > * {
			padding: 0 0 0 2.25rem;
		}

		.row.\31 50\25 {
			margin: 0 0 -1px -2.25rem;
		}

		.row.uniform.\31 50\25 > * {
			padding: 2.25rem 0 0 2.25rem;
		}

		.row.uniform.\31 50\25 {
			margin: -2.25rem 0 -1px -2.25rem;
		}

		.row.\35 0\25 > * {
			padding: 0 0 0 0.75rem;
		}

		.row.\35 0\25 {
			margin: 0 0 -1px -0.75rem;
		}

		.row.uniform.\35 0\25 > * {
			padding: 0.75rem 0 0 0.75rem;
		}

		.row.uniform.\35 0\25 {
			margin: -0.75rem 0 -1px -0.75rem;
		}

		.row.\32 5\25 > * {
			padding: 0 0 0 0.375rem;
		}

		.row.\32 5\25 {
			margin: 0 0 -1px -0.375rem;
		}

		.row.uniform.\32 5\25 > * {
			padding: 0.375rem 0 0 0.375rem;
		}

		.row.uniform.\32 5\25 {
			margin: -0.375rem 0 -1px -0.375rem;
		}

		.\31 2u\28large\29, .\31 2u\24\28large\29 {
			width: 100%;
			clear: none;
			margin-left: 0;
		}

		.\31 1u\28large\29, .\31 1u\24\28large\29 {
			width: 91.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 0u\28large\29, .\31 0u\24\28large\29 {
			width: 83.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\39 u\28large\29, .\39 u\24\28large\29 {
			width: 75%;
			clear: none;
			margin-left: 0;
		}

		.\38 u\28large\29, .\38 u\24\28large\29 {
			width: 66.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\37 u\28large\29, .\37 u\24\28large\29 {
			width: 58.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\36 u\28large\29, .\36 u\24\28large\29 {
			width: 50%;
			clear: none;
			margin-left: 0;
		}

		.\35 u\28large\29, .\35 u\24\28large\29 {
			width: 41.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\34 u\28large\29, .\34 u\24\28large\29 {
			width: 33.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\33 u\28large\29, .\33 u\24\28large\29 {
			width: 25%;
			clear: none;
			margin-left: 0;
		}

		.\32 u\28large\29, .\32 u\24\28large\29 {
			width: 16.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 u\28large\29, .\31 u\24\28large\29 {
			width: 8.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\31 2u\24\28large\29 + *,
		.\31 1u\24\28large\29 + *,
		.\31 0u\24\28large\29 + *,
		.\39 u\24\28large\29 + *,
		.\38 u\24\28large\29 + *,
		.\37 u\24\28large\29 + *,
		.\36 u\24\28large\29 + *,
		.\35 u\24\28large\29 + *,
		.\34 u\24\28large\29 + *,
		.\33 u\24\28large\29 + *,
		.\32 u\24\28large\29 + *,
		.\31 u\24\28large\29 + * {
			clear: left;
		}

		.\-11u\28large\29 {
			margin-left: 91.66667%;
		}

		.\-10u\28large\29 {
			margin-left: 83.33333%;
		}

		.\-9u\28large\29 {
			margin-left: 75%;
		}

		.\-8u\28large\29 {
			margin-left: 66.66667%;
		}

		.\-7u\28large\29 {
			margin-left: 58.33333%;
		}

		.\-6u\28large\29 {
			margin-left: 50%;
		}

		.\-5u\28large\29 {
			margin-left: 41.66667%;
		}

		.\-4u\28large\29 {
			margin-left: 33.33333%;
		}

		.\-3u\28large\29 {
			margin-left: 25%;
		}

		.\-2u\28large\29 {
			margin-left: 16.66667%;
		}

		.\-1u\28large\29 {
			margin-left: 8.33333%;
		}

	}

	@media screen and (max-width: 980px) {

		.row > * {
			padding: 0 0 0 1.5rem;
		}

		.row {
			margin: 0 0 -1px -1.5rem;
		}

		.row.uniform > * {
			padding: 1.5rem 0 0 1.5rem;
		}

		.row.uniform {
			margin: -1.5rem 0 -1px -1.5rem;
		}

		.row.\32 00\25 > * {
			padding: 0 0 0 3rem;
		}

		.row.\32 00\25 {
			margin: 0 0 -1px -3rem;
		}

		.row.uniform.\32 00\25 > * {
			padding: 3rem 0 0 3rem;
		}

		.row.uniform.\32 00\25 {
			margin: -3rem 0 -1px -3rem;
		}

		.row.\31 50\25 > * {
			padding: 0 0 0 2.25rem;
		}

		.row.\31 50\25 {
			margin: 0 0 -1px -2.25rem;
		}

		.row.uniform.\31 50\25 > * {
			padding: 2.25rem 0 0 2.25rem;
		}

		.row.uniform.\31 50\25 {
			margin: -2.25rem 0 -1px -2.25rem;
		}

		.row.\35 0\25 > * {
			padding: 0 0 0 0.75rem;
		}

		.row.\35 0\25 {
			margin: 0 0 -1px -0.75rem;
		}

		.row.uniform.\35 0\25 > * {
			padding: 0.75rem 0 0 0.75rem;
		}

		.row.uniform.\35 0\25 {
			margin: -0.75rem 0 -1px -0.75rem;
		}

		.row.\32 5\25 > * {
			padding: 0 0 0 0.375rem;
		}

		.row.\32 5\25 {
			margin: 0 0 -1px -0.375rem;
		}

		.row.uniform.\32 5\25 > * {
			padding: 0.375rem 0 0 0.375rem;
		}

		.row.uniform.\32 5\25 {
			margin: -0.375rem 0 -1px -0.375rem;
		}

		.\31 2u\28medium\29, .\31 2u\24\28medium\29 {
			width: 100%;
			clear: none;
			margin-left: 0;
		}

		.\31 1u\28medium\29, .\31 1u\24\28medium\29 {
			width: 91.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 0u\28medium\29, .\31 0u\24\28medium\29 {
			width: 83.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\39 u\28medium\29, .\39 u\24\28medium\29 {
			width: 75%;
			clear: none;
			margin-left: 0;
		}

		.\38 u\28medium\29, .\38 u\24\28medium\29 {
			width: 66.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\37 u\28medium\29, .\37 u\24\28medium\29 {
			width: 58.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\36 u\28medium\29, .\36 u\24\28medium\29 {
			width: 50%;
			clear: none;
			margin-left: 0;
		}

		.\35 u\28medium\29, .\35 u\24\28medium\29 {
			width: 41.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\34 u\28medium\29, .\34 u\24\28medium\29 {
			width: 33.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\33 u\28medium\29, .\33 u\24\28medium\29 {
			width: 25%;
			clear: none;
			margin-left: 0;
		}

		.\32 u\28medium\29, .\32 u\24\28medium\29 {
			width: 16.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 u\28medium\29, .\31 u\24\28medium\29 {
			width: 8.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\31 2u\24\28medium\29 + *,
		.\31 1u\24\28medium\29 + *,
		.\31 0u\24\28medium\29 + *,
		.\39 u\24\28medium\29 + *,
		.\38 u\24\28medium\29 + *,
		.\37 u\24\28medium\29 + *,
		.\36 u\24\28medium\29 + *,
		.\35 u\24\28medium\29 + *,
		.\34 u\24\28medium\29 + *,
		.\33 u\24\28medium\29 + *,
		.\32 u\24\28medium\29 + *,
		.\31 u\24\28medium\29 + * {
			clear: left;
		}

		.\-11u\28medium\29 {
			margin-left: 91.66667%;
		}

		.\-10u\28medium\29 {
			margin-left: 83.33333%;
		}

		.\-9u\28medium\29 {
			margin-left: 75%;
		}

		.\-8u\28medium\29 {
			margin-left: 66.66667%;
		}

		.\-7u\28medium\29 {
			margin-left: 58.33333%;
		}

		.\-6u\28medium\29 {
			margin-left: 50%;
		}

		.\-5u\28medium\29 {
			margin-left: 41.66667%;
		}

		.\-4u\28medium\29 {
			margin-left: 33.33333%;
		}

		.\-3u\28medium\29 {
			margin-left: 25%;
		}

		.\-2u\28medium\29 {
			margin-left: 16.66667%;
		}

		.\-1u\28medium\29 {
			margin-left: 8.33333%;
		}

	}

	@media screen and (max-width: 736px) {

		.row > * {
			padding: 0 0 0 1.25rem;
		}

		.row {
			margin: 0 0 -1px -1.25rem;
		}

		.row.uniform > * {
			padding: 1.25rem 0 0 1.25rem;
		}

		.row.uniform {
			margin: -1.25rem 0 -1px -1.25rem;
		}

		.row.\32 00\25 > * {
			padding: 0 0 0 2.5rem;
		}

		.row.\32 00\25 {
			margin: 0 0 -1px -2.5rem;
		}

		.row.uniform.\32 00\25 > * {
			padding: 2.5rem 0 0 2.5rem;
		}

		.row.uniform.\32 00\25 {
			margin: -2.5rem 0 -1px -2.5rem;
		}

		.row.\31 50\25 > * {
			padding: 0 0 0 1.875rem;
		}

		.row.\31 50\25 {
			margin: 0 0 -1px -1.875rem;
		}

		.row.uniform.\31 50\25 > * {
			padding: 1.875rem 0 0 1.875rem;
		}

		.row.uniform.\31 50\25 {
			margin: -1.875rem 0 -1px -1.875rem;
		}

		.row.\35 0\25 > * {
			padding: 0 0 0 0.625rem;
		}

		.row.\35 0\25 {
			margin: 0 0 -1px -0.625rem;
		}

		.row.uniform.\35 0\25 > * {
			padding: 0.625rem 0 0 0.625rem;
		}

		.row.uniform.\35 0\25 {
			margin: -0.625rem 0 -1px -0.625rem;
		}

		.row.\32 5\25 > * {
			padding: 0 0 0 0.3125rem;
		}

		.row.\32 5\25 {
			margin: 0 0 -1px -0.3125rem;
		}

		.row.uniform.\32 5\25 > * {
			padding: 0.3125rem 0 0 0.3125rem;
		}

		.row.uniform.\32 5\25 {
			margin: -0.3125rem 0 -1px -0.3125rem;
		}

		.\31 2u\28small\29, .\31 2u\24\28small\29 {
			width: 100%;
			clear: none;
			margin-left: 0;
		}

		.\31 1u\28small\29, .\31 1u\24\28small\29 {
			width: 91.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 0u\28small\29, .\31 0u\24\28small\29 {
			width: 83.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\39 u\28small\29, .\39 u\24\28small\29 {
			width: 75%;
			clear: none;
			margin-left: 0;
		}

		.\38 u\28small\29, .\38 u\24\28small\29 {
			width: 66.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\37 u\28small\29, .\37 u\24\28small\29 {
			width: 58.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\36 u\28small\29, .\36 u\24\28small\29 {
			width: 50%;
			clear: none;
			margin-left: 0;
		}

		.\35 u\28small\29, .\35 u\24\28small\29 {
			width: 41.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\34 u\28small\29, .\34 u\24\28small\29 {
			width: 33.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\33 u\28small\29, .\33 u\24\28small\29 {
			width: 25%;
			clear: none;
			margin-left: 0;
		}

		.\32 u\28small\29, .\32 u\24\28small\29 {
			width: 16.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 u\28small\29, .\31 u\24\28small\29 {
			width: 8.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\31 2u\24\28small\29 + *,
		.\31 1u\24\28small\29 + *,
		.\31 0u\24\28small\29 + *,
		.\39 u\24\28small\29 + *,
		.\38 u\24\28small\29 + *,
		.\37 u\24\28small\29 + *,
		.\36 u\24\28small\29 + *,
		.\35 u\24\28small\29 + *,
		.\34 u\24\28small\29 + *,
		.\33 u\24\28small\29 + *,
		.\32 u\24\28small\29 + *,
		.\31 u\24\28small\29 + * {
			clear: left;
		}

		.\-11u\28small\29 {
			margin-left: 91.66667%;
		}

		.\-10u\28small\29 {
			margin-left: 83.33333%;
		}

		.\-9u\28small\29 {
			margin-left: 75%;
		}

		.\-8u\28small\29 {
			margin-left: 66.66667%;
		}

		.\-7u\28small\29 {
			margin-left: 58.33333%;
		}

		.\-6u\28small\29 {
			margin-left: 50%;
		}

		.\-5u\28small\29 {
			margin-left: 41.66667%;
		}

		.\-4u\28small\29 {
			margin-left: 33.33333%;
		}

		.\-3u\28small\29 {
			margin-left: 25%;
		}

		.\-2u\28small\29 {
			margin-left: 16.66667%;
		}

		.\-1u\28small\29 {
			margin-left: 8.33333%;
		}

	}

	@media screen and (max-width: 480px) {

		.row > * {
			padding: 0 0 0 1.25rem;
		}

		.row {
			margin: 0 0 -1px -1.25rem;
		}

		.row.uniform > * {
			padding: 1.25rem 0 0 1.25rem;
		}

		.row.uniform {
			margin: -1.25rem 0 -1px -1.25rem;
		}

		.row.\32 00\25 > * {
			padding: 0 0 0 2.5rem;
		}

		.row.\32 00\25 {
			margin: 0 0 -1px -2.5rem;
		}

		.row.uniform.\32 00\25 > * {
			padding: 2.5rem 0 0 2.5rem;
		}

		.row.uniform.\32 00\25 {
			margin: -2.5rem 0 -1px -2.5rem;
		}

		.row.\31 50\25 > * {
			padding: 0 0 0 1.875rem;
		}

		.row.\31 50\25 {
			margin: 0 0 -1px -1.875rem;
		}

		.row.uniform.\31 50\25 > * {
			padding: 1.875rem 0 0 1.875rem;
		}

		.row.uniform.\31 50\25 {
			margin: -1.875rem 0 -1px -1.875rem;
		}

		.row.\35 0\25 > * {
			padding: 0 0 0 0.625rem;
		}

		.row.\35 0\25 {
			margin: 0 0 -1px -0.625rem;
		}

		.row.uniform.\35 0\25 > * {
			padding: 0.625rem 0 0 0.625rem;
		}

		.row.uniform.\35 0\25 {
			margin: -0.625rem 0 -1px -0.625rem;
		}

		.row.\32 5\25 > * {
			padding: 0 0 0 0.3125rem;
		}

		.row.\32 5\25 {
			margin: 0 0 -1px -0.3125rem;
		}

		.row.uniform.\32 5\25 > * {
			padding: 0.3125rem 0 0 0.3125rem;
		}

		.row.uniform.\32 5\25 {
			margin: -0.3125rem 0 -1px -0.3125rem;
		}

		.\31 2u\28xsmall\29, .\31 2u\24\28xsmall\29 {
			width: 100%;
			clear: none;
			margin-left: 0;
		}

		.\31 1u\28xsmall\29, .\31 1u\24\28xsmall\29 {
			width: 91.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 0u\28xsmall\29, .\31 0u\24\28xsmall\29 {
			width: 83.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\39 u\28xsmall\29, .\39 u\24\28xsmall\29 {
			width: 75%;
			clear: none;
			margin-left: 0;
		}

		.\38 u\28xsmall\29, .\38 u\24\28xsmall\29 {
			width: 66.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\37 u\28xsmall\29, .\37 u\24\28xsmall\29 {
			width: 58.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\36 u\28xsmall\29, .\36 u\24\28xsmall\29 {
			width: 50%;
			clear: none;
			margin-left: 0;
		}

		.\35 u\28xsmall\29, .\35 u\24\28xsmall\29 {
			width: 41.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\34 u\28xsmall\29, .\34 u\24\28xsmall\29 {
			width: 33.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\33 u\28xsmall\29, .\33 u\24\28xsmall\29 {
			width: 25%;
			clear: none;
			margin-left: 0;
		}

		.\32 u\28xsmall\29, .\32 u\24\28xsmall\29 {
			width: 16.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 u\28xsmall\29, .\31 u\24\28xsmall\29 {
			width: 8.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\31 2u\24\28xsmall\29 + *,
		.\31 1u\24\28xsmall\29 + *,
		.\31 0u\24\28xsmall\29 + *,
		.\39 u\24\28xsmall\29 + *,
		.\38 u\24\28xsmall\29 + *,
		.\37 u\24\28xsmall\29 + *,
		.\36 u\24\28xsmall\29 + *,
		.\35 u\24\28xsmall\29 + *,
		.\34 u\24\28xsmall\29 + *,
		.\33 u\24\28xsmall\29 + *,
		.\32 u\24\28xsmall\29 + *,
		.\31 u\24\28xsmall\29 + * {
			clear: left;
		}

		.\-11u\28xsmall\29 {
			margin-left: 91.66667%;
		}

		.\-10u\28xsmall\29 {
			margin-left: 83.33333%;
		}

		.\-9u\28xsmall\29 {
			margin-left: 75%;
		}

		.\-8u\28xsmall\29 {
			margin-left: 66.66667%;
		}

		.\-7u\28xsmall\29 {
			margin-left: 58.33333%;
		}

		.\-6u\28xsmall\29 {
			margin-left: 50%;
		}

		.\-5u\28xsmall\29 {
			margin-left: 41.66667%;
		}

		.\-4u\28xsmall\29 {
			margin-left: 33.33333%;
		}

		.\-3u\28xsmall\29 {
			margin-left: 25%;
		}

		.\-2u\28xsmall\29 {
			margin-left: 16.66667%;
		}

		.\-1u\28xsmall\29 {
			margin-left: 8.33333%;
		}

	}

/* Basic */

	@-ms-viewport {
		width: device-width;
	}

	body {
		-ms-overflow-style: scrollbar;
	}

	@media screen and (max-width: 480px) {

		html, body {
			min-width: 320px;
		}

	}

	body {
		background: #fff;
	}

		body.is-loading *, body.is-loading *:before, body.is-loading *:after {
			-moz-animation: none !important;
			-webkit-animation: none !important;
			-ms-animation: none !important;
			animation: none !important;
			-moz-transition: none !important;
			-webkit-transition: none !important;
			-ms-transition: none !important;
			transition: none !important;
		}

/* Type */

	html {
		font-size: 13pt;
	}

		@media screen and (max-width: 1680px) {

			html {
				font-size: 11pt;
			}

		}

		@media screen and (max-width: 1280px) {

			html {
				font-size: 11pt;
			}

		}

		@media screen and (max-width: 980px) {

			html {
				font-size: 12pt;
			}

		}

		@media screen and (max-width: 736px) {

			html {
				font-size: 12pt;
			}

		}

		@media screen and (max-width: 480px) {

			html {
				font-size: 12pt;
			}

		}

	body {
		background-color: #fff;
		color: #444;
	}

	body, input, select, textarea {
		font-family: "Poppins", sans-serif;
		font-weight: 300;
		font-size: 1rem;
		line-height: 1.65;
	}

	a {
		text-decoration: underline;
	}

		a:hover {
			text-decoration: none;
		}

	strong, b {
		font-weight: 600;
	}

	em, i {
		font-style: italic;
	}

	p {
		margin: 0 0 2rem 0;
	}

		p.special {
			text-transform: uppercase;
			font-size: .75rem;
			font-weight: 300;
			margin: 0 0 .5rem 0;
			padding: 0 0 1rem 0;
			letter-spacing: .25rem;
		}

			p.special:after {
				content: '';
				position: absolute;
				margin: auto;
				right: 0;
				bottom: 0;
				left: 0;
				width: 50%;
				height: 1px;
				background-color: rgba(0, 0, 0, 0.125);
			}

	h1, h2, h3, h4, h5, h6 {
		font-weight: 300;
		line-height: 1.5;
		margin: 0 0 1rem 0;
	}

		h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
			color: inherit;
			text-decoration: none;
		}

	h2 {
		font-size: 1.75rem;
	}

	h3 {
		font-size: 1.35rem;
	}

	h4 {
		font-size: 1.1rem;
	}

	h5 {
		font-size: 0.9rem;
	}

	h6 {
		font-size: 0.7rem;
	}

	sub {
		font-size: 0.8rem;
		position: relative;
		top: 0.5rem;
	}

	sup {
		font-size: 0.8rem;
		position: relative;
		top: -0.5rem;
	}

	blockquote {
		border-left: solid 4px;
		font-style: italic;
		margin: 0 0 2rem 0;
		padding: 0.5rem 0 0.5rem 2rem;
	}

	code {
		border-radius: 2px;
		border: solid 1px;
		font-family: "Courier New", monospace;
		font-size: 0.9rem;
		margin: 0 0.25rem;
		padding: 0.25rem 0.65rem;
	}

	pre {
		-webkit-overflow-scrolling: touch;
		font-family: "Courier New", monospace;
		font-size: 0.9rem;
		margin: 0 0 2rem 0;
	}

		pre code {
			display: block;
			line-height: 1.75;
			padding: 1rem 1.5rem;
			overflow-x: auto;
		}

	hr {
		border: 0;
		border-bottom: solid 1px;
		margin: 2rem 0;
	}

		hr.major {
			margin: 3rem 0;
		}

	.align-left {
		text-align: left;
	}

	.align-center {
		text-align: center;
	}

	.align-right {
		text-align: right;
	}

	input, select, textarea {
		color: #555;
	}

	a {
		color: #8a4680;
	}

	strong, b {
		color: #555;
	}

	h1, h2, h3, h4, h5, h6 {
		color: #555;
	}

	blockquote {
		border-left-color: rgba(144, 144, 144, 0.25);
	}

	code {
		background: rgba(144, 144, 144, 0.075);
		border-color: rgba(144, 144, 144, 0.25);
	}

	hr {
		border-bottom-color: rgba(144, 144, 144, 0.25);
	}

/* Box */

	.box {
		margin-bottom: 2rem;
		background: #FFF;
	}

		.box .image.fit {
			margin: 0;
			border-radius: 0;
		}

			.box .image.fit img {
				border-radius: 0;
			}

		.box header h2 {
			margin-bottom: 2rem;
		}

		.box header p {
			text-transform: uppercase;
			font-size: .75rem;
			font-weight: 300;
			margin: 0 0 .25rem 0;
			padding: 0 0 .75rem 0;
			letter-spacing: .25rem;
		}

			.box header p:after {
				content: '';
				position: absolute;
				margin: auto;
				right: 0;
				bottom: 0;
				left: 0;
				width: 50%;
				height: 1px;
				background-color: rgba(0, 0, 0, 0.125);
			}

		.box .content {
			padding: 3rem;
		}

		.box > :last-child,
		.box > :last-child > :last-child,
		.box > :last-child > :last-child > :last-child {
			margin-bottom: 0;
		}

		.box.alt {
			border: 0;
			border-radius: 0;
			padding: 0;
		}

		@media screen and (max-width: 736px) {

			.box .content {
				padding: 2rem;
			}

		}

	.box {
		border-color: rgba(144, 144, 144, 0.25);
	}

/* Button */

	input[type="submit"],
	input[type="reset"],
	input[type="button"],
	button,
	.button {
		-moz-appearance: none;
		-webkit-appearance: none;
		-ms-appearance: none;
		appearance: none;
		-moz-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
		-webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
		-ms-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
		transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
		border-radius: 2px;
		border: 0;
		cursor: pointer;
		display: inline-block;
		font-weight: 300;
		height: 2.85rem;
		line-height: 2.95rem;
		padding: 0 1.5rem;
		text-align: center;
		text-decoration: none;
		text-transform: uppercase;
		white-space: nowrap;
	}

		input[type="submit"].icon,
		input[type="reset"].icon,
		input[type="button"].icon,
		button.icon,
		.button.icon {
			padding-left: 1.35rem;
		}

			input[type="submit"].icon:before,
			input[type="reset"].icon:before,
			input[type="button"].icon:before,
			button.icon:before,
			.button.icon:before {
				margin-right: 0.5rem;
			}

		input[type="submit"].fit,
		input[type="reset"].fit,
		input[type="button"].fit,
		button.fit,
		.button.fit {
			display: block;
			margin: 0 0 1rem 0;
			width: 100%;
		}

		input[type="submit"].small,
		input[type="reset"].small,
		input[type="button"].small,
		button.small,
		.button.small {
			font-size: 0.8rem;
		}

		input[type="submit"].big,
		input[type="reset"].big,
		input[type="button"].big,
		button.big,
		.button.big {
			font-size: 1.35rem;
		}

		input[type="submit"].disabled, input[type="submit"]:disabled,
		input[type="reset"].disabled,
		input[type="reset"]:disabled,
		input[type="button"].disabled,
		input[type="button"]:disabled,
		button.disabled,
		button:disabled,
		.button.disabled,
		.button:disabled {
			-moz-pointer-events: none;
			-webkit-pointer-events: none;
			-ms-pointer-events: none;
			pointer-events: none;
			opacity: 0.25;
		}

		@media screen and (max-width: 480px) {

			input[type="submit"],
			input[type="reset"],
			input[type="button"],
			button,
			.button {
				padding: 0;
				width: 100%;
			}

		}

	input[type="submit"],
	input[type="reset"],
	input[type="button"],
	button,
	.button {
		background-color: #f2f2f2;
		color: #000 !important;
	}

		input[type="submit"]:hover,
		input[type="reset"]:hover,
		input[type="button"]:hover,
		button:hover,
		.button:hover {
			background-color: white;
		}

		input[type="submit"]:active,
		input[type="reset"]:active,
		input[type="button"]:active,
		button:active,
		.button:active {
			background-color: #e5e5e5;
		}

		input[type="submit"].alt,
		input[type="reset"].alt,
		input[type="button"].alt,
		button.alt,
		.button.alt {
			background-color: transparent;
			box-shadow: inset 0 0 0 2px rgba(144, 144, 144, 0.25);
			color: #555 !important;
		}

			input[type="submit"].alt:hover,
			input[type="reset"].alt:hover,
			input[type="button"].alt:hover,
			button.alt:hover,
			.button.alt:hover {
				background-color: rgba(144, 144, 144, 0.075);
			}

			input[type="submit"].alt:active,
			input[type="reset"].alt:active,
			input[type="button"].alt:active,
			button.alt:active,
			.button.alt:active {
				background-color: rgba(144, 144, 144, 0.2);
			}

			input[type="submit"].alt.icon:before,
			input[type="reset"].alt.icon:before,
			input[type="button"].alt.icon:before,
			button.alt.icon:before,
			.button.alt.icon:before {
				color: #bbb;
			}

		input[type="submit"].special,
		input[type="reset"].special,
		input[type="button"].special,
		button.special,
		.button.special {
			background-color: #8a4680;
			color: #ffffff !important;
		}

			input[type="submit"].special:hover,
			input[type="reset"].special:hover,
			input[type="button"].special:hover,
			button.special:hover,
			.button.special:hover {
				background-color: #9b4f90;
			}

			input[type="submit"].special:active,
			input[type="reset"].special:active,
			input[type="button"].special:active,
			button.special:active,
			.button.special:active {
				background-color: #793d70;
			}

/* Form */

	form {
		margin: 0 0 2rem 0;
	}

	label {
		display: block;
		font-size: 0.9rem;
		font-weight: 700;
		margin: 0 0 1rem 0;
	}

	input[type="text"],
	input[type="password"],
	input[type="email"],
	select,
	textarea {
		-moz-appearance: none;
		-webkit-appearance: none;
		-ms-appearance: none;
		appearance: none;
		border-radius: 2px;
		border: none;
		border: solid 1px;
		color: inherit;
		display: block;
		outline: 0;
		padding: 0 1rem;
		text-decoration: none;
		width: 100%;
	}

		input[type="text"]:invalid,
		input[type="password"]:invalid,
		input[type="email"]:invalid,
		select:invalid,
		textarea:invalid {
			box-shadow: none;
		}

	.select-twrapper {
		text-decoration: none;
		display: block;
		position: relative;
	}

		.select-wrapper:before {
			-moz-osx-font-smoothing: grayscale;
			-webkit-font-smoothing: antialiased;
			font-family: FontAwesome;
			font-style: normal;
			font-weight: normal;
			text-transform: none !important;
		}

		.select-wrapper:before {
			content: '\f078';
			display: block;
			height: 2.75rem;
			line-height: 2.75rem;
			pointer-events: none;
			position: absolute;
			right: 0;
			text-align: center;
			top: 0;
			width: 2.75rem;
		}

		.select-wrapper select::-ms-expand {
			display: none;
		}

	input[type="text"],
	input[type="password"],
	input[type="email"],
	select {
		height: 2.75rem;
	}

	textarea {
		padding: 0.75rem 1rem;
	}

	input[type="checkbox"],
	input[type="radio"] {
		-moz-appearance: none;
		-webkit-appearance: none;
		-ms-appearance: none;
		appearance: none;
		display: block;
		float: left;
		margin-right: -2rem;
		opacity: 0;
		width: 1rem;
		z-index: -1;
	}

		input[type="checkbox"] + label,
		input[type="radio"] + label {
			text-decoration: none;
			cursor: pointer;
			display: inline-block;
			font-size: 1rem;
			font-weight: 400;
			padding-left: 2.4rem;
			padding-right: 0.75rem;
			position: relative;
		}

			input[type="checkbox"] + label:before,
			input[type="radio"] + label:before {
				-moz-osx-font-smoothing: grayscale;
				-webkit-font-smoothing: antialiased;
				font-family: FontAwesome;
				font-style: normal;
				font-weight: normal;
				text-transform: none !important;
			}

			input[type="checkbox"] + label:before,
			input[type="radio"] + label:before {
				border-radius: 2px;
				border: solid 1px;
				content: '';
				display: inline-block;
				height: 1.65rem;
				left: 0;
				line-height: 1.58125rem;
				position: absolute;
				text-align: center;
				top: 0;
				width: 1.65rem;
			}

		input[type="checkbox"]:checked + label:before,
		input[type="radio"]:checked + label:before {
			content: '\f00c';
		}

	input[type="checkbox"] + label:before {
		border-radius: 2px;
	}

	input[type="radio"] + label:before {
		border-radius: 100%;
	}

	::-webkit-input-placeholder {
		opacity: 1.0;
	}

	:-moz-placeholder {
		opacity: 1.0;
	}

	::-moz-placeholder {
		opacity: 1.0;
	}

	:-ms-input-placeholder {
		opacity: 1.0;
	}

	.formerize-placeholder {
		opacity: 1.0;
	}

	label {
		color: #555;
	}

	input[type="text"],
	input[type="password"],
	input[type="email"],
	select,
	textarea {
		background: rgba(144, 144, 144, 0.075);
		border-color: rgba(144, 144, 144, 0.25);
	}

		input[type="text"]:focus,
		input[type="password"]:focus,
		input[type="email"]:focus,
		select:focus,
		textarea:focus {
			border-color: #8a4680;
			box-shadow: 0 0 0 1px #8a4680;
		}

	.select-wrapper:before {
		color: rgba(144, 144, 144, 0.25);
	}

	input[type="checkbox"] + label,
	input[type="radio"] + label {
		color: #444;
	}

		input[type="checkbox"] + label:before,
		input[type="radio"] + label:before {
			background: rgba(144, 144, 144, 0.075);
			border-color: rgba(144, 144, 144, 0.25);
		}

	input[type="checkbox"]:checked + label:before,
	input[type="radio"]:checked + label:before {
		background-color: #8a4680;
		border-color: #8a4680;
		color: #ffffff;
	}

	input[type="checkbox"]:focus + label:before,
	input[type="radio"]:focus + label:before {
		border-color: #8a4680;
		box-shadow: 0 0 0 1px #8a4680;
	}

	::-webkit-input-placeholder {
		color: #bbb !important;
	}

	:-moz-placeholder {
		color: #bbb !important;
	}

	::-moz-placeholder {
		color: #bbb !important;
	}

	:-ms-input-placeholder {
		color: #bbb !important;
	}

	.formerize-placeholder {
		color: #bbb !important;
	}

/* Icon */

	.icon {
		text-decoration: none;
		border-bottom: none;
		position: relative;
	}

		.icon:before {
			-moz-osx-font-smoothing: grayscale;
			-webkit-font-smoothing: antialiased;
			font-family: FontAwesome;
			font-style: normal;
			font-weight: normal;
			text-transform: none !important;
		}

		.icon > .label {
			display: none;
		}

/* Image */

	.image {
		border-radius: 2px;
		border: 0;
		display: inline-block;
		position: relative;
	}

		.image img {
			border-radius: 2px;
			display: block;
		}

		.image.left, .image.right {
			max-width: 40%;
		}

			.image.left img, .image.right img {
				width: 100%;
			}

		.image.left {
			float: left;
			margin: 0 1.5rem 1rem 0;
			top: 0.25rem;
		}

		.image.right {
			float: right;
			margin: 0 0 1rem 1.5rem;
			top: 0.25rem;
		}

		.image.fit {
			display: block;
			margin: 0 0 2rem 0;
			width: 100%;
		}

			.image.fit img {
				width: 100%;
			}

		.image.main {
			display: block;
			margin: 0 0 3rem 0;
			width: 100%;
		}

			.image.main img {
				width: 100%;
			}

/* List */

	ol {
		list-style: decimal;
		margin: 0 0 2rem 0;
		padding-left: 1.25rem;
	}

		ol li {
			padding-left: 0.25rem;
		}

	ul {
		list-style: disc;
		margin: 0 0 2rem 0;
		padding-left: 1rem;
	}

		ul li {
			padding-left: 0.5rem;
		}

		ul.alt {
			list-style: none;
			padding-left: 0;
		}

			ul.alt li {
				border-top: solid 1px;
				padding: 0.5rem 0;
			}

				ul.alt li:first-child {
					border-top: 0;
					padding-top: 0;
				}

		ul.icons {
			cursor: default;
			list-style: none;
			padding-left: 0;
		}

			ul.icons li {
				display: inline-block;
				padding: 0 1rem 0 0;
			}

				ul.icons li:last-child {
					padding-right: 0;
				}

				ul.icons li .icon:before {
					font-size: 2rem;
				}

		ul.actions {
			cursor: default;
			list-style: none;
			padding-left: 0;
		}

			ul.actions li {
				display: inline-block;
				padding: 0 1rem 0 0;
				vertical-align: middle;
			}

				ul.actions li:last-child {
					padding-right: 0;
				}

			ul.actions.small li {
				padding: 0 0.5rem 0 0;
			}

			ul.actions.vertical li {
				display: block;
				padding: 1rem 0 0 0;
			}

				ul.actions.vertical li:first-child {
					padding-top: 0;
				}

				ul.actions.vertical li > * {
					margin-bottom: 0;
				}

			ul.actions.vertical.small li {
				padding: 0.5rem 0 0 0;
			}

				ul.actions.vertical.small li:first-child {
					padding-top: 0;
				}

			ul.actions.fit {
				display: table;
				margin-left: -1rem;
				padding: 0;
				table-layout: fixed;
				width: calc(100% + 1rem);
			}

				ul.actions.fit li {
					display: table-cell;
					padding: 0 0 0 1rem;
				}

					ul.actions.fit li > * {
						margin-bottom: 0;
					}

				ul.actions.fit.small {
					margin-left: -0.5rem;
					width: calc(100% + 0.5rem);
				}

					ul.actions.fit.small li {
						padding: 0 0 0 0.5rem;
					}

			@media screen and (max-width: 480px) {

				ul.actions {
					margin: 0 0 2rem 0;
				}

					ul.actions li {
						padding: 1rem 0 0 0;
						display: block;
						text-align: center;
						width: 100%;
					}

						ul.actions li:first-child {
							padding-top: 0;
						}

						ul.actions li > * {
							width: 100%;
							margin: 0 !important;
						}

							ul.actions li > *.icon:before {
								margin-left: -2rem;
							}

					ul.actions.small li {
						padding: 0.5rem 0 0 0;
					}

						ul.actions.small li:first-child {
							padding-top: 0;
						}

			}

	dl {
		margin: 0 0 2rem 0;
	}

		dl dt {
			display: block;
			font-weight: 700;
			margin: 0 0 1rem 0;
		}

		dl dd {
			margin-left: 2rem;
		}

	ul.alt li {
		border-top-color: rgba(144, 144, 144, 0.25);
	}

/* Section/Article */

	section.special, article.special {
		text-align: center;
	}

	header p {
		position: relative;
		margin: 0 0 1.5rem 0;
	}

	header h2 + p {
		font-size: 1.25rem;
		margin-top: -1rem;
	}

	header h3 + p {
		font-size: 1.1rem;
		margin-top: -0.8rem;
	}

	header h4 + p,
	header h5 + p,
	header h6 + p {
		font-size: 0.9rem;
		margin-top: -0.6rem;
	}

	header p {
		color: #bbb;
	}

/* Table */

	.table-wrapper {
		-webkit-overflow-scrolling: touch;
		overflow-x: auto;
	}

	table {
		margin: 0 0 2rem 0;
		width: 100%;
	}

		table tbody tr {
			border: solid 1px;
			border-left: 0;
			border-right: 0;
		}

		table td {
			padding: 0.75rem 0.75rem;
		}

		table th {
			font-size: 0.9rem;
			font-weight: 700;
			padding: 0 0.75rem 0.75rem 0.75rem;
			text-align: left;
		}

		table thead {
			border-bottom: solid 2px;
		}

		table tfoot {
			border-top: solid 2px;
		}

		table.alt {
			border-collapse: separate;
		}

			table.alt tbody tr td {
				border: solid 1px;
				border-left-width: 0;
				border-top-width: 0;
			}

				table.alt tbody tr td:first-child {
					border-left-width: 1px;
				}

			table.alt tbody tr:first-child td {
				border-top-width: 1px;
			}

			table.alt thead {
				border-bottom: 0;
			}

			table.alt tfoot {
				border-top: 0;
			}

	table tbody tr {
		border-color: rgba(144, 144, 144, 0.25);
	}

		table tbody tr:nth-child(2n + 1) {
			background-color: rgba(144, 144, 144, 0.075);
		}

	table th {
		color: #555;
	}

	table thead {
		border-bottom-color: rgba(144, 144, 144, 0.25);
	}

	table tfoot {
		border-top-color: rgba(144, 144, 144, 0.25);
	}

	table.alt tbody tr td {
		border-color: rgba(144, 144, 144, 0.25);
	}

	.logintable, .logintable tr,.logintable td{
		border: 0px;
		background-color: white;
	}

	.logintable{
		width: 300px;
		margin-left:500px;
		margin-top: 100px;
		margin-bottom: 150px;
	}

	a:link {
		text-decoration: none;
		color: #8a4680;
	}

	a:visited {
		text-decoration: none;
		color: #8a4680;
	}
	
	a:hover {
		text-decoration: bold;
		color: #FFA2F1;
	}

/* Wrapper */

	.wrapper {
		padding: 6rem 0 4rem 0 ;
		position: relative;
		margin: 0;
	}

		.wrapper > .inner {
			margin: 0 auto;
			width: 80rem;
		}

		.wrapper.style1 {
			background-color: #8a4680;
			color: #e2d1df;
		}

			.wrapper.style1 input, .wrapper.style1 select, .wrapper.style1 textarea {
				color: #ffffff;
			}

			.wrapper.style1 a {
				color: #ffffff;
			}

			.wrapper.style1 strong, .wrapper.style1 b {
				color: #ffffff;
			}

			.wrapper.style1 h1, .wrapper.style1 h2, .wrapper.style1 h3, .wrapper.style1 h4, .wrapper.style1 h5, .wrapper.style1 h6 {
				color: #ffffff;
			}

			.wrapper.style1 blockquote {
				border-left-color: rgba(255, 255, 255, 0.25);
			}

			.wrapper.style1 code {
				background: rgba(255, 255, 255, 0.075);
				border-color: rgba(255, 255, 255, 0.25);
			}

			.wrapper.style1 hr {
				border-bottom-color: rgba(255, 255, 255, 0.25);
			}

			.wrapper.style1 .box {
				border-color: rgba(255, 255, 255, 0.25);
			}

			.wrapper.style1 input[type="submit"],
			.wrapper.style1 input[type="reset"],
			.wrapper.style1 input[type="button"],
			.wrapper.style1 button,
			.wrapper.style1 .button {
				background-color: #f2f2f2;
				color: #000 !important;
			}

				.wrapper.style1 input[type="submit"]:hover,
				.wrapper.style1 input[type="reset"]:hover,
				.wrapper.style1 input[type="button"]:hover,
				.wrapper.style1 button:hover,
				.wrapper.style1 .button:hover {
					background-color: white;
				}

				.wrapper.style1 input[type="submit"]:active,
				.wrapper.style1 input[type="reset"]:active,
				.wrapper.style1 input[type="button"]:active,
				.wrapper.style1 button:active,
				.wrapper.style1 .button:active {
					background-color: #e5e5e5;
				}

				.wrapper.style1 input[type="submit"].alt,
				.wrapper.style1 input[type="reset"].alt,
				.wrapper.style1 input[type="button"].alt,
				.wrapper.style1 button.alt,
				.wrapper.style1 .button.alt {
					background-color: transparent;
					box-shadow: inset 0 0 0 2px rgba(255, 255, 255, 0.25);
					color: #ffffff !important;
				}

					.wrapper.style1 input[type="submit"].alt:hover,
					.wrapper.style1 input[type="reset"].alt:hover,
					.wrapper.style1 input[type="button"].alt:hover,
					.wrapper.style1 button.alt:hover,
					.wrapper.style1 .button.alt:hover {
						background-color: rgba(255, 255, 255, 0.075);
					}

					.wrapper.style1 input[type="submit"].alt:active,
					.wrapper.style1 input[type="reset"].alt:active,
					.wrapper.style1 input[type="button"].alt:active,
					.wrapper.style1 button.alt:active,
					.wrapper.style1 .button.alt:active {
						background-color: rgba(255, 255, 255, 0.2);
					}

					.wrapper.style1 input[type="submit"].alt.icon:before,
					.wrapper.style1 input[type="reset"].alt.icon:before,
					.wrapper.style1 input[type="button"].alt.icon:before,
					.wrapper.style1 button.alt.icon:before,
					.wrapper.style1 .button.alt.icon:before {
						color: #d0b5cc;
					}

				.wrapper.style1 input[type="submit"].special,
				.wrapper.style1 input[type="reset"].special,
				.wrapper.style1 input[type="button"].special,
				.wrapper.style1 button.special,
				.wrapper.style1 .button.special {
					background-color: #ffffff;
					color: #8a4680 !important;
				}

			.wrapper.style1 label {
				color: #ffffff;
			}

			.wrapper.style1 input[type="text"],
			.wrapper.style1 input[type="password"],
			.wrapper.style1 input[type="email"],
			.wrapper.style1 select,
			.wrapper.style1 textarea {
				background: rgba(255, 255, 255, 0.075);
				border-color: rgba(255, 255, 255, 0.25);
			}

				.wrapper.style1 input[type="text"]:focus,
				.wrapper.style1 input[type="password"]:focus,
				.wrapper.style1 input[type="email"]:focus,
				.wrapper.style1 select:focus,
				.wrapper.style1 textarea:focus {
					border-color: #ffffff;
					box-shadow: 0 0 0 1px #ffffff;
				}

			.wrapper.style1 .select-wrapper:before {
				color: rgba(255, 255, 255, 0.25);
			}

			.wrapper.style1 input[type="checkbox"] + label,
			.wrapper.style1 input[type="radio"] + label {
				color: #e2d1df;
			}

				.wrapper.style1 input[type="checkbox"] + label:before,
				.wrapper.style1 input[type="radio"] + label:before {
					background: rgba(255, 255, 255, 0.075);
					border-color: rgba(255, 255, 255, 0.25);
				}

			.wrapper.style1 input[type="checkbox"]:checked + label:before,
			.wrapper.style1 input[type="radio"]:checked + label:before {
				background-color: #ffffff;
				border-color: #ffffff;
				color: #8a4680;
			}

			.wrapper.style1 input[type="checkbox"]:focus + label:before,
			.wrapper.style1 input[type="radio"]:focus + label:before {
				border-color: #ffffff;
				box-shadow: 0 0 0 1px #ffffff;
			}

			.wrapper.style1 ::-webkit-input-placeholder {
				color: #d0b5cc !important;
			}

			.wrapper.style1 :-moz-placeholder {
				color: #d0b5cc !important;
			}

			.wrapper.style1 ::-moz-placeholder {
				color: #d0b5cc !important;
			}

			.wrapper.style1 :-ms-input-placeholder {
				color: #d0b5cc !important;
			}

			.wrapper.style1 .formerize-placeholder {
				color: #d0b5cc !important;
			}

			.wrapper.style1 ul.alt li {
				border-top-color: rgba(255, 255, 255, 0.25);
			}

			.wrapper.style1 header p {
				color: #d0b5cc;
			}

			.wrapper.style1 table tbody tr {
				border-color: rgba(255, 255, 255, 0.25);
			}

				.wrapper.style1 table tbody tr:nth-child(2n + 1) {
					background-color: rgba(255, 255, 255, 0.075);
				}

			.wrapper.style1 table th {
				color: #ffffff;
			}

			.wrapper.style1 table thead {
				border-bottom-color: rgba(255, 255, 255, 0.25);
			}

			.wrapper.style1 table tfoot {
				border-top-color: rgba(255, 255, 255, 0.25);
			}

			.wrapper.style1 table.alt tbody tr td {
				border-color: rgba(255, 255, 255, 0.25);
			}

		.wrapper.style2 {
			background-color: #f2f2f2;
			color: #a6a6a6;
		}

			.wrapper.style2 input, .wrapper.style2 select, .wrapper.style2 textarea {
				color: #000;
			}

			.wrapper.style2 a {
				color: #8a4680;
			}

			.wrapper.style2 strong, .wrapper.style2 b {
				color: #000;
			}

			.wrapper.style2 h1, .wrapper.style2 h2, .wrapper.style2 h3, .wrapper.style2 h4, .wrapper.style2 h5, .wrapper.style2 h6 {
				color: #000;
			}

			.wrapper.style2 blockquote {
				border-left-color: rgba(0, 0, 0, 0.15);
			}

			.wrapper.style2 code {
				background: rgba(0, 0, 0, 0.075);
				border-color: rgba(0, 0, 0, 0.15);
			}

			.wrapper.style2 hr {
				border-bottom-color: rgba(0, 0, 0, 0.15);
			}

			.wrapper.style2 .box {
				border-color: rgba(0, 0, 0, 0.15);
			}

			.wrapper.style2 input[type="submit"],
			.wrapper.style2 input[type="reset"],
			.wrapper.style2 input[type="button"],
			.wrapper.style2 button,
			.wrapper.style2 .button {
				background-color: #000;
				color: #f2f2f2 !important;
			}

				.wrapper.style2 input[type="submit"].alt,
				.wrapper.style2 input[type="reset"].alt,
				.wrapper.style2 input[type="button"].alt,
				.wrapper.style2 button.alt,
				.wrapper.style2 .button.alt {
					background-color: transparent;
					box-shadow: inset 0 0 0 2px rgba(0, 0, 0, 0.15);
					color: #000 !important;
				}

					.wrapper.style2 input[type="submit"].alt:hover,
					.wrapper.style2 input[type="reset"].alt:hover,
					.wrapper.style2 input[type="button"].alt:hover,
					.wrapper.style2 button.alt:hover,
					.wrapper.style2 .button.alt:hover {
						background-color: rgba(0, 0, 0, 0.075);
					}

					.wrapper.style2 input[type="submit"].alt:active,
					.wrapper.style2 input[type="reset"].alt:active,
					.wrapper.style2 input[type="button"].alt:active,
					.wrapper.style2 button.alt:active,
					.wrapper.style2 .button.alt:active {
						background-color: rgba(0, 0, 0, 0.2);
					}

					.wrapper.style2 input[type="submit"].alt.icon:before,
					.wrapper.style2 input[type="reset"].alt.icon:before,
					.wrapper.style2 input[type="button"].alt.icon:before,
					.wrapper.style2 button.alt.icon:before,
					.wrapper.style2 .button.alt.icon:before {
						color: #999999;
					}

				.wrapper.style2 input[type="submit"].special,
				.wrapper.style2 input[type="reset"].special,
				.wrapper.style2 input[type="button"].special,
				.wrapper.style2 button.special,
				.wrapper.style2 .button.special {
					background-color: #8a4680;
					color: #ffffff !important;
				}

					.wrapper.style2 input[type="submit"].special:hover,
					.wrapper.style2 input[type="reset"].special:hover,
					.wrapper.style2 input[type="button"].special:hover,
					.wrapper.style2 button.special:hover,
					.wrapper.style2 .button.special:hover {
						background-color: #9b4f90;
					}

					.wrapper.style2 input[type="submit"].special:active,
					.wrapper.style2 input[type="reset"].special:active,
					.wrapper.style2 input[type="button"].special:active,
					.wrapper.style2 button.special:active,
					.wrapper.style2 .button.special:active {
						background-color: #793d70;
					}

			.wrapper.style2 label {
				color: #000;
			}

			.wrapper.style2 input[type="text"],
			.wrapper.style2 input[type="password"],
			.wrapper.style2 input[type="email"],
			.wrapper.style2 select,
			.wrapper.style2 textarea {
				background: rgba(0, 0, 0, 0.075);
				border-color: rgba(0, 0, 0, 0.15);
			}

				.wrapper.style2 input[type="text"]:focus,
				.wrapper.style2 input[type="password"]:focus,
				.wrapper.style2 input[type="email"]:focus,
				.wrapper.style2 select:focus,
				.wrapper.style2 textarea:focus {
					border-color: #8a4680;
					box-shadow: 0 0 0 1px #8a4680;
				}

			.wrapper.style2 .select-wrapper:before {
				color: rgba(0, 0, 0, 0.15);
			}

			.wrapper.style2 input[type="checkbox"] + label,
			.wrapper.style2 input[type="radio"] + label {
				color: #a6a6a6;
			}

				.wrapper.style2 input[type="checkbox"] + label:before,
				.wrapper.style2 input[type="radio"] + label:before {
					background: rgba(0, 0, 0, 0.075);
					border-color: rgba(0, 0, 0, 0.15);
				}

			.wrapper.style2 input[type="checkbox"]:checked + label:before,
			.wrapper.style2 input[type="radio"]:checked + label:before {
				background-color: #8a4680;
				border-color: #8a4680;
				color: #ffffff;
			}

			.wrapper.style2 input[type="checkbox"]:focus + label:before,
			.wrapper.style2 input[type="radio"]:focus + label:before {
				border-color: #8a4680;
				box-shadow: 0 0 0 1px #8a4680;
			}

			.wrapper.style2 ::-webkit-input-placeholder {
				color: #999999 !important;
			}

			.wrapper.style2 :-moz-placeholder {
				color: #999999 !important;
			}

			.wrapper.style2 ::-moz-placeholder {
				color: #999999 !important;
			}

			.wrapper.style2 :-ms-input-placeholder {
				color: #999999 !important;
			}

			.wrapper.style2 .formerize-placeholder {
				color: #999999 !important;
			}

			.wrapper.style2 ul.alt li {
				border-top-color: rgba(0, 0, 0, 0.15);
			}

			.wrapper.style2 header p {
				color: #999999;
			}

			.wrapper.style2 table tbody tr {
				border-color: rgba(0, 0, 0, 0.15);
			}

				.wrapper.style2 table tbody tr:nth-child(2n + 1) {
					background-color: rgba(0, 0, 0, 0.075);
				}

			.wrapper.style2 table th {
				color: #000;
			}

			.wrapper.style2 table thead {
				border-bottom-color: rgba(0, 0, 0, 0.15);
			}

			.wrapper.style2 table tfoot {
				border-top-color: rgba(0, 0, 0, 0.15);
			}

			.wrapper.style2 table.alt tbody tr td {
				border-color: rgba(0, 0, 0, 0.15);
			}

			.wrapper.style3 {
			background-color: #000;
			color: #bfbfbf;
			background-image: url(../../images/bg.jpg);
			background-size: cover;
			background-attachment: fixed;
			background-position: center;
			position: relative;
		}

			.wrapper.style3 input, .wrapper.style3 select, .wrapper.style3 textarea {
				color: #ffffff;
			}

			.wrapper.style3 a {
				color: #8a4680;
			}

			.wrapper.style3 strong, .wrapper.style3 b {
				color: #ffffff;
			}

			.wrapper.style3 h1, .wrapper.style3 h2, .wrapper.style3 h3, .wrapper.style3 h4, .wrapper.style3 h5, .wrapper.style3 h6 {
				color: #ffffff;
			}

			.wrapper.style3 blockquote {
				border-left-color: rgba(255, 255, 255, 0.25);
			}

			.wrapper.style3 code {
				background: rgba(255, 255, 255, 0.075);
				border-color: rgba(255, 255, 255, 0.25);
			}

			.wrapper.style3 hr {
				border-bottom-color: rgba(255, 255, 255, 0.25);
			}

			.wrapper.style3 .box {
				border-color: rgba(255, 255, 255, 0.25);
			}

			.wrapper.style3 input[type="submit"],
			.wrapper.style3 input[type="reset"],
			.wrapper.style3 input[type="button"],
			.wrapper.style3 button,
			.wrapper.style3 .button {
				background-color: #f2f2f2;
				color: #000 !important;
			}

				.wrapper.style3 input[type="submit"]:hover,
				.wrapper.style3 input[type="reset"]:hover,
				.wrapper.style3 input[type="button"]:hover,
				.wrapper.style3 button:hover,
				.wrapper.style3 .button:hover {
					background-color: white;
				}

				.wrapper.style3 input[type="submit"]:active,
				.wrapper.style3 input[type="reset"]:active,
				.wrapper.style3 input[type="button"]:active,
				.wrapper.style3 button:active,
				.wrapper.style3 .button:active {
					background-color: #e5e5e5;
				}

				.wrapper.style3 input[type="submit"].alt,
				.wrapper.style3 input[type="reset"].alt,
				.wrapper.style3 input[type="button"].alt,
				.wrapper.style3 button.alt,
				.wrapper.style3 .button.alt {
					background-color: transparent;
					box-shadow: inset 0 0 0 2px rgba(255, 255, 255, 0.25);
					color: #ffffff !important;
				}

					.wrapper.style3 input[type="submit"].alt:hover,
					.wrapper.style3 input[type="reset"].alt:hover,
					.wrapper.style3 input[type="button"].alt:hover,
					.wrapper.style3 button.alt:hover,
					.wrapper.style3 .button.alt:hover {
						background-color: rgba(255, 255, 255, 0.075);
					}

					.wrapper.style3 input[type="submit"].alt:active,
					.wrapper.style3 input[type="reset"].alt:active,
					.wrapper.style3 input[type="button"].alt:active,
					.wrapper.style3 button.alt:active,
					.wrapper.style3 .button.alt:active {
						background-color: rgba(255, 255, 255, 0.2);
					}

					.wrapper.style3 input[type="submit"].alt.icon:before,
					.wrapper.style3 input[type="reset"].alt.icon:before,
					.wrapper.style3 input[type="button"].alt.icon:before,
					.wrapper.style3 button.alt.icon:before,
					.wrapper.style3 .button.alt.icon:before {
						color: #999999;
					}

				.wrapper.style3 input[type="submit"].special,
				.wrapper.style3 input[type="reset"].special,
				.wrapper.style3 input[type="button"].special,
				.wrapper.style3 button.special,
				.wrapper.style3 .button.special {
					background-color: #8a4680;
					color: #ffffff !important;
				}

					.wrapper.style3 input[type="submit"].special:hover,
					.wrapper.style3 input[type="reset"].special:hover,
					.wrapper.style3 input[type="button"].special:hover,
					.wrapper.style3 button.special:hover,
					.wrapper.style3 .button.special:hover {
						background-color: #9b4f90;
					}

					.wrapper.style3 input[type="submit"].special:active,
					.wrapper.style3 input[type="reset"].special:active,
					.wrapper.style3 input[type="button"].special:active,
					.wrapper.style3 button.special:active,
					.wrapper.style3 .button.special:active {
						background-color: #793d70;
					}

			.wrapper.style3 label {
				color: #ffffff;
			}

			.wrapper.style3 input[type="text"],
			.wrapper.style3 input[type="password"],
			.wrapper.style3 input[type="email"],
			.wrapper.style3 select,
			.wrapper.style3 textarea {
				background: rgba(255, 255, 255, 0.075);
				border-color: rgba(255, 255, 255, 0.25);
			}

				.wrapper.style3 input[type="text"]:focus,
				.wrapper.style3 input[type="password"]:focus,
				.wrapper.style3 input[type="email"]:focus,
				.wrapper.style3 select:focus,
				.wrapper.style3 textarea:focus {
					border-color: #8a4680;
					box-shadow: 0 0 0 1px #8a4680;
				}

			.wrapper.style3 .select-wrapper:before {
				color: rgba(255, 255, 255, 0.25);
			}

			.wrapper.style3 input[type="checkbox"] + label,
			.wrapper.style3 input[type="radio"] + label {
				color: #bfbfbf;
			}

				.wrapper.style3 input[type="checkbox"] + label:before,
				.wrapper.style3 input[type="radio"] + label:before {
					background: rgba(255, 255, 255, 0.075);
					border-color: rgba(255, 255, 255, 0.25);
				}

			.wrapper.style3 input[type="checkbox"]:checked + label:before,
			.wrapper.style3 input[type="radio"]:checked + label:before {
				background-color: #8a4680;
				border-color: #8a4680;
				color: #ffffff;
			}

			.wrapper.style3 input[type="checkbox"]:focus + label:before,
			.wrapper.style3 input[type="radio"]:focus + label:before {
				border-color: #8a4680;
				box-shadow: 0 0 0 1px #8a4680;
			}

			.wrapper.style3 ::-webkit-input-placeholder {
				color: #999999 !important;
			}

			.wrapper.style3 :-moz-placeholder {
				color: #999999 !important;
			}

			.wrapper.style3 ::-moz-placeholder {
				color: #999999 !important;
			}

			.wrapper.style3 :-ms-input-placeholder {
				color: #999999 !important;
			}

			.wrapper.style3 .formerize-placeholder {
				color: #999999 !important;
			}

			.wrapper.style3 ul.alt li {
				border-top-color: rgba(255, 255, 255, 0.25);
			}

			.wrapper.style3 header p {
				color: #999999;
			}

			.wrapper.style3 table tbody tr {
				border-color: rgba(255, 255, 255, 0.25);
			}

				.wrapper.style3 table tbody tr:nth-child(2n + 1) {
					background-color: rgba(255, 255, 255, 0.075);
				}

			.wrapper.style3 table th {
				color: #ffffff;
			}

			.wrapper.style3 table thead {
				border-bottom-color: rgba(255, 255, 255, 0.25);
			}

			.wrapper.style3 table tfoot {
				border-top-color: rgba(255, 255, 255, 0.25);
			}

			.wrapper.style3 table.alt tbody tr td {
				border-color: rgba(255, 255, 255, 0.25);
			}

			.wrapper.style3 .inner {
				position: relative;
				z-index: 2;
			}

			.wrapper.style3 p {
				text-transform: uppercase;
				font-size: .75rem;
				font-weight: 300;
				margin: 0 0 .5rem 0;
				padding: 0 0 1rem 0;
				letter-spacing: .25rem;
			}

				.wrapper.style3 p:after {
					content: '';
					position: absolute;
					margin: auto;
					right: 0;
					bottom: 0;
					left: 0;
					width: 50%;
					height: 1px;
					background-color: rgba(255, 255, 255, 0.5);
				}

			.wrapper.style3:before {
				-moz-transition: opacity 3s ease;
				-webkit-transition: opacity 3s ease;
				-ms-transition: opacity 3s ease;
				transition: opacity 3s ease;
				-moz-transition-delay: 1.25s;
				-webkit-transition-delay: 1.25s;
				-ms-transition-delay: 1.25s;
				transition-delay: 1.25s;
				content: '';
				display: block;
				background-color: rgba(0, 0, 0, 0.95);
				height: 100%;
				left: 0;
				opacity: 0.75;
				position: absolute;
				top: 0;
				width: 100%;
				z-index: 1;
			}

		@media screen and (max-width: 1280px) {

			.wrapper > .inner {
				width: 75rem;
			}

		}

		@media screen and (max-width: 980px) {

			.wrapper > .inner {
				width: 90%;
			}

			.wrapper.style3 {
				background-attachment: scroll;
			}

		}

		@media screen and (max-width: 736px) {

			.wrapper {
				padding: 3rem 0 1rem 0 ;
			}

		}

/* Flexgrid */

	.grid-style {
		width: 100%;
		margin: 0 0 2.5rem 0;
		display: -moz-flex;
		display: -webkit-flex;
		display: -ms-flex;
		display: flex;
		-moz-flex-wrap: wrap;
		-webkit-flex-wrap: wrap;
		-ms-flex-wrap: wrap;
		flex-wrap: wrap;
		-moz-align-items: stretch;
		-webkit-align-items: stretch;
		-ms-align-items: stretch;
		align-items: stretch;
	}

		.grid-style > * {
			-moz-flex-shrink: 1;
			-webkit-flex-shrink: 1;
			-ms-flex-shrink: 1;
			flex-shrink: 1;
			-moz-flex-grow: 0;
			-webkit-flex-grow: 0;
			-ms-flex-grow: 0;
			flex-grow: 0;
		}

		.grid-style > * {
			width: 50%;
		}

		.grid-style > * {
			padding: 2rem;
			width: calc(50% + 2rem);
		}

		.grid-style > :nth-child(-n + 2) {
			padding-top: 0;
		}

		.grid-style > :nth-last-child(-n + 2) {
			padding-bottom: 0;
		}

		.grid-style > :nth-child(2n + 1) {
			padding-left: 0;
		}

		.grid-style > :nth-child(2n) {
			padding-right: 0;
		}

		.grid-style > :nth-child(2n + 1),
		.grid-style > :nth-child(2n) {
			width: calc(50% + 0rem);
		}

		.grid-style .box {
			margin: 0;
		}

		@media screen and (max-width: 980px) {

			.grid-style > * {
				width: 100%;
			}

			.grid-style > * {
				padding: 1rem;
				width: calc(50% + 1rem);
			}

			.grid-style > :nth-child(-n + 2) {
				padding-top: 1rem;
			}

			.grid-style > :nth-last-child(-n + 2) {
				padding-bottom: 1rem;
			}

			.grid-style > :nth-child(2n + 1) {
				padding-left: 1rem;
			}

			.grid-style > :nth-child(2n) {
				padding-right: 1rem;
			}

			.grid-style > :nth-child(2n + 1),
			.grid-style > :nth-child(2n) {
				padding: 1rem;
				width: calc(100% + 2rem);
			}

			.grid-style > * {
				padding: 1rem;
				width: calc(100% + 2rem);
			}

			.grid-style > :nth-child(-n + 1) {
				padding-top: 0;
			}

			.grid-style > :nth-last-child(-n + 1) {
				padding-bottom: 0;
			}

			.grid-style > :nth-child(1n + 1) {
				padding-left: 0;
			}

			.grid-style > :nth-child(1n) {
				padding-right: 0;
			}

			.grid-style > :nth-child(1n + 1),
			.grid-style > :nth-child(1n) {
				width: calc(100% + 1rem);
			}

		}

	.gallery {
		width: 100%;
		margin: 2.5rem 0 2.5rem 0;
		display: -moz-flex;
		display: -webkit-flex;
		display: -ms-flex;
		display: flex;
		-moz-flex-wrap: wrap;
		-webkit-flex-wrap: wrap;
		-ms-flex-wrap: wrap;
		flex-wrap: wrap;
		-moz-align-items: stretch;
		-webkit-align-items: stretch;
		-ms-align-items: stretch;
		align-items: stretch;
	}

		.gallery > * {
			-moz-flex-shrink: 1;
			-webkit-flex-shrink: 1;
			-ms-flex-shrink: 1;
			flex-shrink: 1;
			-moz-flex-grow: 0;
			-webkit-flex-grow: 0;
			-ms-flex-grow: 0;
			flex-grow: 0;
		}

		.gallery > * {
			width: 50%;
		}

		.gallery > * {
			padding: 2rem;
			width: calc(50% + 2rem);
		}

		.gallery > :nth-child(-n + 2) {
			padding-top: 0;
		}

		.gallery > :nth-last-child(-n + 2) {
			padding-bottom: 0;
		}

		.gallery > :nth-child(2n + 1) {
			padding-left: 0;
		}

		.gallery > :nth-child(2n) {
			padding-right: 0;
		}

		.gallery > :nth-child(2n + 1),
		.gallery > :nth-child(2n) {
			width: calc(50% + 0rem);
		}

		.gallery .image {
			background: #FFF;
			padding: 1rem;
		}

			.gallery .image.fit {
				margin: 0;
			}

		@media screen and (max-width: 980px) {

			.gallery > * {
				width: 100%;
			}

			.gallery > * {
				padding: 1rem;
				width: calc(50% + 1rem);
			}

			.gallery > :nth-child(-n + 2) {
				padding-top: 1rem;
			}

			.gallery > :nth-last-child(-n + 2) {
				padding-bottom: 1rem;
			}

			.gallery > :nth-child(2n + 1) {
				padding-left: 1rem;
			}

			.gallery > :nth-child(2n) {
				padding-right: 1rem;
			}

			.gallery > :nth-child(2n + 1),
			.gallery > :nth-child(2n) {
				padding: 1rem;
				width: calc(100% + 2rem);
			}

			.gallery > * {
				padding: 1rem;
				width: calc(100% + 2rem);
			}

			.gallery > :nth-child(-n + 1) {
				padding-top: 0;
			}

			.gallery > :nth-last-child(-n + 1) {
				padding-bottom: 0;
			}

			.gallery > :nth-child(1n + 1) {
				padding-left: 0;
			}

			.gallery > :nth-child(1n) {
				padding-right: 0;
			}

			.gallery > :nth-child(1n + 1),
			.gallery > :nth-child(1n) {
				width: calc(100% + 1rem);
			}

		}

/* Header */

	body.subpage {
		padding-top: 3.25em;
	}

	@-moz-keyframes reveal-header {
		0% {
			top: -4em;
			opacity: 0;
		}

		100% {
			top: 0;
			opacity: 1;
		}
	}

	@-webkit-keyframes reveal-header {
		0% {
			top: -4em;
			opacity: 0;
		}

		100% {
			top: 0;
			opacity: 1;
		}
	}

	@-ms-keyframes reveal-header {
		0% {
			top: -4em;
			opacity: 0;
		}

		100% {
			top: 0;
			opacity: 1;
		}
	}

	@keyframes reveal-header {
		0% {
			top: -4em;
			opacity: 0;
		}

		100% {
			top: 0;
			opacity: 1;
		}
	}

	#header {
		background: rgba(0, 0, 0, 0.975);
		color: #a6a6a6;
		cursor: default;
		height: 3.25em;
		left: 0;
		line-height: 3.25em;
		position: fixed;
		text-align: right;
		top: 0;
		width: 100%;
		z-index: 10001;
	}

		#header > .logo {
			display: inline-block;
			height: inherit;
			left: 1.25em;
			line-height: inherit;
			margin: 0;
			padding: 0;
			position: absolute;
			top: 0;
		}

			#header > .logo a {
				font-size: 1.25em;
				color: #FFF;
				text-decoration: none;
			}

				#header > .logo a:hover {
					color: rgba(255, 255, 255, 0.65);
				}

			#header > .logo span {
				font-weight: 400;
				font-size: .8em;
				color: rgba(255, 255, 255, 0.65);
			}

		#header > a {
			-moz-transition: color 0.2s ease-in-out;
			-webkit-transition: color 0.2s ease-in-out;
			-ms-transition: color 0.2s ease-in-out;
			transition: color 0.2s ease-in-out;
			display: inline-block;
			padding: 0 0.75em;
			color: inherit;
			text-decoration: none;
			color: #FFF;
		}

			#header > a:hover {
				color: #f2f2f2;
			}

			#header > a[href="#menu"] {
				text-decoration: none;
				-webkit-tap-highlight-color: transparent;
			}

				#header > a[href="#menu"]:before {
					content: "";
					-moz-osx-font-smoothing: grayscale;
					-webkit-font-smoothing: antialiased;
					font-family: FontAwesome;
					font-style: normal;
					font-weight: normal;
					text-transform: none !important;
				}

				#header > a[href="#menu"]:before {
					margin: 0 0.5em 0 0;
				}

			#header > a + a[href="#menu"]:last-child {
				border-left: solid 1px rgba(0, 0, 0, 0.15);
				padding-left: 1.25em;
				margin-left: 0.5em;
			}

			#header > a:last-child {
				padding-right: 1.25em;
			}

			@media screen and (max-width: 736px) {

				#header > a {
					padding: 0 0.5em;
				}

					#header > a + a[href="#menu"]:last-child {
						padding-left: 1em;
						margin-left: 0.25em;
					}

					#header > a:last-child {
						padding-right: 1em;
					}

			}

		#header.reveal {
			-moz-animation: reveal-header 0.5s ease;
			-webkit-animation: reveal-header 0.5s ease;
			-ms-animation: reveal-header 0.5s ease;
			animation: reveal-header 0.5s ease;
		}

		#header.alt {
			-moz-animation: none;
			-webkit-animation: none;
			-ms-animation: none;
			animation: none;
			background-color: transparent;
			box-shadow: none;
			overflow: hidden;
			position: absolute;
			top: 1.5em;
		}

			#header.alt h1 {
				left: 2.5em;
			}

			#header.alt nav {
				right: 2.5em;
			}

	@media screen and (max-width: 980px) {

		body.subpage {
			padding-top: 44px;
		}

		#header {
			height: 44px;
			line-height: 44px;
		}

			#header > h1 {
				left: 1em;
			}

				#header > h1 a {
					font-size: 1em;
				}

	}

	@media screen and (max-width: 480px) {

		#header {
			min-width: 320px;
		}

	}

/* Menu */

	#menu {
		-moz-transform: translateX(20rem);
		-webkit-transform: translateX(20rem);
		-ms-transform: translateX(20rem);
		transform: translateX(20rem);
		-moz-transition: -moz-transform 0.5s ease, box-shadow 0.5s ease, visibility 0.5s;
		-webkit-transition: -webkit-transform 0.5s ease, box-shadow 0.5s ease, visibility 0.5s;
		-ms-transition: -ms-transform 0.5s ease, box-shadow 0.5s ease, visibility 0.5s;
		transition: transform 0.5s ease, box-shadow 0.5s ease, visibility 0.5s;
		-webkit-overflow-scrolling: touch;
		background: rgba(0, 0, 0, 0.95);
		box-shadow: none;
		color: #000;
		height: 100%;
		max-width: 80%;
		overflow-y: auto;
		padding: 3rem 2rem;
		position: fixed;
		right: 0;
		top: 0;
		visibility: hidden;
		width: 20rem;
		z-index: 10002;
	}

		#menu > ul {
			margin: 0 0 1rem 0;
		}

			#menu > ul.links {
				list-style: none;
				padding: 0;
			}

				#menu > ul.links > li {
					padding: 0;
				}

					#menu > ul.links > li > a:not(.button) {
						border: 0;
						border-top: solid 1px rgba(255, 255, 255, 0.125);
						color: rgba(255, 255, 255, 0.5);
						display: block;
						line-height: 3.5rem;
						text-decoration: none;
						text-transform: uppercase;
					}

						#menu > ul.links > li > a:not(.button):hover {
							color: #FFF;
						}

					#menu > ul.links > li > .button {
						display: block;
						margin: 0.5rem 0 0 0;
					}

					#menu > ul.links > li:first-child > a:not(.button) {
						border-top: 0 !important;
					}

		#menu .close {
			text-decoration: none;
			-moz-transition: color 0.2s ease-in-out;
			-webkit-transition: color 0.2s ease-in-out;
			-ms-transition: color 0.2s ease-in-out;
			transition: color 0.2s ease-in-out;
			-webkit-tap-highlight-color: transparent;
			border: 0;
			color: #999999;
			cursor: pointer;
			display: block;
			height: 3.25rem;
			line-height: 3.25rem;
			padding-right: 1.25rem;
			position: absolute;
			right: 0;
			text-align: right;
			top: 0;
			vertical-align: middle;
			width: 7rem;
		}

			#menu .close:before {
				-moz-osx-font-smoothing: grayscale;
				-webkit-font-smoothing: antialiased;
				font-family: FontAwesome;
				font-style: normal;
				font-weight: normal;
				text-transform: none !important;
			}

			#menu .close:before {
				content: '\f00d';
				font-size: 1.25rem;
			}

			#menu .close:hover {
				color: #000;
			}

			@media screen and (max-width: 736px) {

				#menu .close {
					height: 4rem;
					line-height: 4rem;
				}

			}

		#menu.visible {
			-moz-transform: translateX(0);
			-webkit-transform: translateX(0);
			-ms-transform: translateX(0);
			transform: translateX(0);
			box-shadow: 0 0 1.5rem 0 rgba(0, 0, 0, 0.2);
			visibility: visible;
		}

		@media screen and (max-width: 736px) {

			#menu {
				padding: 2.5rem 1.75rem;
			}

		}

/* Banner */

	.banner {
		background-color: #8a4680;
		color: #e2d1df;
		padding: 8em 0;
		position: relative;
	}

		.banner input, .banner select, .banner textarea {
			color: #ffffff;
		}

		.banner a {
			color: #ffffff;
		}

		.banner strong, .banner b {
			color: #ffffff;
		}

		.banner h1, .banner h2, .banner h3, .banner h4, .banner h5, .banner h6 {
			color: #ffffff;
		}

		.banner blockquote {
			border-left-color: rgba(255, 255, 255, 0.25);
		}

		.banner code {
			background: rgba(255, 255, 255, 0.075);
			border-color: rgba(255, 255, 255, 0.25);
		}

		.banner hr {
			border-bottom-color: rgba(255, 255, 255, 0.25);
		}

		.banner.full {
			padding: 0;
			min-height: 100vh;
			height: 100vh !important;
		}

		.banner.half {
			padding: 0;
			min-height: 50vh;
			height: 50vh !important;
		}

		.banner:after {
			-moz-pointer-events: none;
			-webkit-pointer-events: none;
			-ms-pointer-events: none;
			pointer-events: none;
			-moz-transition: opacity 1.5s ease-in-out, visibility 1.5s;
			-webkit-transition: opacity 1.5s ease-in-out, visibility 1.5s;
			-ms-transition: opacity 1.5s ease-in-out, visibility 1.5s;
			transition: opacity 1.5s ease-in-out, visibility 1.5s;
			background: #000000;
			content: '';
			display: block;
			height: 100%;
			left: 0;
			opacity: 0;
			position: absolute;
			top: 0;
			visibility: hidden;
			width: 100%;
			z-index: 2;
		}

		.banner .indicators {
			bottom: 1.5em;
			left: 0;
			list-style: none;
			margin: 0;
			padding: 0;
			position: absolute;
			text-align: center;
			width: 100%;
			z-index: 2;
		}

			.banner .indicators li {
				cursor: pointer;
				display: inline-block;
				height: 2em;
				overflow: hidden;
				padding: 0;
				position: relative;
				text-indent: 2em;
				width: 2em;
			}

				.banner .indicators li:before {
					background: rgba(255, 255, 255, 0.35);
					border-radius: 100%;
					content: '';
					display: inline-block;
					height: 0.8em;
					left: 50%;
					margin: -0.4em 0 0 -0.4em;
					position: absolute;
					text-indent: 0;
					top: 50%;
					width: 0.8em;
				}

				.banner .indicators li.visible:before {
					background: #fff;
				}

		.banner > article {
			-moz-transition: opacity 1.5s ease, visibility 1.5s;
			-webkit-transition: opacity 1.5s ease, visibility 1.5s;
			-ms-transition: opacity 1.5s ease, visibility 1.5s;
			transition: opacity 1.5s ease, visibility 1.5s;
			background-attachment: fixed;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			height: 100%;
			left: 0;
			opacity: 0;
			position: absolute;
			text-align: center;
			top: 0;
			visibility: hidden;
			width: 100%;
			z-index: 0;
		}

			.banner > article:before {
				content: '';
				display: inline-block;
				height: 100%;
				vertical-align: middle;
			}

			.banner > article:after {
				content: '';
				display: block;
				width: 100%;
				height: 100%;
				position: absolute;
				top: 0;
				left: 0;
				background: #000;
				opacity: 0.35;
			}

			.banner > article .inner {
				position: relative;
				display: inline-block;
				vertical-align: middle;
				z-index: 1;
			}

				.banner > article .inner > :last-child {
					margin-bottom: 0;
				}

			.banner > article h2 {
				font-size: 7rem;
				margin-bottom: 0;
				color: #FFF;
				font-weight: 300;
			}

				.banner > article h2:after {
					display: none;
				}

			.banner > article p {
				color: rgba(255, 255, 255, 0.65);
				text-transform: uppercase;
				font-size: 1rem;
				font-weight: 300;
				margin: 0;
				padding-bottom: 1.75rem;
				letter-spacing: .25rem;
			}

				.banner > article p:after {
					content: '';
					position: absolute;
					margin: auto;
					right: 0;
					bottom: 0;
					left: 0;
					width: 50%;
					height: 1px;
					background-color: rgba(255, 255, 255, 0.65);
				}

			.banner > article a {
				color: #FFF;
				text-decoration: none;
			}

			.banner > article img {
				display: none;
			}

			.banner > article.visible {
				opacity: 1;
				visibility: visible;
			}

			.banner > article.top {
				z-index: 1;
			}

			.banner > article.instant {
				-moz-transition: none !important;
				-webkit-transition: none !important;
				-ms-transition: none !important;
				transition: none !important;
			}

		body.is-loading .banner:after {
			opacity: 1.0;
			visibility: visible;
		}

		@media screen and (max-width: 1280px) {

			.banner.full {
				padding: 0;
				min-height: 75vh;
				height: 75vh !important;
			}

		}

		@media screen and (max-width: 980px) {

			.banner.full {
				padding: 0;
				min-height: 50vh;
				height: 50vh !important;
			}

			.banner > article {
				background-attachment: scroll;
			}

		}

		@media screen and (max-width: 736px) {

			.banner > article .inner {
				width: 90%;
			}

			.banner > article p {
				margin-bottom: 1rem;
			}

			.banner > article h2 {
				font-size: 4em;
			}

		}

		body.is-mobile .banner > article {
			background-attachment: scroll;
		}

/* Main */

	#main {
		padding: 4rem 0 2rem 0 ;
	}

		@media screen and (max-width: 736px) {

			#main {
				padding: 3rem 0 1rem 0 ;
			}

		}

/* Footer */

	#footer {
		padding: 4rem 0 2rem 0 ;
		background: #000;
		text-align: center;
	}

		#footer a {
			color: rgba(255, 255, 255, 0.5);
		}

			#footer a:hover {
				color: #FFF;
			}

		#footer .copyright {
			color: #bbb;
			font-size: 0.9rem;
			margin: 0 0 2rem 0;
			padding: 0;
			text-align: center;
		}

		@media screen and (max-width: 736px) {

			#footer {
				padding: 3rem 0 1rem 0 ;
			}

		}