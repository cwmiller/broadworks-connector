<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringProfileGetRequest19sp1
 *
 * Get an existing Communication Barring Profile.
 *         The response is either a SystemCommunicationBarringProfileGetResponse19sp1
 *         or an ErrorResponse.
 *         
 *         Replaced by: SystemCommunicationBarringProfileGetRequest19sp1V2 in AS data mode
 *
 * @see SystemCommunicationBarringProfileGetResponse19sp1
 * @see ErrorResponse
 * @see SystemCommunicationBarringProfileGetRequest19sp1V2
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:9526","type":"sequence"}]
 */
class SystemCommunicationBarringProfileGetRequest19sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName name
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:9526
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $name = null;

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
}

