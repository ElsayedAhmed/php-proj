<div id="tabs-4">			
	
	<form role='form' class='form-horizontal col-md-12 ' action='module/check_product_add.php' method='post' enctype="multipart/form-data">
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
        ?>
		<div class="form-group col-md-12">
			<label class='col-md-2' aria-label='Left Align'>Choose Category</label>
			<select class='form-group-sm col-md-6 btn-info btn-lg' name='cat_id' id="choose_proCat"/>
				<option disabled="true" selected>choose category</option>-->
				<?php	 
					$cats= $cat->allCategory();
					foreach ($cats as $key => $cat_value)
					{	
						echo "<option class='col-md-4 btn-info btn-lg' value='".$cat_value['id']."'>".$cat_value['name']."</option>";
						


					}
					?>
			</select>
			<span id ='caterror' class='col-md-4'><?php echo "<b style='color:red;font-size:14px'>"; if(isset($_SESSION['Pcat'])){echo $_SESSION['Pcat'];unset($_SESSION['Pcat']);}echo "</b>";?></span>
		</div>
		<div class="form-group col-md-12 hidden" id='select_sub'>
		<!-- data from select using ajax-->
		</div>
		<div id="namediv" class="form-group has-feedback col-md-12 ">
            <label for="name" class="col-md-2" aria-label="Left Align">Product Name </label>
            <div class="col-md-6 input-group">
                <input type="text" id="name" name="name" placeholder="product name" class="form-control " />
                <span id ='namerr'><?php echo "<b style='color:red;font-size:14px'>";if(isset($_SESSION['Pname'])){echo $_SESSION['Pname'];unset($_SESSION['Pname']);}echo "</b>";?></span>
                <span id="nameerror" class=" form-control-feedback glyphicon glyphicon-pencil"></span> 

            </div>
        </div>
        <div class="form-group has-feedback col-md-12 ">
			<label  class="col-md-2" aria-label="Left Align"> Product image</label>
			 <div class="col-md-6 input-group btn-file">
				<input placeholder='image' name='image' id='image' type='file' class='btn btn-file'/>
			</div>
			<span id ='imgrror' class='col-md-4'>
			<?php echo "<b style='color:red;font-size:14px'>";
			if(isset($_SESSION['PimgType']))
				{
					echo $_SESSION['PimgType'];
					unset($_SESSION['PimgType']);}if(isset($_SESSION['PimgSize'])){echo $_SESSION['PimgSize'];unset($_SESSION['PimgSize']);}echo "</b>";?></span>
		</div>
        <div class="form-group has-feedback col-md-12 ">
            <label for="price" class="col-md-2" aria-label="Left Align">Product Price </label>
            <div class="col-md-6 input-group">
                <input type="number" id="price" name ="price" placeholder="product price" class="form-control " />
                <span class=" form-control-feedback glyphicon glyphicon-euro"></span> 

            </div>
        </div>
        <div class="form-group has-feedback col-md-12 ">
            <label class="col-md-2" aria-label="Left Align">Product Size </label>
            <div class="col-md-6 input-group">
                <div class="checkbox-inline"> <label><input type="checkbox" name="size[]" value="S"/>S</label></div>
                <div class="checkbox-inline"> <label><input type="checkbox" name="size[]" value="M"/>M</label></div>
                <div class="checkbox-inline"> <label><input type="checkbox" name="size[]" value="L"/>L</label></div>
                <div class="checkbox-inline"> <label><input type="checkbox" name="size[]" value="XL"/>XL</label></div>
                <div class="checkbox-inline"> <label><input type="checkbox" name="size[]" value="XXL"/>XXL</label></div>
                <div class="checkbox-inline"> <label><input type="checkbox" name="size[]" value="XXXL"/>XXXL</label></div>

            </div>
        </div>
        <div class="form-group has-feedback col-md-12 ">
            <label class="col-md-2" aria-label="Left Align">Product Color</label>
            <div class="col-md-6 input-group">
                <div class="checkbox-inline"> <label><input type="checkbox" name="color[]" value="White"/>White</label></div>
                <div class="checkbox-inline"> <label><input type="checkbox" name="color[]" value="Red"/>Red</label></div>
                <div class="checkbox-inline"> <label><input type="checkbox" name="color[]" value="Blue"/>Blue</label></div>
                <div class="checkbox-inline"> <label><input type="checkbox" name="color[]" value="Yellow"/>Yellow</label></div>
                <div class="checkbox-inline"> <label><input type="checkbox" name="color[]" value="Green"/>Green</label></div>
                <div class="checkbox-inline"> <label><input type="checkbox" name="color[]" value="OffWhite"/>OffWhite</label></div>

            </div>
        </div>
        <div class="form-group has-feedback col-md-12 ">
            <label for="count" class="col-md-2" aria-label="Left Align">Product Quantity</label>
            <div class="col-md-6 input-group">
                <input type="number" id="count" name ="quantity" placeholder="product quantity" class="form-control " />
                <span class=" form-control-feedback glyphicon glyphicon-tasks"></span> 

            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-2">
                <input type="submit" class="btn btn-success" value="Add Product" name="ok" id="ok" disabled="true" />
                <input type="reset" class="btn btn-warning" value="reset" />

            </div>
           
        </div>

	</form>	
	
</div><!-- end of tab-->
<!--has-success has-feedback -->

