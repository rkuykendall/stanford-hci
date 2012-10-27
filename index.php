<?php print "Hello World!"; ?>ad>
        <meta charset="utf-8">
        <title>Stanford HCI Prototype</title>
        <meta name="viewport" content="width=device-width">
        <link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
        <style>
          /* Meyer CSS Reset
          =========================
          http://meyerweb.com/eric/tools/css/reset/ 
          v2.0 | 20110126
          License: none (public domain)
          */

          html, body, div, span, applet, object, iframe,
          h1, h2, h3, h4, h5, h6, p, blockquote, pre,
          a, abbr, acronym, address, big, cite, code,
          del, dfn, em, img, ins, kbd, q, s, samp,
          small, strike, strong, sub, sup, tt, var,
          b, u, i, center,
          dl, dt, dd, ol, ul, li,
          fieldset, form, label, legend,
          table, caption, tbody, tfoot, thead, tr, th, td,
          article, aside, canvas, details, embed, 
          figure, figcaption, footer, header, hgroup, 
          menu, nav, output, ruby, section, summary,
          time, mark, audio, video {
          	margin: 0;
          	padding: 0;
          	border: 0;
          	font-size: 100%;
          	font: inherit;
          	vertical-align: baseline;
          }
          /* HTML5 display-role reset for older browsers */
          article, aside, details, figcaption, figure, 
          footer, header, hgroup, menu, nav, section {
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
          blockquote:before, blockquote:after,
          q:before, q:after {
          	content: '';
          	content: none;
          }
          table {
          	border-collapse: collapse;
          	border-spacing: 0;
          }
        
          /* Stylesheet
          =========================*/
          
          html {
            background-color: white;
            font-family: 'Arvo';
            background-color: #fcfcfc;
          }
          body {
            width: 650px;
            margin: 0px auto;
            padding: 0px;
            color: #222;
          }
          navigation {
            display: block;
            padding-top: 30px;
          }
          navigation h1 {
            display: inline-block;
            font-size: 40px;
          }
          navigation ol {
            display: inline-block;
            float: right;
          }
          navigation ol li {
            display: inline-block;
            margin: 0 2px;
          }
          navigation ol li.inactive,
          navigation ol li a {
            padding: 8px 10px;
            color: #fff;
          }
          navigation ol li a {
            display: block;
            background-color: #222;
            text-decoration: none;
          }
          navigation ol li.inactive {
            background-color: #ddd;
          }

          ol li {
            padding: 2px;
            margin: 2px 1px 0px 1px;
          }
          
          p.filler {
            display: block;
            background-color: #f6f6f6;
            font-size: 25px;
            text-align: center;
            padding: 150px 50px;
          }
          p.filler small {
            font-size: 15px;
          }
          .button {
            display: inline-block;
            padding: 8px 10px;
            color: #fff;
            background-color: #222;
            text-decoration: none;
          }
          p {
            margin: 15px 0;
            line-height: 1.15em;
          }
          .buttons {
            text-align: right;
          }
        </style>
    </head>
    <body>
        <navigation>
          <h1>Kick Me</h1>
          <ol>
            <li><a href="#">What is your habit?</a></li>
            <li class="inactive">Track Work</li>
            <li class="inactive">See Progress</li>
          </ol>
        </navigation>
        <section>
          <p class="filler"><small>Pretend this is an</small><br />Information Input Form<br /> <small>and click the submit button below.</small></p>
          <p class="buttons"><a href="" class="button">Okay, let's kick it!</a></p>
        </section>
    </body>
</html>



