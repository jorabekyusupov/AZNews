<?
  
  $id = $_POST['id'];
  $category = $db->query("Select * from categories where id = $id");
  if ($category -> num_rows>0) {
      $c_items = $category -> fetch_object();
  }
?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Update Category</h4>
            </div>
            <div  class="card-body">
                <div hidden class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">id</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="id" value="<?= $c_items->id ?>">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">name</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="name" value="<?= $c_items->name ?>">
                    </div>
                </div>
            
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">status</label>
                    <div class="col-sm-12 col-md-7">
                        <select class="form-control selectric" name="status">
                            
                                <option value="true">Publish</option>
                                <option value="false">Not Publish </option>


                      
                        </select>
                    </div>
                </div>
                <div hidden class="form-group row mb-4">
                    <label  class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Date Time Update</label>
                    <div class="col-sm-12 col-md-7">
                        <input  readonly type="text" class="form-control " name="update_time" value="<? echo date("Y-m-d h:i:s"); ?>">
                    </div>
                </div>
             
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                    <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary" type="submit" name="c_update">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>