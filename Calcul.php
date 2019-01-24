<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 24/01/2019
 * Time: 13:21
 */

class Calcul
{
//    private $_abs;
//    private $_ord;
//
//    /**
//     * Calcul constructor.
//     * @param $_abs
//     * @param $_ord
//     */
//    public function __construct($_abs, $_ord)
//    {
//        $this->_abs = $_abs;
//        $this->_ord = $_ord;
//    }


    public function makeClc($_abs, $_ord) {

        // Cas particuliers
        if($_abs === 0 && $_abs === $_ord) {
            return 1;
        } elseif ($_abs > $_ord || !is_int($_abs) || is_int($_ord)) {
            return 'err';
        }

        // makeClc(2, 5) = makeClc(2, 4) + makeClc(1, 4)
        // if ord = 2 & abs = 1
        $test = [
            1 => 1,
            2 => 3
        ];
        foreach($test as $cle=>$valeur){
            echo $cle;
            echo $valeur;
        }
        echo 'lel';
//        for($i = 0; $i < $_ord ; $i++) {
//            if($_ord) = 1
//        }

    }

}