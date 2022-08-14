<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<style>
  body {font-family: 'Times New Roman', Times, serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea,input[type=email] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: black;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  width:100%;
  transition:.3s ease;
}

input[type=submit]:hover {
  background-color: slateblue;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  margin-left:10%;
  margin-right:10%;
  margin-bottom:10%;
  box-shadow:3px 3px 6px 3px rgba(0,0,0,0.5);
}
h2{
  text-align:center;
}
</style>
<body>
  <h2>Contact Us</h2>
<div class="container">
  <form action="">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Your name..">

    <label for="email">E-mail</label>
    <input type="email" id="email" name="email" placeholder="Your E-mail..">

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write message.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>