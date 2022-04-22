<style>
    body
    {
    background-image:linear-gradient(grey,white);   
    background-repeat: no-repeat ;
    height: 100vh;
    background-size: 100% 1000px;
    background-image: 100%;

}
h1{
    text-align: center;
    margin-top: 0;
    padding: 20px;
    color: white;
    font-weight: bold;
}
.register{
    color: navy;
    margin-top:20px;
    font-family: "Times New Roman", Times, serif;
    font-size: 25px;
}
.reg{
    background-color: lightgray;
    border-radius: 10px;
    border: 2px solid black;
    padding: 15px;
}
.required:after {
    content:" *";
    color: red;

}
.form-control{
    padding: 30px;
    font-family: "Times New Roman", Times, serif;
    font-size: 20px;

}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Project Submission Form</title>
</head>
<body>

    <div class="container-fluid">
        <div class="row register">
            <h1><b>Project Submission Form</h1>
            <div class="col-sm-3"></div>
            <div class="col-sm-6 reg">
                <form class="form-horizontal hr" action="Submit" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="form-group">
                    <label class="control-label col-sm-4 required"  >Name</label>
                    <div class="col-sm-8"><input type="text" placeholder="Full Name" class="form-control" name="name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4 required" >Enrollment No</label>
                    <div class="col-sm-8"><input type="text"placeholder="Enroll number" class="form-control" name="enroll" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4 required"  >Email</label>
                    <div class="col-sm-8"><input type="Email"placeholder="Email" class="form-control" name="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4 required" >Project Title</label>
                    <div class="col-sm-8"><input type="text" class="form-control" name="title" placeholder="Enter project title" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4"  >Brief Description About Project</label>
                    <div class="col-sm-8"><textarea  class="form-control" name="Description" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4 required" >Project Ppt(pptx*)</label>
                    <div class="col-sm-8"><input type="file" name="ppt"  class="form-control" required>
                    @if(session('show'))
                    <h6 class="alert alert-warning" >{{session('show')}}</h6>
                    @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4  required" >Project Report(docx*)</label>
                    <div class="col-sm-8"><input type="file" name="word"  class="form-control" required>
                    @if(session('view'))
                    <h6 class="alert alert-warning" >{{session('view')}}</h6>
                    @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4 required" > Github URL</label>
                    <div class="col-sm-8"><input type="text" class="form-control" name="url" placeholder="Enter Github URL" required>
                    </div>
                </div>    
                <div class="form-group">
                <div class="col-sm-offset-4 col-sm-8"><button type="submit" name="Submit" class="btn btn-success btn-lg">Submit</button>
                    @if(session('status'))
                    <h6 class="alert alert-success" >{{session('status')}}</h6>
                    @endif
                </div>
                
                
                 </form>
                 <script>
	  if(window.history.replaceState){
		  window.history.replaceState(null,null,window.location.href);
	  }
	  </script>
</div>
</div>
</div>
</body>
</html>