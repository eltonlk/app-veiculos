<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  	<title>
  	  @yield('title')
  	</title>

    <style type="text/css">
      @page {
      	margin: 2cm;
      }
      body {
        font-family: sans-serif;
      	margin: 1.2cm 0 0.5cm;
      	text-align: justify;
        font-size: 0.9em;
      }
      .page-number {
        text-align: right;
      }
      .page-number:before {
        content: counter(page);
      }
      hr {
        page-break-after: always;
        border: 0;
      }
      #header,
      #footer {
        position: fixed;
        left: 0;
      	right: 0;
      	color: #999;
      	font-size: 0.8em;
      }
      #header {
        top: 0;
      	border-bottom: 0.1pt solid #aaa;
      }
      #header h1 {
        margin: 0;
      }
      #footer {
        bottom: 0;
        border-top: 0.1pt solid #aaa;
      }
      #content table {
        width: 100%;
        border-collapse: collapse;
      	border: none;
        font-size: 0.7em;
      }
      #content thead {
        border-bottom: 0.1pt solid #666;
      }
      #content td {
        border-bottom: 0.1pt solid #AAA;
      }
      #content tbody tr:last-child td {
        border-bottom: none;
      }
      #content tbody tr:nth-of-type(odd) {
        background-color: #f9f9f9;
      }
      #content th {
        text-align: left;
      }
      #content th, td {
        padding: 4px 2px;
      }
    </style>
  </head>
  <body>
    <div id="header">
      <h1>
        @yield('title')
      </h1>
    </div>

    <div id="footer">
      <div class="page-number"></div>
    </div>

    <div id="content">
      @yield('content')
    </div>
  </body>
</html>
