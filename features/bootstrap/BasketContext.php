<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class BasketContext implements Context, SnippetAcceptingContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given An empty basket
     */
    public function anEmptyBasket()
    {
        $this->basket = new Basket();
    }

    /**
     * @Then The basket price is :arg1 $
     */
    public function theBasketPriceIs($arg1)
    {
        if($this->basket->price() != $arg1){
            throw new Exception('Le prix ne correspond pas');
        }
    }

    /**
     * @Given A product costing :arg1 $ is added to the basket
     */
    public function aProductCostingIsAddedToTheBasket($price)
    {
        $product = new Product($price);
        $this->basket->add($product);
    }
}
