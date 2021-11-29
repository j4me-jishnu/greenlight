<script>
var response = $("#response").val();
if(response)
{
  console.log(response,'response');
  var options = $.parseJSON(response);
  noty(options);
}
$table = $('#offer').DataTable( {
  "processing": true,
  "serverSide": true,
  "bDestroy" : true,
  "ajax": {
    "url": "<?php echo base_url();?>Administration/getReviews/",
    "type": "POST",
    "data" : function (d) {
    }
  },
  "createdRow": function ( row, data, index ) {

    $table.column(0).nodes().each(function(node,index,dt){
      $table.cell(node).data(index+1);
    });
    // $('td', row).eq(7).html('<center>&nbsp&nbsp&nbsp<a href="<?php echo base_url();?>offerEdit/'+data['off_id']+'"><i class="fa fa-edit iconFontSize-medium" ></i></a>&nbsp;&nbsp;&nbsp;<a onclick="return confirmDelete('+data['off_id']+')"><i class="fa fa-trash-o iconFontSize-medium" ></i></a></center>');
    if (data['review_status'] == 1) {
      $('td', row).eq(7).html('<center><a href="#">&nbsp;&nbsp;Approved &nbsp;&nbsp;&nbsp;</a><div id="app"></center>');
    }
    else if (data['review_status'] == 2) {
      $('td', row).eq(7).html('<center><a href="#">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<font color="red">Rejected</font></a><div id="app"></center>');
    }
    else{
      $('td', row).eq(7).html('<center><a href="<?php echo base_url();?>Administration/approveReviewRequest/'+data['review_id']+'">Approve<a onclick="checkapp('+data['review_id']+')"><div id="cp"></div></a> <a href="<?php echo base_url();?>Administration/rejectReviewRequest/'+data['review_id']+'"><font color="red">Reject</font></a></center><br>');
    }
  },

  "columns": [

    { "data": "first_name", "orderable": true },
    { "data": "first_name", "orderable": false },
    { "data": "sell_name", "orderable": false },
    { "data": "review_product_id", "orderable": false },
    { "data": "review_rating", "orderable": false },
    {
      "data": "review_image",
      "render": function (data, type, full, meta) {
        return "<img src=\"<?php echo base_url() ?>assets/uploads/review_images/"+ data + "\" height=\"30\"  width=\"50\"/>";
      },
      "title": "Image",
      "orderable": true,
      "searchable": true
    },
    { "data": "created_at", "orderable": true },
    { "data": "created_at", "orderable": true },
  ]

} );
function confirmDelete(off_id){
  var conf = confirm("Do you want to Delete Category Details ?");
  if(conf){
    $.ajax({
      url:"<?php echo base_url();?>offerDelete/",
      data:{off_id:off_id},
      method:"POST",
      datatype:"json",
      success:function(data){
        var options = $.parseJSON(data);
        noty(options);
        $table.ajax.reload();
      }
    });

  }
}

</script>
