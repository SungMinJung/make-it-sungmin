<?php

namespace App\Http\Traits;

use App\Attachment;
use Illuminate\Support\Facades\Storage;

trait AttachmentTrait {

  public function fileUpload($request, $name='file') {
    $dateString = "public/".date("Y/m/d", time());
    $file = $request->file($name);
    $path = $file->store($dateString);

    $attachment = new Attachment;
    $attachment->file_name  = $file->getClientOriginalName();
    $attachment->real_path  = Storage::url($path);
    $attachment->file_size  = Storage::size($path);
    try {
      $attachment->mime = $file->getMimeType();
    } catch (\Exception $e) {
      $attachment->mime = $file->getClientMimeType();
    }

    $attachment->storage    = 'local';
    $attachment->save();

    return $attachment;
  }
}
