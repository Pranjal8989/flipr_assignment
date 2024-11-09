<div class="container">
    <div class="form-wrapper card">
        <div class="table-responsive">
            <div class="d-flex justify-content-end mb-3">
                <a href="<?= base_url('Project_management/create') ?>" class="btn btn-lg btn-success"><i
                        class="fas fa-plus"></i>
                    Add New Project</a>
            </div>

            <table class="table table-bordered table-default">
                <thead class="thead-light">
                    <tr align="center">
                        <th width="2%">S.No.</th>
                        <th width="15%">Project Image</th>
                        <th width="15%">Name</th>
                        <th width="15%">Description</th>
                        <th width="10%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($projects as $project): ?>
                        <tr align="center">
                            <td><?= $i; ?></td>
                            <td>
                                <?php if (!empty($project->image)): ?>
                                    <img src="<?= base_url($project->image); ?>" alt="project-image"
                                        style="width: 100px; height: auto;">
                                <?php else: ?>
                                    <span>No Image</span>
                                <?php endif; ?>
                            </td>
                            <td><?= $project->name; ?></td>
                            <td><?= $project->description; ?></td>
                            <td>

                                <a href="<?= base_url('Project_management/edit/' . $project->id) ?>"
                                    class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                <a href="<?= base_url('Project_management/delete/' . $project->id) ?>"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this project?')"><i
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