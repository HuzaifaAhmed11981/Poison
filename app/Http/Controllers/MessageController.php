<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
class MessageController extends Controller
{
    public function Message(){
        $data = Message::paginate() ;
        return view('admin.message.index',compact('data'));
    }
    public function MessageDelete($delete_id){
        Message::find($delete_id)->delete();
        toasterSuccess("Data Deleted Successfully");
        return redirect()->back();
    }
}
