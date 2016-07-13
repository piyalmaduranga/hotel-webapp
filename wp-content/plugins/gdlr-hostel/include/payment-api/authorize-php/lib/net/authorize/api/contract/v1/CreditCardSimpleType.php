<?php

namespace net\authorize\api\contract\v1;

/**
 * Class representing CreditCardSimpleType
 *
 * 
 * XSD Type: creditCardSimpleType
 */
class CreditCardSimpleType
{

    /**
     * @property string $cardNumber
     */
    private $cardNumber = null;

    /**
     * @property string $expirationDate
     */
    private $expirationDate = null;

    /**
     * @property boolean $paymentToken
     */
    private $paymentToken = null;

    /**
     * Gets as cardNumber
     *
     * @return string
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * Sets a new cardNumber
     *
     * @param string $cardNumber
     * @return self
     */
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;
        return $this;
    }

    /**
     * Gets as expirationDate
     *
     * @return string
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * Sets a new expirationDate
     *
     * @param string $expirationDate
     * @return self
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * Gets as paymentToken
     *
     * @return boolean
     */
    public function getPaymentToken()
    {
        return $this->paymentToken;
    }

    /**
     * Sets a new paymentToken
     *
     * @param boolean $paymentToken
     * @return self
     */
    public function setPaymentToken($paymentToken)
    {
        $this->paymentToken = $paymentToken;
        return $this;
    }


}

