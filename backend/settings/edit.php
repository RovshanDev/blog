<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Page Edit</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <?php
                $id = $_GET['id'];
//                $query = mysqli_query($db, "SELECT * FROM  pages where id=$id");
//                while ($row = mysqli_fetch_array($query)) {

                $database = new Database();
                $edits = $database->select('settings','*',"id=$id");
                foreach($edits as $edit) {

                ?>
                <form action="settings/update.php?id=<?= $id ?>" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">some</label>
                            <input type="text" name="some" class="form-control" value="<?= $edit['some'] ?>"
                                   placeholder="Enter some">
                        </div>
                        <div class="form-group">
                            <label for="title">any</label>
                            <input type="text" name="any" class="form-control" value="<?= $edit['any'] ?>"
                                   placeholder="Enter any">
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