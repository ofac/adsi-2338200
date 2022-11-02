<?php
	class Load {
		public function view($name_view, $data = null) {
			// if (is_array($data)) {
			// 	extract($data);
			// }
			include 'views/' . $name_view;
		}
	}