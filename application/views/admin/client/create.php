<div class="container">
    <div class="form-wrapper card">
        <h3 class="mb-4">Client Form</h3>
        <form method="post" action="<?php echo base_url('Client/store'); ?>" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
            </div>



            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" rows="4" name="description"
                    placeholder="Write a description"></textarea>
            </div>

            <div class="mb-3">
                <label for="designation" class="form-label">Designation</label>
                <input type="text" class="form-control" id="designation" name="designation"
                    placeholder="Enter your designation">
            </div>


            <div class="mb-3">
                <label for="image" class="form-label">Profile Image</label>
                <input type="file" class="form-control" id="image" name="client_image[]">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>