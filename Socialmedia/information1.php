<!DOCTYPE html>
<html lang="en">
<head>
  <title>Persona</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body background="background.jpg">
  <nav class="navbar" style="background-color: #000080">
  <div class="container-fluid">
   <div class="navbar-header" >
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
     <a class="navbar-brand" href="#" style="color: white"><strong>PERSONA</strong></a>
</div>
<div class="collapse navbar-collapse" id="mainNavBar"> 
<ul class="nav navbar-nav navbar-right">
<li class=""><a href="logout.php" aria-expanded="false" style="color: white" title="logout"><i class="fa fa-2x fa-power-off"></i></a></li>
</div>
</ul>
</div>
</div>
</nav>
  <section class="content" style="padding-left: 275px; background-color: white; padding-top: 20px; padding-right: 50px;margin-right: 90px; margin-left: 90px;">
        <div class="row">
          <div class="col-md-8">
            <div hidden="" id="updSelfSuccess" class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4><i class="icon fa fa-check"></i> Success !</h4>
              You have successfully modified your data.
            </div>
            <div hidden="" id="updSelfError" class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4><i class="icon fa fa-warning"></i> Warning !</h4>
              Error ! Couldn't save your data.
            </div>
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class=""><a href="#contact" data-toggle="tab" aria-expanded="true">Contact Details</a></li>
                <li class=""><a href="#Personality" data-toggle="tab" aria-expanded="false">Personality type</a></li>
                <li class=""><a href="#image" data-toggle="tab" aria-expanded="false">Image</a></li>
                <li class=""><a href="#hobbies" data-toggle="tab" aria-expanded="false">Hobbies and bio</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="contact">
                  <form class="form-horizontal" id="contact" method="post" action="info.php" >
                  <div class="form-group">
                      <label for="Facebook ID" class="col-sm-2 control-label">Facebook ID</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" required name="fbid" id="Facebook ID" placeholder="Facebook ID">
            <p class="help-block">Enter your facebook username</p>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="Instagram ID" class="col-sm-2 control-label">Instagram ID</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" required name="instaid" id="Instagram ID" placeholder="Instagram ID">
            <p class="help-block">Enter your instagram username</p>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="personalphno" class="col-sm-2 control-label">Personal Contact No</label>
                      <div class="col-sm-10">
                        <input type="text" pattern = "[0-9]*[0-9]" class="form-control" name="contactno" id="personalphno" placeholder="Personal Contact No" minlength="10">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="social_user" class="btn btn-primary">SUBMIT</button>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="tab-pane" id="Personality">
                  <form class="form-horizontal" id="Personality"  method="post" action="personal.php">
                    <div class="form-group">
                      <label for="Personality Type" class="col-sm-2 control-label">Personality type</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="ptype" id="ptype" placeholder="Personality type">
            <p class="help-block">Enter your Personality type</p>
                      </div>
                    </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" name="personal_user" class="btn btn-primary">SUBMIT</button>
                      <p>
      Don't know your personality type? Then take a test <a href="https://www.16personalities.com/free-personality-test">here</a></p>
                    </div>
                  </div>
                </form>
              </div>
               <div class="tab-pane" id="image">
                  <form class="form-horizontal" method="post" action="upload.php" enctype="multipart/form-data">
                    <div class="form-group">
                    <label for="Image" class="col-sm-2 control-label">Upload an image</label>
                      <input type="file" name="img"/>
                      <input type="submit" name="submit" value="Upload"/>
                    </div>
                      </form>
                      </div>
              <div class="tab-pane" id="hobbies">
                  <form class="form-horizontal" id="hobbies" method="post" action="hobby.php" >
                    <div class="form-group">
                      <label for="Hobbies" class="col-sm-2 control-label">Tell us your hobbies</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="hob" id="hobbies" placeholder="Hobbies">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="Bio" class="col-sm-2 control-label">Bio</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="bio" id="BIO" placeholder="BIO">
                      </div>
                    </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" name="hob_user" class="btn btn-primary">SUBMIT</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
  </html>