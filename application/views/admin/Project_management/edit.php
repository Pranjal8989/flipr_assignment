<div class="container">
    <div class="form-wrapper card">
        <h3 class="mb-4">Project Form</h3>
        <form method="post" action="<?php echo base_url('Project_management/update/') . $project_data->id; ?>"
            enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" value="<?= $project_data->name ?>" name="name"
                    placeholder="Enter your name">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4"
                    placeholder="Write a description"><?= $project_data->description ?></textarea>
            </div>

            <div class="mb-3">
                <label for="current_image" class="form-label">Current Profile Image</label>
                <div>
                    <?php if (!empty($project_data->image)): ?>
                        <img src="<?= base_url($project_data->image) ?>" alt="project-image"
                            style="width: 150px; height: auto;">
                    <?php else: ?>
                        <p>No image available</p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Upload New Image (Optional)</label>
                <input type="file" class="form-control" id="image" name="project_image[]">
                <input type="hidden" name="existing_image" value="<?= $project_data->image ?>">

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>