<!DOCTYPE html>
<html>
<head>
	<title>Vika Portfolio</title>
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Climate+Crisis&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Climate+Crisis&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tilt+Warp&display=swap" rel="stylesheet">

</head>
<style type="text/css">
	*{
		margin: 0;
		padding: 0;
	}

	.conteiner{
		/*background: url(/etc/img/background.jpg) no-repeat center center fixed;*/
		width: 100%;
		height: 100vh;
	}
	
	body {
        background: url(/etc/img/background.jpg) no-repeat center center fixed;
        width: 100%;
        height: 100vh;
        /* background: url(/etc/img/backgraund-a.jpg); */
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        background-position: center top;
    }
	
	.text-h1{
	    font-family: 'Tilt Warp', cursive;
	    text-align: center;
	    font-size: 26px;
	    color: #da8ee4;
	    margin-bottom: 1%;
	}
	
	.text-h2{
	    font-family: 'Libre Baskerville', serif;
	    font-size: 14px;
	    color: #3a3a3a;
	    padding: 1% 0px;
	    margin: 0 2%;
	}

	.information-page {
    	border: 5px solid #3a3a3a;
    	width: 80%;
    	margin: 0 auto;
    	height: auto;
    	border-radius: 15px;
	    background-color: #e9e9e9de;
	}

	.div-informations {
    	border: 2px 0 solid #3a3a3a;
    	border-top: 2px solid #3a3a3a;
	}

	.instagram{
		text-align: center;
	}

	.instagram > a {
    	text-align: center;
    	font-size: 18px;
    	color: #F025B4 ;
    	text-decoration: none;
    	transition: .3s all;
	}

	.instagram > a:hover {
    	font-size: 24px;
    	border-top: 2px solid;
    	border-bottom: 4px solid;
    	padding: 2px;
    	color: #710852;
    	transition: 0.3s all;
	}

	.instagram > a:focus {
    	font-size: 18px;
    	color: #3a3a3a;
    	border-top: 1px solid;
    	border-bottom: 2px solid;
    	padding: 0;
    	transition: 0.3s all;
	}

	.p-url {
	    color: #3a3a3a;
	    text-decoration: none;
	    transition: 0.3s all;
	}

	.p-url:hover {
	    color: #bc328a;
	    font-size: 16px;
	    text-decoration: none;
	    transition: 0.3s all;
	}

	.p-url:focus {
        color: #711010;
	    text-decoration: line-through;
	    transition: 0.3s all;
	}
	
	.border-bottom {
        border-bottom: 2px solid;
    }
    
    .photo-img {
        width: 300px;
        height: auto;
        border-radius: 25px;
    }
    
    .information {
        display: inline-flex;
        width: 90%;
        height: auto;
        margin-left: 3%;
        padding-bottom: 3%;
    }
    
    .img-portfolio {
        width: 200px;
        height: auto;
        border: 4px solid #e055c3;
        border-radius: 5px 25px;
        display: inline-block;
    }
    
    .portfolio {
        text-align: center;
    }
    
    /*.relativ{*/
    /*    position: relative;*/
    /*}*/
</style>
<body>

