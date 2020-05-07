<?php

if(!function_exists('nickname_hide')) {

    /**
     * 隐藏昵称、手机号
     *
     * @param string $nickname
     * @return string
     */
    function nickname_hide(string $nickname)
    {

        $len = mb_strlen($nickname);
        if ($len == 2) {
            $nickname = mb_substr($nickname,0,1) . '*';
        }elseif ($len == 3) {
            $nickname = mb_substr($nickname,0,1) . '**';
        }elseif ($len == 4) {
            $nickname = mb_substr($nickname,0,2) . '**';
        }elseif ($len == 5) {
            $nickname = mb_substr($nickname,0,2) . '**' . mb_substr($nickname,-1);
        }elseif ($len == 6) {
            $nickname = mb_substr($nickname,0,2) . '***' . mb_substr($nickname,-1);
        }elseif ($len == 7) {
            $nickname = mb_substr($nickname,0,2) . '****' . mb_substr($nickname,-1);
        }elseif ($len == 8 ) {
            $nickname = mb_substr($nickname,0,2) . '****' . mb_substr($nickname,-2);
        }elseif ($len == 9 ) {
            $nickname = mb_substr($nickname,0,3) . '****' . mb_substr($nickname,-2);
        }elseif ($len == 10) {
            $nickname = mb_substr($nickname,0,3) . '****' . mb_substr($nickname,-3);
        }elseif ($len > 10) {
            $star = '';
            for($i=0;$i<$len-7;$i++) {
                $star .= '*';
            }
            $nickname = mb_substr($nickname,0,3) . $star . mb_substr($nickname,-4);
        }
        return $nickname;

    }

}