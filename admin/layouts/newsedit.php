
<? $bodytext = $item->bodytext?>
<? $img = $item->img?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Write Your Post</h4>
            </div>
            <div class="card-body">
                <div hidden class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ID</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="id" value="<?= $item->id ?>">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="title" value="<?= $item->title ?>">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title Second</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="title2" value="<?= $item->title2?>">
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
                        <textarea class="summernote-simple" name="bodytext" ><?= $bodytext ?></textarea>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Thumbnail</label>
                    <div class="col-sm-12 col-md-7">
                        <div id="image-preview" class="image-preview">
                            <label for="image-upload" id="image-label">Choose File</label>
                            <input type="file" name="image" id="image-upload" value="<?= $img ?>" />
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                    <div class="col-sm-12 col-md-7">
                        <select class="form-control selectric" name="status">
                            <option value="true">Publish</option>
                            <option value="false">Deactive</option>
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
                        <button class="btn btn-primary" type="submit" name="newsedit">Update Post</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>