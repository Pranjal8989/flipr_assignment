<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-light text-black d-flex justify-content-between">
            <h4 class="mb-0">Clients</h4>
            <button class="btn btn-primary" data-toggle="modal" data-target="#addClientModal">Add Client</button>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr align="center">
                        <th>ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Designation</th>
                        <th width="30%">Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; foreach($clients as $key){ ?>
                    <tr align="center">
                        <td align="center"><?php echo $i?></td>
                        <td align="center">
                            <img src="<?php echo base_url($key->image); ?>" alt="<?php echo $key->name; ?>"
                                style="width: 100px; height: auto;">
                        </td>
                        <td align="center"><?php echo $key->name?></td>
                        <td align="center"><?php echo $key->designation?></td>
                        <td align="center"><?php echo $key->description?></td>
                        <td align="center">
                            <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editClientModal"
                                data-id="<?php echo $key->id; ?>" data-name="<?php echo $key->name; ?>"
                                data-designation="<?php echo $key->designation; ?>"
                                data-description="<?php echo $key->description; ?>"
                                data-image="<?php echo base_url($key->image); ?>"
                                data-existingimage="<?php echo base_url($key->image); ?>">Edit</button>
                            <a href="<?php echo base_url('ProjectC/deleteProject/' . $key->id); ?>"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete this project?');">Delete</a>
                        </td>
                    </tr>
                    <?php $i++;} ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Add Client Modal -->
<div class="modal fade" id="addClientModal" tabindex="-1" role="dialog" aria-labelledby="addClientModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addClientModalLabel">Add Client</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo base_url('ClientC/addClient'); ?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Client Name</label>
                        <input type="text" class="form-control" name="name" id="name" required>
                    </div>
                    <div class="form-group">
                        <label for="designation">Client Designation</label>
                        <input type="text" class="form-control" name="designation" id="designation" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Client Description</label>
                        <textarea class="form-control" name="description" id="description" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Client Image</label>
                        <input type="file" class="form-control" name="image" id="image" accept="image/*"
                            onchange="loadImage(event)" required>
                    </div>
                    <div class="form-group">
                        <div id="image-crop-container">
                            <img id="imageToCrop" src="<?php echo base_url('assets/images/default_image.png');?>"
                                alt="Image to crop" style="width: 200px; height: 200px;" />
                        </div>
                    </div>
                    <input type="hidden" name="cropped_image" id="cropped_image">
                    <button type="submit" class="btn btn-primary">Add Client</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit Client Modal -->
<div class="modal fade" id="editClientModal" tabindex="-1" role="dialog" aria-labelledby="editClientModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editClientModalLabel">Edit Client</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo base_url('ClientC/updateClient'); ?>"
                    enctype="multipart/form-data">
                    <input type="hidden" name="id" id="editClientId">
                    <div class="form-group">
                        <label for="editName">Client Name</label>
                        <input type="text" class="form-control" name="name" id="editName" required>
                    </div>
                    <div class="form-group">
                        <label for="designation">Client Designation</label>
                        <input type="text" class="form-control" name="designation" id="editdesignation" required>
                    </div>
                    <div class="form-group">
                        <label for="editDescription">Client Description</label>
                        <textarea class="form-control" name="description" id="editDescription" rows="3"
                            required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="editImage">Client Image</label>
                        <input type="file" class="form-control" name="image" id="editImage" accept="image/*"
                            onchange="loadEditImage(event)">
                    </div>
                    <div class="form-group">
                        <div id="edit-image-crop-container">

                            <img id="editImagePreview" src="" alt="Client Image" style="width: 200px; height: 200px;" />

                            <img id="neweditImagePreview" src="" alt="Client Image"
                                style="width: 200px; height: 200px; display: none;" />


                        </div>
                    </div>
                    <input type="hidden" name="edit_cropped_image" id="edit_cropped_image">
                    <button type="submit" class="btn btn-primary">Update Client</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
// Handling data when the edit modal is shown
$('#editClientModal').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget);
    var id = button.data('id');
    var name = button.data('name');
    var designation = button.data('designation');
    var description = button.data('description');
    var existingImage = button.data('existingimage');

    var modal = $(this);
    modal.find('#editClientId').val(id);
    modal.find('#editName').val(name);
    modal.find('#editdesignation').val(designation);
    modal.find('#editDescription').val(description);

    var imageElement = modal.find('#editImagePreview')[0];
    imageElement.src = existingImage;

    imageElement.onload = function() {
        const cropper = new Cropper(imageElement, {
            aspectRatio: 16 / 9,
            viewMode: 1,
            autoCropArea: 0.5,
            responsive: true,
        });


        function getCroppedImageData() {
            const croppedCanvas = cropper.getCroppedCanvas();
            return croppedCanvas ? croppedCanvas.toDataURL() : null;
        }


        $('form').on('submit', function(e) {
            const editCroppedImage = getCroppedImageData();
            if (editCroppedImage) {
                $('#edit_cropped_image').val(editCroppedImage);
            }
        });
    };
});


// Handle image selection and cropping for Add Client modal
function loadImage(event) {
    const imageElement = document.querySelector('#imageToCrop');
    const file = event.target.files[0];

    if (file) {

        if (window.cropper) {
            window.cropper.destroy();
        }

        imageElement.src = URL.createObjectURL(file);

        window.cropper = new Cropper(imageElement, {
            aspectRatio: 16 / 9,
            viewMode: 1,
            responsive: true,
        });

        function getCroppedImageData() {
            const croppedCanvas = window.cropper.getCroppedCanvas();
            return croppedCanvas ? croppedCanvas.toDataURL() : null;
        }


        $('form').on('submit', function(e) {
            const croppedImage = getCroppedImageData();
            if (croppedImage) {
                $('#cropped_image').val(croppedImage);
            }
        });
    }
}

// Handle image selection and cropping for Edit Client modal
function loadEditImage(event) {
    const imageElement = document.querySelector('#neweditImagePreview');
    const existingImageElement = document.querySelector('#editImagePreview');
    const file = event.target.files[0];

    if (file) {

        if (window.cropper) {
            window.cropper.destroy();
        }
        existingImageElement.style.display = 'none';
        imageElement.style.display = 'block';
        const imageUrl = URL.createObjectURL(file);
        imageElement.src = imageUrl;


        window.cropper = new Cropper(imageElement, {
            aspectRatio: 16 / 9,
            viewMode: 1,
            responsive: true,
        });

        function getCroppedImageData() {
            const croppedCanvas = window.cropper.getCroppedCanvas();
            return croppedCanvas ? croppedCanvas.toDataURL() : null;
        }

        // Handle form submission for editing
        $('form').on('submit', function(e) {
            const editCroppedImage = getCroppedImageData();
            if (editCroppedImage) {
                $('#edit_cropped_image').val(editCroppedImage);
            }
        });
    }
}
</script>