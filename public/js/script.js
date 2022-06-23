// Call the dataTables jQuery plugin
$(document).ready(function () {
    $("#dataTable thead .searchHeader").each(function () {
        var title = $(this).text();
        if (title == "Verification") {
            $(this).html(`
                <select class="selectVerif">
                <option value="">All</option>
                <option value="Verified">Verified</option>
                <option value="Need to Verification">Need to Verification</option>
                <option value="On Progress">On Progress</option>
                <option value="Cancel">Cancel</option>
                </select>
            `);
        } else if (title == "Verification Date") {
            $(this).html(`
                <input type="date">
            `);
        } else if (title == "User Type") {
            $(this).html(`
                <select class="selectUser">
                    <option value="">All</option>
                    <option value="Buyer">Buyer</option>
                    <option value="Indirect Exportir">Indirect Exportir</option>
                    <option value="Direct Exportir">Direct Exportir</option>
                    <option value="Diaspora">Diaspora</option>
                </select>
            `);
        } else if (title == "Priority") {
            $(this).html(`
                <select class="selectPriority">
                    <option value="">All</option>
                    <option value="High">High</option>
                    <option value="Middle">Middle</option>
                    <option value="Low">Low</option>
                </select>
            `);
        } else if (title == "Application Date") {
            $(this).html(`
                <input type="date">
            `);
        } else if (title == "Status") {
            $(this).html(`
                <select class="selectStatus">
                    <option value="">All</option>
                    <option value="Requested">Requested</option>
                    <option value="On Progress">On Progress</option>
                    <option value="Done">Done</option>
                    <option value="Cancel">Cancel</option>
                </select>
            `);
        } else if (title == "Payment System") {
            $(this).html(`
                <select class="selectPaymentSystem">
                    <option value="">All</option>
                    <option value="LC">LC</option>
                    <option value="TT">TT</option>
                </select>
            `);
        } else if (title == "Payment") {
            $(this).html(`
				<select class="selectPayment">
					<option value="">All</option>
					<option value="LC">LC</option>
					<option value="TT">TT</option>
				</select>
			`);
        } else if (title == "Create Date") {
            $(this).html(`
                <input type="date">
            `);
        } else
            $(this).html(
                '<input size="' +
                    $(this).text().length +
                    '" type="text" placeholder="' +
                    title +
                    '" />'
            );
    });

    $("#dataTable thead .searchHeaderr").each(function () {
        var title = $(this).text();
        if (title == "Status") {
            $(this).html(`
                <select class="selectStatus">
                    <option value="">All</option>
                    <option value="Verified">Verified</option>
                    <option value="Need to Verification">Need to Verification</option>
                </select>
            `);
        } else $(this).html('<input size="' + $(this).text().length + '" type="text" placeholder="' + title + '" />');
    });

    var tabel = $("#dataTable").DataTable({
        initComplete: function () {
            // Apply the search document.getElementById("dataTable_filter").lastChild.children[0].value
            this.api()
                .columns([1, 2, 3, 4, 5, 6, 7, 8, 9])
                .every(function (i) {
                    var that = this;

                    $(
                        "input, select",
                        $("#dataTable thead tr:eq(1) th").eq(i - 1)
                    ).on("keyup change clear", function () {
                        if (that.search() !== this.value) {
                            that.search(this.value).draw();
                        }
                    });
                });
        },
        orderCellsTop: true,
        dom: "Blrtip",
        buttons: [
            {
                extend: "excel",
                className: "dropdown-item",
                text: "Download all data",
                exportOptions: {
                    columns: [1, 2, 3, 4, 5, 6, 7, 8],
                    modifier: {
                        selected: null,
                    },
                },
            },
            {
                extend: "excel",
                className: "dropdown-item",
                text: "Download filtered data",
                exportOptions: {
                    columns: [1, 2, 3, 4, 5, 6, 7, 8],
                    modifier: {
                        selected: true,
                    },
                },
            },
        ],

        select: {
            style: "multi",
        },
    });

    var detailTable = $("#detailTable").DataTable({
        dom: "B",
        buttons: [
            {
                extend: "excel",
                className: "btn btn-outline-primary btn-lg",
                text: "Download Detail Akun",
                exportOptions: {
                    modifier: {
                        selected: null,
                    },
                },
            },
        ],
    });

    if ($("#dataTable").length) {
        tabel.buttons().container().appendTo($(".sekuy"));
        var sekuy = $(".sekuy")[0].children[0].children[0];
        var sekuy2 = $(".sekuy")[0].children[0].children[1];
        if (sekuy) {
            sekuy.classList.remove("dt-button");
        }
        if (sekuy2) {
            sekuy2.classList.remove("dt-button");
        }
    } else if ($("#detailTable").length) {
        detailTable.buttons().container().appendTo($(".detailDonlod"));
        var detailDonlod = $(".detailDonlod")[0].children[0].children[0];
        detailDonlod.classList.remove("dt-button");
    }
});

function sData(check) {
    if (check.children[0].children[0].checked)
        check.children[0].children[0].checked = false;
    else check.children[0].children[0].checked = true;
}

function csData(c) {
    if (c.checked) c.checked = false;
    else c.checked = true;
}

function showImage() {
    $("#showImageHere").html(
        `
    <div class="image-container" id="image-` +
            0 +
            `">
    <img src="` +
            URL.createObjectURL(event.target.files[0]) +
            `" height="150px" width="150px">
    <div class="deleteImage">
        <button type="button" class="btn btn-primary btn-lg detail-button" onclick="deleteImage(` +
            0 +
            `)"><i class="far fa-trash-alt"></i></button>
    </div>
    </div>
    `
    );
    $(".custom-file-label").html(event.target.files[0].name);
}
function deleteImage(no) {
    $("#image-" + no).html(`
        <img src="https://aecsp.qc.ca/wp-content/uploads/2021/03/person_icon-icons.com_50075.png" alt="Admin" class="rounded-circle p-1 " width="150" height="150">
    `);
    $("#uploadImageFile").val("");
    $(".custom-file-label").html("Choose file");
}
function test() {
    console.log("TEST");
}
