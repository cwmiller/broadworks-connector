<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMediaGroupGetListResponse
 *
 * Response to SystemMediaGroupGetListRequest.
 *         The response includes an array of media groups defined in the system.
 *
 * @see SystemMediaGroupGetListRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:11961","type":"sequence"}]
 */
class SystemMediaGroupGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName name
     * @Type string
     * @Array
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:11961
     * @MinLength 1
     * @MaxLength 80
     * @var string[]
     */
    protected $name = [
        
    ];

    /**
     * Getter for name
     *
     * @return string[]
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string[] $name
     * @return $this
     */
    public function setName(array $name)
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
     * Adder for name
     *
     * @param string $name
     * @return $this
     */
    public function addName(string $name)
    {
        $this->name[] = $name;
        return $this;
    }
}

