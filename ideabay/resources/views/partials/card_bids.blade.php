<div class="card">
    <div class="card-header" id="ideaID"> <!-- CHANGE THIS ID PER IDEA! -->
        <h5 class="card-title">This is an idea</h5>
        <div class="d-flex flex-wrap keywords">
            <a href="#" class="badge badge-secondary">keyword</a>
            <a href="#" class="badge badge-secondary">keyword</a>
        </div>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et convallis lectus. Vivamus scelerisque elementum purus id molestie. Duis quis augue consequat, rhoncus leo non, finibus risus. Duis luctus ultricies efficitur. Sed nec sapien vitae ex pharetra placerat quis vel ante. Suspendisse bibendum mattis laoreet. In accumsan quam ut nisl commodo consectetur non in neque. Praesent viverra sem ut mi tempus aliquet.</p>
        
        <div class="d-flex justify-content-between">
            <!-- CHANGE COLLAPSEID PER IDEA! -->
            <button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#collapseID" aria-expanded="false" aria-controls="collapseOne">
                Show Bids
            </button>
            <a href="#" class="btn btn-primary">Read More</a>
        </div>
    </div>

    <!-- CHANGE COLLAPSEID PER IDEA -->
    <div id="collapseID" class="collapse" aria-labelledby="ideaID">
        <div class="card-body">
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Message</th>
                        <th scope="col">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mark</td>
                        <td>This idea is very nice!</td>
                        <td>1000 €</td>
                    </tr>
                    <tr>
                        <td>Jacob</td>
                        <td>I like this, please accept my bid.</td>
                        <td>2000 €</td>
                    </tr>
                    <tr>
                        <td>Nathan</td>
                        <td>I could use this in my company.</td>
                        <td>1400 €</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card-footer">
        <small class="text-muted">Posted on someday</small>
    </div>
</div>