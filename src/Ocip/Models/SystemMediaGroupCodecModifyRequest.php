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
 * @Groups [{"id":"610f84d3e188f0477c3ae1a82ee036da:10127","type":"sequence"}]
 */
class SystemMediaGroupCodecModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @Type string
     * @Group 610f84d3e188f0477c3ae1a82ee036da:10127
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName codecName
     * @Type string
     * @Group 610f84d3e188f0477c3ae1a82ee036da:10127
     * @var string|null
     */
    private $codecName = null;

    /**
     * @ElementName codecWeight
     * @Type int
     * @Optional
     * @Group 610f84d3e188f0477c3ae1a82ee036da:10127
     * @var int|null
     */
    private $codecWeight = null;

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
     * Getter for codecName
     *
     * @return string
     */
    public function getCodecName()
    {
        return $this->codecName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->codecName;
    }

    /**
     * Setter for codecName
     *
     * @param string $codecName
     * @return $this
     */
    public function setCodecName($codecName)
    {
        $this->codecName = $codecName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCodecName()
    {
        $this->codecName = null;
        return $this;
    }

    /**
     * Getter for codecWeight
     *
     * @return int
     */
    public function getCodecWeight()
    {
        return $this->codecWeight instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->codecWeight;
    }

    /**
     * Setter for codecWeight
     *
     * @param int $codecWeight
     * @return $this
     */
    public function setCodecWeight($codecWeight)
    {
        $this->codecWeight = $codecWeight;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCodecWeight()
    {
        $this->codecWeight = null;
        return $this;
    }


}

