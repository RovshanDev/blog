<?php
//$query2 = mysqli_query($db, "SELECT * FROM  categories");
//$result2=mysqli_fetch_all($query2,MYSQLI_ASSOC);
$database = new Database();
$result2 = $database->select('categories','*');

?>
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Blogs Create</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="index.php?route=blog/store" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">title</label>
                            <input type="text" name="title" class="form-control"  placeholder="Enter title">
                        </div>
                        <div class="form-group">
                            <label for="description">description</label>
                            <input type="text" name="description" class="form-control"  placeholder="Enter description">
                        </div>
                        <div class="form-group">
                            <label for="content">content</label>
                            <input type="text" name="content" class="form-control"  placeholder="Enter content">
                        </div>
                        <div class="form-group">
                            <label for="image">image</label>
                            <input type="file" name="image" class="form-control"  placeholder="Enter image">
                        </div>
                        <div class="form-group">
                            <label for="category">categories</label><br>
                            <select name="cat_id" id="">
                                <?php foreach ($result2 as $res2) {?>
                                    <option value="<?= $res2['id']?>"><?= $res2['title']?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="is_monset">is_monset</label>
                            <input type="number" max="1" min="0" name="is_monset" class="form-control" placeholder="Enter is_monset">
                        </div>
                        <div class="form-group">
                            <label for="status">status</label>
                            <input type="number" max="1" min="0" name="status" class="form-control" placeholder="Enter status">
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </section>
</div>