<div class="conteiner">
	<div class="information-page"><p class="text-h1">Divina Viktoriya Leonidivna</p>
	<div class="information">
	<img class="photo-img" src="/etc/img/photo.jpg">
    <div>
        <p class="text-h2">Date of Birth: 15.02.1989</p>
        <p class="text-h2">From: Ukraine</p>
        <p class="text-h2">WhatsApp: +31 638641103</p>
		<p class="text-h2">Language skills: English (A1), Ukrainian (fluent), Russian (fluent)</p>
		<p class="text-h2">Programs: PhotoShop</p>
		<p class="text-h2">My hobbies are drawing and reading</p>
		<p class="text-h2">Personal qualities: punctuality, honesty, accuracy, ability to work in a team</p>

		<p class="text-h2"></p>
    </div>
    
    </div>
    
	<div class="div-informations">
    	<p class="text-h1">Education</p>

    	<p class="text-h2">Druzhkovsky Housing and Communal College (2006 – 2009)</p>
    	<p class="text-h2">,,Fundamentals of architectural design and interior,,</p>
    	<p class="text-h2 border-bottom">Specialty – Junior Specialist Bachelor of Architecture and Urban Planning</p>

    	<p class="text-h2">Additional courses: designer</p>
    </div>


    <div class="div-informations">
    	<p class="text-h1">! First work experience !</p>

    	<p class="text-h2">Toptos — <a class="p-url" href="https://toptos.com.ua/">https://toptos.com.ua/</a></p>

    	<p class="text-h2 instagram"><a class="p-url" href="https://instagram.com/toptos.ua?igshid=YmMyMTA2M2Y=">Instagram</a></p>

    	<p class="text-h2">From 10.05.2018 to 24.02.2022</p>
    	<p class="text-h2">Position: Designer, Manager, Site Administrator</p>
    	<p class="text-h2">Responsibilities: Taking orders, consulting, helping the client in choosing, developing a layout, manufacturing, printing on phone cases, key chains, dishes</p>
    </div>
	

	<div class="div-informations">
    	<p class="text-h1">! Second work experience !</p>

    	<p class="text-h2">Futbolka.ua – <a class="p-url" href="https://futbolka.ua/">https://futbolka.ua/</a></p>

    	<p class="text-h2 instagram"><a class="p-url" href="https://instagram.com/futbolka_ua?igshid=YmMyMTA2M2Y=">Instagram</a></p>

    	<p class="text-h2">Printing on fabric, printing on clothes in an online store in Kyiv and Ukraine</p>
    	<p class="text-h2">From 15.05.2022 to 7.12.2022</p>
    	<p class="text-h2">Position: Designer</p>
    	<p class="text-h2">Responsibilities: designing layouts, printing on hoodies, t-shirts</p>
    </div>
		

    <div class="div-informations">
    	<p class="text-h1">! Other work experience !</p>

    	<p class="text-h2">Nivea – from 2015 to 2017</p>
    	<p class="text-h2">Position: Sales Representative</p>
    	<p class="text-h2 border-bottom">Responsibilities: planogram, supply of goods, stock control, product rotation</p>

    	<p class="text-h2">Beauty saloon</p>
    	<p class="text-h2">Position: administrator</p>
    	<p class="text-h2">Responsibilities: organization of the workflow, hiring, maintaining instagrams, maintaining a page on social networks, attracting customers, advertising, assistance to the manager</p>
    </div>



<p class="text-h1">My Portfolio</p>

<div class="portfolio">
    <div class="stock portfolio-1">
        <img class="img-portfolio" src="/etc/img/AA/1/1.jpg" />
        <img class="img-portfolio" src="/etc/img/AA/1/2.jpg" />
        <img class="img-portfolio" src="/etc/img/AA/1/3.jpg" />
    </div>

    <div class="stock portfolio-2">
        <img class="img-portfolio" src="/etc/img/AA/2/1.jpg" />
        <img class="img-portfolio" src="/etc/img/AA/2/2.jpg" />
        <img class="img-portfolio" src="/etc/img/AA/2/3.jpg" />
    </div>
    
    <div class="stock portfolio-3">
        <img class="img-portfolio" src="/etc/img/AA/3/1.jpg" />
        <img class="img-portfolio" src="/etc/img/AA/3/2.jpg" />
    </div>
    
    <div class="stock portfolio-4">
        <img class="img-portfolio" src="/etc/img/AA/4/1.jpg" />
        <img class="img-portfolio" src="/etc/img/AA/4/2.jpg" />
    </div>
    
    <div class="stock portfolio-5">
        <img class="img-portfolio" src="/etc/img/AA/5/1.jpg" />
        <img class="img-portfolio" src="/etc/img/AA/5/2.jpg" />
    </div>
    
    <div class="stock portfolio-6">
        <img class="img-portfolio" src="/etc/img/AA/6/1.jpg" />
        <img class="img-portfolio" src="/etc/img/AA/6/2.jpg" />
        <img class="img-portfolio" src="/etc/img/AA/6/3.jpg" />
    </div>
    
</div>

	</div>

</div>

</body>
</html>