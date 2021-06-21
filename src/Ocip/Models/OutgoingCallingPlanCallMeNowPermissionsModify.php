<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutgoingCallingPlanCallMeNowPermissionsModify
 *
 * Modify outgoing Calling Plan for Call Me Now call permissions.
 *
 * @Groups [{"id":"6f793dfca9bd3d121bb35e0f9cf1cb2e:1798","type":"sequence"}]
 */
class OutgoingCallingPlanCallMeNowPermissionsModify
{

    /**
     * @ElementName group
     * @Type bool
     * @Optional
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:1798
     * @var bool|null
     */
    private $group = null;

    /**
     * @ElementName local
     * @Type bool
     * @Optional
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:1798
     * @var bool|null
     */
    private $local = null;

    /**
     * @ElementName tollFree
     * @Type bool
     * @Optional
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:1798
     * @var bool|null
     */
    private $tollFree = null;

    /**
     * @ElementName toll
     * @Type bool
     * @Optional
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:1798
     * @var bool|null
     */
    private $toll = null;

    /**
     * @ElementName international
     * @Type bool
     * @Optional
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:1798
     * @var bool|null
     */
    private $international = null;

    /**
     * @ElementName operatorAssisted
     * @Type bool
     * @Optional
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:1798
     * @var bool|null
     */
    private $operatorAssisted = null;

    /**
     * @ElementName chargeableDirectoryAssisted
     * @Type bool
     * @Optional
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:1798
     * @var bool|null
     */
    private $chargeableDirectoryAssisted = null;

    /**
     * @ElementName specialServicesI
     * @Type bool
     * @Optional
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:1798
     * @var bool|null
     */
    private $specialServicesI = null;

    /**
     * @ElementName specialServicesII
     * @Type bool
     * @Optional
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:1798
     * @var bool|null
     */
    private $specialServicesII = null;

    /**
     * @ElementName premiumServicesI
     * @Type bool
     * @Optional
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:1798
     * @var bool|null
     */
    private $premiumServicesI = null;

    /**
     * @ElementName premiumServicesII
     * @Type bool
     * @Optional
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:1798
     * @var bool|null
     */
    private $premiumServicesII = null;

    /**
     * @ElementName casual
     * @Type bool
     * @Optional
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:1798
     * @var bool|null
     */
    private $casual = null;

    /**
     * @ElementName urlDialing
     * @Type bool
     * @Optional
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:1798
     * @var bool|null
     */
    private $urlDialing = null;

    /**
     * @ElementName unknown
     * @Type bool
     * @Optional
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:1798
     * @var bool|null
     */
    private $unknown = null;

    /**
     * Getter for group
     *
     * @return bool
     */
    public function getGroup()
    {
        return $this->group instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->group;
    }

