
<script>
var base_url="{{asset('/')}}";
		function processSelectedFile(e,t){$("#"+t).val(e)
			// $('#slides_div').append('<div><img src="'+base_url+'/'+e+'"></div>');
			$('#slides_div').append('<div class=" col-md-3 "> <input type="hidden" name="slide[]" value="'+e+'">'
								+'<div class="images-div">'
								+'<div class="img">'
								+'<img src="'+base_url+'/'+e+'" class="img img-thumbnail" >'+
								'</div><div class="image-action" onclick="removeImage(this)"><a  class="btn btn-danger btn-sm"> X </a></div></div></div>');
	}
		$(document).on("click",".popup_selector",function(e){
		e.preventDefault();
		var t=$(this).attr("data-inputid");
		var n="/elfinder/popup/";
		var path=$(this).attr("data-path");
		if(path!=''){
		 n=path+n;
		}

		var r=n+t;
		$.colorbox(
			{href:r,fastIframe:true,iframe:true,width:"70%",height:"75%"}
			)

		})

		function removeImage(id){

			$(id).parent().parent().remove();

		}

		</script>
