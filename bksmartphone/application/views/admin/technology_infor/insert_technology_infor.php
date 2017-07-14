</br>
</br>
<div class="container">
<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-11">
	<?php if($this->session->flashdata('error_image')): ?>

	<?php echo $this->session->flashdata('error_image') ?>
<?php endif; ?>
		<h4>Nhập xử liệu vào công nghệ</h4>
			<form class="form-horizontal"  method="post" action="http://localhost/bksmartphone/index.php/admin/technology_infor/technology_infor/insert" enctype="multipart/form-data">
	 			<p> Tên công nghệ</p>
			    <div class="form-group">
			    	
			        <div class="col-sm-8">  
			          <p><?php echo form_error('name'); ?></p>
			            <input type="text" name="name" value="<?php echo set_value('name'); ?>" class="form-control" id="inputEmail3" placeholder="Tên công nghệ"/>
			        </div>
			    </div>
			    <p>Hình ảnh</p>
			    <div class="form-group">                  
                    <div class="col-sm-4"><input type="file" name="image" value="<?= set_value('image') ?>" /></div>
                </div>
                <?php if (isset($errors)) { ?>
                    <div class="row"> 
                        <div class="col-sm-4"> <?php echo $error ?></div>
                    </div> 
                <?php } ?> 
                <p>Mô tả</p>
			    <div class="form-group">
			    	
			        <div class="col-sm-8">  
			          <p><?php echo form_error('description'); ?></p>
			            <input type="text" name="description" value="<?php echo set_value('description'); ?>" class="form-control" id="inputEmail3" placeholder="mô tả"/>
			        </div>
			    </div>
			    <p>Nội dung chính</p>
			    <div class="form-group">
			    	
			        <div class="col-sm-8">  
			          <p><?php echo form_error('main_des'); ?></p>
			           <textarea type="text" name="main_des" class="form-control" id="main_des" placeholder="Nội dung chính"><?php echo set_value('main_des'); ?>
			        </textarea>
			           
			        </div>
			    </div>
			    <p>ID thể loại công nghệ</p>
			    <div class="form-group">
			    	<div class="col-sm-8">
			    		
			    		<p><?php echo form_error('id_tech_category'); ?></p>
			        	<select class="selectpicker" name="id_tech_category" id="selecname">
							
							<?php foreach ($tech_cate_id as $row) { ?>
							<option value=" <?php echo $row->id ?>"><?php echo $row->name ?></option>
							<?php } ?>
						</select>
						
			        </div>
			    </div>
			    <p>ID điện thoại</p>
			    <div class="form-group">
			    	<div class="col-sm-8">
			    		
			    		<p><?php echo form_error('id_phone'); ?></p>
			        	<select class="selectpicker" name="id_phone" id="selecname">
							
							<?php foreach ($phone_id as $row) { ?>
							<option value=" <?php echo $row->id ?>"><?php echo $row->name ?></option>
							<?php } ?>
						</select>
						
			        </div>
			    </div>

			    <div  class="form-group">
      				<div class="col-sm-8"> 
          				<button type="submit" name="submit" id="submit" class="btn btn-warning" style="width:100px ;height:30px;">Submit</button>
      				</div>
    			</div>
			    
	
			</form>
			<p> <?php echo $error ?></p>
	</div>
</div>
</div>
<script type="text/javascript">
 		CKEDITOR.replace( 'main_des' );
</script>