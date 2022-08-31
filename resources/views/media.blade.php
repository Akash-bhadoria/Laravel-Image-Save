@include('layout')
<div class="container mt-3">

    <button type="button" class="btn btn-primary" onclick='openCompanyModal()'>
        Create Company
    </button>
    <button type="button" class="btn btn-primary" onclick='openEmployeeModal()'>
        Create Employee
    </button>
</div>

<!-- The Employee Modal -->
<div class="modal" id="employeeModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Employee Details</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="form-group">
                    <label for="email">First Name</label>
                    <input type="text" class="form-control" placeholder="Enter Name" id="eFName" name="eFName"
                        autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="email">Last Name</label>
                    <input type="text" class="form-control" placeholder="Enter Name" id="eLName" name="eLName"
                        autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="pwd">Company</label>
                    <select name="eCompany" id="eCompany">

                    </select>
                </div>
                <div class="form-group">
                    <label for="pwd">Email</label>
                    <input type="email" class="form-control" placeholder="Enter Email" id="eEmail" name="eEmail"
                        autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="pwd">Phone</label>
                    <input type="tel" class="form-control" id="ePhone" name="ePhone">
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Submit</button>
            </div>

        </div>
    </div>
</div>

<!-- The Company Modal -->

<div class="modal" id="companyModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Campany Details</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="form-group">
                    <label for="email">Company Name</label>
                    <input type="text" class="form-control" placeholder="Enter Name" id="cName" name="cName"
                        autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="pwd">Email</label>
                    <input type="email" class="form-control" placeholder="Enter Email" id="cEmail" name="cEmail"
                        autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="pwd">Logo</label>
                    <input type="file" class="form-control" id="cLogo" name="cLogo">
                </div>
                <div class="form-group">
                    <label for="pwd">website</label>
                    <input type="text" class="form-control" placeholder="Enter Website Link" id="cLink" name="cLink"
                        autocomplete="off">
                </div>

            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="saveCompanyDetails()">Submit</button>
            </div>

        </div>
    </div>
</div>