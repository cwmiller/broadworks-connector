<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutgoingCallingPlanOriginatingPermissions
 *
 * Outgoing Calling Plan originating call permissions.
 */
class OutgoingCallingPlanOriginatingPermissions
{

    /**
     * @ElementName group
     * @var string|null
     */
    private $group = null;

    /**
     * @ElementName local
     * @var string|null
     */
    private $local = null;

    /**
     * @ElementName tollFree
     * @var string|null
     */
    private $tollFree = null;

    /**
     * @ElementName toll
     * @var string|null
     */
    private $toll = null;

    /**
     * @ElementName international
     * @var string|null
     */
    private $international = null;

    /**
     * @ElementName operatorAssisted
     * @var string|null
     */
    private $operatorAssisted = null;

    /**
     * @ElementName chargeableDirectoryAssisted
     * @var string|null
     */
    private $chargeableDirectoryAssisted = null;

    /**
     * @ElementName specialServicesI
     * @var string|null
     */
    private $specialServicesI = null;

    /**
     * @ElementName specialServicesII
     * @var string|null
     */
    private $specialServicesII = null;

    /**
     * @ElementName premiumServicesI
     * @var string|null
     */
    private $premiumServicesI = null;

    /**
     * @ElementName premiumServicesII
     * @var string|null
     */
    private $premiumServicesII = null;

    /**
     * @ElementName casual
     * @var string|null
     */
    private $casual = null;

    /**
     * @ElementName urlDialing
     * @var string|null
     */
    private $urlDialing = null;

    /**
     * @ElementName unknown
     * @var string|null
     */
    private $unknown = null;

    /**
     * Getter for group
     *
     * @ElementName group
     * @return string|null
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Setter for group
     *
     * @ElementName group
     * @param string|null $group
     * @return $this
     */
    public function setGroup($group)
    {
        $this->group = $group;
        return $this;
    }

    /**
     * Getter for local
     *
     * @ElementName local
     * @return string|null
     */
    public function getLocal()
    {
        return $this->local;
    }

    /**
     * Setter for local
     *
     * @ElementName local
     * @param string|null $local
     * @return $this
     */
    public function setLocal($local)
    {
        $this->local = $local;
        return $this;
    }

    /**
     * Getter for tollFree
     *
     * @ElementName tollFree
     * @return string|null
     */
    public function getTollFree()
    {
        return $this->tollFree;
    }

    /**
     * Setter for tollFree
     *
     * @ElementName tollFree
     * @param string|null $tollFree
     * @return $this
     */
    public function setTollFree($tollFree)
    {
        $this->tollFree = $tollFree;
        return $this;
    }

    /**
     * Getter for toll
     *
     * @ElementName toll
     * @return string|null
     */
    public function getToll()
    {
        return $this->toll;
    }

    /**
     * Setter for toll
     *
     * @ElementName toll
     * @param string|null $toll
     * @return $this
     */
    public function setToll($toll)
    {
        $this->toll = $toll;
        return $this;
    }

    /**
     * Getter for international
     *
     * @ElementName international
     * @return string|null
     */
    public function getInternational()
    {
        return $this->international;
    }

    /**
     * Setter for international
     *
     * @ElementName international
     * @param string|null $international
     * @return $this
     */
    public function setInternational($international)
    {
        $this->international = $international;
        return $this;
    }

    /**
     * Getter for operatorAssisted
     *
     * @ElementName operatorAssisted
     * @return string|null
     */
    public function getOperatorAssisted()
    {
        return $this->operatorAssisted;
    }

    /**
     * Setter for operatorAssisted
     *
     * @ElementName operatorAssisted
     * @param string|null $operatorAssisted
     * @return $this
     */
    public function setOperatorAssisted($operatorAssisted)
    {
        $this->operatorAssisted = $operatorAssisted;
        return $this;
    }

    /**
     * Getter for chargeableDirectoryAssisted
     *
     * @ElementName chargeableDirectoryAssisted
     * @return string|null
     */
    public function getChargeableDirectoryAssisted()
    {
        return $this->chargeableDirectoryAssisted;
    }

    /**
     * Setter for chargeableDirectoryAssisted
     *
     * @ElementName chargeableDirectoryAssisted
     * @param string|null $chargeableDirectoryAssisted
     * @return $this
     */
    public function setChargeableDirectoryAssisted($chargeableDirectoryAssisted)
    {
        $this->chargeableDirectoryAssisted = $chargeableDirectoryAssisted;
        return $this;
    }

    /**
     * Getter for specialServicesI
     *
     * @ElementName specialServicesI
     * @return string|null
     */
    public function getSpecialServicesI()
    {
        return $this->specialServicesI;
    }

    /**
     * Setter for specialServicesI
     *
     * @ElementName specialServicesI
     * @param string|null $specialServicesI
     * @return $this
     */
    public function setSpecialServicesI($specialServicesI)
    {
        $this->specialServicesI = $specialServicesI;
        return $this;
    }

    /**
     * Getter for specialServicesII
     *
     * @ElementName specialServicesII
     * @return string|null
     */
    public function getSpecialServicesII()
    {
        return $this->specialServicesII;
    }

    /**
     * Setter for specialServicesII
     *
     * @ElementName specialServicesII
     * @param string|null $specialServicesII
     * @return $this
     */
    public function setSpecialServicesII($specialServicesII)
    {
        $this->specialServicesII = $specialServicesII;
        return $this;
    }

    /**
     * Getter for premiumServicesI
     *
     * @ElementName premiumServicesI
     * @return string|null
     */
    public function getPremiumServicesI()
    {
        return $this->premiumServicesI;
    }

    /**
     * Setter for premiumServicesI
     *
     * @ElementName premiumServicesI
     * @param string|null $premiumServicesI
     * @return $this
     */
    public function setPremiumServicesI($premiumServicesI)
    {
        $this->premiumServicesI = $premiumServicesI;
        return $this;
    }

    /**
     * Getter for premiumServicesII
     *
     * @ElementName premiumServicesII
     * @return string|null
     */
    public function getPremiumServicesII()
    {
        return $this->premiumServicesII;
    }

    /**
     * Setter for premiumServicesII
     *
     * @ElementName premiumServicesII
     * @param string|null $premiumServicesII
     * @return $this
     */
    public function setPremiumServicesII($premiumServicesII)
    {
        $this->premiumServicesII = $premiumServicesII;
        return $this;
    }

    /**
     * Getter for casual
     *
     * @ElementName casual
     * @return string|null
     */
    public function getCasual()
    {
        return $this->casual;
    }

    /**
     * Setter for casual
     *
     * @ElementName casual
     * @param string|null $casual
     * @return $this
     */
    public function setCasual($casual)
    {
        $this->casual = $casual;
        return $this;
    }

    /**
     * Getter for urlDialing
     *
     * @ElementName urlDialing
     * @return string|null
     */
    public function getUrlDialing()
    {
        return $this->urlDialing;
    }

    /**
     * Setter for urlDialing
     *
     * @ElementName urlDialing
     * @param string|null $urlDialing
     * @return $this
     */
    public function setUrlDialing($urlDialing)
    {
        $this->urlDialing = $urlDialing;
        return $this;
    }

    /**
     * Getter for unknown
     *
     * @ElementName unknown
     * @return string|null
     */
    public function getUnknown()
    {
        return $this->unknown;
    }

    /**
     * Setter for unknown
     *
     * @ElementName unknown
     * @param string|null $unknown
     * @return $this
     */
    public function setUnknown($unknown)
    {
        $this->unknown = $unknown;
        return $this;
    }


}

