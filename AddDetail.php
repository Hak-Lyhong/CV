<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/2af6c5e46c.js" crossorigin="anonymous"></script>
</head>
<body>
    <style>
        body {
            margin: 0;
        }
        .main {
            display: grid;
        }
        .nav {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            height: 560px;
            position: fixed;
            margin:0;
            float: left;
            width: 200px;
            background-color: #f3f3f3;
        }
        .nav li {
            list-style: none;
        }
        .nav li:hover {
            color:white;
            background-color: purple;
        }
        #upper {
            padding-bottom: 10px;
            background-color: #fbfbfb;
            margin-left: 200px;
            position: fixed;
            display: flex;
        }
        #date {
            margin-top: 10px;
            font-family:sans-serif;
            padding: 6px 60px;
        }

input[type=text] {
  padding: 6px;
  font-size: 17px;
  border: none;
}
input[type=textarea]{
    border:none;
}
.search-container {
    
    margin-top: 10px;
    margin-left: 250px;
    display: flex;
}
.search-container button {
    
  float: right;
  padding: 6px 10px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.search-container button:hover {
  background: #ccc;
}

#mid {
    box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;
    margin-left: 220px;
    margin-top: 50px;
    width: 1000px;
    
    height: 1000px;
    color:black;
}

    </style>
    <script>
        function myFunction() {
  if (confirm("Are you want log out ?") == true) {
    location.replace("home.php",);
  } else {
 
  }
        }
    </script>
    <div class="nav">
        <p>Welcome to</p><br>
        <p>Admin</p>
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="Add.php">Add New</a></li>
            <li><a href="test1.php">Update</a></li>
            <li><a href="#" onclick="myFunction()">Logout</a></li>
        </ul>
    </div>
    <div class="main">
        <div id="upper">
            <div id="date">
                <?php echo date("F d, Y"); ?>
            </div>
            <div class="search-container">
                <form action="/action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
                <button type="text"><i class="fa-solid fa-bell"></i></button>
                
                <button type="text"><i class="fa-solid fa-user-shield"></i></button>
                <input type="textarea">
                
            </div>
        </div>
        <div id="mid">
        
        <h2> Add New Information </h2>
         
         <?php 
          $img = $_FILES["fimg"]["name"];
          $rand = rand();
          $imgU = $rand.$img;
          $path  = "images/".$imgU;
          move_uploaded_file($_FILES['fimg']['tmp_name'],$path);
 
 
         $indate = date('Y/m/d H:m:s');
 
         include('include/dbcon.php');
 
         $queryAdd = 'insert into tblData(ProName, CatID, Description, DesUrl, ImgUrl, DateIn) values(
             "'.$_POST["txtProName"].'","'.$_POST["CatType"].'", "'.$_POST["des"].'", "'.$_POST["txtDesLink"].'", "'.$path.'", "'.$indate.'")';
         //check
         if(mysqli_query($dbcon, $queryAdd))
         {
             echo '"<h1>" The Post Summary:  "</h1>"';
             echo 'New record created successfully';
 
             $qTop = 'SELECT * from tblData ORDER BY DateIn DESC LIMIT 1';
             $rTop = $dbcon->query($qTop);
             if($rTop->num_rows > 0)
             while($row = $rTop->fetch_assoc()){
                 echo '<br> Posted ID: '.$row["id"];
                 echo '<br> Posted Name: '.$row["ProName"];
                 echo '<br> Posted Category: '.$row["CatID"];
                 echo '<br> Posted Description: '.$row["Description"];
                 echo '<br> Posted URL: '.$row["DesUrl"];
                 echo '<br> Posted Image: <br> <img src="'.$row["ImgUrl"].'"/><br>';
             }
             else echo "0 results";
         }
         else 
             echo "Error: ".$queryAdd."<br>". mysqli_error($dbcon);
             $dbcon-> close();
         ?>
         <br><br>
         <a href="Add.php">Add More</a>
         <?php 
         echo $path;
         ?>

        </div>
    </div>
</body>
</html>