var message = {
    save_company_details: "save-company-details",
};
console.log(message);

function openCompanyModal() {
    $("#companyModal").modal("show");
}
function openEmployeeModal() {
    $("#employeeModal").modal("show");
}

function saveCompanyDetails() {
    let name = $("#cName").val(),
        email = $("#cEmail").val(),
        logo = $("#cLogo").val(),
        link = $("#cLink").val();
    console.log(logo);

    axios
        .post(message.save_company_details, { name, email, logo, link })
        .then((res) => {
            console.log(res);
            // swal.fire({
            //     title: ,
            //     text: ,
            //     icon: ,
            // })
        })
        .catch((err) => {
            console.log(err);
        });
}
