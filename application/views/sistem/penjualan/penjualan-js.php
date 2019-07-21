<script>
function getHargaSatuan(baris){
    var id_barang = $("#id_barang"+baris).val();
    $.ajax({
        url:"<?php echo base_url();?>interface/barang/getHargaSatuan",
        data:{id_submit_barang:id_barang},
        type:"POST",
        dataType:"JSON",
        success:function(respond){
            $("#hargaSatuan"+baris).val(addCommas(respond));
        }
    });
}
</script>
<script>
function getSatuan(baris){
    var id_barang = $("#id_barang"+baris).val();
    $.ajax({
        url:"<?php echo base_url();?>interface/barang/getSatuan",
        data:{id_submit_barang:id_barang},
        type:"POST",
        dataType:"JSON",
        success:function(respond){
            $("#satuan"+baris).val(respond);
        }
    });
}
</script>
<script>
function countHargaAkhir(baris){
    var qty = $("#jumlah_item_terjual"+baris).val();
    var harga_satuan = $("#hargaSatuan"+baris).val();
    var harga_satuan = splitter(harga_satuan,",");
    var akhir = parseFloat(qty)*parseInt(harga_satuan);
    $("#harga_akhir_barang"+baris).val(addCommas(akhir));
}
</script>