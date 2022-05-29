<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallParkGetInstancePagedSortedListResponse
 *
 * Response to the GroupCallParkGetInstancePagedSortedListRequest.
 *
 * @see GroupCallParkGetInstancePagedSortedListRequest
 * @Groups [{"id":"7a925e891158dfa3cb1319e045608894:346","type":"sequence"}]
 */
class GroupCallParkGetInstancePagedSortedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName name
     * @Type string
     * @Array
     * @Optional
     * @Group 7a925e891158dfa3cb1319e045608894:346
     * @MinLength 1
     * @MaxLength 80
     * @var string[]
     */
    protected $name = array(
        
    );

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

