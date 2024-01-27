<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutgoingCallingPlanDigitPatternRedirectingPermission
 *
 * Indicates whether redirecting calls using specified digit patterns are permitted.
 *
 * @Groups [{"id":"a63afa661ee5c74f4700e562e88c66d0:1980","type":"sequence"}]
 */
class OutgoingCallingPlanDigitPatternRedirectingPermission
{
    /**
     * @ElementName digitPatternName
     * @Type string
     * @Group a63afa661ee5c74f4700e562e88c66d0:1980
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $digitPatternName = null;

    /**
     * @ElementName permission
     * @Type bool
     * @Group a63afa661ee5c74f4700e562e88c66d0:1980
     * @var bool|null
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
     * @return bool
     */
    public function getPermission()
    {
        return $this->permission instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->permission;
    }

    /**
     * Setter for permission
     *
     * @param bool $permission
     * @return $this
     */
    public function setPermission($permission)
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

