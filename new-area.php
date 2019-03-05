<?php
    include 'header.php';
?>
        <div class="main-content">
            <div class="h-20"></div>
            <div class="col-md-12 mb-20">
                <div>
                    <ul class="breadcrumb pull-left">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="areas.html">Areas</a>
                        </li>
                        <li>
                            <a href="javascript:;" class="active">Single Area</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="page-content">
                        <form action="#" method="post">
                            <div class="row">
                                <label for="" class="col-md-3">Name</label>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Name" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <label for="" class="col-md-3">Local Government</label>
                                <div class="col-md-6">
                                    <select name="lga" id="lga" class="form-control">
                                      <option disabled selected>Select a local Government</option>
                                      <option value="ibeju-lekki">Ibeju Lekki</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <label for="" class="col-md-3">Pickup Days</label>
                                <div class="col-md-6">
                                    <select name="pickup-day" id="pickup-day" class="form-control">
                                      <option disabled selected>Select a pickup day</option>
                                      <option value="Mondays">Mondays</option>
                                      <option value="Tuesdays">Tuesdays</option>
                                      <option value="Wednesdays">Wednesdays</option>
                                      <option value="Thursdays">Thursdays</option>
                                      <option value="Fridays">Fridays</option>
                                      <option value="Saturdays">Saturdays</option>
                                      <option value="Sundays">Sundays</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <label for="" class="col-md-3">Agent</label>
                                <div class="col-md-6">
                                    <select name="lga" id="lga" class="form-control">
                                      <option disabled selected>Select an agent</option>
                                      <option value="eedris-abdulkareem">Eedris Abdulkareem</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <label for="" class="col-md-3">Enable</label>
                                <div class="col-md-6">
                                    <input type="checkbox" name="status"> Activate Area
                                </div>
                            </div>
                            <div class="row text-center mt-15">
                                <input type="submit" value="submit" class="btn btn-default">
                            </div>
                        </form>
                    </div>
                </div>
            
            </div>
        </div>
<?php
    include 'footer.php';
?>