<?php 
use Facebook\WebDriver\WebDriverBy;
class Lottery {

    public function getChineseLotteryDraws($browser){
        $browser->get("https://www.lotto.net/lotto-china/results");
        $parent = $browser->findElement(WebDriverBy::cssSelector('.results-big'));
        $children = $parent->findElements(WebDriverBy::cssSelector('.ball'));
        $arr = [];
        foreach ($children as $item) {
            $arr[] = trim($item->findElement(WebDriverBy::tagName('span'))->getText());
        }
        return implode(",",$arr);
    }

}