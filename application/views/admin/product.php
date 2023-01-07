<div class="content">
    <div class="py-4 px-3 px-md-4">

        <div class="mb-3 mb-md-4 d-flex justify-content-between">
            <div class="h3 mb-0">All Product</div>
            <div>
                <a href="<?= base_url(); ?>c_admin/add">
                    <button class="button">Tambah data</button>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card mb-3 mb-md-4">
                    <div class="card-body pt-0">
                        <div class="table-responsive-xl">
                            <table class="table text-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th class="font-weight-semi-bold border-top-0 py-2">Code</th>
                                        <th class="font-weight-semi-bold border-top-0 py-2">Name</th>
                                        <th class="font-weight-semi-bold border-top-0 py-2">Stock</th>
                                        <th class="font-weight-semi-bold border-top-0 py-2">Price</th>
                                        <th class="font-weight-semi-bold border-top-0 py-2">Description</th>
                                    </tr>
                                </thead>
                                <?php
                                // $count = 0;
                                foreach ($allproduct->result() as $tb) :
                                    // $count++;
                                ?>
                                    <tbody>
                                        <tr>
                                            <td class="py-3"><?= $tb->code ?></td>
                                            <td class="py-3"><?= $tb->name ?></td>
                                            <td class="py-3"><?= $tb->stock ?></td>
                                            <td class="py-3"><?= $tb->price ?></td>
                                            <td class="py-3"><?= $tb->description ?></td>
                                            <td class="py-3"><button class="button"><a href="<?php echo base_url(); ?>c_admin/editdata/<?php echo $tb->id; ?>" style="color:#ffffff; ">Edit</a></button>
                                                <br>
                                                <a style="border:1px;" href="<?php echo base_url(); ?>c_admin/delete_data/<?php echo $tb->id; ?>" class="btn">Delete</a>

                                            </td>


                                        </tr>

                                    <?php endforeach; ?>
                            </table>