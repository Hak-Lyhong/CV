<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Homepage</title>
<?php
        include('include/dbcon.php');
        $sfId = $_GET["fdId"];
        $qwAll = 'SELECT * FROM tblData WHERE id='.$sfId;
        $rwAll = $dbcon->query($qwAll);
        $row = $rwAll->fetch_assoc();
    ?>
</head>
<style>
	
	#header {
		display: flex;
		justify-content: space-around;
		
	}
	#content{
		width:100%;
		display: flex;

	}
	#main{
		padding: 15px;
		width: 65%;
		background-color:lightsteelblue;
	}
	#left {
		width: 15%;
		background-color:lightblue;
	}
	#right_main{
		text-align: center;
		text-decoration: underline;
		font-size: medium;
		width: 20%;
		background-color:linen;
	}
	#interest_photo img{
		vertical-align: middle;
		padding: 10px;
		display:grid;
		width:200px;

	}
	
	</style>
<body>
	<div id="header">
		<?php include('include/header.php'); ?>
	</div>

	<div id="content">	
    <center>
    <table style="width:1280px">
       
        <tr>
            <td colspan="2" style="width:1200px; vertical-align: top">
               <form name="frmUpdate" action="include/queryUpdatePro.php" method="post" enctype="multipart/form-data">
                <table style="width:920px; font-size:20pt">
                    <tr>
                        <td colspan="2" style="padding: 5px">
                            <h2> Updating New Information </h2>
                        </td>
                    </tr>                    
                    <tr>
                        <td style="width:220px;padding: 5px">
                        <td style="width:700px;padding: 5px"><input type="text" name="txtId" hidden="true"  style="width:650px;  font-size:20pt" value=<?php echo $row["id"]; ?> ></td>
                    </tr>
                    <tr>
                        <td style="width:220px;padding: 5px">Product Name :</td>
                        <td style="width:700px;padding: 5px"><input type="text" name="txtProName" value=<?php echo $row["ProName"]; ?> style="width:650px;  font-size:20pt"></td>
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
                                echo ('"<option value="'.$roft["CatID"].'">'.$roft["Category"].'</option>"');
                                echo '</select>';
                            }
                            else 
                                echo "0 results";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 5px">Description :</td>
                        <td style="padding: 5px"><textarea rows="8" name="des" style="width:650px;  font-size:20pt"> <?php echo $row["Description"]; ?> 
                            </textarea></td>
                    </tr>
                    <tr>
                        <td style="padding: 5px">Destination Link :</td>
                        <td style="padding: 5px"><input type="text" name="txtDesLink" value=<?php echo $row["DesUrl"]; ?> style="width:650px;  font-size:20pt"></td>
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
                </form>
            </td>
        </tr>
    </table>
</center>
	</div>
	<div id="footer" style="height:80px;">
		<?php include('include/footer.php');?>
	</div>	
</body>
</html>