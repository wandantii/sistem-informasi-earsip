$(document).ready(function (){
    $("#manageMemberTable").DataTable({         
        "oLanguage": {
          "sLengthMenu" : "Tampilkan _MENU_ data per halaman",
          "sSearch" : "Pencarian :",
          "sZeroRecords" : "Data tidak ditemukan",
          "sInfo" : "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
          "sInfoEmpty" : "Menampilkan 0 sampai 0 dari 0 data",
          "sInfoFiltered" : "disaring dari _MAX_ total data",
          "oPaginate" : {
              "sPrevious" : "Sebelumnya",
              "sNext" : "Selanjutnya"
          }
        }
    });
});
