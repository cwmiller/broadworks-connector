<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringProfileGetRequest16
 *
 * Get an existing Communication Barring Profile.
 *         The response is either a SystemCommunicationBarringProfileGetResponse16
 *         or an ErrorResponse.
 *
 * @see SystemCommunicationBarringProfileGetResponse16
 * @see ErrorResponse
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:25593","type":"sequence"}]
 */
class SystemCommunicationBarringProfileGetRequest16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName name
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:25593
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

