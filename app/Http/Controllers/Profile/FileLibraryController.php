<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Model\Attachments;
use Illuminate\Http\Request;

class FileLibraryController extends Controller {
    public function index() {
        $User = auth()->user();

        $ImageType = [
          'png',
          'jpg',
          'gif',
          'jpeg',
        ];

        $DocType = [
          'pdf',
          'rtf',
          'txt',
          'doc',
          'docx',
        ];

        $Attachments = Attachments::where('uid', $User->id)->orderBy('created_at', 'desc')->get()->all();
        $AttachmentsImages = Attachments::where('uid', $User->id)->whereIn('type', $ImageType)->orderBy('created_at', 'desc')->get()->all();
        $AttachmentsDocuments = Attachments::where('uid', $User->id)->whereIn('type', $DocType)->orderBy('created_at', 'desc')->get()->all();

        $Data = [
           'Attachments' ,
           'AttachmentsImages' ,
           'AttachmentsDocuments'
        ];

        return view('site.profile.file-library.index', compact($Data));
    }
}
