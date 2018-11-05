<?php

namespace App;

class Customer
{
    private $_name;
    private $_rentals = [];

    public function __construct(string $name)
    {
        $this->_name = $name;
    }

    public function addRental(Rental $arg): void
    {
        array_push($this->_rentals, $arg);
    }

    public function getName(): string
    {
        return $this->_name;
    }

    public function statement(): string
    {
        $totalAmount = 0;
        $frequentRenterPoints = 0;
        $result = 'Rental Record for ' . $this->getName() . "\n";

        foreach($this->_rentals as $rental){
            $thisAmount = 0;
            switch($rental->getMovie()->getPriceCode()){
                case Movie::REGULAR:
                    $thisAmount += 2;
                    if ($rental->getDaysRented() > 2){
                        $thisAmount += ($rental->getDaysRented() - 2) * 1.5;
                    }
                    break;
                case Movie::NEW_RELEASE:
                    $thisAmount += $rental->getDaysRented() * 3;
                    break;
                case Movie::CHILDREN:
                    $thisAmount += 1.5;
                    if ($rental->getDaysRented() > 3){
                        $thisAmount += ($rental->getDaysRented() - 3) * 1.5;
                    }
                    break;
            }

            $frequentRenterPoints++;

            if ($rental->getMovie()->getPriceCode() == Movie::NEW_RELEASE && $rental->getDaysRented() > 1){
                $frequentRenterPoints++;
            }

            $result .= "\t" . $rental->getMovie()->getTitle() . "\t" . $thisAmount . "\n";

            $totalAmount += $thisAmount;
        }

        $result .= "Amount owed is " . $totalAmount . "\n" .
                   "You earned " . $frequentRenterPoints . " frequent renter points";


        return $result;
    }
}
