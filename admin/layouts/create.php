<!-- 
<div class="card">
    <div class="card-header">
        <h4>Select</h4>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label> Title </label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label> Title Second</label>
            <input type="text" class="form-control" name="title2">
        </div>
        <div class="form-group">
            <label>Text</label>
            <textarea class="form-control" name="bodytext"></textarea>
        </div>
        <div class="form-group">
            <label>File</label>
            <input type="file" class="form-control" name="image">
        </div>
        <div class="form-group">
            <label class="form-label">Categories</label>
            <div class="selectgroup selectgroup-pills">
                
                    
                    <label class="selectgroup-item">
                        <input type="checkbox" name="category" value="" class="selectgroup-input" checked>
                        <span class="selectgroup-button"></span>
                    </label>
           
            
                </div>
            </div>
        <div class="form-group ">
            <label>Date Time Create</label>
            <input readonly type="text" class="form-control " name="create_time" value="<? echo date("Y-m-d h:i:s"); ?>">
            
        </div>
        <div class="form-group ">
            <label>Date Time Update</label>
            <input readonly type="text" class="form-control " name="update_time" value="<? echo date("Y-m-d h:i:s"); ?>">
            
        </div>
        <div class="form-group">
            <button class="btn btn-danger" type="reset">Clean</button>
            <button class="btn btn-primary" type="submit" name="newscreate">Submit</button>
        </div>
    </div>
</div> -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Write Your Post</h4>
            </div>
            <div class="card-body">
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="title">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title Second</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="title2">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                    <div class="col-sm-12 col-md-7">
                        <select class="form-control selectric" name="category_id">
                            <? foreach ($rows as $item) { ?>
                                <option value="<?= $item->id ?>"><?= $item->name ?></option>


                            <? } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                    <div class="col-sm-12 col-md-7">
                        <textarea class="summernote-simple" name="bodytext"></textarea>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
                    <div class="col-sm-12 col-md-7">
                        <div id="image-preview" class="image-preview">
                            <label for="image-upload" id="image-label">Choose File</label>
                            <input type="file" name="image" id="image-upload" />
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                    <div class="col-sm-12 col-md-7">
                        <select class="form-control selectric" name="status">
                            <option value="true">Publish</option>
                            <option value="false">Pending</option>
                        </select>
                    </div>
                </div>
               
                <div hidden class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Date Time Create</label>
                    <div class="col-sm-12 col-md-7">
                        <input readonly type="text" class="form-control " name="hour" value="<? echo date("h:i"); ?>">
                    </div>
                </div>
                <div hidden class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Date Time Create</label>
                    <div class="col-sm-12 col-md-7">
                        <input readonly type="text" class="form-control " name="create_time" value="<? echo date("Y-m-d h:i:s"); ?>">
                    </div>
                </div>
                <div  hidden class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Date Time Update</label>
                    <div class="col-sm-12 col-md-7">
                        <input readonly type="text" class="form-control " name="update_time" value="<? echo date("Y-m-d h:i:s"); ?>">
                    </div>
                </div>


                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                    <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary" type="submit" name="newscreate">Create Post</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>