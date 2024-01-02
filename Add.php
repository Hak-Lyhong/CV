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
    margin-left: 220px;
    margin-top: 50px;
    width: 1000px;
    background-color:#f9f9f9;
    height: 1000px;
    color:black;
}

    </style>
    <div class="nav">
        <p>Welcome to</p><br>
        <p>Admin</p>
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="">Add New</a></li>
            <li><a href="test1.php">Update</a></li>
            <li><a href="#">Logout</a></li>
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
            
        <table style="width:1280px">
       
        <tr>
            <td style="width:920px; vertical-align: top">
                <form name="frmAddNew" action="AddDetail.php" method="post" enctype="multipart/form-data">
                <table style="width:920px; font-size:20pt">
                    <tr>
                        <td colspan="2" style="padding: 5px">
                            <h2> Add New Information </h2>
                        </td>
                    </tr>                    
                    
                    <tr>
                        <td style="padding: 5px">Product Name :</td>
                        <td style="padding: 5px"><input type="text" name="txtProName" style="width:650px;  font-size:20pt"></td>
                    </tr>
                    <tr>
                        <td style="padding: 5px">Product Type :</td>
                        <td style="padding: 5px">
          
          
            
              
              <?php 
						include('include/query.php');
						if ($rtt->num_rows > 0)
						{
							echo '<select name="CatType" style="width: 150px">';
							while($roft = $rtt->fetch_assoc())
							echo ('"<option
						value="' . $roft["CatID"].'">'.$roft["Category"].'</option>"');
						echo '</select>';
						}
						else 
						echo "0 results";
					?>

                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 5px">Description :</td>
                        <td style="padding: 5px"><textarea name="des" rows="8" style="width:650px;  font-size:20pt">
                            </textarea></td>
                    </tr>
                    <tr>
                        <td style="padding: 5px">Destination Link :</td>
                        <td style="padding: 5px"><input type="text" name="txtDesLink" style="width:650px;  font-size:20pt"></td>
                    </tr>
                    <tr>
                        <td style="padding: 5px">Choose Image :</td>
                        <td style="padding: 5px"><input type="file" name="fimg" style="font-size:20pt"></td>
                    </tr>
                    <tr>
                        <td style="padding: 5px"></td>
                        <td style="padding: 5px">
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="Submit" name="cmdSubmint" value="Submit">
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="Reset" name="cmdReset" value="Cancel"> 
                        </td>
                    </tr>
                </table>

        </div>
    </div>
</body>
</html>