<?php
error_reporting(E_ALL ^ E_NOTICE);
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 24/01/2019
 * Time: 13:21
 */

class Calcul
{
    public function makeClc($_abs, $_ord) {
        // Cas particuliers
        if($_abs === 0 && $_abs === $_ord) {
            return 1;
            // !is_int($_abs) || is_int($_ord)
        } elseif ($_abs > $_ord) {
            return 'ERROR:: Abscissa is greater than ordinate ¯\_(ツ)_/¯';
        } elseif(is_float($_abs) || is_float ($_ord)) {
           return 'ERROR:: Float number';
        }

        // Ord, Abs
        $res[0][0] = 1;
        for( $i = 1; $i <= $_ord ; $i++ )
        {
            $res[$i][0] = 1;
            for( $j = 1; $j <= $i ; $j++ )
            {
                $res[$i][$j] = $res[$i-1][$j-1] + $res[$i-1][$j];
            }
        }
        return $res[$_ord][$_abs];
    }

}
