<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Update Image</title>
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
               <form name="frmUpdate" action="include/queryUpdateImage.php" method="post" enctype="multipart/form-data">
                <table style="width:920px; font-size:20pt">
                    <tr>
                        <td colspan="2" style="padding: 5px">
                            <h2> Updating New Image </h2>
                        </td>
                    </tr>                    
                    <tr>
                        <td style="width: 920px; padding: 5px;">
                            <input type="text" name="txtId" hidden="true"
                            style="width: 650px; font-size:20pt" value=
                            <?php echo $row["id"] ?> >
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 5px">
                            <font size="+4">
                                <?php 
                                    echo $row["ProName"];
                                ?>
                            </font>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 5px">
                            <img name="imgCur" src="
                            <?php 
                                echo $row["ImgUrl"];
                            ?>
                            "/>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 5px">
                            <input type="file" name="imgUpdate"
                            style="width: 650px; font-size: 20pt">
                        </td>
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