<script>
var response = $("#response").val();
if(response)
{
  var options = $.parseJSON(response);
  noty(options);
}
$table = $('#employee').DataTable( {
  "processing": true,
  "serverSide": true,
  "bDestroy" : true,
  "ajax": {
    "url": "<?php echo base_url();?>getSubscriptionCharges/",
    "type": "POST",
    "data" : function (d) {
    }
  },
  "createdRow": function ( row, data, index ) {

    $table.column(0).nodes().each(function(node,index,dt){
      $table.cell(node).data(index+1);
    });
    console.log(data['subscription_status']);
    $('td', row).eq(6).html('<center><a href="<?php echo base_url();?>Administration/SubscriptionChargesEdit/'+data['subp_id']+'"><i class="fa fa-edit iconFontSize-medium" ></i></a>&nbsp;&nbsp;&nbsp;<a onclick="return confirmDelete('+data['subp_id']+')"><i class="fa fa-trash-o iconFontSize-medium" ></i></a></center>');
    if(data['subscription_status']==1){
      $('td', row).eq(7).html('<center><button type="button" onclick="change_status(this)" data-id="'+data['subp_id']+'" data-status="'+data['subscription_status']+'" class="btn btn-success">Turn OFF</button></center>');
    }
    else{
      $('td', row).eq(7).html('<center><button type="button" onclick="change_status(this)" data-id="'+data['subp_id']+'" data-status="'+data['subscription_status']+'" class="btn btn-danger">Turn ON</button></center>');
    }
  },

  "columns": [

    { "data": "subp_status", "orderable": true },
    { "data": "subp_name", "orderable": false },
    { "data": "subp_price", "orderable": true },
    { "data": "subp_val", "orderable": false },
    { "data": "subp_ads_no", "orderable": false },
    { "data": "subp_entered_date", "orderable": false },
    { "data": "subp_id", "orderable": true },
    { "data": "subp_id", "orderable": true },

  ]

} );
function confirmDelete(subp_id){
  var conf = confirm("Do you want to Delete Subscription Charges Details ?");
  if(conf){
    $.ajax({
      url:"<?php echo base_url();?>SubscriptionChargesDelete/",
      data:{subp_id:subp_id},
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

function change_status(status){
  $.ajax({
    url:"<?php echo base_url();?>Administration/ChangeSubscriptionStatus/",
    data:{
      id:status.getAttribute("data-id"),
      status:status.getAttribute("data-status")
    },
    method:"POST",
    datatype:"json",
    success:function(data){
      var result = JSON.parse(data);
      if(result.status){
        location.reload();
      }
    }
  });
}

</script>
