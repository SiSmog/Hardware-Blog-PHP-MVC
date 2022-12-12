<div class="col">
    <div class="container">
        <!-- Breadcrumbs-->
        <h2>Your Posts</h2>

        <!-- DataTables Example -->
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Author</th>
                        <th colspan="3">Post Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($row)) : ?>
                        <p>No post submitted yet</p>
                    <?php else : ?>
                        <?php while ($row = mysqli_fetch_array($Articles)) { ?>
                            <tr>
                                <td><?= $row["titre"]; ?></td>
                                <td><?= $row["id"]; ?></td>
                                <td><?= $row["pseudo_utilisateur"]; ?></td>
                                <td><a href="dashboard/view/<?= $post->id; ?>" class="btn btn-dark">View</a></td>
                                <td><a href="dashboard/edit/<?= $post->id; ?>" class="btn btn-primary">Edit</a></td>
                                <td><a href="dashboard/delete/<?= $post->id; ?>" class="btn btn-danger">Delete</a></td>
                            </tr>
                        <?php } ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>