
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
	.navbar{
	margin-top:0;
	margin-bottom:0;
	background:white
	}
	.form-inline{
	  padding-top: 10px;
	  background:#c4c2c2;
	  padding-bottom: 10px;
	  
	}
	body{
	font:normal 100% Helvetica,Arial,Sans-frais;
	}
	}
	</style>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand"style="font-size:15px;color:green">Dreaming </br> Get Away</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li ><a href="#" style="font-size:16px;color:red">ANNONCER</a></li>
      <li><a href="#">PLANIFIER UN VOYAGE</a></li>
	  <li><a href="#">MES VOYAGES</a></li>
	  <li><a href="#">CONNEXION</a></li>
    </ul>
  </div>
</nav>
   <nav class="navbar navbar-default">
    <form class="text-center" action="random.php" method="POST">
    <div class="form-inline ">
        <div class="form-group">
            <input type="text" name="title" value="Essayer Montreal" class="form-control">
        </div>
        <div class="form-group">
            <select class="form-control" name="style_id">
              <option value="">style</option>
              <option value="">classic</option>
              <option value="">modern</option>
            </select>
        </div>
		    <div class="form-group">
            <select class="form-control" name="category_id">
              <option value="">langue</option>
			         <option value="french">French</option>
              <option value="english">English</option> 
            </select>
        </div>
        

        <div class="form-group">
          <input type="text" name="total" placeholder="Total" class="form-control">
          <input type="text" name="baseline" placeholder="Baseline" class="form-control">
            <input type="date" name="start_date" placeholder="Arrivee" class="form-control">
			     <input type="date" name="end_date" placeholder="Depart" class="form-control">
        </div>

        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-success btn">RECHERCHER</button>
        </div>
        <div class="form-group">
            <a href="#">PLUS DE FILTERS+</a>
        </div>
     </form>

</nav>


<div style="position:relative;width:100%; height:500px;">
	
	<img src="https://techcrunch.com/wp-content/uploads/2017/05/gettyimages-580833893.jpg?w=1390&crop=1"style="position:static;width:100%; height:500px;"/>
	<span style="position:absolute;top:25%;left:15%;right:15%;bottom:25%;text-align:center;color:white;font-size:36px">DECOUVRIR MONDE PAR LES VOYAGES!
    </br><button type="submit" class="btn btn-success btn">INSCRIVEZ-VOUS!</button>
  </span>
</div>

	<div class="container-fluid" >
  <div class="row">
  <div class="col-lg-6 col-md-12 col-sm-12" style="padding:0;"><img src="https://techcrunch.com/wp-content/uploads/2017/05/gettyimages-580833893.jpg?w=1390&crop=1"style="width:100%"/></div>
  
   <div class="col-lg-1 col-md-2 col-sm-2" >
   </div>
  <div class="col-lg-4 col-md-8 col-sm-8" >
  </br></br>
    <h1 style="color:purple;display:inline;"><strong>GAGNEZ UN REVENU ADDTIONAL</h1></strong>
    <p >Consider now provided laughter boy landlord dashwood. Often voice and the spoke. No shewing fertile village equally prepare up females as an. That do an case an what plan hour of paid. Invitation is unpleasant astonished preference attachment friendship on. Did sentiments increasing particular nay.</p>
    <br>
    <h1 style="color:orange;display:inline;"><strong>FAITES DU VOYAGE UNE EXPERIENCE</h1></strong>
    <p >Consider now provided laughter boy landlord dashwood. Often voice and the spoke. No shewing fertile village equally prepare up females as an. That do an case an what plan hour of paid. Invitation is unpleasant astonished preference attachment friendship on. Did sentiments increasing particular nay. </p>
  </div>
 <div class="col-lg-1 col-md-2 col-sm-2" >
   </div>
 </div>
  </div>
<div class="container-fluid" >
  <div class="row">
   <div class="col-lg-1 col-md-2 col-sm-2" >
   </div>
  <div class="col-lg-4 col-md-8 col-sm-8">
  </br></br>
