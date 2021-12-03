<script>

// var response = $("#participants").val();
// $table = $('#offer').DataTable( {
//   "processing": true,
//   "serverSide": true,
//   "bDestroy" : true,
//   "ajax": {
//     "url": "<?php echo base_url();?>Administration/getAllEventParticipants/",
//     "type": "POST",
//     "data" : function (d) {
//       console.log(d);
//     }
//   },
//   "createdRow": function ( row, data, index ) {
//     $table.column(0).nodes().each(function(node,index,dt){
//       $table.cell(node).data(index+1);
//     });
//   },
//   "columns": [
//     { "data": "part_user_full_name", "orderable": true },
//     { "data": "part_user_full_name", "orderable": false },
//   ]
// });

$table=$('#participants').DataTable({
  "processing": true,
  "serverSide": true,
  "bDestroy": true,
  "ajax":{
    "url":"<?php echo base_url(); ?>Administration/getAllEventParticipants/",
    "type":"POST",
    "dataSrc": "Data",
    "data":function(d){
      console.log(d);
    }
  },
  "createdRow": function (row,data,index){
    $table.column(0).nodes().each(function(node,index,dt){
      $table.cell(node).data(index+1);
      // console.log(data);
    });
  },

  "columns":[
    {"data":"part_id", "orderable": true },
    {"data":"part_id", "orderable": true },
  ]
});
</script>
