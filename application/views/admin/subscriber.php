<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-light text-black">
            <h4 class="mb-0">Subscribed Email Addresses</h4>
        </div>
        <div class="card-body">

            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr align="center">
                        <th>#</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; foreach($subscriptions as $key){ ?>
                    <tr align="center">
                        <td align="center"><?php echo $i?></td>
                        <td align="center"><?php echo $key->email?></td>
                    </tr>
                    <?php $i++;} ?>
                </tbody>
            </table>
        </div>
    </div>
</div>