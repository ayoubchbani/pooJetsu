<?php 
 
 class Cart {

    private ?int $quatity;
    private float $totalPrice ;

    public function __construct(int $quatity ,float $totalPrice)
    {
        $this->quatity = $quatity;
        $this->totalPrice = $totalPrice;
    }

    //Getter
    public function getTotalPrice():float{
        return $this->totalPrice;
    }

    //Setter
    public function setTotalPrice(float $price):void{
        $this->totalPrice  = $price ; 
    }

    public function discount(float $discount):void{
        $this->totalPrice -= $this->totalPrice*($discount/100);
    }
}