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
<body>
  <section class="content">
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
                <li class=""><a href="#hobbies" data-toggle="tab" aria-expanded="false">Hobbies and bio</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="contact">
                  <form class="form-horizontal" id="contact">
                  <div class="form-group">
                      <label for="Facebook ID" class="col-sm-2 control-label">Facebook ID</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="fbid" id="Facebook ID" placeholder="Facebook ID">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="Instagram ID" class="col-sm-2 control-label">Instagram ID</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="instaid" id="Instagram ID" placeholder="Instagram ID">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="personalphno" class="col-sm-2 control-label">Personal Contact No</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="contactno" id="personalphno" placeholder="Personal Contact No">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="tab-pane" id="Personality">
                  <form class="form-horizontal" id="Personality">
                    <div class="form-group">
                      <label for="Personality Type" class="col-sm-2 control-label">Personality type</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="ptype" id="ptype" placeholder="Personality type">
                      </div>
                    </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-primary">SUBMIT</button>
                      <p>
      Don't know your personality type? Then take a test <a href="https://www.16personalities.com/free-personality-test">here</a></p>
                    </div>
                  </div>
                </form>
              </div>
              <div class="tab-pane" id="hobbies">
                  <form class="form-horizontal" id="hobbies">
                    <div class="form-group">
                      <label for="Hobbies" class="col-sm-2 control-label">Tell us your hobbies</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="hob" id="hobbies" placeholder="Hobbies">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="Bio" class="col-sm-2 control-label"></label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="bio" id="BIO" placeholder="BIO">
                      </div>
                    </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-primary">SUBMIT</button>
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