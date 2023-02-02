<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Blog Edit</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <?php
                $id = $_GET['id'];
//                $query = mysqli_query($db, "SELECT * FROM  blog where id=$id");
//                $query2 = mysqli_query($db, "SELECT * FROM  categories");
//                $result2=mysqli_fetch_all($query2,MYSQLI_ASSOC);
//                while ($row = mysqli_fetch_array($query)) {

                $database = new Database();
                $edits = $database->select('blog','*',"id=$id");
                $result2 = $database->select('categories','*');

                foreach($edits as $edit) {

                ?>
                <form action="blog/update.php?id=<?= $id ?>" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">title</label>
                            <input type="text" name="title" class="form-control" value="<?= $edit['title'] ?>"
                                   placeholder="Enter title">
                        </div>
                        <div class="form-group">
                            <label for="description">description</label>
                            <input type="text" name="description" class="form-control" value="<?= $edit['description'] ?>"
                                   placeholder="Enter description">
                        </div>
                        <div class="form-group">
                            <label for="content">content</label>
                            <input type="text" name="content" class="form-control" value="<?= $edit['content'] ?>"
                                   placeholder="Enter content">
                        </div>
                        <div class="form-group">
                            <label for="category">categories</label><br>
                            <select name="cat_id" id="">
                                <?php foreach ($result2 as $res2) {
                                    if($res2['id']==$edit['cat_id']){ ?>
                                    <option value="<?= $res2['id']?>" selected><?= $res2['title']?></option>
                                <?php } else {?>
                                <option value="<?= $res2['id']?>"><?= $res2['title']?></option>
                                <?php }
                                    } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="image">image</label>
                            <img width="150" height="100" src=uploads/<?=$edit['image']?>>
                            <input type="file" name="image" class="form-control"  placeholder="Enter image">
                            <input type="hidden" name="old_image" value="<?=$edit['image']?>">
                        </div>
                        <div class="form-group">
                            <label for="is_monset">is_monset</label>
                            <input type="number" max="1" min="0" name="is_monset" class="form-control" value="<?= $edit['is_monset'] ?>"
                                   placeholder="is_menu">
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" class="form-control">
                                <?php
                                if ($edit['status'] == 1) {
                                    $active = 'selected';
                                    $passive = '';
                                } else {
                                    $active = '';
                                    $passive = 'selected';
                                }
                                ?>
                                <option value="0" <?= $passive ?> >Passive</option>
                                <option value="1" <?= $active ?> >Active</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                    <?php } ?>
                </form>
            </div>

        </div>
    </section>
</div>
