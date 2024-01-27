<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutgoingCallingPlanDigitPatternOriginatingPermission
 *
 * Indicates whether originating calls using specified digit patterns are permitted.
 *
 * @Groups [{"id":"a63afa661ee5c74f4700e562e88c66d0:1932","type":"sequence"}]
 */
class OutgoingCallingPlanDigitPatternOriginatingPermission
{
    /**
     * @ElementName digitPatternName
     * @Type string
     * @Group a63afa661ee5c74f4700e562e88c66d0:1932
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $digitPatternName = null;

    /**
     * @ElementName permission
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission
     * @Group a63afa661ee5c74f4700e562e88c66d0:1932
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission|null
     */
    protected $permission = null;

    /**
     * Getter for digitPatternName
     *
     * @return string
     */
    public function getDigitPatternName()
    {
        return $this->digitPatternName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->digitPatternName;
    }

    /**
     * Setter for digitPatternName
     *
     * @param string $digitPatternName
     * @return $this
     */
    public function setDigitPatternName($digitPatternName)
    {
        $this->digitPatternName = $digitPatternName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDigitPatternName()
    {
        $this->digitPatternName = null;
        return $this;
    }

    /**
     * Getter for permission
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission
     */
    public function getPermission()
    {
        return $this->permission instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->permission;
    }

    /**
     * Setter for permission
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission $permission
     * @return $this
     */
    public function setPermission(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermission $permission)
    {
        $this->permission = $permission;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPermission()
    {
        $this->permission = null;
        return $this;
    }
}

