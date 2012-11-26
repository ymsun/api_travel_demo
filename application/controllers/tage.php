<?php
		require_once('reader.php');
		$read = new Spreadsheet_Excel_Reader();
		$read->setOutputEncoding('utf-8');
		$read->read('application/controllers/ne.xls');
		error_reporting(E_ALL ^ E_NOTICE);
		for ($i = 1; $i <= $read->sheets[0]['numRows']; $i++) {
			for ($j = 2; $j <= $read->sheets[0]['numCols']; $j++) {
				$tage[$read->sheets[0]['cells'][$i][1]]['food'][$read->sheets[0]['cells'][$i][2]]=$read->sheets[0]['cells'][$i][3];
			}
		}
?>
