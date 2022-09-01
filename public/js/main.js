var message = {
    save_company_details: "save-company-details",
    save_employee_details: "save-employee-details",
    get_company_onload: "get-company-onload",
    get_company_data_onload: "get-company-data-onload",
    get_employee_data_onload: "get-employee-data-onload",
    del_emp_details: "del-emp-details",
    del_comp_details: "del-comp-details",
};
$(function () {
    getCompanyDataOnLoad();
    getEmployeeDataOnLoad();
});

function openCompanyModal() {
    $("#companyModal").modal("show");
}
function openEmployeeModal() {
    axios
        .get(message.get_company_onload)
        .then((res) => {
            if (res.data.data == 0) {
                swal.fire({
                    title: "No Company Find",
                    text: "Please fill Company Details",
                    icon: "warning",
                });
            } else {
                let option = `<option value=""></option>`;
                res.data.data.forEach((element) => {
                    option += `<option value="${element.id}">${element.name}</option>`;
                });
                $("#eCompany").html(option);
            }
        })
        .catch((err) => {
            console.log(err);
        });

    $("#employeeModal").modal("show");
}

function saveCompanyDetails() {
    let name = $("#cName").val(),
        email = $("#cEmail").val(),
        link = $("#cLink").val(),
        logo = $("#cLogo")[0].files[0];

    let formData = new FormData();
    formData.append("name", name);
    formData.append("email", email);
    formData.append("logo", logo);
    formData.append("link", link);

    axios
        .post(message.save_company_details, formData)
        .then((res) => {
            swal.fire({
                title: res.data.status,
                text: res.data.msg,
                icon: res.data.status,
            });
            closeCompanyDetails();
        })
        .catch((err) => {
            console.log(err);
        });
}

function closeCompanyDetails() {
    $("#cName").val("");
    $("#cEmail").val("");
    $("#cLink").val("");
    $("#cLogo").val("");
    $("#companyModal").modal("hide");
    reload();
}

function closeEmployeeDetails() {
    $("#eFName").val("");
    $("#eLNmae").val("");
    $("#eEmail").val("");
    $("#eCompany").val("").trigger("chnage");
    $("#cPhone").val("");
    $("#employeeModal").modal("hide");
    reload();
}

function saveEmployeeDetails() {
    firstName = $("#eFName").val();
    lastName = $("#eLName").val();
    email = $("#eEmail").val();
    company = $("#eCompany").val();
    phone = $("#ePhone").val();

    axios
        .post(message.save_employee_details, {
            firstName,
            lastName,
            email,
            company,
            phone,
        })
        .then((res) => {
            console.log(res);
            swal.fire({
                title: res.data.status,
                text: res.data.msg,
                icon: res.data.status,
            });
            closeEmployeeDetails();
        })
        .catch((err) => {
            swal.fire({
                title: "Error",
                text: err.response.data.message,
                icon: "warning",
            });
        });
}

function getCompanyDataOnLoad() {
    axios
        .get(message.get_company_data_onload)
        .then((res) => {
            var companyTable = $("#companyTable").DataTable();
            companyTable.clear().draw();

            res.data.data.forEach((count) => {
                let logo = `<tr><img src="storage/app/public/logo/${count.logo}" /></tr>`;
                let action = `<tr><button type="button" class="btn btn-danger btn-sm" onclick="delCompDetails('${count.id}')">delete</button></tr>`;

                companyTable.row.add([
                    count.name,
                    count.email,
                    logo,
                    count.website,
                    action,
                ]);
            });
            companyTable.draw();
        })
        .catch((err) => {
            console.log(err);
        });
}

function getEmployeeDataOnLoad() {
    axios
        .get(message.get_employee_data_onload)
        .then((res) => {
            var employeeTable = $("#employeeTable").DataTable();
            employeeTable.clear().draw();

            res.data.data.forEach((count) => {
                let action = `<tr><button type="button" class="btn btn-danger btn-sm" onclick="delEmpDetails('${count.id}')">delete</button></tr>`;
                employeeTable.row.add([
                    count.first_name,
                    count.last_name,
                    count.name,
                    count.email_id,
                    count.phone,
                    action,
                ]);
            });
            employeeTable.draw();
        })
        .catch((err) => {
            console.log(err);
        });
}

function delEmpDetails(id) {
    axios
        .post(message.del_emp_details, { id })
        .then((res) => {
            swal.fire({
                title: res.data.status,
                text: res.data.msg,
                icon: res.data.status,
            });
            reload();
        })
        .catch((err) => {
            console.log(err);
        });
}

function delCompDetails(id) {
    axios
        .post(message.del_comp_details, { id })
        .then((res) => {
            swal.fire({
                title: res.data.status,
                text: res.data.msg,
                icon: res.data.status,
            });
            reload();
        })
        .catch((err) => {
            console.log(err);
        });
}
function reload() {
    setTimeout(function () {
        location.reload();
    }, 2000);
}
