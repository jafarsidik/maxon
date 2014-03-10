<script src="<?=base_url();?>js/lib.js"></script>
<?php echo validation_errors(); ?>
<?php 
    if($mode=='view'){
            echo form_open('cash_mutasi/update','id=myform name=myform');
            $disabled='disable';
    } else {
            $disabled='';
            echo form_open('cash_mutasi/add','id=myform name=myform'); 
    }
?>

   <div class='box6x'><h1>MUTASI ANTAR REKENING</h1>
   <table>
	<tr>
		<td>Voucher</td><td>
		<?php
		if($mode=='view'){
			echo $voucher;
			echo form_hidden('voucher',$voucher);
		} else { 
			echo form_input('voucher',$voucher);
		}		
		?></td>
	</tr>	 
       <tr>
            <td>Jenis</td><td>
                <?php echo form_radio('trans_type','cash trx',$trans_type=='cash trx');?>Cash
                <?php echo form_radio('trans_type','cheque trx',$trans_type=='cheque trx');?>Giro/Cek
                <?php echo form_radio('trans_type','trans trx',$trans_type=='trans trx');?>Transfer
            </td>
       </tr>
       <tr>
            <td>Tanggal</td><td><?php echo form_input('check_date',$check_date);?></td>
       </tr>
       <tr>
            <td>Sumber Rekening</td><td><?php echo form_dropdown( 'account_number',
                    $account_number_list,$account_number);?></td>
       </tr>
       <tr>
            <td>Operator</td><td><?php echo form_input('payee',$payee);?></td>
       </tr>
       <tr>
            <td>Tujuan Rekening</td><td><?php echo form_dropdown( 'supplier_number',
                    $account_number_list,$supplier_number);?></td>
       </tr>
       <tr>
            <td>Jumlah</td><td><?php echo form_input('payment_amount',$payment_amount);?></td>
       </tr>
       <tr>
            <td>Keterangan</td><td><?php echo form_input('memo',$memo,"style='width:300px'");?></td>
       </tr>
 	 
	 <tr><td>
            <a href="#" class="easyui-linkbutton" 
                  data-options="iconCls:'icon-save'"
                  onclick='save_this()'
                  >Save</a>	 
	 </td><td>&nbsp;</td></tr>
   </table>
<?
echo form_close();
?>
<script type="text/javascript">
    function save_this(){
        if($('#voucher').val()===''){alert('Isi kode voucher !');return false;};
        if($('#trans_type').val()===''){alert('Isi jenis penerimaan !');return false;};
       $('#myform').submit();
    }
</script>  

 