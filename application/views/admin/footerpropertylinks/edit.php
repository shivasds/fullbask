
<section class="content">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Property Footer Link</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post" action="<?= site_url('admin/FooterLinks/edit/' . $footer_link->id) ?>" enctype="multipart/form-data">
                    <div class="box-body"> 
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Link Name</label>

                            <div class="col-sm-10 <?= form_error('name') ? 'has-error' : '' ?>">
                                <input type="text" name="name" class="form-control" placeholder="Type the Name here" value="<?= $footer_link->name ?>">
                                <span class="<?= form_error('name') ? 'text-danger' : '' ?>"><?= form_error('name') ?></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="search_key" class="col-sm-2 control-label">Search Key</label>

                            <div class="col-sm-10 <?= form_error('search_key') ? 'has-error' : '' ?>">
                                <input type="text" name="search_key" class="form-control" placeholder="Type the Searck key here" value="<?= $footer_link->search_key ?>">
                                <span class="<?= form_error('search_key') ? 'text-danger' : '' ?>"><?= form_error('search_key') ?></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="city" class="col-sm-2 control-label">City Name</label>

                            <div class="col-sm-10 <?= form_error('city') ? 'has-error' : '' ?>">
                                <input type="text" name="city" class="form-control" placeholder="Type the city here" value="<?= $footer_link->city ?>">
                                <span class="<?= form_error('city') ? 'text-danger' : '' ?>"><?= form_error('city') ?></span>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-default" onclick="history.go(-1);">Back</button>
                        <button type="submit" class="btn btn-info pull-right">UPDATE</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <div class="clearfix"></div><br><br><br>
            <!-- /.box -->
        </div>
    </div>
</section>