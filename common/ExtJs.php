<?php
namespace app\common;

class ExtJs
{
    public static function WriteObject($success, $errors =null, $total= null, $msg=null, $data=null)
    {
        $obj= array ('success'=>$success);
        if(!empty($errors)) $obj['errors'] = $errors;
        if(!empty($msg)) $obj['msg'] = $msg;
        if(!empty($total)) $obj['total'] = $total;
        if(!empty($data)) $obj['data'] = $data;
        return json_encode($obj,JSON_UNESCAPED_UNICODE);
    }
    
}

