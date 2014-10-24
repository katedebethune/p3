<!DOCTYPE html>
<HTML>
<head>
        <title>"Developer's Best Friend"</title>
        <meta charset="utf-8">
		
        {{ HTML::style('css/pm_reset.css') }}
        {{ HTML::style('css/bootstrap.css') }}
        {{-- Blade Comment --}}
        {{-- HTML::style('css/styles.css') --}}
        <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
        
        <style type="text/css">
        body {
    		background-color: burlywood;
    		font-family: 'Raleway', sans-serif;
    		padding:20px 40px 20px 20px;
		}
		
		hr { 
			display: block;
			margin-top: 1em;
			margin-bottom: 0.5em;
			margin-left: auto;
			margin-right: 40%;
			/* border-style: inset; */
			border-width: 1px;
		} 
		
		p {
			margin-right: 40%;
		}
			
		.logo {
			width:122px;
			margin-bottom:20px;
			margin-right:5px;
			float:left;
			display:block;
			
		}
		
		/* We'll use this class to style the boxes..Gold, 50x50px */
		.box {
			 width:150px;
			 height:150px;
			 float:left;
			 margin:4px;
			 padding:5px;
			 background-color:#7F4008;
			 margin-bottom:30px; 
		}
		.header {
			/*float:right; */
		}
		.resizedTextbox {
			width: 2em;
			height: 1.5em; 
		}
		
		input {
			/* background: white; */
			padding: .25em;
			/* font-family: 'Arial', sans-serif; */
		}
		
		label {
			font-family: 'Arial', sans-serif;
		}
		.names {
			font-size: 1.25em;
			font-weight: bold;
		}
		
		.pw_header {
			width:52%;
		}
		.pw_output {
			width:52%;
			height:20%;
			float:left;
			background-color: #A1A1A1;
			color: white;
			display:block;
			margin: 0 auto;
			padding: 20px;
			text-align: center;
			margin-bottom: 30px;
		}
		.footer {
			
			clear: both;
			
		}
			
			
			
	
        </style> 
</head>
<body>
        
	
		<a href='/'><img class='logo' src="/images/anvil.png" alt="dev best friend logo"></a> 
		<div class="header">
			<h1>The Developer's Best Friend</h1>
			<p>&nbsp;&nbsp;A Set of Tools for Web Development</p>
		</div>
	
		<div style="clear: both;"></div>
		@yield('nav')
	
		@yield('content')
		<br>
		<div class="footer">
			<p>copyright 2014, SK deBethune, all rights reserved</p>
		</div>
        
        
</body>




