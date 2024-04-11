<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">fill this form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- from section start -->
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="inputFullName" class="form-label">Name</label>
                        <input type="inputFullName" class="form-control" id="inputFullName" placeholder="enter your name">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Details</label>
                        <input type="Details" class="form-control" placeholder="enter your Details">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="enter your address">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">City</label>
                        <select id="inputCity" class="form-select">
                            <option selected>Choose</option>
                            <option>Ahmdabad</option>
                            <option>Rajkot</option>
                            <option>Mahesana</option>
                            <option>Jamnagar</option>
                            <option>Gandhinagar</option>
                            <option>Surat</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">State</label>
                        <select id="inputState" class="form-select">
                            <option selected>Choose</option>
                            <option>gujrat</option>
                            <option>rajshthan</option>
                            <option>mumbai</option>
                            <option>maharastra</option>
                            <option>bihar</option>
                            <option>utter pradesh</option>
                         </select>
                    </div>
                    <div class="col-md-2">
                        <label for="inputZip" class="form-label">Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                    <div class="col-md-4">
                        <label for="inputZip" class="form-label">Phone No</label>
                        <input type="text" class="form-control" id="inputZip" placeholder="enter your no">
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                check out
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">save </button>
                        <button type="reset" class="btn btn-danger" style="float: right;">clear form</button>
                    </div>
                </form>
                <!-- form section stop -->
            </div>
        </div>
    </div>
</div>
