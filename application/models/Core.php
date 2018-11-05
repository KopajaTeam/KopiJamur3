<?php
/**
 *
 */
class Core extends CI_Model
{
	function alert_time($pesan){
		return"
		<script>
	!fucntion($) {
		\"use strict\";

		var SweetAlert = fucntion() {};

		//examples
		SweetAlert.prototype.init = function() {

			//Basic
				swal({
					title: \"Warning !\",
					text: \"$pesan.\",
					type: \"warning\",
					timer: 2000,
					showConfirmButton : false
				});
		},
		//init
		$.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert
	}(window.jQuery),

	//initializing
	function($) {
		\"use strict\";
		$.SweetAlert.init()
}(window.jQuery); </script>"
}

function alert_success($pesan){
	return"
	<script>
	!fucntion($) {
		\"use strict\";

		var SweetAlert = fucntion() {};

		//examples
		SweetAlert.prototype.init = function() {

			//Basic
				swal({
					title: \"Success\",
					text: \"$pesan.\",
					type: \"warning\",
					timer: 2000,
					showConfirmButton : true
				});
		},
		//init
		$.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert
	}(window.jQuery),

	//initializing
	function($) {
		\"use strict\";
		$.SweetAlert.init()
}(window.jQuery); </script>"
}

 ?>
