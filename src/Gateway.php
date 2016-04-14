<?php

namespace Omnipay\Oxigen;

use Omnipay\Common\AbstractGateway;


class Gateway extends AbstractGateway
{
    public function getName()
    {
        return 'Oxigen';
    }

    public function getDefaultParameters()
    {
        return array(
            
        );
    }

    public function getMID()
    {
        return $this->getParameter('MID');
    }

    public function setMID($value)
    {
        return $this->setParameter('MID', $value);
    }

    public function getSmer()
    {
        return $this->getParameter('Smer');
    }

    public function setSmer($value)
    {
        return $this->setParameter('Smer', $value);
    }

    public function getMtrxid()
    {
        return $this->getParameter('Mtrxid');
    }

    public function setMtrxid($value)
    {
        return $this->setParameter('Mtrxid', $value);
    }

    public function getMitem()
    {
        return $this->getParameter('Mitem');
    }

    public function setMitem($value)
    {
        return $this->setParameter('Mitem', $value);
    }

    public function getAmount()
    {
        return $this->getParameter('Amount');
    }

    public function setAmount($value)
    {
        return $this->setParameter('Amount', $value);
    }

    public function getRedirectUrl()
    {
        return $this->getParameter('redirecturl');
    }

    public function setRedirectUrl($value)
    {
        return $this->setParameter('redirecturl', $value);
    }

    public function getOtherVals()
    {
        return $this->getParameter('Othervals');
    }

    public function setOtherVals($value)
    {
        return $this->setParameter('Othervals', $value);
    }
}
