<?php
header("Content-Type: text/html; charset=UTF-8");
/*
$group = array(
    'Ray',
    'Linus',
    'Mon',
    'Leo',
    'JJ',
    'Jason'
);
*/
if ("0106" == date('md')) {
    echo "壽星最大，今天里歐可以自己決定誰去叫里歐跟里歐說生日快樂~~~";
    exit;
}
$group = $_POST['group'];
$who = getPersonWhoAskLeoToDo($group);

switch ($who) {
    case 'Leo':
        $result = "里歐你就認份點，別再叫大家抽了，自己站出來吧~_~";
        break;
    case 'JJ':
        $result = "就是你了" . $who . "，麻煩你進行一個叫里歐去的動作吧！";
        break;
    case 'Shawn':
        $result = "基本上就是你了" . $who . "，麻煩你叫里歐去吧！";
        break;
    case 'Caroline':
        $result = "就決定是你了" . $who . "，麻煩你叫里歐去吧！(阿久：杯~~必~~~)";
        break;
    default:
        $result = "就決定是你了" . $who . "，麻煩你叫里歐去吧！";
}

echo $result;

function getPersonWhoAskLeoToDo($group)
{
    shuffle($group);
    list($is_you) = $group;

    return $is_you;
}
