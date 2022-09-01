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

$("#saveCompanyDetails").submit(function (e) {
    e.preventDefault();
    alert();

    var formData = new FormData(this);

    $.ajax({
        type: "POST",
        url: "{{ url('save-company-details')}}",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: (data) => {
            this.reset();
            alert("Image has been uploaded using jQuery ajax successfully");
        },
        error: function (data) {
            console.log(data);
        },
    });
});
