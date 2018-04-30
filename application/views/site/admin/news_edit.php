<div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-body">
            <h4 class="m-t-0 m-b-30">Form Edit News</h4>

            <form action="<?php echo base_url('administrator/news/update/' . $news->news_id); ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="title" class="form-control" id="" placeholder="Enter Title" value="<?php echo $news->news_title; ?>">
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="description" class="form-control" id="" placeholder="Enter Description"><?php echo $news->news_description; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="">Category</label>
                    <input type="text" name="category" class="form-control" id="" placeholder="Category Title" value="<?php echo $news->news_category; ?>">
                </div>
                <div class="form-group">
                    <label for="">Poster</label>
                    <input type="file" name="poster" class="form-control" id="">
                    <input type="hidden" name="poster_then" value="<?php echo $news->news_poster; ?>">
                </div>
                <button type="submit" class="btn btn-dark waves-effect waves-light"><i class="fa fa-edit"></i> Update</button>
            </form>
        </div><!-- panel-body -->
    </div> <!-- panel -->
</div> <!-- col-->
