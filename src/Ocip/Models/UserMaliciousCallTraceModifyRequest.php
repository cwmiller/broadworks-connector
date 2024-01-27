<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMaliciousCallTraceModifyRequest
 *
 * Modify the user level data associated with Malicious Call Trace.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"be7f3162f133f8d7fcc75e712b0258e6:187","type":"sequence"}]
 */
class UserMaliciousCallTraceModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group be7f3162f133f8d7fcc75e712b0258e6:187
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group be7f3162f133f8d7fcc75e712b0258e6:187
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName traceTypeSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MaliciousCallTraceCallTypeSelection
     * @Optional
     * @Group be7f3162f133f8d7fcc75e712b0258e6:187
     * @var \CWM\BroadWorksConnector\Ocip\Models\MaliciousCallTraceCallTypeSelection|null
     */
    protected $traceTypeSelection = null;

    /**
     * @ElementName traceForTimePeriod
     * @Type bool
     * @Optional
     * @Group be7f3162f133f8d7fcc75e712b0258e6:187
     * @var bool|null
     */
    protected $traceForTimePeriod = null;

    /**
     * @ElementName traceTimePeriod
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MaliciousCallTraceTimePeriod
     * @Nillable
     * @Optional
     * @Group be7f3162f133f8d7fcc75e712b0258e6:187
     * @var \CWM\BroadWorksConnector\Ocip\Models\MaliciousCallTraceTimePeriod|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $traceTimePeriod = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

    /**
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }

    /**
     * Getter for traceTypeSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MaliciousCallTraceCallTypeSelection
     */
    public function getTraceTypeSelection()
    {
        return $this->traceTypeSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->traceTypeSelection;
    }

    /**
     * Setter for traceTypeSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MaliciousCallTraceCallTypeSelection $traceTypeSelection
     * @return $this
     */
    public function setTraceTypeSelection(\CWM\BroadWorksConnector\Ocip\Models\MaliciousCallTraceCallTypeSelection $traceTypeSelection)
    {
        $this->traceTypeSelection = $traceTypeSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTraceTypeSelection()
    {
        $this->traceTypeSelection = null;
        return $this;
    }

    /**
     * Getter for traceForTimePeriod
     *
     * @return bool
     */
    public function getTraceForTimePeriod()
    {
        return $this->traceForTimePeriod instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->traceForTimePeriod;
    }

    /**
     * Setter for traceForTimePeriod
     *
     * @param bool $traceForTimePeriod
     * @return $this
     */
    public function setTraceForTimePeriod($traceForTimePeriod)
    {
        $this->traceForTimePeriod = $traceForTimePeriod;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTraceForTimePeriod()
    {
        $this->traceForTimePeriod = null;
        return $this;
    }

    /**
     * Getter for traceTimePeriod
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MaliciousCallTraceTimePeriod|null
     */
    public function getTraceTimePeriod()
    {
        return $this->traceTimePeriod instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->traceTimePeriod;
    }

    /**
     * Setter for traceTimePeriod
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MaliciousCallTraceTimePeriod|null $traceTimePeriod
     * @return $this
     */
    public function setTraceTimePeriod(\CWM\BroadWorksConnector\Ocip\Models\MaliciousCallTraceTimePeriod $traceTimePeriod = null)
    {
        if ($traceTimePeriod === null) {
            $this->traceTimePeriod = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->traceTimePeriod = $traceTimePeriod;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTraceTimePeriod()
    {
        $this->traceTimePeriod = null;
        return $this;
    }
}

