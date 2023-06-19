function tree($data,$p_id=0){
        foreach($data as $row){
            if($row['pid']==$p_id){
                $tmp = $this->tree($data,$row['id']);
                if($tmp){
                    $row['child']=$tmp;
                }else{
                    $row['leaf'] = true;
                }
                $tree[]=$row;                
            }
        }
        Return $tree;
    }
