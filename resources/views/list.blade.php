<style>
body{
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
    <title>Project submitted list</title>
  </head>
   <body>
    <div class="table-responsive">
     <table class ="reg register"align="center" border="1px" style="width: 1000px; line-height 500px;">
      <tr>
        <th colspan="9"><h1>List of Project submitted</h1></th>
      </tr>
       <tr>
        <th> #</th>
        <th>Name</th>
        <th>Enroll No</th>
        <th>Email</th>
        <th>Title</th>
        <th>Project Description</th>
        <th>PPT</th>
        <th>Word</th>
        <th>URL</th>
      </tr>
      @foreach($users as $user)
      <tr>
          <td>{{$user['No']}}</td>
          <td>{{$user['Name']}}</td>
          <td>{{$user['Enroll_no']}}</td>
          <td>{{$user['Email']}}</td>
          <td>{{$user['Title']}}</td>
          <td>{{$user['Description']}}</td>
          <td><a href="{{ asset('file/'.$user->ppt) }} ">Project PPT</td>
          <td><a href="{{ asset('file/'.$user->word) }} ">Project Report </td>
          <td><a href="{{$user['url']}}">Github URL</td>
      </tr>
      @endforeach
      </table>
    </div>
  </body>
 </html>