<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutgoingCallingPlanOriginatingPermissions
 *
 * Outgoing Calling Plan originating call permissions.
 *
 * @Groups [{"id":"6f793dfca9bd3d121bb35e0f9cf1cb2e:2040","type":"sequence"}]
 */
class OutgoingCallingPlanOriginatingPermissions
{

    /**
     * @ElementName group
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:2040
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null
     */
    private $group = null;

    /**
     * @ElementName local
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:2040
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null
     */
    private $local = null;

    /**
     * @ElementName tollFree
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:2040
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null
     */
    private $tollFree = null;

    /**
     * @ElementName toll
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:2040
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null
     */
    private $toll = null;

    /**
     * @ElementName international
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:2040
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null
     */
    private $international = null;

    /**
     * @ElementName operatorAssisted
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:2040
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null
     */
    private $operatorAssisted = null;

    /**
     * @ElementName chargeableDirectoryAssisted
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:2040
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null
     */
    private $chargeableDirectoryAssisted = null;

    /**
     * @ElementName specialServicesI
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:2040
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null
     */
    private $specialServicesI = null;

    /**
     * @ElementName specialServicesII
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:2040
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null
     */
    private $specialServicesII = null;

    /**
     * @ElementName premiumServicesI
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:2040
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null
     */
    private $premiumServicesI = null;

    /**
     * @ElementName premiumServicesII
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:2040
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null
     */
    private $premiumServicesII = null;

    /**
     * @ElementName casual
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:2040
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null
     */
    private $casual = null;

    /**
     * @ElementName urlDialing
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:2040
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null
     */
    private $urlDialing = null;

    /**
     * @ElementName unknown
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:2040
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null
     */
    private $unknown = null;

    /**
     * Getter for group
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission
     */
    public function getGroup()
    {
        return $this->group instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->group;
    }

    /**
     * Setter for group
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission $group
     * @return $this
     */
    public function setGroup(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission $group)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission
     */
    public function getLocal()
    {
        return $this->local instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->local;
    }

    /**
     * Setter for local
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission $local
     * @return $this
     */
    public function setLocal(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission $local)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission
     */
    public function getTollFree()
    {
        return $this->tollFree instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->tollFree;
    }

    /**
     * Setter for tollFree
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission $tollFree
     * @return $this
     */
    public function setTollFree(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission $tollFree)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission
     */
    public function getToll()
    {
        return $this->toll instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->toll;
    }

    /**
     * Setter for toll
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission $toll
     * @return $this
     */
    public function setToll(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission $toll)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission
     */
    public function getInternational()
    {
        return $this->international instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->international;
    }

    /**
     * Setter for international
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission $international
     * @return $this
     */
    public function setInternational(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission $international)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission
     */
    public function getOperatorAssisted()
    {
        return $this->operatorAssisted instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->operatorAssisted;
    }

    /**
     * Setter for operatorAssisted
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission $operatorAssisted
     * @return $this
     */
    public function setOperatorAssisted(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission $operatorAssisted)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission
     */
    public function getChargeableDirectoryAssisted()
    {
        return $this->chargeableDirectoryAssisted instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->chargeableDirectoryAssisted;
    }

    /**
     * Setter for chargeableDirectoryAssisted
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission $chargeableDirectoryAssisted
     * @return $this
     */
    public function setChargeableDirectoryAssisted(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission $chargeableDirectoryAssisted)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission
     */
    public function getSpecialServicesI()
    {
        return $this->specialServicesI instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->specialServicesI;
    }

    /**
     * Setter for specialServicesI
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission $specialServicesI
     * @return $this
     */
    public function setSpecialServicesI(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission $specialServicesI)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission
     */
    public function getSpecialServicesII()
    {
        return $this->specialServicesII instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->specialServicesII;
    }

    /**
     * Setter for specialServicesII
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission $specialServicesII
     * @return $this
     */
    public function setSpecialServicesII(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission $specialServicesII)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission
     */
    public function getPremiumServicesI()
    {
        return $this->premiumServicesI instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->premiumServicesI;
    }

    /**
     * Setter for premiumServicesI
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission $premiumServicesI
     * @return $this
     */
    public function setPremiumServicesI(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission $premiumServicesI)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission
     */
    public function getPremiumServicesII()
    {
        return $this->premiumServicesII instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->premiumServicesII;
    }

    /**
     * Setter for premiumServicesII
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission $premiumServicesII
     * @return $this
     */
    public function setPremiumServicesII(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission $premiumServicesII)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission
     */
    public function getCasual()
    {
        return $this->casual instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->casual;
    }

    /**
     * Setter for casual
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission $casual
     * @return $this
     */
    public function setCasual(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission $casual)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission
     */
    public function getUrlDialing()
    {
        return $this->urlDialing instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->urlDialing;
    }

    /**
     * Setter for urlDialing
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission $urlDialing
     * @return $this
     */
    public function setUrlDialing(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission $urlDialing)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission
     */
    public function getUnknown()
    {
        return $this->unknown instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->unknown;
    }

    /**
     * Setter for unknown
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission $unknown
     * @return $this
     */
    public function setUnknown(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission $unknown)
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

