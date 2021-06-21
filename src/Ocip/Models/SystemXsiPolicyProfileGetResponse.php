<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemXsiPolicyProfileGetResponse
 *
 * Response to the SystemXsiPolicyProfileGetRequest.
 *         The response contains the Xsi policy profile.
 *
 * @see SystemXsiPolicyProfileGetRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:19562","type":"sequence"}]
 */
class SystemXsiPolicyProfileGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:19562
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName maxTargetSubscription
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:19562
     * @MinInclusive 1
     * @MaxInclusive 2147483647
     * @var int|null
     */
    private $maxTargetSubscription = null;

    /**
     * @ElementName default
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:19562
     * @var bool|null
     */
    private $default = null;

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

    /**
     * Getter for default
     *
     * @return bool
     */
    public function getDefault()
    {
        return $this->default instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->default;
    }

    /**
     * Setter for default
     *
     * @param bool $default
     * @return $this
     */
    public function setDefault($default)
    {
        $this->default = $default;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefault()
    {
        $this->default = null;
        return $this;
    }


}

