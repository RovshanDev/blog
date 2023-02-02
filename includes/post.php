<div class="row mb-2">
    <?php
    $database = new Database();
    $posts =$database->select('blog','*',"is_monset=0 and status=1","created_at DESC limit 2");
    foreach ($posts as $post) {
//    $sql = "SELECT * FROM  blog  WHERE is_monset=0 and status=1 ORDER BY created_at DESC limit  2  ";
//    $query = $database->db->query($sql);
//    $post = $query->fetch_array();
    ?>
    <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary"><?=$post['title'] ?></strong>
                <div class="mb-1 text-muted"><?=date("Y-m-d",strtotime($post['created_at'])) ?></div>
                <p class="card-text mb-auto"><?=$post['description'] ?></p>
                <a href="index.php?route=single&id=<?= $post['id'] ?>" class="stretched-link">Continue reading</a>
            </div>
            <div class="col-auto d-none d-lg-block">
<!--                <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img"-->
<!--                     aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>-->
<!--                        Placeholder</title>-->
<!--                    <rect width="100%" height="100%" fill="#55595c"/>-->
<!--                    <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>-->
<!--                </svg>-->
                <?= '<img width="250" height="250" src=./backend/uploads/' . $post['image'] . '>' ?>

            </div>
        </div>
    </div>
    <?php } ?>
</div>
<!--  test hissesi-->
</main>
