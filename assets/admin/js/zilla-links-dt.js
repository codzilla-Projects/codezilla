$(document).ready(function() {
    $('#codzillaLinksTable').DataTable( {
        "scrollX": true,
        dom: 'Blfrtip',
        buttons: [
            {
                extend : 'pdfHtml5',
                title : "Codezilla Websites links ",
                orientation : 'landscape',
                pageSize : 'LEGAL',
                pageSize : 'A0',
/*                exportOptions: {
                    columns: [ 0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30 ]
                }
*/           },
            {
                extend : 'print',
                title : "Codezilla Websites links",
            },
            {
                extend : 'excel',
                title : "Codezilla Websites links",
            },
            {
                extend : 'csv',
                title : "Codezilla Websites links",
            },
            {
                extend : 'copy',
                title : "Codezilla Websites links",
            },
        ],
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]  
    });
});
/*$(document).ready(function() {


 

    $('#ordersTable').DataTable( {

        dom: 'Bfrtip',

        buttons: [

            $.extend( true, {}, buttonCommon, {

                extend: 'copyHtml5'

            } ),

            $.extend( true, {}, buttonCommon, {

                extend: 'excelHtml5'

            } ),

            $.extend( true, {}, buttonCommon, {

                extend: 'pdfHtml5'

            } )

        ]

    } );

} );*/