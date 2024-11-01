// $(document).ready(function(){var $btn_compare=$('.btn-compare');var get_checked_id=function(e){var array=[];var count=0;$(".action--compare-add .checkbox:checked").each(function(){count++;if(count>4){alert('Cannot add more than 4 products to Compare');return!1}
// if(count>0){$btn_compare.show()}
// if(count==0||count==null){$btn_compare.hide()}
// array.push(this.value);$btn_compare.text('COMPARE ('+count+')')});if(count==0){$btn_compare.hide()}
// var ids=array.join(",");if(ids&&count>1){$btn_compare.attr('href',base_url+'compare?products='+ids)}};$(".checkbox").on("click",get_checked_id)}); 


$(document).ready(function(){var base_url=''; var $btn_compare=$('.btn-compare');var get_checked_id=function(e){var array=[];var count=0;$(".action--compare-add .checkbox:checked").each(function(){count++;if(count>4){alert('Cannot add more than 4 products to Compare');return!1}

if(count>0){$btn_compare.show()}

if(count==0||count==null){$btn_compare.hide()}

array.push(this.value);$btn_compare.text('COMPARE ('+count+')')});if(count==0){$btn_compare.hide()}

var ids=array.join(",");if(ids&&count>1){$btn_compare.attr('href',base_url+'compare?products='+ids)}};$(".checkbox").on("click",get_checked_id)}); 
