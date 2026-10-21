<?php
class Checa{
    public static function checarNome($nome){
        if(!preg_match('/^([áÁàÀãÃâÂéÉèÈêÊíÍìÌóÓòÒõÕôÔúÚùÙçÇaA-zZ]+)+((\s[áÁàÀãÃâÂéÉèÈêÊíÍìÌóÓòÒõÕôÔúÚùÙçÇaA-zZ]+)+)?$/', $nome)):
            return true;
        else:
            return false;
        endif;
    }//fim da função checarNome
    
    public static function checarEmail($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
            return true;
        else:
            return false;
        endif;
    }//fim da função checarEmail

    public static function checarMatricula($matricula){
        if(!preg_match('/^[0-9]{13}$/', $matricula)):
            return true;
        else:
            return false;
        endif;
    }//fim da função checarMatricula

    public static function checarSenha($senha){
         if (strlen($senha) < 8 || strlen($senha) > 18):
            return true;
        else:
            return false;
        endif;
    }//fim da função checarSenha
}//fim da classe Checa