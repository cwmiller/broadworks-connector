<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterModifyDNISParametersRequest
 *
 * Modify the setting that are configured for all the DNIS in a Call Center.
 *       The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:5116","type":"sequence"}]
 */
class GroupCallCenterModifyDNISParametersRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 4d65d3449061c568639c8cc1e2492285:5116
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

    /**
     * @ElementName displayDNISNumber
     * @Type bool
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:5116
     * @var bool|null
     */
    protected $displayDNISNumber = null;

    /**
     * @ElementName displayDNISName
     * @Type bool
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:5116
     * @var bool|null
     */
    protected $displayDNISName = null;

    /**
     * @ElementName promoteCallsFromPriority1to0
     * @Type bool
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:5116
     * @var bool|null
     */
    protected $promoteCallsFromPriority1to0 = null;

    /**
     * @ElementName promoteCallsFromPriority2to1
     * @Type bool
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:5116
     * @var bool|null
     */
    protected $promoteCallsFromPriority2to1 = null;

    /**
     * @ElementName promoteCallsFromPriority3to2
     * @Type bool
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:5116
     * @var bool|null
     */
    protected $promoteCallsFromPriority3to2 = null;

    /**
     * @ElementName promoteCallsFromPriority1to0Seconds
     * @Type int
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:5116
     * @MinInclusive 1
     * @MaxInclusive 1800
     * @var int|null
     */
    protected $promoteCallsFromPriority1to0Seconds = null;

    /**
     * @ElementName promoteCallsFromPriority2to1Seconds
     * @Type int
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:5116
     * @MinInclusive 1
     * @MaxInclusive 1800
     * @var int|null
     */
    protected $promoteCallsFromPriority2to1Seconds = null;

    /**
     * @ElementName promoteCallsFromPriority3to2Seconds
     * @Type int
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:5116
     * @MinInclusive 1
     * @MaxInclusive 1800
     * @var int|null
     */
    protected $promoteCallsFromPriority3to2Seconds = null;

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }

    /**
     * Getter for displayDNISNumber
     *
     * @return bool
     */
    public function getDisplayDNISNumber()
    {
        return $this->displayDNISNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->displayDNISNumber;
    }

    /**
     * Setter for displayDNISNumber
     *
     * @param bool $displayDNISNumber
     * @return $this
     */
    public function setDisplayDNISNumber($displayDNISNumber)
    {
        $this->displayDNISNumber = $displayDNISNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDisplayDNISNumber()
    {
        $this->displayDNISNumber = null;
        return $this;
    }

    /**
     * Getter for displayDNISName
     *
     * @return bool
     */
    public function getDisplayDNISName()
    {
        return $this->displayDNISName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->displayDNISName;
    }

    /**
     * Setter for displayDNISName
     *
     * @param bool $displayDNISName
     * @return $this
     */
    public function setDisplayDNISName($displayDNISName)
    {
        $this->displayDNISName = $displayDNISName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDisplayDNISName()
    {
        $this->displayDNISName = null;
        return $this;
    }

    /**
     * Getter for promoteCallsFromPriority1to0
     *
     * @return bool
     */
    public function getPromoteCallsFromPriority1to0()
    {
        return $this->promoteCallsFromPriority1to0 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->promoteCallsFromPriority1to0;
    }

    /**
     * Setter for promoteCallsFromPriority1to0
     *
     * @param bool $promoteCallsFromPriority1to0
     * @return $this
     */
    public function setPromoteCallsFromPriority1to0($promoteCallsFromPriority1to0)
    {
        $this->promoteCallsFromPriority1to0 = $promoteCallsFromPriority1to0;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPromoteCallsFromPriority1to0()
    {
        $this->promoteCallsFromPriority1to0 = null;
        return $this;
    }

    /**
     * Getter for promoteCallsFromPriority2to1
     *
     * @return bool
     */
    public function getPromoteCallsFromPriority2to1()
    {
        return $this->promoteCallsFromPriority2to1 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->promoteCallsFromPriority2to1;
    }

    /**
     * Setter for promoteCallsFromPriority2to1
     *
     * @param bool $promoteCallsFromPriority2to1
     * @return $this
     */
    public function setPromoteCallsFromPriority2to1($promoteCallsFromPriority2to1)
    {
        $this->promoteCallsFromPriority2to1 = $promoteCallsFromPriority2to1;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPromoteCallsFromPriority2to1()
    {
        $this->promoteCallsFromPriority2to1 = null;
        return $this;
    }

    /**
     * Getter for promoteCallsFromPriority3to2
     *
     * @return bool
     */
    public function getPromoteCallsFromPriority3to2()
    {
        return $this->promoteCallsFromPriority3to2 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->promoteCallsFromPriority3to2;
    }

    /**
     * Setter for promoteCallsFromPriority3to2
     *
     * @param bool $promoteCallsFromPriority3to2
     * @return $this
     */
    public function setPromoteCallsFromPriority3to2($promoteCallsFromPriority3to2)
    {
        $this->promoteCallsFromPriority3to2 = $promoteCallsFromPriority3to2;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPromoteCallsFromPriority3to2()
    {
        $this->promoteCallsFromPriority3to2 = null;
        return $this;
    }

    /**
     * Getter for promoteCallsFromPriority1to0Seconds
     *
     * @return int
     */
    public function getPromoteCallsFromPriority1to0Seconds()
    {
        return $this->promoteCallsFromPriority1to0Seconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->promoteCallsFromPriority1to0Seconds;
    }

    /**
     * Setter for promoteCallsFromPriority1to0Seconds
     *
     * @param int $promoteCallsFromPriority1to0Seconds
     * @return $this
     */
    public function setPromoteCallsFromPriority1to0Seconds($promoteCallsFromPriority1to0Seconds)
    {
        $this->promoteCallsFromPriority1to0Seconds = $promoteCallsFromPriority1to0Seconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPromoteCallsFromPriority1to0Seconds()
    {
        $this->promoteCallsFromPriority1to0Seconds = null;
        return $this;
    }

    /**
     * Getter for promoteCallsFromPriority2to1Seconds
     *
     * @return int
     */
    public function getPromoteCallsFromPriority2to1Seconds()
    {
        return $this->promoteCallsFromPriority2to1Seconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->promoteCallsFromPriority2to1Seconds;
    }

    /**
     * Setter for promoteCallsFromPriority2to1Seconds
     *
     * @param int $promoteCallsFromPriority2to1Seconds
     * @return $this
     */
    public function setPromoteCallsFromPriority2to1Seconds($promoteCallsFromPriority2to1Seconds)
    {
        $this->promoteCallsFromPriority2to1Seconds = $promoteCallsFromPriority2to1Seconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPromoteCallsFromPriority2to1Seconds()
    {
        $this->promoteCallsFromPriority2to1Seconds = null;
        return $this;
    }

    /**
     * Getter for promoteCallsFromPriority3to2Seconds
     *
     * @return int
     */
    public function getPromoteCallsFromPriority3to2Seconds()
    {
        return $this->promoteCallsFromPriority3to2Seconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->promoteCallsFromPriority3to2Seconds;
    }

    /**
     * Setter for promoteCallsFromPriority3to2Seconds
     *
     * @param int $promoteCallsFromPriority3to2Seconds
     * @return $this
     */
    public function setPromoteCallsFromPriority3to2Seconds($promoteCallsFromPriority3to2Seconds)
    {
        $this->promoteCallsFromPriority3to2Seconds = $promoteCallsFromPriority3to2Seconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPromoteCallsFromPriority3to2Seconds()
    {
        $this->promoteCallsFromPriority3to2Seconds = null;
        return $this;
    }
}

