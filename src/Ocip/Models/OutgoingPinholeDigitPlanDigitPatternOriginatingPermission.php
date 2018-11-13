<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutgoingPinholeDigitPlanDigitPatternOriginatingPermission
 *
 * Indicates whether originating calls using specified Pinhole digit patterns are
 * permitted.
 */
class OutgoingPinholeDigitPlanDigitPatternOriginatingPermission
{

    /**
     * @ElementName digitPatternName
     * @Type string
     * @var string|null
     */
    private $digitPatternName = null;

    /**
     * @ElementName permission
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanOriginatingPermission
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanOriginatingPermission|null
     */
    private $permission = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanOriginatingPermission
     */
    public function getPermission()
    {
        return $this->permission instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->permission;
    }

    /**
     * Setter for permission
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanOriginatingPermission $permission
     * @return $this
     */
    public function setPermission(\CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanOriginatingPermission $permission)
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

