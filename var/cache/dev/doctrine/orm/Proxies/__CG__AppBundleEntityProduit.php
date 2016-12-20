<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Produit extends \AppBundle\Entity\Produit implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Produit' . "\0" . 'numproduit', '' . "\0" . 'AppBundle\\Entity\\Produit' . "\0" . 'nomproduit', '' . "\0" . 'AppBundle\\Entity\\Produit' . "\0" . 'prix', '' . "\0" . 'AppBundle\\Entity\\Produit' . "\0" . 'qte', '' . "\0" . 'AppBundle\\Entity\\Produit' . "\0" . 'visible'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Produit' . "\0" . 'numproduit', '' . "\0" . 'AppBundle\\Entity\\Produit' . "\0" . 'nomproduit', '' . "\0" . 'AppBundle\\Entity\\Produit' . "\0" . 'prix', '' . "\0" . 'AppBundle\\Entity\\Produit' . "\0" . 'qte', '' . "\0" . 'AppBundle\\Entity\\Produit' . "\0" . 'visible'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Produit $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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
    public function getNumproduit()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getNumproduit();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumproduit', []);

        return parent::getNumproduit();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomproduit($nomproduit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomproduit', [$nomproduit]);

        return parent::setNomproduit($nomproduit);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomproduit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomproduit', []);

        return parent::getNomproduit();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrix($prix)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrix', [$prix]);

        return parent::setPrix($prix);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrix()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrix', []);

        return parent::getPrix();
    }

    /**
     * {@inheritDoc}
     */
    public function setQte($qte)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQte', [$qte]);

        return parent::setQte($qte);
    }

    /**
     * {@inheritDoc}
     */
    public function getQte()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQte', []);

        return parent::getQte();
    }

    /**
     * {@inheritDoc}
     */
    public function setVisible($visible)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVisible', [$visible]);

        return parent::setVisible($visible);
    }

    /**
     * {@inheritDoc}
     */
    public function getVisible()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVisible', []);

        return parent::getVisible();
    }

}
