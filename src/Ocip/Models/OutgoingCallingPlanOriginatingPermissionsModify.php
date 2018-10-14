<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutgoingCallingPlanOriginatingPermissionsModify
 *
 * Outgoing Calling Plan originating call permissions.
 */
class OutgoingCallingPlanOriginatingPermissionsModify
{

    /**
     * @ElementName group
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null
     */
    private $group = null;

    /**
     * @ElementName local
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null
     */
    private $local = null;

    /**
     * @ElementName tollFree
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null
     */
    private $tollFree = null;

    /**
     * @ElementName toll
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null
     */
    private $toll = null;

    /**
     * @ElementName international
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null
     */
    private $international = null;

    /**
     * @ElementName operatorAssisted
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null
     */
    private $operatorAssisted = null;

    /**
     * @ElementName chargeableDirectoryAssisted
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null
     */
    private $chargeableDirectoryAssisted = null;

    /**
     * @ElementName specialServicesI
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null
     */
    private $specialServicesI = null;

    /**
     * @ElementName specialServicesII
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null
     */
    private $specialServicesII = null;

    /**
     * @ElementName premiumServicesI
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null
     */
    private $premiumServicesI = null;

    /**
     * @ElementName premiumServicesII
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null
     */
    private $premiumServicesII = null;

    /**
     * @ElementName casual
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null
     */
    private $casual = null;

    /**
     * @ElementName urlDialing
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null
     */
    private $urlDialing = null;

    /**
     * @ElementName unknown
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null
     */
    private $unknown = null;

    /**
     * Getter for group
     *
     * @ElementName group
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Setter for group
     *
     * @ElementName group
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null $group
     * @return $this
     */
    public function setGroup(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission $group)
    {
        $this->group = $group;
        return $this;
    }

    /**
     * Getter for local
     *
     * @ElementName local
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null
     */
    public function getLocal()
    {
        return $this->local;
    }

    /**
     * Setter for local
     *
     * @ElementName local
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null $local
     * @return $this
     */
    public function setLocal(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission $local)
    {
        $this->local = $local;
        return $this;
    }

    /**
     * Getter for tollFree
     *
     * @ElementName tollFree
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null
     */
    public function getTollFree()
    {
        return $this->tollFree;
    }

    /**
     * Setter for tollFree
     *
     * @ElementName tollFree
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null $tollFree
     * @return $this
     */
    public function setTollFree(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission $tollFree)
    {
        $this->tollFree = $tollFree;
        return $this;
    }

    /**
     * Getter for toll
     *
     * @ElementName toll
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null
     */
    public function getToll()
    {
        return $this->toll;
    }

    /**
     * Setter for toll
     *
     * @ElementName toll
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null $toll
     * @return $this
     */
    public function setToll(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission $toll)
    {
        $this->toll = $toll;
        return $this;
    }

    /**
     * Getter for international
     *
     * @ElementName international
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null
     */
    public function getInternational()
    {
        return $this->international;
    }

    /**
     * Setter for international
     *
     * @ElementName international
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null $international
     * @return $this
     */
    public function setInternational(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission $international)
    {
        $this->international = $international;
        return $this;
    }

    /**
     * Getter for operatorAssisted
     *
     * @ElementName operatorAssisted
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null
     */
    public function getOperatorAssisted()
    {
        return $this->operatorAssisted;
    }

    /**
     * Setter for operatorAssisted
     *
     * @ElementName operatorAssisted
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null $operatorAssisted
     * @return $this
     */
    public function setOperatorAssisted(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission $operatorAssisted)
    {
        $this->operatorAssisted = $operatorAssisted;
        return $this;
    }

    /**
     * Getter for chargeableDirectoryAssisted
     *
     * @ElementName chargeableDirectoryAssisted
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null
     */
    public function getChargeableDirectoryAssisted()
    {
        return $this->chargeableDirectoryAssisted;
    }

    /**
     * Setter for chargeableDirectoryAssisted
     *
     * @ElementName chargeableDirectoryAssisted
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null $chargeableDirectoryAssisted
     * @return $this
     */
    public function setChargeableDirectoryAssisted(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission $chargeableDirectoryAssisted)
    {
        $this->chargeableDirectoryAssisted = $chargeableDirectoryAssisted;
        return $this;
    }

    /**
     * Getter for specialServicesI
     *
     * @ElementName specialServicesI
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null
     */
    public function getSpecialServicesI()
    {
        return $this->specialServicesI;
    }

    /**
     * Setter for specialServicesI
     *
     * @ElementName specialServicesI
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null $specialServicesI
     * @return $this
     */
    public function setSpecialServicesI(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission $specialServicesI)
    {
        $this->specialServicesI = $specialServicesI;
        return $this;
    }

    /**
     * Getter for specialServicesII
     *
     * @ElementName specialServicesII
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null
     */
    public function getSpecialServicesII()
    {
        return $this->specialServicesII;
    }

    /**
     * Setter for specialServicesII
     *
     * @ElementName specialServicesII
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null $specialServicesII
     * @return $this
     */
    public function setSpecialServicesII(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission $specialServicesII)
    {
        $this->specialServicesII = $specialServicesII;
        return $this;
    }

    /**
     * Getter for premiumServicesI
     *
     * @ElementName premiumServicesI
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null
     */
    public function getPremiumServicesI()
    {
        return $this->premiumServicesI;
    }

    /**
     * Setter for premiumServicesI
     *
     * @ElementName premiumServicesI
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null $premiumServicesI
     * @return $this
     */
    public function setPremiumServicesI(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission $premiumServicesI)
    {
        $this->premiumServicesI = $premiumServicesI;
        return $this;
    }

    /**
     * Getter for premiumServicesII
     *
     * @ElementName premiumServicesII
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null
     */
    public function getPremiumServicesII()
    {
        return $this->premiumServicesII;
    }

    /**
     * Setter for premiumServicesII
     *
     * @ElementName premiumServicesII
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null $premiumServicesII
     * @return $this
     */
    public function setPremiumServicesII(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission $premiumServicesII)
    {
        $this->premiumServicesII = $premiumServicesII;
        return $this;
    }

    /**
     * Getter for casual
     *
     * @ElementName casual
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null
     */
    public function getCasual()
    {
        return $this->casual;
    }

    /**
     * Setter for casual
     *
     * @ElementName casual
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null $casual
     * @return $this
     */
    public function setCasual(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission $casual)
    {
        $this->casual = $casual;
        return $this;
    }

    /**
     * Getter for urlDialing
     *
     * @ElementName urlDialing
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null
     */
    public function getUrlDialing()
    {
        return $this->urlDialing;
    }

    /**
     * Setter for urlDialing
     *
     * @ElementName urlDialing
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null $urlDialing
     * @return $this
     */
    public function setUrlDialing(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission $urlDialing)
    {
        $this->urlDialing = $urlDialing;
        return $this;
    }

    /**
     * Getter for unknown
     *
     * @ElementName unknown
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null
     */
    public function getUnknown()
    {
        return $this->unknown;
    }

    /**
     * Setter for unknown
     *
     * @ElementName unknown
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null $unknown
     * @return $this
     */
    public function setUnknown(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission $unknown)
    {
        $this->unknown = $unknown;
        return $this;
    }


}