<h1 style="color:green;display:inline;"><strong>PARTAGEZ</br> VOTRE VILLE</h1></strong>
    <p>Consider now provided laughter boy landlord dashwood. Often voice and the spoke. No shewing fertile village equally prepare up females as an. That do an case an what plan hour of paid. Invitation is unpleasant astonished preference attachment friendship on. Did sentiments increasing particular nay.</p>
    <br>
    <h1 style="color:yellow;display:inline;"><strong>HUMANISEZ</br> VOTRE VILLE</h1></strong>
    <p >Consider now provided laughter boy landlord dashwood. Often voice and the spoke. No shewing fertile village equally prepare up females as an. That do an case an what plan hour of paid.   </p>

  </div>
  <div class="col-lg-1 col-md-2 col-sm-2" >
   </div> 

  <div class="col-lg-6 col-md-12 col-sm-12" style="padding:0;"><img src="https://techcrunch.com/wp-content/uploads/2017/05/gettyimages-580833893.jpg?w=1390&crop=1"style="width:100%"/></div>
  </div>
 </div>
 
 <nav class="navbar navbar-default">
    <form>
    <div class="form-inline " style="background-color:#eae309; text-align:center; font-size:24px;">
	<label style="color:green;" >Inscrivez-vous</label><lable> pour recevoir les nouveaux hebergements</label>
        <div class="form-group ">
            <input type="text" name="title" value="Votre adress courriel" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success btn">RECHERCHER</button>
        </div>
   
     </form>

</nav>

<div class="container-fluid" style="padding-top: 5%;padding-bottom: 5%;width:100%;background:#485191; color:white">
	<div class="row">
	  <div class="col-lg-6 col-md-6 col-sm-6 text-center">Partagez vos voyages avec nous</div>
	  <div class="col-lg-3 col-md-3 col-sm-3">Dreaming Get Away</div>
	  <div class="col-lg-3 col-md-3 col-sm-3">Nous joindre</div>
	</div>
	</br>
	<div class="row">
	  <div class="col-lg-6 col-md-6 col-sm-6 text-center" style="color:green;"><i class="fa fa-facebook-official" style="font-size:24px"> </i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-twitter-square" style="font-size:24px"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-linkedin-square" style="font-size:24px"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-pinterest" style="font-size:24px"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-google-plus-official" style="font-size:24px"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-instagram" style="font-size:24px"></i></div>
	  <div class="col-lg-3 col-md-3 col-sm-3">A propos</div>
	  <div class="col-lg-3 col-md-3 col-sm-3"><i class="	fa fa-phone" style="font-size:20px;color:green"> </i>&nbsp; Sans-frais </br>1 800 555-2834</div>
	</div>
	<div class="row">
	  <div class="col-lg-6 col-md-6 col-sm-6"></div>
	  <div class="col-lg-3 col-md-3 col-sm-3">Louer un hebergement</div>
	  <div class="col-lg-3 col-md-3 col-sm-3">   </div>
	</div>
	<div class="row">
	  <div class="col-lg-6 col-md-6 col-sm-6"></div>
	  <div class="col-lg-3 col-md-3 col-sm-3">Voyages</div>
	  <div class="col-lg-3 col-md-3 col-sm-3 fa fa-envelope-o" style="font-size:16px;color:green"> dreamingetaway.com</div>
	</div>
	<div class="row">
	  <div class="col-lg-6 col-md-6 col-sm-6"></div>
	  <div class="col-lg-3 col-md-3 col-sm-3">Connexion</div>
	  <div class="col-lg-3 col-md-3 col-sm-3"><i class="	fa fa-map-marker" style="font-size:20px;color:green"> </i>&nbsp;  2002 Blvd st-joseph,Montreal</div>
	</div>
	<div class="row">
	  <div class="col-lg-6 col-md-6 col-sm-6"></div>
	  <div class="col-lg-3 col-md-3 col-sm-3">Inscription</div>
	  <div class="col-lg-3 col-md-3 col-sm-3"></div>
	</div>

</div>
<div class="container-fluid " style="width:100%;padding-left:10%;padding-top:0;padding-bottom:0;background-color:#4c3a9e;color:white;">
  <p>Tous droits reservee 2018 Decouvrir le mond par les voyages</p>
</div>

</body>
</html>