<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMediaGroupCodecModifyRequest
 *
 * Request to modify a media associated with a media group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemMediaGroupCodecModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName codecName
     * @var string|null
     */
    private $codecName = null;

    /**
     * @ElementName codecWeight
     * @var int|null
     */
    private $codecWeight = null;

    /**
     * Getter for name
     *
     * @ElementName name
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @ElementName name
     * @param string|null $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Getter for codecName
     *
     * @ElementName codecName
     * @return string|null
     */
    public function getCodecName()
    {
        return $this->codecName;
    }

    /**
     * Setter for codecName
     *
     * @ElementName codecName
     * @param string|null $codecName
     * @return $this
     */
    public function setCodecName($codecName)
    {
        $this->codecName = $codecName;
        return $this;
    }

    /**
     * Getter for codecWeight
     *
     * @ElementName codecWeight
     * @return int|null
     */
    public function getCodecWeight()
    {
        return $this->codecWeight;
    }

    /**
     * Setter for codecWeight
     *
     * @ElementName codecWeight
     * @param int|null $codecWeight
     * @return $this
     */
    public function setCodecWeight($codecWeight)
    {
        $this->codecWeight = $codecWeight;
        return $this;
    }


}

