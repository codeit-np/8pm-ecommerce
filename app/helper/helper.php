<?php

function uploadImage($request,$object,$type)
{
    if($request->hasFile($type)){
        //upload Image to public/images
        $file = $request->$type;
        $newName = time() . "." . $file->getClientOriginalExtension();
        $file->move("images",$newName);
        $object->$type = "images/$newName";
        //save it to table filed called logo
    }
}
