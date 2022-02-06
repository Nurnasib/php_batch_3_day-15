<?php include 'header.php';?>

<section class="py-5 bg-success">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header bg-danger text-center text-white">Password Generator</div>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label for="pp" class="col-md-3">Password Length</label>
                                <div class="col-md-9">
                                    <input type="number" id="pp" class="form-control" name="pass_len"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="p" class="col-md-3">Generated Password</label>
                                <div class="col-md-9">
                                    <input type="text" id="p" readonly class="form-control" value="<?php echo isset($result)?$result:' '; ?>"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success btn-block" name="btn" value="Submit"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






<?php include 'footer.php';?>
