<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Parukia.NET -- Insert some cheesy slogan here</title>

<style>

nav {
  margin: 0px auto; 
	text-align: center;
}

nav ul ul {
	display: none;
}

	nav ul li:hover > ul {
		display: block;
	}


nav ul {
	background: #0000ff; 
	background: linear-gradient(top, #0000ff 0%, #0000ad 100%);  
	background: -moz-linear-gradient(top, #0000ff 0%, #0000ad 100%); 
	background: -webkit-linear-gradient(top, #0000ff 0%, #0000ad 100%); 
	box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
	padding: 0 20px;
	border-radius: 10px;  
	list-style: none;
	position: relative;
	display: inline-table;
        width:75%; 
        z-index:+1;

}
	nav ul:after {
		content: ""; clear: both; display: block;
	}

	nav ul li {
		float: left;
                border-left: 1px solid #000000; position: relative;
	}
		nav ul li:hover {
			background: #00070;
			background: linear-gradient(top, #000063 0%, #000070 40%);
			background: -moz-linear-gradient(top, #000063 0%, #000070 40%);
			background: -webkit-linear-gradient(top, #000063 0%, #000070 40%);
		}
			nav ul li:hover a {
				color: #ffffff;
			}
		
		nav ul li a {
			display: block; padding: 7px 40px;
			color: #ffffff; text-decoration: none;
		}
			
		
	nav ul ul {
		background: #000063; border-radius: 0px; padding: 0;
		position: absolute; top: 100%; width:100%;
	}
		nav ul ul li {
			float: none; 
			border-top: 1px solid #000053;
			border-bottom: 1px solid #00004c; position: relative; 
		}
			nav ul ul li a {
				padding: 7px 40px;
				color: #fff;
			}	
				nav ul ul li a:hover {
					background: #00004c;
				}
		
	nav ul ul ul {
		position: absolute; left: 100%; top:0; width:300px;
	} 
	nav ul ul ul li {
		width:100%;
	}



 body, div, h1, h2, h3, h4, h5, h6, p, ul, ol, li, dl, dt, dd, img, form, fieldset, input, textarea, blockquote {
	margin: 0; padding: 0; border: 0; 
} 


body {
	background:black;
	font-family: Helvetica, sans-serif; font-size: 12px; line-height: 24px;
        background:url('http://i44.tinypic.com/fxbcpd.jpg'); 
}


#header {
width:100%;
/* background:green; */}

html, body { width:100%; height:100%; }

#menu {width:100% background:yellow; font-size: 18px; }


#content {
/* background:black; */
color:white;
width:75%;
float:left; 
opacity:1;
filter:alpha(opacity=100); /* For IE8 and earlier */
z-index:-1;
height:50%;
}

#sidebar {
background:blue;
width:20%;
height:100%;
float:right;
padding:0;
margins:0; 
color:white;
font-family:'Arial'
opacity:1;
filter:alpha(opacity=100); /* For IE8 and earlier */  
z-index:-1; 
padding:0.5%;
margin-right:2%;  
border-radius: 15px; 
background-color:#BDDAF1;
opacity:0.7;
filter:alpha(opacity=70); /* For IE8 and earlier */
color:black;  }

#wrapper {width:100%; height:100%;  } 

.push { height:2em; }

#news { width:10% height: 200px; 
	background:yellow;
	color:black; 
	margin-left:2%;
	margin-right:2%; 
        padding-top:1%;
	padding-left:1%;
	padding-right:1%; 
        padding-bottom:10%;
	border-radius: 15px; 
	background-color:#BDDAF1;
	opacity:0.7;
	filter:alpha(opacity=70); /* For IE8 and earlier */ 
	margin-top: 1%; /*more margin on top???? */ }

.footer {
              width:90%;
              margin:10px 10px;
              background-color:#BDDAF1;
              opacity:0.7;
              filter:alpha(opacity=70); /* For IE8 and earlier */ 
              font-family:"Arial";
              color:black; 
              border-radius: 15px; 
              padding:1%; }
#ft {/*width:100%;*/}
#ftex {/*width:70%;*/}
#sn { }
#ftext {/*width:70%*/};
		
</style>

</head>
<body>

<div id="header">
<center>
<img src="http://fc01.deviantart.net/fs70/f/2013/192/8/c/parukia_net_banner_by_xkuyu-d6d295i.png" alt="banner" />
</center>
</div>

<div id="menu">

<nav>
	<ul>
		<li><a href="#">Home</a></li>
		<li><a href="#">Forums</a></li>
		<li><a href="#">About Us</a></li>
		<li><a href="#">In-Game Guides</a>
			<ul>
				<li><a href="#">Red/Blue/Yellow</a></li>
				<li><a href="#">Gold/Silver/Crystal</a></li>
				<li><a href="#">Generation III</a>
					<ul>
						<li><a href="#">Ruby/Sapphire/Emerald</a></li>
						<li><a href="#">FireRed/LeafGreen</a></li>
					</ul>
				</li>
				<li><a href="#">Generation IV</a>
					<ul>
						<li><a href="#">Diamond/Pearl/Platinum</a></li>
						<li><a href="#">HeartGold/SoulSilver</a></li>
					</ul>
				</li>
				<li><a href="#">Generation V</a>
					<ul>
						<li><a href="#">Black/White</a></li>
						<li><a href="#">Black2/White2</a></li>
					</ul>
				</li>
				<li><a href="#">X/Y</a></li>
			</ul>
		</li>
		<li><a href="#">Competitive Guides</a>
			<ul>
				<li><a href="#">Pok�mon Strategy Guides</a></li>
				<li><a href="#">Tiers</a></li>
				<li><a href="#">Battle Simulator</a></li>
			</ul>
		</li>
	</ul>
</nav>


</div>
<div id="wrapper">
<div id="content">


<div id="news">
<h1>Some News Item</h1>
<hr />
Some news item. 
<table border="1">
  <tr>
    <th>Hoenn</th>
    <th>Sinnoh</th>
  </tr>
  <tr>
    <td>Treecko</td>
    <td>Turtwig</td>
  </tr>
  <tr>
    <td>Torchic</td>
    <td>Chimchar</td>
  </tr>
  <tr>
    <td>Mudkip</td>
    <td>Piplup</td>
  </tr>
</table>


</div>


<div id="news">
<h1>This is a heading. </h1>
<hr />
This is another news item. 
</div>


</div>

<div id="sidebar">
Sidebar content goes here.
<p class="push"></p>
</div>
</div>

<div class="push"></div>
        </div>
	<center>
        <div class="footer">
        <table border="0" id="ft">
	<tr>
	  <td id="ftex">
            <p id="ftext"> <i>Copyright � 2012 � 2013 Parukia.Net. Pok�mon and Pok�mon character names belong to Nintendo, Creatures, GAME FREAK, and The Pok�mon Company International. Parukia.Net is not affiliated with Nintendo. All content on this site belongs to their respective authors. Click <a href="">here</a> to view our Credits page! Thanks to Chris Spooner of line25.com for the dropdown menu! </i></p>
	  </td>
	  <td>
<table border="0" id="sn">
<tr><td><a href="">deviantArt</a></td></tr>
<tr><td><a href="">Twitter</a></td></tr>
<tr><td><a href="">Facebook</a></td></tr>
</tr>
</table>
</td>
	</tr>
	</table>
        </div>
	</center>


</body>
</html>




<!---TO DO LIST:

ADD LINKS IN FOOTER, AS WELL AS DROPDOWN MENU, AND SIDEBAR-->
