<div class="container mt-5">
    <div class="card">
        <div class="card-header  text-black">
            <h4 class="mb-0">Contact Form Details</h4>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr align="center">
                        <th>#</th>
                        <th>Full Name</th>
                        <th>Email Address</th>
                        <th>Mobile Number</th>
                        <th>City</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; foreach ($contact_data as $key) { ?>
                    <tr align="center">
                        <td><?php echo $i ?></td>
                        <td><?php echo $key->name ?></td>
                        <td><?php echo $key->email ?></td>
                        <td><?php echo $key->mobile ?></td>
                        <td><?php echo $key->city ?></td>
                    </tr>
                    <?php $i++; } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>