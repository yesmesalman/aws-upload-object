<?php
use Aws;

class UploadFile
{
	public static function uploadFile(){
      $s3 = new Aws\S3\S3Client([
          'region'  => 'us-east-1',
          'scheme' => 'http',
          'version' => 'latest',
          'credentials' => [
              'key'    => "API_KEY",
              'secret' => "API_SECRET",
          ]
      ]);
      $result = $s3->putObject([
          'Bucket' => 'optilingo-files',
          'Key'    => "DIRECTORY/FILE_NAME_WITH_EXTENSION",
          'Body'   => 'this is the body!',
          'SourceFile' => 'FILE PATH'
      ]);
      var_dump($result);
    }
}
