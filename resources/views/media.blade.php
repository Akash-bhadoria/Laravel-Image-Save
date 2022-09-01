@include('layout')
@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
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
                    <select class="form-control" name="eCompany" id="eCompany">

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
                <button type="button" class="btn btn-danger" onclick="closeEmployeeDetails()">Close</button>
                <button type="button" class="btn btn-primary" onclick="saveEmployeeDetails()">Submit</button>
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
                <button type="button" class="btn btn-danger" onclick="closeCompanyDetails()">Close</button>
                <button type="button" class="btn btn-primary" onclick="saveCompanyDetails()">Submit</button>
            </div>

        </div>
    </div>
</div>
<div class="container">
    <h5 class="mt-4">Company Details</h5>
    <table class="table table-hover" id="companyTable">
        <thead>
            <tr>
                <th>Company Name</th>
                <th>Email</th>
                <th>logo</th>
                <th>Website</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>
<hr>
<div class="container">
    <h5 class="mt-4">Employee Details</h5>
    <table class="table table-hover" id="employeeTable">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Company</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>