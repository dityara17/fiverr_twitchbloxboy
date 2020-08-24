<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Form Submit</h3>
            </div>
            <div class="card-body">
                <div class="table">
                    <table class="table datatable table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Idea</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($use->getIdeas() as $key => $idea): ?>
                            <tr>
                                <td><?= $key += 1; ?></td>
                                <td><?= $idea['name']; ?></td>
                                <td><?= $idea['email']; ?></td>
                                <td><?= $idea['idea']; ?></td>
                                <td><?= date('F,y d', strtotime($idea['date'])) ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
