<?php

class IllnessDataTableSeeder extends Seeder {

	public function run()
	{
		$handle = fopen('app/storage/illnessesDescription.csv', 'r');
		$row = 0;
		while($rowOfData = fgetcsv($handle)) {
			$row++;

			if ($row == 1) {
				continue;
			}

			$illnessData = new IllnessData();

			$illnessData->title 			= $rowOfData[0];
			$illnessData->description		= $rowOfData[1];
			$illnessData->depth_description = $rowOfData[2];
			$illnessData->symptoms			= $rowOfData[3];
			$illnessData->diagnosis			= $rowOfData[4];
			$illnessData->timestamps        = false;
			$illnessData->save();
		}
	}

}