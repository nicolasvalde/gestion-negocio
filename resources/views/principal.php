<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="components/bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="components/bootstrap/css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="components/angular-bootstrap/ui-bootstrap.css">
<title></title>
</head>
<body>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="navbar-toggler-icon"></span>
				</button> <a class="navbar-brand" href="#">Brand</a>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="navbar-nav">
						<li class="nav-item active">
							 <a class="nav-link" href="#">Link <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							 <a class="nav-link" href="#">Link</a>
						</li>
						<li class="nav-item dropdown">
							 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Dropdown link</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								 <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
								<div class="dropdown-divider">
								</div> <a class="dropdown-item" href="#">Separated link</a>
							</div>
						</li>
					</ul>
					<form class="form-inline">
						<input class="form-control mr-sm-2" type="text">
						<button class="btn btn-primary my-2 my-sm-0" type="submit">
							Search
						</button>
					</form>
					<ul class="navbar-nav ml-md-auto">
						<li class="nav-item active">
							 <a class="nav-link" href="#">Link <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item dropdown">
							 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Dropdown link</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
								 <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
								<div class="dropdown-divider">
								</div> <a class="dropdown-item" href="#">Separated link</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>
					LayoutIt! <small>Interface Builder for Bootstrap</small>
				</h1>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3">
			<div class="page-header">
				<h1>
					LayoutIt! <small>Interface Builder for Bootstrap</small>
				</h1>
			</div>
			<div id="card-42978">
				<div class="card">
					<div class="card-header">
						 <a class="card-link" data-toggle="collapse" data-parent="#card-42978" href="#card-element-318302">Collapsible Group Item #1</a>
					</div>
					<div id="card-element-318302" class="collapse show">
						<div class="card-body">
							Anim pariatur cliche...
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						 <a class="collapsed card-link" data-toggle="collapse" data-parent="#card-42978" href="#card-element-830523">Collapsible Group Item #2</a>
					</div>
					<div id="card-element-830523" class="collapse">
						<div class="card-body">
							Anim pariatur cliche...
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-9">
			<table class="table">
				<thead>
					<tr>
						<th>
							#
						</th>
						<th>
							Product
						</th>
						<th>
							Payment Taken
						</th>
						<th>
							Status
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							1
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							01/04/2012
						</td>
						<td>
							Default
						</td>
					</tr>
					<tr class="table-active">
						<td>
							1
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							01/04/2012
						</td>
						<td>
							Approved
						</td>
					</tr>
					<tr class="table-success">
						<td>
							2
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							02/04/2012
						</td>
						<td>
							Declined
						</td>
					</tr>
					<tr class="table-warning">
						<td>
							3
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							03/04/2012
						</td>
						<td>
							Pending
						</td>
					</tr>
					<tr class="table-danger">
						<td>
							4
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							04/04/2012
						</td>
						<td>
							Call in to confirm
						</td>
					</tr>
				</tbody>
			</table>
			<form role="form">
				<div class="form-group">

					<label for="exampleInputEmail1">
						Email address
					</label>
					<input type="email" class="form-control" id="exampleInputEmail1">
				</div>
				<div class="form-group">

					<label for="exampleInputPassword1">
						Password
					</label>
					<input type="password" class="form-control" id="exampleInputPassword1">
				</div>
				<div class="form-group">

					<label for="exampleInputFile">
						File input
					</label>
					<input type="file" class="form-control-file" id="exampleInputFile">
					<p class="help-block">
						Example block-level help text here.
					</p>
				</div>
				<div class="checkbox">

					<label>
						<input type="checkbox"> Check me out
					</label>
				</div>
				<button type="submit" class="btn btn-primary">
					Submit
				</button>
			</form>
		</div>
	</div>
</div>


    <script type="text/javascript" src="components/angular.js"></script>
    <script type="text/javascript" src="components/angular-resource.js"></script>
    <script type="text/javascript" src="components/angular-route.js"></script>
    <script type="text/javascript" src="components/jquery.js"></script>
    <script type="text/javascript" src="components/bootstrap.js"></script>
    <script type="text/javascript" src="components/ui-bootstrap-tpls-2.5.0.js"></script>
    <script type="text/javascript" src="components/app/app.js"></script>
    <script type="text/javascript" src="components/app/controllers/controller.js"></script>
    <script type="text/javascript" src="components/app/routes/route.js"></script>
    <script type="text/javascript" src="components/app/services/service.js"></script>
</body>
</html>
