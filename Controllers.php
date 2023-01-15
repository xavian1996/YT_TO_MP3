<?php

class YTDownloader
{
	public $vid_id = null;

	public function Download($video_id)
	{
		if (isset($_POST['download'])) 
		{
		
			$this->vid_id = $video_id;

			$curl = curl_init();

			curl_setopt_array($curl, [
				CURLOPT_URL => "https://youtube-mp36.p.rapidapi.com/dl?id=".$this->vid_id,
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_FOLLOWLOCATION => true,
				CURLOPT_ENCODING => "",
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 30,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => "GET",
				CURLOPT_HTTPHEADER => [
					"X-RapidAPI-Host: youtube-mp36.p.rapidapi.com",
					"X-RapidAPI-Key: YOUR X-RAPIDAPI KEY HERE"
				],
			]);

			$response = curl_exec($curl);
			$err = curl_error($curl);

			curl_close($curl);

			if ($err) {
				echo "cURL Error #:" . $err;
			} else {
				//converting result into json
				$result = json_decode($response,true);

				
		
			echo '
			<center>
			<div class="alert alert-dark" role="alert">
			<span class="badge bg-primary">Download Link : </span>
			<br>
			<b>Video Title </b>: '.$result['title'].'
			<br>
			<br>
			<a href='.$result['link'].' class="btn btn-primary">Click Here If The Download Didnt Start .</a>
			</div>
			</center>
			';
			}
		}
	}
}