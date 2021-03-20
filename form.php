<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  action="thanks.php"  method="post">
        <div>
            <label  for="lastname">Lastname :</label>
            <input  type="text"  id="lastname"  name="lastname">
        </div>
        <div>
            <label  for="firstname">Firstname :</label>
            <input  type="text"  id="firstname"  name="firstname">
        </div>
        <div>
            <label  for="phone">Phone :</label>
            <input  type="text"  id="phone"  name="phone">
        </div>
        <div>
            <label  for="email">email :</label>
            <input  type="email"  id="email"  name="email">
        </div>
        <label for="subject">Subject :</label>
        <select name="subject" id="subject">
            <option value="">Choose an subject</option>
            <option value="technical">Technical problem</option>
            <option value="alert">Important alert</option>
            <option value="amelioration">Amelioration</option>
        </select>
        <div>
            <label  for="message">Message :</label>
            <textarea  id="message"  name="message"></textarea>
        </div>
        <div  class="button">
            <button  type="submit">Send</button>
        </div>
    </form>
</body>
</html>