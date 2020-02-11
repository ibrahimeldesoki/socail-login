$(document).ready( function () {

$("#users").DataTable({
    responsive: false,
    columnDefs: [{ orderable: false, targets: -1 }]
  });
});
