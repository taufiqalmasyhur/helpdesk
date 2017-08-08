<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">

    <title>Helpdesk AP II - Issue</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="custom.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
	
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
			<img src="img/AP2.webp" alt="Helpdesk Angkasa Pura II">
		</a>
        </div>
		
        <div id="navbar" class="navbar-collapse collapse">
		<ul class="nav navbar-nav navbar-left">
			<li><a href="#">Dashboard</a></li>
			<li><a href="#">Issues</a></li>
            <li class="create-issue">
				<a href="#">
					<button type="button" class="btn btn-default btn-xs btn-primary" data-toggle="modal" data-target="#create-issue">
						Create Issue
					</button>
				</a>
			</li>
          </ul>
		  
          <ul class="nav navbar-nav navbar-right">
			<li>
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="person.png" alt="">Dashboard
                    <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href=""> Profile</a></li>
                    <li><a href="">Help</a></li>
                    <li><a href="">Log Out</a></li>
                  </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

			<!-- Modal -->
  <div class="modal fade" id="create-issue" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Create Issue</h4>
        </div>
        <div class="modal-body">
          <form role="form" class="form-horizontal">
            <div class="form-group">
              <label for="issue-type" class="col-sm-2 control-label">Issue type</label>
			  <div class="col-sm-10">
              <input type="text" class="form-control" id="issue-type" placeholder="Enter issue type">
			  </div>
            </div>
			
            <div class="form-group">
              <label for="title" class="col-sm-2 control-label">Title</label>
			  <div class="col-sm-10">
              <input type="text" class="form-control" id="title" placeholder="Enter title">
			  </div>
            </div>
			
			<div class="form-group">
              <label for="desc" class="col-sm-2 control-label">Description</label>
			  <div class="col-sm-10">
			  <textarea class="form-control" rows="6" id="desc" placeholder="Enter description"></textarea>
			  </div>
            </div>
			
			<div class="form-group">
			
              <label for="attachment" class="col-sm-2 control-label">Attachment</label>
			  <div class="col-sm-10">
			  <input type="file" id="exampleInputFile">
			  <p class="help-block">The maximum file upload size is 10 MB</p>
			  </div>
			  <div class="col-sm-2">
			  
			  </div>
            </div>
			
          </form>
        </div>
        <div class="modal-footer">
		<button type="submit" class="btn btn-danger btn-default pull-right" data-dismiss="modal">Cancel</button>&nbsp;
		<button type="submit" class="btn btn-success btn-default pull-right" data-dismiss="modal">Create</button>
        </div>
      </div>
      
    </div>
  </div>
  
    <div class="container">
        <h2 class="page-header">Issues 1,001 - Duplicated Contacts</h2>
    </div>
	
			  
	<div class="container detail-issue">
		<button type="button" class="btn btn-default btn-xs">Edit</button>
		<button type="button" class="btn btn-default btn-xs">Comment</button>
		<button type="button" class="btn btn-default btn-xs">Assign</button>
		
		<div class="btn-group">
			<button type="button" class="btn btn-default btn-xs">Start Progress</button>
			<button type="button" class="btn btn-default btn-xs">Resolve issue</button>
			<button type="button" class="btn btn-default btn-xs">Close issue</button>
		</div>
		
		<div class="detail-issue-in">
			<h4>Details </h4>
			<p>Status: </p>
			<p>Priority: </p>
			<h4>People</h4>
			<h4>Description</h4>
			<h4>Attachment</h4>
			<h4>Comments</h4>
		</div>

	</div>
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
