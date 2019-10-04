<?php

namespace Proxies\__CG__\Mautic\SmsBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Stat extends \Mautic\SmsBundle\Entity\Stat implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Mautic\\SmsBundle\\Entity\\Stat' . "\0" . 'id', '' . "\0" . 'Mautic\\SmsBundle\\Entity\\Stat' . "\0" . 'sms', '' . "\0" . 'Mautic\\SmsBundle\\Entity\\Stat' . "\0" . 'lead', '' . "\0" . 'Mautic\\SmsBundle\\Entity\\Stat' . "\0" . 'list', '' . "\0" . 'Mautic\\SmsBundle\\Entity\\Stat' . "\0" . 'ipAddress', '' . "\0" . 'Mautic\\SmsBundle\\Entity\\Stat' . "\0" . 'dateSent', '' . "\0" . 'Mautic\\SmsBundle\\Entity\\Stat' . "\0" . 'trackingHash', '' . "\0" . 'Mautic\\SmsBundle\\Entity\\Stat' . "\0" . 'source', '' . "\0" . 'Mautic\\SmsBundle\\Entity\\Stat' . "\0" . 'sourceId', '' . "\0" . 'Mautic\\SmsBundle\\Entity\\Stat' . "\0" . 'tokens');
        }

        return array('__isInitialized__', '' . "\0" . 'Mautic\\SmsBundle\\Entity\\Stat' . "\0" . 'id', '' . "\0" . 'Mautic\\SmsBundle\\Entity\\Stat' . "\0" . 'sms', '' . "\0" . 'Mautic\\SmsBundle\\Entity\\Stat' . "\0" . 'lead', '' . "\0" . 'Mautic\\SmsBundle\\Entity\\Stat' . "\0" . 'list', '' . "\0" . 'Mautic\\SmsBundle\\Entity\\Stat' . "\0" . 'ipAddress', '' . "\0" . 'Mautic\\SmsBundle\\Entity\\Stat' . "\0" . 'dateSent', '' . "\0" . 'Mautic\\SmsBundle\\Entity\\Stat' . "\0" . 'trackingHash', '' . "\0" . 'Mautic\\SmsBundle\\Entity\\Stat' . "\0" . 'source', '' . "\0" . 'Mautic\\SmsBundle\\Entity\\Stat' . "\0" . 'sourceId', '' . "\0" . 'Mautic\\SmsBundle\\Entity\\Stat' . "\0" . 'tokens');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Stat $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getSms()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSms', array());

        return parent::getSms();
    }

    /**
     * {@inheritDoc}
     */
    public function setSms(\Mautic\SmsBundle\Entity\Sms $sms)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSms', array($sms));

        return parent::setSms($sms);
    }

    /**
     * {@inheritDoc}
     */
    public function getLead()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLead', array());

        return parent::getLead();
    }

    /**
     * {@inheritDoc}
     */
    public function setLead(\Mautic\LeadBundle\Entity\Lead $lead)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLead', array($lead));

        return parent::setLead($lead);
    }

    /**
     * {@inheritDoc}
     */
    public function getList()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getList', array());

        return parent::getList();
    }

    /**
     * {@inheritDoc}
     */
    public function setList(\Mautic\LeadBundle\Entity\LeadList $list)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setList', array($list));

        return parent::setList($list);
    }

    /**
     * {@inheritDoc}
     */
    public function getIpAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIpAddress', array());

        return parent::getIpAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setIpAddress(\Mautic\CoreBundle\Entity\IpAddress $ipAddress)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIpAddress', array($ipAddress));

        return parent::setIpAddress($ipAddress);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateSent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateSent', array());

        return parent::getDateSent();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateSent($dateSent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateSent', array($dateSent));

        return parent::setDateSent($dateSent);
    }

    /**
     * {@inheritDoc}
     */
    public function getTrackingHash()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTrackingHash', array());

        return parent::getTrackingHash();
    }

    /**
     * {@inheritDoc}
     */
    public function setTrackingHash($trackingHash)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTrackingHash', array($trackingHash));

        return parent::setTrackingHash($trackingHash);
    }

    /**
     * {@inheritDoc}
     */
    public function getSource()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSource', array());

        return parent::getSource();
    }

    /**
     * {@inheritDoc}
     */
    public function setSource($source)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSource', array($source));

        return parent::setSource($source);
    }

    /**
     * {@inheritDoc}
     */
    public function getSourceId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSourceId', array());

        return parent::getSourceId();
    }

    /**
     * {@inheritDoc}
     */
    public function setSourceId($sourceId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSourceId', array($sourceId));

        return parent::setSourceId($sourceId);
    }

    /**
     * {@inheritDoc}
     */
    public function getTokens()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTokens', array());

        return parent::getTokens();
    }

    /**
     * {@inheritDoc}
     */
    public function setTokens(array $tokens)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTokens', array($tokens));

        return parent::setTokens($tokens);
    }

}
