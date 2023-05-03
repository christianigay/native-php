<!--Grid options-->

<section id="grid-options" class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"><?=$data['meta']['title'] ?? ''?></h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <?php if(isset($data['result']['message']) && $data['result']['message']): ?>
                    <div class="alert alert-<?php echo $data['result']['success'] ? 'success' : 'danger' ?>" role="alert">
                        <?=$data['result']['message']?>
                    </div>
                    <?php endif; ?>
                    <form class="form form-horizontal" action="<?php echo BASE_URL.'/public/users/insert.php'; ?>" method="post" enctype="multipart/form-data">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                  <?php if(isset($data['contents']->image_file)): ?>
                                    <div class="image-cls avatar mr-1 avatar-xl pull-right">
                                        <img src="<?=$data['contents']->image_file?>" alt="avtar img holder">
                                    </div>
                                  <?php endif; ?>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>Username</span>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" id="username" class="form-control" name="username" value="<?=$data['contents']['username'] ?? ''?>" placeholder="Username">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>Password</span>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="password" id="password" class="form-control" name="password" value="<?=$data['contents']['password'] ?? ''?>" placeholder="Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Submit</button>
                                    <button type="reset" class="btn btn-outline-warning mr-1 mb-1 waves-effect waves-light">Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>