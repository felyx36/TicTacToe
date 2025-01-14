<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class CopyrightController extends Controller
{
    public const HEADER = "
.-----. _            .-----.                .-----.
`-. .-':_;           `-. .-'                `-. .-'
  : :  .-. .--.  _____ : : .--.   .--.  _____ : : .--.  .--.
  : :  : :'  ..':_____:: :' .; ; '  ..':_____:: :' .; :' '_.'
  :_;  :_;`.__.'       :_;`.__,_;`.__.'       :_;`.__.'`.__.'
        ";

    // Generated with  https://patorjk.com/software/taag/
    public const COPYRIGHT = "
 ___                 .-.           ___                  ___        ___                  
(   )               /    \        (   ) .-.            (   )      (   )                 
 | |.-.  ___  ___   | .`. ;  .--.  | | ( __) ___  ___   | |  .--.  | | .-.   ___ .-.    
 | /   \(   )(   )  | |(___)/    \ | | ('' )(   )(   )  | | /    \ | |/   \ (   )   \   
 |  .-. || |  | |   | |_   |  .-. ;| |  | |  | |  | |   | ||  .-. ;|  .-. .  | ' .-. ;  
 | |  | || |  | |  (   __) |  | | || |  | |   \ `' /    | || |  | || |  | |  |  / (___) 
 | |  | || '  | |   | |    |  |/  || |  | |   / ,. \    | || |  | || |  | |  | |        
 | |  | |'  `-' |   | |    |  ' _.'| |  | |  ' .  ; .   | || |  | || |  | |  | |        
 | '  | | `.__. |   | |    |  .'.-.| |  | |  | |  | |   | || '  | || |  | |  | |        
 ' `-' ;  ___ | |   | |    '  `-' /| |  | |  | |  | |   | |'  `-' /| |  | |  | |        
  `.__.  (   )' |  (___)    `.__.'(___)(___)(___)(___) (___)`.__.'(___)(___)(___)       
          ; `-' '                                                                       
           .__.'                                                                        
        ";

    static public function getCopyright(): string
    {
        return self::HEADER . self::COPYRIGHT;
    }

    static public function showCopyright(): Response
    {
        return response( self::getCopyright() )->header('Content-Type', 'text/plain');
    }
}
