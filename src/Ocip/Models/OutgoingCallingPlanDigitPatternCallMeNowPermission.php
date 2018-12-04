<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutgoingCallingPlanDigitPatternCallMeNowPermission
 *
 * Indicates whether Call Me Now calls using specified digit patterns are permitted.
 *
 * @Groups [{"id":"8366f5f5d1fbfb9742236aba282c1dab:1885","type":"sequence"}]
 */
class OutgoingCallingPlanDigitPatternCallMeNowPermission
{

    /**
     * @ElementName digitPatternName
     * @Type string
     * @Group 8366f5f5d1fbfb9742236aba282c1dab:1885
     * @var string|null
     */
    private $digitPatternName = null;

    /**
     * @ElementName permission
     * @Type bool
     * @Group 8366f5f5d1fbfb9742236aba282c1dab:1885
     * @var bool|null
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

