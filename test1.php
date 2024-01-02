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
        
        <table >
            <tr>
                <td colspan="2" style="width: 1280px; vertical-align: top; border: 1px solid; border-collapse: collapse">
                    <?php 
                        include('include/ListProAdminquery.php');
                    ?>
            
                </td>
            </tr>
        </table>

        </div>
    </div>
</body>
</html>