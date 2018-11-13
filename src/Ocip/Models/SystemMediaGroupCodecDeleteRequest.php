<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMediaGroupCodecDeleteRequest
 *
 * Request to delete media from a media group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemMediaGroupCodecDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @Type string
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName codecName
     * @Type string
     * @var string|null
     */
    private $codecName = null;

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


}

