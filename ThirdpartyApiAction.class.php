<?php
    public function dishoutHandle(){
        $data=$_POST?$_POST:$_GET;
        if(!empty($data['orderid']))
        {
            $res=M('dish_order')->where(array('orderid'=>$data['orderid']))->setField('isuse',intval($data['isuse']));
            if($res)
            {
                $return['msg']='success';
            }else{
                $return['msg']='failed';
            }
            header("Content-Type: text/xml; charset=utf-8");
            echo xml_encode($return);
        }
    }

?>
