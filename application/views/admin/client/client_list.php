<div class="container">
    <div class="form-wrapper card">
        <div class="table-responsive">
            <!-- Button to open the modal for adding new client -->
            <div class="d-flex justify-content-end mb-3">
                <a href="<?= base_url('Client/create') ?>" class="btn btn-lg btn-success"><i class="fas fa-plus"></i>
                    Add New Client</a>
            </div>

            <table class="table table-bordered table-default">
                <thead class="thead-light">
                    <tr align="center">
                        <th width="2%">S.No.</th>
                        <th width="15%">Client Image</th>
                        <th width="15%">Name</th>
                        <th width="15%">Description</th>
                        <th width="10%">Designation</th>
                        <th width="10%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($clients as $client): ?>
                        <tr align="center">
                            <td><?= $i; ?></td>
                            <td>
                                <?php if (!empty($client->image)): ?>
                                    <img src="<?= base_url($client->image); ?>" alt="client-image"
                                        style="width: 100px; height: auto;">
                                <?php else: ?>
                                    <span>No Image</span>
                                <?php endif; ?>
                            </td>
                            <td><?= $client->name; ?></td>
                            <td><?= $client->description; ?></td>
                            <td><?= $client->designation; ?></td>
                            <td>

                                <a href="<?= base_url('Client/edit/' . $client->id) ?>" class="btn btn-warning btn-sm"><i
                                        class="fas fa-edit"></i> Edit</a>
                                <a href="<?= base_url('Client/delete/' . $client->id) ?>" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this client?')"><i
                                        class="fas fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>