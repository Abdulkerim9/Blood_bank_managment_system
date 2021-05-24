<div class="panel panel-default">
            <div class="panel-heading">
                <h1>Donor Registration</h1>            
            </div>
            <div class="panel-body">
                <form method="post" action="register.php" class="form-horizontal">
                    <div class="form-group">
                        <label class="col-md-4 form-label">Name</label>
                        <div class="col-md-4">
                            <input type="text" name="firstName" class="form-control" placeholder="First Name" required="true">
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="lastName" class="form-control" placeholder="Last Name" required="true">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label col-md-4">Email</label>
                        <div class="col-md-8">
                            <input type="email" required="true" class="form-control" name="email" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label col-md-4">D.O.B</label>
                        <div class="col-md-8">
                            <input type="date" required="true" class="form-control" name="dob" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label col-md-4">Gender</label>
                        <div class="col-md-8">
                            <input type="radio" value="Male" checked="true" class="radio-inline" name="gender" >Male
                            <input type="radio" value="Female" class="radio-inline" name="gender" >Female
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label col-md-4">Blood Group</label>
                        <div class="col-md-8">
                            <select name="blood_group" class="form-control">
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label col-md-4">Address</label>
                        <div class="col-md-8">
                            <textarea required="true" minlength="5" class="form-control" name="address" 
                                      rows="6" placeholder="Please fill out your complete address."></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label col-md-4">City</label>
                        <div class="col-md-8">
                            <input type="text" required="true" class="form-control" name="city" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label col-md-4">Mobile</label>
                        <div class="col-md-8">
                            <input type="number" required="true" class="form-control" name="mobile" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label col-md-4"></label>
                        <div class="col-md-8">
                            <button class="btn btn-primary" name="submitBtn" >Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>

