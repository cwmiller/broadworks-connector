<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutgoingCallingPlanCallMeNowPermissionsModify
 *
 * Modify outgoing Calling Plan for Call Me Now call permissions.
 */
class OutgoingCallingPlanCallMeNowPermissionsModify
{

    /**
     * @ElementName group
     * @var bool|null
     */
    private $group = null;

    /**
     * @ElementName local
     * @var bool|null
     */
    private $local = null;

    /**
     * @ElementName tollFree
     * @var bool|null
     */
    private $tollFree = null;

    /**
     * @ElementName toll
     * @var bool|null
     */
    private $toll = null;

    /**
     * @ElementName international
     * @var bool|null
     */
    private $international = null;

    /**
     * @ElementName operatorAssisted
     * @var bool|null
     */
    private $operatorAssisted = null;

    /**
     * @ElementName chargeableDirectoryAssisted
     * @var bool|null
     */
    private $chargeableDirectoryAssisted = null;

    /**
     * @ElementName specialServicesI
     * @var bool|null
     */
    private $specialServicesI = null;

    /**
     * @ElementName specialServicesII
     * @var bool|null
     */
    private $specialServicesII = null;

    /**
     * @ElementName premiumServicesI
     * @var bool|null
     */
    private $premiumServicesI = null;

    /**
     * @ElementName premiumServicesII
     * @var bool|null
     */
    private $premiumServicesII = null;

    /**
     * @ElementName casual
     * @var bool|null
     */
    private $casual = null;

    /**
     * @ElementName urlDialing
     * @var bool|null
     */
    private $urlDialing = null;

    /**
     * @ElementName unknown
     * @var bool|null
     */
    private $unknown = null;

    /**
     * Getter for group
     *
     * @ElementName group
     * @return bool|null
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Setter for group
     *
     * @ElementName group
     * @param bool|null $group
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
     * @return bool|null
     */
    public function getLocal()
    {
        return $this->local;
    }

    /**
     * Setter for local
     *
     * @ElementName local
     * @param bool|null $local
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
     * @return bool|null
     */
    public function getTollFree()
    {
        return $this->tollFree;
    }

    /**
     * Setter for tollFree
     *
     * @ElementName tollFree
     * @param bool|null $tollFree
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
     * @return bool|null
     */
    public function getToll()
    {
        return $this->toll;
    }

    /**
     * Setter for toll
     *
     * @ElementName toll
     * @param bool|null $toll
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
     * @return bool|null
     */
    public function getInternational()
    {
        return $this->international;
    }

    /**
     * Setter for international
     *
     * @ElementName international
     * @param bool|null $international
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
     * @return bool|null
     */
    public function getOperatorAssisted()
    {
        return $this->operatorAssisted;
    }

    /**
     * Setter for operatorAssisted
     *
     * @ElementName operatorAssisted
     * @param bool|null $operatorAssisted
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
     * @return bool|null
     */
    public function getChargeableDirectoryAssisted()
    {
        return $this->chargeableDirectoryAssisted;
    }

    /**
     * Setter for chargeableDirectoryAssisted
     *
     * @ElementName chargeableDirectoryAssisted
     * @param bool|null $chargeableDirectoryAssisted
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
     * @return bool|null
     */
    public function getSpecialServicesI()
    {
        return $this->specialServicesI;
    }

    /**
     * Setter for specialServicesI
     *
     * @ElementName specialServicesI
     * @param bool|null $specialServicesI
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
     * @return bool|null
     */
    public function getSpecialServicesII()
    {
        return $this->specialServicesII;
    }

    /**
     * Setter for specialServicesII
     *
     * @ElementName specialServicesII
     * @param bool|null $specialServicesII
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
     * @return bool|null
     */
    public function getPremiumServicesI()
    {
        return $this->premiumServicesI;
    }

    /**
     * Setter for premiumServicesI
     *
     * @ElementName premiumServicesI
     * @param bool|null $premiumServicesI
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
     * @return bool|null
     */
    public function getPremiumServicesII()
    {
        return $this->premiumServicesII;
    }

    /**
     * Setter for premiumServicesII
     *
     * @ElementName premiumServicesII
     * @param bool|null $premiumServicesII
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
     * @return bool|null
     */
    public function getCasual()
    {
        return $this->casual;
    }

    /**
     * Setter for casual
     *
     * @ElementName casual
     * @param bool|null $casual
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
     * @return bool|null
     */
    public function getUrlDialing()
    {
        return $this->urlDialing;
    }

    /**
     * Setter for urlDialing
     *
     * @ElementName urlDialing
     * @param bool|null $urlDialing
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
     * @return bool|null
     */
    public function getUnknown()
    {
        return $this->unknown;
    }

    /**
     * Setter for unknown
     *
     * @ElementName unknown
     * @param bool|null $unknown
     * @return $this
     */
    public function setUnknown($unknown)
    {
        $this->unknown = $unknown;
        return $this;
    }


}

