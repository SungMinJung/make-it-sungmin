<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attachment;
use App\Http\Traits\AttachmentTrait;

class AttachmentController extends Controller
{
    use AttachmentTrait;

    public function store(Request $request) {
        $attachment = $this->fileUpload($request);
        $return_type = $request->input('return_type');

        if($return_type === 'url') {
            return $request->getSchemeAndHttpHost().$attachment->real_path;
        } else {
            return ['id' =>$attachment->id, 'real_path' => $attachment->real_path, 'file_name' => $attachment->file_name];
        }
    }

    public function show($id) {
        $attachment = Attachment::find($id);
        $str = $attachment->real_path;
        $path = substr($str, 1, strlen($str));

        return response()->download($path, $attachment->file_name);
    }
}
