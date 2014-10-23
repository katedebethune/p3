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
    		padding:20px;
    		background-color: tan;
    		font-family: 'Raleway', sans-serif;
		}
		.logo {
			width:122px;
			margin-bottom:20px;
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
		}
	
        </style> 
</head>
<body>
        <a href='/'><img class='logo' src="/images/anvil.png" alt="dev best friend logo"></a> 
        <h1>The Developer's Best Friend</h1>
        <h3>A Set of Tools for Web Development</h3>
		@yield('nav')
        
        @yield('content')
        <br>
        <br>
        <p>copyright notice</p>
</body>


