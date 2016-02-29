<?php
main();
function alg_sort_asc($arr) {
    echo implode(",",$arr)."\n";
    for($i=1, $len=count($arr);$i<$len;$i++){
        $first   = $i;// the first element idx of elements to sort
        $last    = $i-1;// the last element idx of sorted elemnts 
        if( $arr[$first] >= $arr[$last]) {
            continue;
        } else {
            // insert FIRST to sort the sorted elements
            $x = $arr[$first];
            $pos = -1;
            for($k=0; $k<$first;$k++){
                if( $x < $arr[$k]) {
                    $pos = $k;
                    break;
                }
            }
            for($k=$first;$k>$pos;$k--){
                $arr[$k] = $arr[$k-1];
            }
            $arr[$pos] = $x;
        }
    }
    echo implode(",",$arr)."\n";
}

function alg_sort_asc2($arr){
    echo implode(",",$arr)."\n";
    $len=count($arr);
    $count=0;
    for($i=1; $i<$len;$i++){
        $v = $arr[$i];
        for($k=$i;$k>0;$k--){
            if($arr[$k-1] > $arr[$k]) {
                $count++;
                $v = $arr[$k];
                $arr[$k]=$arr[$k-1];
                $arr[$k-1] = $v;
            }
        }
    }
    echo implode(",",$arr)."\n";
    echo "\t".$count."\n";
}
function main(){
    alg_sort_asc2(explode(",", "1,4,2"));
    alg_sort_asc2(explode(",", "1,4,8,2"));
}


