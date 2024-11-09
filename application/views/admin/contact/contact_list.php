<div class="container">
    <div class="form-wrapper card">
        <div class="table-responsive">

            <table class="table table-bordered table-default">
                <thead class="thead-light">
                    <tr align="center">
                        <th width="2%">S.No.</th>
                        <th width="15%">Name</th>
                        <th width="15%">Email</th>
                        <th width="10%">Modile Number</th>
                        <th width="10%">city</th>
                        <th width="10%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($contacts as $contact): ?>
                        <tr align="center">
                            <td><?= $i; ?></td>
                            <td>
                                <?php if (!empty($contact->image)): ?>
                                    <img src="<?= base_url($contact->image); ?>" alt="contact-image"
                                        style="width: 100px; height: auto;">
                                <?php else: ?>
                                    <span>No Image</span>
                                <?php endif; ?>
                            </td>
                            <td><?= $contact->name; ?></td>
                            <td><?= $contact->description; ?></td>
                            <td><?= $contact->designation; ?></td>
                            <td>
                                <a href="<?= base_url('Contact/delete/' . $contact->id) ?>" class="btn btn-danger btn-sm"
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