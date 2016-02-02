<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
    include 'module/cat.php';
    $cat = new Category ;
    include 'module/sub-cat.php';
    $subObj = new SubCategory;
    session_start();
    if (!isset($_SESSION['user_id']))
    {
        header("location:login.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
<!------------------------------------>
<?php include "head.php"; ?>    
<!------------------------------------>
 
  <style type="text/css" media="screen">
  /*.table-hover > tbody > tr:hover {
  background-color: orange;
}*/
label {
    text-align:left;
    color:#0b0027;
}
  .visible {
    visibility: hidden;
    height:500px;
    }
    #tabs
    {
        min-height:200px;
        overflow:hidden;
        padding:10px 5px;
    }
    .hide {
    display:none;
    }
    .show{
    display: block;
    }
    .form-horizontal  
    {margin-top:10px;}
    
    .edit
    {
        width:200px;
    }
    .edit_cat
    {
        width:120px;height:35px; margin:-10px 0px;
    }
    .edit_cat_id
    {
        width:120px;height:40px; margin:-15px 0px;padding-top:-5px;
    }
    .do_edit
    {
        width:120px;height:40px;position:absoulte;margin-left:130px; margin-top:-35px;
    }
    .do_edit_id
    {
        width:120px;height:40px;position:absoulte;margin-left:160px; margin-top:-45px;
    }
    .close
    {
        display:block;
    }
    .get_all_category
    {
        border:1px solid blue ;
        border-radius:5px;
        margin: 10px 0px 15px 0px;
        padding:5px;
        height:500px;
        background-color:#ccc;
        overflow:scroll;

    }
    .get_all_category table tr td 
    {
        text-align:center;
        color:#000039;

    }
    .get_all_category table tr th
    {
        text-align:center;
        color:#000;
    }
    #sub_cat_lable
    {
        margin: 10px;
    }
    ::-webkit-scrollbar 
    {
    width: 12px;
    }
 
        ::-webkit-scrollbar-track 
        {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
            border-radius: 10px;
        }
         
        ::-webkit-scrollbar-thumb 
        {
            border-radius: 10px;
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
        }   
  </style>

  <script src="module/jsactions.js" type="text/javascript" charset="utf-8" async defer></script>
  
</head>
<body>
<!--header-->
<!------------------------------------>
<?php include "menu.php";?> 
<!------------------------------------>
<!--content-->
<div class="container">
    <div class="account">
        <div class="form-group has-feedback col-md-12 ">
            <h3 style='margin-left:-30px' class="form-group has-feedback col-md-10 ">Controle Panale : edit user</h3>
            <a  class='form-group has-feedback col-md-2 btn btn-success' href='controle.php#tabs-5'>Back to view</a>
        </div>
        <div id="tabs" >
    <div id="tabs-5">			
	   <form role='form' class='form-horizontal col-md-12 ' action='module/check_product_edit.php' method='post' enctype="multipart/form-data">
		 <?php
        if(isset($_SESSION['Psuccess']))
        {
         	echo "<div class='form-group has-feedback col-md-12  has-success'><div class='col-md-10 col-md-offset-1 input-group'>";
        	echo "<span class='form-control-feedback glyphicon glyphicon-plus '></span>";
        	echo "<input style='color:green;font-size:22px;'disabled class='btn btn-lg form-control ' type='text' value='".$_SESSION['Psuccess']."'/>";
            echo "<span class='form-control-feedback glyphicon glyphicon-plus '></span>";
            echo "</div></div>";
            unset($_SESSION['Psuccess']);
        }
        $id=$_GET['id'];
        include 'module/product.php';
        $proObj= new Product();
        $prods= $proObj->get_product($id);
        foreach ($prods as $key => $prod) 
        {
            $_SESSION['product']=$prod;
           //var_dump ($_SESSION['product']);
        ?>
		<div class="form-group col-md-12">
			<label class='col-md-2' aria-label='Left Align'>Choose Category</label>
			<select class='form-group-sm col-md-6 btn-info btn-lg' name='cat_id' id="edit_choose_proCat"/>
				<option disabled="true" selected><?php echo $prod['cat']." -- sub-category --> ".$prod['sub']; ?></option>
				<?php	 
					$cats= $cat->allCategory();
					foreach ($cats as $key => $cat_value)
					{	
						echo "<option class='col-md-4 btn-info btn-lg' value='".$cat_value['id']."'>".$cat_value['name']."</option>";
						


					}
					?>
			</select>
        </div>
        
		<div class="form-group col-md-12 hidden" id='select_sub'>
		<!-- data from select using ajax-->
		</div>
		<div id="edit_namediv" class="form-group has-feedback col-md-12 ">
            <label for="name" class="col-md-2" aria-label="Left Align">Product Name </label>
            <div class="col-md-6 input-group">
                <input type="text" id="edit_name" name="name" placeholder="<?php echo $prod['name']; ?>" class="form-control " />
                <span id ='namerr'><?php echo "<b style='color:red;font-size:14px'>";if(isset($_SESSION['Pname'])){echo $_SESSION['Pname'];unset($_SESSION['Pname']);}echo "</b>";?></span>
                <span id="edit_nameerror" class=" form-control-feedback glyphicon glyphicon-pencil"></span> 

            </div>
        </div>
        <div class="form-group has-feedback col-md-6 ">
			<label  class="col-md-5" aria-label="Left Align"> Product image</label>
			 <div class="col-md-3 input-group btn-file">
				<input placeholder='image' name='image' id='image' type='file' class='btn btn-file'/>
            </div>

			<span id ='imgrror' class='col-md-4'>
			<?php echo "<b style='color:red;font-size:14px'>";
			if(isset($_SESSION['PimgType']))
				{
					echo $_SESSION['PimgType'];
					unset($_SESSION['PimgType']);}if(isset($_SESSION['PimgSize'])){echo $_SESSION['PimgSize'];unset($_SESSION['PimgSize']);}echo "</b>";?></span>
		</div>
        <div class="form-group has-feedback col-md-3 ">
           <img src='<?php echo $prod['image']; ?>' class='img-responsive img-rounded' width='100px' height='80px' />
        </div>
        <div class="form-group has-feedback col-md-12 ">
            <label for="price" class="col-md-2" aria-label="Left Align">Product Price </label>
            <div class="col-md-6 input-group">
                <input type="number" id="edit_price" name ="price" placeholder="<?php echo $prod['price']; ?>" class="form-control " />
                <span class=" form-control-feedback glyphicon glyphicon-euro"></span> 

            </div>
        </div>
        <div class="form-group has-feedback col-md-8 ">
            <label class="col-md-3" aria-label="Left Align">Product Size </label>
            <div class="col-md-8 input-group">
                <div class="checkbox-inline"> <label><input type="checkbox" name="size[]" value="S"/>S</label></div>
                <div class="checkbox-inline"> <label><input type="checkbox" name="size[]" value="M"/>M</label></div>
                <div class="checkbox-inline"> <label><input type="checkbox" name="size[]" value="L"/>L</label></div>
                <div class="checkbox-inline"> <label><input type="checkbox" name="size[]" value="XL"/>XL</label></div>
                <div class="checkbox-inline"> <label><input type="checkbox" name="size[]" value="XXL"/>XXL</label></div>
                <div class="checkbox-inline"> <label><input type="checkbox" name="size[]" value="XXXL"/>XXXL</label></div>

            </div>
            

        </div>
        <div class="form-group has-feedback col-md-4 ">
                <p style="color:#0f0083">prevois choosen : <?php echo $prod['size']; ?></p>
        </div>
        <div class="form-group has-feedback col-md-8 ">
            <label class="col-md-3" aria-label="Left Align">Product Color</label>
            <div class="col-md-8 input-group">
                <div class="checkbox-inline"> <label><input type="checkbox" name="color[]" value="White"/>White</label></div>
                <div class="checkbox-inline"> <label><input type="checkbox" name="color[]" value="Red"/>Red</label></div>
                <div class="checkbox-inline"> <label><input type="checkbox" name="color[]" value="Blue"/>Blue</label></div>
                <div class="checkbox-inline"> <label><input type="checkbox" name="color[]" value="Yellow"/>Yellow</label></div>
                <div class="checkbox-inline"> <label><input type="checkbox" name="color[]" value="Green"/>Green</label></div>
                <div class="checkbox-inline"> <label><input type="checkbox" name="color[]" value="OffWhite"/>OffWhite</label></div>

            </div>
        </div>
        <div class="form-group has-feedback col-md-4 ">
                <p style="color:#0f0083;margin-top:5px">prevois choosen : <?php echo $prod['color']; ?></p>
        </div>
        <div class="form-group has-feedback col-md-12 ">
            <label for="count" class="col-md-2" aria-label="Left Align">Product Quantity</label>
            <div class="col-md-6 input-group">
                <input type="number" id="edit_count" name ="quantity" placeholder="<?php echo $prod['quantity']; ?>" class="form-control " />
                <span class=" form-control-feedback glyphicon glyphicon-tasks"></span> 

            </div>
        </div>
        <div id="edit_staus" class="form-group has-feedback col-md-12 ">
            <label for="name" class="col-md-2" aria-label="Left Align">Product Status </label>
            <div class="col-md-6 input-group">
                <?php
                    if($prod['status']==1)
                    {?>
                    <div class="radio-inline">
                        <label>
                            <input type="radio" name="status" value="1" checked  /> active
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input type="radio" name="status" value="0" /> Deactive
                        </label>
                    </div>
                <?php
                    }
                    else
                    {?>
                    <div class="radio-inline">
                        <label>
                            <input type="radio" name="status" value="1"  /> active
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input type="radio" name="status" value="0" checked/> Deactive
                        </label>
                    </div>
                 <?php   }
                ?>

            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-2">
                <input type="submit" class="btn btn-success" value="Update Product" name="ok" id="edit_ok"/>
                <input type="reset" class="btn btn-warning" value="reset" />

            </div>
           
        </div>

	</form>	
	<?php }//end of for each?>
</div><!-- end of tabs div -->
    </div><!-- end of account div -->
</div><!-- end of container div -->

<!--//content-->
<!------------------------------------>
<?php include('footer.php');?>
<!------------------------------------> 
</body>
</html>
            