    /**
     * Setter for group
     *
     * @param bool $group
     * @return $this
     */
    public function setGroup($group)
    {
        $this->group = $group;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroup()
    {
        $this->group = null;
        return $this;
    }

    /**
     * Getter for local
     *
     * @return bool
     */
    public function getLocal()
    {
        return $this->local instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->local;
    }

    /**
     * Setter for local
     *
     * @param bool $local
     * @return $this
     */
    public function setLocal($local)
    {
        $this->local = $local;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLocal()
    {
        $this->local = null;
        return $this;
    }

    /**
     * Getter for tollFree
     *
     * @return bool
     */
    public function getTollFree()
    {
        return $this->tollFree instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->tollFree;
    }

    /**
     * Setter for tollFree
     *
     * @param bool $tollFree
     * @return $this
     */
    public function setTollFree($tollFree)
    {
        $this->tollFree = $tollFree;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTollFree()
    {
        $this->tollFree = null;
        return $this;
    }

    /**
     * Getter for toll
     *
     * @return bool
     */
    public function getToll()
    {
        return $this->toll instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->toll;
    }

    /**
     * Setter for toll
     *
     * @param bool $toll
     * @return $this
     */
    public function setToll($toll)
    {
        $this->toll = $toll;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetToll()
    {
        $this->toll = null;
        return $this;
    }

    /**
     * Getter for international
     *
     * @return bool
     */
    public function getInternational()
    {
        return $this->international instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->international;
    }

    /**
     * Setter for international
     *
     * @param bool $international
     * @return $this
     */
    public function setInternational($international)
    {
        $this->international = $international;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetInternational()
    {
        $this->international = null;
        return $this;
    }

    /**
     * Getter for operatorAssisted
     *
     * @return bool
     */
    public function getOperatorAssisted()
    {
        return $this->operatorAssisted instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->operatorAssisted;
    }

    /**
     * Setter for operatorAssisted
     *
     * @param bool $operatorAssisted
     * @return $this
     */
    public function setOperatorAssisted($operatorAssisted)
    {
        $this->operatorAssisted = $operatorAssisted;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOperatorAssisted()
    {
        $this->operatorAssisted = null;
        return $this;
    }

    /**
     * Getter for chargeableDirectoryAssisted
     *
     * @return bool
     */
    public function getChargeableDirectoryAssisted()
    {
        return $this->chargeableDirectoryAssisted instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->chargeableDirectoryAssisted;
    }

    /**
     * Setter for chargeableDirectoryAssisted
     *
     * @param bool $chargeableDirectoryAssisted
     * @return $this
     */
    public function setChargeableDirectoryAssisted($chargeableDirectoryAssisted)
    {
        $this->chargeableDirectoryAssisted = $chargeableDirectoryAssisted;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetChargeableDirectoryAssisted()
    {
        $this->chargeableDirectoryAssisted = null;
        return $this;
    }

    /**
     * Getter for specialServicesI
     *
     * @return bool
     */
    public function getSpecialServicesI()
    {
        return $this->specialServicesI instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->specialServicesI;
    }

    /**
     * Setter for specialServicesI
     *
     * @param bool $specialServicesI
     * @return $this
     */
    public function setSpecialServicesI($specialServicesI)
    {
        $this->specialServicesI = $specialServicesI;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSpecialServicesI()
    {
        $this->specialServicesI = null;
        return $this;
    }

    /**
     * Getter for specialServicesII
     *
     * @return bool
     */
    public function getSpecialServicesII()
    {
        return $this->specialServicesII instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->specialServicesII;
    }

    /**
     * Setter for specialServicesII
     *
     * @param bool $specialServicesII
     * @return $this
     */
    public function setSpecialServicesII($specialServicesII)
    {
        $this->specialServicesII = $specialServicesII;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSpecialServicesII()
    {
        $this->specialServicesII = null;
        return $this;
    }

    /**
     * Getter for premiumServicesI
     *
     * @return bool
     */
    public function getPremiumServicesI()
    {
        return $this->premiumServicesI instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->premiumServicesI;
    }

    /**
     * Setter for premiumServicesI
     *
     * @param bool $premiumServicesI
     * @return $this
     */
    public function setPremiumServicesI($premiumServicesI)
    {
        $this->premiumServicesI = $premiumServicesI;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPremiumServicesI()
    {
        $this->premiumServicesI = null;
        return $this;
    }

    /**
     * Getter for premiumServicesII
     *
     * @return bool
     */
    public function getPremiumServicesII()
    {
        return $this->premiumServicesII instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->premiumServicesII;
    }

    /**
     * Setter for premiumServicesII
     *
     * @param bool $premiumServicesII
     * @return $this
     */
    public function setPremiumServicesII($premiumServicesII)
    {
        $this->premiumServicesII = $premiumServicesII;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPremiumServicesII()
    {
        $this->premiumServicesII = null;
        return $this;
    }

    /**
     * Getter for casual
     *
     * @return bool
     */
    public function getCasual()
    {
        return $this->casual instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->casual;
    }

    /**
     * Setter for casual
     *
     * @param bool $casual
     * @return $this
     */
    public function setCasual($casual)
    {
        $this->casual = $casual;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCasual()
    {
        $this->casual = null;
        return $this;
    }

    /**
     * Getter for urlDialing
     *
     * @return bool
     */
    public function getUrlDialing()
    {
        return $this->urlDialing instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->urlDialing;
    }

    /**
     * Setter for urlDialing
     *
     * @param bool $urlDialing
     * @return $this
     */
    public function setUrlDialing($urlDialing)
    {
        $this->urlDialing = $urlDialing;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUrlDialing()
    {
        $this->urlDialing = null;
        return $this;
    }

    /**
     * Getter for unknown
     *
     * @return bool
     */
    public function getUnknown()
    {
        return $this->unknown instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->unknown;
    }

    /**
     * Setter for unknown
     *
     * @param bool $unknown
     * @return $this
     */
    public function setUnknown($unknown)
    {
        $this->unknown = $unknown;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUnknown()
    {
        $this->unknown = null;
        return $this;
    }


}

