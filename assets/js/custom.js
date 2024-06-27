// nontaktifkan order di tabel
$.extend( true, $.fn.dataTable.defaults, {
    "searching": true,
    "ordering": false
} );
 
 
$(document).ready(function() {
    $('#zero-conf').DataTable();
} );

// $(document).ready(function() {
//     $('#example').DataTable( {
//         "order": [[ 3, "desc" ]]
//     } );
// } );