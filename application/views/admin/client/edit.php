<div class="container">
    <div class="form-wrapper card">
        <h3 class="mb-4">Client Form</h3>
        <form method="post" action="<?php echo base_url('Client/update/').$client_data->id; ?>"
            enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" value="<?= $client_data->name ?>" name="name"
                    placeholder="Enter your name">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4"
                    placeholder="Write a description"><?= $client_data->description ?></textarea>
            </div>

            <div class="mb-3">
                <label for="designation" class="form-label">Designation</label>
                <input type="text" class="form-control" value="<?= $client_data->designation ?>" id="designation"
                    name="designation" placeholder="Enter your designation">

                <div class="mb-3">
                    <label for="current_image" class="form-label">Current Profile Image</label>
                    <div>
                        <?php if (!empty($client_data->image)): ?>
                        <img src="<?= base_url($client_data->image) ?>" alt="client-image"
                            style="width: 150px; height: auto;">
                        <?php else: ?>
                        <p>No image available</p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Upload New Image (Optional)</label>
                    <input type="file" class="form-control" id="image" name="client_image[]">
                    <input type="hidden" name="existing_image" value="<?= $client_data->image ?>">

                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>