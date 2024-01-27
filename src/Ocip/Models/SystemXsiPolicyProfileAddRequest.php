<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemXsiPolicyProfileAddRequest
 *
 * Add the system Xsi policy profile entry.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:19755","type":"sequence"}]
 */
class SystemXsiPolicyProfileAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName name
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:19755
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $name = null;

    /**
     * @ElementName level
     * @Type \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileLevel
     * @Group da582a1f8028404e70d260cf1f891033:19755
     * @var \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileLevel|null
     */
    protected $level = null;

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:19755
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $description = null;

    /**
     * @ElementName maxTargetSubscription
     * @Type int
     * @Group da582a1f8028404e70d260cf1f891033:19755
     * @MinInclusive 1
     * @MaxInclusive 2147483647
     * @var int|null
     */
    protected $maxTargetSubscription = null;

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }

    /**
     * Getter for level
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileLevel
     */
    public function getLevel()
    {
        return $this->level instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->level;
    }

    /**
     * Setter for level
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileLevel $level
     * @return $this
     */
    public function setLevel(\CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileLevel $level)
    {
        $this->level = $level;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLevel()
    {
        $this->level = null;
        return $this;
    }

    /**
     * Getter for description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDescription()
    {
        $this->description = null;
        return $this;
    }

    /**
     * Getter for maxTargetSubscription
     *
     * @return int
     */
    public function getMaxTargetSubscription()
    {
        return $this->maxTargetSubscription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxTargetSubscription;
    }

    /**
     * Setter for maxTargetSubscription
     *
     * @param int $maxTargetSubscription
     * @return $this
     */
    public function setMaxTargetSubscription($maxTargetSubscription)
    {
        $this->maxTargetSubscription = $maxTargetSubscription;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxTargetSubscription()
    {
        $this->maxTargetSubscription = null;
        return $this;
    }
}

